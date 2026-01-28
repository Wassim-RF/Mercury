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

            <div class="flex gap-4 mb-6">
                <form method="GET" action="/contacts" class="relative flex-1">
                    <i class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                    <input type="text" name="search" placeholder="Search by name or email..." 
                        class="w-full pl-11 pr-4 py-2.5 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-100 focus:border-blue-400 transition">
                </form>
                <div class="relative w-64">
                    <i class="fa-solid fa-filter absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                    <select class="w-full pl-11 pr-10 py-2.5 bg-gray-50 border border-gray-200 rounded-lg appearance-none focus:outline-none focus:ring-2 focus:ring-blue-100 cursor-pointer">
                        <option>All Groups</option>
                        <option>Work</option>
                        <option>Family</option>
                        <option>Friends</option>
                    </select>
                    <i class="fa-solid fa-chevron-down absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 pointer-events-none text-xs"></i>
                </div>
            </div>

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
                    <tbody class="divide-y divide-gray-100">
                        @foreach ($contacts as $contact)
                            <tr class="hover:bg-gray-50/50 transition border-b border-gray-100">
                                <td class="px-6 py-4 flex items-center">
                                    <div class="w-10 h-10 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center font-bold mr-4">
                                        A </div>
                                    <span class="font-medium text-gray-800">{{ $contact['name'] }}</span>
                                </td>

                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-600 flex items-center">
                                        <i class="fa-solid fa-phone mr-2 w-4"></i> {{ $contact['phone_number'] }}
                                    </div>
                                </td>

                                <td class="px-6 py-4">
                                    <span class="px-3 py-1 rounded-full bg-blue-100 text-blue-700 text-xs font-semibold uppercase tracking-wider">Work</span>
                                </td>

                                <td class="px-6 py-4">
                                    <div class="flex items-center justify-center gap-2">
                                        <button type="button"
                                            class="group p-2.5 rounded-lg border border-blue-100 bg-blue-50 text-blue-600 hover:bg-blue-600 hover:text-white transition-all duration-200 shadow-sm edit_contact_btn"
                                            data-id="{{ $contact->id }}"
                                            data-name="{{ $contact->name }}"
                                            data-phone="{{ $contact->phone_number }}"
                                            data-group="{{ $contact->group_id }}"
                                            title="Edit Contact">
                                            <i class="fa-solid fa-pen-to-square text-sm"></i>
                                        </button>
                                        <form method="POST" action="/contacts/store">
                                            @csrf
                                            @method('DELETE')
                                            <input type="text" class="hidden" name="delete" value="{{ $contact['id'] }}">
                                            <button type="submit"
                                                class="group p-2.5 rounded-lg border border-red-100 bg-red-50 text-red-600 hover:bg-red-600 hover:text-white transition-all duration-200 shadow-sm"
                                                title="Delete Contact">
                                                <i class="fa-solid fa-trash text-sm"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </section>
    </main>
    @include('mod.createNewContact')
    <script type="module" src="{{ asset('js/script.js') }}"></script>
</body>