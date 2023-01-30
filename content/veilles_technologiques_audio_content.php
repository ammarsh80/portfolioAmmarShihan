<main id="main_colonne_veilles">

    <section>
        <article class="article_veille article_veille_first">
            <div>
                <a href="#veille1">

                    <h1> L’élément audio embarqué <audio> </h1>
                </a>
                <p>L'élément HTML (audio) est utilisé afin d'intégrer un contenu sonore dans un document.
                    Il peut contenir une ou plusieurs sources audio représentées avec l'attribut (src) ou
                    l'élément (source) (le navigateur choisira celle qui convient le mieux). Il peut également être la destination de médias diffusés en continu, en utilisant un MediaStream.</p>
                </p>
            </div>
            <div class="article_veille_détail">
                <a href="#veille1">Lire plus...</a>
                <h5>Date de réalisation: 23-12-2022</h5>
            </div>
        </article>

    </section>
    <div id="veille1" class="veille1"></div>
    <section class="veille">
        <article>
            <h1>L’élément audio embarqué </h1>
            <a href="https://developer.mozilla.org/fr/docs/Web/HTML/Element/audio#notes_dutilisation">(Source : MDN Web Docs)</a>
            <p>L'élément HTML (audio) est utilisé afin d'intégrer un contenu sonore dans un document.
                Il peut contenir une ou plusieurs sources audio représentées avec l'attribut (src) ou
                l'élément (source) (le navigateur choisira celle qui convient le mieux). Il peut également être la destination de médias diffusés en continu, en utilisant un MediaStream.</p>
            </p>
            <h5>Les Attributs :</h5>
            <p>- autoplay (Un attribut booléen) </p>
            <p>S’il est spécifié, l'audio commencera automatiquement la lecture dès qu'il pourra le faire, sans attendre la fin du téléchargement de l'ensemble du fichier audio.</p>
            <p>- controls:</p>
            <p>Si l'attribut est présent, le navigateur affichera des contrôles pour que l'utilisateur puisse gérer la lecture, le volume, et le déplacement du curseur de lecture.</p>
            <p>- crossorigin:</p>
            <p>Cet attribut à valeur contrainte indique comment le CORS doit être utilisé afin de récupérer la ressource. Les ressources utilisant le CORS peuvent être réutilisées dans un élément (canvas) sans corrompre celui-ci. Les valeurs autorisées pour cet attribut sont (anonymous, use-credentials).</p>
            <p>- loop: </p>
            <p>Un attribut booléen. S'il est renseigné, la lecture du fichier se fera en boucle.</p>
            <p>- muted:</p>
            <p>Un attribut booléen, indiquant si le son de l'élément audio est initialement coupé. Sa valeur par défaut est false.</p>
            <p>- preload:</p>
            <p>Cet attribut indique au navigateur ce que l'auteur du code html pense de l'utilisation optimale de cet élément. Il accepte uniquement les valeurs suivantes :</p>

<p>none : Indique que l'élément audio ne devrait pas être mis en cache</p>
<p>metadata : Indique que seules les méta-données (comme la durée) sont préchargées</p>
<p>auto : Indique que tout le fichier peut être téléchargé, même s'il n'est pas certain que l'utilisateur le lira</p>
<p>"" (chaîne de caractères vide) : Un synonyme de auto.</p>
<p>La valeur par défaut peut varier d'un navigateur à l'autre. Les spécifications recommandent la valeur metadata.</p>
<p>-	src:</p>
<p>L'URL du fichier audio à intégrer. Cet élément est soumis aux contrôles d'accès HTTP. Cet attribut est facultatif ; vous pouvez utiliser l'élément (source) dans le bloc audio pour spécifier l'audio à intégrer.</p>
<h5>Notes d'utilisation</h5>
<p>Les navigateurs ne prennent pas tous en charge les mêmes types de fichiers (en-US) et codecs audio (en-US) ; vous pouvez fournir plusieurs sources à l'intérieur d'éléments <source> imbriqués, et le navigateur utilisera alors le premier qu'il comprend.</p>
        </article>

    </section>
    <img src="./assets/img/arrow_up.png" onclick="topFunction()" id="topBtn" alt="">
    <a href="index.php?page=veilles_technologiques">

        <div id="retour_page_veuilles"> Retour vers Veilles Technologiques</div>
    </a>

</main>