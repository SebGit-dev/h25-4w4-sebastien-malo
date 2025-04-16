(function(){

    let hero__radio__input = document.querySelectorAll(".hero__radio__input")
    let hero__caroussels = document.querySelectorAll(".hero__carrousel");
    let indexBackgroundImage = 0;
    const totalBackgroundImage = hero__radio__input.length;
    console.log(hero__caroussels);

    function changeBackgroundImage(index){
        hero__radio__input[index].checked = true;
        hero__caroussels.forEach(c => c.classList.remove("actif"));
        if (hero__caroussels[index]) {
            hero__caroussels[index].classList.add("actif");
        }
    }

    changeBackgroundImage(indexBackgroundImage);
    setInterval(() => {
        indexBackgroundImage = (indexBackgroundImage + 1) % totalBackgroundImage;
        changeBackgroundImage(indexBackgroundImage);
    }, 5000);
    hero__radio__input.forEach((radioBouton, index) => {
        radioBouton.addEventListener('change', () => {
            indexBackgroundImage = index;
            changeBackgroundImage(index);
        });
    });

})();