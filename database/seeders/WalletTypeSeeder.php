<?php

namespace Database\Seeders;

use App\Models\WalletType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WalletTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $walletTypes = [
            [
                'name' => 'Savings Wallet',
                'min_balance' => 50.00,
                'monthly_interest_rate' => 0.5
            ],
            [
                'name' => 'Checking Wallet',
                'min_balance' => 100.00,
                'monthly_interest_rate' => 0.1
            ],
            [
                'name' => 'Investment Wallet',
                'min_balance' => 2000.00,
                'monthly_interest_rate' => 1.5
            ],
            [
                'name' => 'Emergency Wallet',
                'min_balance' => 1000.00,
                'monthly_interest_rate' => 0.3
            ],
            [
                'name' => 'Travel Wallet',
                'min_balance' => 400.00,
                'monthly_interest_rate' => 1.2
            ],
        ];

        foreach ($walletTypes as $type) {
            WalletType::create($type);
        }
    }
}
