

    <div class="jour" id="1">
       <h2 id="j1"><u>Jour 1:</u></h2>
       <p>
          Algorithmie sans ordinateur : Algo pour cuire des oeufs de différentes manières, la machine à café et la station essence automatique
          Lexique : tour de table des différents mots (KISS, YAGNI, DRY, Moscow, apache, ...)
          Anglais/Français : Traduction collective/collaborative de 3 vidéos TedX sur un pad puis dans des fichiers de sous-titre .srt pour visionner plus tard la vidéo sous-titré en français
      </p>
    </div>

    <div class="jour" id="2">
       <h2 id="j2"><u>Jour 2:</u></h2>
       <p>
         Remise en forme des pages HTML/CSS de l'histoire de vendredi réalisée avec les enfants.
       </p>
    </div>

    <div class="jour" id="3">
      <h2 id="j3"><u>Jour 3:</u></h2>
      <p>
        Intervention du parrain Jacques au sujet de l'intégration depuis un design Photoshop vers le HTML/CSS du site minecraft hosting
        Animation CSS3 : Coverflow
        Effet Hover sur un menu
        D'autres animations
      </p>
    </div>

    <div class="jour" id="4">
      <h2 id="j4"><u>Jour 4:</u></h2>
      <p>


    Intervention de Julie pour présenter ces prochains cours au CFA, il faudra réaliser un gabarit(bootstrap) pour cela puis lui expliquer comment faire les autres fichiers/cours
    Les cours à utiliser

    Exercice JS pour le combat en JS :

    1er exercice :
    Sur une page html :
    Faire une fonction JS qui lorsqu'on clique sur un bouton "Se battre" affiche dans la page HTML(pas dans un console.log) une 1 fois sur 2 soit:
    "Vous avez perdu"
    soit
    "Vous avez gagné puis 4 secondes plus tard une redirection vers une autre page html
    Etape 1 : Créer un bouton dans le fichier html avec un id combat et qui affiche "Se battre"
    Etape 2 : En JS(vanilla) ou jQuery
    Récupérer l'élément combat grâce à son id:
    soit avec
    getElementById('combat') ou $("combat") Etape 3 : Ajouter l'événement click sur le bouton combat avec en DOM-2 -> addEventListener ou la fonction click() de Jquery
    Etape 4 : Sortir un nombre aléatoire: soit 0, soit 1(gagné) à chaque click
    Etape 5 : Si égal à 1 afficher "Vous avez gagné"" et si 0 "Vous avez perdu" dans une div id=resultat
    Etape 6 : Créer un cookie avec vie=20 et afficher la valeur du cookie dans la div id=vie dans le HTML
    Etape 7 : Décrémenter d'une valeur le cookie et afficher dans le HTML sa nouvelle valeur, voir le tutoriel en anglais ou (en français)[http://ppk.developpez.com/tutoriels/javascript/gestion-cookies-javascript/]
    Etape 8 : Quand on gagne, rediriger sur une nouvelle page HTML et y afficher dessus le nombre de vie restante en lisant le contenu du cookie.

    2eme exercice:
    Pareil que le 1er exercice mais seulement on gagne 1 fois sur 4 seulement à l'étape 4 :
    quand on perd, sa redirige vers une page fail

      </p>
    </div>

    <div class="jour" id="5">
      <h2 id="j5"><u>Jour 5:</u></h2>
      <p>

    Regarder le cour openclassroom "Comprendre le web"
    Configuration de virtualhost avec apache
    Créez un fichier /etc/apache2/sites-available/blog.conf Ajouter la configuration par défaut en regardant le contenu du fichier 000-default.conf
    Modifier le valeur de ServerName avec votre pseudo slack ou le nom de votre site
    Mettez le bon chemin sur votre système de vers votre site sur la ligne DocumentRoot
    Utilisez la commande apache "a2ensite" pour activer ce nouveau site dans apache
    a2ensite blog
    Comme indiquez en retour de la commande ci-dessus : réchargez la configuration d'apache avec la commande "service apache reload" pour que ce nouveau virtualhost soit pris en compte
    Pour ne pas lister le contenu du répertoire web il faut configurer le virtualhost en ajoutant au fichier blog.conf l'option Indexes précédé d'un -
    <Directory /usr/local/apache2/htdocs/dontlistme>
    Options -Indexes

[Tutoriel pour le listing des fichiers/dossiers(en US)](https://wiki.apache.org/httpd/DirectoryListings) 
      </p>
    </div>
