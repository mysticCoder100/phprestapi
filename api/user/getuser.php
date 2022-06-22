<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

require_once __DIR__ . '/../../class/autoload.php';


if (
    (isset($_GET['email']) ||
        isset($_GET['state']) ||
        isset($_GET['sex'])
    ) && sizeof($_GET) == 2 && isset($_GET['key'])
) {

    $dev = new Devs([
        'apiKey' => $_GET['key']
    ]);
    if ($_GET['key'] == PUBLIC_KEY) {
        if (isset($_GET['email'])) {
            $user = new User([
                'email' => $_GET['email']
            ]);
            echo json_encode($user->getUserForPublic());
        } else if (isset($_GET['state'])) {
            $user = new User([
                'state' => $_GET['state']
            ]);
            echo json_encode($user->getUserByStateForPublic());
        } else if (isset($_GET['sex'])) {
            $user = new User([
                'sex' => $_GET['sex']
            ]);
            echo json_encode($user->getUserBySexForPublic());
        } else {
            echo json_encode([
                'status' => 'error',
                'message' => 'Invalid Request'
            ]);
        }
    } else if ($dev->countKey()['exist'] > 0) {
        if (isset($_GET['email'])) {
            $user = new User([
                'email' => $_GET['email']
            ]);
            echo json_encode($user->getUser());
        } else if (isset($_GET['state'])) {
            $user = new User([
                'state' => $_GET['state']
            ]);
            echo json_encode($user->getUserByState());
        } else if (isset($_GET['sex'])) {
            $user = new User([
                'sex' => $_GET['sex']
            ]);
            echo json_encode($user->getUserBySex());
        } else {
            echo json_encode([
                'status' => 'error',
                'message' => 'Invalid Request'
            ]);
        }
    } else {
        echo json_encode([
            'status' => 'error',
            'message' => 'Invalid Key'
        ]);
    }
} else {
    echo json_encode([
        'error' => 'Inavlid Request'
    ]);
}
