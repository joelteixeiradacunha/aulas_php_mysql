document.addEventListener("DOMContentLoaded", () => {

    const slides = document.querySelectorAll(".slide");

    let currentSlide = 0;

    const transitionTime = 3000; // 3 segundos

    function showSlide(index) {

        slides.forEach((slide) => {
            slide.classList.remove("active");
        });

        slides[index].classList.add("active");

    }

    function nextSlide() {

        currentSlide++;

        if (currentSlide >= slides.length) {
            currentSlide = 0;
        }

        showSlide(currentSlide);

    }

    showSlide(currentSlide);

    setInterval(nextSlide, transitionTime);

});


/* =====================================
   HOVER SUAVE DOS BOTÕES
===================================== */

const buttons = document.querySelectorAll(".top-card button");

buttons.forEach((button) => {

    button.addEventListener("mouseenter", () => {

        button.style.transform = "scale(1.05)";

    });

    button.addEventListener("mouseleave", () => {

        button.style.transform = "scale(1)";

    });

});


/* =====================================
   ANIMAÇÃO DOS LINKS DOS CARDS
===================================== */

const links = document.querySelectorAll(".book-card a");

links.forEach((link) => {

    link.addEventListener("mouseenter", () => {

        link.style.opacity = "0.85";

    });

    link.addEventListener("mouseleave", () => {

        link.style.opacity = "1";

    });

});


/* =====================================
   ANIMAÇÃO DAS REDES SOCIAIS
===================================== */

const socialIcons = document.querySelectorAll(".social a");

socialIcons.forEach((icon) => {

    icon.addEventListener("mouseenter", () => {

        icon.style.transform = "translateY(-3px) scale(1.15)";
        icon.style.transition = "0.3s";

    });

    icon.addEventListener("mouseleave", () => {

        icon.style.transform = "translateY(0) scale(1)";

    });

});


/* =====================================
   SCROLL SUAVE PARA LINKS INTERNOS
===================================== */

document.querySelectorAll('a[href^="#"]').forEach(anchor => {

    anchor.addEventListener("click", function (e) {

        e.preventDefault();

        const target = document.querySelector(this.getAttribute("href"));

        if (target) {

            target.scrollIntoView({

                behavior: "smooth",
                block: "start"

            });

        }

    });

});


/* =====================================
   ANIMAÇÃO DE ENTRADA DOS CARDS
===================================== */

const observer = new IntersectionObserver((entries) => {

    entries.forEach((entry) => {

        if (entry.isIntersecting) {

            entry.target.classList.add("show");

        }

    });

}, {
    threshold: 0.15
});

document.querySelectorAll(".book-card, .top-card, .news-card").forEach((card) => {

    card.classList.add("hidden");

    observer.observe(card);

});


/* =====================================
   MENSAGEM DE DEMONSTRAÇÃO
===================================== */

document.querySelectorAll("button, .book-card a").forEach((element) => {

    element.addEventListener("click", (event) => {

        event.preventDefault();

        alert("Página em desenvolvimento.\n\nEm um projeto real este botão abriria a página completa do livro.");

    });

});