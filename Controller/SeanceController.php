<?php
require_once __DIR__.'/../Model/Seance.php';
require_once __DIR__.'/../Model/Film.php';
class SeanceController{

    public static function index(){
        $seances = Seance::all();
        require_once __DIR__.'/../View/seance/index.php';

    }
    public static function create(){
        $films = Film::all();
        require_once __DIR__.'/../View/seance/create.php';
    }
    public static function store(){
        if(!isset($_POST['id_film'],$_POST['date'],$_POST['heure'])){
            $_SESSION['error']="Champs non remplies!";
        }else{
            $r = Seance::create($_POST);
                if($r){
                    $_SESSION['success']="Seance crée avec succès";
                }else{
                    $_SESSION['error']="Erreur insertion Seance";
                }
                   
                
            
        }
        header('Location: index.php?controller=Seance&action=index');
       
    }
    public static function edit(){
        $seance=Seance::find($_GET['id']);
        $films = Film::all();
        require_once __DIR__.'/../View/seance/edit.php';
    }
    public static function update(){
        if(!isset($_POST['date'],$_POST['id_film'],$_POST['prix'])){
            $_SESSION['error']="Champs non remplies!";
        }else{
            $r = Seance::update($_POST);
            if($r){
                $_SESSION['success']="Seance mis à jour avec succès";
            }else{
                $_SESSION['error']="Erreur mise à jour  Seance";
            }
        }
        header('Location: index.php?controller=Seance&action=index');
    }
    public static function destroy(){
        if(!isset($_GET['id'])){
            $_SESSION['error']="Seance id nn envoyé!";
        }else{
            $r=Seance::delete($_GET['id']);
            if($r){
                $_SESSION['success']="Seance supprimé avec succès";
            }else{
                $_SESSION['error']="Erreur suppression Seance";
            }
        }
        
        header('Location: index.php?controller=Seance&action=index');
    }
}
?>