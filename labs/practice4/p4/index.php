<?php
function playHand(&$deck) {
    $totalKings = 0;
    $totalAces = 0;
    $suit = array("clubs", "hearts", "diamonds", "spades");
    echo "<div class='playerHand'>";
    $card = array_pop($deck);
    $suitName = $suit[floor($card / 13)];
    $cardValue = $card % 13 + 2;
    echo "<img class='card' src='img/cards/$suitName/$cardValue.png' alt='$cardValue $suitName' ><br>";
    $total += $cardValue;


function playGame() {
    $deck = range(0, 51);
    shuffle($deck);
    while (true) {
        
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Aces vs Kings</title>
    </head>
    <body>
        <h1>Aces vs Kings</h1>
        <div>
            
        </div>
    </body>
</html>