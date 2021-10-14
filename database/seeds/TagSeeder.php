<?php

use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
          'name' => 'sekolah baru',
          'slug' => Str::slug('sekolah baru')
        ]);
    }
}
