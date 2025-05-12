<?php
    function database_connection(){
        return $pdo = new PDO('mysql:host=localhost;dbname=mvcstagiaire', 'root', '');
    }
    function latest(){
        $pdo = database_connection();
      return    $pdo->query('select * from stagiaire order by id desc')->fetchAll(); 
        
    }
    function create(){
        extract($_POST);
        $pdo = database_connection();
        $sqlstate=$pdo->prepare("insert into stagiaire values (null,?,?,?,?,?)");
        return $sqlstate->execute([$nom,$prenom,$age,$login,$password]);
    }
    function edit($id){
        $pdo = database_connection();
         $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $age=$_POST['age'];
        $login=$_POST['login'];
        $password=$_POST['password'];
        $sqlstateU=$pdo->prepare("update stagiaire set nom=?,prenom=?,age=?,login=?,password=? where id=?");
        return $sqlstateU->execute([$nom,$prenom,$age,$login,$password,$id]);       
    }
    function destroy($id){
        extract($_POST);
        $pdo = database_connection();
        $sqlstatess=$pdo->prepare("delete from stagiaire where id = ?");
        return $sqlstatess->execute([$id]);
    }
    function view($id){
        $pdo = database_connection();
        $sql="select * from stagiaire where id = $id";
        $res= $pdo->query($sql);
        return $res->fetch();
    }
    ?>