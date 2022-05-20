<?php

$conn = mysqli_connect("db", "root", "root", "sys");

if (!$conn) {
  echo "{ \"message\": \"not connected\" }";
}
else {
  mysqli_close($conn);
  echo "{ \"message\": \"connected\" }";
}

?>
