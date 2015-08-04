<?php
switch ($_SERVER['SERVER_NAME']) {
    case "www.classicalpine.com":
        $title = "Classic Alpine Ski Holidays";
        $subtitle = "Hassle free, care free, high quality holidays for people aged 55 and over that have a love of the mountains and particularly skiing.";
        $css = "classic.css";
        $logo = "classic";
        $list = "http://newsletters.boundlessmarketing.co.uk/t/j/s/xkhthy/";
        $field = "cm-xkhthy-xkhthy";
        $brands_title = "Our Resorts";
        break;
    case "www.vividmountain.com":
        $title = "Vivid Mountain Ski Holidays";
        $subtitle = "Hassle free, care free, high quality holidays for gay men aged 35 and over that have a love of the mountains and particularly skiing.";
        $css = "vivid.css";
        $logo = "vivid";
        $list = "http://newsletters.boundlessmarketing.co.uk/t/j/s/xkhthj/";
        $field = "cm-xkhthj-xkhthj";
        $brands_title = "Our Resorts";
        $brands = array(
            1 => array("name" => "Flaine", "url" => ""),
            2 => array("name" => "La Clusaz", "url" => ""),
            3 => array("name" => "Morzine", "url" => ""),
            4 => array("name" => "Les Saises", "url" => ""),
            5 => array("name" => "Crest Voland", "url" => "")
        );
        break;
    default:
        $title = "The Mountain Experience Company";
        $subtitle = "Niche holiday brands in a mountain environment.";
        $css = "main.css";
        $logo = "mountain";
        $list = "http://newsletters.boundlessmarketing.co.uk/t/j/s/xkhtll/";
        $field = "cm-xkhtll-xkhtll";
        $brands_title = "Our Brands";
        $brands = array(
            1 => array("name" => "CLASSIC ALPINE", "url" => "http://www.classicalpine.com/"),
            2 => array("name" => "VIVID MOUNTAIN", "url" => "http://www.vividmountain.com/")
        );
        break;
}
?>
<!doctype html>
<html class="no-js" lang="EN">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $title; ?>: is coming soon&hellip;</title>
        <meta name="description" content="<?php echo $subtitle; ?>">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/<?php echo $css; ?>">
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        
        <!--[if IE 7]><link rel="stylesheet" href="assets/css/fontello/fontello-ie7.min.css"><![endif]-->
        <!--[if lt IE 9]>
        <script src="/concrete/js/ie/html5-shiv.js"></script>
        <script src="/concrete/js/ie/respond.js"></script>
        <![endif]-->
        <script>
            if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
                var msViewportStyle = document.createElement('style')
                msViewportStyle.appendChild(
                        document.createTextNode(
                                '@-ms-viewport{width:auto!important}'
                                )
                        )
                document.querySelector('head').appendChild(msViewportStyle)
            }
        </script>
    </head>
    <body>
        <div id="wrapper">
        <div class="container">
        <section id="main">
            <header>
                <img src="assets/img/<?php echo $logo; ?>_logo.png" alt="Mountain Experience" width="315" height="181">
            </header>
            <p><?php echo $title; ?> is coming soon &hellip; <?php echo $subtitle; ?></p>
            <footer>
                <p>For more information enter your email address below</p>
                <form action="<?php echo $list; ?>" method="post" id="subForm">
                    <div class="input-group">
                      <input type="email" id="fieldEmail" name="<?php echo $field; ?>" class="form-control" required placeholder="Enter your email address">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="submit">Subscribe</button>
                      </span>
                    </div>
                </form>
                <div>
                <h2><span></span><?php echo $brands_title; ?><span></span></h2>
                <div></div>
                <ul>
                    <?php foreach($brands AS $brand) { ?><span></span></h2>
                      <?php if ($brand['url'] == "") { ?>
                        <li><?php echo $brand['name']; ?></li>
                      <?php } else { ?>
                        <li><a href="<?php echo $brand['url']; ?>" title="<?php echo $brand['name']; ?>"><?php echo $brand['name']; ?></a></li>
                      <?php } ?>
                    <?php } ?><span></span></h2>
                </ul>
                </div>
            </footer>
        </section>
        </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="/assets/js/vendor/jquery.min.js"><\/script>')</script>
        <script src="/assets/js/main.min.js"></script>
        <script src="/assets/js/custom.js"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <!--        <script>
                    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
                    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
                    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
                    e.src='https://www.google-analytics.com/analytics.js';
                    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
                    ga('create','UA-XXXXX-X','auto');ga('send','pageview');
                </script>-->
    </body>
</html>