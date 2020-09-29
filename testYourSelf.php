<?php include_once 'header.php';
include_once 'db.php';

if(isset($_POST['submit'])){
    $assesment = 0;
    $assesment1 = 0;
    $age = $_POST['age'];
    $date = $_POST['date'];
    $gender = $_POST['gender'];
    $temp = $_POST['temp'];
    $checkbox1 = count($_POST['info1']);
    $checkbox2 = count($_POST['info2']);
    $sum = 0;
    $covid = '';

    if($checkbox1 == 1){
        $assesment = 3;
    }else if ($checkbox1>=2){
        for($i = 1; $i<$checkbox1;$i++){
            $assesment = $assesment + 1;
        }
        $assesment = $assesment + 3;
    }

    if($checkbox2 == 1){
        $assesment1 = 2;
    }else if ($checkbox1>=2){
        for($i = 1; $i<$checkbox1;$i++){
            $assesment1 = $assesment1 + 2;
        }
    }
    $sum = $assesment + $assesment1;

    if($sum<5){
        $covid = 'Negative';
    }elseif ($sum>=5){
        $covid = 'Positive';
    }elseif ($sum>5 || $sum<7){
        $covid = 'Positive';
    }elseif ($sum>7){
        $covid = 'Positive';
    }

    $query = "INSERT INTO users(age, sex, temp, assesDate, score, result) VALUES ('{$age}','{$gender}','{$temp}','{$date}','{$sum}','{$covid}')";
    $creat_user_query = mysqli_query($conn, $query);
    if(!$creat_user_query){
        die("Query Failed".mysqli_error($conn));
    }
    header("location: index.php");
    exit;
}



?>

<form action="" method="post">
    <div class="form">
        <div class="container">
            <div class="first">
                <div class="row">
                    <div class="col-6">
                        <input name="age" type="number" placeholder="Age" style="width: 60%" required>
                    </div>
                    <div class="col-6">
                        <input name="date" type='date' placeholder="Date" required>
                    </div>
                </div>
            </div>
            <div>
                <br>
            </div>
            <div class="second">
                <div class="row">
                    <h3>Your Gender</h3>
                    <input type="radio" name="gender" value="Male">Male
                    <br>
                    <input type="radio" name="gender" value="Female">Female
                    <br>
                    <input type="radio" name="gender" value="Other">Other
                </div>
            </div>
            <div>
                <br>
            </div>
            <div class="third">
                <div class="row">
                    <div class="col-12">
                        <h3>Your Temperature</h3>
                        <input type="number" name="temp" placeholder="Your Body Temperature" required>
                    </div>
                </div>
            </div>
            <div>
                <br>
            </div>

            <div class="information">
                <div class="container">
                    <div class="row">
                        <div class="col-4">
                            <span>Tick the boxes</span>
                        </div>
                        <div class="col-4">
                        <span>
                            which are these you feelings:
                        </span>
                            <br>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="info1[]">
                                <label class="form-check-label" for="defaultCheck1">
                                    Breathing problem
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="info1[]">
                                <label class="form-check-label" for="defaultCheck1">
                                    Dry cough
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="info1[]">
                                <label class="form-check-label" for="defaultCheck1">
                                    DSore throat
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="info1[]">
                                <label class="form-check-label" for="defaultCheck1">
                                    Weakness
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="info1[]">
                                <label class="form-check-label" for="defaultCheck1">
                                    Runny nose
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="info-2">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="info2[]">
                                <label class="form-check-label" for="defaultCheck1">
                                    Abdominal pain
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="info2[]">
                                <label class="form-check-label" for="defaultCheck1">
                                    Vomiting
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="info2[]">
                                <label class="form-check-label" for="defaultCheck1">
                                    Diarrhoea
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="info2[]">
                                <label class="form-check-label" for="defaultCheck1">
                                    Chest pain or pressure
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="info2[]">
                                <label class="form-check-label" for="defaultCheck1">
                                    Muscle pain
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="info2[]">
                                <label class="form-check-label" for="defaultCheck1">
                                    Loss of taste or smell
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="info2[]">
                                <label class="form-check-label" for="defaultCheck1">
                                    Rash on skin, or discoloration of fingers or toes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="info2[]">
                                <label class="form-check-label" for="defaultCheck1">
                                    Loss of speech or movement
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="button">
                <button value="Submit" name="submit" class="btn-danger">Submit</button>
            </div>
        </div>
    </div>
</form>

