<?php
    require_once 'model/stagiaire_model.php';
    function indexAction(){
        $stagiaire =  latest();
        require_once 'view/liste_stagiare.php';
    }
    function createAction(){
        require_once 'view/createe.php';
    }
    function editAction(){
        $id = $_GET['id'];
        $stagiaire = view($id);
        require_once 'view/edit.php';
    }
    function updateAction(){
        $id=$_POST['id'];
        edit($id);
        header('location:index.php');       
    }
    function deleteAction(){
        $id = $_GET['id'];
        require_once 'view/delete.php';
    }
    function destroyAction(){
        $id=$_GET['id'];
        destroy($id);
        header('location:index.php');

    }
    function storeAction(){
        $iscreated =create();
        //var_dump($iscreated);
        header('location:index.php');
    }
    
?>