<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stargio - Decole sua carreira!</title>
    <!-- SEO Básico -->
    <meta name="description" content="Stargio é a plataforma definitiva de vagas para estagíarios. Encontre a empresa dos seus sonhos e lance sua carreira para as estrelas.">
    <meta name="theme-color" content="#0b0f19">
    <!-- Folha de estilo principal -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <a href="/" class="logo">
            Stargio <span>🚀</span>
        </a>
        <nav>
            <a href="/vagas.php">Vagas</a>
            <a href="#empresas">Para Empresas</a>
            <a href="#login">Entrar</a>
        </nav>
    </header>

    <main>
        <!-- Seção Hero Principal -->
        <section class="hero">
            <h1>Decole sua <span class="highlight">carreira!</span></h1>
            <p>O universo de oportunidades esperando por você. Conectamos os melhores estudantes às empresas mais inovadoras do mercado.</p>
            
            <div class="cta-container float">
                <a href="/vagas.php" class="btn btn-primary">Buscar Estágios</a>
                <a href="#empresas" class="btn btn-outline">Sou uma Empresa</a>
            </div>
        </section>

        <!-- Seção de Cards (Glassmorphism) -->
        <section class="cards-section">
            <!-- Card Estudantes -->
            <div class="glass-card">
                <h3>👨‍🎓 Estudantes</h3>
                <p>Crie seu perfil, mostre seus projetos acadêmicos e encontre as vagas de estágio que combinam perfeitamente com sua órbita de interesse.</p>
                <a href="#" class="btn btn-outline" style="width: 100%;">Criar Perfil</a>
            </div>

            <!-- Card Empresas -->
            <div class="glass-card">
                <h3>🏢 Empresas</h3>
                <p>Encontre os maiores talentos em ascensão. Publique suas vagas de estágio, atraia mentes brilhantes e descubra o futuro da sua equipe.</p>
                <a href="#" class="btn btn-primary" style="width: 100%;">Publicar Vaga</a>
            </div>
        </section>
        </section>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Stargio. Todos os direitos reservados. Preparando motores para o lançamento.</p>
    </footer>

</body>
</html>
