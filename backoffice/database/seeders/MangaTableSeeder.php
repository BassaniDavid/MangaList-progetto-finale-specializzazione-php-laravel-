<?php

namespace Database\Seeders;

use App\Models\Manga;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MangaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

$mangalist = [
    ['titolo'=>'One Piece','autore'=>'Eiichiro Oda','descrizione'=>'...','url_copertina'=>'https://onepiece.fandom.com/wiki/File:Volume_1.png','editore'=>'Shueisha','status'=>'in corso','numero_volumi'=>105,'data_inizio'=>'1997-07-22','valutazione'=>9.7],
    ['titolo'=>'Dragon Ball','autore'=>'Akira Toriyama','descrizione'=>'...','url_copertina'=>'https://upload.wikimedia.org/wikipedia/en/7/7b/Dragon_Ball_vol_1.jpg','editore'=>'Shueisha','status'=>'completato','numero_volumi'=>42,'data_inizio'=>'1984-11-20','valutazione'=>9.3],
    ['titolo'=>'Attack on Titan','autore'=>'Hajime Isayama','descrizione'=>'...','url_copertina'=>'https://upload.wikimedia.org/wikipedia/en/6/67/Attack_on_Titan_volume_1_cover.jpg','editore'=>'Kodansha','status'=>'completato','numero_volumi'=>34,'data_inizio'=>'2009-09-09','valutazione'=>9.1],
    ['titolo'=>'Fruits Basket','autore'=>'Natsuki Takaya','descrizione'=>'...','url_copertina'=>'https://upload.wikimedia.org/wikipedia/en/5/54/Fruits_Basket_vol_01.jpg','editore'=>'Hakusensha','status'=>'completato','numero_volumi'=>23,'data_inizio'=>'1998-07-19','valutazione'=>8.9],
    ['titolo'=>'Sakamoto Days','autore'=>'Yuto Suzuki','descrizione'=>'...','url_copertina'=>'https://read.sakurajima.cloud/covers/sakamoto_days_volume_1.jpg','editore'=>'Shueisha','status'=>'in corso','numero_volumi'=>21,'data_inizio'=>'2020-11-11','valutazione'=>8.5],
    ['titolo'=>'Naruto','autore'=>'Masashi Kishimoto','descrizione'=>'...','url_copertina'=>'https://artsandculture.google.com/asset/NARUTO-the-cover-of-vol-1-c-masashi-sugumoto-scott-shueisha','editore'=>'Shueisha','status'=>'completato','numero_volumi'=>72,'data_inizio'=>'1999-09-21','valutazione'=>9.2],
    ['titolo'=>'Bleach','autore'=>'Tite Kubo','descrizione'=>'...','url_copertina'=>'https://manga-news.com/__data/assets/image/0008/123456/bleach_vol1.jpg','editore'=>'Shueisha','status'=>'completato','numero_volumi'=>74,'data_inizio'=>'2001-08-07','valutazione'=>9.0],
    ['titolo'=>'My Hero Academia','autore'=>'Kohei Horikoshi','descrizione'=>'...','url_copertina'=>'https://upload.wikimedia.org/wikipedia/en/5/5a/My_Hero_Academia_Volume_1.jpg','editore'=>'Shueisha','status'=>'in corso','numero_volumi'=>37,'data_inizio'=>'2014-07-07','valutazione'=>8.8],
    ['titolo'=>'Jujutsu Kaisen','autore'=>'Gege Akutami','descrizione'=>'...','url_copertina'=>'https://upload.wikimedia.org/wikipedia/en/d/da/Jujutsu_Kaisen_volume_1_cover.jpg','editore'=>'Shueisha','status'=>'in corso','numero_volumi'=>23,'data_inizio'=>'2018-03-05','valutazione'=>8.7],
    ['titolo'=>'Demon Slayer','autore'=>'Koyoharu Gotouge','descrizione'=>'...','url_copertina'=>'https://upload.wikimedia.org/wikipedia/en/0/0b/Demon_Slayer_volume_1_cover.jpg','editore'=>'Shueisha','status'=>'completato','numero_volumi'=>23,'data_inizio'=>'2016-02-15','valutazione'=>9.1],
    ['titolo'=>'Hunter x Hunter','autore'=>'Yoshihiro Togashi','descrizione'=>'...','url_copertina'=>'https://upload.wikimedia.org/wikipedia/en/4/4c/Hunter_x_Hunter_vol1.jpg','editore'=>'Shueisha','status'=>'in corso','numero_volumi'=>36,'data_inizio'=>'1998-03-16','valutazione'=>9.0],
    ['titolo'=>'Fullmetal Alchemist','autore'=>'Hiromu Arakawa','descrizione'=>'...','url_copertina'=>'https://upload.wikimedia.org/wikipedia/en/4/4e/Fullmetal_Alchemist_Volume_1.jpg','editore'=>'Square Enix','status'=>'completato','numero_volumi'=>27,'data_inizio'=>'2001-07-12','valutazione'=>9.2],
    ['titolo'=>'Death Note','autore'=>'Tsugumi Ohba & Takeshi Obata','descrizione'=>'...','url_copertina'=>'https://upload.wikimedia.org/wikipedia/en/6/6f/Death_Note_Vol_01.jpg','editore'=>'Shueisha','status'=>'completato','numero_volumi'=>12,'data_inizio'=>'2003-12-01','valutazione'=>9.0],
    ['titolo'=>'Tokyo Ghoul','autore'=>'Sui Ishida','descrizione'=>'...','url_copertina'=>'https://upload.wikimedia.org/wikipedia/en/thumb/1/1c/Tokyo_Ghoul_volume_1.jpg','editore'=>'Shueisha','status'=>'completato','numero_volumi'=>14,'data_inizio'=>'2011-09-08','valutazione'=>8.4],
    ['titolo'=>'Fairy Tail','autore'=>'Hiro Mashima','descrizione'=>'...','url_copertina'=>'https://upload.wikimedia.org/wikipedia/en/3/3b/Fairy_Tail_Volume_1.jpg','editore'=>'Kodansha','status'=>'completato','numero_volumi'=>63,'data_inizio'=>'2006-08-02','valutazione'=>8.3],
    ['titolo'=>'Black Clover','autore'=>'Yūki Tabata','descrizione'=>'...','url_copertina'=>'https://upload.wikimedia.org/wikipedia/en/8/8f/Black_Clover_Volume_1.jpg','editore'=>'Shueisha','status'=>'in corso','numero_volumi'=>35,'data_inizio'=>'2015-02-16','valutazione'=>8.2],
    ['titolo'=>'Boarding School Juliet','autore'=>'Yōsuke Kaneda','descrizione'=>'...','url_copertina'=>'https://upload.wikimedia.org/wikipedia/en/7/78/Boarding_School_Juliet_vol1.jpg','editore'=>'Kodansha','status'=>'completato','numero_volumi'=>10,'data_inizio'=>'2015-03-13','valutazione'=>7.5],
    ['titolo'=>'Vinland Saga','autore'=>'Makoto Yukimura','descrizione'=>'...','url_copertina'=>'https://upload.wikimedia.org/wikipedia/en/1/1d/Vinland_Saga_vol1.jpg','editore'=>'Kodansha','status'=>'in corso','numero_volumi'=>24,'data_inizio'=>'2005-04-14','valutazione'=>9.3],
    ['titolo'=>'Claymore','autore'=>'Norihiro Yagi','descrizione'=>'...','url_copertina'=>'https://upload.wikimedia.org/wikipedia/en/a/ad/Claymore_Volume_1.jpg','editore'=>'Shueisha','status'=>'completato','numero_volumi'=>27,'data_inizio'=>'2001-05-09','valutazione'=>8.6],
    ['titolo'=>'Kingdom','autore'=>'Yasuhisa Hara','descrizione'=>'...','url_copertina'=>'https://upload.wikimedia.org/wikipedia/en/2/29/Kingdom_vol1.jpg','editore'=>'Shueisha','status'=>'in corso','numero_volumi'=>71,'data_inizio'=>'2006-01-26','valutazione'=>8.9],
];


        foreach ($mangalist as $manga) {
            $newManga = new Manga();

            $newManga->titolo = $manga['titolo'];
            $newManga->autore = $manga['autore'];
            $newManga->descrizione = $manga['descrizione'];
            $newManga->url_copertina = $manga['url_copertina'];
            $newManga->editore = $manga['editore'];
            $newManga->status = $manga['status'];
            $newManga->numero_volumi = $manga['numero_volumi'];
            $newManga->data_inizio = $manga['data_inizio'];
            $newManga->valutazione = $manga['valutazione'];

            $newManga->save();
        }

    }
}
