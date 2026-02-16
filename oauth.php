<?php
require_once 'config.php';

if (!isset($_GET['code'])) {
    die("No authorization code found.");
}

$code = $_GET['code'];

/* Step 1: Exchange code for access token */

$post_fields = [
    'code' => $code,
    'client_id' => CLIENT_ID,
    'client_secret' => CLIENT_SECRET,
    'redirect_uri' => REDIRECT_URI,
    'grant_type' => 'authorization_code'
];

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, TOKEN_URL);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_fields));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
curl_close($ch);

$token_data = json_decode($response, true);

if (!isset($token_data['access_token'])) {
    die("Failed to get access token.");
}

$access_token = $token_data['access_token'];

/* Step 2: Get User Info */

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, USERINFO_URL);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Authorization: Bearer " . $access_token
]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$user_info = curl_exec($ch);
curl_close($ch);

$user_data = json_decode($user_info, true);

$_SESSION['name'] = $user_data['name'];
$_SESSION['email'] = $user_data['email'];

header("Location: index.php");
exit();
?>