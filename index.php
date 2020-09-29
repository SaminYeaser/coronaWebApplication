<!--php for API-->

<?php

$api_url = 'https://coronavirus-19-api.herokuapp.com/countries/bangladesh';

// Read JSON file
$json_data = file_get_contents($api_url);

// Decode JSON data into PHP array
$response_data = json_decode($json_data, true);

// All user data exists in 'data' object
$country = $response_data['country'];
$cases = $response_data['cases'];
$deaths = $response_data['deaths'];
$today_dead = $response_data['todayDeaths'];
$total_test = $response_data['totalTests'];
$active = $response_data['active'];
$recovered = $response_data['recovered'];

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include_once 'header.php'?>
<div class="slider">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img style="height: 80vh" class="d-block w-100" src="images/info.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img style="height: 80vh" class="d-block w-100" src="images/doctor.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img style="height: 80vh" class="d-block w-100" src="images/banner.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div class="description-1">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>What is COVID-19?</h2>
                <p>Coronavirus disease 2019 (COVID-19) is defined as illness caused by a novel coronavirus now called
                    severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2; formerly called 2019-nCoV), which was
                    first identified amid an outbreak of respiratory illness cases in Wuhan City, Hubei Province, China.
                    [1] It was initially reported to the WHO on December 31, 2019. On January 30, 2020, the WHO declared
                    the COVID-19 outbreak a global health emergency. On March 11, 2020, the WHO declared COVID-19 a
                    global pandemic, its first such designation since declaring H1N1 influenza a pandemic in 2009.
                </p>
            </div>
        </div>
    </div>
</div>
<div class="description-2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Clinical features</h2>

                <p>The clinical features of this ailment vary, extending from an asymptomatic state to acute respiratory
                    distress syndrome to septic shock and multi-organ dysfunction. Ideally, this ailment is categorized
                    depending on its severity and this include mild, moderate, severe, and critical [28]. The shared
                    symptoms of individuals with the disease include fever (98.6 per cent), tiredness (69.6 per cent),
                    dry cough, and looseness of the bowels</p>

                <h2>Mild Illness</h2>

                <p>Individuals with the minor ailment may present signs of a respiratory tract viral contamination.
                    Noticeable symptoms are dry cough, slight fever, nasal infection, sore throat, malaise, muscle pain
                    and headache [11]. A recent study supports that 81 per cent of the COVID- 19 incidence are mild in
                    severity [14]. At the same time, individuals with minor illness can rapidly worsen into critical
                    cases.</p>

                <h2>Moderate Illness</h2>

                <p>Individuals with the moderate disease are likely to present symptoms that are different from those of
                    mild illness. Moderate disease symptoms include cough, breathing difficulty, and tachypnea [28]. In
                    this stage, there are no symptoms of serious ailment.</p>

                <h2>Severe Illness</h2>

                <p>Individuals with serious illness are likely to displays symptoms such as pneumonia, acute respiratory
                    distress syndrome, and septic shock. In this stage, diagnosis is medical, and health problems can be
                    left out with the aid of radiographic research. Importantly, 5 per cent of individuals with the
                    illness can acquire a serious ailment with signs of respiratory failure, RNAemia, cardiac
                    complications or multiple organ dysfunction [5]. Further, the mortality rate for critical clients is
                    49 per cent. Also, individuals with other health complications have a higher mortality rate.
                    Specifically, these health complications are diabetes (7.3 per cent), respiratory ailments (6.5 per
                    cent), heart disease (10.5 per cent), high blood pressure (6 per cent), and oncological problems
                    (5.6 per cent) . This data indicates that individuals without other health complications have a
                    lower mortality rate.</p>


                <h2>Treatment</h2>

                <p> The initial step in treating those suspected to have COVID-19 is adequate isolation in order to
                    prevent spread to other contacts, clients, and healthcare providers [8]. The mild disease should be
                    administered at home through staying hydrated, proper nutrition, monitoring fever and cough [21].
                    Besides, the repetitive usage of antibiotics and antivirals, mainly oseltamivir, should be evaded
                    among those with COVID-19 symptoms [14]. This portrays that there is no specific treatment for this
                    ailment.</p>

            </div>
        </div>
    </div>
</div>
<div class="bangladesh">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Current Situation of Bangladesh</h1>
                <h3>Total Cases: <?php echo $cases?></h3>
                <h3>Total Death: <?php echo $deaths?></h3>
                <h3>Cases of Today: <?php echo $today_dead?></h3>
                <h3>Totoal Test: <?php echo $total_test?></h3>
            </div>
        </div>
    </div>
</div>
<?php include_once 'footer.php'?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>





</body>
</html>