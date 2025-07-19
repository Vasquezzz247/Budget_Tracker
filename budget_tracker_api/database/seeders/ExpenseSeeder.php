<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Expense;

class ExpenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //dummy user
        $user = User::create([
            'name' => 'Test User',
            'email' => 'testuser@example.com',
            'password' => Hash::make('password'),
            'role' => 'user',
        ]);

        $expenses = [
            [
                'description' => 'Groceries',
                'category' => 'Food',
                'amount' => 45.90,
                'date' => Carbon::now()->subDays(1)->toDateString(),
                'user_id' => $user->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'description' => 'Gasoline',
                'category' => 'Transport',
                'amount' => 30.25,
                'date' => Carbon::now()->subDays(2)->toDateString(),
                'user_id' => $user->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'description' => 'Netflix Subscription',
                'category' => 'Entertainment',
                'amount' => 13.99,
                'date' => Carbon::now()->subDays(3)->toDateString(),
                'user_id' => $user->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('expenses')->insert($expenses);
    }
}
