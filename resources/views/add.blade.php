@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Добавить </h1>
@stop

@section('content')

<form action="{{ route('add_action') }}" method="POST">
    @csrf
  <div class="mb-3">
    <label class="form-label">Название</label>
    <input type="text" class="form-control" name="title">
    
  </div>
  <div class="mb-3">
    <label class="form-label">Ссылка</label>
    <input type="text" class="form-control" name="link">
    
  </div>
  <button type="submit" class="btn btn-primary">Отправить</button>
</form>

@stop

@section('css')

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
@stop

@section('js')
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready( function () {
    $('#table_id').DataTable();
} );
    </script>


@stop

