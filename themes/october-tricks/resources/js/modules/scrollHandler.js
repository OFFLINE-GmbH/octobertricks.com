const scroll = function (scrollTop, lastScrollTop) {
    // onScroll
}

// Unterhalb dieser Zeile sind keine Änderungen nötig
// -----------------------------------------------------------
const raf = window.requestAnimationFrame ||
    window.webkitRequestAnimationFrame ||
    window.mozRequestAnimationFrame ||
    window.msRequestAnimationFrame ||
    window.oRequestAnimationFrame;

let lastScrollTop = window.pageYOffset
let previousScrollTop = 0

// Funktion das erste Mal auch ohne Scrollen ausführen
// falls die Seite mit einem bestehenden scrollTop Wert
// neu geladen wurde.
scroll(window.pageYOffset)

if (raf) {
    loop();
}

function loop () {
    const scrollTop = window.pageYOffset
    if (lastScrollTop === scrollTop) {
        return raf(loop);
    } else {
        previousScrollTop = lastScrollTop
        lastScrollTop = scrollTop;

        scroll(scrollTop, previousScrollTop);
        raf(loop);
    }
}