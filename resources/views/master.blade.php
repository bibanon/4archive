<?php 
$HOME_ADDR = "http://bloo.spys.ru:1234";
$ARCHIVE_ADDR = $HOME_ADDR . "/archive";

/*
{{ $HOME_ADDR }}
{{ $ARCHIVE_ADDR }}
*/
 ?>
<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title', '4ChanArchives - Easily archive your favourite 4chan threads [Beta]')</title>
        
        <link rel="stylesheet" href="/css/homepage.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="description" content="@yield('description')" />
        <link rel="icon" type="image/ico" href="/favicon.ico">
        <meta name="ROBOTS" content="noarchive">
    </head>
    <body>
        <div id="wrapper">
            <header>
                <div class="header-banner"></div>
                <nav>
                    <a href="{{ $HOME_ADDR }}/">Homepage</a> / 
                    <a href="{{ $ARCHIVE_ADDR }}">Archive</a> / 
                    <a href="{{ $ARCHIVE_ADDR }}/faq" title="Frequently Asked Questions">FAQ</a> / 
                   <!-- <a href="/donate">donate</a> / -->
                    <a href="{{ $ARCHIVE_ADDR }}/takedown" >Takedown</a> / 
                    <a href="{{ $ARCHIVE_ADDR }}/terms" title = "Terms of Service">ToS</a>
                </nav>
            </header>
            <div class="content-header">
                @yield('contentHeaer', '4ChanArchives.CU.CC')
            </div>

            @yield('content')

            <footer>
                <strong>4ChanArchives.cu.cc is in no way associated with 4chan.org or its affiliates.</strong><br />
                Server time: <?php echo date('F d Y, h:i A'); ?>
            </footer>
        </div>
        <div id="socialLinks">
        </div>
    </body>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="../js/moment.min.js"></script>
    <script src="../js/main.js"></script>
</html>