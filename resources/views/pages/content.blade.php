@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="m-3 text-end">
            <button class="btn btn-outline-success" onclick=update_data({{$data->id}})>修改</button>
            <button class="btn btn-outline-danger" onclick=delete_data({{$data->id}})>刪除</button>
        </div>
        <div class="display-3" style="word-break: break-all">{{$data->title}}</div>
        <div class="col-8 text-muted mt-2">修改時間：{{$data->updated_at}}</div>
        <hr>
        <div style="font-size: 1.7rem; font-weight: 300;word-break: normal">{{$data->content}}</div>
    </div>
    <script>
        function delete_data(id) {
            window.location.href = `{{route('delete_data')}}?id=${id}`;
        }
        function update_data(id) {
            window.location.href = `{{route('get_update_page')}}?id=${id}`;
        }
    </script>
@endsection
