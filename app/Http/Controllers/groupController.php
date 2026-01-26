<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class groupController extends Controller
{
    public function index() {
        header("/groups");
        exit;
    }

    public function groups() {
        return view("groups.groups");
    }
}
