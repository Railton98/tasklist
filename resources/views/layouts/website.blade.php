<!doctype html>
<html>

  @include('partials.head')

  <body>

    @include('partials.nav')

    <!-- Conteúdo Variavel - Início -->
    @yield('content')
    <!-- Conteúdo Variavel - Fim -->

    @include('partials.footer')

    @include('partials.scripts')

  </body
</html>
