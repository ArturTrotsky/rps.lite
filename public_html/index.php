<?php

echo 'Для игрі раскомментируйте код ниже';

/* Rock-Paper-Scissors


define('SHAPES',  ['R', 'P', 'S']);

function getUserShape()
{
    $shape = false;

    // 1. $_REQUEST ($_GET, $_POST)
    //$shape = $_REQUEST['shape'] ?? '';

    //if (!in_array($shape, SHAPES)) {
    //    die("<form><input type='text' name='shape'><input type='submit' value='Play'></form>");
    //}
    // 2. file_get_contents (local file, URL)
    //$shape = trim(
    //    file_get_contents(__DIR__ . '/user-shape')
    //);
    // 3. readline
    $shape = readline(implode(', ', SHAPES) . ": "); // для запуска ввести в терминале: php rps.php
    // 4. Change the script
    // 5. *DB

    if (!in_array($shape, SHAPES)) {
        $shape = getUserShape();
    }

    return $shape;
}

function getCompShape()
{
    return SHAPES[random_int(0, 2)];
}

function playRockPaperScissors($firstShape, $secondShape)
{
    if (!in_array($firstShape, SHAPES)) {
        if (!in_array($secondShape, SHAPES)) {
            return 'draw';
        }

        return 'second';
    }

    if (!in_array($secondShape, SHAPES)) {
        return 'first';
    }

    $firstIndex = array_search($firstShape, SHAPES);
    $secondIndex = array_search($secondShape, SHAPES);
    switch ($firstIndex - $secondIndex) {
        case -2:
            return 'first';
        case -1:
            return 'second';
        case 0:
            return 'draw';
        case 1:
            return 'first';
        case 2:
            return 'second';
    }
}

$firstShape = getUserShape();
$secondShape = getCompShape();

echo 'First: user' . " [$firstShape]" . PHP_EOL;
echo 'Second: comp' . " [$secondShape]" . PHP_EOL;
echo 'Win: ' . playRockPaperScissors($firstShape, $secondShape) . PHP_EOL;
*/
