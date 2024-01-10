<?php
$user_message = $_POST['user_message'];
$bot_responses = array(
    "Hello" => "Hi there! How can I assist you?",
    "Help" => "I'm here to provide information and support during a crisis.",
    "Emergency" => "Please call 911 for immediate assistance.",
);
$default_response = "I'm sorry, I don't understand. Please type 'Help' for assistance.";
if (array_key_exists($user_message, $bot_responses)) {
    $bot_response = $bot_responses[$user_message];
} else {
    $bot_response = $default_response;
}
// Respond to the user
echo $bot_response;
?>
