<?php
function ss($keyword) { 
    $uri = "https://royalpedia.id/screenshot/phone?url=" . $keyword . "";  
    $response = Unirest\Request::get("$uri");  
    $json = json_decode($response->raw_body, true); 
    $result .= $json['result'];
    return $result; 
}
function ss1($keyword) { 
    $uri = "https://royalpedia.id/screenshot/desktop?url=" . $keyword . "";  
    $response = Unirest\Request::get("$uri");  
    $json = json_decode($response->raw_body, true); 
    $result .= $json['result'];
    return $result; 
}
function ss2($keyword) { 
    $uri = "https://royalpedia.id/screenshot/tablet?url=" . $keyword . "";  
    $response = Unirest\Request::get("$uri");  
    $json = json_decode($response->raw_body, true); 
    $result .= $json['result'];
    return $result; 
}

if($message['type']=='text') {
	    if ($command == 'Screenshot') {

        $result = ss($options);
        $balas = array(
            'replyToken' => $replyToken,
            'messages' => array(
                array(
                    'type' => 'image',
                    'originalContentUrl' => $result,
                    'previewImageUrl' => $result
                )
            )
        );
    }
}
if($message['type']=='text') {
	    if ($command == 'Screenshot-desktop') {

        $result = ss1($options);
        $balas = array(
            'replyToken' => $replyToken,
            'messages' => array(
                array(
                    'type' => 'image',
                    'originalContentUrl' => $result,
                    'previewImageUrl' => $result
                )
            )
        );
    }
}
if($message['type']=='text') {
	    if ($command == 'Screenshot-tablet') {

        $result = ss2($options);
        $balas = array(
            'replyToken' => $replyToken,
            'messages' => array(
                array(
                    'type' => 'image',
                    'originalContentUrl' => $result,
                    'previewImageUrl' => $result
                )
            )
        );
    }
}

//untuk api lainnya kamu bisa cek di web saya https://royalpedia.id ya ;)
