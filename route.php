<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];

    switch ($page) {
        case 'index.php':
            include('../view/index.php');
            break;
        case 'footer':
            include('../view/footer.php');
            break;
        case 'header':
            include('../view/header.php');
            break;
        case 'velos':
            include('controller/velosController.php');
            $velos=new velosController();
            $velos->getArticles();
            break;
        case 'contact':
            include('view/contact.php');
            break;
        case 'commander':
            include('../view/commander.php');
            break;
        case 'produit':
            $veloController = new velosController(new velosModel($pdo));
            $veloController->afficherdetailsvelos($_GET['velos']);
            break;
        default:
            include('view/accueil.php');
            break;
    }
} else {
    include('view/accueil.php');
}
?>



