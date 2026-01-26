export function showAddGroupModal() {
    const modale_pop = document.getElementById("modale_pop");

    modale_pop.classList.replace("hidden" , "flex");
}

export function hiddeAddGroupModal() {
    const modale_pop = document.getElementById("modale_pop");

    modale_pop.classList.replace("flex" , "hidden");
}