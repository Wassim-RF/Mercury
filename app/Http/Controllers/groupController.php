<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ContactsService;
use App\Services\GroupService;

class groupController extends Controller
{
    public function index(ContactsService $contactsService , GroupService $groupService) {
        $contactNumber = $contactsService->contactsNumber();
        $groupNumber = $groupService->groupeNumber();
        return view("home" , compact(['contactNumber' , 'groupNumber']));
    }

    public function groups() {
        return view("groups.groups");
    }  

    public function showOneGroup() {
        return view("groups.showGroup");
    }
}
