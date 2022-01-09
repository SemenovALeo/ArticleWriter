<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Пример на bootstrap 5: Заголовки, - брендинг, навигация, поиск · Версия v5.1.3">
    <title>Блог</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
        .card{
            height: 100%;
        }

         .img-right {
             margin: 0 0 10px 20px;
             padding: 5px;
             float: left;
         }

    </style>
</head>
<body>

<main>
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
                <span class="fs-4">Личный блог</span>
            </a>
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a href="{{route('index')}}" class="nav-link {{active_link('index')}}" aria-current="page">{{__('Главная')}}</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('articles')}}" class="nav-link {{active_link('articles')}} {{active_link('articlesOne')}} ">{{__('Каталог статей')}}</a>
                </li>
            </ul>
        </header>

        @yield('content')
    </div>
</main>


<div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <p class="col-md-4 mb-0 text-muted"> Личный блог</p>

        <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
        </a>

        <ul class="nav col-md-4 justify-content-end">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
        </ul>
    </footer>
</div>

</body>
</html>
