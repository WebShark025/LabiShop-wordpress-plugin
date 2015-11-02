<?php
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


 //goto
 $url = 'http://payline.ir/payment/gateway-result-second';
 $api = '1cbc6-82b92-1adb5-99ad6-5a0a6be1b702ef2bdc3079bf0bed';
 $trans_id = $_POST['trans_id'];
 $id_get = $_POST['id_get'];
 $result = get($url,$api,$trans_id,$id_get);
    if ($result == 1){
include("config-new.php");
        // Create connection
    $conn = new mysqli($DATABASE_HOST, $DATABASE_USERNAME, $DATABASE_USER_PASSWORD, $DATABASE_DBNAME);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "UPDATE Orders SET isdone='true' WHERE get_id='$id_get'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
} 


$conn->close();

 } else {
     header("Location: http://labishop.ir/");
     die;
 }
 ?>
