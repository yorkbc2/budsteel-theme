<?php
/*
The Single Posts Loop
=====================
*/
?> 

<?php if(have_posts()): while(have_posts()): the_post(); ?>
    <article id="post_<?php the_ID()?>" <?php post_class()?>>
        <header>
            <h1 class="single-title"><?php the_title()?></h1>
            <div class="sp-xs-1 sp-sm-1 sp-md-1 sp-lg-1 sp-xl-1"></div>
            <?php /*
            <h5>
                <span class="text-muted author"><?php _e('By', 'brainworks'); echo " "; the_author() ?></span>
                <time  class="text-muted" datetime="<?php the_time('d-m-Y')?>"><?php echo get_option( 'date_format' ) ?></time>
            </h5>
            <p class="text-muted" style="margin-bottom: 30px;">
                <i class="fa fa-folder-open-o"></i>&nbsp; <?php _e('Filed under', 'brainworks'); ?>: <?php the_category(', ') ?><br/>
                <i class="fa fa-comment-o"></i>&nbsp; <?php _e('Comments', 'brainworks'); ?>: <?php comments_popup_link(__('None', 'brainworks'), '1', '%'); ?>
            </p>
            */ ?>
        </header>
        <section>
            <?php the_post_thumbnail('full'); ?>
            <?php the_content()?>
            <?php wp_link_pages(); ?>
        </section>
    </article>
    <div class="sp-xs-2 sp-sm-2 sp-md-2 sp-lg-2 sp-xl-2"></div>
    <hr>
    <div class="sp-xs-2 sp-sm-2 sp-md-2 sp-lg-2 sp-xl-2"></div>
    <?php if(function_exists('the_ratings')) { the_ratings(); } ?>
    <?php comments_template('/loops/comments.php'); ?>
    <div class="sp-xs-2 sp-sm-2 sp-md-2 sp-lg-2 sp-xl-2"></div>
<?php endwhile; ?>

<?php else : ?>
	<?php get_template_part( 'loops/content', 'none' ); ?>
<?php endif; ?>