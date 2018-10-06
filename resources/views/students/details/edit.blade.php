<!-- Modal -->
<div class="modal fade" id="editStudent" role="dialog" aria-labelledby="editStudentTitle" aria-hidden="true" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title" id="editStudentTitle">Edit Student Record</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="showHtmlScroll()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form role="form" class="" method="POST" action="{{route('details.update','update')}}"> 
          {{method_field('PATCH')}}
          {{ csrf_field() }} 
          <input id="id" name="id" type="hidden" value=""></input>

          <!-- input form -->
          @include('students/details/form')

          <div class="modal-footer">
            <button class="btn btn-secondary" data-dismiss="modal" onclick="showHtmlScroll()">Close</button>
            <button type="submit" class="btn btn-primary">Update changes</button>
          </div>
        </form>    
      </div>
    </div>
  </div>
</div> 

<script type="text/javascript">
  $(document).ready(function(){   
    $('#editStudent #is_guardian input[type="radio"].minimal').click(function(){
      var guardian = $(this).val();
      var father_name = $('#editStudent #father_name').val();
      var father_phone = $('#editStudent #father_phone').val();
      var father_occupation = $('#editStudent #father_occupation').val();
      var mother_name = $('#editStudent #mother_name').val();
      var mother_phone = $('#editStudent #mother_phone').val();
      var mother_occupation = $('#editStudent #mother_occupation').val();
      $('#editStudent input[name=is_guardian][value=' + guardian + ']').prop('checked', true);
      // console.log(father_name);
      if (guardian == 'Father'){
        $('#editStudent input[name="guardian_relation"]').val(guardian).prop('readonly', true);
        $('#editStudent #guardian_name').val(father_name).prop('readonly', true);
        $('#editStudent #guardian_phone').val(father_phone).prop('readonly', true);
        $('#editStudent #guardian_occupation').val(father_occupation).prop('readonly', true);   
      }else if(guardian == 'Mother'){
        $('#editStudent input[name="guardian_relation"]').val(guardian).prop('readonly', true);
        $('#editStudent #guardian_name').val(mother_name).prop('readonly', true);
        $('#editStudent #guardian_phone').val(mother_phone).prop('readonly', true);
        $('#editStudent #guardian_occupation').val(mother_occupation).prop('readonly', true);      
      }else if(guardian == 'Guardian'){
        $('#editStudent input[name="guardian_relation"]').val('').prop('readonly', false);
        $('#editStudent #guardian_name').val('').prop('readonly', false);
        $('#editStudent #guardian_phone').val('').prop('readonly', false);
        $('#editStudent #guardian_occupation').val('').prop('readonly', false);   
      }else{
        alert('error');
      }
    }); 
  });
</script>