<?php
include './Movie.php';

$movie = new Movie(1, 'Il Padrino', 'The Godfather', 'en', '1972/03/24', '9.2', 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/r4gnMXoY1efvaolNDjn3nj4046S.jpg');
$movie2 = new Movie(2,'Via Col Vento', 'Gone With The Wind', 'en', '1939/12/15', '8.6', 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/xRyW60TXvX7Q2HSbpz8nZxKaTkL.jpg');
$movie3 = new Movie(3, 'Psycho', 'Psycho', 'en', '1960/06/16', '9.4', 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/tdqX0MWaFHuGwUygYn7j6eluOdP.jpg');
$movie4 = new Movie(4,'Gravity', 'Gravity', 'en', '2013/08/28', '7.8', 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/4pRXqT7wQmoH5sH6Z4WYmbAFG4t.jpg');

var_dump($movie);
var_dump($movie2);
var_dump($movie3);
var_dump($movie4);

echo $movie->printMovie();
echo $movie2->printMovie();
echo $movie3->printMovie();
echo $movie4->printMovie();