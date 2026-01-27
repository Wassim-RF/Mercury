@include('layout.head')
<body class="w-full bg-[#F5F8FF] flex flex-col justify-center items-center">
    <main class="w-full" id="main_page">
        @include('layout.header')
        <section class="w-full p-[2%] pl-[5%] pr-[5%]">
            
            <div class="flex justify-between items-start mb-8">
                <div>
                    <h1 class="text-3xl font-bold text-slate-800">Contacts</h1>
                    <p class="text-gray-500 mt-1">Manage your address book.</p>
                </div>
                <div class="flex gap-3">
                    <button class="inline-flex items-center px-4 py-2.5 border border-transparent text-sm font-medium rounded-lg text-gray-700 bg-gray-100 hover:bg-gray-200 focus:outline-none transition-colors" id="create_newGroupe--Button">
                        <svg class="h-5 w-5 mr-2 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                        </svg>
                        Nouveau groupe
                    </button>
                </div>
            </div>
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 mb-10 w-3/4">

                <div class="relative flex-1">
                    <i class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                    <input type="text" placeholder="Search by name or email..." 
                        class="w-full pl-11 pr-4 py-2.5 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-100 focus:border-blue-400 transition">
                </div>

            </div>

            <h2 class="text-xl font-bold text-gray-900 mb-6">Groupes</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($groups as $group)
                <a href="/group?id={{ $group['id'] }}" class="group relative bg-white rounded-xl border border-gray-100 p-6 shadow-sm hover:shadow-md transition-all duration-200">
                    <div class="flex flex-col items-start">
                        <div class="h-12 w-12 rounded-xl bg-[#{{ $group['color'] }}] flex items-center justify-center text-blue-600 mb-4 text-white">
                            {!! $logo[$group['logo']] !!}
                        </div>
                        <h3 class="text-lg font-bold text-gray-900">{{ $group['name'] }}</h3>
                        <p class="text-gray-500 text-sm mt-1">3 contacts</p>
                    </div>
                </a>
                @endforeach

            </div>
        </section>
    </main>
    @include('mod.createNewGroup')
    <script type="module" src="{{ asset('js/script.js') }}"></script>
</body>