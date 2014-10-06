<!-- Posting the results -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

 <article class="post">
    <div class="postHeader">
         <!-- Display the Title as a link to the Post’s permalink. This should probably be h2 -->
         <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
         <h3>Posted by <?php the_author_posts_link() ?> at <?php the_time("g:iA");?> on <?php the_time("l, jS, F Y");?> </h3>
    </div>
    <div class="postExcerpt">
        <p><?php the_excerpt(); ?></p>
    </div>

     <div class="postCommentsPopup">
        <p><?php comments_popup_link( 'No Comments »', '1 Comment »', '% Comments »' );?></p>
     </div>
 </article>

<!-- If no results... FUTURE ME: make this a search thingy will ya? -->
 <?php endwhile; else: ?>
    <?php get_template_part( 'nopost' ); ?>
 <?php endif; ?>
