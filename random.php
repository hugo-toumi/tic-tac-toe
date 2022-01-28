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

        <script>
        
            $(function(){
                var myArray = ['red', "blue"];
                var random = Math.random(); 
                console.log("Random Number = " + random);
                var choice = random * myArray.length;
                console.log("Choice = " + choice);
                var roundedChoice = Math.floor(choice);
                console.log("Rounded Choice = " + roundedChoice);
                console.log("Array Entry = " + myArray[roundedChoice]);
             
            });
        
        </script>
    
</body>
</html>