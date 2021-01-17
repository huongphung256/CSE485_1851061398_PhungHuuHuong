<div id="fh5co-blog">
			<div class="container">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<h2>Post on Medium</h2>
						<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
					</div>
				</div>
				<?php 
					require "admin/config.php";
					$result = mysqli_query($conn, "SELECT * from blog");
					$row = mysqli_fetch_all($result);
					foreach($row as $r) {
				?>
				<div class="row">
					<div class="col-md-6 text-center col-padding animate-box">
						<div class="fh5co-blog animate-box">
							<a href="#" class="blog-bg" style="background-image: url(<?php echo $r[1]; ?>);"></a>
							<div class="blog-text">
								<span class="posted_on"><?php echo $r[4]; ?></span>
								<h3><a href="#"><?php echo $r[2]; ?></a></h3>
								<p><?php echo $r[3]; ?></p>
								<ul class="stuff">
									<li><i class="fas fa-heart"></i><?php echo $r[5]; ?></li>
									<li><i class="fas fa-eye"></i><?php echo $r[6]; ?></li>
									<li><a href="#">Read More<i class="icon-arrow-right22"></i></a></li>
								</ul>
							</div> 
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>