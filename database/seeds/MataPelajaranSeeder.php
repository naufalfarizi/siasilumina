<?php

use Illuminate\Database\Seeder;

class MataPelajaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mata_pelajarans')->insert([
            'nama' => 'Matematika',
            'poin' => '1',
        ]);
        DB::table('mata_pelajarans')->insert([
            'nama' => 'Fisika',
            'poin' => '1',
        ]);
        DB::table('mata_pelajarans')->insert([
            'nama' => 'Biologi',
            'poin' => '1',
        ]);
        DB::table('mata_pelajarans')->insert([
            'nama' => 'Kimia',
            'poin' => '1',
        ]);
        DB::table('mata_pelajarans')->insert([
            'nama' => 'Bahasa Indonesia',
            'poin' => '2',
        ]);
        DB::table('mata_pelajarans')->insert([
            'nama' => 'Bahasa Inggris',
            'poin' => '2',
        ]);
        DB::table('mata_pelajarans')->insert([
            'nama' => 'Sejarah',
            'poin' => '2',
        ]);
        DB::table('mata_pelajarans')->insert([
            'nama' => 'Geografi',
            'poin' => '2',
        ]);
        DB::table('mata_pelajarans')->insert([
            'nama' => 'PKn',
            'poin' => '2',
        ]);
        DB::table('mata_pelajarans')->insert([
            'nama' => 'Agama Islam',
            'poin' => '3',
        ]);
        DB::table('mata_pelajarans')->insert([
            'nama' => 'Bahasa Arab',
            'poin' => '3',
        ]);
    }
}
