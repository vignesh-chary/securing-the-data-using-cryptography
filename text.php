<?php
   
  if(isset($_POST['encrypt'])){
   
   $simple_string = $_POST['text'];
   echo "<br>";
   $cipher = "AES-256-CBC";
   $option = 0; 
   $encryption_iv = str_repeat("0",openssl_cipher_iv_length($cipher)); 
   $key = $_POST['key'];
   $encryption = openssl_encrypt($simple_string,$cipher,$key,$option,$encryption_iv);

   echo "Data Encrypted : ".$encryption;
   echo "<br>";
  }

if (isset($_POST['decrypt'])){
   $text = $_POST['text'];
   $cipher = "AES-256-CBC";
   $option = 0;
   $decryption_iv = str_repeat("0",openssl_cipher_iv_length($cipher));
   $key = $_POST['key'];
   $decryption = openssl_decrypt($text,$cipher,$key,$option,$decryption_iv);

   echo "Data Decrypted : ".$decryption;
   echo "<br>";
  }
  
?>