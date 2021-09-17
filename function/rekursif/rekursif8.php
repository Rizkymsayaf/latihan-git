<?php 
$menu = [
    [
        "nama" => "Beranda",
    ],
    [
        "nama" => "Berita",
        "submenu" => [
            [
                "nama" => "Olahraga",
                "submenu" => [
                    [
                        "nama" => "Bola"
                    ],
                    [
                        "nama" => "Bulu Tangkis"
                    ]
                    ]
                    ],
                    [
                        "nama" => "Politik"
                    ],
                    [
                        "nama" => "Manca Negara"
                    ]
                   ]
                    ],

                    [
                        "nama" => "Tentang"
                    ],
                    [
                        "nama" => "kontak"
                    ],
                ];
      
     function tampilkanMenuBertingkat (array $menu){
         echo "<ul>";
         foreach ($menu as $key =>$item){
             echo "<li>{$item['nama']} </li>";
             #periksa apakah ia memiliki atribut submenu
             #dan apakah attribut  tersebut memiliki isi
             if (@$item['submenu'] && count($item['submenu'])) {
                 #Jika ia dipanggil diri sendiri
                 tampilkanMenuBertingkat($item['submenu']);
             }
         }
         echo "</ul>";
     }     
     ?>      