<?php
function auth() {

    $headers = getallheaders();

    if(!isset($headers['Authorization'])) {

        http_response_code(401);

        echo json_encode([
            "message" => "Unauthorized"
        ]);

        exit();
    }
}
