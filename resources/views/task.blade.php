<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        


{{-- --}}
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
{{-- CSS CDN линк для карты --}}
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin="" />
{{-- --}}
<script src="{{asset('js/ajax.js')}}"></script>
<script src="{{asset('js/game.js')}}"></script>
</head>

<body>
    <div class="jumbotron">
        <h1 class="display-4">Вопрос</h1>
        <p class="lead">{{$task->question}}</p>
        <hr class="my-4">
        {{--  <p>Использются служебные классы для типографики и расстояния содержимого в контейнере большего размера.</p>  --}}
        
        <p class="lead">
            <form action="{{ url('/checkanswer') }}" method="GET">
                <div class="container" style="margin-top: 40px">
                  <div class="input-group mb-3">
                    <input name="code" type="text" class="form-control" placeholder="Введите ответ" aria-label="Спрятанный код" aria-describedby="button-addon2">
                    <div class="input-group-append">
                      <button class="btn btn btn-info" type="submit" id="button-addon2">Проверить</button>
                    </div>
                  </div>
                </div>
              </form>
        </p>
      </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>


     {{-- --}}
    {{-- CDN Скрипт КАРТЫ --}}
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>
    {{-- СКРИПТ ДЛЯ КАРТЫ --}}
    <script type="text/javascript" src="{{ asset('js/map.js') }}"></script>
    {{-- --}}



    

</body>

</html>
