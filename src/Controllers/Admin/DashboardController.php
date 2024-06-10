<?php

namespace Bachv\Asm2Oop\Controllers\Admin;

use Bachv\Asm2Oop\Commons\Controller;
use Bachv\Asm2Oop\Commons\Helper;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $this->renderViewAdmin(__FUNCTION__);
    }
}
