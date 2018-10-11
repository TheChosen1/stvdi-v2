<div class="modal-fieldset first">
  <div class="card">
    <div class="card-header"><h4 class="card-title">Student Details</h4>
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
      </div> 
    </div>
    <div class="card-body">

      <div class="row">
        <input id="cid" name="cid" type="hidden" value="{{ Session::get('cid') }}"></input>
        <input id="education_id" name="education_id" type="hidden" value="{{ Session::get('education_id') }}"></input>
        <input id="user_code" name="user_code" type="hidden" value="{{ Session::get('client_code') }}"></input>
        <div class="col-sm-4 form-group{{ $errors->has('admission_no') ? ' has-feedback' : '' }}">
          <label>Admission Number <code>*</code></label>
          <input type="text" class="form-control" placeholder="Admission Number" id="admission_no" name="admission_no" value="{{ old('admission_no') }}" required autofocus>
            @if ($errors->has('admission_no'))
                <span class="help-block">
                    <strong>{{ $errors->first('admission_no') }}</strong>
                </span>
            @endif
        </div>            
        <div class="col-sm-4 form-group{{ $errors->has('class') ? ' has-feedback' : '' }}">
          <label>Class <code>*</code></label>
          <select id="class" name="class" class="form-control" required>
            <option value="">Select</option>
            <option value="1">J.S.S 1</option>
            <option value="2">J.S.S 2</option>
            <option value="3">J.S.S 3</option>
            <option value="4">S.S.S 1</option>
            <option value="5">S.S.S 2</option>
            <option value="6">S.S.S 3</option>
          </select>
             @if ($errors->has('class'))
                <span class="help-block">
                    <strong>{{ $errors->first('class') }}</strong>
                </span>
            @endif
        </div> 
        <div class="col-sm-4 form-group{{ $errors->has('section') ? ' has-feedback' : '' }}">
          <label>Section <code>*</code></label>
          <select id="section" name="section" class="form-control" required>
            <option value="">Select</option>
            <option value="1">A</option>
            <option value="2">B</option>
          </select>
            @if ($errors->has('section'))
                <span class="help-block">
                    <strong>{{ $errors->first('section') }}</strong>
                </span>
            @endif
        </div>
        <div class="col-sm-4 form-group{{ $errors->has('lastname') ? ' has-feedback' : '' }}">
          <label>Last Name <code>*</code></label>
          <input type="text" class="form-control" placeholder="Last Name" id="lastname" name="lastname" value="{{ old('lastname') }}" required autofocus>
            @if ($errors->has('lastname'))
                <span class="help-block">
                    <strong>{{ $errors->first('lastname') }}</strong>
                </span>
            @endif
        </div>
        <div class="col-sm-4 form-group{{ $errors->has('firstname') ? ' has-feedback' : '' }}">
          <label>First Name <code>*</code></label>
          <input type="text" class="form-control" placeholder="First Name" id="firstname" name="firstname" value="{{ old('firstname') }}" required autofocus>
            @if ($errors->has('firstname'))
                <span class="help-block">
                    <strong>{{ $errors->first('firstname') }}</strong>
                </span>
            @endif
        </div>
        <div class="col-sm-4 form-group{{ $errors->has('middlename') ? ' has-feedback' : '' }}">
          <label>Middle Name</label>
          <input type="text" class="form-control" placeholder="Middle Name" id="middlename" name="middlename" value="{{ old('middlename') }}">
        </div>
        <div class="col-sm-4 form-group{{ $errors->has('category') ? ' has-feedback' : '' }}">
          <label>Category</label>
          <select id="category" name="category" class="form-control" required>
            <option value="1">Full Time</option>
            <option value="2">Part Time</option>
          </select>
        </div>
        <div class="col-sm-4 form-group{{ $errors->has('gender') ? ' has-feedback' : '' }}">
          <label>Gender</label>
          <select name="gender" class="form-control">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select>
        </div>    
        <div class="col-sm-4 form-group{{ $errors->has('religion') ? ' has-feedback' : '' }}">
          <label>Religion</label>
          <input type="text" class="form-control" placeholder="Religion" id="religion" name="religion" value="{{ old('religion') }}">
        </div>                                    
        <div class="col-sm-4 form-group{{ $errors->has('dob') ? ' has-feedback' : '' }}">
          <label>Date of Birth <code>*</code></label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="fa fa-calendar"></i>
              </span>
            </div>
            <input type="text" class="form-control" placeholder="yyyy-mm-dd" id="dob" name="dob" value="{{ old('dob') }}" required autofocus>
              @if ($errors->has('dob'))
                  <span class="help-block">
                      <strong>{{ $errors->first('dob') }}</strong>
                  </span>
              @endif              
          </div>
        </div>            
        <div class="col-sm-4 form-group{{ $errors->has('email') ? ' has-feedback' : '' }}">
          <label>Email <code>*</code></label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-envelope"></i></span>
            </div>
            <input type="email" class="form-control" placeholder="Email" id="email" name="email" value="{{ old('email') }}" required autofocus>                
              @if ($errors->has('email'))
                  <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif 
          </div>
        </div>
        <div class="col-sm-4 form-group{{ $errors->has('mobileno') ? ' has-feedback' : '' }}">
          <label>Phone <code>*</code></label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-phone"></i></span>
            </div>
            <input type="text" class="form-control" id="mobileno" name="mobileno" placeholder="(CODE)-NUMBER" value="{{ old('mobileno') }}" required autofocus>
            @if ($errors->has('mobileno'))
                <span class="help-block">
                    <strong>{{ $errors->first('mobileno') }}</strong>
                </span>
            @endif                 
          </div>
        </div>  
        <div class="col-sm-4 form-group{{ $errors->has('admission_date') ? ' has-feedback' : '' }}">
          <label>Admission Date <code>*</code></label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="fa fa-calendar"></i>
              </span>
            </div>
            <input type="text" class="form-control" placeholder="yyyy-mm-dd" id="admission_date" name="admission_date" value="{{ old('admission_date') }}" required autofocus>
              @if ($errors->has('admission_date'))
                  <span class="help-block">
                      <strong>{{ $errors->first('admission_date') }}</strong>
                  </span>
              @endif              
          </div>
        </div>
        <div class="col-sm-4 form-group{{ $errors->has('blood_group') ? ' has-feedback' : '' }}">
          <label>Blood Group</label>
          <select id="blood_group" name="blood_group" class="form-control">
            <option value="">Select</option>
            <option value="O+">O+</option>           
            <option value="A+">A+</option>           
            <option value="B+">B+</option>           
            <option value="AB+">AB+</option>           
            <option value="O-">O-</option>           
            <option value="A-">A-</option>           
            <option value="B-">B-</option>           
            <option value="AB-">AB-</option>
          </select>
        </div>
        <div class="col-sm-4 form-group">
          <label>Any Sibling Here? <code>(Adm_Num - Name)</code></label>
          <select id="sibling_id" name="sibling_id" class="form-control select2" style="width: 100%;">
            <option value="">None</option>
            @if (count($allStudents) != '')
              @foreach ($allStudents as $student)
            <option value="{{$student->id}}">{{ucwords(strtolower($student->admission_no.' - '.$student->lastname.', '.$student->firstname.' '.$student->middlename))}}</option>
              @endforeach
            @endif
          </select>
        </div>
        <div class="col-sm-4 form-group{{ $errors->has('image') ? ' has-feedback' : '' }}">
          <label for="image">Photo</label>
          <div class="input-group">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="image">
              <label class="custom-file-label" for="image">Choose file</label>
            </div>
          </div>
        </div>        
      </div>

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.column -->

