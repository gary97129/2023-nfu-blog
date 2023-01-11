@extends('layouts.master')
@section('active_create')
    style="font-weight: 1000"
@endsection
@section('content')
    <div class="container">
        <form action="{{route('store_create_data')}}" method="post">
            @csrf
            <div class="form-floating mt-5">
                <input name="title" class="form-control" id="floatingInput" required="required">
                <label for="floatingInput">標題</label>
            </div>
            <hr>
            <div class="form-floating">
                <textarea name="content" class="form-control" id="floatingTextarea" style="height: 300px;font-size: 1.7rem;" required="required"></textarea>
                <label for="floatingTextarea">內文</label>
            </div>
            <div class="text-end">
                <button type="submit" class="btn btn-success btn-lg mt-3">完成</button>
            </div>
        </form>
    </div>
@endsection
