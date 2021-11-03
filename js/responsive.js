window.innerWidth

window.addEventListener('resize', (ev) => responsive())
window.addEventListener('load', (ev) => responsive())

function responsive(){
    let winWidth = window.innerWidth
    let elemsDiv = document.querySelectorAll('section>div')

    if(winWidth>=500 && winWidth<=1000){
        let pourcent = ((winWidth-500)/500)*25
        console.log(pourcent)
        for(let elem of elemsDiv){
            elem.style.width = "calc("+(100-pourcent)+"% - 20px)"
            elem.style.margin = "0 "+(pourcent/2)+"%"
        }
    }
}