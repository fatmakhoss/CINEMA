<?php
require_once __DIR__.'/../Model/Film.php';
require_once __DIR__.'/../Model/Genre.php';
require_once __DIR__.'/../Model/UploadFile.php';
class FilmController{

    public static function index(){
        $films = Film::all();
        require_once __DIR__.'/../View/film/index.php';

    }
    public static function create(){
        $genres = Genre::all();
        require_once __DIR__.'/../View/film/create.php';
    }
    public static function store(){
        if(!isset($_POST['titre'],$_POST['id_genre'])){
            $_SESSION['error']="Champs non remplies!";
        }else{
            //dossier la ou on veut enregistrer
            $target_dir = __DIR__."/../public/img/";
            //nom du fichier uploadé
            $target_file_name =  UploadFile::upload("fileAffiche",$target_dir);
            if(!isset($_SESSION['error'])){
                $_POST['affiche']=$target_file_name;
                $r = Film::create($_POST);
                if($r){
                    $_SESSION['success']="Film crée avec succès";
                }else{
                    $_SESSION['error']="Erreur insertion Film";
                }
            }          
                
            
        }
        header('Location: index.php?action=index');
       
    }
    public static function edit(){
        $film=Film::find($_GET['id']);
        $genres = Genre::all();
        require_once __DIR__.'/../View/film/edit.php';
    }
    public static function update(){
        if(!isset($_POST['titre'],$_POST['id_genre'],$_POST['affiche'])){
            $_SESSION['error']="Champs non remplies!";
        }else{
            $r = Film::update($_POST);
            if($r){
                $_SESSION['success']="Film mis à jour avec succès";
            }else{
                $_SESSION['error']="Erreur mise à jour  Film";
            }
        }
        header('Location: index.php?action=index');
    }
    public static function destroy(){
        if(!isset($_GET['id'])){
            $_SESSION['error']="Film id nn envoyé!";
        }else{
            $r=Film::delete($_GET['id']);
            if($r){
                $_SESSION['success']="Film supprimé avec succès";
            }else{
                $_SESSION['error']="Erreur suppression Film";
            }
        }
        
        header('Location: index.php?action=index');
    }
}
?>