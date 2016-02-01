<?php

use Illuminate\Database\Seeder;
use Fzaninotto\Faker;
use App\Models\Book;

class BookSeeder extends Seeder{

    public function run(){

        Book::create(array(
            'author_id' => 1,
            'penerbit_id'=>1,
            'title' => 'Requiem',
            'isbn'=>'9780062014535',
            'price'=>'60000',
            'cover'=>'requiem.jpg',
            'sinopsis'=>'Masa lalu sudah mati, tidak pernah ada lagi.<br/><br/>
Setelah menyelamatkan Julian dari hukuman mati, Lena dan para pemberontak melarikan diri ke Alam Liar. Namun pemerintah terang-terangan menyatakan perang dan Alam Liar bukan lagi tempat aman. Para Invalid diburu dan dibunuh. Hal terpenting sekarang adalah bertahan hidup, dan melawan… atau mati.
<br/><br/>
Sementara itu, Hana hidup nyaman tanpa cinta di Portland. Dia telah disembuhkan, dan akan menikahi gubernur muda. Namun bayangan Lena selalu menghantui. Jauh di dalam hati, Hana merasa bersalah atas pengkhianatan yang telah dia lakukan.
<br/><br/>
Requiem, puncak perjuangan melawan penguasa. Requiem, saksi pertemuan sepasang remaja yang pernah saling mencinta, pertemuan kembali seorang ibu dengan anak gadisnya, dan pertemuan kembali dua sahabat dari dua dunia berbeda. Tembok sudah dirobohkan, dunia harus siap menerima perubahan.
<br/><br/><br/>
Tentang Penulis
Memukau pembaca dengan debutnya Before I Fall, lalu disusuk dengan Delirium, buku pertama dari sebuah trilogi yang memacu jantung. Oliver Lauren juga penulis novel Liesl and Po yang edisi Indonesianya telah diterbitkan Mizan Fantasi.
<br/>Kini, Lauren tinggal di Brooklyn, New York. Kunjungi websitenya di www.Laurenoliverbooks.com'
        ));

        Book::create(array(
            'author_id' => 4,
            'penerbit_id'=>1,
            'title' => 'Cintapuccino',
            'isbn'=>'9793600225',
            'price'=>'75000',
            'cover'=>'cintapuccino.jpg',
            'sinopsis' => '',
        ));

        Book::create(array(
            'author_id' => 4,
            'penerbit_id'=>1,
            'title' => 'Beauty Case',
            'isbn'=>'9793600683',
            'price'=>'50000',
            'cover'=>'beauty-case.jpg',
            'sinopsis'=>'Beauty Case berkisah tentang kecantikan sebagai alat politik, kecantikan yang sering dijadikan alat dalam menggapai sesuatu, bahkan secara tak sadar oleh yang mempunyai anugerah tersebut, yaitu perempuan.
<br/><br/>
Tapi ketika kamu harus berhadapan dengan sosok yang nggak cuma memenuhi semua standar kecantikan yang diciptakan oleh industri kecantikan dunia dan bahkan melebihi, menciptakan definisi baru tentang kecantikan itu sendiri, dalam persaingan memperebutkan cinta seorang eligible bachelor, seorang pengusaha muda yang sedang membangun karier politiknya, yang keponakan orang sangat penting, HASLAN NASUTION, pilihannya tinggal dua. Tetap berharap akan datangnya keajaiban dengan kemungkinan 99:1 dan semua orang berpikir kamu gila dan tidak realistis, atau mundur total sebelum hancur karena harusnya kamu tahu diri bahwa at the very first place, ini adalah the real KONTES KECANTIKAN where the most beautiful girl gets the best and the most qualified man. Or should I say...the most ELIGIBLE man?
<br/>
Icha menyodorkan pemikiran perempuan yang umum dalam melihat laki-laki, yaitu laki-laki top harus mendapat pasangan perempuan yang top juga dalam bidang yang berbeda tentunya, selain cantik secara fisik juga melekat tingkat ketenaran, karir, fashion dan atribut lain yang kita kenal sekarang sebagai kecantikan yang telah dipengaruhi produk industri.',
        ));

        Book::create(array(
            'author_id' => 4,
            'penerbit_id'=>1,
            'title' => 'Pintu Harmonika',
            'isbn'=>'9786029481204',
            'price'=>'55000',
            'cover'=>'pintu-harmonika.jpg',
            'sinopsis'=>'Dijual cepat: S U R G A!
<br/></br>
Punyakah kamu surga di Bumi, tempatmu merasa bebas, terlindungi dan… begitu bahagia hanya dengan berada di situ?
<br/></br>
Rizal, Juni, dan David menemukan surga lewat ketidaksengajaan; Buka pintu harmonika, berjalan mengikuti sinar matahari, dan temukan surga. Surga yang tersembunyi di belakang ruko tempat tinggal mereka.
<br/></br>
Walau mereka berbeda usia dan tidak juga lantas bermain bersama, surga membuat mereka menemukan bukan hanya sahabat, tetapi juga saudara dan keluarga. Ketika surga mereka akan berakhir, semangat mempertahankannya membawa mereka pada sebuah petualangan lewat tengah malam. Apa pula hubungannya dengan pencitraan Rizal, masalah Juni di sekolah dan bulu hitam misterius yang berpendar cantik temuan David serta suara-suara misterius di atap rukonya? (less)',
        ));

        Book::create(array(
            'author_id' => 4,
            'penerbit_id'=>1,
            'title' => 'Dari Datuk ke Sakura Emas',
            'isbn'=>'9792269827',
            'price'=>'57000',
            'cover'=>'datuk.jpg',
            'sinopsis'=> '',
            'sinopsis'=> '',
        ));

        Book::create(array(
            'author_id' => 4,
            'penerbit_id'=>2,
            'title' => 'Pincess, Bajak Laut dan Alien',
            'isbn'=>'9786029481525',
            'price'=>'35000',
            'cover'=>'pbla.jpg',
            'sinopsis'=> '',
        ));

        Book::create(array(
            'author_id' => 5,
            'penerbit_id'=>2,
            'title' => 'Kambing Jantan',
            'isbn'=>'9793600691',
            'price'=>'28000',
            'cover'=>'kambing-jantan.jpg',
            'sinopsis'=> '',
        ));

        Book::create(array(
            'author_id' => 5,
            'penerbit_id'=>2,
            'title' => 'Marmut Merah Jambu',
            'isbn'=>'9786028066648',
            'price'=>'67000',
            'cover'=>'marmut-merah-jambu.jpg',
            'sinopsis'=> '',
        ));

        Book::create(array(
            'author_id' => 5,
            'penerbit_id'=>2,
            'title' => 'Cinta Brontosaurus',
            'isbn'=>'9789797800598',
            'price'=>'88000',
            'cover'=>'cinta-brontosaurus.jpg',
            'sinopsis'=> '',
        ));

        Book::create(array(
            'author_id' => 5,
            'penerbit_id'=>2,
            'title' => 'Manusia Setengah Salmon',
            'isbn'=>'9789797805319',
            'price'=>'65000',
            'cover'=>'manusia-setengah-salmon.jpg',
            'sinopsis'=> '',
        ));

        Book::create(array(
            'author_id' => 5,
            'penerbit_id'=>3,
            'title' => 'Radikus Mankakus: Bukan Binatang Biasa',
            'isbn'=>'9789797801663',
            'price'=>'100000',
            'cover'=>'radikus-mankakus.jpg',
            'sinopsis'=> '',
        ));

        Book::create(array(
            'author_id' => 3,
            'penerbit_id'=>3,
            'title' => 'Tangkaplah Daku kau Kujitak',
            'isbn'=>'9789794030295',
            'price'=>'30000',
            'cover'=>'tdkk.jpg',
            'sinopsis'=> '',
        ));

        Book::create(array(
            'author_id' => 3,
            'penerbit_id'=>3,
            'title' => 'Makhluk Manis dalam Bis',
            'isbn'=>'9789794031490',
            'price'=>'20000',
            'cover'=>'kambing-jantan.jpg',
            'sinopsis'=> '',
        ));

        Book::create(array(
            'author_id' => 3,
            'penerbit_id'=>3,
            'title' => 'Sandal Jepit',
            'isbn'=>'9789794035948',
            'price'=>'25000',
            'cover'=>'sandal-jepit.jpg',
            'sinopsis'=> '',
        ));

        Book::create(array(
            'author_id' => 3,
            'penerbit_id'=>3,
            'title' => 'Lupus Kecil',
            'isbn'=>'9789794034620',
            'price'=>'65000',
            'cover'=>'lupus-kecil.jpg',
            'sinopsis'=> '',
        ));

        Book::create(array(
            'author_id' => 3,
            'penerbit_id'=>4,
            'title' => 'Bangun don, Lupus!',
            'isbn'=>'9789794034026',
            'price'=>'100000',
            'cover'=>'bangun-dong-lupus.jpg',
            'sinopsis'=> '',
        ));

        Book::create(array(
            'author_id' => 2,
            'penerbit_id'=>4,
            'title' => 'Laskar Pelangi',
            'isbn'=>'9789793062792',
            'price'=>'70000',
            'cover'=>'laskar-pelangi.jpg',
            'sinopsis'=> '',
        ));

        Book::create(array(
            'author_id' => 2,
            'penerbit_id'=>4,
            'title' => 'Sang Pemimpi',
            'isbn'=>'9789793062921',
            'price'=>'80000',
            'cover'=>'sang-pemimpi.jpg',
            'sinopsis'=> '',
        ));

        Book::create(array(
            'author_id' => 2,
            'penerbit_id'=>4,
            'title' => 'Edensor',
            'isbn'=>'9789791227025',
            'price'=>'100000',
            'cover'=>'Edensor.jpg',
            'sinopsis'=> '',
        ));
    }
}