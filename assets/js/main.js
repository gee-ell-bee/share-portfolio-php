//Toggle Function
function toggleMenu() {
  let el =
    document.getElementById('navDropdown');
  el.classList.toggle('show');
}

//Rotate Carrot Function
function rotateSvg() {
  let es = document.querySelector('.carrot');
  es.classList.toggle('rotate');
}

//creating myBtn
var btn = document.getElementById("myBtn");


//event listeners
btn.addEventListener("click", toggleMenu);
btn.addEventListener("click", rotateSvg);


// header hover function


let hov =
    document.querySelector('.hov'),
  hovGhost =
    document.querySelector('.hovGhost'),
  main =
    document.querySelector('main');
// for desktop width variables:
let h1 =
    document.querySelector('h1'),
  h2 =
    document.querySelector('.h2'),
  h3 =
    document.querySelector('.h3');

function changeHeader() {
  hov.classList.toggle('onHoverWhole'),
  hovGhost.classList.toggle('onHoverGhost'),
  main.classList.toggle('onHoverMain'),
  h1.classList.toggle('onHoverHead'),
  h2.classList.toggle('onHoverHead2'),
  h3.classList.toggle('onHoverHead3');
}

function expandHeader() {
  if (hov.classList.contains('onHoverWhole')) {
    hov.classList.remove('onHoverWhole'),
    hovGhost.classList.remove('onHoverGhost'),
    main.classList.remove('onHoverMain'),
    h1.classList.remove('onHoverHead'),
    h2.classList.remove('onHoverHead2'),
    h3.classList.remove('onHoverHead3');
  } else {}
}

//creating header variable
var hd = document.querySelector('.headerWrapper');


//toggling sizes event listeners

hd.addEventListener("mouseenter", changeHeader);
hd.addEventListener("mouseleave", expandHeader);

hd.addEventListener("click", changeHeader);

//hovGhost.addEventListener("mouseenter", changeHeader);
//hovGhost.addEventListener("mouseleave", expandHeader);

//hovGhost.addEventListener("click", changeHeader);
