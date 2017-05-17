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
                <input id="msg_name" type="text" name="name" placeholder="<?php echo __('Name'); ?>" class="required">
                <input id="msg_email" type="email" name="email" placeholder="<?php echo __('Email'); ?>" class="required">
                <textarea id="msg_message" name="message" placeholder="<?php echo __('Message'); ?>" class="required"></textarea>
                <input type="submit" value="<?php echo __('SEND'); ?>">
            </form>
        </div>
    </div>
<!-- End Message Box -->

<!-- Popup Post -->
<div id="wrapper"></div>
<div class="popup_post">
    <div id="ajax-response"></div>
    <a href="#" class="popup_close" data-js="close_form"><img src="<?php echo get_template_directory_uri(); ?>/img/popup_close.png"></a>
</div>
<!-- End Popup Post -->

<!-- Message Popup -->
<div id="wrapper"></div>
<div class="popup">
    <a href="#" class="popup_close" data-js="close_form"><img src="<?php echo get_template_directory_uri(); ?>/img/popup_close.png"></a>
    <p><?php echo __('Your message has been sent'); ?></p>
</div>
<!-- End Message Popup -->

<?php wp_footer();?>
</body>
</html>