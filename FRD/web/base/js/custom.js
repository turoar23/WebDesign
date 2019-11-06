$('#reveal').on('click', function() {
  $('#ajax-content').load('/prueba.php');
 $('button').hide();
})

function text(){
  var text=$('.text');

  if(text.hasClass('show')){
    text.removeClass('show');
    hideText();
  }else{
    text.addClass('show');
    showText();
  }

}
// Mostramos el texto y las imganenes nitidas
function showText(){
  var text=$('.text');

  text.css('height',"100%");
  text.css('font-size','1rem');
  text.css('margin','2% 0% 2% 0%');
  $('main').find('.title').css('display','initial');
  $("main").find('img').css("opacity","0.15");
}
// Ocultamos el texto y hacemos las imagenes opacas
function hideText(){
  var text=$('.text');

  text.css('margin','0%');
  text.css('height',"0px");
  text.css('font-size','0rem');
  $('main').find('.title').css('display','none');
  $("main").find('img').css("opacity","1");  
}

$(document).ready(function(){
  $(".nav-link").each(function( index ) {
    if(index == 1){
      $(this).click(function(){
        text();
      });
    }
  });
});