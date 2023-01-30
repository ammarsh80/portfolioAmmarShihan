<!DOCTYPE html>
<html lang="fr">

<?php
include "common/head.php";
?>

<body class="body-1">
        <?php
$page = trim(filter_var($_GET['page'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));

        // include "common/header.php";
        // include "common/navigation.php";

        // include "content/accueil_content.php";

        // include "common/footer.php";

        if (!isset($page) || (($page !== 'accueil') &&
         ($page !== 'realisations') && 
         ($page !== 'veilles_technologiques') && 
         ($page !== 'cv_Ammar_Shihan') && 
         ($page !== 'CV_Ammar_SHIHAN.pdf') && 
         ($page !== 'veilles_technologiques_git') && 
         ($page !== 'veilles_technologiques_bootstrap') &&
         ($page !== 'veilles_technologiques_audio'))) {
            include 'content/error.php';
            die;
        } elseif ($page == 'cv_Ammar_Shihan'){
            include 'common/header.php';
            include 'common/navigation.php';
            include 'content/' . $page . '_content.php';
        }
         else {
            include 'common/header.php';
            include 'common/navigation.php';
            include 'content/' . $page . '_content.php';
            include 'common/footer.php';
        }
        ?>
</body>
<script src="css/main.js"></script>

</html>