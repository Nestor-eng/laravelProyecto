@extends('adminlte::layouts.app')
@section('titulo_page')
@endsection
@section('content')


<form role="form" action="{{ route('Clientes.store') }}" method="POST">
    @csrf
    @include('Clientes.form')
    </div>
    <!-- /.card-body -->

   </form>
</div>
<script src="{{ URL::to('/js/Clientes/funciones.js') }}" defer></script>

@endsection
