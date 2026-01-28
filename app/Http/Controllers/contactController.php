<?php

namespace App\Http\Controllers;

use App\Services\ContactsService;
use App\Services\GroupService;
use App\Models\contacts;
use Illuminate\Http\Request;

class contactController extends Controller
{
    public function index(Request $request , GroupService $groupService , ContactsService $contactsService) {
        $groups = $groupService->showAllGroup();
        $search = $request->input('search');

        if ($search) {
            $contacts = $contactsService->searchContacts($search);
        } else {
            $contacts = contacts::all();
        }
        return view("contacts.contacts" , compact(['groups' , 'contacts']));
    }

    public function store(Request $request , ContactsService $contactsService) {
        $validated = $request->validate([
            'contact_name' => 'required|string|max:50',
            'contact_phone' => 'required|string|max:50',
            'group_id' => 'required|exists:groups,id'
        ]);

        $data = [
            'name' => $validated['contact_name'],
            'phone_number' => $validated['contact_phone'],
            'group_id' => $validated['group_id']
        ];

        $contactsService->createContact($data);

        return redirect()->back()->with('success', 'Contact ajouté en success');
    }

    public function update(Request $request) {
        contacts::find($request->contact_id)->update([
            'name' => $request->contact_name,
            'phone_number' => $request->contact_phone,
            'group_id' => $request->group_id
        ]);
    }

    public function destroy(Request $request , ContactsService $contactsService) {
        if ($request->delete) {
            $contactsService->deleteContacts($request->delete);
        }
        return redirect()->back();
    }
}