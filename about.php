<?php 
	require "admin/config.php";
	$sql = "SELECT * from personal WHERE personal_id = 1";
	$result = mysqli_query($conn, $sql);
	while($row = mysqli_fetch_assoc($result)) {
?>

<div id="fh5co-about" class="animate-box">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<h2>About Me</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<ul class="info">
							<li><span class="first-block">Full Name:</span><span class="second-block"><?php echo $row['fullname']; ?></span></li>
							<li><span class="first-block">Phone:</span><span class="second-block"><?php echo $row['phone']; ?></span></li>
							<li><span class="first-block">Email:</span><span class="second-block"><?php echo $row['email']; ?></span></li>
							<li><span class="first-block">Website:</span><span class="second-block"><?php echo $row['website']; ?></span></li>
							<li><span class="first-block">Address:</span><span class="second-block"><?php echo $row['address']; ?></span></li>
						</ul>
					</div>
					<div class="col-md-8">
						<h2>Hello There!</h2>
						<p><?php echo $row['introduce']; ?><p>
							<ul class="fh5co-social-icons">
								<li><a href="<?php echo $row['twitter_link']; ?>"><i class="fab fa-twitter"></i></a></li>
								<li><a href="<?php echo $row['facebook_link']; ?>"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="<?php echo $row['youtube_link']; ?>"><i class="fab fa-youtube"></i></a></li>
								<li><a href="<?php echo $row['github_link']; ?>"><i class="fab fa-github"></i></a></li>
							</ul>
						</p>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>