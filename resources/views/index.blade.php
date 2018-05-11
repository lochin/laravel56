<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <div class="container">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a class="navbar-brand" href="#">@lang('page.brand')</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="#">@lang('page.home')</a>
                    <a class="nav-item nav-link" href="#">@lang('page.services')</a>
                    <a class="nav-item nav-link" href="#">@lang('page.about')</a>
                    <a class="nav-item nav-link" href="#">@lang('page.contact')</a>
                </div>
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link {{ App::isLocale('en') ? "active" : "" }}" href="{{ route('home', ['locale' => "en"]) }}">Eng</a>
                    <a class="nav-item nav-link {{ App::isLocale('uz') ? "active" : "" }}" href="{{ route('home', ['locale' => "uz"]) }}">Uzb</a>
                    <a class="nav-item nav-link {{ App::isLocale('ru') ? "active" : "" }}" href="{{ route('home', ['locale' => "ru"]) }}">Rus</a>
                </div>
            </div>
        </nav>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>