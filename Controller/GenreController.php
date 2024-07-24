<?php
require_once __DIR__.'/../Model/Genre.php';
class GenreController{
    public static function index(){
        $genres = Genre::all();
        require_once __DIR__.'/../View/genre/index.php';

    }
    public static function create(){
        require_once __DIR__.'/../View/genre/create.php';
    }
    public static function store(){
        if(!isset($_POST['genre'])){
            $_SESSION['error']="Champs non remplies!";
        }else{
            $r = Genre::create($_POST);
                if($r){
                    $_SESSION['success']="Genre crée avec succès";
                }else{
                    $_SESSION['error']="Erreur insertion Genre";
                }
                   
                
            
        }
        header('Location: index.php?controller=Genre&action=index');
       
    }
    public static function edit(){
        $genre=Genre::find($_GET['id']);
        require_once __DIR__.'/../View/genre/edit.php';
    }
    public static function update(){
        if(!isset($_POST['genre'])){
            $_SESSION['error']="Champs non remplies!";
        }else{
            $r = Genre::update($_POST);
            if($r){
                $_SESSION['success']="Genre mis à jour avec succès";
            }else{
                $_SESSION['error']="Erreur mise à jour  Genre";
            }
        }
        header('Location: index.php?controller=Genre&action=index');
    }
    public static function destroy(){
        if(!isset($_GET['id'])){
            $_SESSION['error']="Genre id nn envoyé!";
        }else{
            $r=Genre::delete($_GET['id']);
            if($r){
                $_SESSION['success']="genre supprimé avec succès";
            }else{
                $_SESSION['error']="Erreur suppression Genre";
            }
        }
        
        header('Location: index.php?controller=Genre&action=index');
    }
}