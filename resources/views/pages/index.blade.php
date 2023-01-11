@extends('layouts.master')
@section('active_index')
    style="font-weight: 1000"
@endsection
@section('content')
<div class="container">
    <H1 class="text-center m-5">我的備忘錄</H1>
    @foreach($data as $row)
         <div type="button" class="card mt-3" onclick=data({{$row->id}})>
                <div class="card-body">
                    <div class="row">
                        <div class="col-8 text-truncate">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>
                                            <h4 class="text-primary">{{$loop->iteration}}.</h4>
                                        </td>
                                        <td>
                                            <h4>{{$row->title}}</h4>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-4 text-end">
                            最後更新：{{$row->updated_at}}
                        </div>
                    </div>
                </div>
         </div>
    @endforeach
</div>

<script>
    function data(id) {
        window.location.href = `{{route('get_content_page')}}?id=${id}`;
    }
</script>
@endsection
