<!-- Modal -->
<div class="modal fade" id="editTransactionHead" role="dialog" aria-labelledby="editTransactionHeadTitle" aria-hidden="true" data-backdrop="static">
  <div class="modal-dialog modal-dialog-mini" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title" id="editTransactionHeadTitle">Edit Transaction-Head Record</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="showHtmlScroll()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form role="form" class="" method="POST" action="{{route('transaction.updatehead','update')}}"> 
          {{method_field('PATCH')}}
          {{ csrf_field() }} 
          <input id="id" name="id" type="hidden" value=""></input>

          @include('finance/transaction/formhead')
          
          <div class="modal-footer">
            <button class="btn btn-secondary" data-dismiss="modal" onclick="showHtmlScroll()">Close</button>
            <button type="submit" class="btn btn-primary">Update changes</button>
          </div>
        </form>    
      </div>
    </div>
  </div>
</div> 



