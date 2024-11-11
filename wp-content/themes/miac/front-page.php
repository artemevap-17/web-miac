<?php get_header(); ?>
<main>
    <div class="container">
        <div class="preview-block">
            <div class="slider">
                <?php echo do_shortcode('[smartslider3 slider="3"]')?>
            </div>
            <div class="info-cards">
                <a href="#" class="card btn">
                    <div class="card-body">
                        <h5>Памятка для граждан</h5>
                        <p>О гарантиях бесплатного оказания медицинской помощи</p>
                    </div>
                </a>
                <a href="#" class="card btn">
                    <div class="card-body">
                        <h5>Памятка для граждан</h5>
                        <p>О гарантиях бесплатного оказания медицинской помощи</p>
                    </div>
                </a>

                <a href="#" class="card btn">
                    <div class="card-body">
                        <h5>Памятка для граждан</h5>
                        <p>О гарантиях бесплатного оказания медицинской помощи</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="news-block">
            <div class="news-top">
                <div class="title">
                    <h3>Новости</h3>
                </div>
                <div class="title">
                    <a href="/news"><h6>Смотреть все новости &#8599;</h6></a>
                </div>
            </div>
            <div class="news-cards">
                <?php
                    $args = array(
                        'numberposts' => 3,
                        'post_status' => 'publish',
                    );

                    $result = wp_get_recent_posts( $args );

                    foreach( $result as $p ){
                ?>
                        <a class="card" href="<?php echo get_permalink($p['ID']) ?>">
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $p['post_title'] ?></h4>
                                <span>ЗДРАВООХРАНЕНИЕ</span>
                                <p class="card-text"><?php echo $p['post_excerpt'] ?></p>
                                <p class="card-text"><?php echo get_the_time( 'j F Y', $p['ID'] ) ?></p>
                            </div>
                        </a><br />
                        <?php
                    }
                ?>
            </div>
        </div>
        <div class="block-info">
            <div class="block-links">
                <div class="title">
                    <h3>Полезные ссылки</h3>
                </div>
                <div class="link-desk">
                    <a href="#" class="link-card">
                        <div class="card-body">
                            <h6 class="card-title">Мониторинг адресов <img src="<?php echo get_theme_file_uri( 'images/icon_check.png' )?>" alt="" class="icon"></h6>
                            <p class="card-text">сервис по проверке адресов медицинских учреждений</p>
                        </div>
                    </a>
                    <a href="#" class="link-card">
                        <div class="card-body">
                            <h6 class="card-title">Мониторинг адресов <img src="<?php echo get_theme_file_uri( 'images/icon_check.png' )?>" alt="" class="icon"></h6>
                            <p class="card-text">сервис по проверке адресов медицинских учреждений</p>
                        </div>
                    </a>
                    <a href="#" class="link-card">
                        <div class="card-body">
                            <h6 class="card-title">Мониторинг адресов <img src="<?php echo get_theme_file_uri( 'images/icon_check.png' )?>" alt="" class="icon"></h6>
                            <p class="card-text">сервис по проверке адресов медицинских учреждений</p>
                        </div>
                    </a>
                    <a href="#" class="link-card">
                        <div class="card-body">
                            <h6 class="card-title">Мониторинг адресов <img src="<?php echo get_theme_file_uri( 'images/icon_check.png' )?>" alt="" class="icon"></h6>
                            <p class="card-text">сервис по проверке адресов медицинских учреждений</p>
                        </div>
                    </a>
                    <a href="#" class="link-card">
                        <div class="card-body">
                            <h6 class="card-title">Мониторинг адресов <img src="<?php echo get_theme_file_uri( 'images/icon_check.png' )?>" alt="" class="icon"></h6>
                            <p class="card-text">сервис по проверке адресов медицинских учреждений</p>
                        </div>
                    </a>
                    <a href="#" class="link-card">
                        <div class="card-body">
                            <h6 class="card-title">Мониторинг адресов <img src="<?php echo get_theme_file_uri( 'images/icon_check.png' )?>" alt="" class="icon"></h6>
                            <p class="card-text">сервис по проверке адресов медицинских учреждений</p>
                        </div>
                    </a>
                    <a href="#" class="link-card">
                        <div class="card-body">
                            <h6 class="card-title">Мониторинг адресов <img src="<?php echo get_theme_file_uri( 'images/icon_check.png' )?>" alt="" class="icon"></h6>
                            <p class="card-text">сервис по проверке адресов медицинских учреждений</p>
                        </div>
                    </a>
                    <a href="#" class="link-card">
                        <div class="card-body">
                            <h6 class="card-title">Мониторинг адресов <img src="<?php echo get_theme_file_uri( 'images/icon_check.png' )?>" alt="" class="icon"></h6>
                            <p class="card-text">сервис по проверке адресов медицинских учреждений</p>
                        </div>
                    </a>
                    <a href="#" class="link-card">
                        <div class="card-body">
                            <h6 class="card-title">Мониторинг адресов <img src="<?php echo get_theme_file_uri( 'images/icon_check.png' )?>" alt="" class="icon"></h6>
                            <p class="card-text">сервис по проверке адресов медицинских учреждений</p>
                        </div>
                    </a>
                </div>
                <div class="block-problem">
                    <div class="problem">
                        <div class="d-flex">
                            <img src="<?php echo get_theme_file_uri( 'images/gosuslugi.png' )?>" alt="" class="img">
                        </div>
                        <div class="problem-body">
                            <h5>ГОСУСЛУГИ</h5>
                            <h5>РЕШАЕМ ВОПРОСЫ ВМЕСТЕ</h5>
                            <p>Недовольны работой больн ицы?</p>
                        </div>
                        <div class="button">
                            <a href="#" class="btn btn-light">
                                Написать о проблеме
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-docs">
                <div class="title">
                    <h3>Документы</h3>
                </div>
                <div class="doc-desk">
                    <div class="doc">
                        <a class="doc-body" href="#">
                            <img src="<?php echo get_theme_file_uri( 'images/icon_doc.png')?>" alt="">
                            <div class="relative">
                                <h6>Свидетельство о государственной регистрации программы для ЭВМ</h6>
                                <p>файл pdf 112.31 кб</p>
                            </div>
                        </a>
                    </div>
                    <div class="doc">
                        <a class="doc-body" href="#">
                            <img src="<?php echo get_theme_file_uri( 'images/icon_doc.png')?>" alt="">
                            <div class="relative">
                                <h6>Свидетельство о государственной регистрации программы для ЭВМ</h6>
                                <p>файл pdf 112.31 кб</p>
                            </div>
                        </a>
                    </div>
                    <div class="doc">
                        <a class="doc-body" href="#">
                            <img src="<?php echo get_theme_file_uri( 'images/icon_doc.png')?>" alt="">
                            <div class="relative">
                                <h6>Свидетельство о государственной регистрации программы для ЭВМ</h6>
                                <p>файл pdf 112.31 кб</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-form">
            <div class="text-form">
                <div class="title">
                    <h3>Обратная связь</h3>
                </div>
                <div class="title">
                    <div class="text">Пожалуйста, заполните форму, мы свяжемся с Вами в самое ближайшее время</div>
                </div>
            </div>
            <div class="form">
                <?php echo do_shortcode('[contact-form-7 id="cd877ae" title="Контактная форма"]')?>
            </div>
    </div>
    </div>
</main>
<?php get_footer(); ?>
</body>
</html>
