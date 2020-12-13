<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>

 <?php
      $myNumber=1;
      $sum=0;
      echo "<table>";
      for($i=0;$i<=4;$i++){
          echo "<tr>"; 
          for($j=0;$j<=8;$j++){
              echo "<td>"; 
              echo $sum+=$myNumber ;
              echo "</td>";
          }
         
          $myNumber=$sum-($myNumber*7);
           $sum=0;
          echo "</tr>";
      }
      echo "</table>";

 //////////////
   
    // $myNumber=0;
    // echo "<table>";
    // for($i=0;$i<3;$i++){
    //     echo "<tr>"; 
    //     for($j=0;$j<=8;$j++){
    //         echo "<td>"; 
    //         echo $myNumber+=3 ;
    //         echo "</td>";
    //     }
    //     $myNumber-=3;
    //     echo "</tr>";
    // }
    // echo "</table>";
 ?>
</body>
</html>