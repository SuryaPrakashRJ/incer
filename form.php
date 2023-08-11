

<?php
define('BOT_TOKEN', '6685385325:AAETeH6Pl2u27GyzJMiexJKMOVUpxmKmbl8'); // Replace with your actual bot token
define('API_URL', 'https://api.telegram.org/bot' . BOT_TOKEN . '/sendMessage');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $chat_id = '-963609272';
}
$message_text = "Name: $name\nEmail: $email\nMessage: $message";
$encoded_message = urlencode($message_text);

$response = file_get_contents(API_URL . "?chat_id=$chat_id&text=$encoded_message&parse_mode=HTML");

if ($response === false) {
    echo "Error sending message.";
} else {
    echo "Message sent successfully!";
}
?>
