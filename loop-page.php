<!-- Posting the results -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

 <article class="post">
    <div class="postHeader">
         <!-- Display the Title as a link to the Post’s permalink. This should probably be h2 -->
         <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
    </div>
    <div class="postContent">
        <p><?php the_content(); ?></p>
    </div>
 </article>

<!-- If no results... FUTURE ME: make this a search thingy will ya? -->
 <?php endwhile; else: ?>
    <?php get_template_part( 'nopost' ); ?>
 <?php endif; ?>
