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
                        Individuellement, on a dû créer les bases d'un site web. Les modèles, les routes, les controlleurs et templates d'un site qui regroupe des petites annonces de maisons et son interface administrateur. <br>
                    </h4>
                    
                    <h3 class="sous-titre">Techno utilisées</h3>
                        <h4>
                            Laravel, Blade, MYSQL, HTML, CSS, JavaScript et PHP
                            
                        </h4>
                
                </div>
                <div class="image-div">
                    <img src="./img/pc_laravel.png" alt="écran de pc">
                    <div class="lien-div"> 
                        <a class="bouton-lien" href="https://prestige-immobilier.tuzi.fr/">Lien vers le site</a>
                    </div>
                    
            
                </div>
                
            </div>
                <div class="categories-div">
                    <div class="categorie-div">
                        <h3 class="sous-titre">Outils</h3>
                        <h4>
                            -VisualStudioCode pour la programmation <br>
                            -La documentation de Laravel<br>
                            
                        </h4>
        
                    </div>
                    <div class="categorie-div">
                        <h3 class="sous-titre">Mes tâches</h3>
                        <h4>
                            -Configurer le projet et la base de donnée<br>
                            -Programmer les Models, Views & Controllers<br>
                            -Faire un CRUD pour ajouter/modifier/suppimer des offres et utilisateurs<br>
                            -Système de connexion avec authentification<br>
                            -Définir les routes

                        </h4>
        
                    </div>
                </div>
                <div class="apprentissages-div">
                    <h3 class="sous-titre">Ce que j'ai appris</h3>
                    <h4> 
                        Ce projet à été un veritable défi pour moi, car c'était ma première expérience avec Laravel, que j'ai appris en totale autonomie.
                        J'ai appris à travailler sur un projet avec la structure de Laravel, son système de migration et de création de base de donnée.<br>
                        J'ai également appris à créer des routes, des controllers et des templates pour afficher les données de manière dynamique. <br>
                        Ce projet m'a permis de comprendre les bases de Laravel et de me familiariser avec ce framework. 
                        Merci à Gabriel Bois d'avoir pris le temps de m'accompagner dans ce projet.
                    </h4>
                </div>
            
            
        </section>
        
        <?php include 'components/mes-projets-section.php'?>
        <?php include 'components/qui-suis-je-section.php'?>
        <?php include 'components/contact-section.php'?>
    </body>
<?php include 'includes/footer.php'?>