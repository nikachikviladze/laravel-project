@extends('admin/master')
@section('stylesheet')
  <script src="http://cdn.ckeditor.com/4.7.3/full/ckeditor.js"></script>

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

                {!! Form::open(['action'=>['Admin\BlogController@update', $blog->id], 'method'=>'post', 'class'=>'form-horizontal form-label-left', 'files'=>true])!!}
                 <br>
                  {{form::hidden('_method', 'PUT')}}
                 <div class="clearfix"></div>
                 
                 <div class="form-group">
                    <label class="control-label col-md-1 col-sm-1 col-xs-12">სათაური</label>
                    <div class="col-md-11 col-sm-11 col-xs-12">
                      <input type="text" name="title" class="form-control" value="{{ $blog->title }}">
                    </div>
                    
                  </div>
                   <div class="form-group">
                    <label class="control-label col-md-1 col-sm-1 col-xs-12">კონტენტი</label>
                    <div class="col-md-11 col-sm-11 col-xs-12">
                      <textarea id="editor1" name="description" class="form-control" cols="20" rows="5">{{ $blog->description }}</textarea>
                    </div>
                    
                  </div>
                   <div class="item form-group">
                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="textarea">კატეგორია<code>*</code>
                    </label>
                    <div class="col-md-11 col-sm-11 col-xs-12">
                      <select name="blog_categorie_id" class="form-control">
                        <option disabled selected>აირჩიეთ შესბამისი კატეგორია</option>
                        @foreach($categories as $cat)
                         <option value="{{ $cat->id }}" @if($blog->blog_categorie_id == $cat->id) selected @endif> {{ $cat->name }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                 <div class="item form-group">
                   <label class="control-label col-md-1 col-sm-1 col-xs-12" for="textarea">ფაილი<code>*</code>
                   </label>
                   <div class="col-md-11 col-sm-11 col-xs-12">
                     <input type="file" name="image" >
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

@endsection
@section('script')
  <script>
   CKEDITOR.replace( 'editor1', {
  toolbarGroups: [
    { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
    { name: 'paragraph',   groups: [ 'list', 'indent', 'blocks', 'align'] },
    
    { name: 'links' },
    
    
    '/',
    { name: 'clipboard',   groups: [ 'clipboard', 'undo' ] },
    { name: 'insert' },
    '/',
    { name: 'styles' },
    { name: 'colors' },
    { name: 'document',    groups: [ 'mode'] }
    ]
});

</script>
@endsection

