<!-- This file allows you to host this page as a static file on Heroku -->
<?php header( 'Location: /index.html' ) ;  ?>
<?php
    if(count($_POST)){
        $url = 'https://script.google.com/macros/s/AKfycbxFi4K2gfLuZfCZLEpdt3JDownMZKF5glkS44mJGCStMZAP4n1E1LrYINwxinb2kMkg/exec';
        $data = array(
            'qr_file' => $_POST['qr_file'],
            'genre' => $_POST['genre'],
            'sex' => $_POST['sex'],
            'age' => $_POST['age'],
            'residence' => $_POST['residence'],
        );
        $context = array(
            'http' => array(
                'method'  => 'POST',
                'header'  => implode("\r\n", array('Content-Type: application/x-www-form-urlencoded',)),
                'content' => http_build_query($data)
            )
        );
        $response_json = file_get_contents($url, false, stream_context_create($context));
        $response_data = json_decode($response_json);
        var_dump($response_data);
    }
?>