<?php
    require_once 'cotroller/stagiaire_controler.php';
    //indexAction();
    if(isset($_GET['action'])){
        $action=$_GET['action'];
        switch ($action) {
            case 'create':
                require_once 'cotroller/stagiaire_controler.php';
                createAction();
            break;
            case 'list':
                require_once 'cotroller/stagiaire_controler.php';
                indexAction();
                break;
            case 'destroy':
                require_once 'cotroller/stagiaire_controler.php';
                destroyAction();
                break;
            case 'edit':
                require_once 'cotroller/stagiaire_controler.php';
                editAction();
                break;
            case 'store':
                require_once 'cotroller/stagiaire_controler.php';
                storeAction();
                break;
            case 'update':
                require_once 'cotroller/stagiaire_controler.php';
                updateAction();
                break;
            case 'delete':
                require_once 'cotroller/stagiaire_controler.php';
                deleteAction();
                break;
            default:
            indexAction(); 
            break;
        }
        //var_dump($action);
    } else {
    indexAction(); // Si aucune action définie
}
?>