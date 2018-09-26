<?php
function playHand(&$deck) {
    $total = 0;
    $suit = array("clubs", "hearts", "diamonds", "spades");
    echo "<div class='playerHand'>";
    $card = array_pop($deck);
    $suitName = $suit[floor($card / 13)];
    $cardValue = $card % 13 + 2;
    echo "<img class='card' src='img/cards/$suitName/$cardValue.png' alt='$cardValue $suitName' ><br>";
    $total += $cardValue;
    echo "<span class='individualScore'> score: $total</span>";
    echo "</div>";
    return $total;
}

function discard(&$deck) {
    array_pop($deck);
    echo "<img class='card' src='img/cards/card_back.png' alt='Card Back'>";
}

function winner($player1, $player2) {
    if ($player1 > $player2) {
        echo "<br><br><br><br><br><br><h1>Sophisticated Moose Wins!</h1>";
    }
    else if ($player2 > $player1) {
        echo "<br><br><br><br<br><br><h1>Fancy Bear Wins!</h1>";
    }
    else {
        echo "<br><br><br><br<br><br><h1>Tie!</h1>";
    }
}

function playGame() {
    $deck = range(0, 51);
    shuffle($deck);
    $player1 = 0;
    $player2 = 0;
    while (true) {
        $player1 = playHand($deck);
        $player2 = playHand($deck);
        winner($player1, $player2);
        if ($player1 == $player2) {
            echo "<div class='tie'>";
            discard($deck);
            discard($deck);
            echo "<br>";
            discard($deck);
            discard($deck);
            echo "</div>";
        }
        else {
            break;
        }
    }
    return $playerScores;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>War</title>
        <link href="css/style.css" rel="stylesheet" />
    </head>
    <body>
        <div class="game">
            <br><br><br><br><br><br><br><br><br><br><br><br>
            <header>War!!</header>
            <br>
            <div class="p1">
                <h3>Player 1:Sophisticated Moose</h3>
                <img class="player"src="img/moose.png" alt="Moose">
            </div>
            <div class="p2">
                <h3>Player 2:Fancy Bear</h3>
                <img class="player"src="img/bear.png" alt="Bear">
            </div>
            <?php playGame(); ?>
        </div>
        <footer>
            <hr>CST 336:Internet Programming. 2018&copy; O'Neill<br>
            <img id="logo" src="https://www.gannett-cdn.com/-mm-/27b51b61ea4b998e2d58764f833d0fa9c82c0bed/c=0-75-600-525/local/-/media/2016/03/26/Salinas/B9321500095Z.1_20160326013639_000_GMLDSI43O.1-0.png.jpg?width=534&height=401&fit=crop" alt="logo">
    </footer>
    </body>
</html>