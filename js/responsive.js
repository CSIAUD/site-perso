window.addEventListener('resize', (ev) => responsive())
window.addEventListener('load', (ev) => responsive())

function responsive(){
    let winWidth = window.innerWidth // Largeur de la fenetre
    let elemsDiv = document.querySelectorAll('section>div') // Toutes les div dans section

    if(winWidth>=500){
        let pourcent = ((winWidth-500)/500)*25 // Calcul de la valeur à enlever à 100%
        if(winWidth>1000){
            pourcent = 25
        }
        for(let elem of elemsDiv){
            elem.style.width = "calc("+(100-pourcent)+"% - 20px)" // Regle du pourcentage-20px
            elem.style.margin = "0 "+(pourcent/2)+"%"
        }
    }
}