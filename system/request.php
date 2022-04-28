<?php

function request(string $endpoint, array $data) : stdClass
{
    $url = "https://www.patatenouille.link/adventure-online/";
    // $url = "http://advonline/";
    $url .= $endpoint;

    $json = json_encode($data);

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-Type:application/json"]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    if ($response == false)
        die("HAHA");

    return json_decode($response);
}