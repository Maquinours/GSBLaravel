let activites;

function init(initActivites) {
    activites = initActivites;
}

function deleteAllOptions(selectElement) {
    for(let i = selectElement.options.length - 1; i >= 0; i--) {
        if(selectElement.options[i].disabled) continue;
        selectElement.remove(i);
    }
}

function dateChanged() {
    let dates = document.getElementById("selectDate");
    let lieux = document.getElementById("selectLieu");
    let themes = document.getElementById("selectTheme");
    let motifs = document.getElementById("selectMotif");
    let idActivite = document.getElementsByName("idActivite")[0];
    lieux.selectedIndex = 0;
    themes.selectedIndex = 0;
    themes.disabled = true;
    motifs.selectedIndex = 0;
    motifs.disabled = true;
    idActivite.value = "";
    deleteAllOptions(lieux);
    for(let i of activites) {
        if(i.date_activite === dates[dates.selectedIndex].text) {

            let lieu = document.createElement("option");
            lieu.text = i.lieu_activite;
            lieux.add(lieu);
        }
    }
    lieux.disabled = false;
}

function lieuChanged() {
    let dates = document.getElementById("selectDate");
    let lieux = document.getElementById("selectLieu");
    let themes = document.getElementById("selectTheme");
    let motifs = document.getElementById("selectMotif");
    let idActivite = document.getElementsByName("idActivite")[0];
    themes.selectedIndex = 0;
    motifs.selectedIndex = 0;
    motifs.disabled = true;
    idActivite.value = "";
    deleteAllOptions(themes);
    for(let i of activites) {
        if(i.date_activite === dates[dates.selectedIndex].text &&
        i.lieu_activite === lieux[lieux.selectedIndex].text) {

            let theme = document.createElement("option");
            theme.text = i.theme_activite;
            themes.add(theme);
        }
    }
    themes.disabled = false;
}

function themeChanged() {
    let dates = document.getElementById("selectDate");
    let lieux = document.getElementById("selectLieu");
    let themes = document.getElementById("selectTheme");
    let motifs = document.getElementById("selectMotif");
    let idActivite = document.getElementsByName("idActivite")[0];
    motifs.selectedIndex = 0;
    idActivite.value = "";
    deleteAllOptions(motifs);
    for(let i of activites) {
        if(i.date_activite === dates[dates.selectedIndex].text &&
            i.lieu_activite === lieux[lieux.selectedIndex].text &&
            i.theme_activite === themes[themes.selectedIndex].text) {

            let motif = document.createElement("option");
            motif.text = i.motif_activite;
            motifs.add(motif);
        }
    }
    motifs.disabled = false;
}

function motifChanged() {
    let dates = document.getElementById("selectDate");
    let lieux = document.getElementById("selectLieu");
    let themes = document.getElementById("selectTheme");
    let motifs = document.getElementById("selectMotif");
    let idActivite = document.getElementsByName("idActivite")[0];
    for(let i of activites) {
        if(i.date_activite === dates[dates.selectedIndex].text &&
            i.lieu_activite === lieux[lieux.selectedIndex].text &&
            i.theme_activite === themes[themes.selectedIndex].text &&
            i.motif_activite === motifs[motifs.selectedIndex].text) {

            idActivite.value = i.id_activite_compl;
            return;
        }
    }
}