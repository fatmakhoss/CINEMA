<?php
require_once __DIR__.'/../Model/Reservation.php';
class ReservationController{
    public static function index(){
        $reservations = Reservation::all();
        require_once __DIR__.'/../View/reservation/index.php';

    }
}