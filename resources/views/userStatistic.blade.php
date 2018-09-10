@extends('layouts.app')
@section('stylesheet')
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.7/css/mdb.min.css" />
 <style>
     .result{
        float: right; color: #222!important ; font-size: 17px; font-weight: 700;
     }
 </style>

@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">პირადი სტატისტიკა:
                    <a style="float:right; padding: 8px;"class="btn btn-default" href="{{ url('exam') }}">გაიარეთ საგამოდო ტესტი</a>

                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <ul class="list-group">
                        @if($record==null)
                        <li class="list-group-item">თქვენ არ გაგივლიათ გამოცდა, დაიწყეთ პირადი სტატისტიკის შექმნა</li>
                        @else


                        

                        {{-- <li style="cursor: pointer;     box-shadow: 1px 1px 1px 1px rgba(214, 214, 214, .6);border: 1px solid silver;" class="list-group-item" data-toggle="modal" data-target="#exampleModal10000"> საკითხები რომლებიც ყველაზე მეტად გიჭირს</li>

                        <div class="modal fade" id="exampleModal10000" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel" style="font-weight: 700;">დაშვებული შეცდომები თემების მიხედვით:</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                               <ul class="list-group">
                                    @if($themes==null)
                                        <li><span style="color: green;">გილოცავთ, თქვენ იდეალურად ფლობთ საკითხებს, შეცდომა არ დაგიშვიათ!</span></li>

                                    @else
                                       @foreach($themes as $key=> $v)
                                        <li class="list-group-item">  {{  App\Theme::find($themes[$key][0]['theme_id'])->name }} <span>{{ intval(count($v)*100/$count ) }}%</span> <span style="color: red; float: right; font-weight: 700;">  შეცდომა:{{ count($v) }}</span></li>
                                       @endforeach
                                   @endif
                                </ul>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">დახურვა</button>
                              </div>
                            </div>
                          </div>
                        </div>  --}}
                        <li class="list-group-item">დარეგისტრირების დრო: <span class="badge badge-default  result" >{{ Date::parse($user)->format('l j F Y') }}</span></li>
                        <li class="list-group-item">ჩატარებული ბილეთების რაოდენობა: <span class="badge badge-default  result" >{{ $userTickets }}</span></li>
                        <li class="list-group-item">წარმატებით გავლილი ბილეთების რაოდენობა:  <span class="badge badge-success result" >{{ $win }}</span></li>
                        <li class="list-group-item">ჩაჭრილი ბილეთების რაოდენობა:  <span class="badge badge-danger result" >{{ $looser }}</span></li>
                        <li class="list-group-item">სწორად გაცემულული პასუხების რაოდენობა:  <span class="badge badge-success result" >{{ $correct }}</span></li>
                        <li class="list-group-item">არასწორი პასუხების რაოდენობა:  <span class="badge badge-danger result" >{{ $wrong }}</span></li>
                        <li class="list-group-item" >რეკორდი:  <span class="badge result" style="border: 1px solid #898989;"><a href="{{ url('test/'. $record->id) }}">{{ Date::parse($record->created_at)->format('l j F Y') }} / დრო:{{ $record->time }}</a></span></li>@endif


                    </ul>
                </div>
            </div>

            @if($themes!=null)

            <div class="card" style="margin-top: 2rem;">
                <div class="card-header" style="color: red; font-weight: 700;">საკითხები რომლებიც ყველაზე მეტად გიჭირს:</div>

                <div class="card-body">                    
                    <ul class="list-group">
                      @foreach($themes as $key=> $v)
                       <li class="list-group-item" style="font-weight: 700;">  {{  App\Theme::find($themes[$key][0]['theme_id'])->name }} <span class="badge badge-default  result">{{ intval(count($v)*100/$count ) }}%</span> <span style="color: red; float: right; font-weight: 700;">  <span class="badge badge-danger result" >შეცდომა:{{ count($v) }}</span></span></li>
                      @endforeach
                    </ul>
                </div>
            </div>

            @endif


        </div>
    </div>
</div>
@endsection
