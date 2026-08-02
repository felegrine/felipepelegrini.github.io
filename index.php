<?php
    include_once("templates/header.php");
?>
        <main id="container">
            <!--pagina lateral a esquerda com foto contato e redes sociais -->
            <aside id="bio-container">
                <h2>Felipe Pelegrini</h2>
                <img id="bio-img" src="img/foto portfolio.png" alt="foto de perfil Felipe">
                <p>Olá me chamo Felipe Pelegrini e sou <span class="highlight"> Desenvolvedor Web </p>
                <p id="welcome-text">Seja bem-vindo!</p>
                <ul id="social-container"> <!-- Icones de redes sociais-->
                    <li><a href="https://www.linkedin.com/in/felipe-pelegrini-b65698223/" target="_blank"><i class="devicon-linkedin-plain colored"></i></a></li>
                    <li><a href="https://github.com/felegrine" target="_blank"><i class="devicon-github-original colored"></i></i></a></li>
                </ul>
                <div id="email-container">
                    <img id="gmail-img" src="img/iconemail.png" alt="icone do gmail">
                    <a href="mailto:pelegrini.felipesantos@gmail.com">pelegrini.felipesantos@gmail.com</a>
                </div>
            </aside>
            <section id="about-container">
                <h1 id="name">Felipe Pelegrini</h1>
                <p id ="title"><span class="highlight">Bacharel de Tecnologia da Informação</span></p>
                <p class="description">Atualmente estudando no curso de Bacharel em Tecnologia da Informação na Universisdade Virtual do Estado de São Paulo (Univesp)</p>
                <p class="description">Meus estudos estão focados no desenvolvimento de sites e aplicações Web com foco em atingir full stack</p>
                <div class="btn-nave">
                    <a href="projetos.php" id="btn-projects"><span>História</span></a>
                    <a href="projetos.php" id="btn-projects"><span>Ver projetos</span></a>
                </div>
                <h2 id="skills-section-title">Minhas Skills</h2>
                <div id="skills-container">
                    <div class="skills-box">
                        <p class="skills-title">Front-end</p>
                        <i class="devicon-html5-plain-wordmark colored"> HTML</i>
                        <i class="devicon-css3-plain-wordmark colored"> CSS</i>
                        <i class="devicon-javascript-plain colored"> Java Script</i>
                    </div>
                    <div class="skills-box">
                        <p class="skills-title">Back-end</p>
                        <i class="devicon-php-plain colored"> php</i>                        
                        <i class="devicon-python-plain colored"> Python</i>
                    </div>
                    <div class="skills-box">
                        <p class="skills-title">Front-end Frameworks</p>
                        <!-- <i class="devicon-vuejs-plain colored"></i>                         -->
                    </div>
                    <div class="skills-box">
                        <p class="skills-title">Back-end Frameworks</p>
                        <!-- <i class="devicon-laravel-plain colored"></i>                         -->
                    </div>
                    <div class="skills-box">
                        <p class="skills-title">Database</p>
                        <i class="devicon-mysql-plain colored"> mysql</i>                        
                    </div>
                    <div class="skills-box">
                        <p class="skills-title">Tools</p>
                        <i class="devicon-vscode-plain colored"> VS Code</i>
                        <!-- <i class="devicon-linux-plain colored"> Linux</i> -->
                        <i class="devicon-windows11-original-wordmark colored"> Windows</i>
                        <i class="devicon-github-original"> GitHub</i>
                        <i class="devicon-git-plain colored"> Git</i>
                    </div>
                </div>
            </section>
        </main>

        <!-- Ion Icons -->
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>