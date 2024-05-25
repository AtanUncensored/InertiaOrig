<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder

{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genres = [
            [
                'name' => 'Action'
            ],
            [
                'name' =>  'Aventure'
            ],
            [
                'name' => 'Comedy'
            ],
            [
                'name' => 'Drama'
            ],
            [
                'name' => 'Fantasy'
            ],
            [
                'name' => 'Horror'
            ],
            [
                'name' => 'Romance'
            ],
            [
                'name' => 'Science Fiction'
            ],
            [
                'name' => 'Thriller'
            ],
            [
                'name' =>  'Western'
            ]
        ];

        foreach ($genres as $genreName) {
            Genre::create( $genreName);
        }
    }
}
