jQuery(function($)
{
$(document).ready(function() {

//contacts$msg form
  $('#contacts_form').submit(contacts_form);
  $('#msg_form').submit(msg_form);

  function contacts_form(e) {
    var $this = $(this);
    var fields = '.required';
    e.preventDefault();
    $this.find(fields).each(function() {
      if ($(this).val() == 0) {
        $(this).addClass('error');
      } else {
        $(this).removeClass('error');
      }
    });
    if ($this.find('.error').length > 0) {
      return false;
    } 
    else {
      var ajaxurl = '/wp-admin/admin-ajax.php';
      $.ajax({
        type: 'POST',
        url: ajaxurl,
        data: {
          action: 'form',
          name: $('#contacts_name').val(),
          email: $('#contacts_email').val(),
          message: $('#contacts_message').val(),
        },
        success: function() {
          $('#wrapper').fadeIn(200);
          $('.popup').fadeIn(300);
          $this.find(fields).each(function() {
            $(this).val('');
          });
        },
        error: function() {
          alert("It's not OK");
        }

      });
    }
    return false;
  }

  function msg_form(e) {
    var $this = $(this);
    var fields = '.required';
    e.preventDefault();
    $this.find(fields).each(function() {
      if ($(this).val() == 0) {
        $(this).addClass('error');
      } else {
        $(this).removeClass('error');
      }
    });
    if ($this.find('.error').length > 0) {
      return false;
    } 
    else {
      var ajaxurl = '/wp-admin/admin-ajax.php';
      $.ajax({
        type: 'POST',
        url: ajaxurl,
        data: {
          action: 'form',
          name: $('#msg_name').val(),
          email: $('#msg_email').val(),
          message: $('#msg_message').val(),
        },
        success: function() {
          $('#wrapper').fadeIn(200);
          $('.popup').fadeIn(300);
          $this.find(fields).each(function() {
            $(this).val('');
          });
        },
        error: function() {
          alert("It's not OK");
        }

      });
    }
    return false;
  }


//sale form
  $('#aircraft_form').submit(air_send_form);
  $('#helicopter_form').submit(hel_send_form);

  function air_send_form(e) {
    var $this = $(this);
    var fields = '.required';
    e.preventDefault();
    $this.find(fields).each(function() {
      if ($(this).val() == 0) {
        $(this).addClass('error');
      } else {
        $(this).removeClass('error');
      }
    });
    if ($this.find('.error').length > 0) {
      return false;
    } else {
      var ajaxurl = '/wp-admin/admin-ajax.php';
      $.ajax({
        type: 'POST',
        url: ajaxurl,
        data: {
          action: 'form2',
          sel: $('#air_sale_select option:selected').val(),
          model: $('#air_model').val(),
          email: $('#air_email').val(),
          message: $('#air_message').val(),
        },
        success: function() {
          $('#wrapper').fadeIn(200);
          $('.popup').fadeIn(300);
          $this.find(fields).each(function() {
            $(this).val('');
          });
          $this.find('input:not([type="submit"])').each(function(){
          	$(this).val('');
          });
        },
        error: function() {
          alert("It's not OK");
        }

      });
    }
    return false;
  }

  function hel_send_form(e) {
    var $this = $(this);
    var fields = '.required';
    e.preventDefault();
    $this.find(fields).each(function() {
      if ($(this).val() == 0) {
        $(this).addClass('error');
      } else {
        $(this).removeClass('error');
      }
    });
    if ($this.find('.error').length > 0) {
      return false;
    } else {
      var ajaxurl = '/wp-admin/admin-ajax.php';
      $.ajax({
        type: 'POST',
        url: ajaxurl,
        data: {
          action: 'form2',
          sel: $('#hel_sale_select option:selected').val(),
          model: $('#hel_model').val(),
          email: $('#hel_email').val(),
          message: $('#hel_message').val(),
        },
        success: function() {
          $('#wrapper').fadeIn(200);
          $('.popup').fadeIn(300);
          $this.find(fields).each(function() {
            $(this).val('');
          });
          $this.find('input:not([type="submit"])').each(function(){
            $(this).val('');
          });
        },
        error: function() {
          alert("It's not OK");
        }

      });
    }
    return false;
  }

})

});