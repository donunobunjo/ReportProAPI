<?php

use Illuminate\Database\Seeder;
use App\Subject;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subject::create([
            'subject' => 'MATHEMETICS',
        ]);

        Subject::create([
            'subject' => 'ENGLISH',
        ]);
    }
}
