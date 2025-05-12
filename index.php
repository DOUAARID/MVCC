<?php
    require_once 'cotroller/stagiaire_controler.php';
    //indexAction();
    if(isset($_GET['action'])){
        $action=$_GET['action'];
        switch ($action) {
            case 'create':
                //require_once 'cotroller/stagiaire_controler.php';
                createAction();
            break;
            case 'list':
                indexAction();
                break;
            case 'destroy':
                destroyAction();
                break;
            case 'edit':
                editAction();
                break;
            case 'store':
                storeAction();
                break;
            case 'update':
                updateAction();
                break;
             case 'deleta':
                deleteAction();
                break;
        }
        var_dump($action);
    }
?>