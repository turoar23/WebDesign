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

$(".sub-categorias").find("a").each(function(index){
  if($(this).attr("href") == window.location.pathname){
      $(this).addClass("actived");
  }
});
// --------------------------------------------------
