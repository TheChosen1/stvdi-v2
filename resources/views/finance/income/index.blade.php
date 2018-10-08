@extends('layouts.app')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Income</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
          <li class="breadcrumb-item active">Income</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
@php
$incPermitArray = Modules::getModuleListPermit(Session::get('cid'), Auth::user()->role_id, 5);
$incHeadPermitArray = Modules::getModuleListPermit(Session::get('cid'), Auth::user()->role_id, 6);
@endphp
@if (!is_null($incPermitArray))
  @foreach ($incPermitArray as $incPermit)
  @endforeach
@endif
@if (!is_null($incHeadPermitArray))
  @foreach ($incHeadPermitArray as $incHeadPermit)
  @endforeach
@endif
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header d-flex btn-group">
            @if(isset($incPermit) && $incPermit->can_add==1)
            <button type="button" onclick="hideHtmlScroll()" class="btn btn-primary btn-flat btn_1" data-toggle="modal" data-target="#newIncome">
              <i class="margin-right-icon fa fa-plus"></i>New Income
            </button>
            @endif
            @if(isset($incHeadPermit) && $incHeadPermit->can_add==1)
            <button type="button" onclick="hideHtmlScroll()" class="btn btn-primary btn-flat btn_2" style="display: none" data-toggle="modal" data-target="#newIncomeHead">
              <i class="margin-right-icon fa fa-plus"></i>New Income-Head
            </button>
            @endif
            <ul class="nav nav-pills ml-auto p-2">
              <li class="nav-item" onclick="showBtn('btn_1')"><a class="nav-link active" href="#tab_1" data-toggle="tab">Income</a></li>
              <li class="nav-item" onclick="showBtn('btn_2')"><a class="nav-link" href="#tab_2" data-toggle="tab">Income Head</a></li>
            </ul>             
          </div>       
          <div class="card-body">
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
              @if (count($allIncome) != '')
                @include('finance/income/table1')
              @else
                <div class="col-12 text-center">No Record(s) Found</div>              
              @endif 
              </div> 
              <div class="tab-pane" id="tab_2">
              @if (count($allIncomeHead) != '')
                @include('finance/income/table2')
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
@include('finance/income/create')
@include('finance/income/edit')
@include('finance/income/delete')

<script type="text/javascript">

  $('#editIncome').on('show.bs.modal', function (event) {
    $('html').css( "overflow-y", "hidden" );
    
    var button = $(event.relatedTarget)
    var id = button.data('id');
   
    // console.log(firstname+' '+lastname)

    var modal = $(this)
    modal.find('.modal-body #id').val(id)
  }) 

  $('#deleteIncome').on('show.bs.modal', function (event) {
    $('html').css( "overflow-y", "hidden" );
    var button = $(event.relatedTarget)
    var id = button.data('id');

    var modal = $(this)
    modal.find('.modal-body #id').val(id)
  }) 
</script>

@endsection

