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
          <li class="breadcrumb-item active">Students</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

@foreach (Modules::getModuleListPermit(Session::get('cid'), Auth::user()->role_id, 1) as $modulePermit)

@endforeach
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header d-flex btn-group">
            @if($modulePermit != '' && $modulePermit->can_add == 1)
            <button type="button" onclick="hideHtmlScroll()" class="btn btn-primary" data-toggle="modal" data-target="#newStudent">
              <i class="margin-right-icon fa fa-plus"></i>New Student
            </button>
            @endif
          </div>       
          <div class="card-body">
            <div class="tab-content">
              <table id="list-table" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Reg-No</th>
                    <th>Full-Name</th>
                    <th>Faculty</th>
                    <th>Admitted</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>

                @if (count($allStudents) != '')
                  @foreach ($allStudents as $student)
                  <tr>
                    <td>                   
                      <div class="form-check">
                        <input class="form-check-input" name="id[]" type="checkbox" value="{{ $student->id }}">
                      </div>
                    </td>
                    <td>{{$student->admission_no}}</td>
                    <td>{{ucwords(strtolower($student->lastname.', '.$student->firstname.' '.$student->middlename))}}</td>
                    <td>{{$student->class_id}}</td>
                    <td>{{$student->admision_date}}</td>
                    <td>
                      <div class="btn-group">
                      @if($modulePermit != '' && $modulePermit->can_edit == 1)
                          <button type="button" id="editstudentbtn" class="btn btn-default" title="Edit" data-toggle="modal" data-target="#editStudent" 
                          data-id="{{$student->id}}" 
                          data-class="{{$student->class_id}}" 
                          data-section="{{$student->section_id}}" 
                          data-admissionno="{{$student->admission_no}}" 
                          data-lastname="{{$student->lastname}}" 
                          data-firstname="{{$student->firstname}}" 
                          data-middlename="{{$student->middlename}}" 
                          data-religion="{{$student->religion}}" 
                          data-dob="{{$student->dob}}" 
                          data-gender="{{$student->gender}}" 
                          data-email="{{$student->email}}" 
                          data-mobileno="{{$student->mobileno}}" 
                          data-admissiondate="{{$student->admission_date}}" 
                          data-image="{{$student->image}}" 
                          data-bloodgroup="{{$student->blood_group}}" 
                          data-sibling="{{$student->sibling_id}}" 
                          data-fathername="{{$student->father_name}}" 
                          data-fatherphone="{{$student->father_phone}}"
                          data-fatheroccupation="{{$student->father_occupation}}"                         
                          data-mothername="{{$student->mother_name}}" 
                          data-motherphone="{{$student->mother_phone}}"
                          data-motheroccupation="{{$student->mother_occupation}}"
                          data-guardianname="{{$student->guardian_name}}" 
                          data-isguardian="{{$student->is_guardian}}" 
                          data-guardianphone="{{$student->guardian_phone}}"
                          data-guardianoccupation="{{$student->guardian_occupation}}"
                          data-guardianemail="{{$student->guardian_email}}" 
                          data-guardianrelation="{{$student->guardian_relation}}" 
                          data-guardianaddress="{{$student->guardian_address}}" 
                          data-fatherphoto="{{$student->father_pic}}"
                          data-motherphoto="{{$student->mother_pic}}"
                          data-guardianphoto="{{$student->guardian_pic}}"
                          >
                            <i class="fa fa-edit"></i>
                          </button>
                      @endif
                      @if($modulePermit != '' && $modulePermit->can_delete == 1)
                          <button type="button" id="editstudentbtn" class="btn btn-default" title="Delete" data-toggle="modal" data-target="#deleteStudent" 
                          data-id="{{$student->id}}"                        
                          data-parent="{{$student->sibling_id}}"
                          >
                          <i class="fa fa-trash"></i></button>
                      @endif
                      </div>
                    </td>
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
                    <th>Faculty</th>
                    <th>Admitted</th>
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
  </div>
</section>
<!-- /.content -->

<!-- Modal-Window -->
@include('admin/students/create')
@include('admin/students/edit')
@include('admin/students/delete')

<script type="text/javascript">
  //Initialize Select2 Elements
  $('.select2').select2();
  $('#dob').inputmask('yyyy-mm-dd', { 'placeholder': 'yyyy-mm-dd' })
  $('#admission_date').inputmask('yyyy-mm-dd', { 'placeholder': 'yyyy-mm-dd' })
  $('#mobileno, #guardian_phone, #father_phone, #mother_phone').inputmask('(999)-999-999-9999', { 'placeholder': '' })

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
    modal.find('.modal-body #sibling_id').val(sibling_id)
    modal.find('.modal-body #father_name').val(father_name)
    modal.find('.modal-body #father_phone').val(father_phone)
    modal.find('.modal-body #father_occupation').val(father_occupation)
    modal.find('.modal-body #mother_name').val(mother_name)
    modal.find('.modal-body #mother_phone').val(mother_phone)
    modal.find('.modal-body #mother_occupation').val(mother_occupation)
    modal.find('#is_guardian input[name=is_guardian][value=' + is_guardian + ']').prop('checked', true)
    modal.find('.modal-body #guardian_name').val(guardian_name)
    modal.find('.modal-body #guardian_phone').val(guardian_phone)
    modal.find('.modal-body #guardian_occupation').val(guardian_occupation)
    modal.find('.modal-body #guardian_relation').val(guardian_relation)
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

