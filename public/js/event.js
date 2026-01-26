import {showAddGroupModal} from './mod/showModules.js';
import {hiddeAddGroupModal} from './mod/showModules.js';

export function setupEvents() {
    const create_newGroupeButton = document.getElementById("create_newGroupe--Button");
    const annuler_addGroupeButton = document.getElementById("annuler_addGroupe--Button");

    if (create_newGroupeButton) {
        create_newGroupeButton.addEventListener("click" , showAddGroupModal);
    }

    if (annuler_addGroupeButton) {
        annuler_addGroupeButton.addEventListener("click" , hiddeAddGroupModal)
    }
}