<?php 
$kuliah= [
    ["dosen" => "ACENG" , "submenu" =>
     [
        ["nama" => "afif",
        "matakuliah" => [
            ["matakuliah" => "matematika"],
            ["matakuliah" => "ipa"],
            ["matakuliah" => "sains"],
        ],
        "hobi" =>[
            ["hobi" => "memancing"],
            ["hobi" => "menulis"],

        ]
        
    ],

    ["nama" => "rico",
        "matakuliah" => [
            ["matakuliah" => "agama"],
            ["matakuliah" => "biologi"],
            ["matakuliah" => "penjas"],
        ],
        "hobi" =>[
            ["hobi" => "sola tahajud"],
            ["hobi" => "baca quran"],

        ]
        
    ],

    ["nama" => "nurahman",
        "matakuliah" => [
            ["matakuliah" => "matematika"],
            ["matakuliah" => "sastra"],
            ["matakuliah" => "sains"],
        ],
        "hobi" =>[
            ["hobi" => "berenang"],
            ["hobi" => "membaca"],

        ]
        
    ],
],
   ]
];

$no=1;
foreach ( $kuliah as $key => $indek){
    echo "Nama Wali Dosen :". $indek['dosen']. "<br>";
    echo "Daftar Mahasiswa";
    echo "<ul>";


    foreach ($indek["submenu"] as $menu) {
        echo " <li>Data ke ". $no++. " </li>";
        echo "Daftar Mahasiswa :". $menu["nama"];
        echo "<br> daftar Mata Kuliah :";

      echo "<ol>";
      foreach ($menu["matakuliah"] as $matkul) {
          echo "<li>". $matkul['matakuliah']."</li>";
      }
      echo "</ol>";
    
    echo"Daftar Hobi :";
    echo "<ol>";
     
    foreach ($menu["hobi"] as $hobi) {
    echo "<li>". $hobi["hobi"]. "</li>";
    }
    echo "</ol>";
        
}
echo "</ul>";

    
}

?>