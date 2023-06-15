<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

//Fetch data from MySQL database
$sql = "SELECT id, FirstName FROM tbluser ";
$result = $dbh->query($sql); 

//create a json object with data
foreach($result as $row){
   
        $id[] = $row['id'];
        $FirstName[] = $row['FirstName'];
      
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bar Chart || Automated Birth & Death online Registration System </title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
</head>
<body>
    <style>
        canvas {

            padding-left: 0;
            padding-right: 0;
            margin-left: auto;
            margin-right: auto;
            display: block;
            width: 700px;
            height: 400px;

        }

    </style>

<div class="col-lg-12 mg-b-30"><canvas id="myChart" ></canvas></div>

   

    <script>
        const labels = <?php echo json_encode($FirstName) ?>;
        const data = {
            labels: labels,
            datasets: [{
                label: 'Birth & Death Analytics',
                data: <?php echo json_encode($id) ?>,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.6)',
                    'rgba(255, 159, 64, 0.6)',
                    'rgba(255, 205, 86, 0.6)',
                    'rgba(75, 192, 192, 0.6)',
                    'rgba(54, 162, 235, 0.6)',
                    'rgba(153, 102, 255, 0.6)',
                    'rgba(201, 203, 207, 0.6)'
                ],
                borderColor: [
                    'rgb(255, 99, 132)',
                    'rgb(255, 159, 64)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(54, 162, 235)',
                    'rgb(153, 102, 255)',
                    'rgb(201, 203, 207)'
                ],
                borderWidth: 1
            }]
        };

        const config = {
            type: 'bar',
            data: data,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            },
        };

        var myChart = new Chart(document.getElementById('myChart'),
        config
        );

   
    </script> 
 
    
</body>
</html>