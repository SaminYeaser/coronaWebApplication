<?php

require_once 'db.php';
require_once 'header.php';

session_start();
if(!isset($_SERVER['HTTP_REFERER'])){
    header('location: index.php');
}

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
$rows = [];


?>
<div class="table">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-hover">
                    <thead>
                    <tr align="center">
                        <th scope="col">FirstName</th>
                        <th scope="col">LastName</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Temperature</th>
                        <th scope="col">Age</th>
                        <th scope="col">Date of Checkup</th>
                        <th scope="col">Result</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $rows[] = $row;
                            $firstName = $row['firstname'];
                            $LastName = $row['lastname'];
                            $age = $row['age'];
                            $temparature = $row['temp'];
                            $assesdate = $row['assesDate'];
                            $gender = $row['sex'];
                            $resultCovid = $row['result'];
                            ?>
                            <tr align="center">

                                <td><?php echo $row['firstname'] ?></td>
                                <td><?php echo $row['lastname'] ?></td>
                                <td><?php echo $row['sex'] ?></td>
                                <td><?php echo $row['temp'] ?></td>
                                <td><?php echo $row['assesDate'] ?></td>
                                <td><?php echo $row['age'] ?></td>
                                <td><?php echo $row['result'] ?></td>
                            </tr>
                            <?php
                        }
                    } else {
                        echo 'Something went wrong';
                    }


                    ?>


                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
