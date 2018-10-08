@extends('layouts.app')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Students</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
          <li class="breadcrumb-item active">Student Details</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
@php
$stdPermitArray = Modules::getModuleListPermit(Session::get('cid'), Auth::user()->role_id, 1);
@endphp
@if (!is_null($stdPermitArray))
  @foreach ($stdPermitArray as $stdPermit)
  @endforeach
@endif
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header d-flex btn-group">
            @if(isset($stdPermit) && $stdPermit->can_add==1)
            <button type="button" onclick="hideHtmlScroll()" class="btn btn-primary btn-flat" data-toggle="modal" data-target="#newStudent">
              <i class="margin-right-icon fa fa-plus"></i>New Student
            </button>
            @endif
            <ul class="nav nav-pills ml-auto p-2">
              <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab">Student Details</a></li>
            </ul>
          </div>       
          <div class="card-body">
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
              @if (count($allStudents) != '')
                @include('students/details/table1')
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
@include('students/details/create')
@include('students/details/edit')
@include('students/details/delete')

<script type="text/javascript">
  //Initialize Select2 Elements
  $('.select2').select2();
  $('#dob').inputmask('yyyy-mm-dd', { 'placeholder': 'yyyy-mm-dd' })
  $('#admission_date').inputmask('yyyy-mm-dd', { 'placeholder': 'yyyy-mm-dd' })
  // $('#mobileno, #guardian_phone, #father_phone, #mother_phone').inputmask('(999)-999-999-9999', { 'placeholder': '' })

  $('#editStudent').on('show.bs.modal', function (event) {
    $('html').css( "overflow-y", "hidden" );
    
    var button = $(event.relatedTarget)
    var id = button.data('id');
    var class_id = button.data('class');
    var section_id = button.data('section');
    var admission_no = button.data('admissionno');
    var lastname = button.data('lastname');
    var firstname = button.data('firstname');
    var middlename = button.data('middlename');
    var gender = button.data('gender');
    var religion = button.data('religion');
    var dob = button.data('dob');
    var email = button.data('email');
    var mobileno = button.data('mobileno');
    var admission_date = button.data('admissiondate');
    var image = button.data('image');
    var blood_group = button.data('bloodgroup');
    var sibling_id = button.data('sibling');
    var father_name = button.data('fathername'); 
    var father_phone = button.data('fatherphone');
    var father_occupation = button.data('fatheroccupation');                         
    var mother_name = button.data('mothername'); 
    var mother_phone = button.data('motherphone');
    var mother_occupation = button.data('motheroccupation');
    var guardian_name = button.data('guardianname');
    var is_guardian = button.data('isguardian');  
    var guardian_phone = button.data('guardianphone');
    var guardian_occupation = button.data('guardianoccupation');
    var guardian_email = button.data('guardianemail'); 
    var guardian_relation = button.data('guardianrelation'); 
    var guardian_address = button.data('guardianaddress'); 
    var father_photo = button.data('fatherphoto');
    var mother_photo = button.data('motherphoto');
    var guardian_photo = button.data('guardianphoto');   
    // console.log(firstname+' '+lastname)

    var modal = $(this)
    modal.find('.modal-body #id').val(id)
    modal.find('.modal-body #class').val(class_id)
    modal.find('.modal-body #section').val(section_id)
    modal.find('.modal-body #admission_no').val(admission_no)
    modal.find('.modal-body #lastname').val(lastname)
    modal.find('.modal-body #firstname').val(firstname)
    modal.find('.modal-body #middlename').val(middlename)
    modal.find('.modal-body #religion').val(religion)
    modal.find('.modal-body #dob').val(dob)
    modal.find('.modal-body #email').val(email)
    modal.find('.modal-body #mobileno').val(mobileno)
    modal.find('.modal-body #admission_date').val(admission_date)
    // modal.find('.modal-body #image').val(image)
    modal.find('.modal-body #blood_group').val(blood_group)
    modal.find('.modal-body #sibling_id').val(sibling_id).change()
    modal.find('.modal-body #father_name').val(father_name)
    modal.find('.modal-body #father_phone').val(father_phone)
    modal.find('.modal-body #father_occupation').val(father_occupation)
    modal.find('.modal-body #mother_name').val(mother_name)
    modal.find('.modal-body #mother_phone').val(mother_phone)
    modal.find('.modal-body #mother_occupation').val(mother_occupation)
    modal.find('#is_guardian input[name=is_guardian][value=' + is_guardian + ']').prop('checked', true)
    if (is_guardian == 'Father' || is_guardian == 'Mother'){
      modal.find('.modal-body #guardian_name').val(guardian_name).prop('readonly', true)
      modal.find('.modal-body #guardian_phone').val(guardian_phone).prop('readonly', true)
      modal.find('.modal-body #guardian_occupation').val(guardian_occupation).prop('readonly', true)
      modal.find('.modal-body #guardian_relation').val(guardian_relation).prop('readonly', true)
    }else{
      modal.find('.modal-body #guardian_name').val(guardian_name)
      modal.find('.modal-body #guardian_phone').val(guardian_phone)
      modal.find('.modal-body #guardian_occupation').val(guardian_occupation)
      modal.find('.modal-body #guardian_relation').val(guardian_relation)      
    }

    modal.find('.modal-body #guardian_email').val(guardian_email)
    modal.find('.modal-body #guardian_address').val(guardian_address)
    // modal.find('.modal-body #father_pic').val(father_photo)
    // modal.find('.modal-body #mother_pic').val(mother_photo)
    // modal.find('.modal-body #guardian_pic').val(guardian_photo)
    // modal.find('.modal-title').text('Edit Student Record ' + recipient)
    // modal.find('.modal-body input').val(recipient)

  }) 

  $('#deleteStudent').on('show.bs.modal', function (event) {
    $('html').css( "overflow-y", "hidden" );
    var button = $(event.relatedTarget)
    var id = button.data('id');
    var sibling_id = button.data('sibling');

    var modal = $(this)
    modal.find('.modal-body #id').val(id)
    modal.find('.modal-body #sibling_id').val(sibling_id)
  }) 
</script>

@endsection

