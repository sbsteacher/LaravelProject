<?php

namespace Database\Seeders;

use App\Models\Board;
use Illuminate\Database\Seeder;

// 팩토리를  돌린다.
class BoardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Board::factory(100)->create();
    }
}
