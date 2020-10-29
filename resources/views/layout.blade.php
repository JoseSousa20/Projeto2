<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8"/>
      <title>@yield('titulo')</title>
      <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    </head>
    <body>
       <h1 style="color: #00ff88">@yield('header')</h1>
       @yield('conteudo')
       <div class="menu-rodape">
            
            <a href="{{route('livros.index')}}"><i class="far fa-arrow-alt-circle-right"></i>livros</a>
            <br>
            <a href="{{route('autores.index')}}"><i class="far fa-arrow-alt-circle-right"></i>Autores</a>
            <br>
            <a href="{{route('editoras.index')}}"><i class="far fa-arrow-alt-circle-right"></i>Editoras</a>
            <br>
            <a href="{{route('generos.index')}}"><i class="far fa-arrow-alt-circle-right"></i>Generos</a>
            <br>
        </div>
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/all.min.js')}}"></script>
    </body>
</html>