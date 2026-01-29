@include('layout.head')
<body class="w-full bg-[#F5F8FF] flex flex-col justify-center items-center">
    <main class="w-full">
        @include('layout.header')
        <section class="w-full p-[2%] pl-[5%] pr-[5%]">
            <div class="flex justify-between items-start mb-8">
                <div>
                    <h1 class="text-3xl font-bold text-slate-800">Contacts</h1>
                    <p class="text-gray-500 mt-1">Manage your address book.</p>
                </div>
                <button id="create_newContact--Button" class="bg-[#3F94E9] hover:bg-[#1e83e7] text-white px-5 py-2.5 rounded-lg font-medium flex items-center transition">
                    <span class="mr-2 text-xl">+</span> Add Contact
                </button>
            </div>

            <form id="filterForm" method="GET" class="flex gap-4 mb-6">
                <div class="relative flex-1">
                    <i class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                    <input type="text" id="search" name="search" placeholder="Search by name or email..." 
                        class="w-full pl-11 pr-4 py-2.5 bg-gray-50 border border-gray-200 rounded-lg">
                </div>

                <div class="relative w-64">
                    <i class="fa-solid fa-filter absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                    <select id="filter" name="filter"
                        class="w-full pl-11 pr-10 py-2.5 bg-gray-50 border border-gray-200 rounded-lg">
                        <option value="">All Groups</option>
                        @foreach ($groups as $group)
                            <option value="{{ $group->id }}">{{ $group->name }}</option>
                        @endforeach
                    </select>
                </div>
            </form>

            <div class="overflow-hidden border border-gray-100 rounded-lg">
                <table class="w-full text-left bg-white">
                    <thead class="bg-gray-50 border-b border-gray-100">
                        <tr>
                            <th class="px-6 py-4 text-sm font-semibold text-gray-600">Name</th>
                            <th class="px-6 py-4 text-sm font-semibold text-gray-600">Contact Info</th>
                            <th class="px-6 py-4 text-sm font-semibold text-gray-600">Group</th>
                            <th class="px-6 py-4 text-sm font-semibold text-gray-600">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100" id="contacts-container">
                        @include('contacts.partials.contacts_list' , ['contacts' => $contacts])
                    </tbody>
                </table>
            </div>
    </section>
    </main>
    @include('mod.createNewContact')
    <script type="module" src="{{ asset('js/script.js') }}"></script>
    <script>
        const form = document.getElementById("filterForm");

        if (form) {
            form.addEventListener("submit", (e) => e.preventDefault());
        }
    </script>
</body>