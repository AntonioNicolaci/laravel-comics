<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DC Comics</title>
    @vite('resources/scss/app.scss')
</head>

<body>
    <header>
        <img src="{{ Vite::asset('/resources/img/dc-logo.png') }}" alt="dc-logo">
        <div id="divButton">
            @foreach ($btnHeader as $btn) 
                <a>{{ $btn['name'] }}</a>
            @endforeach
        </div>
    </header>
    <main>
        <div id="jumbo"></div>
        <div id="tagMid">CURRENT SERIES</div>
        <div  id="divCard">
            @foreach ($comics as $comic)
                <div>
                    <img src="{{ $comic['thumb'] }}" :alt="{{ $comic['series'] }}">
                    <span>{{ $comic['series'] }}</span>
                </div>
            @endforeach
        </div>
        <a href="#">LOAD MORE</a>
    </main>
    <div id="linkBar">
        <div>
            <img src="{{ Vite::asset('/resources/img/buy-comics-digital-comics.png') }}" alt="dicital-comics">
            DIGITAL COMICS
        </div>
        <div>
            <img src="{{ Vite::asset('/resources/img/buy-comics-merchandise.png') }}" alt="merchandise">
            DC MERCHANDISE
        </div>
        <div>
            <img src="{{ Vite::asset('/resources/img/buy-comics-subscriptions.png') }}" alt="subscriptions">
            SUBSCRIPTION
        </div>
        <div>
            <img src="{{ Vite::asset('/resources/img/buy-comics-shop-locator.png') }}" alt="shop-lacator">
            COMIC SHOP LOCATOR
        </div>
        <div>
            <img src="{{ Vite::asset('/resources/img/buy-dc-power-visa.svg') }}" alt="power-visa">
            DC POWER VISA
        </div>
    </div>
    <footer>
        <div id="mainFooter">
            <div id="linkFooter">
                <div>
                    <h3>DC COMICS</h3>
                    <a href="#">Characters</a>
                    <a href="#">Comics</a>
                    <a href="#">Movie</a>
                    <a href="#">TV</a>
                    <a href="#">Games</a>
                    <a href="#">Videos</a>
                    <a href="#">News</a>
                </div>
                <div>
                    <h3>SHOP</h3>
                    <a href="#">Shop DC</a>
                    <a href="#">Shop DC collectibles</a>
                </div>
                <div>
                    <h3>DC</h3>
                    <a href="#">Terms Of Use</a>
                    <a href="#">Privacy policy (New)</a>
                    <a href="#">Ad Choices</a>
                    <a href="#">Advertising</a>
                    <a href="#">Jobs</a>
                    <a href="#">Subscriptions</a>
                    <a href="#">Talent Workshops</a>
                    <a href="#">CPSC Certificates</a>
                    <a href="#">Ratings</a>
                    <a href="#">Shop Help</a>
                    <a href="#">Contact US</a>
                </div>
                <div>
                    <h3>SITES</h3>
                    <a href="#">DC</a>
                    <a href="#">MAD Magazine</a>
                    <a href="#">DC Kids</a>
                    <a href="#">DC Universe</a>
                    <a href="#">DC Power Visa</a>
                </div>
            </div>
            <img src="/resources/img/dc-logo-bg.png" alt="DC_logo">
        </div>
            
        <div id="signUp">
            <a href="#">SIGN-UP</a>
            <div>
                <span>FOLLOW US</span>
                <img src="{{ Vite::asset('/resources/img/footer-facebook.png') }}" alt="facebook">
                <img src="{{ Vite::asset('/resources/img/footer-twitter.png') }}" alt="twitter">
                <img src="{{ Vite::asset('/resources/img/footer-youtube.png') }}" alt="youtube">
                <img src="{{ Vite::asset('/resources/img/footer-pinterest.png') }}" alt="pinteret">
                <img src="{{ Vite::asset('/resources/img/footer-periscope.png') }}" alt="periscope">
            </div>
        </div>
    </footer> 
</body>

</html>