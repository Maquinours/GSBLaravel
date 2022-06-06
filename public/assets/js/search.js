let specialites = new Map();

function initSpecialites(specialitesToLoad) {
    for(let i of specialitesToLoad) {
        if(!specialites.has(`${i.id_specialite}`))
            specialites.set(`${i.id_specialite}`, new Set());
        specialites.get(`${i.id_specialite}`).add(`${i.id_praticien}`);
    }
}

function searchNom() {
    const specialiteSearch = document.getElementById('specialiteSearch');
    specialiteSearch.selectedIndex = 0;

    const nameSearch = document.getElementById("nameSearch");
    const listePraticiens = document.getElementById("listPraticiens");

    const valueToSearch = nameSearch.value.toLowerCase();

    const tr = listePraticiens.getElementsByTagName("tr");
    for(let i of tr) {
        const td = i.getElementsByTagName("td")[1];
        if(td) {
            i.hidden = !td.innerText.toLowerCase().includes(valueToSearch);
        }
    }
}

function searchSpecialite() {
    const nameSearch = document.getElementById("nameSearch");
    nameSearch.value = "";

    const specialiteSearch = document.getElementById('specialiteSearch');
    const listePraticiens = document.getElementById("listPraticiens");

    const valueToSearch = specialiteSearch.value;

    const valuesToSearch = specialites.get(valueToSearch);

    const tr = listePraticiens.getElementsByTagName("tr");
    for(let i of tr) {
        const td = i.getElementsByTagName("td")[0];
        if(td) {
            i.hidden = !valuesToSearch || !valuesToSearch.has(td.innerText);
        }
    }
}

function resetSearch() {
    const nameSearch = document.getElementById("nameSearch");
    const specialiteSearch = document.getElementById('specialiteSearch');
    nameSearch.value = "";
    specialiteSearch.selectedIndex = 0;

    const listePraticiens = document.getElementById("listPraticiens");
    const tr = listePraticiens.getElementsByTagName("tr");
    for(let i of tr) {
        i.hidden = false;
    }
}