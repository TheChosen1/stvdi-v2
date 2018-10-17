@extends('layouts.app')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Transaction</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
          <li class="breadcrumb-item active">Transaction</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
@php
$transPermitArray = Modules::getModuleListPermit(3);
$transHeadPermitArray = Modules::getModuleListPermit(4);
@endphp
@if (!is_null($transPermitArray))
  @foreach ($transPermitArray as $transPermit)
  @endforeach
@endif
@if (!is_null($transHeadPermitArray))
  @foreach ($transHeadPermitArray as $transHeadPermit)
  @endforeach
@endif
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header d-flex btn-group" id="tabBtn">
            @if(isset($transPermit) && $transPermit->can_add==1)
            <button type="button" onclick="hideHtmlScroll()" class="btn btn-primary btn-flat btn_1" data-toggle="modal" data-target="#newTransaction">
              <i class="margin-right-icon fa fa-plus"></i>New Transaction
            </button>
            @endif
            @if(isset($transHeadPermit) && $transHeadPermit->can_add==1)
            <button type="button" onclick="hideHtmlScroll()" class="btn btn-primary btn-flat btn_2" style="display: none" data-toggle="modal" data-target="#newTransactionHead">
              <i class="margin-right-icon fa fa-plus"></i>New Transaction-Head
            </button>
            @endif
            <ul class="nav nav-pills ml-auto p-2" id="tabMenu">
              <li class="nav-item" onclick="showBtn('btn_1')"><a class="nav-link active" href="#tab_1" data-toggle="tab">Transaction</a></li>
              <li class="nav-item" onclick="showBtn('btn_2')"><a class="nav-link" href="#tab_2" data-toggle="tab">Transaction Head</a></li>
            </ul>             
          </div>       
          <div class="card-body">
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
              @if (count($allTransaction) != '')
                @include('finance/transaction/table1')
              @else
                <div class="col-12 text-center">No Record(s) Found</div>              
              @endif 
              </div> 
              <div class="tab-pane" id="tab_2">
              @if (count($allTransactionHead) != '')
                @include('finance/transaction/table2')
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
@include('finance/transaction/create')
@include('finance/transaction/edit')
@include('finance/transaction/delete')
@include('finance/transaction/createhead')
@include('finance/transaction/edithead')
@include('finance/transaction/deletehead')

<script type="text/javascript">
  $('#date').inputmask('yyyy-mm-dd', { 'placeholder': 'yyyy-mm-dd' })
  // redirect to specific tab
  $(document).ready(function () {
    $('#tabMenu a[href="#{{ old('tab') }}"]').tab('show');
    $("button[class*='btn_']").not('.{{ old('btn') }}').hide();
    $('.{{ old('btn') }}').show();    
  });

  $('#editTransaction').on('show.bs.modal', function (event) {
    $('html').css( "overflow-y", "hidden" );
    
    var button = $(event.relatedTarget)
    var id = button.data('id');
    var transhead = button.data('transhead');
    var invoiceno = button.data('invoiceno');
    var date = button.data('date');
    var debit = button.data('debit');
    var credit = button.data('credit');
    var narration = button.data('narration');
   
    // console.log(firstname+' '+lastname)

    var modal = $(this)
    modal.find('.modal-body #id').val(id)
    modal.find('.modal-body #trans_head_id').val(transhead).change()
    modal.find('.modal-body #invoice_no').val(invoiceno)
    modal.find('.modal-body #date').val(date)
    if (debit == '' || debit == 0){
      modal.find('.modal-body #amount').val(credit)
    }else{
      modal.find('.modal-body #amount').val(debit)
    }
    modal.find('.modal-body #narration').val(narration)
  }) 

  $('#editTransactionHead').on('show.bs.modal', function (event) {
    $('html').css( "overflow-y", "hidden" );
    
    var button = $(event.relatedTarget)
    var id = button.data('id');
    var transtype = button.data('transtype');
    var transhead = button.data('transhead');
   
    // console.log(firstname+' '+lastname)

    var modal = $(this)
    modal.find('.modal-body #id').val(id)
    modal.find('.modal-body #trans_type_id').val(transtype).change()
    modal.find('.modal-body #trans_head').val(transhead)
  }) 
  
  $('#deleteTransaction, #deleteTransactionHead').on('show.bs.modal', function (event) {
    $('html').css( "overflow-y", "hidden" );
    var button = $(event.relatedTarget)
    var id = button.data('id');

    var modal = $(this)
    modal.find('.modal-body #id').val(id)
  }) 

</script>

@endsection

