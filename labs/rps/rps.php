<?php
$player1Wins = 0;
$player2Wins = 0;

function displaySymbol() {
    $randVal1 = 0;
    $randVal2 = 0;
    do {
        $randVal1 = rand(0,2);
        $randVal2 = rand(0,2);
    } while ($randVal1 == $randVal2);
    switch($randVal1) {
        case 0: $symbol = "rock";
                break;
        case 1: $symbol = "paper";
                break;
        case 2: $symbol = "scissors";
                break;
    }
    switch($randVal2) {
        case 0: $symbol1 = "rock";
                break;
        case 1: $symbol1 = "paper";
                break;
        case 2: $symbol1 = "scissors";
                break;
    }
    winner($symbol, $symbol1);
                
}

function winner($img1, $img2) {
        if ($img1 == "rock" && $img2 == "scissors") {
            $player1Wins++;
            echo "<div class='col'><img src='img/scissors.png' alt='scissors' width='150'></div>
                  <div class='col, matchWinner'><img src='img/rock.png' alt='rock' width='150'></div>";
        }
        else if ($img1 == "rock" && $img2 == "paper") {
            $player2Wins++;
            echo "<div class='col'><img src='img/rock.png' alt='rock' width='150'></div>
                  <div class='col, matchWinner'><img src='img/paper.png' alt='paper' width='150'></div>";
        }
        else if ($img1 == "scissors" && $img2 == "rock") {
            $player2Wins++;
            echo"<div class='col'><img src='img/scissors.png' alt='scissors' width='150'></div>
                  <div class='col, matchWinner'><img src='img/rock.png' alt='rock' width='150'></div>";
        }
        
        else if ($img1 == "scissors" && $img2 == "paper") {
            $player1Wins++;
            echo "<div class='col, matchWinner'><img src='img/scissors.png' alt='scissors' width='150'></div>
                  <div class='col'><img src='img/paper.png' alt='paper' width='150'></div>";
        }
        
        else if ($img1 == "paper" && $img2 == "scissors") {
            $player2Wins++;
            echo"<div class='col'><img src='img/paper.png' alt='scissors' width='150'></div>
                  <div class='col, matchWinner'><img src='img/scissors.png' alt='rock' width='150'></div>";
            
        }
        else if ($img1 == "paper" && $img2 == "rock") {
            $player1Wins++;
            displayWinner(1);
            echo"<div class='col, matchWinner'><img src='img/paper.png' alt='scissors' width='150'></div>
                  <div class='col'><img src='img/rock.png' alt='rock' width='150'></div>";  
            
        }
}

function displayWinner($num) {
    if($num == 1){
        $player1Wins++;
    }
    else if($num == 2){
        $player2Wins++;
    }
    
    if ($player1Wins >= 2) {
        echo "<h1>The winner is Player 1</h1>";
    }
    else if ($player2Wins >= 2) {
        echo "<h1>The winner is Player 2</h1>";
    }
    else {
        echo $player2Wins;
    }
    
}

?>

<!DOCTYPE html>
<html>

<head>
    <title> RPS </title>
    <style type="text/css">
        body {
            background-color: black;
            color: white;
            text-align: center;
        }

        .row {
            display: flex;
            justify-content: center;
        }

        .col {
            text-align: center;
            margin: 0 70px;
        }

        .matchWinner {
            background-color: yellow;
            margin: 0 70px;
        }

        #finalWinner {
            margin: 0 auto;
            width: 500px;
            text-align: center;
        }
        
        hr {
            width:33%;
        }        
    </style>
</head>

<body>

    <h1> Rock, Paper, Scissors </h1>

    <div class="row">
        <div class="col">
            <h2>Player 1</h2>
        </div>
        <div class="col">
            <h2>Player 2</h2>
        </div>
    </div>
    
    <div class="row">
        <?php displaySymbol(); ?>
    </div>
    <hr>

    <div class="row">
        <?php displaySymbol(); ?>
    </div>
    <hr>
    
    <div class="row">
        <?php displaySymbol(); ?>
    </div>
    <hr>
    Images source: https://www.kisspng.com/png-rockpaperscissors-game-money-4410819/
</body>

</html>
