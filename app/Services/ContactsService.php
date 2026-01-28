<?php
    namespace App\Services;

    use App\Models\contacts;
    // use App\Models\group;

    class ContactsService {
        public function contactsNumber() {
            return contacts::count();
        }

        public function showLastThreeContacts() {
            return contacts::latest()->take(3)->get();
        }

        public function createContact(array $data) {
            return contacts::create($data);
        }

        public function showAllGroup() {
            return contacts::all();
        }

        public function deleteContacts($id) {
            return contacts::find($id)->delete();
        }

        public function searchContacts($search)
        {
            return contacts::where('name', 'like', "%$search%")->get();
        }

    }