<?php
    namespace App\Services;

    // use App\Models\contacts;
    use App\Models\group;

    class GroupService {
        public function groupeNumber() {
            return group::count();
        }

        public function showLastFourGroup() {
            return group::latest()->take(4)->get();
        }

        public function showAllGroup() {
            return group::all();
        }

        public function creatGroup(array $data) {
            return group::create($data);
        }

        public function showGroupInfo($id) {
            return group::find($id);
        }

        public function deleteGroupe($id) {
            return group::find($id)->delete();
        }
    }