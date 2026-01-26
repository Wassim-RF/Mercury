<div class="fixed inset-0 hidden items-center justify-center bg-black/50" id="modale_NewGroupe_pop">
        <form action="/" method="POST" class="w-[400px] mx-auto bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100 absolute button-[50%]">

            <div class="px-6 py-4 border-b border-gray-100 bg-gray-50">
                <h3 class="text-lg font-semibold text-gray-900">Créer un nouveau groupe</h3>
            </div>

            <div class="p-6 space-y-6">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Nom du groupe</label>
                    <input type="text" id="name" name="name" required
                        class="block w-full rounded-lg border-gray-300 border px-3 py-2 text-gray-900 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm" 
                        placeholder="Ex: Famille">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-3">Couleur du thème</label>
                    <div class="flex flex-wrap gap-3">
                        <label class="relative cursor-pointer">
                            <input type="radio" name="color" value="FF6B6B" class="peer sr-only" checked>
                            <div class="w-8 h-8 rounded-full border-2 border-transparent peer-checked:ring-2 peer-checked:ring-offset-2 peer-checked:ring-gray-400 transition-all" style="background-color: #FF6B6B;"></div>
                        </label>

                        <label class="relative cursor-pointer">
                            <input type="radio" name="color" value="4D96FF" class="peer sr-only">
                            <div class="w-8 h-8 rounded-full border-2 border-transparent peer-checked:ring-2 peer-checked:ring-offset-2 peer-checked:ring-gray-400 transition-all" style="background-color: #4D96FF;"></div>
                        </label>

                        <label class="relative cursor-pointer">
                            <input type="radio" name="color" value="FFD93D" class="peer sr-only">
                            <div class="w-8 h-8 rounded-full border-2 border-transparent peer-checked:ring-2 peer-checked:ring-offset-2 peer-checked:ring-gray-400 transition-all" style="background-color: #FFD93D;"></div>
                        </label>

                        <label class="relative cursor-pointer">
                            <input type="radio" name="color" value="FF4444" class="peer sr-only">
                            <div class="w-8 h-8 rounded-full border-2 border-transparent peer-checked:ring-2 peer-checked:ring-offset-2 peer-checked:ring-gray-400 transition-all" style="background-color: #FF4444;"></div>
                        </label>

                        <label class="relative cursor-pointer">
                            <input type="radio" name="color" value="6BCB77" class="peer sr-only">
                            <div class="w-8 h-8 rounded-full border-2 border-transparent peer-checked:ring-2 peer-checked:ring-offset-2 peer-checked:ring-gray-400 transition-all" style="background-color: #6BCB77;"></div>
                        </label>

                        <label class="relative cursor-pointer">
                            <input type="radio" name="color" value="9B59B6" class="peer sr-only">
                            <div class="w-8 h-8 rounded-full border-2 border-transparent peer-checked:ring-2 peer-checked:ring-offset-2 peer-checked:ring-gray-400 transition-all" style="background-color: #9B59B6;"></div>
                        </label>

                        <label class="relative cursor-pointer">
                            <input type="radio" name="color" value="95A5A6" class="peer sr-only">
                            <div class="w-8 h-8 rounded-full border-2 border-transparent peer-checked:ring-2 peer-checked:ring-offset-2 peer-checked:ring-gray-400 transition-all" style="background-color: #95A5A6;"></div>
                        </label>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-3">Icône du groupe</label>
                    <div class="grid grid-cols-5 gap-3">
                        
                        <label class="cursor-pointer">
                            <input type="radio" name="logo" value="family" class="peer sr-only">
                            <div class="p-3 rounded-lg border border-gray-200 text-gray-400 peer-checked:border-blue-500 peer-checked:bg-blue-50 peer-checked:text-blue-600 flex justify-center transition-all">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
                            </div>
                        </label>

                        <label class="cursor-pointer">
                            <input type="radio" name="logo" value="friends" class="peer sr-only">
                            <div class="p-3 rounded-lg border border-gray-200 text-gray-400 peer-checked:border-blue-500 peer-checked:bg-blue-50 peer-checked:text-blue-600 flex justify-center transition-all">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" /></svg>
                            </div>
                        </label>

                        <label class="cursor-pointer">
                            <input type="radio" name="logo" value="work" class="peer sr-only">
                            <div class="p-3 rounded-lg border border-gray-200 text-gray-400 peer-checked:border-blue-500 peer-checked:bg-blue-50 peer-checked:text-blue-600 flex justify-center transition-all">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                            </div>
                        </label>

                        <label class="cursor-pointer">
                            <input type="radio" name="logo" value="emergency" class="peer sr-only">
                            <div class="p-3 rounded-lg border border-gray-200 text-gray-400 peer-checked:border-blue-500 peer-checked:bg-blue-50 peer-checked:text-blue-600 flex justify-center transition-all">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>
                            </div>
                        </label>

                        <label class="cursor-pointer">
                            <input type="radio" name="logo" value="other" class="peer sr-only" checked>
                            <div class="p-3 rounded-lg border border-gray-200 text-gray-400 peer-checked:border-blue-500 peer-checked:bg-blue-50 peer-checked:text-blue-600 flex justify-center transition-all">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" /></svg>
                            </div>
                        </label>

                    </div>
                </div>

                <div class="pt-4 flex gap-3">
                    <button type="submit" class="flex-1 bg-blue-600 text-white py-2.5 rounded-lg font-semibold hover:bg-blue-700 transition-colors shadow-sm">
                        Enregistrer le groupe
                    </button>
                    <button id="annuler_addGroupe--Button" type="reset" class="px-4 py-2.5 text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200 transition-colors">
                        Annuler
                    </button>
                </div>
            </div>
        </form>
    </div>