<div class="fixed inset-0 hidden items-center justify-center bg-black/50" id="modale_NewContact_pop">
    <form action="/contacts/store" method="POST" class="w-[400px] mx-auto bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100 absolute">
        @csrf
        @method('PUT')
        <div class="px-6 py-4 border-b border-gray-100 bg-gray-50">
            <h3 class="text-lg font-semibold text-gray-900">Créer un nouveau contact</h3>
        </div>

        <div class="p-6 space-y-5">
            <div>
                <label for="contact_name" class="block text-sm font-medium text-gray-700 mb-1.5">Nom complet</label>
                <input type="text" id="contact_name" name="contact_name" required
                    class="block w-full rounded-lg border-gray-300 border px-3 py-2 text-gray-900 shadow-sm focus:border-green-500 focus:ring-green-500 sm:text-sm" 
                    placeholder="Ex: Ahmed Alami">
            </div>

            <div>
                <label for="contact_phone" class="block text-sm font-medium text-gray-700 mb-1.5">Numéro de téléphone</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <span class="text-gray-500 sm:text-sm">+212</span>
                    </div>
                    <input type="tel" id="contact_phone" name="contact_phone" required
                        class="block w-full rounded-lg border-gray-300 border pl-12 pr-3 py-2 text-gray-900 shadow-sm focus:border-green-500 focus:ring-green-500 sm:text-sm" 
                        placeholder="600-000000">
                </div>
            </div>
            @if (request()->is('home') || request()->is('contacts'))
                <div>
                    <label for="contact_group" class="block text-sm font-medium text-gray-700 mb-2">Choisir un groupe</label>
                    <select id="contact_group" name="group_id" required
                        class="block w-full rounded-lg border-gray-300 border px-3 py-2 text-gray-900 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                        <option value="" selected disabled>-- Sélectionnez un groupe --</option>
                        @foreach ($groups as $group)
                            <option value="{{ $group['id'] }}">{{ $group['name'] }}</option>
                        @endforeach
                    </select>
                </div>
            @endif

            @if (request()->is('group'))
                <input type="hidden" name="group_id" value="{{ request('id') }}">
            @endif


            <div class="pt-4 flex gap-3">
                <button type="submit" class="flex-1 bg-blue-600 text-white py-2.5 rounded-lg font-semibold hover:bg-green-700 transition-colors shadow-sm">
                    Enregistrer le contact
                </button>
                <button id="annuler_addContact--Button" type="reset" class="px-4 py-2.5 text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200 transition-colors">
                    Annuler
                </button>
            </div>
        </div>
    </form>
</div>