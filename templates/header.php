<?php
    function navLink($url, $linktext) {
        $current = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
        if ($url == $current) {
            return '<a class="current">'.$linktext.'</a>';
        }
        else {
            return '<a href="'.$url.'">'.$linktext.'</a>';
        }
    }
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo "$page_title | The Sons of Ra"; ?></title>
        <meta name="description" content="The Sons of Ra do not exist. This website also does not exist.">
        <meta name="viewport" content="width=device-width">


        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/taf-librarysci-m.css">
        <link rel="stylesheet" href="css/custom.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        <div class="container center-aligned">
        
            <header class="header">
                <a href="/">
                    <img src="img/sonsofraban.jpg" width="1000" height="257" alt="The Sons of Ra" />
                </a>
                <ul class="navigation">
                        <?php
                            $tab = "\t\t\t";
                            echo '<li class="nav-link left-side">'.navLink('about.php', 'About')."\n";
                            echo $tab.'<li class="nav-link left-side">'.navLink('history.php', 'History')."\n";
                            echo $tab.'<li class="nav-link left-side">'.navLink('events.php', 'Events')."\n";
                            echo $tab.'<li class="nav-link right-side">'.navLink('members.php', 'Members')."\n";
                            echo $tab.'<li class="nav-link right-side">'.navLink('contact.php', 'Contact')."\n";
                            echo $tab.'<li class="nav-link right-side">'.navLink('media.php', 'Media')."\n";
        
                        ?>
                </ul>
            </header>
    
            <section class="content">
                <article class="main">