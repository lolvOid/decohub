<?php
    $server = "http://hexcreativemm.co:5000/";
    if(isset($_POST)){
        $api = $server . "upload_file";
        $data = array();
        $data['color'] = $_POST['color'];
        if(isset($_FILES['file'])){
            $file = $_FILES['file'];
            $cFile = new CURLFile($file['tmp_name'], $file['type'], $file['name']);
            $data['file'] = $cFile;
        }
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $api);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        $result = json_decode(curl_exec($curl));
        if(isset($result->id)){
            header("location: /room-decorate.php?id=" . $result->id);
        }
        curl_close($curl);
    }
?>
