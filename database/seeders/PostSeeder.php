<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // DB::table('posts')->insert([
        //     'title' => 'Belajar Model Dengan Laravel',
        //     'slug' => ' belajar-model-dengan-laravel',
        //     'image' => 'https://via.placeholder.com/640x480.png/00ff77?text=Belajar Model',
        //     'content' => 'Belajar Laravel itu menyenangkan',
        //     'draft' => 0
        //     ]);
        //------------------------------------------------------------------------

        //--------------------------insert data barang----------------------------
        // DB::table('barang')->insert([
        //     'title' => 'Meja Belajar',
        //     'slug' => ' meja-belajar',
        //     'image' => 'https://www.sinarmebel.com/wp-content/uploads/2020/01/Meja-Belajar.jpg',
        //     'content' => 'Meja Belajar',
        //     'draft' => 0
        //     ]);
        //-----------------------------------------------------------------------

        //----------------------insert data pelanggan--------------------------
        // DB::table('pelanggan')->insert([
        //     'nama' => 'Ridho',
        //     'alamat' => 'malang',
        //     'telp' => '085311891925'
        //     ]);
        // DB::table('pelanggan')->insert([
        //     'nama' => 'zulfan',
        //     'alamat' => 'banyuwangi',
        //     'telp' => '081234567890'
        //     ]);
        //----------------------------------------------------------------------

    //    DB::table('posts')->insert([
    //      'title' => 'Belajar Model Dengan Laravel',
    //        'slug' => ' belajar-model-dengan-laravel',
    //        'image' => 'https://via.placeholder.com/640x480.png/00ff77?text=Belajar Model',
    //        'content' => 'Belajar Laravel itu menyenangkan',
    //       'draft' => 0
    //       ]);

    // DB::table('Pegawai')->insert([
    //           'nama' => 'zulfan',
    //           'alamat' => 'banyuwangi',
    //           'no hp' => '081234567890'
    //            ]);
               
    // DB::table('Supplier')->insert([
    //         'nama' => 'ridho',
    //         'alamat' => 'banyuwangi',
    //         'no hp' => '089876543210',
    //              ]);

    }
}
