<?php
require_once __DIR__.'/./DataBase.php';
class Genre{
    private $id;
    private $genre;

    public function getId(){
        return $this->id;
    }
    public function getGenre(){
        return $this->genre;
    }
    public static function all(){
        $rq="select * from genre";
        return DataBase::Query($rq,'Genre');
    }
    public static function create($tab){
        $rq = "INSERT INTO `genre` (genre) VALUES (:genre)";
        return DataBase::execute($rq,$tab);
    }
    public static function update($tab){
        $rq = "UPDATE `genre` SET `genre`= :genre
        WHERE id=:id";
        return DataBase::execute($rq,$tab);
    }
    public static function find($id){
        $rq="select * from genre where id= :id";
        $tab['id']=$id;
        return DataBase::Find($rq,'Genre',$tab);
    }
    public static function delete($id){
        $rq="delete from genre where id= :id";
        $tab['id']=$id;
        return DataBase::execute($rq,$tab);
    }

}