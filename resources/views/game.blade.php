<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KVEST</title>
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
  {{--  <div class="container-fluid">  --}}
    @if (isset($game))

      
      <table class="table table-hover table-bordered" style="background-color: white">
        <thead class="thead-dark ">
          <tr>
              {{--  @foreach ($game-> as $item)
                  
              @endforeach  --}}
            <th scope="col">Текущий счет:</th>
            <th scope="col">Текущее задание</th>
            <th scope="col">Выполненые задания</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>{{$game->score}}</td>
            <td><button type="button" class="btn btn btn-info" data-toggle="modal" data-target="#exampleModal">
                Информация
              </button></td>
            <td>{{implode($game->passed)}}</td>
          </tr>
        </tbody>
      </table>
    @else
        <div>
            <p>Ой, что-то пошло не так!</p>
        </div>
    @endif
  {{--  </div>  --}}
<form action="{{ url('/checkcode') }}" method="GET">
  <div class="container" style="margin-top: 40px">
    <div class="input-group mb-3">
      <input name="code" type="text" class="form-control" placeholder="Введите спрятанный код" aria-label="Спрятанный код" aria-describedby="button-addon2">
      <div class="input-group-append">
        <button class="btn btn btn-info" type="submit" id="button-addon2">Проверить</button>
      </div>
    </div>
  </div>
</form>

  <div class="container">
    <div class="center">
      <div id="mapid" class="map"></div>
  </div>
  </div>

  
<div class="container-fliud" style="padding-bottom: 10px">
  <a href="#"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#MyModal">
    Правила игры
  </button></a>
  <button type="button" class="btn btn-light" onclick="EndGame();">
    Закончить игру
   </button>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
           Полезная информация
    </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Общая информация:{{$marker->info}}
        <br>
        Адрес:{{$marker->adress}}
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
        {{--  <button type="button" class="btn btn-primary">Save changes</button>  --}}
      </div>
    </div>
  </div>
</div>




<div class="modal fade" id="MyModal" tabindex="-1" role="dialog" aria-labelledby="My" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="my">
           Правила игры
    </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body bd-example-modal-lg">
        Перед вами меню игры. Здесь указана ваша цель, полезная информая о ней, текущий счет и пройденные задания. <br>
        Чтобы продвинуться дальше, вам потребуется отыскать скрытый код, расположенный где-то на вашей цели. 
        После этого, вы должны ответить на вопрос. 
        Если сможете ответить правильно, то продвинетесь дальше. <br>
        Удачи!
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
        {{--  <button type="button" class="btn btn-primary">Save changes</button>  --}}
      </div>
    </div>
  </div>
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



    <script>
      var mymap = L.map('mapid').setView([54.514638, 36.255683], 13);

L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
  attribution: '© <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
}).addTo(mymap);

var marker = L.marker([{{$marker->coord}}]).addTo(mymap);    

{{--  var popup{{$item->id}} = L.popup();

function MarkClick_{{$item->id}}(e) {
  popup{{$item->id}}
      .setLatLng(e.latlng)
      .setContent("{{$item->info}}\n" +
          "{{$item->adress}}")
      .openOn(mymap);
}  --}}
{{--  marker{{$item->id}}.on('click', MarkClick_{{$item->id}});  --}}






  </script>

  <script type="text/javascript">
    $(window).on('load',function(){
        $('#MyModal').modal('show');
    });
    $( "#close" ).click(function() {
      $('#myModal').modal('dispose');
    });
</script>
</body>

</html>
