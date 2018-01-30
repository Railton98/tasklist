@extends('layouts.website')

@section('subtitle', 'Contato')

@section('content')

  <header class="pagehead">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Contato</h1>
          <p>Envie Sua Mensagem</p>
        </div>
      </div>
    </div>
  </header>

  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h2>Formulário</h2>
          <hr>
          <form action="{{ route('contact.send') }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
              <input type="text" name="name" placeholder="Nome:" class="form-control">
            </div>
            <div class="form-group">
              <input type="email" name="email" placeholder="E-mail:" class="form-control">
            </div>
            <div class="form-group">
              <input type="text" name="phone" placeholder="Telefone:" class="form-control">
            </div>
            <div class="form-group">
              <textarea name="message" rows="10" cols="30" class="form-control"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Enviar" class="btn btn-success">
            </div>
          </form>
        </div>
        <div class="col-md-6">
          <p>
            O trecho padrão original de Lorem Ipsum, usado desde o século XVI, está reproduzido abaixo para os interessados. Seções 1.10.32 e 1.10.33 de "de Finibus Bonorum et Malorum" de Cicero também foram reproduzidas abaixo em sua forma exata original, acompanhada das versões para o inglês da tradução feita por H. Rackham em 1914.
          </p>
        </div>
      </div>
    </div>
  </section>

@endsection
