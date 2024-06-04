<?php
// Récupération des données (par exemple depuis une base de données)
$data = [
    "labels" => ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin"],
    "datasets" => [[
        "label" => "Ventes",
        "backgroundColor" => "rgba(75,192,192,0.4)",
        "borderColor" => "rgba(75,192,192,1)",
        "data" => [65, 59, 80, 81, 56, 55]
    ]]
];

// Conversion des données en JSON pour les passer à Chart.js
$dataJson = json_encode($data);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Graphique des Ventes</title>
    <link rel="stylesheet" href="./Fonts/css/all.min.css">
    
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="./style/navBar_Header.css">

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<style>
    #active6 {
        background-color: white !important;
        &::before {
            position: absolute !important;
            content: "" !important;
            padding-right: 0 !important;
            left: 0px !important;
            width: 6px !important;
            height: 26px !important;
            background: #208dc0 !important;
            transform: scaleY(1.9) !important;
            align-items: center !important;
        }
    }

    #active6 i{
        color: #208dc0;
    }


    .align div h2 {
        padding-left: 20px;
    }

    .align div {
        width: 100%;
        margin-top: 25px;
    }
</style>
<body>
    <?php include("header.php"); ?>
    <div class="align">
    <?php include("nav.php") ?>
    <div style="width: 50%; margin: auto;">
        <canvas id="myChart"></canvas>
    </div>
    </div>


    <script>
        // Récupération des données PHP en JavaScript
        var chartData = <?php echo $dataJson; ?>;
        
        // Configuration du graphique
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line', // Type de graphique (line, bar, pie, etc.)
            data: chartData,
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>
