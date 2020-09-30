<?php require_once 'header.php';


session_start();
if(!isset($_SERVER['HTTP_REFERER'])){
    header('location: index.php');
}

//if (isset($_POST['submit'])) {
//    $tem_assesment = 0;
//    $assesment = 0;
//    $assesment1 = 0;
//    $age = $_POST['age'];
//    $date = $_POST['date'];
//    $gender = $_POST['gender'];
//    $temp = $_POST['temp'];
//    $firstname = $_POST['firstname'];
//    $lastname = $_POST['lastname'];
//    $checkbox1 = count($_POST['info1']);
//    $checkbox2 = count($_POST['info2']);
//    $sum = 0;
//    $covid = '';
//
//    if ($temp > 100.9) {
//        $tem_assesment = 2;
//    }
//
//    if ($checkbox1 == 1) {
//        $assesment = 3;
//    } else if ($checkbox1 >= 2) {
//        for ($i = 1; $i < $checkbox1; $i++) {
//            $assesment = $assesment + 1;
//        }
//        $assesment = $assesment + 3;
//    }
//
//    if ($checkbox2 >= 1) {
//        for ($i = 0; $i < $checkbox2; $i++) {
//
//            $assesment1 = $assesment1 + 2;
//        }
//
//    }
//    $sum = $assesment + $assesment1 + $tem_assesment;
//
//    if ($sum < 5) {
//        $covid = 'Negative';
//    } elseif ($sum >= 5) {
//        $covid = 'Positive';
//    } elseif ($sum > 5 || $sum < 7) {
//        $covid = 'Positive';
//    } elseif ($sum > 7) {
//        $covid = 'Positive';
//    }
//
//}




?>
    <style>
        .full-container{
            min-height: 86.6vh;
        }
    </style>
<div class="full-container">
<div class="score">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 style="text-align: center" class="display-2"><?php echo $_SESSION['sum']?></h2>
                <h2 style="text-align: center"  class="display-3"><?php echo $_SESSION['covid']?></h2>
            </div>
        </div>
    </div>
</div>
<div class="result">
    <div class="container">
        <div class="row">
            <div class="col-12">
               <?php

               if($_SESSION['sum']<5){
                   echo "<h2 style=\"text-align: center\" >Merely have chance to get affected by COVID-19. Keep isolated and follow this <a href='https://www.weforum.org/agenda/2020/04/covid-19-coronavirus-patient-home-care/'>advice</a></h2>";
               }
               elseif ($_SESSION['sum']==5){
                   echo "<h2 style=\"text-align: center\" >Possible suspected case for COVID-19 affected. Keep in isolation contact these number:  <br><b class='bg-danger'>National Call Center - 333</b><br>
<b class='bg-danger'>Specialist Call Center - 09611677777</b><br>
<b class='bg-danger'>national help center - 109</b> <br>and follow this <a href='https://www.weforum.org/agenda/2020/04/covid-19-coronavirus-patient-home-care/'>advices</a>.</h2>";
               }elseif ($_SESSION['sum']==6){
                   echo "<h2 style=\"text-align: center\" >Highly chance of COVID-19 affected. As soon as possible contact these number: <br><b class='bg-danger'>National Call Center - 333</b><br>
<b class='bg-danger'>Specialist Call Center - 09611677777</b><br>
<b class='bg-danger'>national help center - 109</b></h2>";
               }elseif ($_SESSION['sum']>=7){
                   echo "<h2 style=\"text-align: center\" >Almost confirmed case of COVID-19 positive. Please contact the hospital and admit yourself in it. Contact these number: <br><b class='bg-danger'>National Call Center - 333</b><br>
<b class='bg-danger'>Specialist Call Center - 09611677777</b><br>
<b class='bg-danger'>national help center - 109</b></h2>";
               }
               ?>
            </div>
        </div>
    </div>
</div>
</div>
<?php include_once 'footer.php'?>