<?php

namespace App\Http\Controllers;

use App\Models\Wallet;
use Illuminate\Http\Request;

class WalletController extends Controller
{
    public function index()
    {
        //Fetch all Wallets
        return Wallet::all();
    }

    public function show($id)
    {
        //Fetch a Single Wallet's details with it's id
        $wallet = Wallet::with('user', 'walletType')->findOrFail($id);
        return response()->json($wallet);
    }

    public function transfer(Request $request)
    {
        // Validate the request parameters
        $request->validate([
            'sender_wallet_id' => 'required|exists:wallets,id',
            'receiver_wallet_id' => 'required|exists:wallets,id',
            'amount' => 'required|numeric|min:0.01',
        ]);


        // Fetch sender and receiver wallets
        $sender = Wallet::findOrFail($request->sender_wallet_id);
        $receiver = Wallet::findOrFail($request->receiver_wallet_id);
        $amount = $request->amount;


        // Check if sender has enough balance
        if ($sender->balance < $amount) {
            return response()->json(['error' => 'Insufficient balance'], 400);
        }


        // Perform the transfer
        $sender->balance -= $amount;
        $receiver->balance += $amount;


        // Save the updated balances
        $sender->save();
        $receiver->save();


        // Return success response
        return response()->json(['message' => 'Transfer successful']);
    }



}
