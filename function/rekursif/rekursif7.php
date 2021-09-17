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

    
function tampilkanMenuBertingkat(array $menu) {
    echo "<ul>";
    foreach ($menu AS $key => $item){
        echo" <li>{$item['nama']}</li>";
    }
    echo "</ul>";
}
tampilkanMenuBertingkat($menu);

?>