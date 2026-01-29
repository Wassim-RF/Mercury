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
            <span class="px-3 py-1 rounded-full bg-blue-100 text-blue-700 text-xs font-semibold uppercase tracking-wider">{{ $contact->Group['name'] }}</span>
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