<header>
    <div class = "logo">
        <img src="/img/logo.png" />
    </div>
    <div class = "nav">
        <a class = "nav-link page-active" <?php if($_SERVER['REQUEST_URI']!='/') echo('href="/"');?>>HOME</a><span class="dot"></span>
        <a class = "nav-link">PROYECTOS</a><span class="dot"></span>
        <a class = "nav-link" <?php if($_SERVER['REQUEST_URI']!='/') echo('href="/"');?>>FRD</a><span class="dot"></span>
        <a class = "nav-link" <?php if($_SERVER['REQUEST_URI']!='/') echo('href="/"');?>>CONTACTO</a>
    </div>
    <div class = "footer">
        <div class = "social-networks">
            <i class="fab fa-instagram"></i>
            <i class="fab fa-linkedin-in"></i>
            <i class="fab fa-pinterest"></i>
        </div>
        <a href="">EN</a> /
        <a href="">ES</a>
    </div>
</header>