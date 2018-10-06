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
        @if(isset($stdPermit) && $stdPermit != '' && $stdPermit->can_edit == 1)
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
        @if(isset($stdPermit) && $stdPermit != '' && $stdPermit->can_delete == 1)
            <button type="button" id="deletestudentbtn" class="btn btn-default" title="Delete" data-toggle="modal" data-target="#deleteStudent" 
            data-id="{{$student->id}}"                        
            data-parent="{{$student->sibling_id}}"
            >
            <i class="fa fa-trash"></i></button>
        @endif
        </div>
      </td>
    </tr>
    @endforeach
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
