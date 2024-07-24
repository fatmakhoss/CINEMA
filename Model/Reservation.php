<?php
require_once __DIR__.'/./DataBase.php';
class Reservation{
    private $id;
    private $nom;
    private $email;
    private $tel;
    private $id_seance;
    private $nbad;
    private $nbenf;
    private $total;
    private $datereservation;
    private $titre;
    private $date;
    private $heure;
    


    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }
    

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Get the value of tel
     */ 
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Get the value of id_seance
     */ 
    public function getId_seance()
    {
        return $this->id_seance;
    }

    /**
     * Get the value of nbad
     */ 
    public function getNbad()
    {
        return $this->nbad;
    }

    /**
     * Get the value of nbenf
     */ 
    public function getNbenf()
    {
        return $this->nbenf;
    }

    /**
     * Get the value of total
     */ 
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Get the value of datereservation
     */ 
    public function getDatereservation()
    {
        return $this->datereservation;
    }
    public static function all(){
        $rq="select reservation.*,seance.date,seance.heure,film.titre from reservation 
        inner join seance on seance.id=reservation.id_seance
        inner join film on film.id=seance.id_film";
        return DataBase::Query($rq,'Reservation');
    }
    public static function create($tab){
        $rq = "INSERT INTO `reservation`(`nom`, `email`, `tel`, `datereservation`, `id_seance`, nbad,nbenf,total) VALUES 
                                  (:nom,:email,:tel,NOW(),:id_seance,:nbad,:nbenf,:total)";
        return DataBase::execute($rq,$tab);
    }

    /**
     * Get the value of titre
     */ 
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Get the value of date
     */ 
    public function getDate()
    {
        return $this->date;
    }

    

    /**
     * Get the value of heure
     */ 
    public function getHeure()
    {
        return $this->heure;
    }
}