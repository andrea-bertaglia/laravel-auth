import "./bootstrap";
import "~resources/scss/app.scss";
import * as bootstrap from "bootstrap";

import.meta.glob(["../img/**"]);

// Funzione per convertire il titolo in uno slug
function stringToSlug(str) {
    str = str.replace(/^\s+|\s+$/g, ""); // Trim spaces
    str = str.toLowerCase();

    // Rimuovi gli accenti
    const from = "àáäâèéëêìíïîòóöôùúüûñç·/_,:;";
    const to = "aaaaeeeeiiiioooouuuunc------";
    for (let i = 0, l = from.length; i < l; i++) {
        str = str.replace(new RegExp(from.charAt(i), "g"), to.charAt(i));
    }

    str = str
        .replace(/[^a-z0-9 -]/g, "") // Rimuovi caratteri invalidi
        .replace(/\s+/g, "-") // Sostituisci gli spazi con -
        .replace(/-+/g, "-"); // Combina i trattini multipli

    return str;
}

// Funzione per impostare l'aggiornamento dinamico dello slug
function setupSlugUpdater() {
    const titleInput = document.getElementById("title");
    const slugInput = document.getElementById("slug");

    if (titleInput && slugInput) {
        titleInput.addEventListener("input", function () {
            const slug = stringToSlug(titleInput.value);
            slugInput.value = slug;
        });
    }
}

// Esegui la funzione quando il DOM è completamente caricato
document.addEventListener("DOMContentLoaded", setupSlugUpdater);
