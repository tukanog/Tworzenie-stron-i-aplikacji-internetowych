function qs(s) { return document.querySelector(s) }

const WYCIECZKA = qs('#wycieczka')

WYCIECZKA.onsubmit = function(e) {
    e.preventDefault()

    const IMIE = qs('#imie').value
    const NAZWISKO = qs('#nazwisko').value
    const KLASA = qs('#klasa').value

    console.log(`${IMIE} ${NAZWISKO} ${KLASA}`)
}

const NEWSLETTER = qs('#newsletter')

NEWSLETTER.onsubmit = function(e) {
    e.preventDefault()

    const EMAIL = qs('#email').value

    console.log(`${EMAIL}`)
}