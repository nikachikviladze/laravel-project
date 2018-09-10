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
    <h3>სიახლეები</h3>
  </div>

  <div class="title_right">
    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
      <div class="input-group pull-right">
          <a href="{{ url('admin/blog/create') }}" class="btn btn-success pull-right">სიახლის დამატება</a>
      <!-- /modals -->
    </div>
  </div>
</div>
</div>
<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>ავტოსკოლის საიტზე გამოქვეყნებული სიახლეების სია</h2>
      
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
     @include('admin/layouts/messages')

     <table id="datatable" class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>N</th>
          <th>ფოტო</th>
          <th>სათაური</th>
          <th>მართვა</th>
        </tr>
      </thead>

      <tbody>
       @foreach($blogs as $blog)                       
       <tr>
        <td>{{$blog->id}}</td>
        <td><img src="{{ asset('images/blog/'. $blog->image) }}" width="100"></td>
        <td>{{ $blog->title }}</td>
        <td>
         <a href="{{ url('admin/blog/'. $blog->id. '/edit') }}" class="btn btn-success btn-xs" >რედაქტირება</a>
       {{ Form::open(['action'=>['Admin\BlogController@destroy', $blog->id]]) }}
         <input type="hidden" name="_method" value="delete">
          {{ csrf_field() }}
          <button type="submit" class="btn btn-danger btn-xs"><i style="margin-right:3px;" class="fa fa-trash-o"></i>წაშლა</button>
        </form>
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
