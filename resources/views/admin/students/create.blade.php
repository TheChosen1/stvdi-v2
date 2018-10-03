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
        <form role="form" class="" method="POST" action="{{route('students.store')}}"> 
          {{ csrf_field() }} 

          @include('admin/students/form')

          <div class="modal-footer">
            <button class="btn btn-secondary" data-dismiss="modal" onclick="showHtmlScroll()">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>    
      </div>
    </div>
  </div>
</div> 


