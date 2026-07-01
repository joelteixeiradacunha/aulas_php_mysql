<?php

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fluid Analysis Tech</title>
    <link rel="stylesheet" href="assets/styles/style.css">
</head>
<body>

<?php
    include "includes/header.php";

?>

<main>
    <div class="carousel-container">
        <div class="carousel-track" id="track">

            <div class="slide">
                <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?auto=format&fit=crop&w=1200&q=80" alt="Porsche 911">
                <div class="car-name">Porsche 911 Carrera</div>
            </div>

            <div class="slide">
                <img src="https://images.unsplash.com/photo-1583121274602-3e2820c69888?auto=format&fit=crop&w=1200&q=80" alt="Ferrari F8">
                <div class="car-name">Ferrari F8 Tributo</div>
            </div>

            <div class="slide">
                <img src="https://images.unsplash.com/photo-1614162692292-7ac56d7f7f1e?auto=format&fit=crop&w=1200&q=80" alt="Lamborghini Huracan">
                <div class="car-name">Lamborghini Huracán</div>
            </div>

            <div class="slide">
                <img src="https://images.unsplash.com/photo-1603386329225-868f9b1ee6c9?auto=format&fit=crop&w=1200&q=80" alt="McLaren 720S">
                <div class="car-name">McLaren 720S</div>
            </div>

            <div class="slide">
                <img src="https://images.unsplash.com/photo-1603386329225-868f9b1ee6c9?auto=format&fit=crop&w=1200&q=80" alt="Aston Martin">
                <div class="car-name">Aston Martin Vantage</div>
            </div>

        </div>
    </div>

    <section class="news-section" id="fique-por-dentro">
        <h2>Fique por dentro</h2>

        <div class="cards-container">

            <div class="news-card">
                <img src="https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?auto=format&fit=crop&w=200&q=80" alt="Inteligência Artificial">
                <div class="card-content">
                    <h3>Avanço da IA na Medicina</h3>
                    <p>Novos algoritmos conseguem detectar diagnósticos complexos em segundos.</p>
                    <a href="#noticia1">Leia mais...</a>
                </div>
            </div>

            <div class="news-card">
                <img src="https://images.unsplash.com/photo-1639322537228-f710d846310a?auto=format&fit=crop&w=200&q=80" alt="Computação Quântica">
                <div class="card-content">
                    <h3>Computação Quântica hoje</h3>
                    <p>Grandes empresas começam a testar a segurança de dados com criptografia quântica.</p>
                    <a href="#noticia2">Leia mais...</a>
                </div>
            </div>

            <div class="news-card">
                <img src="https://images.unsplash.com/photo-1546776310-eef45dd6d63c?auto=format&fit=crop&w=200&q=80" alt="Robótica">
                <div class="card-content">
                    <h3>Robótica Industrial</h3>
                    <p>Automação inteligente redefine a linha de montagem e eficiência em fábricas modernas.</p>
                    <a href="#noticia3">Leia mais...</a>
                </div>
            </div>

            <div class="news-card">
                <img src="https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?auto=format&fit=crop&w=200&q=80" alt="Cybersegurança">
                <div class="card-content">
                    <h3>Desafios de Cibersegurança</h3>
                    <p>Especialistas alertam para a importância de proteger dados na nuvem corporativa.</p>
                    <a href="#noticia4">Leia mais...</a>
                </div>
            </div>

            <div class="news-card">
                <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&w=200&q=80" alt="Redes 6G">
                <div class="card-content">
                    <h3>O Futuro com a Rede 6G</h3>
                    <p>Pesquisas iniciais apontam velocidades ultra rápidas e conexões globais sem latência.</p>
                    <a href="#noticia5">Leia mais...</a>
                </div>
            </div>

        </div>
    </section>
</main>

<?php
    include "includes/footer.php";

?>

<script>
    const track = document.getElementById('track');
    const totalSlides = 5;
    let currentIndex = 0;

    function nextSlide() {
        currentIndex = (currentIndex + 1) % totalSlides;
        track.style.transform = `translateX(-${currentIndex * 20}%)`;
    }

    setInterval(nextSlide, 5000);
</script>
<script src=""></script>
</body>
</html>