<?php
/**
 * @project demo-template
 * @author nguyenvanduocit
 * @date 01/31/2015
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="<?php echo AppData::get_instance()->description ?>">
    <title><?php echo AppData::get_instance()->title ?></title>
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="template/images/favicon/apple-touch-icon-152x152.png">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="template/images/favicon/mstile-144x144.png">
    <link rel="icon" href="template/images/favicon/favicon-32x32.png" sizes="32x32">
    <meta property="og:title" content="Generate auto hide/show menu bar - HeadroomJs Animate Generator" />
    <meta property="og:description" content="This tool help you generate an awesome animate to headroomJs. Your menu bar will be very awesome with css3 transition animate."/>
    <meta property="og:site_name" content="HeadroomJs Animate Generator"/>
    <meta property="article:author" content="https://www.facebook.com/chucbengungon" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="/img/image.png" />
    <!--  Android 5 Chrome Color-->
    <meta name="theme-color" content="#EE6E73">
    <!-- CSS-->
    <link href="template/css/prism.css" rel="stylesheet">
    <link href="template/css/ghpages-materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="http://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" type="text/css">
    <?php print_style(); ?>
    <script>
        var AppData = <?php echo AppData::get_instance()->toJson(); ?>
    </script>
    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="template/js/jquery.timeago.min.js"></script>
    <script src="template/js/prism.js"></script>
    <script src="template/js/materialize.js"></script>
    <script src="template/js/toc.js"></script>
    <script src="template/js/youtube.js"></script>
    <script src="template/js/init.js"></script>
    <!-- Google Plus Button-->
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <?php print_script(); ?>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=618783061559756&version=v2.0";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    <!--  Google Analytics  -->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', AppData.GAID, 'auto');
        ga('require', 'displayfeatures');
        ga('send', 'pageview');
    </script>
</head>