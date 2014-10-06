<!-- Posting the results -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

 <article class="post">
    <div class="postHeader">
         <!-- Display the Title as a link to the Post’s permalink. This should probably be h2 -->
         <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
         <!-- Display the date (Month day, year) and a link to other posts by this posts author. -->
         <h3>Posted by <?php the_author_posts_link() ?> at <?php the_time("g:iA");?> on <?php the_time("l, jS, F Y");?> </h3>
         <p class="postmetadata">Genre: <?php the_category(‘, ‘); ?></p>
    </div>
    <div class="postContent">
        <p><?php the_content(); ?></p>
    </div>
    <div class = "commentZone">
        <?php if ( comments_open() ) {
            comments_template();
        }?>
    </div>

 </article>

<!-- If no results... FUTURE ME: make this a search thingy will ya? -->
 <?php endwhile; else: ?>
    <?php get_template_part( 'loop' ); ?>
 <?php endif; ?>
