<div class="dflex w100vh flex_column" id="content"> 

    <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?> 

    <div class="post"> 

        <p><a class="d_flexcenter clrred"href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?>  </a></p> 
        <div class="dflex flex_end"> Auteur: <?php the_author() ?> </div><br>
        <div class="dflex flex_end"> Publié le : <?php the_time('j F Y H:m:s') ?> </div><br>
        <div class="post_content "> <?php the_content(); ?></div> 
    </div> 
    <br>
    
    <?php the_title(); ?>  
    <p class="postmetadata clryellow3">   
        <?php the_time('j F Y') ?> par <?php the_author() ?> 
        | Cat&eacute;gorie: <?php the_category(', ') ?> 
        | <?php comments_popup_link('Pas de commentaires', '1 Commentaire', '% Commentaires'); ?> 
        <?php edit_post_link('Editer', ' &#124; ', ''); ?>
        <br>
        <div class="trait"></div><br>
    </p>

    <?php endwhile; ?> <?php endif; ?> 
</div>