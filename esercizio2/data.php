<?php

  header('Content-Type: application/json');

  $database = [
      [
          'title' => 'New Jersey',
          'author' => 'Bon Jovi',
          'year' => 1988,
          'poster' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg'
      ],
      [
          'title' => 'Live at Wembley 86',
          'author' => 'Queen',
          'year' => 1992,
          'poster' => 'https://images-na.ssl-images-amazon.com/images/I/71g40mlbinL._SX355_.jpg'
      ],
      [
          'title' => 'Ten\'s Summoner\'s Tales',
          'author' => 'Sting',
          'year' => 1993,
          'poster' => 'https://images-na.ssl-images-amazon.com/images/I/411BQR6BHRL.jpg'
      ],
      [
          'title' => 'Steve Gadd band',
          'author' => 'Steve Gadd Band',
          'year' => 2018,
          'poster' => 'https://m.media-amazon.com/images/I/81UtLzBDoEL._SS500_.jpg'
      ],
      [
          'title' => 'Brave new World',
          'author' => 'Iron Maiden',
          'year' => 2000,
          'poster' => 'https://i.ebayimg.com/images/g/1GwAAOSwFytaKr7l/s-l300.jpg'
      ],
      [
          'title' => 'One more car, one more rider',
          'author' => 'Eric Clapton',
          'year' => 2002,
          'poster' => 'https://images-na.ssl-images-amazon.com/images/I/81MDAIdh78L._SY355_.jpg'
      ]
  ];

  $singer = $_GET["singer"];

  $res = [];

  for ($i=0; $i < count($database); $i++) {

    $author = $database[$i];

    if ($singer === "All") {

      $res = $database; //$res perche se metto [] diventa array di database che è gia array

    } elseif ($author["author"] === $singer) {
      $res[] = $author; //$res[] perche sara un array
    }

  }

  echo json_encode($res);

?>
