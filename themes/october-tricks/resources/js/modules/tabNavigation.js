// Dieses Snippet fügt die .nav-item--open Klasse zu Menüpunkten
// mit Untermenüs hinzu sobald ein Element via Tab-Taste fokusiert wird
const links = document.querySelectorAll('.nav-item--has-children .nav-link')
Array.prototype.forEach.call(links, el => {
    const clickFocusEventHandler = event => {
        if (el.parentNode.classList.contains('nav-item--has-children')) {
            event.preventDefault()
        }
        const open = document.querySelector('.nav-item--open')
        if (open) {
            open.classList.remove('nav-item--open')
        }
        el.closest('.nav-item--has-children').classList.add('nav-item--open')
    }
    el.addEventListener('click', clickFocusEventHandler);
    el.addEventListener('focus', clickFocusEventHandler);
    el.addEventListener('focusout', () => {
        const parent = el.closest('.nav-item--has-children')
        if (parent) {
            parent.classList.remove('nav-item--open')
        }
    })
})