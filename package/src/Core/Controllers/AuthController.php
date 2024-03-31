<?php

namespace Mangopie\Core\Controllers;

class AuthController extends AbstractWebController
{
    public function __construct()
    {
        $this->middleware('auth');
    }
}
