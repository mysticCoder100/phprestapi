<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

require_once __DIR__ . '/../../class/autoload.php';

$user = new User();

if (!isset($_GET['key'])) {
    echo json_encode([
        'error' => 'Inavlid Request'
    ]);
} else {
    $dev = new Devs([
        'apiKey' => $_GET['key']
    ]);
    if ($_GET['key'] == PUBLIC_KEY) {
        echo json_encode($user->getAllUsersForPublic());
    } else if ($dev->countKey()['exist'] > 0) {
        echo json_encode($user->getAllUsers());
    } else {
        echo json_encode([
            'status' => 'error',
            'message' => 'Invalid Key'
        ]);
    }
}

