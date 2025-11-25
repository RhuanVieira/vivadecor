<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VivaDecor</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="root.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>

  <header class="header">
    <div class="logo"><img src="imagens/logos/Logo_branca.png" alt=""></div>

    <nav class="nav" id="navMenu">
        <button class="close-btn" id="closeBtn">✖</button>

        <a href="#">Início</a>
        <a href="#hero">Sobre</a>
        <a href="#servicos">Serviços</a>
        <a href="#contatos">Contato</a>

        <button class="btn-cadastrar mobile">Cadastre-se</button> 
    </nav>

    <button class="btn-cta">Cadastre-se</button>

    <button class="menu-btn" id="menuBtn">
       <img src="icones/icons8-cardápio.svg" alt="">
    </button>
</header>

    <section class="hero" id="hero">

    <div class="hero-text">
        <h1>Design Interior</h1>

        <p>
            Adentre um mundo onde a arte do Design de Interiores é meticulosamente elaborada
            para unir a elegância atemporal e a inovação moderna de ponta. Permitindo-lhe
            transformar seus espaços de vida no ápice do luxo e da sofisticação.
        </p>

        <button class="btn">Começar Projeto</button>

        <div class="stats">
            <div><h2>400+</h2><span>Projetos completos</span></div>
            <div><h2>600+</h2><span>Clientes Satisfeitos</span></div>
            <div><h2>100+</h2><span>Estilos Únicos</span></div>
        </div>
    </div>

    <div class="hero-images">
    <div class="square"></div>

    <img class="img-top" src="imagens/ambientes/Image 1.png" alt="">
    <img class="img-bottom" src="imagens/ambientes/Image 2.png" alt="">

    <div class="arrow-box">↓</div>
</div>

</section>

<section class="services reveal">
    <h2 class="section-title">Nossos serviços</h2>

    <div class="services-cards">

        <div class="service-card">
            <img src="icones/lighting-design.svg" class="service-icon">
            <h3>Design de iluminação</h3>
            <p>Alcance o equilíbrio perfeito entre iluminação ambiente, de tarefa e de destaque para criar uma atmosfera funcional.</p>
        </div>

        <div class="service-card">
            <img src="icones/interior-design.svg" class="service-icon">
            <h3>Design de interiores</h3>
            <p>Do conceito à conclusão, supervisionamos cada detalhe para trazer sua visão à vida de forma eficiente.</p>
        </div>

        <div class="service-card">
            <img src="icones/outdoor-design.svg" class="service-icon">
            <h3>Design ao ar livre</h3>
            <p>Celebre as estações ao ar livre com nossos serviços de decoração sazonal para áreas externas.</p>
        </div>

    </div>

    <div class="services-content">

        <img src="imagens/ambientes/Image 3.png" class="services-image">

        <div class="services-text">
            <h2>Projetando seu Sonho<br>com Brilhantismo</h2>

            <p>
                Eleve seus espaços com projetos de interiores personalizados que refletem seu estilo único 
                e aspirações, elaborados com precisão e brilhantismo para uma experiência de vida inesquecível.
            </p>

            <div class="accordion">
                <div class="item">
                    <span>Design de Interiores para Sala de Estar</span>
                    <button>+</button>
                </div>

                <div class="item">
                    <span>Design de Interiores para Salas Comerciais</span>
                    <button>+</button>
                </div>
            </div>

            <button class="btn">Ver mais +</button>
        </div>

    </div>

</section>

<section class="steps-section reveal" id="servicos">

    <div class="steps-content">

        <div class="steps-text">
            <h2>Projetando seu Sonho<br>em Três Passos Simples</h2>

            <div class="step">
                <div class="icon-circle">
                    <img src="icones/foguete.svg" alt="">
                </div>
                <div>
                    <h3>Iniciando o projeto</h3>
                    <p>Embarque em sua aventura de design iniciando seu projeto. Compartilhe sua visão e prepare o terreno para uma experiência de design personalizada.</p>
                </div>
            </div>

            <div class="step">
                <div class="icon-circle">
                    <img src="icones/lampada.svg" alt="">
                </div>
                <div>
                    <h3>Planejar</h3>
                    <p>Colabore estreitamente para alcançar a excelência em design, refinando sua visão e incorporando brilhantismo em cada aspecto do seu espaço.</p>
                </div>
            </div>

            <div class="step">
                <div class="icon-circle">
                    <img src="icones/check.svg" alt="">
                </div>
                <div>
                    <h3>Executar</h3>
                    <p>Testemunhe sua visão se tornando realidade enquanto executamos o plano de design com precisão. Celebre a alegria de seu espaço recém-transformado.</p>
                </div>
            </div>

        </div>

        <img src="imagens/ambientes/Image 4.png" class="steps-image">
    </div>

