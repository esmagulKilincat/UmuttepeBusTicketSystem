<?php

namespace App\Controllers;


class Admin extends BaseController
{
    public function index(): string
    {
        return View('admin/adminHeader.php')
        .View('admin/adminHome.php')
        .View('admin/adminFooter.php');
    }
}