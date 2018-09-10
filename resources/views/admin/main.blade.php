@extends('admin.master')
@section('content')

          <!-- top tiles -->
          <!-- page content -->
            <!-- top tiles -->
            <div class="row tile_count">
              <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                <span class="count_top"><i class="fa fa-list"></i>მომხმარებლები</span>
                <div class="count">{{ $users }}</div>
              </div>
              <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> ქალები</span>
                <div class="count">{{ $fmales }}</div>
              </div>
              <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> კაცები</span>
                <div class="count">{{ $mens }}</div>
              </div>
              <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> ჩაბარებული გამოცდა</span>
                <div class="count green">{{ $tests }}</div>
              </div>
              <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> არასწორი პასუხი</span>
                <div class="count red">{{ $wrong }}</div>
              </div>
              <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                <span class="count_top"><i class="fa fa-photo"></i> დღეს მოწერილი </span>
                <div class="count blue">{{ $results }}</div>
              </div>
            </div>
            <!-- /top tiles -->
          <!-- /top tiles -->

          <div class="row">


            <div class="col-md-5 col-sm-6 col-xs-12">
              <div class="x_panel tile fixed_height_320">
                <div class="x_title">
                  <h2>მთავარი ფუნქციები</h2>
                  
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <a href="{{url('admin/images/create')}}" class="btn btn-primary btn-block">ფოტოების ატვირთვა</a>
                  <a href="{{url('admin/blog/create')}}" class="btn btn-success btn-block">  ბლოგის დამატება</a>
                  <a href="{{url('admin/gallery')}}" class="btn btn-warning btn-block">  ახალი ალბომის დამატება</a>
                </div>

              </div>
            </div>


            <div class="col-md-7 col-sm-6 col-xs-12">
              <div class="x_panel tile" >
                <div class="x_title">
                  <h2>დარეგისტრირების მსურველები</h2>
                  
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <ul class="list-group" style="max-height: 300px; overflow-y: scroll;">
                      @foreach($registers as $r)
                        <li class="list-group-item" @if(date('Y-m-d') ==  $r->created_at->format('Y-m-d')) style="background: #94c494;color: #000;" @endif>
                          @if(date('Y-m-d') ==  $r->created_at->format('Y-m-d'))
                          <span style="float: right;" class="badge">დღეს</span>
                          @endif
                          
                          <div>სახელი:{{ $r->name }}</div>
                          <div>ტელეფონი:{{ $r->phone }}</div>
                          <div>მეილი:{{ $r->email }}</div>
                          <div>სასურველი დრო:{{ $r->time }}</div>
                          <div>სასურველი დღე:{{ $r->day }}</div>
                          <div>კურსი:{{ $r->curse }}</div>
                          <div>ტიპი:{{ $r->type }}</div>

                        </li>
                        @endforeach
                  </ul>
                </div>

              </div>
            </div>

          </div>
          <br />

         
@endsection