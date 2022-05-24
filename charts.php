<?php
	/* Database connection settings */
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'nelson';
	$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);

	$data1 = '';
	$data2 = '';


	//query to get data from the table
	$sql = "SELECT * FROM `datasets` ";
    $result = mysqli_query($mysqli, $sql);

	//loop through the returned data
	while ($row = mysqli_fetch_array($result)) {

		$data1 = $data1 . '"'. $row['expenses'].'",';
		$data2 = $data2 . '"'. $row['income'] .'",';
		
	}

	$data1 = trim($data1,",");
	$data2 = trim($data2,",");
?>
<?php
// include('configs/app.php');

include_once('./controlers/logincontroller.php');

$authenticated2 = new logincontroller;
$authenticated2->isadm();
// $authenticated->adminaccess();

?>

<!DOCTYPE html>
<html>
	<head>
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link href="./styles/style2.css" rel="stylesheet">   
		<title> data visualization</title>

		<style type="text/css">			
			.container2 {
				width: 80vw;
				color: #E8E9EB;
				background: #222;
				border: #555652 1px solid;
				padding: 10px;
			}
		</style>

	</head>
	<body class="body">
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src = "./images/logo.png">
                    <h1>name</h1>
                    
                </div>
            </div>
            <div class="close_btn">

            </div>
            <div class="side_bar">
			<a href="index.php"><span class="material-icons">dashboard</span>
                    <h2>dashboard</h2>
                </a><br><br>
                
                </a><br><br>
                <a href="viewinventory.php" ><span class="material-icons">location_on</span>
                    <h2>inventory</h2>
                </a><br><br>
                <a href="viewbookings.php" ><span class="material-icons">collections</span>
                    <h2>bookings</h2>
                </a><br><br>
                <a href="login.php"><span class="material-icons">login</span>
                    <h2>login</h2>
                </a>   
                <a href="charts.php"  class="active"><span class="material-icons">show_chart</span>
                    <h2>analytics</h2>
                </a>
                <a href="users.php"  ><span class="material-icons">person</span>
                    <h2>users</h2>
                </a>
                <a href="registration.php"   ><span class="material-icons">group</span>
                    <h2> add users</h2>
                </a>

                

                <span class="material-icons">login</span>
                    <form action="login.php" method="POST">
                        <button type="submit" name="logout_btn">logout</button> 
                    </form>
                </a>               
            </div>
        </aside>
		<main>

 
	    <div class="container2">	
	    <h1>expenses vs income</h1>       
			<canvas id="chart" style="width: 10vw; height: 10vh; background: #222; border: 1px solid #555652; margin-top: 10px;"></canvas>

			<script>
				var ctx = document.getElementById("chart").getContext('2d');
    			var myChart = new Chart(ctx, {
        		type: 'bar',
		        data: {
		            labels: [1,2,3,4,5,6,7,8,9],
		            datasets: 
		            [{
		                label: 'expenses',
		                data: [<?php echo $data1; ?>],
		                backgroundColor: 'transparent',
		                borderColor:'rgba(255,99,132)',
		                borderWidth: 3
		            },

		            {
		            	label: 'income',
		                data: [<?php echo $data2; ?>],
		                backgroundColor: 'transparent',
		                borderColor:'rgba(0,255,255)',
		                borderWidth: 3	
		            }]
		        },
		     
		        options: {
		            scales: {scales:{yAxes: [{beginAtZero: false}], xAxes: [{autoskip: true, maxTicketsLimit: 20}]}},
		            tooltips:{mode: 'index'},
		            legend:{display: true, position: 'top', labels: {fontColor: 'rgb(255,255,255)', fontSize: 16}}
		        }
		    });
			</script>
	    </div>
	    </main>
	</body>
</html>