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
    <h3>გალერეების კატეგორიების სია</h3>
  </div>

  <div class="title_right">
    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
      <div class="input-group pull-right">

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">ახალი კატეგორიის დამატება</button>

        <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">

              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel2">სახელი</h4>
              </div>
              <div class="modal-body">
               <input type="text" id="name" class="form-control" placeholder="შეიყვანეთ სახელი...">
             </div>
             <br><br>
             <div class="modal-footer">
              <button id="submit" type="submit" class="btn btn-success" data-dismiss="modal">გაგზავნა</button>
            </div>
          </div>
        </div>
      </div>
      <!-- /modals -->
    </div>
  </div>
</div>
</div>
<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>ავტოსკოლის <small>ფოტო ალბომები</small></h2>
      
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
     @include('admin/layouts/messages')

     <table id="datatable" class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>N</th>
          <th>ალბომი</th>
          <th>მართვა</th>
        </tr>
      </thead>

      <tbody>
       @foreach($albums as $item)                       
       <tr>
        <td>{{$item->id}}</td>
        <td><a href="{{ url('admin/gallery/'. $item->id) }}">{{ $item->name }}</a></td>
        <td>
          <a href="{{ url('admin/gallery/'. $item->id) }}" class="btn btn-default btn-xs">ალბომის ნახვა</a>

         <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target=".bs-example-modal-sm{{ $item->id }}"><i style="margin-right:3px;" class="fa fa-edit"></i>რედაქტირება</button>
         <div class="modal fade bs-example-modal-sm{{ $item->id }}" tabindex="-1" role="dialog" aria-hidden="true">
           <div class="modal-dialog modal-sm">
             <div class="modal-content">

               <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                 </button>
                 <h4 class="modal-title" id="myModalLabel2">{{ $item->name }} რედაქტირება</h4>
               </div>
               <form action="{{ route('update', $item->id) }}" method="post">
                  <div class="modal-body">
                    <input type="hidden" name="_method" value="put">
                    {{ csrf_field() }}

                    <input type="text" name="name" class="form-control" style="border-radius: 4px !important; width:100% !important;" value="{{ $item->name }}">
                  </div>
                  <div class="modal-footer">                    
                    <button type="submit" class="btn btn-success">გაგზავნა</button>
                  </div>
               </form>                            
              </div>
            </div>
          </div>
       <!-- /modals -->
       <form action="{{ route('destroy', $item->id) }}" method="post" style="display: inline-flex;">
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
<script>
  $( document ).ready(function() {
    $('#submit').on('click', function(event) {
      var name = $('#name').val();
      var token= $('#token').val();
      if (name.length>0) {
        $.ajax({
            url : "{{ route('store') }}",
            type : "post",
            data: {name:name, _token:token},
            success : function(data) {
              var json = $.parseJSON(data);

              content = '<tr><td>'+json.id+'</td><td>'+json.name+'</td><td><a href="{{ url('admin/albums') }}/'+ json.id+'" class="btn btn-default btn-xs">ალბომის ნახვა</a><button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target=".bs-example-modal-sm'+json.id+'"><i style="margin-right:3px;" class="fa fa-edit"></i>რედაქტირება</button><div class="modal fade bs-example-modal-sm'+json.id+'" tabindex="-1" role="dialog" aria-hidden="true"><div class="modal-dialog modal-sm"><form action="{{ url('admin/albums') }}/'+json.id+'" method="post"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button><h4 class="modal-title" id="myModalLabel2">'+json.name+'რედაქტირება</h4></div><div class="modal-body"><input type="hidden" name="_method" value="put">{{ csrf_field() }}<input type="text" name="name" class="form-control" style="border-radius: 4px !important; width:100% !important;" value="'+json.name+'"></div><div class="modal-footer"><button type="submit" class="btn btn-success">გაგზავნა</button></div></div></div></div></form><!-- /modals --><form action="{{ url('admin/albums') }}/'+json.id+'" method="post" style="display: inline-flex;"><input type="hidden" name="_method" value="delete">{{ csrf_field() }}<button type="submit" class="btn btn-danger btn-xs"><i style="margin-right:3px;" class="fa fa-trash-o"></i>წაშლა</button></form></td></tr>';
              $('tbody').prepend(content);
              
             

              
            } 
        });
        
      }
      
    });
  });

</script>
@endsection
