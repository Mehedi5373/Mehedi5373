<div class="notice-board"> 
					
					
					<div class="notice-box"> 
					<h2>Notice Board</h2>
					<hr />
						<ul>
							 <?php 

							 $notic = new wp_Query([

							 	'post_type'  => 'notic',


							 ]);


							 while($notic -> have_posts() ) : $notic -> the_post(); ?>
							<li><i class="fa fa-chevron-right"></i>
								<a href="#"><?php the_title(); ?></a></li>

								<?php endwhile; ?>

						</ul>
					</div>
				</div>