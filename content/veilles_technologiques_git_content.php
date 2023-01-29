<main id="main_colonne_veilles">

<section>
        <article class="article_veille article_veille_first">
            <div>
                <a href="#veille1">

                    <h1>Git </h1>
                </a>

                <p>Git : est un logiciel (un outil) permettant de contrôler les versions d’un projet informatique.
                    Donc, archiver, et avoir les différentes versions pour pouvoir y revenir plus tard en cas de besoin….
                </p>
            </div>
            <div class="article_veille_détail">
                <a href="#veille1">Lire plus...</a>
                <h5>Date de réalisation: 18/10/2022</h5>
            </div>
        </article>
       
    </section>
    <div id="veille1" class="veille1"></div>
    <section class="veille">
        <article>
            <h1>Git</h1>
            <p>Git : est un logiciel (un outil) permettant de contrôler les versions d’un projet informatique.
                Donc, archiver, et avoir les différentes versions pour pouvoir y revenir plus tard en cas de besoin….
                Pour se faire :</p>
            <p> Etape 1: On commence par <a href="https://git-scm.com/downloads">télécharger la dernière version de git,</a>
                (Téléchargement et installation classique)</p>
            </p>
            <img src="./assets/img/img_veille_git/1.png" alt="" class="veille1_img1">
            <p>Etape 2: Créer un espace qui contiendra l’ensemble de fichiers de projet pour le partager à distance avec un collaborateur.
                Cet espace hébergé à distance s’appelle un Repository (dépôt), il existe plusieurs sites pour en créer un facilement et gratuitement (ex. JFrog, kbroman…), le plus connu est GitHub.
                En ligne donc, on crée un compte sur github (on peut aussi télécharger la version desktop).
            </p>
            <img src="./assets/img/img_veille_git/2.png" alt="" class="veille1_img1">
            <p>À partir de ce moment on peut créer autant de repositories/dépôts qu’on souhaite.
            </p>
            <p> Pour se faire : on clique sur new repository.
                Et là, il faudra spécifier plusieurs informations comme :
            </p>
            <img src="./assets/img/img_veille_git/3.png" alt="" class="veille1_img1">
            <p>- le nom de dépôt : Repository name (pour nous le nom de l’exercice),</p>
            <p> - une petite Description (pas obligatoire, ex. première page web).</p>
            <img src="./assets/img/img_veille_git/4.png" alt="" class="veille1_img1">

            <p>Puis, (obligatoire) si on veut que le code soit privé ou publique (attention il est publique par défaut).
                Au même encore l’option README (pas obligatoire, et on peut le faire plus tard à n’importe quel moment)
                qui est un petit fichier contenant la documentation de base (c’est-à-dire : comment récupérer le projet,
                comment il fonctionne et comment il est structuré).
                Une fois que toutes ces infos seront remplies, on clique Create repositroy et le dépôt apparentera dans (Your repositories).
            </p>
            <img src="./assets/img/img_veille_git/5.png" alt="" class="veille1_img1">
            <p>Pour partager un seul repository : copier partager ce lien (dans code). </p>
            <img src="./assets/img/img_veille_git/6.png" alt="" class="veille1_img1">
            <img src="./assets/img/img_veille_git/7.png" alt="" class="veille1_img1">
            <p>Le dépôt est en ligne pour le moment, il faut donc en créer en copie en local (sur son ordinateur).
                Pour cela (comme nous avons déjà installer Git ;)), </p>
            <img src="./assets/img/img_veille_git/8.png" alt="" class="veille1_img1">
            <p>Dans le dossier local, chaque un pourra travailler, créer de nouveaux fichiers etc…</p>
            <p>MAIS, pour sauvegarder et partager les changements, il faut retourner dans le terminal :</p>
            <p>Se rendre dans le dossier (commande : cd qui permet de changer de répertoire et ensuite spécifier le nom de dépôt:

            <p class="commande_git"> cd nomDeRepository</p>
            <p> Ensuite avec la commande : (pour envoyer le/les fichier ajouté) </p>
            <p class="commande_git"> git add nomDeFichier.html</p>

            <p>Encore mieux : (pour envoyer tous les changements ;) ) </p>
            <p class="commande_git"> git add * </p>
            <p>Attention tous cela permet de créer une liste temporaire en attente d’envoie !! (et ce n’est pas suffisant).
            <p class="commande_git"> add commit -m "texteDeVotreCommit" </p>
            <img src="./assets/img/img_veille_git/9.png" alt="" class="veille1_img1">
            <p>On va pouvoir/devoir impacter tous les changements dans un (commit) : une sorte de boite qui va contenir tous les changements correspondant à une version (ex. ajout d’un nouveau code, suppression, modification d’une ligne, etc…). Ce pack (commit) on va pouvoir l’envoyer en ligne grâce à la commande :</p>
            <p class="commande_git"> git push origin NomDuBrancheDuDepotEnLigne</p>
            <p>qui permet l’envoie de commit sur le dépôt en ligne cette voici !!!! </p>
            <p>à partir de là, on a une copie en local + en copie sur le dépôt et on peut se déconnecter car tout est sauvegardés en ligne.</p>
            <p>A chaque envoie, GitHub crée une nouvelle version actualisée</p>
            <p>Pour récupérer les nouveautés, le collaborateur devra faire la commande :</p>
            <p class="commande_git"> git pull </p>
            <p>et à son tour il recommence la procédure….</p>
            <p> - Travailler, apporter des modifications….etc.</p>
            <p> - Ensuite écrire les commandes dans le terminal → </p>
            <img src="./assets/img/img_veille_git/10.png" alt="" class="veille1_img1">
            <p>Il faudra donc s’organiser pour créer une autre branche pour chaque partie :
                Ex. Dans le projet (SiteEcoleProjet) on va créer une branche (dev) pour la partie développement :
            </p>
            <img src="./assets/img/img_veille_git/11.png" alt="" class="veille1_img1">
            <p>La branche est créée.
                Pour l’absorber (par un collaborateur) :
            </p>
            <img src="./assets/img/img_veille_git/12.png" alt="" class="veille1_img1">
            <p>Il va falloir diviser la branche par fonctionnalité :</p>

            <p> 1) Galerie photos.., </p>
            <p>2) menu de navigation.</p>

            <p>Chaque ’un donc travail sur sa propre branche de fonctionnalité
            </p>
            <p>Avec la commande</p>
            <p class="commande_git"> git merge</p>
            <p> On va fusionner les deux branches (commit) de fonctionnalité.</p>
            <img src="./assets/img/img_veille_git/13.png" alt="" class="veille1_img1">
            <p>Avec encore, la commande</p>
            <p class="commande_git"> git merge</p>
            <p> cette fois pour envoyer le projet de la branche dev à la branche master</p>
            <img src="./assets/img/img_veille_git/14.png" alt="" class="veille1_img1">
            <p> Fin du projet</p>







        </article>
    </section>
    <img src="./assets/img/arrow_up.png" onclick="topFunction()" id="topBtn" alt="">
    <a href="index.php?page=veilles_technologiques">

    <div id="retour_page_veuilles"> Retour vers Veilles Technologiques</div>
</a>

</main>