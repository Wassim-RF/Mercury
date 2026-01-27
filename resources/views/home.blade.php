@include('layout.head')
<body class="w-full bg-[#F5F8FF] flex flex-col justify-center items-center">
    <main class="w-full" id="main_page">
        @include('layout.header')
        <section class="w-full p-[2%] pl-[5%] pr-[5%]">
            <div class="w-full">
                <div class="mb-8">
                    <h1 class="text-3xl font-bold text-slate-900">Overview</h1>
                    <p class="text-slate-500 mt-1">Welcome back. Here's what's happening with your contacts.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    
                    <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
                        <div class="flex justify-between items-start mb-4">
                            <span class="text-slate-500 font-medium text-lg">Total Contacts</span>
                            <i data-lucide="users" class="text-slate-400 w-5 h-5"></i>
                        </div>
                        <div class="text-4xl font-bold text-slate-900 mb-2">{{ $contactNumber }}</div>
                        <div class="text-slate-400 text-sm font-medium">+2 from last month</div>
                    </div>

                    <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
                        <div class="flex justify-between items-start mb-4">
                            <span class="text-slate-500 font-medium text-lg">Total Groups</span>
                            <i data-lucide="folder" class="text-slate-400 w-5 h-5"></i>
                        </div>
                        <div class="text-4xl font-bold text-slate-900 mb-2">{{ $groupNumber }}</div>
                        <div class="text-slate-400 text-sm font-medium leading-tight">Organized<br>Categories</div>
                    </div>

                    <div class="bg-[#4B91E2] p-8 rounded-2xl shadow-lg text-white md:col-span-1">
                        <h2 class="text-2xl font-bold mb-1">Quick Actions</h2>
                        <p class="text-blue-100 mb-6">Manage your directory efficiently</p>
                        
                        <div class="flex flex-wrap gap-3">
                            <button class="bg-white text-slate-900 px-4 py-2.5 rounded-lg font-semibold flex items-center gap-2 hover:bg-gray-100 transition-colors" id="create_newContact--Button">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                                </svg>
                                Add Contact
                            </button>
                            <button class="bg-blue-400/50 text-white px-4 py-2.5 rounded-lg font-semibold flex items-center gap-2 hover:bg-blue-400/70 transition-colors border border-blue-300/30" id="create_newGroupe--Button">
                                <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z"/>
                                </svg>
                                Add Group
                            </button>
                        </div>
                    </div>

                </div>
            </div>
            <div class="w-full mx-auto mt-8 grid grid-cols-1 lg:grid-cols-3 gap-6">
        
                <div class="lg:col-span-2 bg-white p-8 rounded-2xl border border-gray-100 shadow-sm">
                    <div class="flex justify-between items-center mb-8">
                        <div>
                            <h2 class="text-xl font-bold text-slate-900">Recent Groups</h2>
                            <p class="text-slate-500">Latest additions to your directory</p>
                        </div>
                        <a href="/groups" class="text-slate-600 font-medium flex items-center gap-1 hover:underline">
                            View All <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        @foreach ($lastFourGroups as $group)
                            <a href="/group?id={{ $group['id'] }}" class="flex items-center gap-4 p-5 rounded-xl border border-blue-100 bg-white hover:bg-slate-50 transition-colors cursor-pointer">
                                <div class="bg-[#{{ $group['color'] }}] p-3 rounded-2xl text-white">
                                    {!! $logo[$group['logo']] !!}
                                </div>
                                <div>
                                    <h3 class="font-bold text-slate-900 text-lg">{{ $group['name'] }}</h3>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>

                <div class="bg-white p-8 rounded-2xl border border-gray-100 shadow-sm">
                    <h2 class="text-xl font-bold text-slate-900">Recent Contacts</h2>
                    <p class="text-slate-500 mb-8 leading-tight">Latest additions to your directory</p>

                    <div class="space-y-6">
                        @foreach ($lastThreeContacts as $contact)
                            <div class="flex items-center gap-4">
                                <div class="w-10 h-10 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center font-semibold">{{ strtoupper($contact['name']['0']) }}</div>
                                <div>
                                    <h4 class="font-bold text-slate-900 leading-none">{{ ucfirst($contact['name']) }}</h4>
                                    <span class="text-slate-400 text-sm">{{ $contact['phone_number'] }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </main>
    @include('mod.createNewGroup')
    @include('mod.createNewContact')
    <script type="module" src="{{ asset('js/script.js') }}"></script>
</body>
</html>