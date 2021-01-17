<div id="fh5co-skills" class="animate-box">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<h2>Skills</h2>
					</div>
				</div>
				<?php 
					require "admin/config.php";
					$result = mysqli_query($conn, "SELECT * from skill");
					$row = mysqli_fetch_all($result);
					foreach($row as $r) {
				?>
				<div class="row">
					<div class="col-md-12">
						<div class="progress-wrap">
							<h3><span class="name-left"><?php echo $r[1]; ?></span><span class="value-right"><?php echo $r[2]; ?>%</span></h3>
							<div class="progress">
							  <div class="progress-bar progress-bar-1 progress-bar-striped active" role="progressbar"
							  aria-valuenow="<?php echo $r[2]; ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $r[2]; ?>%">
							  </div>
							</div>
						</div>
					</div>
					<!-- <div class="col-md-6">
						<div class="progress-wrap">
							<h3><span class="name-left">Design</span><span class="value-right">100%</span></h3>
							<div class="progress">
							  <div class="progress-bar progress-bar-5 progress-bar-striped active" role="progressbar"
							  aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%">
							  </div>
							</div>
						</div>
					</div> -->
				</div>
				<?php } ?>
			</div>
		</div>