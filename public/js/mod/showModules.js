export function showAddGroupModal() {
    const modale_pop = document.getElementById("modale_NewGroupe_pop");

    modale_pop.classList.replace("hidden" , "flex");
}

export function hiddeAddGroupModal() {
    const modale_pop = document.getElementById("modale_NewGroupe_pop");

    modale_pop.classList.replace("flex" , "hidden");
}

export function showAddContactModal() {
    const modale_pop = document.getElementById("modale_NewContact_pop");

    modale_pop.classList.replace("hidden" , "flex");
}

export function hiddeAddContactModal() {
    const modale_pop = document.getElementById("modale_NewContact_pop");

    modale_pop.classList.replace("flex" , "hidden");
}

export function showEditContactModal(button) {
    const modale_pop = document.getElementById("modale_NewContact_pop");

    const id = button.dataset.id;
    const name = button.dataset.name;
    const phone = button.dataset.phone;
    const group_id = button.dataset.group;

    console.log(id);
    console.log(name);
    console.log(phone);
    

    const from = document.getElementById("group_form");
    from.action = '/contacts/store/update';
    from.methode = 'PUT';

    document.getElementById("contact_id").value = id;
    document.querySelector('input[name="contact_name"]').value = name;
    document.querySelector('input[name="contact_phone"]').value = phone;
    document.querySelectorAll('select[name="group_id"]').forEach(s => {
        s.selected = s.value === id;
    });
    modale_pop.classList.replace("hidden" , "flex");
}
export function showEditGroupModal(button) {
    const modale_pop = document.getElementById("modale_NewGroupe_pop");

    const id = button.dataset.id;
    const name = button.dataset.name;
    const color = button.dataset.color;
    const logo = button.dataset.logo;

    console.log(id);
    console.log(name);
    console.log(color);
    console.log(logo);

    const from = document.getElementById("group_form");
    from.action = '/groups/store';

    document.getElementById("groupId").value = id;
    document.querySelectorAll('input[name="group_logo"]').forEach(i => {
        i.checked = i.value === logo
    });
    document.querySelectorAll('input[name="group_name"]').forEach(i => {
        i.value = name
    });
    document.querySelectorAll('input[name="group_color"]').forEach(i => {
        i.checked = i.value === color
    })

    modale_pop.classList.replace("hidden" , "flex");
}