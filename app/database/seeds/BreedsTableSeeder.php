<?php

class BreedsTableSeeder extends Seeder {
    public function run(){
        DB::table('breeds') -> insert(array(
            array('id' => 1, 'name' => 'Domestic'),
            array('id' => 2, 'name' => 'Persian'),
            array('id' => 3, 'name' => 'Siamese'),
            array('id' => 4, 'name' => 'Abyssinian'),
        ));

        DB::table('cats') -> insert(array(
            array('id' => 1, 'name' => 'Sefina', 'date_of_birth' => '2010-10-1', 'breed_id' => 2),
            array('id' => 2, 'name' => 'Zefer', 'date_of_birth' => '2014-8-9', 'breed_id' => 1),
            array('id' => 3, 'name' => 'Mastro', 'date_of_birth' => '2009-7-2', 'breed_id' => 3),
        ));
    }
}