
<html>
<body>

<?php 
   
         $a1=0;
         echo "<h1>data received(unsorted)</h1>";
         echo "<br>";
         foreach($_GET as $key => $value)
         {
             echo $key ."=".$value;
             $c1=$a1+1;
             echo "<br>";
         }
        if($a1==0)
             echo "None";
         else
            echo  "values:" .$c. "Values";
      
   
          $a2=0;
         echo "<h1>received data(sorted by name)</h1>";
         echo "<br>";
         ksort($_GET);
         foreach($_GET as $key => $value)
         {
             echo $key ."=".$value;
             $a2=$a2+1;
             echo "<br>";
         }
        if($c2==0)
             echo "None";

         $c3=0;
         echo "<h1>received data(sorted by value)</h1>";
         echo "<br>";
         asort($_GET);
         foreach($_GET as $key => $value)
         {
             echo $key ."=".$value;
             $a3=$a3+1;
             echo "<br>";
         }
        if($c3==0)
             echo "None";
        ?>

</body>
</html>
