<!-- Footer section -->
    <footer>
        <div class="container main_footer">
            <div class="container_inner">
                <p>© 2017 ANKUR GROUP CORPORATION</p>
            </div>
        </div>
    </footer>
<!-- End Footer section -->

<!-- Message Box -->
    <div class="msg_box">
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/msg_box.png"></a>
        <div class="clear"></div>
        <div class="contact_form">
            <form id="msg_form" action="/" method="post">
                <input type="text" name="name" placeholder="Name" class="required">
                <input type="email" name="email" placeholder="Email" class="required">
                <textarea name="message" placeholder="Message" class="required"></textarea>
                <input type="submit" value="SEND">
            </form>
        </div>
    </div>
<!-- End Message Box -->

<?php wp_footer();?>
</body>
</html>