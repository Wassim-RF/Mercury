export function loadContacts() {
    const search = document.getElementById('search').value;
    const filter = document.getElementById('filter').value;

    fetch(`/contacts/ajax?search=${encodeURIComponent(search)}&filter=${filter}`)
    .then(res => res.text())
    .then(html => {
        document.getElementById('contacts-container').innerHTML = html;
    });
}
