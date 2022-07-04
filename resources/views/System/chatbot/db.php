
<?php

$con  = mysqli_connect("localhost","id19088433_organs","~LvH=\OkvQc!8LBE","id19088433_organ");
      $server_time=date("Y-m-d H:i:s");

      $conn= new mysqli();

      if($con){

          echo "Connected";

      }else{

          echo "Failed to Connect";
    }

?>