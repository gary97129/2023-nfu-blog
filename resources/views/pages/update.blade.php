@extends('layouts.master')
@section('content')
    <div class="container">
        <form action="{{route('store_update_data')}}" method="post">
            @csrf
            <div class="form-floating mt-5">
                <input name="title" class="form-control" id="floatingInput" required="required" value="{{$data->title}}">
                <label for="floatingInput">標題</label>
            </div>
            <hr>
            <div class="form-floating">
                <textarea name="content" class="form-control" id="floatingTextarea" required="required" style="height: 300px;font-size: 1.7rem;">{{$data->content}}</textarea>
                <label for="floatingTextarea">內文</label>
            </div>
            <div class="text-end">
                <button type="submit" class="btn btn-success btn-lg mt-3">完成</button>
            </div>
            <input name="id" type="hidden" value="{{$data->id}}">
        </form>
    </div>
@endsection
