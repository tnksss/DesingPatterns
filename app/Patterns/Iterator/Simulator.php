<?php
$movies = new \App\Patterns\Iterator\Movies;
$movies->add(new \App\Patterns\Iterator\Movie('Ponyo', 'B'));
$movies->add(new \App\Patterns\Iterator\Movie('Kill Bill', 'O'));
$movies->add(new \App\Patterns\Iterator\Movie('The Santa Clause', 'M'));
$movies->add(new \App\Patterns\Iterator\Movie('Guardians of the Galaxy', 'B'));
$movies->add(new \App\Patterns\Iterator\Movie('Reservoir dogs', 'O'));
$movies->add(new \App\Patterns\Iterator\Movie('Sharknado', 'R'));
$movies->add(new \App\Patterns\Iterator\Movie('Back to the Future', 'O'));

print 'LISTA DE FILMES' . PHP_EOL;

foreach ($movies as $movie) {
        print ' - ' . $movie->title() . PHP_EOL;
}

print PHP_EOL . 'AVALIADO COMO OTIMO SOMENTE' . PHP_EOL;

foreach ($movies->rated('O') as $movie) {
        print ' - ' . $movie->title() . PHP_EOL;
}

print PHP_EOL . 'EM ORDEM REVERSA' . PHP_EOL;

foreach ($movies->reverse() as $movie) {
        print ' - ' . $movie->title() . PHP_EOL;
}