<?php 
$books = [
    "Panduan belajar php pemula",
    "membangun Aplikasi Web dengan PHP",
    "Tutorial PHP dan MySQL",
    "membuat Chat Bot dengan PHP",
];

echo "<h5> Judul Buku PHP; </h5>";
echo "<ul>";
foreach ($books as $buku) {
    echo "<li>$buku</li>";
}
echo "</ul>";
?>