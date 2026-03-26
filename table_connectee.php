<?php include 'includes/header.php'?>

    <body>
        <div class="container">
            <a href="index.php" class="bouton-retour">
                <img src="./img/fleche-retour.svg" alt="fleche rouge qui pointe vers la gauche">
                <h4>Retour</h4>
            </a>
        </div>
        <div class="titre-div container">
            <h2 class="titre-projet">Réalisation d'un jeu visual novel sur Unity
            </h2>
            <p>2026</p>

        </div>
        <section class="projet-section container">
            
            <div class="categories-div">
                <div class="categorie-div">
                    <h3 class="sous-titre">Contexte</h3>
                    <h4>
                        Au sein de l’équipe, j’étais principalement en charge du graphisme, 
                        mais j’ai également participé à la partie matérielle et électronique du projet. 
                        Nous avons fait le choix d’une direction artistique en pixel art, 
                        afin de donner au jeu une identité visuelle rétro et cohérente.<br><br>

                        Dans ce cadre, j’ai modélisé des figurines en pixel art sur Blender, 
                        en adaptant le style pixelisé à de la modélisation 3D, 
                        dans le but de les imprimer en impression 3D pour une utilisation 
                        physique sur la table de jeu. 
                        J’ai également réalisé les artéfacts du jeu sur Aseprite, 
                        en respectant la charte graphique et l’univers visuel définis pour le projet.<br><br>

                        Par ailleurs, j’ai travaillé sur la partie Arduino, notamment sur une tour à dés interactive. 
                        Le système fonctionne avec un dé à faces colorées qui descend par des escaliers 
                        afin de mélanger les résultats. Un capteur RGB détecte ensuite la couleur obtenue 
                        et renvoie une valeur au jeu. 
                        J’ai été chargé de réaliser le câblage ainsi que le code Arduino nécessaires 
                        au bon fonctionnement de ce dispositif.
                    </h4>
                    
                    <h3 class="sous-titre">Techno utilisées</h3>
                        <h4>
                            Blender, Aseprite, Arduino
                        </h4>
                
                </div>
                <div class="image-div">
                    <img src="./img/pc_visual.png" alt="écran de pc">
                                      
            
                </div>
                
            </div>
                <div class="categories-div">
                    <div class="categorie-div">
                        <h3 class="sous-titre">Outils</h3>
                        <h4>
                            -Arduino pour la programmation de la tour à dés interactive<br>
                            -Notion pour s'organiser <br>
                            -Les élements graphiques avec Aseprite et Blender<br>
                            -L'impression 3D avec Bambu Studio<br>
                        </h4>
        
                    </div>
                    <div class="categorie-div">
                        <h3 class="sous-titre">Mes tâches</h3>
                        <h4>
                            -Réalisation du graphisme du jeu <br>
                            -Modélisation de figurines en pixel art sur Blender pour une impression 3D <br>
                            -Création des artéfacts du jeu en pixel art sur Aseprite <br>
                            -Développement d’un système de tour à dés interactive avec Arduino <br>
                            -Réalisation du câblage et du code Arduino pour la détection des couleurs via un capteur RGB
                        </h4>
        
                    </div>
                </div>
                <div class="apprentissages-div">
                    <h3 class="sous-titre">Ce que j'ai appris</h3>
                    <h4>
                        Ce projet m’a permis de découvrir et d’approfondir l’utilisation de Blender, 
                        ainsi que de développer mes compétences en graphisme, tout en approfondissant des aspects techniques 
                        comme l’électronique et la programmation embarquée. J’ai particulièrement apprécié la diversité 
                        des tâches et la collaboration en équipe, qui ont rendu ce projet à la fois formateur et motivant.

                    </h4>
                </div>
            
            
        </section>
        
        <?php include 'components/mes-projets-section.php'?>
        <?php include 'components/qui-suis-je-section.php'?>
        <?php include 'components/contact-section.php'?>
    </body>
<?php include 'includes/footer.php'?>