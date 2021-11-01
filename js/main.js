const body = document.body;
const nav = document.querySelector(".page-header nav");
const menu = document.querySelector(".page-header .menu");
const scrollUp = "scroll-up";
const scrollDown = "scroll-down";
let lastScroll = 0;

window.addEventListener("scroll", () => {
  const currentScroll = window.pageYOffset;
  if (currentScroll <= 0) {
    body.classList.remove(scrollUp);
    return;
  }

  if (currentScroll > lastScroll && !body.classList.contains(scrollDown)) {
    // down
    body.classList.remove(scrollUp);
    body.classList.add(scrollDown);
  } else if (currentScroll < lastScroll && body.classList.contains(scrollDown)) {
    // up
    body.classList.remove(scrollDown);
    body.classList.add(scrollUp)
  }
  lastScroll = currentScroll;
});


window.addEventListener('resize', (ev) => resiser())

function resiser(){
    let header = (document.getElementsByTagName('header')[0]).getBoundingClientRect()
    let height = (window.innerHeight-header.height) + "px"
    if(document.querySelector('#apropos')){
        let elems = document.querySelectorAll('#apropos > section')
        for(let elem of elems){
            elem.style.minHeight = height
        }
        let elems2 = document.querySelectorAll('#apropos > section > div')
        for(let elem of elems2){
            elem.style.minHeight = height
        }
    }else if(document.querySelector("#blog")){
        document.querySelector("#blog").style.minHeight = height
        document.querySelector("#blog > section").style.minHeight = height
        if(document.querySelector(".question")){
            let out = document.querySelector("#blog > section > p")
            // out.style.minHeight = height
            let rules = parse(out.dataset.style)
            let style = out.style
            for(let i=0; i<rules.length; i+=2){
                let rule = rules[i]
                if(rules[i].indexOf("-")>=0){
                    let temp = rules[i].split('-')
                    let first = temp[1][0].toUpperCase()
                    let rule = temp[0]+first+temp[1].slice(1)
                }
                out.style[rule] = rules[i+1]
            }
            delete out.dataset.style
        }
    }else if(document.querySelector("#portfolio")){
        document.querySelector("#portfolio").style.minHeight = height
        document.querySelector("#portfolio > section").style.minHeight = height
    }
}