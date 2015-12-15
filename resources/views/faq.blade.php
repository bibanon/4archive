@extends('master')

@section('title', 'FAQ - 4ChanArchives')
@section('contentHeader', 'FAQ')

@section('content')
<div class="hp-content">
    <h1>This is a resurrected version of 4Archive</h1>
    <br><b>You can now search through the entire site, thanks to Google <3</b>
    
    <div class="search" style='width:450px; margin:0 auto; padding: 0' >
        <script>
          (function() {
            var cx = '017289221794755012486:itq0_qa1bfk';
            var gcse = document.createElement('script');
            gcse.type = 'text/javascript';
            gcse.async = true;
            gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
                '//cse.google.com/cse.js?cx=' + cx;
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(gcse, s);
          })();
        </script>
        <gcse:search></gcse:search>
    </div>
    
    <br><b>Board list:</b>
    <br>
        <a href='http://4chanarchives.cu.cc/board/a'>Anime & Manga</a> | <a href='http://4chanarchives.cu.cc/board/adv'>Advice</a> | <a href='http://4chanarchives.cu.cc/board/an'>Animals & Nature</a> | <a href='http://4chanarchives.cu.cc/board/asp'>Alternative Sports</a> | <a href='http://4chanarchives.cu.cc/board/b'>Random</a> | <a href='http://4chanarchives.cu.cc/board/biz'>Business & Finance</a> | <a href='http://4chanarchives.cu.cc/board/c'>Anime/Cute</a> | 
        <a href='http://4chanarchives.cu.cc/board/cgl'>Cosplay & EGL</a> | <a href='http://4chanarchives.cu.cc/board/ck'>Food & Cooking</a> | <a href='http://4chanarchives.cu.cc/board/cm'>Cute/Male</a> | <a href='http://4chanarchives.cu.cc/board/co'>Comics & Cartoons</a> | <a href='http://4chanarchives.cu.cc/board/d'>Hentai/Alternative</a> | <a href='http://4chanarchives.cu.cc/board/diy'>Do It yourself</a> | <a href='http://4chanarchives.cu.cc/board/e'>Ecchi</a> | 
        <a href='http://4chanarchives.cu.cc/board/fa'>Fashion</a> | <a href='http://4chanarchives.cu.cc/board/fit'>Fitness</a> | <a href='http://4chanarchives.cu.cc/board/g'>Technology</a> | <a href='http://4chanarchives.cu.cc/board/h'>Hentai</a> | <a href='http://4chanarchives.cu.cc/board/hc'>Hardcore</a> | <a href='http://4chanarchives.cu.cc/board/hm'>Handsome Men</a> | <a href='http://4chanarchives.cu.cc/board/i'>Oekaki</a> | <a href='http://4chanarchives.cu.cc/board/ic'>Artwork/Critique</a> | 
        <a href='http://4chanarchives.cu.cc/board/int'>International</a> | <a href='http://4chanarchives.cu.cc/board/jp'>Otaku Culture</a> | <a href='http://4chanarchives.cu.cc/board/k'>Weapons</a> | <a href='http://4chanarchives.cu.cc/board/lgbt'>Lesbian, Gay, Bisexual, & Transgender</a> | <a href='http://4chanarchives.cu.cc/board/lit'>Literature</a> | <a href='http://4chanarchives.cu.cc/board/m'>Mecha</a> | <a href='http://4chanarchives.cu.cc/board/mlp'>My Little Pony</a> | 
        <a href='http://4chanarchives.cu.cc/board/mu'>Music</a> | <a href='http://4chanarchives.cu.cc/board/n'>Transportation</a> | <a href='http://4chanarchives.cu.cc/board/o'>Auto</a> | <a href='http://4chanarchives.cu.cc/board/out'>Outdoors</a> | <a href='http://4chanarchives.cu.cc/board/po'>Papercraft & Origami</a> | <a href='http://4chanarchives.cu.cc/board/pol'>Politically Incorrect</a> | <a href='http://4chanarchives.cu.cc/board/qa'>Question & Answer</a> | 
        <a href='http://4chanarchives.cu.cc/board/r'>Request</a> | <a href='http://4chanarchives.cu.cc/board/s'>Sexy Beautiful Women</a> | <a href='http://4chanarchives.cu.cc/board/sci'>Science & Math</a> | <a href='http://4chanarchives.cu.cc/board/soc'>Socialising (Cams & Meetups)</a> | <a href='http://4chanarchives.cu.cc/board/sp'>Sports</a> | <a href='http://4chanarchives.cu.cc/board/t'>Torrents</a> | <a href='http://4chanarchives.cu.cc/board/tg'>Traditional Games</a> | 
        <a href='http://4chanarchives.cu.cc/board/toy'>Toys</a> | <a href='http://4chanarchives.cu.cc/board/trv'>Travel</a> | <a href='http://4chanarchives.cu.cc/board/tv'>Television & Film</a> | <a href='http://4chanarchives.cu.cc/board/u'>Yuri</a> | <a href='http://4chanarchives.cu.cc/board/v'>Video Games</a> | <a href='http://4chanarchives.cu.cc/board/vg'>Video Game Generals</a> | <a href='http://4chanarchives.cu.cc/board/vp'>Pokemon</a> | <a href='http://4chanarchives.cu.cc/board/vr'>Retro Games</a> | 
        <a href='http://4chanarchives.cu.cc/board/w'>Anime/Wallpapers</a> | <a href='http://4chanarchives.cu.cc/board/x'>Paranormal</a> | <a href='http://4chanarchives.cu.cc/board/vp'>Pokemon</a> | <a href='http://4chanarchives.cu.cc/board/y'>Yaoi</a>
    
    <br>
    <br><b>Known issues:</b>
    <br>*Mobile version is known to be buggy.
    <br>*The colour template is the same for all boards.
    <br>*Currently no way to archive any threads from 4chan.
    <br>*WebM files are not archived. Instead a 404 picture is shown.
    <br>*The posts' image thumbnails are the actual full-sized picture.
    <br>*Some threads/posts are displayed in the wrong board or link to a missing thread.
    <br>
    <br><b>Notes:</b>
    <br>1. The site uses smart loading of images to ease your browser's work.
    <br>2. None of the images shown on this website are hosted on or by 4ChanArchives.cu.cc.
    <br>3. I'm not affiliated nor a part of  any *chan nor the original 4chanArchive nor any archiving website.
    <br>4. <u>Please disable any advertisement blocking software, it's the only way I can pay the hosting company</u>
    <br>4.1. I've tried to minimize the adverts spam. There should be around 3-5 popups adds per 24 hours max.
    <br>4.2. If you don't like adds then don't click on the <a href='http://4chanarchives.cu.cc/more.php'>[More]</a> or [sexy stuff] links. They lead to a lot of adverts.
    <br>5. If you are going to report something, please include as much information as possible, including a link to the post/thread.
    <br>6. You can use wtabusse@gmail.com to e-mail me for any issues or requests such as DMCA, advertisements, information and etc.
    <br>
    <br><b>Statistics:</b>
    <br>This website is alive since 19. June, 2015.
    <br>This archive contains over 9.7mil posts, over 3mil images, stored in over 60k threads.
    <br>The first archived thread was on: 2014-01-17 04:19:07
</div>
@stop