<header>
    <div class = "logo">
        <img src="/img/logo.png" />
    </div>
    <div class = "nav">
        <a class = "nav-link <?php if(substr($_SERVER['REQUEST_URI'],1,9) != "proyectos") echo "page-active" ?>" <?php if($_SERVER['REQUEST_URI']!='/') echo('href="/"');?>>HOME</a><span class="dot"></span>
        <a class = "nav-link <?php if(substr($_SERVER['REQUEST_URI'],1,9) == "proyectos") echo "page-active" ?>">PROYECTOS</a><span class="dot"></span>
        <a class = "nav-link" <?php if($_SERVER['REQUEST_URI']!='/') echo('href="/"');?>>FRD</a><span class="dot"></span>
        <a class = "nav-link" <?php if($_SERVER['REQUEST_URI']!='/') echo('href="/"');?>>CONTACTO</a>
    </div>
    <div class = "footer">
        <div class = "social-networks">
            <a href="" target="_blank">
                <i class="fab fa-linkedin-in"></i>
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
</header>