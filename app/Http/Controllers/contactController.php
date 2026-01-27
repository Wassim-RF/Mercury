<?php

namespace App\Http\Controllers;

use App\Services\ContactsService;
use App\Services\GroupService;
use Illuminate\Http\Request;

class contactController extends Controller
{
    public function index(GroupService $groupService , ContactsService $contactsService) {
        $groups = $groupService->showAllGroup();
        $contacts = $contactsService->showAllGroup();
        return view("contacts.contacts" , compact(['groups' , 'contacts']));
    }

    public function store(Request $request , ContactsService $contactsService) {
        $validated = $request->validate([
            'contact_name' => 'required|string|max:50',
            'contact_phone' => 'required|string|max:50',
            'group_id' => 'required|integer|nullable'
        ]);

        $data = [
            'name' => $validated['contact_name'],
            'phone_number' => $validated['contact_phone'],
            'group_id' => $validated['group_id']
        ];

        $contactsService->createContact($data);

        return redirect()->back();
    }
}
