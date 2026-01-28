import {showAddGroupModal} from './mod/showModules.js';
import {hiddeAddGroupModal} from './mod/showModules.js';
import {showAddContactModal} from './mod/showModules.js';
import {hiddeAddContactModal} from './mod/showModules.js';
import {showEditGroupModal} from './mod/showModules.js';

export function setupEvents() {
    const create_newGroupeButton = document.getElementById("create_newGroupe--Button");
    const create_newContactButton = document.getElementById("create_newContact--Button");
    const annuler_addGroupeButton = document.getElementById("annuler_addGroupe--Button");
    const annuler_addContactButton = document.getElementById("annuler_addContact--Button");
    const edit_group_button = document.getElementById("edit_group_button");

    if (create_newGroupeButton) {
        create_newGroupeButton.addEventListener("click" , showAddGroupModal);
    }

    if (annuler_addGroupeButton) {
        annuler_addGroupeButton.addEventListener("click" , hiddeAddGroupModal)
    }

    if (create_newContactButton) {
        create_newContactButton.addEventListener("click" , showAddContactModal);
    }

    if (annuler_addContactButton) {
        annuler_addContactButton.addEventListener("click" , hiddeAddContactModal);
    }

    if (edit_group_button) {
        edit_group_button.addEventListener("click" , (e) => {
            showEditGroupModal(e.currentTarget);
        });
    }
}