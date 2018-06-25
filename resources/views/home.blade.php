@extends('layouts/master')

@section('title', 'List Chords')
@section('container')
<div class="container">
    <div class="upcoming">
        <h1>Upcoming List for this week</h1>
    </div>

    <ul class="upcoming-chord">
        <li>
            <a href="#">
                <div class="listSong">
                    <div class="leftTitle">
                        <div class="songtitle">Sentuh Hatiku<span class="badge">New</span></div>
                        <div class="composer">Nikita</div>
                    </div>
                    <div class="initial-key">
                        <div class="flavor-text">Initial Key</div>
                        <div class="letter">G</div>
                    </div>
                </div>
            </a>
        </li>
        <li>
            <a href="#">
                <div class="listSong">
                    <div class="leftTitle">
                        <div class="songtitle">Fixin' My Eyes On You</div>
                        <div class="composer">Jana Alayra</div>
                    </div>
                    <div class="initial-key">
                        <div class="flavor-text">Initial Key</div>
                        <div class="letter">G</div>
                    </div>
                </div>
            </a>
        </li>
        <li>
            <a href="#">
                <div class="listSong">
                    <div class="leftTitle">
                        <div class="songtitle">I Wanna Do Right</div>
                        <div class="composer">Jana Alayra</div>
                    </div>
                    <div class="initial-key">
                        <div class="flavor-text">Initial Key</div>
                        <div class="letter">G</div>
                    </div>
                </div>
            </a>
        </li>
        <li>
            <a href="#">
                <div class="listSong">
                    <div class="leftTitle">
                        <div class="songtitle">Jesus I'm In</div>
                        <div class="composer">Jana Alayra</div>
                    </div>
                    <div class="initial-key">
                        <div class="flavor-text">Initial Key</div>
                        <div class="letter">G</div>
                    </div>
                </div>
            </a>
        </li>
        <li>
            <a href="#">
                <div class="listSong">
                    <div class="leftTitle">
                    <div class="songtitle">Firman-Mu P'lita Bagi Kakiku <span class="badge">New</span></div>
                    <div class="composer">Amy Grant & Michael W. Smith</div>
                    </div>
                    <div class="initial-key">
                        <div class="flavor-text">Initial Key</div>
                        <div class="letter">G</div>
                    </div>
                </div>
            </a>
        </li>
    </ul>
    <div id="myNav" class="overlay">
        <div class="overlay-content">
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Clients</a>
            <a href="#">Contact</a>
        </div>
    </div>
</div>

@endsection