<?php if (!(is_home() || is_front_page())) { ?>
<div class="row subpage pebble1">
        <div>
		<?php 
		
			the_content();
		?>
		<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
	</div>
</div>
<div class="row contact">
	<div>
		<div class="content">
			<div class="clearfix">
				<div class="centerfloat">
					<a href="/kontakt" title="Kontaktujte nás" class="button blue"><span>Kontaktujte nás</span></a>
				</div>
			</div>

			<p class="action"><a href="mailto:oz@provident.cz" title="oz@provident.cz">oz@provident.cz</a> <span>844 744 644</span></p>
		</div>
	</div>
</div>
<div class="breadcrumb clearfix">
	<ul>
	<?php simple_breadcrumb(); ?> 
	</ul>
</div>
<?php } ?>