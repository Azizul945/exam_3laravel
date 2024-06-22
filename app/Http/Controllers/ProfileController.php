<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($id)
    {
        $name = "Donald Trump";
        $age = 75;

        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age
        ];

        // Prepare the response
        $status_code =200;

        // Set the cookie parameters
        $cookie_name = 'access_token';
        $cookie_value = '123-XYZ';
        $cookie_expiration = 1; // 1 minute (in minutes)
        $cookie_path = '/';
        $cookie_domain = $_SERVER['SERVER_NAME']; // Default is null, which uses current domain
        $cookie_secure = false; // Change to true if using HTTPS
        $cookie_http_only = true;

        $response = response()->json($data,$status_code);
        // Add the cookie to the response
        $response->cookie(
            $cookie_name,
            $cookie_value,
            $cookie_expiration,
            $cookie_path,
            $cookie_domain,
            $cookie_secure,
            $cookie_http_only
        );

        return $response;
    }
}
