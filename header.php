<!doctype html>
<html lang="en">
  <head>
    <title>CV</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
	<?php 
		require "admin/config.php";
		$result = mysqli_query($conn, "SELECT * from personal WHERE personal_id = 1");
		while($row = mysqli_fetch_assoc($result)) {
	?>

  <body>
  <div id="page">	
		<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image:url(image/4.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<div class="display-t js-fullheight">
							<div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
								<div class="profile-thumb" style="background: url(image/5.jpg);"></div>
								<h1><span><?php echo $row['fullname']; ?></span></h1>
								<h3><span><?php echo $row['job']; ?></span></h3>
								<p>
									<ul class="fh5co-social-icons">
										<li><a href="<?php echo $row['twitter_link']; ?>"><i class="fab fa-twitter"></i></a></li>
										<li><a href="<?php echo $row['facebook_link']; ?>"><i class="fab fa-facebook-f"></i></i></a></li>
										<li><a href="<?php echo $row['youtube_link']; ?>"><i class="fab fa-youtube"></i></a></li>
										<li><a href="<?php echo $row['github_link']; ?>"><i class="fab fa-github"></i></a></li>
									</ul>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<?php } ?>