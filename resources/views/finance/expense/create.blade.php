<!-- Modal -->
<div class="modal fade" id="newExpense" role="dialog" aria-labelledby="newExpenseTitle" aria-hidden="true" data-backdrop="static">
  <div class="modal-dialog modal-dialog-mini" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title" id="newExpenseTitle">Add Expense Record</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="showHtmlScroll()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form role="form" class="" method="POST" action="{{route('expense.store')}}" enctype="multipart/form-data">
          {{ csrf_field() }} 

          @include('finance/expense/form')
          
          <div class="modal-footer">
            <button class="btn btn-secondary" data-dismiss="modal" onclick="showHtmlScroll()">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>    
      </div>
    </div>
  </div>
</div> 


