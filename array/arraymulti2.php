<?php 
//  membuat array 2 dimensi yang berisi array asosiatif
$artikel = [
    [
        "judul" => "Belajar PHP & Msql untuk pemula",
        "penulis" => "petanikode"
    ],
    [
        "judul" => "Belajar PHP & Msql hingga mahir",
        "penulis" => "petanikode"
    ],
    [
        "judul" => "membuat Aplikasi WEB dengan PHP",
        "penulis" => "petanikode"
    ]
    ];

    //menampilkan array
    foreach($artikel as $post) {
        echo "<h2>". $post["judul"]. "</h2>";
        echo "<p>". $post["penulis"]. "</p>";
        echo "<hr>";
    }
?>