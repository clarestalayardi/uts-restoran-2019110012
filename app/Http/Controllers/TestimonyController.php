<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestimonyController extends Controller
{

    public function __invoke(Request $request)
    {
        function prefixImg ($imgTitle)
        {
            return "../images/testimony/{$imgTitle}.jpeg";
        }

        // untuk box testimoni
        $testimonies = [
            // testimony 1
            [
                "result" => "Warunk Uprnomal pokoknya the best deh soal vibesnya. Lingkungannya yang mendukung untuk nongki, mengerjakan tugas atau meeting.
                Dilengkapi fasilitas yang lengkap seperti WiFi bikin betah deh pokoknya. Bener - bener vibes co-working banget deh cocok banget buat anak muda kekinian",
                "image" => prefixImg('RUANGANNYA'),
                "title" => "VIBESNYA",
                "name" => "Vira",
                "profession" => "Mahasiswa"
            ],

            // testimony 2
            [
                "result" => "Di Warunk Upnormal banyak banget nih yang suka ngumpul - ngumpul untuk meet up, meeting, atau sekedar berkumpul.
                Disini juga dilengkapi games - games yang bikin kita betah dan ada kegiatan waktu ngumpul. OK banget deh tempatnya!",
                "image" => prefixImg('VIBESNYA'),
                "title" => "KOMUNITAS",
                "name" => "Dira",
                "profession" => "Freelance"
            ],

            // testimony 3
            [
                "result" => "Makanan atau minuman disini ok banget deh ramah di kantong dan rasanya jangan diragukan lagi.
                Banyak varian menu yang bisa dipilih mulai dari makanan ringan seperti cemilan hingga makanan berat.
                Harga merakyat, rasa melangit, top!",
                "image" => prefixImg('MAKANANNYA'),
                "title" => "MAKANAN",
                "name" => "Mike",
                "profession" => "Karyawan"
            ],
        ];
        return view('testimony', compact('testimonies'));
    }
}
