jQuery(function($)
{
$(document).ready(function(){

  $('#true_loadmore a').click(function(){
    event.preventDefault();
    $(this).html('<a href="#">Downloading...<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>'); // изменяем текст кнопки, вы также можете добавить прелоадер
    var data = {
      'action': 'loadmore',
      'query': true_posts,
      'page' : current_page,
    };
    $.ajax({
      url:ajaxurl, 
      data:data, 
      type:'POST',
      success:function(data){
        if( data ) { 
          $('#true_loadmore').html('<a href="#">More Articles<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>').before(data); // вставляем новые посты
          current_page++; // увеличиваем номер страницы на единицу
          if (current_page == max_pages) $("#true_loadmore").remove(); // если последняя страница, удаляем кнопку
        } else {
          $('#true_loadmore').remove(); // если мы дошли до последней страницы постов, скроем кнопку
        }
      }
    });
  });


});

});