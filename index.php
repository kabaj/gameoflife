<head>


    <link type="text/css" rel="stylesheet" href="style/stylesheet.css">
</head>

<body>
<?php


require_once ("./src/gameoflife.php");

$game = new GameOfLife(6);


$game->setCell(2,1, true);
$game->setCell(2,2, true);
$game->setCell(2,3, true);
$game->setCell(2,4, true);



$game->printBoard();

$game->computeNextStep();
$game->printBoard();

$game->computeNextStep();
$game->printBoard();
?>

</body>
