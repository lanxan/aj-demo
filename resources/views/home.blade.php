@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
    <h3>今日星座運勢</h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">星座名稱</th>
                <th scope="col">綜合</th>
                <th scope="col">說明</th>
                <th scope="col">愛情</th>
                <th scope="col">說明</th>
                <th scope="col">事業</th>
                <th scope="col">說明</th>
                <th scope="col">財運</th>
                <th scope="col">說明</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($list as $data)
                <tr>
                    <th scope="row">{{ $data->name }}</th>
                    <td>{{ $data->all }}</td>
                    <td>{{ $data->all_desc }}</td>
                    <td>{{ $data->love }}</td>
                    <td>{{ $data->love_desc }}</td>
                    <td>{{ $data->business }}</td>
                    <td>{{ $data->business_desc }}</td>
                    <td>{{ $data->money }}</td>
                    <td>{{ $data->money_desc }}</td>
                </tr> 
            @endforeach
        </tbody>
    </table>
</div>
@endsection
