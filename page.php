<?php get_header(); ?>

	<div class="body-area"> 
		<div class="mid"> 
			<div class="left"> 
				<div class="post-area"> 


					<?php while(have_posts() ) : the_post();  ?>
				
				
				
					<div class="post-box-b"> 
						
							<p><?php the_content(); ?></p>
						
					</div>

				<?php endwhile; ?>

					
				
					
						
				</div>
			</div>
			<div class="right"> 
				
				
				
			</div>
		</div>
	</div>
	
    <?php get_footer(); ?>