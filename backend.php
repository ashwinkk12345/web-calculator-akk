<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>website</title>
</head>
<body style="background-color: #222; color: white;">
  <center><p style="font-family: cursive; font-weight: bold; font-size: 45px;">Web-Calculator</p></center>
  <form action="" method="GET">
    <center><p>first number  : </p><input type="text" name="first" style="width: 280px; background-color: #222; color: white;border:3px solid #F7730E;"><br></center>
    <center><p>second number : </p><input type="text" name="second" style="width: 280px; background-color: #222; color: white;border:3px solid #F7730E;"><br></center>
    <center><p>operator</p>
    <input type="text" name="operator" style="width: 280px; background-color: #222; color: white;border:3px solid #F7730E;"><br></center>
    <br>
    <center><input type="submit" name="calculate" value="calculate" style="background-color: #222; color: white; border:3px solid #F7730E;"></center>
    <br>
    <br>
  </form>
  <p> 
    <?php
      //this line checks whether submit button is clicked
      if(isset($_GET['calculate'])){   
        $first = $_GET['first'];
        $second = $_GET['second'];
        $operator = $_GET['operator'];
        if($operator == "+"){
          $answer = $first + $second;
          echo "<center><p style='font-size: 30px;'>$first + $second = $answer</p></center>";
        }elseif($operator == "-"){
          $answer = $first - $second;
          echo "<center><p style='font-size: 30px;'>$first - $second = $answer</p></center>";
        }elseif($operator == "*"){
          $answer = $first * $second;
          echo "<center><p style='font-size: 30px;'>$first * $second = $answer</p></center>";
        }elseif($operator == "/"){
          $answer = $first / $second;
          echo "<center><p style='font-size: 30px;'>$first / $second = $answer</p></center>";
        } 
      }
    ?>
    <br>
    <hr style="color: white;">
    <center><p>@ 2022</p></center>
    <center><p>Developed By: ASHWIN K K </p></center>
  </p>
</body>
</html>


