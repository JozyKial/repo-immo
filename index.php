<?php
include './functions/main_functions.php';

//scanner le dossier pages
$pages = scandir('pages/');

if (isset($_GET['page']) && !empty($_GET['page']) && in_array($_GET['page'] . '.php', $pages)) {
    $page = $_GET['page'];
} else {
    $page = 'home';
}

//scanner le dossier function
$pages_functions = scandir('functions/');

if(in_array($page.'.func.php', $pages_functions)){
    include 'functions/'.$page.'.func.php';
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
    	
        <?php
        include 'body/topbar.php';
        include 'body/sidebar.php';
        ?>

         <script src="js/jquery.js"></script>
        <?php
            $page_js = scandir('js/');
            if(in_array($page.'.func.js', $page_js)){
        ?>
            <script src="js/<?= $page ?>.func.js"></script>
        <?php
            }
        ?>

        <?php include 'body/footer.php';?>
    </body>
</html>