<div class="modal-fieldset">
  <div class="card">
    <div class="card-header"><h4 class="card-title">Parent/Guardian Details</h4>
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
      </div> 
    </div>
    <div class="card-body">

      <div class="row">
        <div class="col-sm-4 form-group{{ $errors->has('father_name') ? ' has-feedback' : '' }}">
          <label>Father's Name</label>
          <input type="text" class="form-control" placeholder="Father's Name" id="father_name" name="father_name" value="{{ old('father_name') }}">
        </div>          
        <div class="col-sm-4 form-group{{ $errors->has('father_name') ? ' has-feedback' : '' }}">
          <label>Father's Phone</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-phone"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="(CODE)-NUMBER" id="father_phone" name="father_phone" value="{{ old('father_phone') }}">                
          </div> 
        </div> 
        <div class="col-sm-4 form-group{{ $errors->has('father_occupation') ? ' has-feedback' : '' }}">
          <label>Father's Occupation</label>
          <input type="text" class="form-control" placeholder="Father's Occupation" id="father_occupation" name="father_occupation" value="{{ old('father_occupation') }}">
        </div> 
        <div class="col-sm-4 form-group{{ $errors->has('mother_name') ? ' has-feedback' : '' }}">
          <label>Mother's Name</label>
          <input type="text" class="form-control" placeholder="Mother's Name" id="mother_name" name="mother_name" value="{{ old('mother_name') }}">
        </div>             
        <div class="col-sm-4 form-group{{ $errors->has('mother_phone') ? ' has-feedback' : '' }}">
          <label>Mother's Phone</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-phone"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="(CODE)-NUMBER" id="mother_phone" name="mother_phone" value="{{ old('mother_phone') }}">                
          </div> 
        </div> 
        <div class="col-sm-4 form-group{{ $errors->has('mother_occupation') ? ' has-feedback' : '' }}">
          <label>Mother's Occupation</label>
          <input type="text" class="form-control" placeholder="Mother's Occupation" id="mother_occupation" name="mother_occupation" value="{{ old('mother_occupation') }}">
        </div> 
        <div id="is_guardian" class="full-width">
          <div class="form-group col-sm-3 float-left"><label>Is Your Guardian <code>*</code></label></div>
          <div class="form-group col-sm-3 float-left"><label><input type="radio" id="is_guardian1" name="is_guardian" class="minimal" value="Guardian" checked="checked"> Someone Else</label></div>
          <div class="form-group col-sm-3 float-left"><label><input type="radio" id="is_guardian2" name="is_guardian" class="minimal" value="Father"> Father</label></div>
          <div class="form-group col-sm-3 float-left"><label><input type="radio" id="is_guardian3" name="is_guardian" class="minimal" value="Mother"> Mother</label></div>
        </div>
        <div class="col-sm-4 form-group{{ $errors->has('guardian_name') ? ' has-feedback' : '' }}">
          <label>Guardian's Name <code>*</code></label>
          <input type="text" class="form-control" placeholder="Guardian's Name" id="guardian_name" name="guardian_name" value="{{ old('guardian_name') }}" required autofocus>
            @if ($errors->has('guardian_name'))
              <span class="help-block">
                  <strong>{{ $errors->first('guardian_name') }}</strong>
              </span>
            @endif                
        </div>             
        <div class="col-sm-4 form-group{{ $errors->has('guardian_phone') ? ' has-feedback' : '' }}">
          <label>Guardian's Phone <code>*</code></label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-phone"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="(CODE)-NUMBER" id="guardian_phone" name="guardian_phone" value="{{ old('guardian_phone') }}" required autofocus>
              @if ($errors->has('guardian_phone'))
                <span class="help-block">
                    <strong>{{ $errors->first('guardian_phone') }}</strong>
                </span>
              @endif                
          </div> 
        </div> 
        <div class="col-sm-4 form-group{{ $errors->has('guardian_occupation') ? ' has-feedback' : '' }}">
          <label>Guardian's Occupation</label>
          <input type="text" class="form-control" placeholder="Guardian's Occupation" id="guardian_occupation" name="guardian_occupation" value="{{ old('guardian_occupation') }}">
        </div>
        <div class="col-sm-3 form-group{{ $errors->has('guardian_relation') ? ' has-feedback' : '' }}">
          <label>Relationship</label>
          <input type="text" class="form-control" placeholder="Guardian's Relation" id="guardian_relation" name="guardian_relation" value="{{ old('guardian_relation') }}">
        </div>
        <div class="col-sm-3 form-group{{ $errors->has('guardian_email') ? ' has-feedback' : '' }}">
          <label>Guardian's Email <code>*</code></label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-envelope"></i></span>
            </div>
            <input type="email" class="form-control" placeholder="Guardian's Email" id="guardian_email" name="guardian_email" value="{{ old('guardian_email') }}">   
              @if ($errors->has('guardian_email'))
                  <span class="help-block">
                      <strong>{{ $errors->first('guardian_email') }}</strong>
                  </span>
              @endif                          
          </div>
        </div>
        <div class="col-sm-6 form-group{{ $errors->has('guardian_address') ? ' has-feedback' : '' }}">
          <label>Guardian's Address</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">@</span>
            </div>
            <input type="text" class="form-control" placeholder="Guardian's Address" id="guardian_address" name="guardian_address" value="{{ old('guardian_address') }}">
          </div>              
        </div>
        <div class="col-sm-4 form-group{{ $errors->has('father_pic') ? ' has-feedback' : '' }}">
          <label for="father_pic">Father's Photo</label>
          <div class="input-group">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="father_pic">
              <label class="custom-file-label" for="image">Choose file</label>
            </div>
          </div>
        </div>
        <div class="col-sm-4 form-group{{ $errors->has('mother_pic') ? ' has-feedback' : '' }}">
          <label for="mother_pic">Mother's Photo</label>
          <div class="input-group">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="mother_pic">
              <label class="custom-file-label" for="image">Choose file</label>
            </div>
          </div>
        </div>
        <div class="col-sm-4 form-group{{ $errors->has('guardian_pic') ? ' has-feedback' : '' }}">
          <label for="guardian_pic">Guardian's Photo</label>
          <div class="input-group">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="guardian_pic">
              <label class="custom-file-label" for="image">Choose file</label>
            </div>
          </div>
        </div>            
      </div>

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
