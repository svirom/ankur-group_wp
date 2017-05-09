<?php
class main_image extends WP_Widget {
     public function __construct() {
           parent::__construct(
                 'main_image', //ID віджета
                 'MainImage widget', //Назва
                 array( 'description' => __( 'MainImage', 'text_domain' ), ) //Опис
           );
     }
     
     public function widget( $args, $instance ) { //Вивід інформації на сайт
?>
          <div class="container main_image">
            <img src="<?php echo $instance['image']; ?>" class="main_img">
            <div class="container_inner">
              <div class="image_text">
                <p><?php echo $instance['text']; ?></p>
              </div>
            </div>
          </div>
<?php //Виводимо наше налаштування з масиву налаштувань
     }


     public function update( $new_instance, $old_instance ) {
           $instance = $old_instance;
           $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : ''; //Додавання налаштування для заголовка ($instance['имя_настройки'] = strip_tags( $new_instance['имя_ настройки'] );)
           $instance['image'] = esc_attr($new_instance['image']);
           $instance['text'] = ( ! empty( $new_instance['text'] ) ) ? strip_tags( $new_instance['text'] ) : '';
           return $instance;
     }
     public function form( $instance ) { //Додавання налаштувань у форму в адмінці
          $title = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
          $link = esc_attr( $instance['image'] );
?>
          <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>">Заголовок</label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" 
                  name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" 
                  value="<?php echo esc_attr( $title ); ?>" />
          </p>
          <p>
            <label for="<?php echo $this->get_field_id( 'image' ); ?>">Choose image:</label>
            <input type="submit" class="button" name="<?php echo $this->get_field_name( 'image' ); ?>" id="<?php echo $this->get_field_id( 'image' ); ?>" value="<?php echo esc_attr( $link ); ?>" onclick="imageWidget.uploader( '<?php echo $this->id; ?>', '<?php echo $this->get_field_id( '' ); ?>' ); return false;" />
          </p>
          <p>
            <label for="<?php echo $this->get_field_id( 'text' ); ?>"><?php _e( 'Content:' ); ?></label>
            <textarea class="widefat" rows="16" cols="20" id="<?php echo $this->get_field_id('text'); ?>" name="<?php echo $this->get_field_name('text'); ?>"><?php echo esc_textarea( $instance['text'] ); ?></textarea>
          </p>
<?php
     }
}
add_action( 'widgets_init', function(){ //Реєструємо віджет хуком
     register_widget( 'main_image' );
});