@extends('layouts.app')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Staff</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
          <li class="breadcrumb-item active">Staff</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header d-flex p-0">
          <h3 class="card-title p-3"></h3>
          <div class="action col-4"></div>
          <ul class="nav nav-pills ml-auto p-2">
            <li class="nav-item card-side-padding"><a href="#" class="btn btn-primary" onclick="showElement('addStaff')">Add Staff</a></li>
          </ul>
        </div>
        <div class="card-body">
          <div class="tab-content">
            <table id="list-table" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Reg-No</th>
                  <th>Full-Name</th>
                  <th>Designation</th>
                  <th>Entry Date</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>

              @if (count($allStaff) != '')
                @foreach ($allStaff as $staff)
                <tr>
                  <td>                   
                    <div class="form-check">
                      <input class="form-check-input" name="id[]" type="checkbox" value="{{ $staff->id }}">
                    </div>
                  </td>
                  <td>{{$staff->employee_id}}</td>
                  <td>{{$staff->lastname.', '.$staff->firstname.' '.$staff->middlename}}</td>
                  <td>{{Designation::getDesignation($staff->designation)->name}}</td>
                  <td>{{$staff->date_of_joining}}</td>
                  <td></td>
                </tr>
                @endforeach
              @else
                <tr>
                  <td>No Record(s) Found</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>              
              @endif
              </tbody>
              <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Reg-No</th>
                  <th>Full-Name</th>
                  <th>Designation</th>
                  <th>Entry Date</th>
                  <th>Action</th>
                </tr>
              </tfoot>
            </table>         
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
</section>
<!-- /.content -->

@include('hr.create')

@endsection




