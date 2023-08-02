<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="../style1.css">

	<title>AdminHub</title>
</head>
<body>


	<!-- SIDEBAR -->
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="img/people.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="../php/admin.php">Home</a>
						</li>
					</ul>
				</div>
				
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
                  
						<h3>1020</h3>
						<p>New Order</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>2834</h3>
						<p>Visitors</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3>$2543</h3>
						<p>Total Sales</p>
					</span>
				</li>
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Recent Orders</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>Sl no:</th>
								<th>fName:</th>
								<th>email:</th>
                                <th>address:</th>
								<th>city name:</th>
								<th>itemname:</th>
                                <th>state:</th>
                                <th>code n:</th>
                                <th>phone no:</th>
								<th>operations:</th>
                                
							</tr>
						</thead>
						<tbody>
                            <?php 
                            $sql="select * from `pya`";
                            $result=mysqli_query($con,$sql);
                            if($result)
                            {
                                while($row=mysqli_fetch_assoc($result)){
                                    $id=$row['id'];;
                                    $fname=$row['fname'];
                                    $email=$row['email'];
                                    $address=$row['address'];
                                    $city=$row['city'];
                                    $item=$row['item'];
                                    $state=$row['state'];
                                    $code=$row['code'];
                                    $phone=$row['phone'];
                                    $state=$row['state'];
                            
                                    echo '<tr>
                                    <th scope="row">'.$id.'</th>
                                    <td>'.$fname. '</td>
                                    <td>'.$email.'</td>
                                    <td>'.$address.'</td>
                                    <td>'.$city.'</td>
                                    <td>'.$item.'</td>
                                    <td>'.$state.'</td>
                                    <td>'.$code.'</td>
                                    <td>'.$phone.'</td>
									<td>
									<button><a href="pyaorderdelete.php?deleteid='.$id.'">Delete</a></button>
									</td>
                                    </tr>';
                                }
                            } 
                            ?>

					<!---	<tr>
								<td>
									<img src="img/people.png">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status completed">Completed</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status pending">Pending</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status process">Process</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status pending">Pending</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status completed">Completed</span></td>
							</tr>


							<tr>
								<td>
									<img src="img/people.png">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td>01-10-2021</td>
								<td>01-10-2021</td>
								<td><span class="status completed">Completed</span></td>
							</tr>-->
						</tbody>
					</table>
				</div>
				
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script1.js"></script>
</body>
</html>