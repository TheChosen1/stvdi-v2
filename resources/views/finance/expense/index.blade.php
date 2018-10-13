@extends('layouts.app')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Expense</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
          <li class="breadcrumb-item active">Expense</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
@php
$expPermitArray = Modules::getModuleListPermit(3);
$expHeadPermitArray = Modules::getModuleListPermit(4);
@endphp
@if (!is_null($expPermitArray))
  @foreach ($expPermitArray as $expPermit)
  @endforeach
@endif
@if (!is_null($expHeadPermitArray))
  @foreach ($expHeadPermitArray as $expHeadPermit)
  @endforeach
@endif
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header d-flex btn-group" id="tabBtn">
            @if(isset($expPermit) && $expPermit->can_add==1)
            <button type="button" onclick="hideHtmlScroll()" class="btn btn-primary btn-flat btn_1" data-toggle="modal" data-target="#newExpense">
              <i class="margin-right-icon fa fa-plus"></i>New Expense
            </button>
            @endif
            @if(isset($expHeadPermit) && $expHeadPermit->can_add==1)
            <button type="button" onclick="hideHtmlScroll()" class="btn btn-primary btn-flat btn_2" style="display: none" data-toggle="modal" data-target="#newExpenseHead">
              <i class="margin-right-icon fa fa-plus"></i>New Expense-Head
            </button>
            @endif
            <ul class="nav nav-pills ml-auto p-2" id="tabMenu">
              <li class="nav-item" onclick="showBtn('btn_1')"><a class="nav-link active" href="#tab_1" data-toggle="tab">Expense</a></li>
              <li class="nav-item" onclick="showBtn('btn_2')"><a class="nav-link" href="#tab_2" data-toggle="tab">Expense Head</a></li>
            </ul>             
          </div>       
          <div class="card-body">
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
              @if (count($allExpense) != '')
                @include('finance/expense/table1')
              @else
                <div class="col-12 text-center">No Record(s) Found</div>              
              @endif 
              </div> 
              <div class="tab-pane" id="tab_2">
              @if (count($allExpenseHead) != '')
                @include('finance/expense/table2')
              @else
                <div class="col-12 text-center">No Record(s) Found</div>              
              @endif 
              </div> 
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
</section>
<!-- /.content -->

<!-- Modal-Window -->
@include('finance/expense/create')
@include('finance/expense/edit')
@include('finance/expense/delete')
@include('finance/expense/createhead')
@include('finance/expense/edithead')
@include('finance/expense/deletehead')

<script type="text/javascript">
  //redirect to specific tab
  $(document).ready(function () {
    $('#tabMenu a[href="#{{ old('tab') }}"]').tab('show')
    $("button[class*='btn_']").not('.{{ old('btn') }}').hide();
    $('.{{ old('btn') }}').show();    
  });

  $('#editExpense').on('show.bs.modal', function (event) {
    $('html').css( "overflow-y", "hidden" );
    
    var button = $(event.relatedTarget)
    var id = button.data('id');
    var expensehead = button.data('expensehead');
    var name = button.data('name');
    var date = button.data('date');
    var amount = button.data('amount');
    var note = button.data('note');
   
    // console.log(firstname+' '+lastname)

    var modal = $(this)
    modal.find('.modal-body #id').val(id)
    modal.find('.modal-body #exp_head_id').val(expensehead)
    modal.find('.modal-body #name').val(name)
    modal.find('.modal-body #date').val(date)
    modal.find('.modal-body #amount').val(amount)
    modal.find('.modal-body #note').val(note)
  }) 

  $('#editExpenseHead').on('show.bs.modal', function (event) {
    $('html').css( "overflow-y", "hidden" );
    
    var button = $(event.relatedTarget)
    var id = button.data('id');
    var exp_head = button.data('exphead');
    var note = button.data('note');
   
    // console.log(firstname+' '+lastname)

    var modal = $(this)
    modal.find('.modal-body #id').val(id)
    modal.find('.modal-body #exp_head').val(exp_head)
    modal.find('.modal-body #note').val(note)
  }) 
  
  $('#deleteExpense, #deleteExpenseHead').on('show.bs.modal', function (event) {
    $('html').css( "overflow-y", "hidden" );
    var button = $(event.relatedTarget)
    var id = button.data('id');

    var modal = $(this)
    modal.find('.modal-body #id').val(id)
  }) 

</script>

@endsection

