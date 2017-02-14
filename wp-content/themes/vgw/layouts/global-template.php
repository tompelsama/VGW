<?php
/**
 * Template Name: Global Template
 */    
get_header();
?>
		<div id="body">
			<!-- Top Section -->
			<div class="border">
				<!-- banner with image -->
				<?php if (!empty(get_field('banner_img'))): ?>
					<div class="container bg_image">
						<div class="left-banner intro"><?php echo get_field('banner_text'); ?></div>
						<div><img src="<?php echo get_field('banner_img'); ?>" class="poker"></div>
					</div>	
				<!-- banner hook for contact us -->
				<?php elseif (!empty(get_field('top-head'))): ?>
					<div class="container bg_image">
						<div class="left-banner intro"><?php echo get_field('top-head'); ?></div>
						<div><img src="<?php echo get_field('top-img'); ?>" class="poker"></div>
					</div>
				<!-- Board of Directors -->
				<?php elseif (!empty(get_field('board_of_directors'))): ?>
					<div class="container">
						<?php echo get_field('board_of_directors'); ?>
					</div>	
				<!-- banner text only -->
				<?php else: ?>
					<div class="container bg_image">
						<div class="center intro"><?php echo get_field('banner_text'); ?></div>
					</div>
				<?php endif; ?>
			</div>
			
			<!-- Mid section -->
			<?php if (!empty(get_field('mid_text'))): ?>
				<div class="border">		
					<div class="content"><?php echo get_field('mid_text'); ?></div>
				</div>
			<?php endif; ?>
			<!-- IPO Section -->
			<?php if(!empty(get_field('mid_paragraph'))): ?>
				<div class="margin spacing"><?php echo get_field('mid_paragraph'); ?></div>
			<?php endif; ?>
			<!-- Corporate Governance  -->
			<?php if(!empty(get_field('mid_without_border'))): ?>
				<div class="margin spacingbig"><?php echo get_field('mid_without_border'); ?></div>
			<?php endif; ?>
			<!-- Board of Directors -->
			<?php if(!empty(get_field('banner_vgw'))): ?>
				<div class="border">	
					<div class="vgw-dir">
						<img src="<?php echo get_field('banner_vgw'); ?>" class="opacity" />
					</div>
				</div>
			<?php endif; ?>

			<!-- Bottom Section -->
			<?php if (!empty(get_field('about_text'))): ?>
				<!-- about us section -->
				<div class="col_9"><?php echo get_field('about_text'); ?></div>
			<?php endif; ?>

				<!-- Chumba -->
			<?php if (!empty(get_field('thumb_1'))): ?>
					<div class="content"><?php echo get_field('bottom_heading'); ?></div>
				<div class="thumb-wrapper">
					<div class="grup">
						<div class="row-2">
							<img src="<?php echo get_field('thumb_1'); ?>" alt="Duskmoon Faire"/>
						</div>
						<div class="row-4"><?php echo get_field('thumb_1_text'); ?></div>
						<div class="row-2">
							<img src="<?php echo get_field('thumb_2'); ?>" alt="Nefertiti's Gold"/>
						</div>
						<div class="row-4"><?php echo get_field('thumb_2_text'); ?></div>
					</div>
					<div class="grup">
						<div class="row-2">
							<img src="<?php echo get_field('thumb_3'); ?>" alt="Gem Huntress"/>
						</div>
						<div class="row-4"><?php echo get_field('thumb_3_text'); ?></div>
						<div class="row-2">
							<img src="<?php echo get_field('thumb_4'); ?>" alt="Chilli Mama's"/>
						</div>
						<div class="row-4"><?php echo get_field('thumb_4_text'); ?></div>
					</div>
					<div class="grup">
						<div class="row-2">
							<img src="<?php echo get_field('thumb_5'); ?>" alt="Golden Wish"/>
						</div>
						<div class="row-4"><?php echo get_field('thumb_5_text'); ?></div>
						<div class="row-2">
							<img src="<?php echo get_field('thumb_6'); ?>" alt="Pearls of Fortune"/>
						</div>
						<div class="row-4"><?php echo get_field('thumb_6_text'); ?></div>
					</div>
					<div class="grup">
						<div class="row-2">
							<img src="<?php echo get_field('thumb_7'); ?>" alt="The Great Slotini"/>
						</div>
						<div class="row-4"><?php echo get_field('thumb_7_text'); ?></div>
						<div class="row-2">
							<img src="<?php echo get_field('thumb_8'); ?>" alt="Fortunes of the Fae"/>
						</div>
						<div class="row-4"><?php echo get_field('thumb_8_text'); ?></div>
					</div>
					<div class="grup">
						<div class="row-2">
							<img src="<?php echo get_field('thumb_9'); ?>" alt="Garden Princess"/>
						</div>
						<div class="row-4"><?php echo get_field('thumb_9_text'); ?></div>
						<div class="row-2">
							<img src="<?php echo get_field('thumb_10'); ?>" alt="Monster Spins"/>
						</div>
						<div class="row-4"><?php echo get_field('thumb_10_text'); ?></div>
					</div>
				</div>
			<?php endif; ?>
				
				<!-- Global Poker Section -->
			<?php if (!empty(get_field('phone_pic'))): ?>
				<div class="wrapper background">
					<div><img src="<?php echo get_field('phone_pic'); ?>" alt="ss6" class="left-banner"></div>
					<div class="right-banner intro"><?php echo get_field('phone_text'); ?></div>
				</div>
			<?php endif; ?>

			 	<!-- Board of Directories -->
			<?php if (!empty(get_field('banner_vgw'))): ?>
				<?php $loop = new WP_Query( array( 'post_type' => 'directors', 'posts_per_page' => 10 ) ); while ( $loop->have_posts() ) : $loop->the_post(); ?>
			 			<div class="border-directors">
							<div class="container director">
								<h4><?php echo get_field('heading'); ?></h4>
								<img src="<?php echo get_field('photo');  ?>" />
								<div class="wrapper-text"><?php echo get_field('content'); ?></div>
								<div class="entry-content">
		        					<?php the_content(); ?>
		    					</div>
		    				</div>
						</div>							
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</div>


			<!-- Contact Us -->
			<?php if(!empty(get_field('top-head'))): ?>
				<div class="contact-section">
				<div class="wrapper">
					<div class="contact-section-left">
						<div class="row-6">
							<div class="row-3">
								<h4 class="location"><i class="fa fa-map-marker fa-lg" aria-hidden="true">
									</i>&nbsp; Perth
								</h4>
								<p>VGW @ Flux
								Level 8, 191 St Georges Tce
								Perth
								WA 6000
								Australia</p>
							</div>
							<div class="row-3">
								<h4 class="location"><i class="fa fa-map-marker fa-lg" aria-hidden="true">
								</i>&nbsp; Sydney
								</h4>
								<p>Level 1, 16 O'Connell St
								Sydney
								NSW 2000
								Australia</p>
							</div>
						</div>
						<div class="row-6">
							<div class="row-3">
								<h4 class="location"><i class="fa fa-map-marker fa-lg" aria-hidden="true">
									</i>&nbsp; Manila
								</h4>
								<p>VGW @ A Space
									110 Legapazi Street
									Makati, Manila 1229
									Philippines</p>
							</div>
							<div class="row-3">
								<h4 class="location"><i class="fa fa-map-marker fa-lg" aria-hidden="true">
								</i>&nbsp; Malta
								</h4>
								<p>Suite 3, 1st Floor
								Valetta Buildings
								South Street
								Valetta, Malta VLT 1103</p>
							</div>
						</div>	
					</div>

					<div class="contact-section-right">
						<?php echo do_shortcode( '[contact-form-7 id="212" title="Contact form 1"]' ); ?>
					</div>
				</div>
				</div>
			<?php endif; ?>
<?php 
get_footer(); 
?>