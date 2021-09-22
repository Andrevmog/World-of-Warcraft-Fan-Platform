<?php

require_once '../../../WoWFanSiteCredentials/credentials.php'; // Secret file with developer info

//===TEMPORARY===//
$authorization = new OAtuth(); // Ignore the error on the editor
$acessToken = $authorization->generateAcessToken(); // Calls the function to generate a Auth token

echo '<pre>';
print_r($acessToken); // Info about the generated token

$acessToken = $acessToken['responseArray']['access_token']; // Extracts only the numerical token used to make requests
//===TEMPORARY===//

// Function to return all mounts from the WoW database
function mountsIndex() {
    global $acessToken; // Use to acess the acessToken variable inside this function

    // Header as battle.net documentation
    $acessTokenHeader = [
        "Authorization: Bearer " . $acessToken
    ];

    $ch = curl_init();
    $url = 'https://us.api.blizzard.com/data/wow/mount/index?namespace=static-us&locale=en_US'; // Index of all mounts in WoW

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $acessTokenHeader);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); // Rename to false to stop seeing the array

    $response = curl_exec($ch); // Receives the response from the server
    curl_close($ch);

    $mountResponse = json_decode($response, true); // Decodes the response as an array
    return $mountResponse;
}

// Function to return all mounts that match the search performed by the user
// IN DEVELOPMENT -DONT TOUCH IT-
function mountsSearch() {
    global $acessToken; // Use to acess the acessToken variable inside this function

    // Header as battle.net documentation
    $acessTokenHeader = [
        "Authorization: Bearer " . $acessToken
    ];

    //mountSearchInput HTML
}

//===TEMPORARY===//
echo '<pre>';
print_r(mountsIndex()); // Info
//===TEMPORARY===//