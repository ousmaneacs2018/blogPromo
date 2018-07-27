<div class="d_flexcenter h100ps">
    <ul class="lh30px  ">
        <li id="search">
            <div class="centerligne"><?php include(TEMPLATEPATH . '/searchform.php'); ?></div>
        </li>
        <li>
            <a class="centerligne fs20 segoe" href="index.php">ACCUEIL</a>
        </li>
        <li >
            <p class="centerligne fs20 segoe"><img class="h2vh" src="./wp-content\themes\creationTheme\img/iconeli.svg">
            ARTICLES RECENTS
            </p>
        </li>
        <li >
            <p class="centerligne fs20 segoe"><img class="h2vh" src="./wp-content\themes\creationTheme\img/iconeli.svg">CATEGORIES</p>
            <ul class="centerligne clrred fs15 time "> 
                <li class="centerligne">
                    <?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?> 
                </li>
            </ul> 
        </li>
        <li class="centerligne flex_column segoe">
            <p class="centerligne fs20">
            <img class="h2vh" src="./wp-content\themes\creationTheme\img/iconeli.svg">ARCHIVES</p>   <ul class="centerligne clrred time fs15"> <li > <?php wp_get_archives('type=monthly'); ?>  </li> </ul>

        </li>
        <li class="centerligne flex_column segoe">
            <h2 class="centerligne fs20"><img class="h2vh" src="./wp-content\themes\creationTheme\img/iconeli.svg">INFOS META</h2>   
            <ul class="fs15 time centerligne clrred flex_column">
                <li class="centerligne fs15"></li> 
                <li class="centerligne fs15"><a href="http://wordpress-fr.net/" title="Communauté française de WordPress et WPmu.">WORDPRESS FRANCOPHONE</a></li> <?php wp_meta(); ?>   
            </ul>
        </li>
        <li><p class="centerligne fs20 segoe"><img class="h2vh" src="./wp-content\themes\creationTheme\img/iconeli.svg">Abonnez-vous au blog !</p>   
            <ul class="fs15 time centerligne clrred flex_column">
                <li class="centerligne fs15"><a href="<?php bloginfo('rss2_url'); ?>" title="Flux RSS des articles">Flux RSS des articles</a></li> 
                <li class="centerligne fs15"><a href="<?php bloginfo('comments_rss2_url'); ?>" title="Flux RSS des commentaires">Flux RSS des commentaires</a></li>
            </ul> 
        </li>       
        <!--<li class="clryellowcenterligne segoe"id="calendar"><h2>Calendrier</h2>   <?php get_calendar(); ?>   </li>-->
    </ul>
</div>
