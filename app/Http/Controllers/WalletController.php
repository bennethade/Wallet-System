<?php

namespace App\Http\Controllers;

use App\Models\Wallet;
use Illuminate\Http\Request;

class WalletController extends Controller
{
    public function index()
    {
        return Wallet::all();
    }

    public function show($id)
    {
        $wallet = Wallet::with('user', 'walletType')->findOrFail($id);
        return response()->json($wallet);
    }

    public function transfer(Request $request)
    {
        $request->validate([
            'sender_wallet_id' => 'required|exists:wallets,id',
            'receiver_wallet_id' => 'required|exists:wallets,id',
            'amount' => 'required|numeric|min:0.01',
        ]);

        $sender = Wallet::findOrFail($request->sender_wallet_id);
        $receiver = Wallet::findOrFail($request->receiver_wallet_id);
        $amount = $request->amount;

        if ($sender->balance < $amount) {
            return response()->json(['error' => 'Insufficient balance'], 400);
        }

        $sender->balance -= $amount;
        $receiver->balance += $amount;

        $sender->save();
        $receiver->save();

        return response()->json(['message' => 'Transfer successful']);
    }



}
