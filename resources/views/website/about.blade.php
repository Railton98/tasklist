@extends('layouts.website')

@section('subtitle', 'Sobre')

@section('content')

  <header class="pagehead">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Sobre</h1>
          <p>Lorem Ipsum dotor some it.</p>
        </div>
      </div>
    </div>
  </header>

  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="">
            Nome: <b>{{ $teck['name'] }}</b> <br>
            E-mail: <b>{{ $teck['email'] }}</b> <br><br>
          </div>
          <p>O trecho padrão original de Lorem Ipsum, usado desde o século XVI, está reproduzido abaixo para os interessados. Seções 1.10.32 e 1.10.33 de "de Finibus Bonorum et Malorum" de Cicero também foram reproduzidas abaixo em sua forma exata original, acompanhada das versões para o inglês da tradução feita por H. Rackham em 1914.</p>
          <p>O trecho padrão original de Lorem Ipsum, usado desde o século XVI, está reproduzido abaixo para os interessados. Seções 1.10.32 e 1.10.33 de "de Finibus Bonorum et Malorum" de Cicero também foram reproduzidas abaixo em sua forma exata original, acompanhada das versões para o inglês da tradução feita por H. Rackham em 1914.</p>
          <p>O trecho padrão original de Lorem Ipsum, usado desde o século XVI, está reproduzido abaixo para os interessados. Seções 1.10.32 e 1.10.33 de "de Finibus Bonorum et Malorum" de Cicero também foram reproduzidas abaixo em sua forma exata original, acompanhada das versões para o inglês da tradução feita por H. Rackham em 1914.</p>
        </div>
        <div class="col-md-4 text-center">
          <img src="http://placehold.it/300x300" alt="">
        </div>
      </div>
    </div>
  </section>

  <section id="about-app">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1>Aplicativo Android</h1>
          <p>O trecho padrão original de Lorem Ipsum, usado desde o século XVI, está reproduzido abaixo para os interessados. Seções 1.10.32 e 1.10.33 de "de Finibus Bonorum et Malorum" de Cicero também foram reproduzidas abaixo em sua forma exata original, acompanhada das versões para o inglês da tradução feita por H. Rackham em 1914.</p>
          <a href="" class="btn btn-info">Baixar</a>
        </div>
      </div>
    </div>
  </section>

  <section id="about-instanceof">
    <div class="container">
      <div class="row">
        <div class="col-md-4 text-center">
          <img src="http://placehold.it/300x300" alt="">
        </div>
        <div class="col-md-8">
          <p>O trecho padrão original de Lorem Ipsum, usado desde o século XVI, está reproduzido abaixo para os interessados. Seções 1.10.32 e 1.10.33 de "de Finibus Bonorum et Malorum" de Cicero também foram reproduzidas abaixo em sua forma exata original, acompanhada das versões para o inglês da tradução feita por H. Rackham em 1914.</p>
          <a href="" class="btn btn-info">Baixar</a>
        </div>
      </div>
    </div>
  </section>

@endsection
