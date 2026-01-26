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