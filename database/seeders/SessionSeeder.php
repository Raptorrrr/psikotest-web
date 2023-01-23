<?php

namespace Database\Seeders;

use App\Models\Session;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sessions = [
            // CFIT
            [
                'type_id' => '1',
                'session' => '1',
                'time'  => '180',
                'count_answer' => '1',
                'is_import' => 1,
                'intro' => '<p>Pada SUBTES 1 Anda akan menemui beberapa susunan gambar dengan satu gambar yang hilang, tugas Anda adalah memilih 1 jawaban yang tepat diantara 6 kotak yang tersedia untuk melengkapi gambar tersebut. </p>
                <p>Perhatikan contoh di atas ini. </p>
                <p>Pada gambar pertama terdapat gambar seperti ranting pohon condong merebah dengan arah yang berbeda mulai dari kotak ke-1 hingga kotak ke-3, jadi pilihan yang tepat untuk melengkapi kotak kosong tersebut adalah C.</p>
                <p>Pada gambar kedua terdapat bagian hitam yang semakin lama makin turun kebawah seolah-olah seperti tirai yang diturunkan dari atas kebawah, jadi pilihan yang tepat untuk melengkapi kotak kosong selanjutnya adalah E.</p>
                <p>Pada gambar ketiga terdapat kelopak bunga yang semakin lama semakin bertambah jumlahnya dimulai dari atas ke kanan, jadi pilihan yang tepat untuk melengkapi kotak kosong selanjutnya adalah E.</p>'
            ],
            [
                'type_id' => '1',
                'session' => '2',
                'time'  => '240',
                'count_answer' => '2',
                'is_import' => 1,
                'Intro' => '<p>Pada SUBTES 2 terdapat 5 (lima) pilihan kotak, tugas Anda adalah memilih 2 kotak yang gambarnya berbeda dengan gambar kotak-kotak lainnya.</p>
                <p>Perhatikan contoh di atas.</p>
                <p>Pada gambar pertama terdapat 3 bentuk segitiga dan 2 bentuk segi empat, jadi pilihan yang tepat untuk contoh soal ini adalah B dan D.</p>
                <p>Pada gambar kedua terdapat 5 lingkaran, 3 lingkaran kosong dan 2 lingkaran terarsir, jadi pilihan yang tepat untuk contoh soal ini adalah C dan E.</p>'
            ],
            [
                'type_id' => '1',
                'session' => '3',
                'time'  => '180',
                'count_answer' => '1',
                'is_import' => 1,
                'intro' => '<p>Pada SUBTES 3 terdapat 1 kotak besar dengan 4 kotak kecil didalamnya, 3 kotak kecil memiliki gambar namun terdapat 1 kotak kecil yang hilang. Tugas Anda adalah memilih 1 jawaban yang tepat diantara 6 kotak yang tersedia untuk melengkapi gambar tersebut.</p>
                <p>Perhatikan contoh di atas.</p>
                <p>Pada gambar pertama terdapat 3 kotak kecil memiliki gambar garis miring terarsir dengan 1 kotak kecil kosong, jadi pilihan yang tepat untuk mengisi kotak kosong tersebut adalah B.</p>
                <p>Pada gambar kedua terdapat 3 kotak kecil memiliki gambar menyerupai ayam dengan 1 kotak kecil kosong, jadi pilihan yang tepat untuk mengisi kotak kosong tersebut adalah C.</p>
                <p>Pada gambar ketiga terdapat 3 kotak kecil memiliki lingkaran dengan 1 kotak kecil kosong, jadi pilihan yang tepat untuk mengisi kotak kosong tersebut adalah F.</p>'

            ],
            [
                'type_id' => '1',
                'session' => '4',
                'time'  => '150',
                'count_answer' => '1',
                'is_import' => 1,
                'intro' => '<p>Pada SUBTES 4 terdapat 1 kotak di sebelah kiri dan 5 kotak di sebelah kanan, pada kotak sebelah kiri terdapat titik yang berada pada gambar. Tugas Anda adalah memilih 1 jawaban yang tepat diantara 5 kotak di sebelah kanan yang mungkin diletakkan titik seperti gambar pada kotak di sebelah kiri. </p>
                <p>Perhatikan contoh di atas. </p>
                <p>Pada gambar pertama terdapat gambar bujur sangkar dan lingkaran pada kotak sebelah kiri dengan titik ditengahnya, pilihan paling tepat yang memungkinkan untuk diletakkan titik pada gambar sebelah kanan adalah C.</p>
                <p>Pada gambar kedua terdapat gambar bujur sangkar dan segitiga pada kotak sebelah kiri dengan titik di dalam segitiga dan di luar segi empat, pilihan paling tepat yang memungkinkan untuk diletakkan titik pada gambar sebelah kanan adalah D.</p>
                <p>Pada gambar ketiga terdapat gambar segitiga dan garis lengkung pada kotak sebelah kiri dengan titik di dalam segitiga dan diatas garis lengkung, pilihan paling tepat yang memungkinkan untuk diletakkan titik pada gambar sebelah kanan adalah B.</p>'
            ],
            // SKB
            [
                'type_id' => '2',
                'session' => '1',
                'time'  =>  '900',
                'count_answer' => '1',
                'intro' => '<p>Pada PSIKOTES 2 terdapat 3 SUBTES yang akan dikerjakan. Kerjakan tes dengan memilih angka, huruf, dan simbol yang hilang atau yang tidak terdapat pada kolom.</p>
                <p>Selamat Mengerjakan!</p>'
            ],
            [
                'type_id' => '2',
                'session' => '2',
                'time'  => '900',
                'count_answer' => '1',
                'intro' => '<p>Kerjakan tes dengan memilih angka, huruf, dan simbol yang hilang atau yang tidak terdapat pada kolom.</p>'
            ],
            [
                'type_id' => '2',
                'session' => '3',
                'time'  => '900',
                'count_answer' => '1',
                'intro' => '<p>Kerjakan tes dengan memilih angka, huruf, dan simbol yang hilang atau yang tidak terdapat pada kolom.</p>'
            ],
            // EPPS
            [
                'type_id' => '3',
                'session' => '1',
                'time'  => '1800',
                'count_answer' => '1',
                'intro' => '</p>Pada PSIKOTES 3 Anda akan membaca sejumlah pernyataan yang berpasangan mengenai berbagai hal yang mungkin menggambarkan diri Anda atau yang mungkin tidak menggambarkan diri Anda. Dalam pengerjaan tes ini tidak terdapat jawaban benar atau salah. Tugas Anda hanya  memilih salah satu yang lebih sesuai atau yang paling menggambarkan diri Anda, jika kedua pernyataan sama-sama menggambarkan diri Anda atau sama-sama tidak menggambarkan diri Anda, hendaknya Anda tetap memilih 1 pilihan yang paling sesuai dengan diri Anda dan pastikan tidak ada yang terlewat. </p>

                </p>Perhatikan contoh berikut.</p>
                </p>A : Saya bersusah hati bila gagal dalam sesuatu.</p>
                </p>B : Saya merasa gugup bila harus berbicara di depan orang banyak.</p>
                </p>Bila pernyataan A lebih sesuai dengan diri Anda maka hendaknya Anda memilih pilihan jawaban yang A, namun jika pernyataan B lebih sesuai dengan diri Anda maka hendaknya Anda memilih pilihan jawaban B</p>.
                </p>Selamat Mengerjakan!</p>'
            ]
        ];

        foreach ($sessions as $session) {
            Session::query()->create($session);
        };

        dump('Session : ' . Session::query()->count());
    }
}
