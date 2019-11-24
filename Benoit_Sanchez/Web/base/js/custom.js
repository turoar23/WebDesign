function openDrawerMenu(){
  var x = document.getElementById("mainNavBar");
  if (x.className === "navBar"){
    x.className += " responsive";
  } else {
    x.className = "navBar";
  }
}
// Set the actual pages in the navbar to actived
//TODO: Revisar si hay alguna forma mejor de hacer esto
$(".pages").find("a").each(function(index){
    if($(this).attr("href").split("/")[1] == window.location.pathname.split("/")[1]){
        $(this).addClass("actived");
    }
  });

// ------------------ Proyectos ---------------------
//
$('.catalogo .scroll').find('img').bind( "click", function() {
  var src= $(this).attr('src');
  $('.catalogo .image-view').find('img').attr('src',src);
});

$(".sub-categorias").find("a").each(function(){
  if($(this).attr("href") == window.location.pathname){
      $(this).addClass("actived");
  }
});
// nav collapse
// TODO: Arreglar efecto raro al cambiar de pagina a una sin colapso
$(".panel-heading").find(".cat-principal").each(function(){
  var subCat = $(this).find('.sub-categorias');
  var width = $( window ).width();
  if(width >= 800)
    var tam = subCat.outerHeight(true);
  else
    var tam = subCat.outerHeight(true) / $(this).find('li').length;
  
  $(this).find('.cat-heading').click(function(){
    // Si esta expandido
    if(subCat.hasClass('collapse')){
      subCat.removeClass('collapse');
      subCat.addClass('expanded');
      //subCat.css('display','block');
      subCat.height(tam);
    }
    // Si no lo esta
    else{
      subCat.addClass('collapse');
      subCat.removeClass('expanded');
      //subCat.css('display','none');
      subCat.height(0);
    }
  });
  if($(this).find('a').hasClass('actived')){
    subCat.height(tam);
    subCat.removeClass('collapse');
  }
  else
    subCat.height(0);
});
function servicios(){
  jQuery('.phase').each(function(){
    var effect = $(this).find('.effect');
    // Comprobamos si es visible
    if($(this).visible()){
      // Comprobamos si es un efecto de la izquierda
      if(effect.hasClass('leftAnimated')){
        effect.removeClass('leftAnimated');
      }
      // Comprobamos si es un efecto de la derecha
      if(effect.hasClass('rightAnimated')){
        effect.removeClass('rightAnimated');
      }
    }
  });
}
// Carga la funcion cuando la pagina se ha cargado
jQuery(document).ready(function() {
  // Comprueba cuando se carga si alguna imagen esta dentro
  servicios();
  // Cuando se haga scroll
  window.onscroll = function(){
    this.servicios();
  };
})
// --------------------------------------------------
