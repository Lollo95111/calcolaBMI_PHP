<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Personal Trainer BMI Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }

        h1 {
            color: #343a40;
            text-align: center;
            margin-top: 50px;
        }

        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .btn-primary {
            background-color: blue;
            border-color: black;
            font-weight: bold;
        }

        .btn-primary:hover {
            background-color: #218838;
        }

        #risultato {
            padding: 20px;
            border: 2px solid #007bff;
            background-color: #ffffff;
            color: #007bff;
            border-radius: 10px;
            margin-top: 20px;
            text-align: center;
        }

        .trainer-image {
            max-width: 100%;
            border-radius: 10px;
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row justify-content-center align-item-center">
            <div class="col-8">
                <h1>Body Mass Index (BMI) Calculator</h1>
                <img src="https://cdn.pixabay.com/photo/2016/11/24/13/01/white-male-1856186_1280.jpg" alt="Personal Trainer" class="trainer-image">
                <form action="bmi2.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Enter Weight (kg)</label>
                        <input type="number" name="peso" class="form-control" step="any" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Enter Height (m)</label>
                        <input type="number" name="altezza" class="form-control" step="any" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Calculate BMI</button>
                </form>

                <?php
                // PHP code for BMI calculation and result display here
                ?>

                <div id="risultato" class="mb-3"></div>
            </div>
        </div>
    </div>


    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $peso = $_POST['peso'];
        $altezza = $_POST['altezza'];

        function calcolatrice($p, $h)
        {

            $hM2 = $h * $h;

            return $bmi = $p / $hM2;
        }

        $bmi = calcolatrice($peso, $altezza);

        echo '<div id="risultato" class="mb-3">';

        if ($bmi < 16) {
            echo 'Sei anoressico';
        } else if ($bmi >= 16 && $bmi < 17) {
            echo 'Sei sottopeso';
        } else if ($bmi >= 17 && $bmi < 18.5) {
            echo 'Sei sottopeso';
        } else if ($bmi >= 18.5 && $bmi < 25) {
            echo 'Sei normopeso';
        } else if ($bmi >= 25 && $bmi < 30) {
            echo 'Sei sovrappeso';
        } else {
            echo 'Sei obeso';
        }



        echo '<br> BMI: ' . round($bmi) . '</div>';
    }

    ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>
