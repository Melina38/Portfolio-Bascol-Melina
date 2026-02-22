<?php include 'includes/header.php'?>

    <body>
        <div class="container">
            <a href="index.php" class="bouton-retour">
                <img src="./img/fleche-retour.svg" alt="fleche rouge qui pointe vers la gauche">
                <h4>Retour</h4>
            </a>
        </div>
        <div class="titre-div container">
            <h2 class="titre-projet">Réalisation d'un site web avec Symfony
            </h2>
            <p>2025</p>

        </div>
        <section class="projet-section container">
            
            <div class="categories-div">
                <div class="categorie-div">
                    <h3 class="sous-titre">Contexte</h3>
                    <h4>
                        En groupe de 3, on doit faire un site pour aider les étudiants à trouver un stage et/ou une alternance, <br>
                        les entreprises à trouver un stagiaire/alternant et le tuteur de l'université pour communiquer avec l'entreprise et ces élèves<br>
                        On avait le choix de choisir la techno que l'on voulait. <br>
                        On a choisi de s'initier à Symfony, un framework PHP, en autodidacte.<br>
                    </h4>
                    
                    <h3 class="sous-titre">Techno utilisées</h3>
                        <h4>
                            Symfony, HTML, CSS, JavaScript, Twig et PHP
                            
                        </h4>
                
                </div>
                <div class="image-div">
                    <img src="./img/pc_jobPulse.png" alt="écran de pc">
                    <div class="lien-div"> 
                        <a class="bouton-lien" href="https://jobpulse-zza0.onrender.com/">Lien vers le site</a>
                        <a class="bouton-lien" href="https://www.figma.com/design/FtCm6lECBcEWQXw4ZRB6y7/booster?node-id=271-3744&t=tyjbGJAJhG2rxaFb-1">Lien maquette</a>
                    </div>
                    
            
                </div>
                
            </div>
                <div class="categories-div">
                    <div class="categorie-div">
                        <h3 class="sous-titre">Outils</h3>
                        <h4>
                            -VisualStudioCode pour la programmation <br>
                            -Notion pour s'organiser <br>
                            -Figma pour la maquette<br>
                            -La documentation de Symfony pour s'y initier<br>
                            -Github pour pouvoir travailler en équipe<br>
                        </h4>
        
                    </div>
                    <div class="categorie-div">
                        <h3 class="sous-titre">Mes tâches</h3>
                        <h4>
                            -Veille et Réflexion sur l'univers graphique<br>
                            -Développement du site back et front du site avec l'élaboration du crud des profils et du crud sur l'état de l'offre au niveau de l'entreprise et de l'étudiant<br>
                            -Organisation des tâches<br>
                            -Réalisation de la maquette dekstop<br>

                        </h4>
        
                    </div>
                </div>
            
            
        </section>
        
        <?php include 'components/mes-projets-section.php'?>
        <?php include 'components/qui-suis-je-section.php'?>
        <?php include 'components/contact-section.php'?>
    </body>
<?php include 'includes/footer.php'?>