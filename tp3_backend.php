<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tp2_backend</title>
  </head>
  <body>
    <body>
  <!-- 1. 1. Mostrar los números del 1 al 100. -->
  <?php
  $n=1;
  while ($n <= 100) {
    echo "$n\n";
    $n++;
  }
  ?>
  <br><hr>
<?php

for ($n=1; $n <=100 ; $n++) {
echo "$n\n";
}
   ?>
   <br><hr>
<!-- 2. Mostrar los números del 100 al 1.-->
  <?php
  $n=100;
  while ($n <= 100 and $n>0) {
    echo "$n</p>";
    $n--;
  }
  ?>
  <br><hr>
  <?php
  for ($i=100; $i >= 1 ; $i--) {
    echo "<p>$i</p>";
  }
   ?>
   <br><hr>
<!-- 3. Mostrar los números pares del 1 al 100.-->

  <?php
  for ($i=1; $i <= 100 ; $i++) {
    while ($i % 2==0) {
      echo "<p>$i</p>";
      $i++;
    }
  }
  ?>
  <br><hr>
  <?php
$i=2;
while ($i <= 100) {
  echo "$i</p>";
  $i=$i+2;
}
   ?>
   <br><hr>
<!-- 4. Mostrar los números impares del 1 al 100.  -->
 <br><hr>
 <?php
 for ($i=1; $i <= 100 ; $i++) {
   while ($i % 2!=0) {
     echo "<p>$i</p>";
     $i++;
   }
 }
  ?>
<br><hr>
 <br><hr>
 <?php
 $i=1;
 while ($i <= 100) {
   echo "$i</p>";
   $i=$i+2;
 }
  ?>
<br><hr>
<br><hr>
 <!-- 5. Mostrar la suma de los números de 1 a 20.-->
<?php
$suma=0;
for ($i=1; $i <=20 ; $i++) {
  $suma += $i;
}
print "la suma de los números de 1 a 20 es $suma"
 ?>
  <!-- la suma de los numeros de 1 al 20 es 210-->
 <br><hr>
 <?php
 $r=0;
 for ($i=1; $i <=20 ; $i++) {
   $r=$i+$r;
   echo "$r<br>";
 }
  ?>
 <!-- 1<br>3<br>6<br>10<br>15<br>21<br>28<br>36<br>45<br>55<br>66<br>78<br>91<br>105<br>120<br>136<br>153<br>171<br>190<br>210<br>-->
<br><hr>
 <!-- 6. Mostrar la suma de números pares de 1 a 20.-->
 <?php
 $suma=0;
 for ($i=1; $i <=20 ; $i++) {
   while ($i%2 == 0) {
     $suma += $i;
     $i++;
   }
 }
 print "la suma de los números pares de 1 a 20 es $suma"
  ?>
  <br><hr>
  <!-- la suma de números pares de 1 a 20 es 110-->
<br><hr>
<?php
$r=0;
for ($i=2; $i <=20 ; $i=$i+2) {
  $r=$i+$r;
  echo "$r<br>";
}
 ?>
 <br><hr>
<!-- 2<br>6<br>12<br>20<br>30<br>42<br>56<br>72<br>90<br>110<br>-->
<br><hr>
  </body>

  </html>
