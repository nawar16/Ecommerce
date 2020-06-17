@extends('admin.index')
@section('content')
@push('js')
<!-- Trigger the modal with a button -->

<!-- Modal -->
<div id="delete_bootstrap_modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">{{ trans('admin.delete') }}</h4>
      </div>
      {!! Form::open(['url'=>'','method'=>'delete','id'=>'form_Delete_department']) !!}
      <div class="modal-body">
        <h4>
         {{ trans('admin.ask_delete_dep') }} <span id="dep_name"></span>
        </h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">{{ trans('admin.close') }}</button>
        {!! Form::submit(trans('admin.yes'),['class'=>'btn btn-danger']) !!}
      </div>
      {!! Form::close() !!}
    </div>

  </div>
</div>

    <!-- JSTree -->
    <link rel="stylesheet" href="{{ url('/') }}/design/adminlte/jstree/themes/default/style.css">
    <script src="{{ url('design/adminlte/jstree/jstree.js') }}"></script>
    <script src="{{ url('design/adminlte/jstree/jstree.wholerow.js') }}"></script>
    <script src="{{ url('design/adminlte/jstree/jstree.checkbox.js') }}"></script>


<script type="text/javascript">
$(document).ready(function(){
  $('#jstree').jstree({
    "core" : {
      //
      'data' : {!! load_dep() !!}
      /*[
        {"id": "1","parent":"#","text": "single root node"},
        {"id": "2","parent":"1","text": "root node 2"},
        {"id": "3","parent":"2","text": "child 1"},
        {"id": "4","parent":"2","text": "child 2"},
      ]*/,
      worker: false,
      "themes" : {
        "variant" : "large"
      }
    },
    "checkbox" : {
      "keep_selected_style" : true
    },
    "plugins" : [ "wholerow" ]//checkbox
  });

  
//console.log( typeof window.jQuery.fn.jstree );
});

</script>
@endpush
<div class="box">
  <div class="box-header">
    <h3 class="box-title">{{ $title }}</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
<a href="" class="btn btn-info edit_dep showbtn_control hidden" ><i class="fa fa-edit"></i> {{ trans('admin.edit') }}</a>
<a href="" class="btn btn-danger delete_dep showbtn_control hidden"  data-toggle="modal" data-target="#delete_bootstrap_modal" ><i class="fa fa-trash"></i> {{ trans('admin.delete') }}</a>
<div id="jstree"></div>

  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->

@endsection