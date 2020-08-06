<?php
    $result = null;
    if(isset($_GET['id'])){
        $url = "http://hexcreativemm.co:5000/get_processed_images?id=" . $_GET['id'];
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $result = json_decode(curl_exec($curl));
    }
?>
