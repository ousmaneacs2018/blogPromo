<?php get_header(); ?> <!-- ouvrir header,php --> 
<section class="dflex h70vh">

    <div class="sideBar h100ps bgblack w30ps">
        <?php get_sidebar(); ?>
        
        <form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
            <div> 
                <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" /> 
                <input type="submit" id="searchsubmit" value="Chercher" /> 
            </div> 
        </form>

    </div>

    <div class="blog d_flexcenter w70ps">
        <div class="dflex w50vh flex_column" id="content"> 

            <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?> 

        <div class="post"> 

            <h2><a class="d_flexcenter"href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2> 

            <div class="post_content bgred"> <?php the_content(); ?></div> 
        </div> 

            <?php the_title(); ?>  <p class="postmetadata">   <?php the_time('j F Y') ?> par <?php the_author() ?> | Cat&eacute;gorie: <?php the_category(', ') ?> | <?php comments_popup_link('Pas de commentaires', '1 Commentaire', '% Commentaires'); ?> <?php edit_post_link('Editer', ' &#124; ', ''); ?>   </p>

            <?php endwhile; ?> <?php endif; ?> 

        </div>

    </div>

</section>

</body> 

</html>
