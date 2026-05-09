<?php
function register($pdo) {

    $data = json_decode(file_get_contents("php://input"), true);

    $name = $data['name'];
    $email = $data['email'];
    $password = password_hash($data['password'], PASSWORD_DEFAULT);

    $query = $pdo->prepare(
        "INSERT INTO users(name, email, password)
         VALUES(?, ?, ?)"
    );

    $query->execute([$name, $email, $password]);

    echo json_encode([
        "message" => "User registered"
    ]);
}

function login($pdo) {

    $data = json_decode(file_get_contents("php://input"), true);

    $email = $data['email'];
    $password = $data['password'];

    $query = $pdo->prepare(
        "SELECT * FROM users WHERE email = ?"
    );

    $query->execute([$email]);

    $user = $query->fetch(PDO::FETCH_ASSOC);

    if($user && password_verify($password, $user['password'])) {

        echo json_encode([
            "message" => "Login successful",
            "user" => $user
        ]);

    } else {

        http_response_code(401);

        echo json_encode([
            "message" => "Invalid credentials"
        ]);
    }
}
