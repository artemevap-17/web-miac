<?php get_header(); ?>
    <div class="container">
        <?php
        printf(esc_html__('Результаты поиска по фразе: %s', 'miac'), '<span>'. get_search_query() . '</span>');
        ?>
    </div>
<?php get_footer(); ?>