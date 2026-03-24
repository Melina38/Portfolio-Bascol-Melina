<?php include 'includes/header.php'?>

    <body>
        <div class="container">
            <a href="index.php" class="bouton-retour">
                <img src="./img/fleche-retour.svg" alt="fleche rouge qui pointe vers la gauche">
                <h4>Retour</h4>
            </a>
        </div>
        <div class="titre-div container">
            <h2 class="titre-projet">Initiation à Laravel en rélisant un site de petites annonces
            </h2>
            <p>2026</p>

        </div>
        <section class="projet-section container">
            
            <div class="categories-div">
                <div class="categorie-div">
                    <h3 class="sous-titre">Contexte</h3>
                    <h4>
                        En deux jours, un professionnel du développement web est venue nous enseigner Laravel. <br>
                        Individuellement, on a dû créer les bases d'un site web. Les modèles, les routes, les controlleurs et templates <br>
                    </h4>
                    
                    <h3 class="sous-titre">Techno utilisées</h3>
                        <h4>
                            Laravel, HTML, CSS, JavaScript et PHP
                            
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
                <div class="apprentissages-div">
                    <h3 class="sous-titre">Ce que j'ai appris</h3>
                    <h4> 
                        Ce projet à été un veritable défi pour moi, car c'était ma première expérience avec Symfony, que j'ai appris en totale autonomie.
                        J'ai appris à travailler sur un projet avec la structure de Symfony, son système de migration et de création de base de donnée.<br>
                        J'ai également appris à créer des routes, des controllers et des templates avec Twig pour afficher les données de manière dynamique. <br>
                        Et enfin, j'ai appris à utiliser Twig pour créer des templates et à intégrer du JavaScript dans mes pages Symfony. <br>
                    </h4>
                </div>
            
            
        </section>
        
        <?php include 'components/mes-projets-section.php'?>
        <?php include 'components/qui-suis-je-section.php'?>
        <?php include 'components/contact-section.php'?>
    </body>
<?php include 'includes/footer.php'?>