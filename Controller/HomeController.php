<?php
require_once __DIR__.'/../Model/Film.php';
require_once __DIR__.'/../Model/Genre.php';
require_once __DIR__.'/../Model/Seance.php';
require_once __DIR__.'/../Model/Reservation.php';
class HomeController{
    public static function index(){
        $films=Film::search();
        $genres=Genre::all();
        require_once __DIR__.'/../View/client/index.php';
    }
    public static function search(){
        $films=Film::searchByGenre($_GET['id_genre']);
        $genres=Genre::all();
        require_once __DIR__.'/../View/client/index.php';
    }
    public static function book(){
        $film=Film::find($_GET['id']);
        $seances=Seance::searchByFilm($_GET['id']);
        //var_dump($seances);
        $genres=Genre::all();
        require_once __DIR__.'/../View/client/book.php';
    }
    public static function createbook(){
        $seance=Seance::find($_POST['id_seance']);
        $genres=Genre::all();
        //var_dump($seance);
        //tester si place restante ou pas
        if($_POST['nbad']+$_POST['nbenf'] > $seance->NbPlaceRestant()){
            $_SESSION['error']="pas de place disponible il ne reste que ".$seance->NbPlaceRestant()." places";
            header("Location: index.php?controller=Home&action=book&id=".$seance->getIdFilm());
        }else{
            $total=$seance->getPrix()+($_POST['nbad']+$_POST['nbenf']*0.8);
            $_POST['total']=$total;
            $r=Reservation::create($_POST);
            if($r){
                require_once __DIR__.'/../View/client/bookConfirm.php';
            }else{
                $_SESSION['error']="votre réservation n'est pas bien passé essayer plus tard";
                header("Location: index.php?controller=Home&action=book&id=".$seance->getIdFilm());
            }
        }
        
        
    }
}