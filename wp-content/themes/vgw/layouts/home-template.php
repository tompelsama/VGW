<?php
/**
 * Template Name: Home Template
 */    
get_header();
?>
		<div id="body">

			<div class="border">
				<div class="banner-home bg_image">
					<div class="left-banner intro"><?php echo get_field('top_text_1'); ?></div>
					<div class="img-home"><img src="<?php echo get_field('top_img_1'); ?>" alt="home1" ></div>
				</div>
			</div>

			<div class="border">
				<div class="container">
					<div><?php echo get_field('banner_text'); ?></div>
				</div>	
			</div>
			<div class="wrapper background">
				<div class="col-4 left">
					<div class="icon">
						<img src="<?php echo get_field('icon_1'); ?>" alt="Global Company">
					</div>
					<div class="subhead"><?php echo get_field('icon_1_text'); ?></div>
				</div>

				<div class="col-4 mid">
					<div class="icon">
						<img src="<?php echo get_field('icon_2'); ?>" alt="Cross Platform Games">
					</div>
					<div><?php echo get_field('icon_2_text'); ?></div>
				</div>

				<div class="col-4">
					<div class="icon">
						<img src="<?php echo get_field('icon_3'); ?>" alt="Innovative Technology">
					</div>
					<div><?php echo get_field('icon_3_text'); ?></div>
				</div>
			</div>
			<div class="border"></div>
			<div><?php echo get_field('sub_banner_text'); ?></div>
			<div class="wrapper">
				<div class="col-3 grid-before">
					<img src="<?php echo get_field('pic1'); ?>" class="thumbnail"/>
					<div><?php echo get_field('pic1_text'); ?></div>
				</div>
				<div class="col-3 grid">
					<img src="<?php echo get_field('pic2'); ?>" class="thumbnail" />
					<div><?php echo get_field('pic2_text'); ?></div>
				</div>
				<div class="col-3 grid">	
					<img src="<?php echo get_field('pic3'); ?>" class="thumbnail" />
					<div><?php echo get_field('pic3_text'); ?></div>
				</div>
				<div class="col-3 grid">
					<img src="<?php echo get_field('pic4'); ?>" class="thumbnail" />
					<div><?php echo get_field('pic4_text'); ?></div>
				</div>
			</div>
			<div class="btn">
				<form action="<?php echo get_permalink(get_page_by_title('Chumba Casino')); ?>">
				<input type="submit" value="FIND OUT MORE">
				</form>
			</div>
		</div>
	</div>
<?php 
get_footer(); 
?>