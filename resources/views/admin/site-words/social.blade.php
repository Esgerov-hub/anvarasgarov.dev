@extends('admin.layouts.app')

@section('admin.css')
    <style>
        body {
            background-color: #fafafa;
        }

        .container {
            margin: 150px auto;
        }

        input[lang="ru"] {
            display: none
        }

        label[lang="ru"] {
            display: none
        }
    </style>
@endsection
@section('admin.content')
    <div class="page-content">
        <div class="container-fluid">
            @if ( Session::get('errors'))
                <div class="col-12 mt-1">
                    <div class="alert alert-danger" role="alert">
                        <div class="alert-body">{{ Session::get('errors') }}</div>
                    </div>
                </div>
            @endif
            @if (Session::get('success'))
                <div class="col-12 mt-1">
                    <div class="alert alert-success" role="alert">
                        <div class="alert-body">{{ Session::get('success') }}</div>
                    </div>
                </div>
            @endif
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title-desc">Az</h4>
                            <form action="{{ route('admin.social.update','az') }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="mb-3 row">
                                    @if(!empty($siteStatisticsData[0]))
                                    @foreach($siteStatisticsData as $key => $data)
                                        <label>{{$key}}</label>
                                        <div class="col-md-3">
                                            <input class="form-control" type="text" name="{{$key}}" value="{!! $data !!}" id="input">
                                        </div>
                                        </br> </br> </br>
                                    @endforeach
                                    @endif
                                    <div class="mb-3 row  mt-4">
                                        <div class="col-md-" dir="ltr">
                                            <button class="btn btn-success" type="submit">Yadda Saxla</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('admin.js')

@endsection
