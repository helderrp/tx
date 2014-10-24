<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/parallax.css" type="text/css"/>
    <link rel="stylesheet" href="css/estilosite.css" type="text/css"/>
    <link href="vendor/bootstrap-3.2.0-dist/css/bootstrap.css" rel="stylesheet" media="screen">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="vendor/bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>
    <script src="js/parallax.js"></script>
    <script type="text/javascript" src="js/jquery.arbitrary-anchor.js"></script>
    <script src="js/jquery-1.8.2.min.js"></script>
    <script src="js/jquery.scrollTo-1.4.3.1.min.js"></script>
    <script src="js/jquery.scrollorama.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.scrolldeck.js"></script>

    <!---->
    <!---->
    <!--<title>Teixeira Gás</title>-->
    <!---->
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top" id="navmenu" role="navigation">
    <div class="container-fluid navbar-left">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            Logo Teixeira Gás
        </div>
    </div>
    <div class="container-fluid navbar-left">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="#home" class="navbar-btn">HOME</a></li>
                <li><a href="#produtos" class="navbar-btn">PRODUTOS</a></li>
                <li><a href="#promocoes" class="navbar-btn">PROMOÇÕES</a></li>
                <li><a href="#historia" class="navbar-btn">HISTORIA</a></li>
                <li><a href="#frota" class="navbar-btn">FROTA</a></li>
                <li><a href="#" class="navbar-btn">CONTATO</a></li>
            </ul>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
</nav>

<div id="home" class="bgParallax slide" data-speed="15">
    <article>
        <h1>That show's called a pilot.</h1>

        <p>Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to
            the people who make shows, and on the strength of that one show they decide if they're going to make more
            shows. Some pilots get picked and become television programs. Some don't, become nothing. She starred in one
            of the ones that became nothing. </p>
    </article>
</div>
<div id="produtos" class="bgParallax slide" data-speed="10">
    <article>
        <h1>Water</h1>

        <p>You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the
            world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I don't
            know exactly when we turned on each other, but I know that seven of us survived the slide... and only five
            made it out. Now we took an oath, that I'm breaking now. We said we'd say it was the snow that killed the
            other two, but it wasn't. Nature is lethal but it doesn't hold a candle to man. </p>
    </article>
</div>
<div id="promocoes" class="bgParallax slide" data-speed="10">
    <article>
        <h1>Water</h1>

        <p>You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the
            world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I don't
            know exactly when we turned on each other, but I know that seven of us survived the slide... and only five
            made it out. Now we took an oath, that I'm breaking now. We said we'd say it was the snow that killed the
            other two, but it wasn't. Nature is lethal but it doesn't hold a candle to man. </p>
    </article>
</div>
<div id="historia" class="bgParallax slide" data-speed="10">
    <article>
        <h1>Water</h1>

        <p>You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the
            world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I don't
            know exactly when we turned on each other, but I know that seven of us survived the slide... and only five
            made it out. Now we took an oath, that I'm breaking now. We said we'd say it was the snow that killed the
            other two, but it wasn't. Nature is lethal but it doesn't hold a candle to man. </p>
    </article>
</div>
<div id="frota" class="bgParallax slide" data-speed="10">
    <article>
        <h1>Water</h1>

        <p>You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the
            world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I don't
            know exactly when we turned on each other, but I know that seven of us survived the slide... and only five
            made it out. Now we took an oath, that I'm breaking now. We said we'd say it was the snow that killed the
            other two, but it wasn't. Nature is lethal but it doesn't hold a candle to man. </p>
    </article>
</div>

<div id="rodape" class="bgParallax slide" data-speed="10">
    <h1>Aqui vai o rodapé</h1>
    <article>
        <h1>Water</h1>

        <p>You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the
            world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I don't
            know exactly when we turned on each other, but I know that seven of us survived the slide... and only five
            made it out. Now we took an oath, that I'm breaking now. We said we'd say it was the snow that killed the
            other two, but it wasn't. Nature is lethal but it doesn't hold a candle to man. </p>
    </article>
</div>


<script>
    $(document).ready(function() {

        var deck = new $.scrolldeck({
            buttons: '.nav-button',
            easing: 'easeInOutExpo',
            slides: '.div',
            offset: -30
        });

    });
</script>

</body>

</html>
