<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Wallet;
use App\Models\WalletType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WalletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $wallets = [
            [
                'user_id' => User::where('email', 'benard@wallet.com')->first()->id,
                'wallet_type_id' => WalletType::where('name', 'Travel Wallet')->first()->id,
                'balance' => 200.00
            ],
            [
                'user_id' => User::where('email', 'john@example.com')->first()->id,
                'wallet_type_id' => WalletType::where('name', 'Savings Wallet')->first()->id,
                'balance' => 900.00
            ],
            [
                'user_id' => User::where('email', 'john@example.com')->first()->id,
                'wallet_type_id' => WalletType::where('name', 'Checking Wallet')->first()->id,
                'balance' => 180.00
            ],
            [
                'user_id' => User::where('email', 'david@wallet.com')->first()->id,
                'wallet_type_id' => WalletType::where('name', 'Emergency Wallet')->first()->id,
                'balance' => 1000.00
            ],
            [
                'user_id' => User::where('email', 'jane@example.com')->first()->id,
                'wallet_type_id' => WalletType::where('name', 'Investment Wallet')->first()->id,
                'balance' => 2000.00
            ],
            [
                'user_id' => User::where('email', 'jane@example.com')->first()->id,
                'wallet_type_id' => WalletType::where('name', 'Travel Wallet')->first()->id,
                'balance' => 300.00
            ],
            [
                'user_id' => User::where('email', 'diala@wallet.com')->first()->id,
                'wallet_type_id' => WalletType::where('name', 'Emergency Wallet')->first()->id,
                'balance' => 700.00
            ],
        ];

        foreach ($wallets as $wallet) {
            Wallet::create($wallet);
        }
    }
}
