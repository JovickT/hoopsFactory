<?php

class Month{
    public $days = ['Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi','Dimanche'];
    private $months = ['Janvier','Fevrier','Mars','Avril','Mai','Juin','Juillet','Aôut','Septempbre','Octobre','Novembre','Decembre']; 
    public $month;
    public $year;

    function __construct($month = null, $year = null)
    {
        if($month === null || $month < 1 || $month > 12){
            $month = intval(date('m'));
        }
        if($year === null || $month < 1 || $month > 12){
            $year = intval(date('Y'));
        }
        if($month < 1 || $month > 12){
            throw new Exception('le mois '.$month.' n\'est pas valide ');
        }
        if($year < 1970){
            throw new Exception('l\'année est inférieur à 1970');
        }
       
        $this -> month = $month;
        $this -> year = $year;
    }

    //renvoie le premier jour du mois
    function getStartingDay(){
        return new DateTime("{$this->year}-{$this->month}-01");
    }

    //
    function toString(){
        return $this ->months[$this -> month -1]. " ".$this -> year;
    }

    // renvoie le nombre de semaine dans le mois
    function getweeks(){
        $start = $this -> getStartingDay();
        $end = (clone $start) -> modify('+1 month -1 day');

        $weeks =  intval($end -> format('W')) - intval($start -> format('W')) + 1;
        if($weeks < 0 ){
            $weeks =  intval($end -> format('W'));
        }

        return $weeks;
    }

    //permet de savoir si le jours est dans le mois en cours 
    function withinmonth($date){
        return $this -> getStartingDay() -> format('Y-m') === $date -> format('Y-m');
    }

    // renvoi le mois suivant
    function nextMonth(){
        $month = $this -> month + 1;
        $year = $this -> year;

        if($month > 12){
            $month = 1;
            $year += 1;
        }

        return new Month($month, $year);
    }

    // renvoi le mois précédent
    function prevMonth(){
        $month = $this -> month - 1;
        $year = $this -> year;

        if($month < 1){
            $month = 12;
            $year -= 1;
        }

        return new Month($month, $year);
    }
}

?>