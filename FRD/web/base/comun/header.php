<header>
    <span id="open" onclick="openNav()">&#9776;</span>
    <div id="mySidenav" class="sidenav">
        <div class = "logo">
            <a href="/">
                <img src="/img/logo.png" />
            </a>
        </div>
        <div class = "nav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a class = "nav-link <?php if(substr($_SERVER['REQUEST_URI'],1,9) != "proyectos") echo "page-active" ?>" href = "/" onclick="closeNav()">INICIO</a><span class="dot"></span>
            <a id = "nav-pro" class = "nav-link <?php if(substr($_SERVER['REQUEST_URI'],1,9) == "proyectos") echo "page-active" ?>" href="/#Proyectos" onclick="closeNav()">PROYECTOS</a><span class="dot"></span>
            <a id = "nav-FRD" class = "nav-link" href = "/#FRD" onclick="closeNav()">FRD</a><span class="dot"></span>
            <a id = "nav-con" class = "nav-link" href = "/#Contacto" onclick="closeNav()">CONTACTO</a>
        </div>
        <div class = "footer">
            <div class = "social-networks">
                <a href="https://www.facebook.com/david.frd.779" target="_blank">
                    <i class="fab fa-facebook"></i>
                </a>
                <a href="https://instagram.com/frdprojects?igshid=1qam0ur6ybt7v" target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://pin.it/ltwnampsf6dfsr" target="_blank">
                    <i class="fab fa-pinterest"></i>
                </a>
            </div>
            <a href="">EN</a> /
            <a href="">ES</a>
        </div>
    </div>
    
</header>