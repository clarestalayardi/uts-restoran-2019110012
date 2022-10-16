<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function __invoke(Request $request)
    {
        function prefixImg ($imgTitle)
        {
            return "../images/menu/{$imgTitle}.jpg";
        }
        // untuk box menu
        $menus = [
            // Menu 1
            [
                "image" => prefixImg(1),
                "title" => "PAKET MIE ENAK",
                "description" => "Kombinasi antara mie pedas, panas dan milkshare orange siap menemani hari - harimu",
            ],

            // Menu 2
            [
                "image" => prefixImg(2),
                "title" => "PAKET KENYANG",
                "description" => "Balutan telur goreng disertai toping sosis dan sambal mampu mengenyangkan perutmu dengan si manis thai tea",
            ],

            // Menu 3
            [
                "image" => prefixImg(3),
                "title" => "PAKET ROTI MANIS",
                "description" => "Roti dengan dua toping berbeda siap mewarnai kegiatanmu. Piihan toping yang beragam bisa disesuaikan dengan seleramu",
            ],

            // Menu 4
            [
                "image" => prefixImg(4),
                "title" => "PAKET MORNING",
                "description" => "Balutan telor goreng dan roti toast disertai toping keju siap menyambut hari barumu pada hari ini",
            ],

            // Menu 5
            [
                "image" => prefixImg(5),
                "title" => "PAKET SI MANIS",
                "description" => "Warnai hari - harimu dengan si manis dengan pilihan variant es krim yang beragam dan toping - toping menarik lainnya",
            ],

            // Menu 6
            [
                "image" => prefixImg(6),
                "title" => "PAKET SI PASTEL",
                "description" => "Cocok untuk kamu pecinta si manis dan buah - buahan. Campuran buah didalamnya siap mewarnai hari - harimu",
            ],
        ];
        return view('menu', compact('menus'));
    }
}
