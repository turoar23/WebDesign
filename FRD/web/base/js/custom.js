// Alterna entre mostrar y ocultar
function text(categoria){
  var text = $('.main-body').find('.'+categoria);

  // Comprobamos si hay que mostrar
  if(text.hasClass('show')){
    hideText();
  }else{
    showText(categoria);
  }
}
// Mostramos el texto y las imganenes nitidas
function showText(categoria){
  // Ocultamos todo
  hideText();
  var text = $('.main-body').find('.'+categoria);
  
  text.addClass('show');
  text.css('height',"100%");
  text.css('font-size','1.5rem');
  text.css('margin','2% 0% 2% 0%');
  $('main').find('.title').css('display','initial');
  $('main').find('img').css("opacity","0.15");
  // Ocultamos todas las que no esten activas
  $('.main-gallery').find('.main-index:not(.active)').find('img').css("opacity","0");
  $('.main-gallery').find('.hide:not(.active)').css('opacity','0');
  $('.gallery-top').find('.efecto-texto').each(function(){
    $(this).css('display','none');
  })
}
// Ocultamos el texto y hacemos las imagenes opacas
function hideText(){

  // Quitamos cualquier pagina que aparezca como seleccionada
  $('.main-body').find('.page-active').removeClass('page-active');
  // Escondemos todas las categorias
  $('.text').each(function(){
    $(this).removeClass('show');
    $(this).css('margin','0%');
    $(this).css('height',"0px");
    $(this).css('font-size','0rem');
    $('main').find('.title').css('display','none');
    $("main").find('img').css("opacity","1");
  });
  $('.gallery-top').find('.efecto-texto').each(function(){
    $(this).css('display','');
  })
  // Mostramos la galeria principal
  showGallery('principal');
}
/**
 * Desactiva el resto de galerias y muestra la pasada por argumento
 * @param {*} id 
 */
function showGallery(id){
  // Eliminamos la galeria con clase activa
  $('.main-gallery').find('.active').removeClass('active');
  // Cargamos las imagenes del id que queremos cargar
  $('#'+id).addClass('active');
  // Si tiene el atributo lazy, lo cambia por src para cargar la imagen
  $('#'+id).find('img[lazy]').each(function(){
    // Cargamos el atributo
    $(this).attr('src',$(this).attr('lazy'));
    // Borrramos lazy para no volver a cargarlo
    $(this).removeAttr('lazy');
  });
  // Ponemos todas las imagenes a opacidad 1
  $('#'+id).find('img').each(function(){
    // Ponemos su opacidad a tope
    $(this).css('opacity','1');
  });
  // Ponemos las demas a 0
  $('.main-gallery').find('.main-index:not(.active)').find('img').css("opacity","0");
  $('.main-gallery').find('.hide').css('opacity','0');
}
/**
 * Muestra la informacion del id pasado por parametro
 * @param {*} id
 */
function showInfo(id){
  // Eliminamos la galeria con clase activa
  $('.main-gallery').find('.active').removeClass('active');
  $('.main-gallery').find('.hide').css('opacity','0');
  // Ponemos active y mostramos
  $('#'+id).addClass('active');
  $('#'+id).css('opacity','1');
  $('#'+id).find('img').each(function(){
    // Ponemos su opacidad a tope
    $(this).css('opacity','1');
  });
  // Ponemos las demas a 0
  $('.main-gallery').find('.main-index:not(.active)').find('img').css("opacity","0");
}
/**
 * Funcion que se ejecuta cuando el DOM esta cargado
 */
$(document).ready(function(){
  // Menu de navegacion
  $(".nav-link").each(function( index ) {
    // El indice oculta todo
    if(index == 0){
      $(this).click(function(){
        hideText();
        $('.nav-link').removeClass('page-active');
        $(this).addClass('page-active');
      });
    }
    // Proyectos
    else if(index == 1){
      $(this).click(function(){
        text('proyectos');
        // Comprobamos si tiene la clase active
        if($(this).hasClass('page-active')){
          $('.nav-link:first-child').addClass('page-active');
          $(this).removeClass('page-active');
        }
        else{
          $('.nav-link').removeClass('page-active');
          $(this).addClass('page-active');
        }
      });
    }
    // FRD
    else if(index == 2){
      $(this).click(function(){
        text('frd');
        // Comprobamos si tiene la clase active
        if($(this).hasClass('page-active')){
          $('.nav-link:first-child').addClass('page-active');
          $(this).removeClass('page-active');
        }
        else{
          $('.nav-link').removeClass('page-active');
          $(this).addClass('page-active');
        }
      }); 
    }
    // Contacto
    else if(index == 3){
      $(this).click(function(){
        text('contacto');
        // Comprobamos si tiene la clase active
        if($(this).hasClass('page-active')){
          $('.nav-link:first-child').addClass('page-active');
          $(this).removeClass('page-active');
        }
        else{
          $('.nav-link').removeClass('page-active');
          $(this).addClass('page-active');
        }
      }); 
    }
  });
  // TODO: Terminar xD
  // Pagina en la que estamos
  //var actualPage = window.location.href.substring(window.location.origin.length,)
  /*if(actualPage == "/#FRD"){
    $('#FRD').click();
  }*/
  // Cargamos la galeria de cada sub-categoria
  // Obra nueva
  $('.main-body').find('#on').click(function(){
    // Eliminamos cualquier texto activo
    $('.main-body').find('.page-active').removeClass('page-active');
    $(this).addClass('page-active');
    showGallery('obra-nueva');
  });
  // Reforma locales
  $('.main-body').find('#rl').click(function(){
    $('.main-body').find('.page-active').removeClass('page-active');
    $(this).addClass('page-active');
    showGallery('reformas-locales');
  });
  // Reforma viviendas
  $('.main-body').find('#rv').click(function(){
    $('.main-body').find('.page-active').removeClass('page-active');
    $(this).addClass('page-active');
    showGallery('reformas-viviendas');
  });
  // Quienes somos
  $('.main-body').find('#qs').click(function(){
    $('.main-body').find('.page-active').removeClass('page-active');
    $(this).addClass('page-active');
    showInfo('quienes-somos');
  });
  // Contacto
  $('.main-body').find('#co').click(function(){
    $('.main-body').find('.page-active').removeClass('page-active');
    $(this).addClass('page-active');
    showInfo('contacto');
  });
  // Donde estamos
  $('.main-body').find('#de').click(function(){
    $('.main-body').find('.page-active').removeClass('page-active');
    $(this).addClass('page-active');
    showInfo('donde-estamos');
  });
});