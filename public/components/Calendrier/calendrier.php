<?php 
//inclusion de la class Month
require '../../src/classes/Month.php';
//appelle de la class Month afin de lui passer la date que l'on veut (par defaut date du jour)
$month = new Month($_GET['month'] ?? null, $_GET['year'] ?? null);
//permet de connaitre le premier jour du mois
$start = $month -> getStartingDay() -> modify('last monday');

?>

<div class="d-flex justify-content-center mt-5">
    <!--permet de passer au mois précédent-->
    <a href="date.php?month=<?= $month -> prevMonth() ->month ?>&year=<?= $month -> prevMonth() ->year ?>" class="mt-2 dateSize textColor">&lt</a>
    <!--permet l'affichage du mois + l'année -->
    <h1 class="textColor text-center mb-5 mx-5"><?= $month -> toString(); ?></h1>
    <!--permet de passer au mois suivant-->
    <a href="date.php?month=<?= $month -> nextMonth() ->month ?>&year=<?= $month -> nextMonth() ->year ?>" class="mt-2 dateSize textColor">&gt</a>
</div>
<div class="d-flex justify-content-center">
    <table class="calendar">
        <!--une boucle qui va permettre d'avoir le nombre max de semaine dans le mois avec getweeks-->
    <?php for($i = 0; $i < $month -> getweeks(); $i ++){
        ?>
            <tr>
                <?php foreach($month -> days as $k => $day){
                    // on créer un clone d start pour ne pas altérer la variable puis modify les jours à chaque itérations pour que cela correspondent
                    $date = (clone $start) -> modify("+".($k + $i * 7)."days");
                    ?>
                    <td>
                        <?php if($i === 0): ?>
                            <!--affichage du jour-->
                            <div class="text-center"><p class="dateSize"><?= $day; ?></p></div>
                        <?php endif; ?>
                        <form action="heure.php" method="post">
                            <input type="hidden" name="date" value="<?= $date ->format('d-m-Y'); ?>">
                            <!--les classes varie en fontion de si le jour appartient au mois ou si nous sommes à la date d'aujourd'hui afin de pouvoir diserner visuellement ces diiférents jours-->
                            <div class="text-center textColor"><input type="submit" class="val<?= date('d-m-Y') != $date ->format('d-m-Y')? ' ':' today'?><?= $month -> withinmonth($date)? '': ' calendar__othermonth'; ?>" value="<?= $date ->format('d'); ?>"></div>
                        </form>
                    </td>
                    <?php
                }
                ?>
            </tr>
        <?php
    }?>
    </table>
</div>





