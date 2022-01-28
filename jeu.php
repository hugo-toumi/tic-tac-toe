<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="jeu.css" rel="stylesheet">
  <title>TicTacToe</title>
</head>
<body>
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
</div>

<script>
$(function(){
  $("button").on("click", function(){
    humanSelectedButtonId = $(this).attr("id");
    console.log(humanSelectedButtonId);
    if(!$(this).data("occupied")){
        $(this).addClass("btn-danger disabled");
        $(this).removeClass("btn-secondary");
        $(this).text("X");
        $(this).attr("data-occupied", 1);
        $(this).attr("data-player", "human");
    }
  });
});
</script>

</body>
</html>