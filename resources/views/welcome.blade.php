@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Главная</h1>
@stop

@section('content')
<a class="btn btn-primary" href="{{ url('add') }}">
  Добавить
</a>
<table id="table_id" class="display">
    <thead>
        <tr>
            <th>#</th>
            <th>Название</th>
            <th>Картинка</th>
            <th>Ссылка</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($link as $item)
        <tr>
            <td>{{ $loop->index + 1 }}</td>
            <td>{{ $item->title }}</td>
            <td><img src="{{ $item->image }}" alt="" width="100"></td>
            <td>{{ $item->link }}</td>
            <td>
                <a href="{{ url('remove',$item->id) }}" style="color:red;text-decoration:underline;">Удалить</a>
            </td>
        </tr>
        @endforeach
      
    </tbody>
</table>

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

