@extends('master')

@section('content')
<div class="hp-content">
    @if (config('archive.disabled'))
    <span class="slogan">Archiving threads is currently disabled.</span>
    @else
    <span class="slogan">Easily archive your favourite 4chan threads</span>
    <form id="archiveForm">
        <input type="text" id="threadUrl" placeholder="Enter a valid 4chan thread URL" />
        <input type="button" id="doArchive" onClick="processForm()" value="Archive!" />
    </form>
    <p class="center">Archiving a thread with a lot of images can take up to a few minutes. Be patient.</p>
    <p class="center">By archiving a thread, you agree to the very small amount of <a href="archive/faq">rules</a> and the <a href="archive/terms#rules">terms of service</a></p>
    @endif
    <div id="home-list">
            <div class="columns">
            <div class="column left" id="latest-threads-list">
                <span class="area-title">Latest Threads</span>
                <div id="latest-threads">Loading...</div>
                <div class="pagination"></div>
            </div>
            <div class="column right">
                <span class="area-title">Statistics</span>
                <div id="the-statistics">Loading....</div>
            </div>
        </div>
    </div>

</div>
@stop