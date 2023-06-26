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
    

</body>

</html>