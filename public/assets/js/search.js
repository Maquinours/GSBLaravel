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
    const typeSearch = document.getElementById("typeSearch");
    specialiteSearch.selectedIndex = 0;
    typeSearch.selectedIndex = 0;

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
    const typeSearch = document.getElementById("typeSearch");
    nameSearch.value = "";
    typeSearch.selectedIndex = 0;

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

function searchType() {
    const nameSearch = document.getElementById("nameSearch");
    const specialiteSearch = document.getElementById('specialiteSearch');
    nameSearch.value = "";
    specialiteSearch.selectedIndex = 0;

    const typeSearch = document.getElementById("typeSearch");
    const listePraticiens = document.getElementById("listPraticiens");

    const valueToSearch = typeSearch.value;

    const tr = listePraticiens.getElementsByTagName("tr");
    for(let i of tr) {
        const td = i.getElementsByTagName("td")[3];
        if(td) {
            i.hidden = td.innerText !== valueToSearch;
        }
    }
}

function resetSearch() {
    const nameSearch = document.getElementById("nameSearch");
    const specialiteSearch = document.getElementById('specialiteSearch');
    const typeSearch = document.getElementById("typeSearch");
    nameSearch.value = "";
    specialiteSearch.selectedIndex = 0;
    typeSearch.selectedIndex = 0;

    const listePraticiens = document.getElementById("listPraticiens");
    const tr = listePraticiens.getElementsByTagName("tr");
    for(let i of tr) {
        i.hidden = false;
    }
}