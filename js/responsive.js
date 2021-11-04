window.addEventListener('resize', (ev) => responsive())
window.addEventListener('load', (ev) => responsive())

function responsive(){
    let winWidth = window.innerWidth // Largeur de la fenetre
    let elemsDiv = document.querySelectorAll('section>div') // Toutes les div dans section

    if(winWidth>=500 && winWidth<=1000){
        let pourcent = ((winWidth-500)/500) // Calcul de la valeur à enlever à 100%
        let padX = (16+ ((96-16) *pourcent))
        let margX = (pourcent*25) /2
        let width = (100 - pourcent * 25)
        let resPX = "16px "+padX+"px"
        let resMX = "0 "+margX+"%"
        let resW = "calc("+width+"% - ("+(padX*2)+"px))"
        for(let elem of elemsDiv){
            elem.style.width =  resW// Regle du pourcentage-20px
            elem.style.margin = resMX
            elem.style.padding = resPX
        }
    }else{
        for(let elem of elemsDiv){
            elem.style.width = ""
            elem.style.margin = ""
            elem.style.padding = ""
        }
    }
}