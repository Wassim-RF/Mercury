<?php
    namespace App\Services;

    // use App\Models\contacts;
    use App\Models\group;

    class GroupService {
        public function groupeNumber() {
            return group::count();
        }
    }