</section>

<section class="testimonials reveal">
    <div class="testimonials-container">
        
        <div class="testimonial-image">
            <img src="imagens/ambientes/Image 5.png" alt="">
        </div>

        <div class="testimonials-title">
            <h2>O que Nossos Clientes Dizem Sobre Nós</h2>
        </div>

        <div class="cards">
            <div class="card">
                <span class="quote">“</span>
                <p>Trabalhar com a equipe de design de vocês foi um verdadeiro prazer.
A atenção aos detalhes e a criatividade superaram minhas expectativas.
Muito obrigado por tornar minha casa tão bonita!</p>

                <div class="author">
                    <img src="imagens/clientes/Sophie.png" alt="">
                    <div>
                        <h4>Sophie Carter</h4>
                        <small>São Paulo, SP</small>
                    </div>
                </div>
            </div>

            <div class="card">
                <span class="quote">“</span>
                <p>Serviço excepcional! Desde a consulta inicial até a revelação final, sua equipe demonstrou profissionalismo e um olhar aguçado para o design.
Altamente recomendado!</p>

                <div class="author">
                    <img src="imagens/clientes/Roberto.png" alt="">
                    <div>
                        <h4>Roberto Cunha</h4>
                        <small>Maceió, AL</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="arrows">
            <button class="arrow-btn">←</button>
            <button class="arrow-btn">→</button>
        </div>

    </div>
</section>



<section class="newsletter reveal">
    <div class="newsletter-container">
        <h2>Assine nossa Newsletter para receber Insights em Design</h2>
        <p>Seja o primeiro a conhecer as últimas tendências...</p>

        <div class="newsletter-form">
            <input type="email" placeholder="Insira seu endereço de e-mail">
            <button>Inscrever-se</button>
        </div>
    </div>
</section>
    
<footer class="footer" id="contatos">
    <div class="footer-container">

        <div class="footer-col">
            <img src="imagens/logos/logo-preta.png" class="footer-logo">
            <p class="footer-desc">
                VivaDecor: Seu destino principal para design de interiores luxuoso e moderno.
            </p>

             <div class="footer-socials">
                <img src="icones/facebook.svg" class="icon">
                <img src="icones/instagram.svg" class="icon">
                <img src="icones/twitter.svg" class="icon">
                <img src="icones/linkedin.svg" class="icon">
            </div>
        </div>

        <div class="footer-col">
            <h3>Nossos serviços</h3>
            <p>Design de interiores</p>
            <p>Design ao ar livre</p>
            <p>Design de iluminação</p>
            <p>Design de escritório</p>
        </div>

        <div class="footer-col">
            <h3>Nossos serviços</h3>
            <p>Avaliações</p>
            <p>Carreiras</p>
            <p>Preços</p>
            <p>Consultas de Imprensa</p>
        </div>

        <div class="footer-col">
            <h3>Nossos serviços</h3>
            <p>info@vivadecor.com</p>
            <p>Rua Niterói, 180 - São Caetano do sul, Centro</p>
        </div>

    </div>
</footer>

<script>
const menuBtn = document.getElementById("menuBtn");
const closeBtn = document.getElementById("closeBtn");
const navMenu = document.getElementById("navMenu");


const overlay = document.createElement("div");
overlay.classList.add("menu-overlay");
document.body.appendChild(overlay);

menuBtn.addEventListener("click", () => {
    navMenu.classList.add("open");
    overlay.classList.add("show");
});

closeBtn.addEventListener("click", () => {
    navMenu.classList.remove("open");
    overlay.classList.remove("show");
});

overlay.addEventListener("click", () => {
    navMenu.classList.remove("open");
    overlay.classList.remove("show");
});

const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("active");
            }
        });
    }, {
        threshold: 0.2
    });

    document.querySelectorAll(".reveal").forEach(el => observer.observe(el));
</script>



</body>
</html>