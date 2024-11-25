<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    protected $apiKey;

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function index()
    {
        return "The API Key is: " . $this->apiKey;
    }
}

?>
