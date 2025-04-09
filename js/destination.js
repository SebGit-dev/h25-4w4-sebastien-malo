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

                articleElement.addEventListener("click", () =>{
                    articleElement.classList.toggle("show")
                })
            });
        })
        .catch(error => console.error('Erreur lors de la récupération des articles:', error));
}


    
