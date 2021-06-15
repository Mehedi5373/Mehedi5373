<?php get_header(); ?>
	
	<div class="slider"> 

         <?php 
        	$silder = new wp_Query([
        		'post_type'   =>   'slider',

        	]);
          while($silder -> have_posts() ) : $silder -> the_post(); ?>
		<div class="s-img" style="background-image:url(<?php echo wp_get_attachment_url(get_post_thumbnail_ID($post -> ID)); ?>)"></div>
	      <?php endwhile; ?>
		
	</div>
	<div class="services"> 
		<div class="mid"> 
			<h2>Our Services</h2>
			<p>See all the services of our own</p>
			
			<div class="services-area"> 

				<?php 
				$service = new wp_Query([
					'post_type'   => 'service',
					'posts_per_page'  => 2,
					'order'     => 'DESC'


				]);

				while( $service -> have_posts() ) : $service -> the_post(); ?>
			
				<div class="services-box"> 
					<?php the_post_thumbnail(); ?>
					<h2><?php the_title(); ?></h2>
					<p><?php the_content(); ?></p>
				</div>
			<?php endwhile; ?>

				
			</div>
		</div>
	</div>
	<div class="body-area"> 
		<div class="mid"> 
			<div class="left"> 
				<div class="post-area"> 
				<h2>Recent Post </h2>
				<hr />


                     <?php

                     $postt = new wp_Query([
                     	'post_type'   => 'post'

                     ]);


                     while( $postt -> have_posts() ) : $postt -> the_post(); ?>
					<div class="post-box"> 
						<div class="post-img"><img src="<?php the_post_thumbnail(); ?>" alt="" /></div>
						<div class="post-cont"> 
							<h2><?php the_title(); ?></h2>
							<p><?php echo wp_trim_words(get_the_content(), 46, true); ?></p>
							<a href="<?php the_permalink(); ?>">Read More</a>
						</div>
					</div>
				     <?php endwhile; ?>


                </div>
			</div>
			<div class="right"> 
				
				<div class="notice-board"> 
					
					
					<div class="notice-box"> 
					<h2>Notice Board</h2>
					<hr />
						<ul>
							<li><i class="fa fa-chevron-right"></i>
								<a href="#">All class start on</a></li>
							<li><i class="fa fa-chevron-right"></i>
								<a href="#">All class start on</a></li>
							<li><i class="fa fa-chevron-right"></i>
								<a href="#">All class start on</a></li>
							<li><i class="fa fa-chevron-right"></i>
								<a href="#">All class start on</a></li>
							<li><i class="fa fa-chevron-right"></i>
								<a href="#">All class start on</a></li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	
	<?php get_footer(); ?>