	<!-- footer -->
	<footer class="footer">
		<div class="footer__container">
            <div class="footer__box">
                <div class="footer__side footer__side_left">
                    <!-- times -->
                    <div class="footer__block footer__times">
                        <div class="footer__block-title">
                            Время работы:
                        </div>
                        <ul class="footer-block-list">
                            <?php
                                $f_times = CFS()->get('footer_times', 2);
                                foreach ($f_times as $f_times_item){
                                    ?>
                                    <li class="footer-block-li">
                                        <?php echo $f_times_item['footer_times_item']; ?>
                                    </li>
                                <?php
                                }
                            ?>
                        </ul>
                    </div>
                    <!-- contacts -->
                    <div class="footer__block footer__contacts">
                        <div class="footer__block-title">
                            Контакты:
                        </div>
                        <ul class="footer-block-list">
                            <?php
                                $f_times = CFS()->get('footer_contacts', 2);
                                foreach ($f_times as $f_times_item){
                                    ?>
                                    <li class="footer-block-li">
                                        <?php echo $f_times_item['footer_contacts_item']; ?>
                                    </li>
                                <?php
                                }
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="footer__center">
                    <img src="<?php echo get_template_directory_uri(); ?>/app/images/footer-logo.png">
                </div>
                <div class="footer__side footer__side_right">
                    <div class="footer__block">
                        <div class="footer__address">
                            <?php
                                echo CFS()->get('footer_address', 2);
                            ?>
                        </div>
                        <ul class="footer__social">
                            <li class="footer__social-item">
                                <a href="#">
                                    <img src="<?php echo get_template_directory_uri(); ?>/app/images/insta.svg">
                                </a>
                            </li>
                            <li class="footer__social-item">
                                <a href="#">
                                    <img src="<?php echo get_template_directory_uri(); ?>/app/images/whatsapp.svg">
                                </a>
                            </li>
                            <li class="footer__social-item">
                                <a href="#">
                                    <img src="<?php echo get_template_directory_uri(); ?>/app/images/telega.svg">
                                </a>
                            </li>
                            <li class="footer__social-item">
                                <a href="#">
                                    <img src="<?php echo get_template_directory_uri(); ?>/app/images/vk.svg">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer__block footer__2gis">
                        <span>Оставьте отзыв на</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/app/images/2gis.svg">
                    </div>
                </div>
                <div class="footer__print">
                    <img src="<?php echo get_template_directory_uri(); ?>/app/images/bg-print.png">
                </div>
            </div>
		</div>
	</footer>


    <?php wp_footer(); ?>
</body>
</html>