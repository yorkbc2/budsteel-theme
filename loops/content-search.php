<?php
/*
The Search Loop
===============
*/
?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
    <article id="post_<?php the_ID()?>" <?php post_class()?>>
        <header>
            <h4><a href="<?php the_permalink(); ?>"><?php the_title()?></a></h4>
        </header>
      <p><?php the_excerpt(); ?></p>
    </article>
<?php endwhile; else: ?>
    <div class="alert alert-warning">
        <i class="fa fa-exclamation-triangle"></i> <?php _e('Sorry, your search yielded no results.', 'brainworks'); ?>
    </div>
<?php endif; ?>
