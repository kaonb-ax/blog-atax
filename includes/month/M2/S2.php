

    <div class="jour" id="1">
       <h2 id="j1"><u>Jour 1:</u></h2>
       <p>
          Correction exercice JS combat
          Suite virtualHost sous apache et fichier /etc/hosts
          Travail sur les gabarits avec Bootstrap
          Fin histoire dont vous etes le heros
        </p>
    </div>

    <div class="jour" id="2">
       <h2 id="j2"><u>Jour 2:</u></h2>
       <p>
        La vidéo d'introduction à git, regarder seulement jusqu'à 36 minnutes
        La CheatSheet FR
        Installer git "apt install git" ###Configurer git avec votre nom d'user et votre mail git config --global user.name "MON_USER" git config --global user.email "MON_EMAIL@DOMAINE.fr"
        Créer et se déplacer dans un nouveau dossier dans /var/www/html/
        mkdir projet_versionner
        cd projet_versionner# Initialiser le projet avec Git
        git init
        Vérifier le status
        git status
        Ajouter le premier fichier (modifié avec nano par exemple)
        git add index.html
        git status
        Le fichier est maintenant ajouté dans la zone de stage mais pas encore validé
        Git commit pour valider ces changements
        git commit -m "Un message de commit clair"
        Commande pour voir l'historique de vos commits:
        git log
       </p>
    </div>

    <div class="jour" id="3">
      <h2 id="j3"><u>Jour 3:</u></h2>
      <p>
        Reprise de git (add, commit, branch)
        Présentation de FTP avec Filezilla pour l'upload de l'histoire de l'atelier des enfants
        SSH avec les raspberry
        Activité / Jeu SSH
        Mise en place du planning de la semaine suivante
      </p>
    </div>

    <div class="jour" id="4">
      <h2 id="j4"><u>Jour 4:</u></h2>
      <p>

    Tutoriel / CheatSheet git / github
    Exemple de fichier .gitignore
    Si, à l'intérieur d'un répertoire, on ne souhaite pas rajouter un fichier ou un répertoire, il faut alors créer un fichier .gitignore et y rajouter la liste de ce que l'on ne souhaite pas voir :

!.gitignore (ne pas ignorer le .gitignore)
.~lock.* (ignorer les fichiers temporaires libreoffice)
.buildpath (pour Eclipse)
.project
.settings
file (exemple d'un nom de fichier)
folder (exemple d'un nom de répertoire)

Puis, il faut rajouter le fichier .gitignore dans l'index des fichiers du dépôt.

$ git add path/to/.gitignore

    Integration HTML ( Deadline mercredi ):
    Voir sur le depot du wiki(ici même) pour récupérer les fichiers -> integration.zip
        Bootstrap / Flexbox ou utilisation des flottants possible,
        Faire des commits à chaque étape principale de la construction de la page (menu, header, différentes parties, footer, ajouts styles...)
        Reproduire le site en fonction de l'image webagency.png, vous avez le contenu dans le fichier contenu.txt pour copier/coller le texte
        Le menu est en opacité, voir le fichier capture_survol.png
        Bonus : Doit être responsive(bootstrap ou media qeries)
      </p>
    </div>

    <div class="jour" id="5">
      <h2 id="j5"><u>Jour 5:</u></h2>
      <p>
    Intégration HTML/CSS (voir fichier intégration)
    Pour ne plus à avoir à renseigner le login/mot de passe à chaque push :
    https://github.com/Boyquotes/Tutosshkey
    Intervention d'Hugo sur le duplicate content

    Tutoriel sur les canvas :
        http://boulogne.simplon.co/wp-content/uploads/2015/12/Tutoriel-HTML5JS-Canvas-partie-1.pdf
        Tutoriel de création d'un jeu HTML5 avec Canvas :
        http://canvas.simplon-lyon.fr/atelier.html
        D'autres exemples, faites Ctrl-U et cliquer sur le fichier JS qui contient le code qui génère le canvas :
        http://corehtml5canvas.com/code-live/
        Test de moteurs de jeu HTML5:
        https://phaser.io/
        Exemples fait avec phaser :
        https://phaser.io/examples
        https://developer.mozilla.org/en-US/docs/Games/Tutorials/2D_breakout_game_Phaser
        Ou MelonJS :
        http://melonjs.org/
    Ou un de ceux là...:
    https://html5gameengine.com/

      </p>
    </div>
