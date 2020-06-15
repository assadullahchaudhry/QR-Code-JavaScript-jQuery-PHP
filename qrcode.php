<?php

if( isset( $_POST['data'] ) AND !empty( $_POST['data'] ) ){

    $data = $_POST['data'];

    list($type, $data) = explode(';', $data);
    list(, $data)      = explode(',', $data);

    $data = base64_decode($data);

    $filename = 'public/images/'.time().'.png';

    $data = file_put_contents( $filename, $data);

    // save the image URL into the database table

    if( $data ){
        echo json_encode([
            'status' => 'success', 
            'url' => $filename,
        ]);
    }
    else{
        echo json_encode([
            'status' => 'error', 
            'message' => 'An error has occured while storing QR Code!',
        ]);
    }
}
else{
    echo 'Please send some data with the form';
}