const categorie__ul__li = document.querySelectorAll(".categorie__ul__li");
const destinationList = document.querySelector('.destination__list');

categoryTitre.innerHTML = "";

for (const element of categorie__ul__li) {
    element.addEventListener("click", getDestination)
}

function getDestination(event) {
    console.log(event.target);
    const categoryId = event.target.getAttribute("data-categoryID");
    const domaine = window.location.href;
    const apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;
    console.log(`Selected category = ${event.target.innerHTML}`);

    fetch(apiUrl)
        .then(response => response.json())
        .then(data => {
            categoryTitre.innerHTML = `Articles de la section ${(event.target.innerHTML).toLowerCase()}`
            const categoryTitre = document.querySelector(".destination__titre");
            destinationList.innerHTML = "";
            data.forEach(article => {
                const articleElement = document.createElement('div');
                articleElement.innerHTML = `
                    <h3>${article.title.rendered}</h3>
                    <label class="destination_label for="rad-${article.excerpt.rendered}"><img src="/show/345223/three-dots-vertical.svg" alt=""></h3>
                    <input type="radio" id="rad-${article.id}" name="destination" classe="destination_rad">
                    <a href="${article.link}">Lire plus</a>
                `;
                destinationList.appendChild(articleElement);
            });
        })
        .catch(error => console.error('Erreur lors de la récupération des articles:', error));
}

(function () {
    const domaine = window.origin + "/4w4_18/";

    (function parcourir_bouton() {
        const categorie__ul__li = document.querySelectorAll(".categorie__ul__li");
        categorie__ul__li.forEach(elm => {
            elm.addEventListener("click", afficherDestination);
        })
    })()

    async function afficherDestination(event) {
        const categoryId = event.target.getAttribute('data-categoryID'); // Remplacez par l'ID de la catégorie souhaitée
        const apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;
        console.log(domaine);
        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                const destinationList = document.querySelector('.destination__list');
                // console.log(`data = ` + data);
                destinationList.innerHTML = "";
                data.forEach(article => {
                    const articleElement = document.createElement('div');
                    articleElement.classList.add("destination__list__article")
                    console.log(article.title.rendered);

                    articleElement.innerHTML = `
                    <h3>${article.title.rendered}</h3>
                    <button class="bntArticle"><img src=""></button>
                    <section>
                        ${article.excerpt.rendered}
                        <a href="${article.link}">Lire plus</a>
                    </section>
                `;
                    destinationList.appendChild(articleElement);
                });
                let deroulant = document.querySelectorAll('.destination__list__article');
                deroulant.forEach(elm => {
                    elm.addEventListener("click", afficherTexte);
                })
            })
            .catch(error => console.error('Erreur lors de la récupération des articles:', error));
    }

    function afficherTexte(event) {
        let description = event.target.closest("div").querySelector("section");
        event.target.closest("button").classList.toggle("ouvert");
        description.classList.toggle("affichage");
    }
}
)()

    
