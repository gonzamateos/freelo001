<?php
/* Template Name: Custom Home Page */
get_header();
?>
<div id="title1">
    <img src="<?php echo get_template_directory_uri(); ?>/img/title1.png">
</div>
<div id="bannerconal" style="margin-left: 60px; margin-right:60px; margin-top: 50px; overflow: hidden;">
    <section class="slider">
        <div class="flexslider">
            <ul class="slides">
                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/toma1.jpg" />
                </li>
                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/slide3.jpg" />
                </li>
                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/conal1.jpg" />
                </li>
            </ul>
        </div>
    </section>
</div>
<section class="main">
    <ul class="ch-grid">
        <li>
            <div class="ch-item ch-img-1">				
                <div class="ch-info-wrap">
                    <div class="ch-info">
                        <div class="ch-info-front ch-img-1"></div>
                        <div class="ch-info-back">
                            <h3>ADMISIONES</h3>
                            <p style="line-height:14px;">Registrate en el Colegio Navional de Productores de Seguros<br><br><a href="#">Click Aqu&iacute;</a></p>
                        </div>	
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="ch-item ch-img-2">
                <div class="ch-info-wrap">
                    <div class="ch-info">
                        <div class="ch-info-front ch-img-2"></div>
                        <div class="ch-info-back">
                            <h3>SEMINARIOS</h3>
                            <p style="line-height:14px;">Ingresa a nuestro calendario de actividades <br><br><a href="#">Click Aqu&iacute;</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="ch-item ch-img-3">
                <div class="ch-info-wrap">
                    <div class="ch-info">
                        <div class="ch-info-front ch-img-3"></div>
                        <div class="ch-info-back">
                            <h3>Noticias</h3>
                            <p style="line-height:14px;">Entérate de las novedades en el sector<br><br><a href="#">Click Aqu&iacute;</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</section>
<?php get_footer();