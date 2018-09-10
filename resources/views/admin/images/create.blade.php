@extends('admin/master')
@section('stylesheet')

@endsection
@section('content')

    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>ფოტოების ატვირთვა</h3>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2><i class="fa fa-bars"></i>ფოტო</h2>
              
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              @include('admin.layouts.messages')

              <div class="" role="tabpanel" data-example-id="togglable-tabs">

                {!! Form::open(['action'=>'Admin\ImagesController@store', 'method'=>'post', 'class'=>'form-horizontal form-label-left', 'files'=>true])!!}
                 <br>
                 <div class="clearfix"></div>
                 
                 <div class="form-group">
                    <label class="control-label col-md-1 col-sm-1 col-xs-12">ალბომი</label>
                    <div class="col-md-11 col-sm-11 col-xs-12">
                      <select name="album_id" class="form-control">
                        <option disabled selected>აირჩიეთ შესაბამისი ალბომი</option>
                        @foreach($albums as $album)
                        <option value="{{ $album->id }}">{{ $album->name }}</option>
                        @endforeach
                      </select>
                    </div>
                    
                  </div>
                 <div class="item form-group">
                   <label class="control-label col-md-1 col-sm-1 col-xs-12" for="textarea">ფაილი<code>*</code>
                   </label>
                   <div class="col-md-11 col-sm-11 col-xs-12">
                     <input type="file" name="file[]" multiple>
                   </div>
                 </div>
                  <div class="ln_solid"></div>
                  <div class="form-group">
                    <div class="pull-right">
                      <button id="send" type="submit" class="btn btn-success">გაგზავნა</button>
                    </div>
                  </div>
                  {!! Form::close()!!}
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>

@endsection
@section('script')

@endsection
