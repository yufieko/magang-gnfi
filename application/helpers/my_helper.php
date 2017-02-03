
<?php

function secure_password($password) {
    $options = [
        'cost' => 10
    ];
    $password = password_hash($password, PASSWORD_BCRYPT, $options);
    return $password;
}
