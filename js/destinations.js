(function(){
    const categoryId = 3; // Remplacez par l'ID de la catégorie souhaitée
    const domaine = window.location.href;
    const apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;
    console.log("destinationj.js");
function parcourir_boutons(){
    const categorie_ul__li = document.querySelectorAll(".categorie_ul__li")
    categorie_ul__li.forEach(elm => {
        elm.addEventListener("click", prendreDestination);
    })
}

function prendreDestination(){
    fetch(apiUrl)
    .then(response => response.json())
    .then(data => {
        const destinationList = document.querySelector('.destination__list');
        destinationList.innerHTML = "";
        data.forEach(article => {
            const articleElement = document.createElement('div');
            // <div>${article.excerpt.rendered}</div>
            articleElement.innerHTML = `
                <h3>${article.title.rendered}</h3>
                <a href="${article.link}">Lire plus</a>
            `;
            destinationList .appendChild(articleElement);
        });
    })
    .catch(error => console.error('Erreur lors de la récupération des articles:', error));
    }
})()


    
