<?php
require_once __DIR__.'/./DataBase.php';
class Film{
    private $id;
    private $titre;
    private $id_genre;
    private $duree;
    private $affiche;
    private $producteur;
    private $description;

    public function getId(){
        return $this->id;
    }
    public function getGenre(){
        return $this->id_genre;
    }
    public function getDuree(){
        return $this->duree;
    }
    public function getTitre(){
        return $this->titre;
    }
    public function getAffiche(){
        return $this->affiche;
    }
    public function getProducteur(){
        return $this->producteur;
    }
    public function getDescription(){
        return $this->description;
    }

    public static function all(){
        $rq="select * from film";
        return DataBase::Query($rq,'Film');
    }
    public static function create($tab){
        $rq = "INSERT INTO `film`(`id_genre`, `titre`, `duree`, `affiche`, `producteur`, `description`) VALUES 
                                  (:id_genre,:titre,:duree,:affiche,:producteur,:description)";
        return DataBase::execute($rq,$tab);
    }
    public static function update($tab){
        $rq = "UPDATE `film` SET `id_genre`= :id_genre,
        `titre`= :titre,
        `duree`= :duree,
        `affiche`= :affiche,
        `producteur`= :producteur,
        `description`= :description 
        WHERE id=:id";
        return DataBase::execute($rq,$tab);
    }
    public static function find($id){
        $rq="select * from film where id= :id";
        $tab['id']=$id;
        return DataBase::Find($rq,'Film',$tab);
    }
    public static function delete($id){
        $rq="delete from film where id= :id";
        $tab['id']=$id;
        return DataBase::execute($rq,$tab);
    }
    public static function search(){
        $rq="select distinct film.* from film inner join seance on film.id=seance.id_film
        where seance.date >= NOW()
        AND nbplace - vendu > 0";
        return DataBase::Query($rq,'Film');
    }
    public static function searchByGenre($id_genre){
        $rq="select distinct film.* from film inner join seance on film.id=seance.id_film
        where seance.date >= NOW()
        AND nbplace - vendu > 0
        AND film.id_genre= :id_genre";
        $tab['id_genre']=$id_genre;
        return DataBase::Query($rq,'Film',$tab);
    }

}