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
@if (Modules::getModuleListPermit(Session::get('cid'), Auth::user()->role_id, 3))
  @foreach (Modules::getModuleListPermit(Session::get('cid'), Auth::user()->role_id, 3) as $expPermit)
  @endforeach
@endif
@if (Modules::getModuleListPermit(Session::get('cid'), Auth::user()->role_id, 4))
  @foreach (Modules::getModuleListPermit(Session::get('cid'), Auth::user()->role_id, 4) as $expHeadPermit)
  @endforeach
@endif
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header d-flex btn-group">
          {{isset($expPermit->can_add) ? $expPermit->can_add:"Default"}}
            @if(isset($expPermit->can_add) ? $expPermit->can_add:"Default")
            <button type="button" onclick="hideHtmlScroll()" class="btn btn-primary" data-toggle="modal" data-target="#newStudent">
              <i class="margin-right-icon fa fa-plus"></i>New Expense
            </button>
            @endif
            @if(isset($expHeadPermit->can_add) ? $expHeadPermit->can_add:"Default")
            <button type="button" onclick="hideHtmlScroll()" class="btn btn-primary" data-toggle="modal" data-target="#newStudent">
              <i class="margin-right-icon fa fa-plus"></i>New Expense-Head
            </button>
            @endif
            <ul class="nav nav-pills ml-auto p-2">
              <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab">Expense</a></li>
              <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">Expense Head</a></li>
            </ul>             
          </div>       
          <div class="card-body">
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
              @if (count($allExpenses) != '')
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

<script type="text/javascript">

  $('#editExpense').on('show.bs.modal', function (event) {
    $('html').css( "overflow-y", "hidden" );
    
    var button = $(event.relatedTarget)
    var id = button.data('id');
   
    // console.log(firstname+' '+lastname)

    var modal = $(this)
    modal.find('.modal-body #id').val(id)
  }) 

  $('#deleteExpense').on('show.bs.modal', function (event) {
    $('html').css( "overflow-y", "hidden" );
    var button = $(event.relatedTarget)
    var id = button.data('id');

    var modal = $(this)
    modal.find('.modal-body #id').val(id)
  }) 
</script>

@endsection

