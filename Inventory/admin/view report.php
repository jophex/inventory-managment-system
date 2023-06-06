<?php
session_start();

include '../models/admin_security.php'; 



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/adminlog.css">
    <title>SYSTEM REPORT</title>
    
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
		}
		h1 {
			text-align: center;
			margin-top: 50px;
		}
		table {
			margin: 50px auto;
			border-collapse: collapse;
			width: 80%;
			background-color: #fff;
			box-shadow: 0 0 20px rgba(0,0,0,0.15);
		}
		th, td {
			padding: 10px;
			border: 1px solid #ddd;
			text-align: center;
		}
		th {
			background-color: #f2f2f2;
			color: #333;
			font-weight: bold;
			text-align: left;
		}
		tr:nth-child(even) {
			background-color: #f9f9f9;
		}
		.summary {
			margin: 50px auto;
			text-align: center;
		}
		.summary h2 {
			margin-top: 0;
		}
		.summary p {
			font-size: 20px;
			margin-bottom: 30px;
		}
		.summary ul {
			list-style: none;
			padding: 0;
			margin: 0;
			display: flex;
			justify-content: center;
			flex-wrap: wrap;
		}
		.summary li {
			margin: 10px;
			background-color: #fff;
			box-shadow: 0 0 10px rgba(0,0,0,0.1);
			border-radius: 5px;
			padding: 20px;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			width: 200px;
		}
		.summary li span {
			font-size: 40px;
			font-weight: bold;
			margin-bottom: 10px;
			color: #333;
		}
		.summary li p {
			margin: 0;
			font-size: 16px;
			color: #666;
		}
	</style>
</head>
<?php
    ($conn = mysqli_connect(
        'localhost',
        'root',
        '',
        'ntstore'
    )) or die('no connection');

    $select = 'SELECT COUNT(id) FROM add_device';
    $query = mysqli_query($conn, $select);
    if (mysqli_num_rows($query) > 0) {
        while ($laptopDv = mysqli_fetch_assoc($query)) {
            $devices = $laptopDv['COUNT(id)'];
        }
    }

    $select = "SELECT COUNT(name) FROM users";
    $query = mysqli_query($conn, $select);
    if (mysqli_num_rows($query) > 0) {
    while ($laptopDv = mysqli_fetch_assoc($query)) {
        $users = $laptopDv['COUNT(name)'];
        }
    }

    $select = "SELECT COUNT(id) FROM Requests";
    $query = mysqli_query($conn, $select);
    if (mysqli_num_rows($query) > 0) {
    while ($laptopDv = mysqli_fetch_assoc($query)) {
        $notify = $laptopDv['COUNT(id)'];

    }
    }

	$select = "SELECT COUNT(user_status) FROM `requests` WHERE user_status = 'Accepted'";
    $query = mysqli_query($conn, $select);
    if (mysqli_num_rows($query) > 0) {
    while ($accepted = mysqli_fetch_assoc($query)) {
        $accept = $accepted['COUNT(user_status)'];

    }
    }

	$select = "SELECT COUNT(user_status) FROM `requests` WHERE user_status = 'Rejected'";
    $query = mysqli_query($conn, $select);
    if (mysqli_num_rows($query) > 0) {
    while ($rejected = mysqli_fetch_assoc($query)) {
        $reject = $rejected['COUNT(user_status)'];

    }
    }

	$select = "SELECT COUNT(returns) FROM `requests` WHERE returns = 'Returned'";
    $query = mysqli_query($conn, $select);
    if (mysqli_num_rows($query) > 0) {
    while ($return = mysqli_fetch_assoc($query)) {
        $returned = $return['COUNT(returns)'];

    }
    }

    
?>


<body>
	<h1>Summary Page</h1>

	<table>
		<thead>
			<tr>
				<th>Total Users</th>
				<th>Total Devices</th>
				<th>Total Requested Devices</th>
                <th>Accepted Devices</th>
				<th>Rejected Devices</th>
				<th>Returned</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?php print $users;?></td>
				<td><?php print $devices; ?></td>
				<td><?php print $notify?></td>
                <td><?php print $accept?></td>
				<td><?php print $reject?></td>
				<td><?php print $returned?></td>
			</tr>
		</tbody>
	</table>


	<div class="summary">
		<h2>Summary</h2>
		<p>Here's a summary of the key metrics for your project:</p>
		<ul>
			<li>
				<span><?php print $users;?></span>
				<p>Total Users</p>
			</li>
			<li>
				<span><?php print $devices; ?></span>
				<p>Total Devices</p>
			</li>
            <li>
				<span><?php print $notify?></span>
				<p>Total Requested Devices</p>
			</li>
			<li>
				<span><?php print $accept?></span>
				<p>Accepted Devices</p>
			</li>
			<li>
				<span><?php print $reject?></span>
				<p>Rejected Devices</p>
    		</li>

			<li>
				<span><?php print $returned?></span>
				<p>Returned Devices</p>
    		</li>



</body>
</html>