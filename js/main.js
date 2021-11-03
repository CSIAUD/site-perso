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

window.addEventListener('load', (ev) => resiser())
function resiser(){
    let header = (document.getElementsByTagName('header')[0]).getBoundingClientRect()
    let height = window.innerHeight - 20
    let elems = document.querySelectorAll('section')
    for(let elem of elems){
        elem.style.minHeight = height + "px"
    }
    height -= 20
    let elems2 = document.querySelectorAll('section > div')
    for(let elem of elems2){
        elem.style.minHeight = height + "px"
    }
}