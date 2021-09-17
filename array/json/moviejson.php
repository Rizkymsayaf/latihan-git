<?php
$movie ='{
    "Instructions": "delete everything in this object and make your own JSON object using different data.",
    "Title": "Counjuring",
    "Year": "1967",
    "Rated": "Approved",
    "Released": "22 Dec 1967",
    "Runtime": "106 min",
    "Genre": [
      "Comedy",
      "Drama",
      "Romance"
    ],
    "Director": "Mike Nichols",
    "Writers": [
      "Calder Willingham (screenplay)",
      "Buck Henry (screenplay)",
      "Charles Webb (based on the novel by)"
    ],
    "Actors": [
      "Anne Bancroft",
      "Dustin Hoffman",
      "Katharine Ross",
      "William Daniels"
    ],
    "Plot": "Ben has recently graduated college, with his parents now expecting great things from him. At his \"Homecoming\" party, Mrs. Robinson, the wife of his fathers business partner, has Ben drive her home, which leads to an affair between the two. The affair eventually ends, but comes back to haunt him when he finds himself falling for Elaine, Mrs. Robinsons daughter.",
    "Language": "English",
    "Country": "USA",
    "Awards": "Won 1 Oscar. Another 22 wins & 13 nominations.",
    "Poster": "http://ia.media-imdb.com/images/MNzgzNA@@._V1_SX300.jpg",
    "imdbRating": "8.1",
    "imdbVotes": "183,131",
    "imdbID": "tt0061722"
  }';
  


$data = json_decode($movie); ?>
<html>
<head><title>movie</title></head>
<body>
  <b><center >Data Film</center></b><br>
 <center><?php echo "<center>". $data->Title. "</center>";?></center>
 <center><img src="Conjuring_poster.jpg" height=500 width=300></center>";

<table>
 <br ><?php echo $data->Plot; ?><br>
 <br>
 <tr>
 <td><b>Tahun</b></td> <td><b>:</b></td>
 <td><?php echo  $data->Year; ?></td></tr>

 <br> <tr>
     <td><b>Rating</b></td>
     <td><b>:</b></td> 
     <td><?php echo $data->Rated; ?></td></tr>

 <tr>
     <td><b>Rilis</b></td>
     <td><b>:</b></td> 
     <td><?php echo $data->Released; ?></td></tr>

 <tr>
 <td><b>Durasi</b></td>
     <td><b>:</b></td> 
     <td><?php echo  $data->Runtime; ?></td></tr>


 <tr>
 <td><b>Genre</b></td>
     <td><b>:</b></td> 
     <td><?php echo implode("-", $data->Genre); ?></td></tr>

     <tr>
 <td><b>Director</b></td>
     <td><b>:</b></td> 
     <td> <?php echo  $data->Director; ?></td></tr>

     <tr>
 <td><b>Penulis</b></td>
     <td><b>:</b></td> 
     <td> <?php echo "<li>" .implode("<li>", $data->Writers); ?></td></tr>

     <tr>
 <td><b>Pemain</b></td>
     <td><b>:</b></td> 
     <td> <?php echo "<li>" .implode("<li>", $data->Actors); ?></td></tr>

     <tr>
 <td><b>Bahasa</b></td>
     <td><b>:</b></td> 
     <td> <?php echo $data->Language; ?></td></tr>

  <tr>
 <td><b>Negara</b></td>
     <td><b>:</b></td> 
     <td><?php echo  $data->Country; ?></td></tr>

     <tr>
 <td><b>Penghargaan</b></td>
     <td><b>:</b></td> 
     <td><?php echo   $data->Awards; ?></td></tr>

     <tr>
 <td><b>Rating</b></td>
     <td><b>:</b></td> 
     <td> <?php echo   $data->imdbRating; ?></td></tr>

  <tr>
 <td><b>Suara</b></td>
     <td><b>:</b></td> 
     <td> <?php echo   $data->imdbVotes; ?></td></tr>

     <tr>
 <td><b>imdbID</b></td>
     <td><b>:</b></td> 
     <td> <?php echo  $data->imdbID; ?></td></tr>


</table>

  </body>
  </html>