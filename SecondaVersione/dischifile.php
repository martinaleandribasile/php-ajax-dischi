<?php

$disks = [
    [
        'title' => 'New Jersey',
        'author' => 'Bon Jovi',
        'year' => 1988,
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg',
        'genre' => 'Rock'
    ],
    [
        'title' => 'Live at Wembley 86',
        'author' => 'Queen',
        'year' => 1992,
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/71g40mlbinL._SX355_.jpg',
        'genre' => 'Pop'
    ],
    [
        'title' => 'Ten\'s Summoner\'s Tales',
        'author' => 'Sting',
        'year' => 1993,
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/411BQR6BHRL.jpg',
        'genre' => 'Pop'
    ],
    [
        'title' => 'Steve Gadd band',
        'author' => 'Steve Gadd Band',
        'year' => 2018,
        'poster' => 'https://m.media-amazon.com/images/I/81UtLzBDoEL._SS500_.jpg',
        'genre' => 'Jazz'
    ],
    [
        'title' => 'Brave new World',
        'author' => 'Iron Maiden',
        'year' => 2000,
        'poster' => 'https://upload.wikimedia.org/wikipedia/en/0/03/Iron_Maiden_-_Brave_New_World.jpg',
        'genre' => 'Metal'
    ],
    [
        'title' => 'One more car, one more rider',
        'author' => 'Eric Clapton',
        'year' => 2002,
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/81MDAIdh78L._SY355_.jpg',
        'genre' => 'Rock'
    ],
    [
        'title' => 'Made in japan',
        'author' => 'Deep Purple',
        'year' => 1979,
        "poster" => "https://3.bp.blogspot.com/-S9TCk-B2140/WB4fTFhG75I/AAAAAAAADOs/fRAeJF28LBsYwtsrvrmHjsCroNw2NulCwCLcB/s1600/front.jpg",
        'genre' => 'Rock'
    ],
    [
        'title' => 'And Justice for All',
        'author' => 'Metallica',
        'year' => 1908,
        "poster" => "https://th.bing.com/th/id/OIP.sVXV5Di7gOG1X5gFro7yyQHaHa?pid=ImgDet&rs=1",
        'genre' => 'Metal'
    ],
    [
        'title' => 'Hard wired',
        'author' => 'Dave Wecl',
        'year' => 1994,
        "poster" => "https://img.discogs.com/OKhhU4DJaNuxiopmJHPUiVaSv1Q=/fit-in/300x300/filters:strip_icc():format(jpeg):mode_rgb():quality(40)/discogs-images/R-9226338-1477407141-3801.jpeg.jpg",
        'genre' => 'Jazz'
    ],
    [
        'title' => 'Bad',
        'author' => 'Michael Jackson',
        'year' => 1987,
        "poster" => "https://img.discogs.com/X7Gc0PkC6Zph7dmLBbt0-AK4FKc=/fit-in/600x600/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-7299891-1443353965-2345.jpeg.jpg",
        'genre' => 'Pop'
    ],
];

$genre = isset($_GET['genre']) ? $_GET['genre'] : "all";
$cdfilterd = [];
if ($genre === "all") {
    $cdfilterd = $disks;
} else {
    foreach ($disks as $cd) {
        if ($cd["genre"] == $genre)
            $cdfilterd[] = $cd;
    }
}
header("content-type: application/json");
echo json_encode($cdfilterd);
