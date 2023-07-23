<?php
$conn = mysqli_connect("localhost","root","","urlshortner");
if (!$conn){
    echo "connect failed: ".mysqli_connect_error();
}
