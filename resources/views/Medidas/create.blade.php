@extends('adminlte::layouts.app')
@section('titulo_page')
@endsection
@section('content')


<form role="form" action="{{ route('Medidas.store') }}" method="POST">
    @csrf
    @include('Medidas.form')
    </div>
    <!-- /.card-body -->

   </form>
</div>
<script src="{{ URL::to('/js/Clientes/funciones.js') }}" defer></script>

@endsection
