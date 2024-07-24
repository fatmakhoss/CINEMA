<?php
require_once __DIR__.'/./DataBase.php';
class Seance{
    private $id;
    private $id_film;
    private $date;
    private $heure;
    
    private $prix;
    private $salle;
    private $nbplace;
    private $vendu;

    public function getId(){
        return $this->id;
    }
    public function getIdFilm(){
        return $this->id_film;
    }
    public function getDate(){
        return $this->date;
    }
    public function getHeure(){
        return $this->heure;
    }
    public function getPrix(){
        return $this->prix;
    }
    public function getSalle(){
        return $this->salle;
    }
    public function getNbplace(){
        return $this->nbplace;
    }
    public function getVendu(){
        return $this->vendu;
    }
    public static function all(){
        $rq="select * from seance";
        return DataBase::Query($rq,'Seance');
    }
    public static function create($tab){
        $rq = "INSERT INTO `seance` (`id_film`, `date`, `heure`, `prix`, `salle`, `nbplace`, `vendu`) VALUES
                                  (:id_film,:date,:heure,:prix,:salle,:nbplace,:vendu)";
        return DataBase::execute($rq,$tab);
    }
    public static function update($tab){
        $rq = "UPDATE `seance` SET 
        `id_film`= :id_film,`date`= :date,`heure`= :heure,`prix`= :prix,`salle`=:salle,`nbplace`=:nbplace,`vendu`=:vendu 
        WHERE id=:id";
        return DataBase::execute($rq,$tab);
    }
    public static function find($id){
        $rq="select * from seance where id= :id";
        $tab['id']=$id;
        return DataBase::Find($rq,'Seance',$tab);
    }
    public static function delete($id){
        $rq="delete from seance where id= :id";
        $tab['id']=$id;
        return DataBase::execute($rq,$tab);
    }
    public  function getPrixEnfant(){
        return $this->prix *0.8;
    }
    public  function NbPlaceRestant(){
        return $this->nbplace - $this->vendu;
    }

    public static function searchByFilm($id_film){
        $rq="select * from seance WHERE id_film = :id_film 
        AND date >=NOW()
        AND nbplace-vendu > 0";
        $tab['id_film']=$id_film;
        return DataBase::Query($rq,'Seance',$tab);
    }

}