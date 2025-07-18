<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class ExpenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('expenses')->insert([
            [
                'description' => 'Groceries',
                'category' => 'Food',
                'amount' => 45.90,
                'date' => Carbon::now()->subDays(1)->toDateString(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'description' => 'Gasoline',
                'category' => 'Transport',
                'amount' => 30.25,
                'date' => Carbon::now()->subDays(2)->toDateString(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'description' => 'Netflix Subscription',
                'category' => 'Entertainment',
                'amount' => 13.99,
                'date' => Carbon::now()->subDays(3)->toDateString(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
