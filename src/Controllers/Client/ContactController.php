<?php

namespace Bachv\Asm2Oop\Controllers\Client;

use Bachv\Asm2Oop\Commons\Controller;

class ContactController extends Controller
{
    public function index() {
        echo __CLASS__ . '@' . __FUNCTION__;
    }

    public function store() {
        echo __CLASS__ . '@' . __FUNCTION__;
    }
}