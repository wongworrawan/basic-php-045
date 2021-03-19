<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login มาแล้วจ้า</title>

     <!-- get cdn css custom -->
     <link rel="stylesheet" href="style.css">

    <!-- get cdn css boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- get cdn javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="script.js"></script> 

</head>
<body>


    <div id="logreg-forms">
        <?php

           echo "Hello world." ;
           echo "<br>";
          
           if ($_SERVER["REQUEST_METHOD"] == "POST"){
            echo "Email = ".$_POST["email"];
            echo "<br>";
            echo "Password = ".$_POST["pwd"];
 

           }

        ?>
    </div> 
          
    

</body>
</html>