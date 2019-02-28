import 'core-js/es6/array'

ready(() => {
    global.body = document.querySelector('body')

    require('./modules/mobileNavigation')
    require('./modules/tabNavigation')
    require('./modules/voter')

    setTimeout(() => {
        const gdpr = document.querySelector('.gdpr-banner-host')
        if (gdpr) {
            gdpr.classList.add('gdpr-banner-host--visible')
        }
    }, 1000)

})

function ready (fn) {
    if (document.attachEvent ? document.readyState === 'complete' : document.readyState !== 'loading') {
        fn()
    } else {
        document.addEventListener('DOMContentLoaded', fn)
    }
}
