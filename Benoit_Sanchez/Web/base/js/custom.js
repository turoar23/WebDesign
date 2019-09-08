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
$(".panel-heading").find(".cat-principal").click(function(){
  var subCat=$(this).find('.sub-categorias');
  // Si esta expandido
  if(subCat.hasClass('expanded')){
    subCat.removeClass('expanded');
    subCat.addClass('collapse');
  }
  // Si no lo esta
  else{
    subCat.addClass('expanded');
    subCat.removeClass('collapse');
  }
});


// --------------------------------------------------
