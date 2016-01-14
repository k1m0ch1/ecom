<?php

use Illuminate\Database\Seeder;
use Fzaninotto\Faker;
use App\Models\Book;

class AuthorSeeder extends Seeder{

    public function run(){

        Book::create(array(
            'author_id' => 1,
            'title' => 'Requiem',
            'isbn'=>'9780062014535',
            'price'=>'13.40',
            'cover'=>'requiem.jpg',
        ));

        Book::create(array(
            'author_id' => 4,
            'title' => 'Cintapuccino',
            'isbn'=>'9793600225',
            'price'=>'13.40',
            'cover'=>'cintapuccino.jpg',
        ));

        Book::create(array(
            'author_id' => 4,
            'title' => 'Beauty Case',
            'isbn'=>'9793600683',
            'price'=>'5.40',
            'cover'=>'beauty-case.jpg',
        ));

        Book::create(array(
            'author_id' => 4,
            'title' => 'Pintu Harmonika',
            'isbn'=>'9786029481204',
            'price'=>'5.40',
            'cover'=>'pintu-harmonika.jpg',
        ));

        Book::create(array(
            'author_id' => 4,
            'title' => 'Dari Datuk ke Sakura Emas',
            'isbn'=>'9792269827',
            'price'=>'5.40',
            'cover'=>'datuk.jpg',
        ));

        Book::create(array(
            'author_id' => 4,
            'title' => 'Pincess, Bajak Laut dan Alien',
            'isbn'=>'9786029481525',
            'price'=>'5.40',
            'cover'=>'pbla.jpg',
        ));

        Book::create(array(
            'author_id' => 5,
            'title' => 'Kambing Jantan: Sebuah Catatan Harian Pelajar Bodoh',
            'isbn'=>'9793600691',
            'price'=>'13.40',
            'cover'=>'kambing-jantan.jpg',
        ));

        Book::create(array(
            'author_id' => 5,
            'title' => 'Marmut Merah Jambu',
            'isbn'=>'9786028066648',
            'price'=>'5.40',
            'cover'=>'marmut-merah-jambu.jpg',
        ));

        Book::create(array(
            'author_id' => 5,
            'title' => 'Cinta Brontosaurus',
            'isbn'=>'9789797800598',
            'price'=>'5.40',
            'cover'=>'cinta-brontosaurus.jpg',
        ));

        Book::create(array(
            'author_id' => 5,
            'title' => 'Manusia Setengah Salmon',
            'isbn'=>'9789797805319',
            'price'=>'5.40',
            'cover'=>'manusia-setengah-salmon.jpg',
        ));

        Book::create(array(
            'author_id' => 5,
            'title' => 'Radikus Mankakus: Bukan Binatang Biasa',
            'isbn'=>'9789797801663',
            'price'=>'5.40',
            'cover'=>'radikus-mankakus.jpg',
        ));

        Book::create(array(
            'author_id' => 3,
            'title' => 'Tangkaplah Daku kau Kujitak',
            'isbn'=>'9789794030295',
            'price'=>'5.40',
            'cover'=>'tdkk.jpg',
        ));

        Book::create(array(
            'author_id' => 3,
            'title' => 'Makhluk Manis dalam Bis',
            'isbn'=>'9789794031490',
            'price'=>'13.40',
            'cover'=>'kambing-jantan.jpg',
        ));

        Book::create(array(
            'author_id' => 3,
            'title' => 'Sandal Jepit',
            'isbn'=>'9789794035948',
            'price'=>'5.40',
            'cover'=>'sandal-jepit.jpg',
        ));

        Book::create(array(
            'author_id' => 3,
            'title' => 'Lupus Kecil',
            'isbn'=>'9789794034620',
            'price'=>'5.40',
            'cover'=>'lupus-kecil.jpg',
        ));

        Book::create(array(
            'author_id' => 3,
            'title' => 'Bangun don, Lupus!',
            'isbn'=>'9789794034026',
            'price'=>'5.40',
            'cover'=>'bangun-dong-lupus.jpg',
        ));

        Book::create(array(
            'author_id' => 2,
            'title' => 'Laskar Pelangi',
            'isbn'=>'9789793062792',
            'price'=>'5.40',
            'cover'=>'laskar-pelangi.jpg',
        ));

        Book::create(array(
            'author_id' => 2,
            'title' => 'Sang Pemimpi',
            'isbn'=>'9789793062921',
            'price'=>'13.40',
            'cover'=>'sang-pemimpi.jpg',
        ));

        Book::create(array(
            'author_id' => 2,
            'title' => 'Edensor',
            'isbn'=>'9789791227025',
            'price'=>'5.40',
            'cover'=>'Edensor.jpg',
        ));
    }
}