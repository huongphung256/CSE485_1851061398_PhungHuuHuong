<div id="fh5co-resume" class="fh5co-bg-color">
			<div class="container">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<h2>My Resume</h2>
					</div>
				</div>

	<?php 
		require "admin/config.php";
		$result = mysqli_query($conn, "SELECT * from work");
		$rows = mysqli_fetch_all($result);
	?>

				<div class="row">
					<div class="col-md-12 col-md-offset-0">
						<ul class="timeline">
							<li class="timeline-heading text-center animate-box">
								<div><h3>Work Experience</h3></div>
							</li>
							<?php foreach($rows as $r) { ?>
							<li class="animate-box timeline-unverted">
								<div class="timeline-badge"><i class="icon-suitcase"></i></div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h3 class="timeline-title"><?php echo $r[1]; ?></h3>
										<span class="company"><?php echo $r[2] . ' - ' . $r[4] . ' - ' . $r[5]; ?></span>
									</div>
									<div class="timeline-body">
										<p><?php echo $r[3]; ?></p>
									</div>
								</div>
							</li>
							
							<?php } ?>
							<li class="timeline-heading text-center animate-box">
								<div><h3>Education</h3></div>
							</li>
							<?php
								$re = mysqli_query($conn, "SELECT * from education");
								$row = mysqli_fetch_all($re);
								foreach($row as $ro) {
							?>


							<br>
							

							<li class="timeline-inverted animate-box">
								<div class="timeline-badge"><i class="icon-graduation-cap"></i></div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h3 class="timeline-title"><?php echo $ro[1]; ?></h3>
										<span class="company"><?php echo $ro[2] . ' - ' . $ro[3] . ' - ' . $ro[4]; ?></span>
									</div>
									<div class="timeline-body">
										<p><?php echo $ro[5]; ?></p>
									</div>
								</div>
							</li>
							<?php }?>
						</ul>
					</div>
				</div>
			</div>
		</div>
		