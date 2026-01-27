<?php
    namespace App\Services;

    use App\Models\contacts;
    // use App\Models\group;

    class ContactsService {
        public function contactsNumber() {
            return contacts::count();
        }
    }