<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vista_t
 */

?>

<footer class="l-footer">
    <figure class="bg-image"><img class="show-for-large" src="<?= get_template_directory_uri(); ?>/img/footer-bg.png"><img class="hide-for-large" src="<?= get_template_directory_uri(); ?>/img/footer-bg-medium.png">
    </figure>
    <div class="mainwrap-superwide">
        <div class="footer-innerwrap">
            <div class="footer-column-first">
                <h3 class="footer-list-title">B2C</h3>
                <div class="footer-list-wrap">
                    <div class="footer-list">
                        <div class="footer-list-item"><a class="footer-link-main" href="#">Login/Regisrer In
                                B2C</a></div>
                        <div class="footer-list-item">
                            <div class="footer-link-main footer-link-main-btn">About US</div>
                            <div class="footer-link-subitems"><a class="footer-link-sub" href="licenses.html">Licenses
                                    & Regulation</a><a class="footer-link-sub" href="contact-us.html">Contact
                                    US</a></div>
                        </div>
                        <div class="footer-list-item"><a class="footer-link-main" href="faq.html">F.A.G</a>
                        </div>
                    </div>
                    <div class="footer-list">
                        <div class="footer-list-item">
                            <div class="footer-link-main footer-link-main-btn">Trading</div>
                            <div class="footer-link-subitems"><a class="footer-link-sub" href="platforms.html">Trading
                                    platforms</a>
                                <div class="footer-link-sub">Products</div>
                                <ul>
                                    <li><a class="footer-link-sub" href="forex.html">Forex</a></li>
                                    <li><a class="footer-link-sub" href="indices.html">Indices</a></li>
                                    <li><a class="footer-link-sub" href="commodities.html">Commodities</a></li>
                                </ul>
                                <a class="footer-link-sub" href="investments.html">Investments</a><a
                                        class="footer-link-sub" href="accounts.html">Accounts</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-column-second">
                <h3 class="footer-list-title">B2B</h3>
                <div class="footer-list">
                    <div class="footer-list-item"><a class="footer-link-main" href="index.html">Home</a></div>
                    <div class="footer-list-item"><a class="footer-link-main" href="liquidity.html">Liqudity</a>
                    </div>
                    <div class="footer-list-item"><a class="footer-link-main" href="support.html">Back office
                            support, compliance & marketing management</a></div>
                    <div class="footer-list-item"><a class="footer-link-main" href="contact-us.html">Contact
                            US</a></div>
                </div>
            </div>
            <div class="footer-column-third">
                <div class="footer-column-text">
                    <h3 class="footer-title">RISK Disclaimer:</h3>
                    <p class="light-gray">Having opened a Trading Account and began trading, you acknowledge
                        your awareness and full acceptance of the risks related to the trading of financial
                        instruments and possible loss of your funds. Please read carefully General Risk
                        Disclosure.</p>
                </div>
                <div class="footer-column-text warning">
                    <h3 class="footer-title uppercase">RISK WARNING</h3>
                    <p class="light light-gray">Investments involve a high degree of risk</p>
                </div>
            </div>
            <div class="up-button show-for-large">
                <svg class="icon icon-arrow-up">
                    <use xlink:href="<?= get_template_directory_uri(); ?>/icons/symbol-defs.svg#icon-arrow-up"></use>
                </svg>
            </div>
        </div>
    </div>
</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
