/* ==============================
   Smooth Scroll Navigation
============================== */

document.querySelectorAll('a[href^="#"]').forEach(anchor => {

    anchor.addEventListener("click", function (e) {

        e.preventDefault()

        const target = document.querySelector(this.getAttribute("href"))

        if (target) {

            target.scrollIntoView({
                behavior: "smooth"
            })

        }

    })

})



/* ==============================
   Menu Card Animation on Scroll
============================== */

const menuCards = document.querySelectorAll(".menu-card")

function showCards() {

    const triggerBottom = window.innerHeight * 0.85

    menuCards.forEach(card => {

        const cardTop = card.getBoundingClientRect().top

        if (cardTop < triggerBottom) {

            card.style.opacity = "1"
            card.style.transform = "translateY(0)"

        }

    })

}

menuCards.forEach(card => {

    card.style.opacity = "0"
    card.style.transform = "translateY(40px)"
    card.style.transition = "0.6s"

})

window.addEventListener("scroll", showCards)

showCards()



/* ==============================
   Button Hover Effect
============================== */

const buttons = document.querySelectorAll(".menu-button, .order-button")

buttons.forEach(btn => {

    btn.addEventListener("mouseenter", () => {

        btn.style.transform = "scale(1.05)"

    })

    btn.addEventListener("mouseleave", () => {

        btn.style.transform = "scale(1)"

    })

})



/* ==============================
   Navbar Background Change
============================== */

const header = document.querySelector("header")

window.addEventListener("scroll", () => {

    if (window.scrollY > 100) {

        header.style.background = "rgba(0,0,0,0.6)"
        header.style.backdropFilter = "blur(5px)"

    } else {

        header.style.background = "transparent"

    }

})



/* ==============================
   Prevent Empty WhatsApp Click
============================== */

const orderBtn = document.querySelector(".order-button")

if (orderBtn) {

    orderBtn.addEventListener("click", function () {

        console.log("Redirecting to WhatsApp order...")

    })

}



/* ==============================
   Small Easter Egg (Admin Hint)
============================== */

let logoClick = 0

const logo = document.querySelector(".logo")

if (logo) {

    logo.addEventListener("click", () => {

        logoClick++

        if (logoClick >= 5) {

            window.location.href = "admin/login.php"

        }

    })

}