<!DOCTYPE HTML>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KALUGA KVEST</title>
    {{-- --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- CSS CDN линк для карты --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />
    {{-- --}}
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
    <noscript>
        <link rel="stylesheet" href="{{ asset('assets/css/noscript.css') }}" />
    </noscript>

    <script src="{{asset('js/ajax.js')}}"></script>
    <script src="{{asset('js/game.js')}}"></script>

</head>

<body class="is-preload">

    <!-- Header -->
    <section id="header">
        <header>
            <h1>ОДЕРЖИМАЯ КАЛУГА</h1>
            <p>Онлайн-квест by Orijinx</p>
        </header>
        <footer>
            <a href="#banner" class="button style2 scrolly-middle">Перейти к игре</a>
        </footer>
    </section>

    <!-- Banner -->
    <section id="banner">
        <header>
            <h2>НА КАРТЕ</h2>
        </header>

        <div class="center">
            <div id="mapid" class="map"></div>
        </div>

        <footer>
            @if (isset($game))
            <a href="/game"><button class="button style2 scrolly">Вернуться к игре</button></a>    
            @else
            <button class="button style2 scrolly" onclick="StartGame();">Начать игру!</button>   
            @endif
           
        </footer>
    </section>

    {{--  <!-- Feature 1 -->
    <article id="first" class="container box style1 right">
        <a href="#" class="image fit"><img src="{{ asset('images/pic01.jpg') }}" alt="" /></a>
        <div class="inner">
            <header>
                <h2>Lorem ipsum<br />
                    dolor sit amet</h2>
            </header>
            <p>Tortor faucibus ullamcorper nec tempus purus sed penatibus. Lacinia pellentesque eleifend vitae est elit
                tristique velit tempus etiam.</p>
        </div>
    </article>

    <!-- Feature 2 -->
    <article class="container box style1 left">
        <a href="#" class="image fit"><img src="{{ asset('images/pic02.jpg') }}" alt="" /></a>
        <div class="inner">
            <header>
                <h2>Mollis posuere<br />
                    lectus lacus</h2>
            </header>
            <p>Rhoncus mattis egestas sed fusce sodales rutrum et etiam ullamcorper. Etiam egestas scelerisque ac duis
                magna lorem ipsum dolor.</p>
        </div>
    </article>

    <!-- Portfolio -->
    <article class="container box style2">
        <header>
            <h2>Magnis parturient</h2>
            <p>Justo phasellus et aenean dignissim<br />
                placerat cubilia purus lectus.</p>
        </header>
        <div class="inner gallery">
            <div class="row gtr-0">
                <div class="col-3 col-12-mobile"><a href="{{ asset('images/fulls/01.jpg') }}" class="image fit"><img
                            src="{{ asset('images/thumbs/01.jpg') }}" alt="" title="Ad infinitum" /></a></div>
                <div class="col-3 col-12-mobile"><a href="{{ asset('images/fulls/02.jpg') }}" class="image fit"><img
                            src="{{ asset('images/thumbs/02.jpg') }}" alt="" title="Dressed in Clarity" /></a></div>
                <div class="col-3 col-12-mobile"><a href="{{ asset('images/fulls/03.jpg') }}" class="image fit"><img
                            src="{{ asset('images/thumbs/03.jpg') }}" alt="" title="Raven" /></a></div>
                <div class="col-3 col-12-mobile"><a href="{{ asset('images/fulls/04.jpg') }}" class="image fit"><img
                            src="{{ asset('images/thumbs/04.jpg') }}" alt=""
                            title="I'll have a cup of Disneyland, please" /></a></div>
            </div>
            <div class="row gtr-0">
                <div class="col-3 col-12-mobile"><a href="{{ asset('images/fulls/05.jpg') }}" class="image fit"><img
                            src="{{ asset('images/thumbs/05.jpg') }}" alt="" title="Cherish" /></a></div>
                <div class="col-3 col-12-mobile"><a href="{{ asset('images/fulls/06.jpg') }}" class="image fit"><img
                            src="{{ asset('images/thumbs/06.jpg') }}" alt="" title="Different." /></a></div>
                <div class="col-3 col-12-mobile"><a href="{{ asset('images/fulls/07.jpg') }}" class="image fit"><img
                            src="{{ asset('images/thumbs/07.jpg') }}" alt="" title="History was made here" /></a></div>
                <div class="col-3 col-12-mobile"><a href="{{ asset('images/fulls/08.jpg') }}" class="image fit"><img
                            src="{{ asset('images/thumbs/08.jpg') }}" alt=""
                            title="People come and go and walk away" /></a></div>
            </div>
        </div>
    </article>

    <!-- Contact -->
    <article class="container box style3">
        <header>
            <h2>Nisl sed ultricies</h2>
            <p>Diam dignissim lectus eu ornare volutpat orci.</p>
        </header>
        <form method="post" action="#">
            <div class="row gtr-50">
                <div class="col-6 col-12-mobile"><input type="text" class="text" name="name" placeholder="Name" /></div>
                <div class="col-6 col-12-mobile"><input type="text" class="text" name="email" placeholder="Email" />
                </div>
                <div class="col-12">
                    <textarea name="message" placeholder="Message"></textarea>
                </div>
                <div class="col-12">
                    <ul class="actions">
                        <li><input type="submit" value="Send Message" /></li>
                    </ul>
                </div>
            </div>
        </form>
    </article>

    <!-- Generic -->
    <!--
   <article class="container box style3">
    <header>
     <h2>Generic Box</h2>
     <p>Just a generic box. Nothing to see here.</p>
    </header>
    <section>
     <header>
      <h3>Paragraph</h3>
      <p>This is a subtitle</p>
     </header>
     <p>Phasellus nisl nisl, varius id <sup>porttitor sed pellentesque</sup> ac orci. Pellentesque
     habitant <strong>strong</strong> tristique <b>bold</b> et netus <i>italic</i> malesuada <em>emphasized</em> ac turpis egestas. Morbi
     leo suscipit ut. Praesent <sub>id turpis vitae</sub> turpis pretium ultricies. Vestibulum sit
     amet risus elit.</p>
    </section>
    <section>
     <header>
      <h3>Blockquote</h3>
     </header>
     <blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget.
     tempus euismod. Vestibulum ante ipsum primis in faucibus.</blockquote>
    </section>
    <section>
     <header>
      <h3>Divider</h3>
     </header>
     <p>Donec consectetur <a href="#">vestibulum dolor et pulvinar</a>. Etiam vel felis enim, at viverra
     ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel. Praesent nec orci
     facilisis leo magna. Cras sit amet urna eros, id egestas urna. Quisque aliquam
     tempus euismod. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
     posuere cubilia.</p>
     <hr />
     <p>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra
     ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel. Praesent nec orci
     facilisis leo magna. Cras sit amet urna eros, id egestas urna. Quisque aliquam
     tempus euismod. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
     posuere cubilia.</p>
    </section>
    <section>
     <header>
      <h3>Unordered List</h3>
     </header>
     <ul>
      <li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
      <li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
      <li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
      <li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
     </ul>
    </section>
    <section>
     <header>
      <h3>Ordered List</h3>
     </header>
     <ol>
      <li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
      <li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
      <li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
      <li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
     </ol>
    </section>
    <section>
     <header>
      <h3>Table</h3>
     </header>
     <div class="table-wrapper">
      <table>
       <thead>
        <tr>
         <th>ID</th>
         <th>Name</th>
         <th>Description</th>
         <th>Price</th>
        </tr>
       </thead>
       <tbody>
        <tr>
         <td>45815</td>
         <td>Something</td>
         <td>Ut porttitor sagittis lorem quis nisi ornare.</td>
         <td>29.99</td>
        </tr>
        <tr>
         <td>24524</td>
         <td>Nothing</td>
         <td>Ut porttitor sagittis lorem quis nisi ornare.</td>
         <td>19.99</td>
        </tr>
        <tr>
         <td>45815</td>
         <td>Something</td>
         <td>Ut porttitor sagittis lorem quis nisi ornare.</td>
         <td>29.99</td>
        </tr>
        <tr>
         <td>24524</td>
         <td>Nothing</td>
         <td>Ut porttitor sagittis lorem quis nisi ornare.</td>
         <td>19.99</td>
        </tr>
       </tbody>
       <tfoot>
        <tr>
         <td colspan="3"></td>
         <td>100.00</td>
        </tr>
       </tfoot>
      </table>
     </div>
    </section>
    <section>
     <header>
      <h3>Form</h3>
     </header>
     <form method="post" action="#">
      <div class="row">
       <div class="col-6 col-12-mobile">
        <input class="text" type="text" name="name" id="name" value="" placeholder="John Doe" />
       </div>
       <div class="col-6 col-12-mobile">
        <input class="text" type="text" name="email" id="email" value="" placeholder="johndoe@domain.tld" />
       </div>
       <div class="col-12">
        <select name="department" id="department">
         <option value="">Choose a department</option>
         <option value="1">Manufacturing</option>
         <option value="2">Administration</option>
         <option value="3">Support</option>
        </select>
       </div>
       <div class="col-12">
        <input class="text" type="text" name="subject" id="subject" value="" placeholder="Enter your subject" />
       </div>
       <div class="col-12">
        <textarea name="message" id="message" placeholder="Enter your message"></textarea>
       </div>
       <div class="col-12">
        <ul class="actions">
         <li><input type="submit" value="Submit" /></li>
         <li><input type="reset" class="style3" value="Clear Form" /></li>
        </ul>
       </div>
      </div>
     </form>
    </section>
   </article>  --}}


    <section id="footer" style="padding-bottom: 50px">
        <ul class="icons">
            <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="icon brands fa-google-plus-g"><span class="label">Google+</span></a></li>
            <li><a href="#" class="icon brands fa-pinterest"><span class="label">Pinterest</span></a></li>
            <li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
            <li><a href="#" class="icon brands fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
        </ul>
        <div class="copyright">
            <ul class="menu">
                {{--  <li>&copy; Untitled. All rights reserved.</li>  --}}
                <li>Programming by: <a href="http://html5up.net">ORIJINX</a></li>
            </ul>
        </div>
    </section>


    {{-- --}}
    {{-- CDN Скрипт КАРТЫ --}}
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>
    {{-- СКРИПТ ДЛЯ КАРТЫ --}}
    <script type="text/javascript" src="{{ asset('js/map.js') }}"></script>
    {{-- --}}
    <!-- Scripts -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.scrolly.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.poptrox.min.js') }}"></script>
    <script src="{{ asset('assets/js/browser.min.js') }}"></script>
    <script src="{{ asset('assets/js/breakpoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/util.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>



    <script>
        var mymap = L.map('mapid').setView([54.514638, 36.255683], 13);

L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    attribution: '© <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
}).addTo(mymap);

{{-- var json = SendDataWithResponse('http://hakkaton/startgame');
alert(json);
var pars = JSON.parse(json);

alert(pars.adress); --}}
@foreach ($markers as $item)
var marker{{$item->id}} = L.marker([{{$item->coord}}]).addTo(mymap);    

var popup{{$item->id}} = L.popup();

function MarkClick_{{$item->id}}(e) {
    popup{{$item->id}}
        .setLatLng(e.latlng)
        .setContent("{{$item->info}}\n" +
            "{{$item->adress}}")
        .openOn(mymap);
}
marker{{$item->id}}.on('click', MarkClick_{{$item->id}});

@endforeach




    </script>
</body>

</html>
