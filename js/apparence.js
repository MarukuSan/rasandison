/* Permet de changer la couleur de la page en une couleur sombre */
function TSombre() {
    var body = document.getElementById("maPage");
    body.style.backgroundColor = "rgb(0, 0, 0)";

    /* Modifie la couleur de toutes les sections "feuille" */
    var feuilles = document.getElementsByClassName("feuille");
    for (let i=0; i<feuilles.length; i++) {
        feuilles[i].style.backgroundColor = "rgb(70, 70, 70)";
    }
    
    /* Met la couleur du logo en une couleur claire */
    var logo = document.getElementById("monLogo");
    logo.firstChild.style.color = "rgb(200, 170, 130)";
}

/* Permet de changer la couleur de la page en une couleur claire */
function TClair() {    
    var  body = document.getElementById("maPage");
    body.style.backgroundColor = "rgb(219, 219, 219)";

    /* Modifie la couleur de toutes les sections "feuille" */
    var feuilles = document.getElementsByClassName("feuille");
    for (let i=0; i<feuilles.length; i++) {
        feuilles[i].style.backgroundColor = "whitesmoke";
    }

    /* Met la couleur du logo en noir */
    var logo = document.getElementById("monLogo");
    logo.firstChild.style.color = "black";
}

theme = "clair";

/* Modifie le thème selon le thème en cours */
function changeColor() {
    if (theme == "clair") {
        TSombre();
        theme = "sombre";
    }
    else {
        TClair();
        theme = "clair";
    }
}