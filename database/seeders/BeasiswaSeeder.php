<?php

namespace Database\Seeders;

use App\Models\Beasiswa;
use Illuminate\Database\Seeder;
use Carbon\Carbon;



class BeasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Beasiswa::create([
            'nama' => 'Beasiswa Bank Indonesia',
            'penyelenggara' => 'Bank Indonesia',
            'deadline' => new Carbon(),
            'sasaran' => 'Mahasiswa Semester Genap',
            'detail' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis adipisci laboriosam tempora. Provident praesentium labore necessitatibus, vitae voluptatibus ipsum ab accusamus molestias perferendis distinctio illum, atque, sed iure? Fugiat, voluptates.',
            'gambar' => 'assets/img/portofolio/portofolio-1.jpg',
            'ips' => '3.2',
            'booklet' => 'www.pens.ac.id',
        ]);
        Beasiswa::create([
            'nama' => 'Beasiswa Bank BRI',
            'penyelenggara' => 'BRI',
            'deadline' => new Carbon(),
            'sasaran' => 'Mahasiswa Semester Genap',
            'detail' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis adipisci laboriosam tempora. Provident praesentium labore necessitatibus, vitae voluptatibus ipsum ab accusamus molestias perferendis distinctio illum, atque, sed iure? Fugiat, voluptates.',
            'gambar' => 'assets/img/portofolio/portofolio-1.jpg',
            'ips' => '3.2',
            'booklet' => 'www.pens.ac.id',
        ]);
    }
}
