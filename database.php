<?php
 $conn=mysqli_connect("localhost:3030","root","","test");
 if($conn)
 {
 	echo "connected";
 }
 else
 {
 	echo "not connected";
 }
?>