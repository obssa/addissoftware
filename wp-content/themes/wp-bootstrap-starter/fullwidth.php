<?php
/**
* Template Name: Full Width
 */

get_header(); ?>

<!-- template container-->	
<div class="container">
	<div class="row">
		<div class="col">
<?php 
//checking and adding  header image field
if( get_field('header_image') ): ?>
    <img src="<?php the_field('header_image'); ?>" />
<?php endif; ?>
</div>
<div class="col">
	<!-- adding price  custom fields to the page -->
			<?php the_field('price');?>
			<div class="row">
				<div class="col bg-secondary">
		<!-- adding facts  custom fields to the page -->
			<?php the_field('facts');?>
		</div>
		<div class="col bg-info offset-1">
		<!-- adding payment plans  custom fields to the page -->
			<?php the_field('payment_plans')?>
		</div>
		</div>
			</div>
</div>
</div>
		
<?php
get_footer();
