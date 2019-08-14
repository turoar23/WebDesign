function openDrawerMenu(){
  var x = document.getElementById("mainNavBar");
  if (x.className === "navBar"){
    x.className += " responsive";
  } else {
    x.className = "navBar";
  }
}

$(".pages").find("a").each(function(index){
    if($(this).attr("href")==window.location.pathname){
        $(this).addClass("actived");
    }
  });
