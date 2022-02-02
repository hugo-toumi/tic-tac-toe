<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="jeu.css" rel="stylesheet">
  <title>TicTacToe Game</title>
</head>

<body class="bodyia">


<a href="ia.php"><div id="testbutton"></div></a>

  <div class="container">
    <div class="d-flex justify-content-center">
    <table>
        <?php
          $counter = 0;
          for($rows = 1; $rows <= 3; $rows++ ){
            echo "<tr>";

              for($columns = 1; $columns <= 3; $columns++){
                echo "<td><button id='$counter' class='btn btn-secondary customButton'data-player='' data-occupied='0'></button></td>";
                $counter++;
              }     
            
            echo "</tr>";
          }

        ?>
    </table>

    </div>
    <div class="d-flex justify-content-center" id="result">

</div>




<script>
$(function(){
  $("button").on("click", function(){
    gameOverStatus = false;
    humanSelectedButtonId = $(this).attr("id");
    console.log(humanSelectedButtonId);
    if(!$(this).data("occupied")){
        $(this).addClass("btn-danger disabled");
        $(this).removeClass("btn-secondary");
        $(this).text("X");
        $(this).attr("data-occupied", 1);
        $(this).attr("data-player", "human");
        $("button").each(function(){
          $(this).addClass("disabled");
        });
        gameOverStatus = checkWinStatus(humanSelectedButtonId, "human");
        if(!gameOverStatus){
        setTimeout(function(){
        computersTurn()

        }, 500); 

        }   
    }
  });
});

function computersTurn(){ 
var possibleChoices = $ ('[data-occupied="0"]');
var numberOfPossibleChoices = possibleChoices.length;
var random = Math.floor(Math.random()*numberOfPossibleChoices);
var computerChoice = possibleChoices[random];
var computerSelectedButtonId = $(computerChoice).attr("id");
$(computerChoice).addClass("btn btn-success disabled");
$(computerChoice).removeClass("btn-secondary");
$(computerChoice).text("O");
$(computerChoice).attr("data-occupied", 1);
$(computerChoice).attr("data-player", "computer");
$('[data-occupied="0"]').each(function(){
          $(this).removeClass("disabled");
        });
        checkWinStatus(computerSelectedButtonId, "computer");
}

function checkWinStatus(selectedButtonId, player){
  var winningCombinations = [
    [0,1,2],
    [3,4,5],
    [6,7,8],
    [0,3,6],
    [1,4,7],
    [2,5,8],
    [0,4,8],
    [2,4,6] 
  ];

  $.each(winningCombinations, function(key,winPositions){

      if($.inArray(selectedButtonId, winPositions)){

        winCount = 0;
        $.each(winPositions, function(key, value){

          playerValue = $ ("#" + value).attr("data-player");
          if(playerValue == player){

            winCount++;
            console.log("winCount=" + winCount);
            if(winCount == 3){
              gameOverStatus = true;
              gameOver(player);
            }


          }

        });

      }

  });

  return gameOverStatus;

}
function gameOver(player){

  $("button").each(function(){
          $(this).addClass("disabled");
        });
        if(player == "human"){
            $("#result").html("<div class='text-center col-6 alert alert-success'>Vous avez gagné!</div>");
        } else {

          $("#result").html("<div class='text-center col-6 alert alert-danger'>Vous avez perdu!</div>");
          
        }
}

</script>



</body>
</html>  