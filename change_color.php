<?php
    $data = array();
    $data['id'] = $_GET['id'];
    $data['color'] = $_GET['color'];

    $url = "http://hexcreativemm.co:5000/change_color";

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    $result = json_decode(curl_exec($curl));
    header("location: /room-decorate.php?id=" . $result->id);
?>
