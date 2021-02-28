<!-- footer
================================================== -->
<footer>

    <div class="row">

        <div class="twelve columns">

            <ul class="footer-nav">
                <?php wp_nav_menu(array(
                    'theme_location'=>'bot',
                    'conatainer'=>null,
                    'menu_class'=>'nav',
                    'menu_id'=>'nav',
                ));?>
            </ul>

                <?php wp_nav_menu(array(
                    'theme_location'=>'social_links',
                    'conatainer'=>null,
                    'menu_class'=>'nav',
                    'menu_id'=>'nav',
                ));?>

            <ul class="copyright">
                <li>Copyright &copy; 2014 Sparrow</li>
                <li>Design by <a href="http://www.styleshout.com/">Styleshout</a></li>
            </ul>

        </div>

        <div id="go-top" style="display: block;"><a title="Back to Top" href="#">Go To Top</a></div>

    </div>

</footer> <!-- Footer End-->


    <?php wp_footer(); ?>

</body>

</html>