<!-- Modal -->
<div class="modal fade" id="newStudent" role="dialog" aria-labelledby="newStudentTitle" aria-hidden="true" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title" id="newStudentTitle">New Student Record</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="showHtmlScroll()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form role="form" class="" method="POST" action="{{route('details.store')}}"> 
          {{ csrf_field() }} 

          @include('students/details/form')

          <div class="modal-footer">
            <button class="btn btn-secondary" data-dismiss="modal" onclick="showHtmlScroll()">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>    
      </div>
    </div>
  </div>
</div> 

<script type="text/javascript">
  $(document).ready(function(){   
    $('#newStudent #is_guardian input[type="radio"].minimal').click(function(){
      var guardian = $(this).val();
      var father_name = $('#newStudent #father_name').val();
      var father_phone = $('#newStudent #father_phone').val();
      var father_occupation = $('#newStudent #father_occupation').val();
      var mother_name = $('#newStudent #mother_name').val();
      var mother_phone = $('#newStudent #mother_phone').val();
      var mother_occupation = $('#newStudent #mother_occupation').val();
      $('#newStudent input[name=is_guardian][value=' + guardian + ']').prop('checked', true)
      // console.log(father_name);
      if (guardian == 'Father'){
        $('#newStudent input[name="guardian_relation"]').val(guardian).prop('readonly', true);
        $('#newStudent #guardian_name').val(father_name).prop('readonly', true);
        $('#newStudent #guardian_phone').val(father_phone).prop('readonly', true);
        $('#newStudent #guardian_occupation').val(father_occupation).prop('readonly', true);   
      }else if(guardian == 'Mother'){
        $('#newStudent input[name="guardian_relation"]').val(guardian).prop('readonly', true);
        $('#newStudent #guardian_name').val(mother_name).prop('readonly', true);
        $('#newStudent #guardian_phone').val(mother_phone).prop('readonly', true);
        $('#newStudent #guardian_occupation').val(mother_occupation).prop('readonly', true);      
      }else if(guardian == 'Guardian'){
        $('#newStudent input[name="guardian_relation"]').val('').prop('readonly', false);
        $('#newStudent #guardian_name').val('').prop('readonly', false);
        $('#newStudent #guardian_phone').val('').prop('readonly', false);
        $('#newStudent #guardian_occupation').val('').prop('readonly', false);   
      }else{
        alert('error');
      }
    }); 
  });
</script>
