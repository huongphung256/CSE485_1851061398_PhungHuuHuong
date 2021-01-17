<div id="fh5co-work" class="fh5co-bg-dark">
			<div class="container">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<h2>Work</h2>
					</div>
				</div>
				<?php 
					require "admin/config.php";
					$result = mysqli_query($conn, "SELECT * from project");
					$row = mysqli_fetch_all($result);
					foreach($row as $r) {
				?>
				<div class="row">
					<div class="col-md-6 text-center col-padding animate-box">
						<a href="#" class="work" style="background-image: url(<?php echo $r[3]; ?>);">
							<div class="desc">
								<h3><?php echo $r[1]; ?></h3>
								<span><?php echo $r[2]; ?></span>
							</div>
						</a>
					</div>
					
					<!-- <div class="col-md-3 text-center col-padding animate-box">
						<a href="#" class="work" style="background-image: url(image/9.jpg);">
							<div class="desc">
								<h3>Project Name</h3>
								<span>Brading</span>
							</div>
						</a>
					</div>
					<div class="col-md-3 text-center col-padding animate-box">
						<a href="#" class="work" style="background-image: url(image/9.jpg);">
							<div class="desc">
								<h3>Project Name</h3>
								<span>Brading</span>
							</div>
						</a>
					</div>
					<div class="col-md-3 text-center col-padding animate-box">
						<a href="#" class="work" style="background-image: url(image/9.jpg);">
							<div class="desc">
								<h3>Project Name</h3>
								<span>Brading</span>
							</div>
						</a>
					</div>
					<div class="col-md-3 text-center col-padding animate-box">
						<a href="#" class="work" style="background-image: url(image/9.jpg);">
							<div class="desc">
								<h3>Project Name</h3>
								<span>Brading</span>
							</div>
						</a>
					</div>
					<div class="col-md-3 text-center col-padding animate-box">
						<a href="#" class="work" style="background-image: url(image/8.jpg);">
							<div class="desc">
								<h3>Project Name</h3>
								<span>Illustration</span>
							</div>
						</a>
					</div>
					<div class="col-md-3 text-center col-padding animate-box">
						<a href="#" class="work" style="background-image: url(image/5.jpg);">
							<div class="desc">
								<h3>Project Name</h3>
								<span>Design</span>
							</div>
						</a>
					</div>
					<div class="col-md-3 text-center col-padding animate-box">
						<a href="#" class="work" style="background-image: url(image/4.jpg);">
							<div class="desc">
								<h3>Project Name</h3>
								<span>Website</span>
							</div>
						</a>
					</div>
					<div class="col-md-3 text-center col-padding animate-box">
						<a href="#" class="work" style="background-image: url(image/8.jpg);">
							<div class="desc">
								<h3>Project Name</h3>
								<span>Illustration</span>
							</div>
						</a>
					</div>
					<div class="col-md-3 text-center col-padding animate-box">
						<a href="#" class="work" style="background-image: url(image/6.jpg);">
							<div class="desc">
								<h3>Project Name</h3>
								<span>Brading</span>
							</div>
						</a>
					</div>
					<div class="col-md-3 text-center col-padding animate-box">
						<a href="#" class="work" style="background-image: url(image/9.jpg);">
							<div class="desc">
								<h3>Project Name</h3>
								<span>Illustration</span>
							</div>
						</a>
					</div> -->
				</div>
				<?php } ?>
			</div>
		</div>