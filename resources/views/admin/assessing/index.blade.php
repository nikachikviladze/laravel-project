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
    <h3>შეფასებები</h3>
  </div>

  <div class="title_right">
    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
      <div class="input-group pull-right">

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">ახალი შეფასების დამატება</button>

        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">

              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel2">შეფასების დამატება</h4>
              </div>
              <div class="modal-body form-group">
                <label>სახელი</label>
               <input type="text" id="person" class="form-control" placeholder="შემფასებლის სახელი და გვარი">
             </div>
             <div class="modal-body form-group">
              <label>სტატუსი</label>
               <input type="text" id="status" class="form-control" placeholder="შემფასებლის სტატუსი">
             </div>
             <div class="modal-body form-group">
              <label>შეფასება</label>
              <textarea class="form-control" id="description" cols="25" rows="5"></textarea>
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
      <h2>სტუდია მუხამბაზის შეფასებები</h2>
      
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
     @include('admin/layouts/messages')

     <table id="datatable" class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>N</th>
          <th>შემფასებელი</th>
          <th>სტატუსი</th>
          <th>შეფასება</th>
          <th>მართვა</th>
        </tr>
      </thead>

      <tbody>
       @foreach($assessings as $item)                       
       <tr>
        <td>{{$item->id}}</td>
        <td>{{ $item->person }}</td>
        <td>{{ $item->status }}</td>
        <td>{{ $item->description }}</td>
        <td>
         <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg{{ $item->id }}"><i style="margin-right:3px;" class="fa fa-edit"></i>რედაქტირება</button>
         <div class="modal fade bs-example-modal-lg{{ $item->id }}" tabindex="-1" role="dialog" aria-hidden="true">
           <div class="modal-dialog modal-lg">
             <div class="modal-content">

               <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                 </button>
                 <h4 class="modal-title" id="myModalLabel2">რედაქტირება</h4>
               </div>
               <form action="{{ route('update_assessing', $item->id) }}" method="post">
                  <div class="modal-body">
                    <input type="hidden" name="_method" value="put">
                    {{ csrf_field() }}
                    
                    <label>შემფასებელი</label>
                    <input type="text" name="person" class="form-control" style="border-radius: 4px !important; width:100% !important;" value="{{ $item->person }}">
                    <br>
                    <label>შემფასებლის სტატუსი</label>
                    <input type="text" name="status" class="form-control" style="border-radius: 4px !important; width:100% !important;" value="{{ $item->status }}">
                    <br>
                    <label>შეფასება</label>
                    <textarea name="description" cols="25" rows="5" class="form-control" style="border-radius: 4px !important; width:100% !important;">{{ $item->description }}</textarea>                   

                  </div>
                  <div class="modal-footer">                    
                    <button type="submit" class="btn btn-success">გაგზავნა</button>
                  </div>
               </form>                            
              </div>
            </div>
          </div>
       <!-- /modals -->
       <form action="{{ route('destroy_assessing', $item->id) }}" method="post" style="display: inline-flex;">
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
      var status = $('#status').val();
      var person = $('#person').val();
      var description = $('#description').val();
      var token= $('#token').val();
      if (description.length>0) {
        $.ajax({
            url : "{{ route('store_assessing') }}",
            type : "post",
            data: {status:status, _token:token, person:person, description:description},
            success : function(data) {
              var json = $.parseJSON(data);              

              content = '<tr><td>'+json.id+'</td><td>'+json.person+'</td><td>'+json.status+'</td><td>'+json.description+'</td><td><button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg'+json.id+'"><i style="margin-right:3px;" class="fa fa-edit"></i>რედაქტირება</button><div class="modal fade bs-example-modal-lg'+json.id+'" tabindex="-1" role="dialog" aria-hidden="true"><div class="modal-dialog modal-lg"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button><h4 class="modal-title" id="myModalLabel2">რედაქტირება</h4></div><form action="{{ url('admin/assessings') }}/'+json.id+'" method="post"><div class="modal-body"><input type="hidden" name="_method" value="put">{{ csrf_field() }}<label>შემფასებელი</label><input type="text" name="person" class="form-control" style="border-radius: 4px !important; width:100% !important;" value="'+json.person+'"><br><label>შემფასებლის სტატუსი</label><input type="text" name="status" class="form-control" style="border-radius: 4px !important; width:100% !important;" value="'+json.status+'"><br><label>შეფასება</label><textarea name="description" cols="25" rows="5" class="form-control" style="border-radius: 4px !important; width:100% !important;">'+json.description+'</textarea></div><div class="modal-footer"><button type="submit" class="btn btn-success">გაგზავნა</button></div></form></div></div></div><!-- /modals --><form action="{{ url('admin/assessings') }}/'+json.id+'" method="post" style="display: inline-flex;"><input type="hidden" name="_method" value="delete">{{ csrf_field() }}<button type="submit" class="btn btn-danger btn-xs"><i style="margin-right:3px;" class="fa fa-trash-o"></i>წაშლა</button></form></td></tr>';

              $('tbody').prepend(content);
              var status = $('#status').val('');
              var person = $('#person').val('');
              var description = $('#description').val('');
              
             

              
            } 
        });
        
      }
      
    });
  });

</script>
@endsection
