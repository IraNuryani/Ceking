<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Artikel;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::factory(3)->create();
        // User::create([
        //     'name' => 'Ira Nuryani',
        //     'username' => 'iraNur',
        //     'email' => 'iranuryani@gmail.com',
        //     'password' => bcrypt('123456')
        // ]);
        // User::create([
        //     'name' => 'Amanda Fitri',
        //     'username' => 'amanda12',
        //     'email' => 'amanda@gmail.com',
        //     'password' => bcrypt('123456')
        // ]);
        // User::create([
        //     'name' => 'Putri Maulana',
        //     'username' => 'puputri',
        //     'email' => 'puputri@gmail.com',
        //     'password' => bcrypt('123456')
        // ]);

        // Artikel::factory(25)->create();

        $data = [
            [
                'title' => 'Cara Mencegah Stunting agar Anak Tumbuh Tinggi dan Sehat',
                'slug' => 'cara-mencegah-stunting-agar-anak-tumbuh-tinggi-dan-sehat',
                'excerpt' => "Stunting adalah gangguan yang terjadi pada anak-anak dan berpengaruh terhadap pertumbuhan mereka. Sebagian dari Anda mungkin masih cukup asing dengan istilah ini, namun kasus stunting cukup umum terjadi di Indonesia. \n\n 
                
                Stunting adalah salah satu jenis masalah kesehatan anak akibat gizi buruk, terutama bila berlangsung dalam jangka panjang. Kondisi ini bisa jadi disebabkan oleh malnutrisi pada ibu hamil atau semasa anak dalam masa pertumbuhan.",
                'body' => "Stunting adalah gangguan yang terjadi pada anak-anak dan berpengaruh terhadap pertumbuhan mereka. Sebagian dari Anda mungkin masih cukup asing dengan istilah ini, namun kasus stunting cukup umum terjadi di Indonesia. \n\n
                Stunting adalah salah satu jenis masalah kesehatan anak akibat gizi buruk, terutama bila berlangsung dalam jangka panjang. Kondisi ini bisa jadi disebabkan oleh malnutrisi pada ibu hamil atau semasa anak dalam masa pertumbuhan.\n\n
                Ciri-ciri paling umum yang terlihat ketika anak mengalami stunting adalah berperawakan lebih pendek dibandingkan anak seusianya. Tetapi, pada dasarnya postur tubuh anak dipengaruhi oleh banyak faktor. Agar lebih jelas, simak pembahasan di bawah ini sampai tuntas.\n\n 
                Apa itu Stunting?\n\n  
                Stunting adalah kondisi yang ditandai dengan kurangnya tinggi badan anak apabila dibandingkan dengan anak-anak seusianya. Sederhananya, stunting merupakan sebutan bagi gangguan pertumbuhan pada anak.\n\n 
                Penyebab utama dari stunting adalah kurangnya asupan nutrisi selama masa pertumbuhan anak. Banyak yang tidak menyadari bahwa tinggi pendeknya anak bisa menjadi tanda adanya masalah gizi kronis.\n\n
                Perlu diingat bahwa anak pendek belum tentu mengalami stunting. Namun anak yang mengidap stunting pasti berperawakan pendek. Anak dengan asupan gizi terbatas sejak kecil dan telah berlangsung lama berisiko mengalami pertumbuhan yang terhambat.\n\n
                Menurut WHO, suatu negara dikatakan memiliki masalah stunting bila kasusnya mencapai angka di atas 20%. Sementara, di Indonesia, berdasarkan data Kemenkes pada tahun 2021, kasus balita stunting di Indonesia sebanyak 24,4% sehingga termasuk dalam masalah yang perlu ditangani.\n\n
                Penyebab Stunting \n\n
                Stunting merupakan masalah kesehatan yang sudah ada sejak lama, seperti gizi buruk, terserang infeksi berkali-kali, kelahiran prematur, dan berat badan lahir rendah.\n\n
                Namun, penyebab stunting yang paling banyak adalah karena kekurangan gizi. Maka dari itu, Anda sebagai orang tua harus tahu bagaimana cara mengatasi susah makan pada anak yang terkadang menjadi masalah umum pada anak-anak, khususnya balita.\n\n
                Terdapat dua poin penting yang menjadi faktor utama terjadinya stunting pada anak, di antaranya yaitu:\n\n
                Kurangnya Asupan Gizi pada Ibu Selama Hamil\n\n
                Organisasi Kesehatan Dunia menyatakan bahwa sekitar 20% kasus stunting terjadi sejak anak berada dalam kandungan. Hal ini dapat terjadi akibat maka\n\n
                Akhirnya, pertumbuhan janin dalam kandungan mulai mengalami hambatan dan terus berlangsung hingga setelah kelahiran. Maka dari itu, penting memastikan ibu mengonsumsi makanan yang bergizi selama hamil.\n\n
                Kebutuhan Nutrisi Anak Tidak Tercukupi\n\n
                Kondisi ini bisa terjadi setelah kelahiran, tepatnya di saat anak di bawah usia dua tahun namun kebutuhan asupan gizinya tidak terpenuhi. Asupan yang dibutuhkan tersebut meliputi ASI dan MPASI (makanan pendamping ASI).\n\n
                Selain itu, kurangnya asupan makanan juga bisa menjadi salah satu faktor penyebab stunting, khususnya makanan yang kaya akan protein, mineral zinc, serta zat besi yang penting bagi anak di usia balita.\n\n
                Penyebab Lainnya \n\n
                Selain dari dua poin utama di atas, adapun beberapa penyebab stunting adalah sebagai berikut:\n\n
                Kurangnya pengetahuan ibu terhadap pentingnya pemenuhan gizi sebelum hamil, saat hamil, dan setelah melahirkan.
                Kurangnya persediaan air bersih dan sanitasi.
                Berat badan ibu tidak naik selama hamil atau kenaikan berat badan ibu kurang dari nilai ideal.
                Terbatasnya akses pelayanan kesehatan.
                Anak menderita penyakit yang menghalangi penyerapan nutrisi.\n\n
                Ciri-Ciri Anak Mengalami Stunting \n\n
                Anak yang berperawakan pendek tidak serta-merta mengalami stunting. Balita dapat dikatakan stunting apabila tinggi badannya berada di bawah kisaran normal dari standar tinggi badan anak berdasarkan usia pada dua kali pemeriksaan berturut-turut.\n\n  
                Selain perawakan tubuhnya yang pendek, adapun ciri-ciri lain dari stunting adalah sebagai berikut:\n\n
                Tumbuh kembangnya lambat
                Wajah tampak lebih muda dari anak seusianya
                Berat badan tidak naik bahkan akan cenderung menurun
                Kemampuan fokus dan memori belajarnya tidak baik
                Anak cenderung lebih pendiam
                Fase pertumbuhan gigi pada anak melambat
                Dalam jangka panjang, bagi anak perempuan berpotensi telat menstruasi pertama
                Anak lebih mudah terserang/terinfeksi berbagai penyakit\n\n
                Stunting adalah gagal tumbuh akibat kurangnya asupan gizi, di mana dalam jangka pendek dapat menyebabkan terganggunya perkembangan otak, metabolisme, dan pertumbuhan fisik pada anak.\n\n
                Sementara, dalam jangka panjang, dampak stunting adalah sebagai berikut:\n\n
                Kesulitan belajar
                Penyakit jantung dan pembuluh darah
                Kemampuan perkembangan kognitif menurun
                Meningkatkan risiko obesitas pada anak. Ketahui bahaya obesitas pada anak dan remaja di sini.
                Daya tahan tubuh melemah sehingga mudah terinfeksi penyakit\n\n
                Pengobatan Stunting\n\n
                
                Pengobatan stunting dapat disesuaikan dengan mengetahui penyebabnya, misalnya dengan memperbaiki nutrisi, pemberian suplemen, atau menerapkan gaya hidup sehat. Berikut beberapa upaya yang biasa dilakukan dokter dalam menangani stunting.\n\n
                Mengobati penyakit yang mendasarinya.
                Menyarankan dan memberikan nutrisi tambahan.
                Memberikan suplemen, umumnya berupa vitamin A, zat besi, zinc, dan yodium.\n\n
                Pencegahan Stunting \n\n
                Cara mencegah stunting dapat dilakukan dengan menerapkan beberapa upaya berikut ini:\n\n
                Memastikan anak makan buah dan sayur yang sehat
                Mencukupi asupan gizi sejak pembuahan sel telur hingga anak berusia 2 tahun
                Memberikan ASI eksklusif hingga bayi berumur 6 bulan
                Mengusahakan anak mendapatkan imunisasi lengkap \n\n
                Demikian penjelasan mengenai pengertian stunting, penyebab, ciri-ciri, pengobatan, hingga bagaimana cara mencegahnya. Singkatnya, stunting adalah masalah kesehatan anak yang disebabkan oleh kekurangan gizi sehingga mengakibatkan pertumbuhannya terganggu.\n\n
                Namun, Anda tidak dapat menggeneralisasi setiap anak yang berperawakan pendek selalu mengalami stunting. Postur tubuh dapat dipengaruhi oleh gen dan juga hormon. Anak dengan stunting sebagian besar bertubuh pendek, namun tidak semua anak berperawakan pendek disebabkan oleh stunting.",
                'user_id' => 5
            ]
            // Tambahkan data post lainnya di sini
        ];
        foreach ($data as $post) {
            $formattedText = "<p>" . nl2br($post['body']) . "</p>";

            Artikel::create([
                'title' => $post['title'],
                'slug' => $post['slug'],
                'excerpt' => $post['excerpt'],
                'body' => $formattedText,
                'user_id' => $post['user_id']
            ]);
        }
        

    }
}
