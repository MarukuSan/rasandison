<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" media="only screen and (min-width: 1300px)" href="./style/general.css" type="text/css">
        <link rel="stylesheet" media="only screen and (max-width: 1300px)" href="./style/phone.css" type="text/css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <script src="./js/apparence.js"></script>
        <title>Home Page</title>
    </head>
    <body id="maPage">
        <header>
            <p id="monLogo"><a href="index.php">monLogo</a></p>
        </header>

        <section class="feuille">
            <nav id="menu">
                <div><a href="#" onClick="changeColor()"><i class="material-icons">brightness_medium</i>Mode sombre/clair</a></div>
                <div><a href="https://github.com/MarukuSan" target="_blank"><i class="material-icons">card_travel</i>Portfolio</a></div>
                <div><a href="#contacts"><i class="material-icons">contacts</i>Contacts</a></div>
            </nav>
        </section>

        <section class="feuille">
            <div class="boite" style="padding-top: 2%;">
                <div>
                    <img id="maTete" src="images/marc.jpeg" alt="Photo de Marc">
                </div>
                <div style="width: auto;">
                    <p id="phrasePresentation"></p>
                </div>

                <script language="javascript">
                    const titre = document.getElementById("phrasePresentation");
                    const txt = "RASANDISON Marc";

                    function typewriter(word, index) {
                        if (index < word.length) {
                            setTimeout(() => {
                                titre.innerHTML += `<span><b>${word[index]}</b></span>`
                                typewriter(txt, index+1)
                            }, 200);
                        }
                    }

                    setTimeout(() => {
                        typewriter(txt, 0)
                    }, 500);
                </script>

            </div>
        </section>

        <section class="feuille">
            <h1>A propos de moi</h1>
            <p>
                Etudiant en 4ème année de Cycle Ingénierie Informatique à l'Ecole Hexagone,
                je suis actuellement Adjoint au Coordinateur Merge & Acquisition dans le domaine de l’Infrastructure Informatique,
                en tant qu'alternant chez Michelin.
            </p>
            
        </section>

        <section class="feuille">
            <h1>Mes formations</h1>
            <div>
                <h2>Ecole Hexagone | 2022-Aujourd'hui</h2>
                <p>Cycle Ingénierie Informatique</p>
            </div>

            <div>
                <h2>Université Clermont Auvergne | 2018-2022</h2>
                <p>Licence Informatique</p>
                <ul>
                    <li>Algorithmie et Programmation</li>
                    <li>Bases de données</li>
                    <li>Système et réseaux</li>
                    <li>Gestion de projets</li>
                </ul>
            </div>

            <div>
                <h2>Lycée Privé La Clairefontaine | 2018</h2>
                <p>Baccalauréat Scientifique</p>
                <ul>
                    <li>Spécialité Mathématiques</li>
                    <li>LV1 Anglais</li>
                    <li>LV2 Espagnol</li>
                </ul>
            </div>
        </section>

        <section class="feuille">
            <h1>Mes compétences professionnelles</h1>
            <ul>
                <li>Développer une application</li>
                <li>Réaliser un projet web</li>
                <li>Virtualiser un environnement de travail</li>
                <li>Notions de base en réseau</li>
                <li>Concevoir et gérer une base de données</li>
                <li>Traiter des données en python</li>
            </ul>
            <h2>Langages de programmation :</h2>
            <div id="langageProgrammation">
                <div>
                    <img class="logo" src="./images/logo/logo_python.png" alt="Logo de Python">
                    <p>Python</p>
                </div>
                <div>
                    <img class="logo" src="./images/logo/logo_java.png" alt="Logo de Java">
                    <p>Java</p>
                </div>
                <div>
                    <img class="logo" src="./images/logo/logo_c.png" alt="Logo de C">
                    <p>C</p>
                </div>
                <div>
                    <img class="logo" src="./images/logo/c-sharp.png" alt="Logo de C#">
                    <p>C#</p>
                </div>
                <div>
                    <img class="logo" src="./images/logo/logo_php.png" alt="Logo de PHP">
                    <p>PHP</p>
                </div>
                <div>
                    <img class="logo" src="./images/logo/logo_js.png" alt="Logo de JavaScrypt">
                    <p>JavaScript</p>
                </div>
                <div>
                    <img class="logo" src="./images/logo/logo_html5.png" alt="Logo de HTML">
                    <p>HTML</p>
                </div>
                <div>
                    <img class="logo" src="./images/logo/logo_css3.png" alt="Logo de CSS">
                    <p>CSS</p>
                </div>
                <div>
                    <img class="logo" src="./images/logo/logo_sql.png" alt="Logo de SQL">
                    <p>SQL</p>
                </div>
            </div>

            <h2>Langues vivantes :</h2>
            <ul>
                <li>Français : Langue maternelle</li>
                <li>Malgache : Langue maternelle</li>
                <li>Anglais : Niveau B1</li>
                <li>Espagnol : Niveau A2</li>
            </ul>
        </section>

        <section class="feuille">
            <h1>Me contacter ?</h1>
            
            <div id="contacts">
                <div>
                    <p><b>Portable :</b> <br><a href="tel:+33766182728" target="_blank">07 66 18 27 28</a> </p>
                </div>
                <div>
                    <p><b>E-mail :</b> <br><a href="mailto:rasandimarc@gmail.com" target="_blank">rasandimarc@gmail.com</a></p>
                </div>
                <div>
                    <p><b>Site Web :</b> <br><a href="https://rasandison.fr" target="_blank">rasandison.fr</a></p>
                </div>
                <div>
                    <p><b>LinkedIn :</b> <br><a href="https://fr.linkedin.com/in/marcrasandison" target="_blank">@marcrasandison</a></p>
                </div>
                <div>
                    <p><b>GitHub :</b> <br><a href="https://github.com/MarukuSan" target="_blank">@MarukuSan</a></p>
                </div>
                <div>
                    <p>
                        <b>Adresse :</b> <br><a href="https://www.google.fr/maps/place/40+Rue+des+Foss%C3%A9s+sous+la+Rodade,+63100+Clermont-Ferrand/@45.7952951,3.108708,17z/data=!3m1!4b1!4m5!3m4!1s0x47f71eb20a924c6b:0xb6e78349e624ce31!8m2!3d45.7952914!4d3.1108967" target="_blank">
                            40 Rue Des Fosses Sous La Rodade <br>
                            63100 Clermont-Ferrand</a>
                    </p>
                </div>
                <div>
                    <p><b>Mon CV en PDF :</b> <br><a href="./documents/cv_marc_alternance.pdf" target="_blank">Cliquez ici !!</a></p>
                </div>
            </div>
            
        </section>
    </body>
</html>