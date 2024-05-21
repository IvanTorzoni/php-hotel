<?php

$hotels = [
    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP HOTEL</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div>
        <table class="table">
            <thead>
                <?php foreach ($hotels[0] as $key => $value) { ?>
                    <?php echo "<th scope='col'>" ?>
                    <?php echo $key ?>
                    <?php echo "</th>" ?>
                <?php } ?>
            </thead>
            <tbody>

                <?php foreach ($hotels as $cur_hotel) { ?>
                    <?php echo "<tr>" ?>
                    <?php foreach ($cur_hotel as $key => $value) { ?>
                        <?php echo "<td>" ?>
                        <?php
                        if ($key === "parking") {
                            if ($value === true) {
                                $value = "Parcheggio disponibile";
                            } elseif ($value === false) {
                                $value = "Parcheggio non disponibile";
                            }
                            echo $value;
                        } elseif ($key === "distance_to_center") {
                            $value = "{$value} km";
                            echo $value;
                        } else {
                            echo $value;
                        }
                        ?>
                        <?php echo "</td>" ?>
                    <?php } ?>
                    <?php echo "</tr>" ?>
                <?php } ?>

            </tbody>
        </table>
    </div>
</body>

</html>