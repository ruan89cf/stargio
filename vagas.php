<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vagas - Stargio</title>
    <!-- SEO Básico -->
    <meta name="description" content="Explore as melhores vagas de estágio na Stargio.">
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
            <a href="/#empresas">Para Empresas</a>
            <a href="#login">Entrar</a>
        </nav>
    </header>

    <main>
        <!-- Seção de Vagas para Estudantes -->
        <section id="estudantes" class="jobs-section">
            <div class="section-title">
                <h2>Últimas Vagas de Estágio</h2>
                <p>Encontre a oportunidade perfeita para dar o primeiro passo na sua carreira.</p>
            </div>

            <div class="jobs-grid">
                <!-- Vaga Fictícia 1 -->
                <div class="job-card">
                    <div class="job-header">
                        <span class="company-logo">🚀</span>
                        <div>
                            <h4>Estágio em Desenvolvimento Web</h4>
                            <span class="company-name">TechCorp S.A</span>
                        </div>
                    </div>
                    <div class="job-tags">
                        <span class="tag">Remoto</span>
                        <span class="tag">PHP</span>
                        <span class="tag">React</span>
                    </div>
                    <div class="job-details">
                        <p>Bolsa: R$ 1.500,00</p>
                        <p>Local: 100% Remoto</p>
                    </div>
                    <a href="#" class="btn btn-primary btn-small">Ver Vaga</a>
                </div>

                <!-- Vaga Fictícia 2 -->
                <div class="job-card">
                    <div class="job-header">
                        <span class="company-logo">🪐</span>
                        <div>
                            <h4>Estágio em UI/UX Design</h4>
                            <span class="company-name">Cosmic Design</span>
                        </div>
                    </div>
                    <div class="job-tags">
                        <span class="tag">Híbrido</span>
                        <span class="tag">Figma</span>
                    </div>
                    <div class="job-details">
                        <p>Bolsa: R$ 1.200,00</p>
                        <p>Local: São Paulo, SP</p>
                    </div>
                    <a href="#" class="btn btn-primary btn-small">Ver Vaga</a>
                </div>

                <!-- Vaga Fictícia 3 -->
                <div class="job-card">
                    <div class="job-header">
                        <span class="company-logo">🛰️</span>
                        <div>
                            <h4>Estágio em Marketing Digital</h4>
                            <span class="company-name">Orbit Media</span>
                        </div>
                    </div>
                    <div class="job-tags">
                        <span class="tag">Presencial</span>
                        <span class="tag">SEO</span>
                        <span class="tag">Google Ads</span>
                    </div>
                    <div class="job-details">
                        <p>Bolsa: R$ 1.000,00</p>
                        <p>Local: Rio de Janeiro, RJ</p>
                    </div>
                    <a href="#" class="btn btn-primary btn-small">Ver Vaga</a>
                </div>
            </div>
            
            <div class="center-btn">
                <a href="/vagas.php" class="btn btn-outline">Carregar mais vagas</a>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Stargio. Todos os direitos reservados. Preparando motores para o lançamento.</p>
    </footer>

</body>
</html>
