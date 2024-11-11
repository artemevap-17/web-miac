<?php get_header(); ?>
<main>
    <div class="news-block container">
    <h4><?php echo 'Результат поиска: ' . '<span>' . get_search_query() . '</span>'; ?></h4>
        <div class="news-cards">
            <?php
            if (have_posts()) :
            while (have_posts()) : the_post();
            ?>
            <a class="card" href="<?php echo get_permalink() ?>">
                <div class="card-body">
                    <h4 class="card-title"><?php the_title() ?></h4>
                    <?php the_excerpt() ?>
                    <p class="card-text"><?php the_time('j F Y') ?></p>
                </div>
            </a>
            <?php endwhile; ?>
            <?php
            else :
            echo "Извините по Вашему запросу ничего не найдено";
            endif;
            ?>
        </div> 
    </div>
</main>
<?php get_footer(); ?>