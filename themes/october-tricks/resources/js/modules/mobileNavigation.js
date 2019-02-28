const hamburger = document.querySelector('.nav-mobile-toggle')
const nav = document.querySelector('.nav-mobile')
if (hamburger) {
    hamburger.addEventListener('click', () => {
        global.body.classList.add('nav-visible');
    })
}
const hider = document.querySelector('.nav-mobile-close')
if (hider) {
    hider.addEventListener('click', () => {
        global.body.classList.remove('nav-visible');
    })
}