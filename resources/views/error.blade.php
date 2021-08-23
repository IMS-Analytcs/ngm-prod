@extends('adminlte::page')

@section('title', 'Error')

@section('content_header')
@endsection

@section('content')
<section class="content mt-5">
        <div class="error-page mt-5">
        <h1 class="headline text-danger display-1 font-weight-bold mt-5">404</h1>
        <div class="error-content">
            <h2>
                <i class="fas fa-exclamation-triangle text-danger mr-2">
                </i> Ups! Página não encontrada.</h2>
          <h3>
            Não foi possível encontrar a página que você estava procurando.
          </h3>
          <h3>
          Enquanto isso, você pode retornar ao<a href="/dashboard"> Dashboard</a>.
          </h3>
        </div>
      </div>
    </section>
@endsection
