<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jwilsson\SpotifyWebApi\SpotifyWebApi;


class SpotifyController extends Controller
{
    public function spotify()
    {
        $api = new SpotifyWebApi();

        // Set your client id and secret
        $api->setClientId('c7b77ef6ee3c47cba6dde30a2bb849e8');
        $api->setClientSecret('75fa237eed6e42e38f0d8f06d76e83ab');

        // Request a access token using the client credentials
        $api->clientCredentialsGrant();
        $accessToken = $api->getAccessToken();

        // Set the access token on the API wrapper
        $api->setAccessToken($accessToken);

        // Use the API to access the Spotify Web API endpoints
        $currentUser = $api->me();
    }
}
