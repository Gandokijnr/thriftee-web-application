<?php
include_once 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<?php 
  include 'connect.php';
  $query = $connect->query("SELECT AMOUNT FROM thriftee_contribution WHERE EMAIL = '$_SESSION[USER_ID]'");

  foreach($query as $data)
  {
    $contribute[] = $data['AMOUNT'];
  }

?>


<?php 
  include 'connect.php';
  $query = $connect->query("SELECT AMOUNT FROM thriftee_personal WHERE EMAIL = '$_SESSION[USER_ID]'");

  foreach($query as $data)
  {
    $personl_savings[] = $data['AMOUNT'];
  }

?>


<?php 
  include 'connect.php';
  $query = $connect->query("SELECT AMOUNT FROM thrift_loan WHERE EMAIL = '$_SESSION[USER_ID]'");

  foreach($query as $data)
  {
    $debt[] = $data['AMOUNT'];
  }

?>


<div style="width: 50%;">
  <canvas id="myChart"></canvas>
</div>
 

    <script>
  const group = <?php echo json_encode($contribute) ?>;
  const personal = <?php echo json_encode($personl_savings) ?>;
  const loan = <?php echo json_encode($debt) ?>;
  const labels = [
   'PERSONAL SAVINGS',
   'CONTRIBUTION',
   'DEBT',
  ];

  const data = {
    labels: labels,
    datasets: [{
      label: 'ANALYTICS OF YOUR TRANSACTIONS',
      backgroundColor: ['green','yellow','red'],
      borderColor: ['green','yellow','red'],
      data: [group, personal,loan]
    }]
  };

  const config = {
    type: 'bar',
    data: data,
    options: {}
  };

  const myChart = new Chart(
    document.getElementById('myChart'),
    config
  );
</script>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</body>
</html>