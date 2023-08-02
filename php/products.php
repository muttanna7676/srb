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

	<title>Adminpage</title>
</head>
<body>


	<!-- SIDEBAR -->
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
	
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Orders</h1>
					<ul class="breadcrumb">
						<li>
							<a href="">Orders</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="../php/admin.php">Home</a>
						</li>
					</ul>
				</div>
				
			</div>


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
								<th>img: </th>
                                <th>price:</th>
								<th>details:</th>
                                
							</tr>
						</thead>
						<tbody>
                            <?php 
                            $sql="select * from `products`";
                            $result=mysqli_query($con,$sql);
                            if($result)
                            {
                                while($row=mysqli_fetch_assoc($result)){
                                    // $id=$row['id'];
                                    // $name=$row['name'];
                                    // $img=$row['img'];
                                    // $price=$row['price'];
                                    // $details=$row['details'];
                            ?>
                                   <tr>
                                    <th scope="row"><?php echo $row['id'] ?></th>
                                    <td><?php echo $row['name'] ?></td>
                                    <td><img src="./upload/<?php echo $row['img'] ?>" alt=""></td>
                                    <td><?php echo $row['price'] ?></td>
                                    <td><?php echo $row['details'] ?></td>
									<td>
									<button><a href="pyaorderdelete.php?deleteid='.$id.'">Delete</a></button>
									</td>
                                    </tr>
									<?php
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