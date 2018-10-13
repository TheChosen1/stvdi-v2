<!-- Modal -->
<div class="modal fade" id="deleteExpenseHead" role="dialog" aria-labelledby="deleteExpenseHeadTitle" aria-hidden="true" data-backdrop="static">
  <div class="modal-dialog modal-dialog-mini" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title" id="deleteExpenseHeadTitle">Delete Expense-Head Record</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="showHtmlScroll()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form role="form" class="" method="POST" action="{{route('expense.destroyhead','delete')}}"> 
          {{method_field('DELETE')}}
          {{ csrf_field() }} 
          <input id="id" name="id" type="hidden" value=""></input>
          <div class="modal-fieldset first">
            <div class="card">
              <div class="card-body">
                <div class="row">Are you sure about Deleting this Record?</div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" data-dismiss="modal" onclick="showHtmlScroll()">Close</button>
            <button type="submit" class="btn btn-danger">Yes! Delete Record</button>
          </div>
        </form>    
      </div>
    </div>
  </div>
</div> 

