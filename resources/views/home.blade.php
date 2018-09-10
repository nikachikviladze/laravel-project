@extends('layouts.app')
@section('stylesheet')
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.7/css/mdb.min.css" />

@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">ჩატარებული ტესტების სია:
                    <a style="float:right; padding: 8px;"class="btn btn-default" href="{{ url('exam?group=2') }}">გაიარეთ საგამოდო ტესტი</a>

                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @php $x=0@endphp

                    <ul class="list-group">
                        @if($results->isEmpty())
                            <div style="font-size: 17px; color: #222;">თქვენ არ გაქვთ გამოცდა გავლილი დაიწყეთ <a style="display: inline-block;" href="{{ url('tickets') }}">სწავლა</a> ჩვენთან</div>
                        @endif
                        @foreach($results as $result)
                            <a href="{{ url('test/'.$result->id) }}" style="color: #444;"><li class="list-group-item" style="@if($result->correct>=$result->correct+$result->wrong-3) background: #d0e1d0; @else  background:#eed4d6; @endif position: relative; padding: 25px;">
                                <span style="display: inline-block; font-size: 12px;">N{{ ++$x }}</span>
                                <span style="display: inline-block;">კატეგორია {{ $result->categorie->name }}</span>
                                <span style="float: right;">
                                {{-- <span class="badge badge-primary">გამოცდა დასრულდა:{{ $result->time }} წუთში</span> --}}
                                <span class="badge badge-success">{{ $result->correct }} სწორი პასუხი</span><br>
                                <span class="badge badge-danger">{{ $result->wrong }} არასწორი პასუხი</span>
                                <span class="badge badge-default" style="    position: absolute;left: 0;top: 0;background: #444 !important;color: #f4f2f2;">{{ Date::parse($result->created_at)->format('l j F Y') }} </span>
                                    
                                </span>
                            </li></a>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
