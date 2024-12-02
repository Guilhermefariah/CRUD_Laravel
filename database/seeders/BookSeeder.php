<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Models\ModelBook;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(ModelBook $book): void
    {
        $book->create([
            'title'=>'O Senhor dos Aneis',
            'pages'=>'300',
            'price'=>'100',
            'id_user'=>'1',
        ]);

        $book->create([
            'title'=>'Harry Potter',
            'pages'=>'500',
            'price'=>'200',
            'id_user'=>'2',
        ]);
    }
}
