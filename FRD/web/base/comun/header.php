<header>
    <span id="open" onclick="openNav()">&#9776;</span>
    <a class="mini-logo" href="/">
        <img src="/img/mini-logo.png" />
    </a>
    <div id="mySidenav" class="sidenav">
        <div class = "logo">
            <a href=<?php text("/"); ?>>
                <img src="/img/logo.png" />
            </a>
        </div>
        <div class = "nav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a class = "nav-link <?php if(substr($_SERVER['REQUEST_URI'],1,9) != "proyectos" && substr($_SERVER['REQUEST_URI'],4,8) != "projects") echo "page-active" ?>" href = <?php text("/");?> onclick="closeNav()"><?php text('INICIO'); ?></a><span class="dot"></span>
            <a id = "nav-pro" class = "nav-link <?php if(substr($_SERVER['REQUEST_URI'],1,9) == "proyectos" || substr($_SERVER['REQUEST_URI'],4,8) == "projects") echo "page-active" ?>" href="<?php text('/#Proyectos');?>" onclick="closeNav()"><?php text('PROYECTOS'); ?></a><span class="dot"></span>
            <a id = "nav-FRD" class = "nav-link" href = <?php text("/#FRD");?> onclick="closeNav()">FRD</a><span class="dot"></span>
            <a id = "nav-con" class = "nav-link" href = <?php text("/#Contacto");?> onclick="closeNav()"><?php text('CONTACTO'); ?></a>
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
            <div class="documents">
                <a href="/documents/politica_privacidad.pdf">Politica Privacidad</a> |
                <a href="/documents/aviso_legal.pdf">Aviso Legal</a>
            </div>
            <a href="/en/">EN</a> /
            <a href="/">ES</a>
        </div>
    </div>
    
</header>