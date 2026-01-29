@include('layout.head')

<body class="w-full bg-[#F5F8FF] flex flex-col justify-center items-center">
    <main class="w-full">
        @include('layout.header')
        <section class="w-full p-[2%] pl-[5%] pr-[5%]">
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
                <div class="relative flex-1 max-w-xl">
                    <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </span>
                    <input type="text" placeholder="Rechercher un contact par nom, email ou téléphone..."
                        class="block w-full pl-10 pr-3 py-2 border border-gray-200 rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>

                <div class="flex flex-wrap gap-3">
                    <button class="bg-[#3F94E9] hover:bg-[#1e83e7] text-white px-5 py-2.5 rounded-lg font-semibold flex items-center shadow-sm transition-all active:scale-95 order-first" id="create_newContact--Button">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                        Add Contact
                    </button>

                    <button 
                        class="bg-white border border-gray-300 text-gray-700 hover:bg-gray-50 px-5 py-2.5 rounded-lg font-medium flex items-center transition-all shadow-sm" 
                        id="edit_group_button"
                        data-id ="{{ $group['id'] }}"
                        data-name="{{ $group['name'] }}"
                        data-color="{{ $group['color'] }}"
                        data-logo="{{ $group['logo'] }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                        </svg>
                        Modifier
                    </button>

                    <form action="/groups/store" method="POST">
                        @csrf
                        @method('DELETE')
                        <button 
                            class="bg-red-50 hover:bg-red-100 text-red-600 border border-red-100 px-5 py-2.5 rounded-lg font-medium flex items-center transition-all" 
                            id="delete_group_button"
                            data-id="{{ $group['id'] }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                            Supprimer
                        </button>
                        <input class="hidden" type="text" name="delete" value="{{ $group['id'] }}">
                    </form>
                </div>
            </div>

            <div class="mb-6">
                <a href="/groups" class="text-gray-500 text-sm flex items-center gap-1 hover:underline mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    Retour au tableau de bord
                </a>
                <h1 class="text-3xl font-bold text-gray-900">{{ $group['name'] }}</h1>
                <p class="text-gray-500">3 contacts</p>
            </div>

            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden shadow-sm">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-50 text-gray-500 text-sm border-b border-gray-200">
                            <th class="px-6 py-4 font-medium">Nom</th>
                            <th class="px-6 py-4 font-medium">Téléphone</th>
                            <th class="px-6 py-4 font-medium">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @foreach ($group->Contact as $contact)
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
    @if (session('update'))
<div 
    id="toast-update"
    class="fixed top-6 right-6 z-50 animate-slide-in"
>
    <div class="flex items-center gap-3 bg-blue-500 text-white px-5 py-4 rounded-xl shadow-2xl min-w-[280px]">
        
        <!-- Icon -->
        <div class="bg-white/20 p-2 rounded-lg">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" 
                 viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                      d="M11 5h2m-1-1v2m-6 4h12M5 19h14" />
            </svg>
        </div>

        <!-- Message -->
        <div class="flex-1 text-sm font-medium">
            {{ session('update') }}
        </div>

        <!-- Close Button -->
        <button onclick="closeToast('toast-update')" class="text-white/80 hover:text-white text-lg leading-none">
            ✕
        </button>
    </div>
</div>
@endif

    @include('mod.createNewContact')
    @include('mod.createNewGroup')
    <script type="module" src="{{ asset('js/script.js') }}"></script>
    <script>
        function closeToast(id) {
            const toast = document.getElementById(id);
            if (toast) toast.remove();
        }
        setTimeout(() => {
            closeToast('toast-success');
            closeToast('toast-update');
        }, 5000);
    </script>

</body>

</html>