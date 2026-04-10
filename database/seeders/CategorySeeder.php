<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['id' => 1, 'name' => 'Food & Dining', 'icon' => '🍕', 'color' => '#FF6B6B', 'type' => 'expense'],
            ['id' => 2, 'name' => 'Transport', 'icon' => '🚗', 'color' => '#74B9FF', 'type' => 'expense'],
            ['id' => 3, 'name' => 'Shopping', 'icon' => '🛍️', 'color' => '#A29BFE', 'type' => 'expense'],
            ['id' => 4, 'name' => 'Bills & Utilities', 'icon' => '💡', 'color' => '#FDCB6E', 'type' => 'expense'],
            ['id' => 5, 'name' => 'Entertainment', 'icon' => '🎬', 'color' => '#FF9FF3', 'type' => 'expense'],
            ['id' => 6, 'name' => 'Health', 'icon' => '💊', 'color' => '#55E6C1', 'type' => 'expense'],
            ['id' => 7, 'name' => 'Education', 'icon' => '📚', 'color' => '#F8A5C2', 'type' => 'expense'],
            ['id' => 8, 'name' => 'Salary', 'icon' => '💰', 'color' => '#00B894', 'type' => 'income'],
            ['id' => 9, 'name' => 'Freelance', 'icon' => '💻', 'color' => '#00D2D3', 'type' => 'income'],
            ['id' => 10, 'name' => 'Investment', 'icon' => '📈', 'color' => '#6C5CE7', 'type' => 'income'],
            ['id' => 11, 'name' => 'Gift', 'icon' => '🎁', 'color' => '#FD79A8', 'type' => 'income'],
            ['id' => 12, 'name' => 'Other', 'icon' => '📦', 'color' => '#636E72', 'type' => 'expense'],
        ];

        foreach ($categories as $cat) {
            Category::updateOrCreate(['id' => $cat['id']], $cat);
        }
    }
}
