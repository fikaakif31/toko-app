<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class barang_models extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('barang_models')->insert([
            [
                    "kode_barang" => "S1",
                    "nama_barang" => "Sabun Shinzui Extract Jasmine and Floral 100gram",
                    "detail" => "Dapat membantu melembabkan dan mencerahkan kulit yang kusam",
                    "harga" => 15000,
                    "stock" => 23,
                    "foto" => "1.jpeg"
            ],

            [
                    "kode_barang" => "S2",
                    "nama_barang" => "Scarlett Whitening - Add 99 Get Random Mini Shower Scrub/Lotion",
                    "detail" => "Beli 1-3 Tebus 99 Get 1 Random Mini SS/Lotion. Beli 4 Tebus 99 Get 2 Random Mini SS/Lotion.",
                    "harga" => 57000,
                    "stock" => 12,
                    "foto" => "2.jpeg"
            ],

            [
                "kode_barang" => "S3",
                "nama_barang" => "Kojie San Skin Lightening Soap | Kojiesan Sabun Wajah Kojisan Sabun Pemutih Badan BPOM",
                "detail" => "Kojie San Skin Lightening Soap berfungsi untuk menghilangkan jerawat, bintik-bintik di wajah, pigmentasi kulit, daging kecil yang sering tumbuh di wajah dan leher.",
                "harga" => 12000,
                "stock" => 118,
                "foto" => "3.jpeg"
            ],

            [
                "kode_barang" => "S4",
                "nama_barang" => "HARMONY Mood Enhancer Fruity Refreshing Soap | Harmony Sabun Batang 70gr",
                "detail" => "Sabun ini merupakan produk sabun yang menawarkan kesegaran istimewa.",
                "harga" => 4000,
                "stock" => 88,
                "foto" => "4.jpg"
            ],
        ]);
    }
}
