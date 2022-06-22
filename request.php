<?php

require_once __DIR__ . '/class/autoload.php';


function generateToken()
{
    $rand = rand(0, 20000);
    $key = str_pad($rand, 10, 123);
    return $key;
}


if ($_SERVER['REQUEST_METHOD'] == "POST") {


    if (empty($_POST['email'])) {
        echo json_encode([
            'status' => 'error',
            'message' => 'Opps Field Empty'
        ]);
    } else if (isset($_POST["generate"])) {
        $data = [
            'email' => $_POST['email'],
            'apiKey' => generateToken()
        ];

        $dev = new Devs($data);
        if ($dev->countDev()['exist'] == 0) {
            $register = $dev->insertDev();
            if ($register) {
                $get = $dev->getDev();
                echo json_encode([
                    'status' => 'success',
                    'message' => $get['api_key']
                ]);
            }
        } else if ($dev->countDev()['exist'] > 0) {
            $register = $dev->upadteDev();
            if ($register) {
                $get = $dev->getDev();
                echo json_encode([
                    'status' => 'success',
                    'message' => $get['api_key']
                ]);
            }
        }
    } else if (isset($_POST["get"])) {
        $data = [
            'email' => $_POST['email']
        ];
        $dev = new Devs($data);
        if ($dev->countDev()['exist'] == 0) {
            echo json_encode([
                'status' => 'error',
                'message' => "Opps Sorry Invalid Email"
            ]);
        } else if ($dev->countDev()['exist'] > 0) {
            $data = [
                'email' => $_POST['email']
            ];
            $dev = new Devs($data);
            $get = $dev->getDev();
            echo json_encode([
                'status' => 'success',
                'message' => $get['api_key']
            ]);
        }
    }
}
