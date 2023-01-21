<!DOCTYPE html>
<html lang="fr">

<?php
include "common/head.php";
?>

<body class="body-1">
        <?php
        // include "common/header.php";
        // include "common/navigation.php";

        // include "content/accueil_content.php";

        // include "common/footer.php";

        if (!isset($page) || (($page !== 'accueil') && ($page !== 'realisations') && ($page !== 'veilles_technologiques') && ($page !== 'cv_Ammar_Shihan') && ($page !== 'CV_Ammar_SHIHAN.pdf'))) {
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