<?php

use Dotenv\Dotenv;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

define("OPENAI_API_KEY", $_ENV['OPENAI_API_KEY']);

header('Content-Type: application/json');

$user_message = $_POST['message'] ?? '';

if (empty($user_message)) {
    echo json_encode(["error" => "El mensaje no puede estar vacío"]);
    exit;
}


$data = [
    "model"=> "gpt-4o-mini",
    "messages" => [
        ["role" => "system", "content" => "Eres un asistente útil."],
        ["role" => "user", "content" => $user_message]
    ],
    "temperature" => 0.7
];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.openai.com/v1/chat/completions");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Authorization: Bearer " . OPENAI_API_KEY,
    "Content-Type: application/json"
]);

$response = curl_exec($ch);
$http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

// Manejo de errores
if (!$response) {
    echo json_encode(["error" => "Error en la conexión con OpenAI"]);
    exit;
}

echo $response;
?>