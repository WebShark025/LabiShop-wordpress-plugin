<?php

// UPLOAD THIS FILE TO THE ROOT DIRECTORY !!!!

 function send($url,$api,$amount,$redirect){
 $ch = curl_init();
 curl_setopt($ch,CURLOPT_URL,$url);

curl_setopt($ch,CURLOPT_POSTFIELDS,"api=$api&amount=$amount&redirect=$redirect");
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
 curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
 $res = curl_exec($ch);
 curl_close($ch);
 return $res;
 }
 function get($url,$api,$trans_id,$id_get){
 $ch = curl_init();
 curl_setopt($ch,CURLOPT_URL,$url); 
 curl_setopt($ch,CURLOPT_POSTFIELDS,"api=$api&id_get=$id_get&trans_id=$trans_id");
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
 curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
 $res = curl_exec($ch);
 curl_close($ch);
 return $res;
 } 
 
 
 
 
 
 $itemname = $_POST['itemname'];
 $fullname = $_POST['fullname'];
 $price = $_POST['price'];
 $address = $_POST['address'];
 $phone = $_POST['phone'];
 
 
 
 
$servername = "localhost";
$username = "sibwayir_db";
$password = "ario2282!!@#$%^&*(Parantez)";
$dbname = "sibwayir_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO Orders (itemname, fullname, price, isdone, get_id, address, phone)
VALUES ('$itemname', '$fullname', '$price', 'false', '$result', '$address', '$phone')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
  $url = $_POST['url'];
  $api = $_POST['api'];
  $amount = $_POST['price'];
  $redirect = $_POST['redirect'];
  $result = send($url,$api,$amount,$redirect);
  if($result > 0 && is_numeric($result)){
 $go = "http://payline.ir/payment/gateway-$result";
 header("Location: $go");
 } else {
    header("Location: http://www.labishop.com");
    die;
 }
$conn->close();





?>
