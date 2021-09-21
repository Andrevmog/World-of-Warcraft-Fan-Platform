<?php

require_once '../WoWFanSiteCredentials/credentials.php'; // Secret file with developer info

$authorization = new OAtuth(); // Ignore the error on the editor
$acessToken = $authorization->generateAcessToken(); // Calls the function to generate a Auth token

echo '<pre>';
print_r($acessToken); // Info about the generated token
//die();

$acessToken = $acessToken['raw_response']['access_token']; // Extracts only the numerical token used to make requests

// Test Function to see if it works
function test() {
    global $acessToken; // Use to acess the acessToken variable inside this function

    // Header as battle.net documentation
    $arrayTest = [
        "Authorization: Bearer " . $acessToken
    ];

    $ch = curl_init();
    $url = 'https://us.api.blizzard.com/data/wow/token/?namespace=dynamic-us'; // Wow token prices, etc

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $arrayTest);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch); // Receives the response from the server
    curl_close($ch);

    $accessTokenResponse = json_decode($response, true); // Decodes the response as an array

    return $accessTokenResponse;
}

echo '<pre>';
print_r(test()); // Info about the Wow token