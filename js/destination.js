// const categorie__ul__li = document.querySelectorAll(".categorie__ul__li");
// const destinationList = document.querySelector('.destination__list');

// categoryTitre.innerHTML = "";

// for (const element of categorie__ul__li) {
//     element.addEventListener("click", getDestination)
// }

// function getDestination(event) {
//     console.log(event.target);
//     const categoryId = event.target.getAttribute("data-categoryID");
//     const domaine = window.location.href;
//     const apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;
//     console.log(`Selected category = ${event.target.innerHTML}`);

//     fetch(apiUrl)
//         .then(response => response.json())
//         .then(data => {
//             categoryTitre.innerHTML = `Articles de la section ${(event.target.innerHTML).toLowerCase()}`
//             const categoryTitre = document.querySelector(".destination__titre");
//             destinationList.innerHTML = "";
//             data.forEach(article => {
//                 const articleElement = document.createElement('div');
//                 articleElement.innerHTML = `
//                     <h3>${article.title.rendered}</h3>
//                     <label class="destination_label for="rad-${article.excerpt.rendered}"><img src="/show/345223/three-dots-vertical.svg" alt=""></h3>
//                     <input type="radio" id="rad-${article.id}" name="destination" classe="destination_rad">
//                     <a href="${article.link}">Lire plus</a>
//                 `;
//                 destinationList.appendChild(articleElement);
//             });
//         })
//         .catch(error => console.error('Erreur lors de la récupération des articles:', error));
// }


(function(){
    console.log("destination.js")
    let categoryId = 3; // Remplacez par l'ID de la catégorie souhaitée
    //const domaine = document.querySelector('base').href;
    /* la technique utilisée pour extraire l'url doit êtere généralisée */
    const domaine = window.origin + "/4w4_18/";

    parcourir_bouton()
    mon_fetch(categoryId)

function parcourir_bouton() {
    const categorie__ul__li = document.querySelectorAll(".categorie__ul__li");
    console.log("Éléments détectés :", categorie__ul__li.length);
    categorie__ul__li.forEach(elm => {
        console.log("Dataset de l'élément :", elm.dataset);  // <-- ajout
        elm.addEventListener('mousedown', function(){
            const categoryId = elm.dataset.category_id;
            console.log("categoryId cliqué =", categoryId);
            mon_fetch(Number(categoryId));
        });
    });
}

function mon_fetch(id_category)
{
    apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${id_category}`;
    fetch(apiUrl)
        .then(response => response.json())
        .then(data => {
            const destinationList = document.querySelector('.destination__list');
            destinationList.innerHTML = ""
            data.forEach(article => {
                const articleElement = document.createElement('div');
                console.log(article.title.rendered)
                // <div>${article.excerpt.rendered}</div>
                articleElement.innerHTML = `
                    <h3>${article.title.rendered}</h3>
                    <p>${article.excerpt.rendered}</p>
                    <a href="${article.link}">Lire plus</a>
                `;
                destinationList .appendChild(articleElement);
            });
        })
        .catch(error => console.error('Erreur lors de la récupération des articles:', error));
    }  
})()
    
