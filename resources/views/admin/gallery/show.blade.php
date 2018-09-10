@extends('admin/master')
@section('stylesheet')
<link href="{{asset('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('vendors/switchery/dist/switchery.min.css')}}" rel="stylesheet">

@endsection
@section('content')
<div class="page-title">
  <div class="title_left">
    <h3>ფოტოსურათების სია</h3>
  </div>
  <a href="{{ url('admin/images/create') }}" class="btn btn-success pull-right">ფოტოს ატვირთვა</a>

 
</div>
<div class="col-md-12 col-sm-12 col-xs-12">
<br><br>
  <div class="x_panel">
    <div class="x_title">
      <h2>{{ $album->name }}</h2>
      
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
     @include('admin/layouts/messages')

     <table id="datatable" class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>N</th>
          <th>სურათი</th>
          <th>მართვა</th>
        </tr>
      </thead>

      <tbody>
       @foreach($album->images as $image)                       
       <tr>
        <td>{{$image->id}}</td>
        <td><img src="{{ asset('storage/images/'.  $image->image) }}" alt="" width="350" ></td>
        <td>
       {{ Form::open(['action'=>['Admin\ImagesController@destroy', $image->id]]) }}
         <input type="hidden" name="_method" value="delete">
          {{ csrf_field() }}
          <button type="submit" class="btn btn-danger btn-xs"><i style="margin-right:3px;" class="fa fa-trash-o"></i>წაშლა</button>
        {{Form::close()}}
     </td>
   </tr>
   @endforeach
 </tbody>
</table>
</div>

<input type="hidden" id="token" value="{{ csrf_token() }}"> 
@endsection
@section('script')
<script src="{{ asset('vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{ asset('vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
<script src="{{ asset('vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
<script src="{{ asset('vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{ asset('vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{ asset('vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
<script src="{{ asset('vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
<script src="{{ asset('vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
<script src="{{ asset('vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
<script>
  $(function() {
   $('#datatable').DataTable({
     aaSorting : [[0, 'desc']]
   });
 });

</script>
@endsection
