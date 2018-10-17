<table class="table table-bordered table-striped list-table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Transaction Type</th>
      <th>Transaction Head</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($allTransactionHead as $transactionHead) 
    <tr>
      <td>                   
        <div class="form-check">
          <input class="form-check-input" name="id[]" type="checkbox" value="{{$transactionHead->id}}">
        </div>
      </td>
      <td>{{ucwords(strtolower(Designation::getTransTypeField($transactionHead->trans_type_id,'name')))}}</td>
      <td>{{ucwords(strtolower($transactionHead->trans_head))}}</td>
      <td>
        <div class="btn-group">
        @if(isset($transHeadPermit) && $transHeadPermit->can_edit==1)
            <button type="button" id="edittransactionheadbtn" class="btn btn-default" title="Edit" data-toggle="modal" data-target="#editTransactionHead" 
            data-id="{{$transactionHead->id}}" 
            data-transtype="{{$transactionHead->trans_type_id}}"
            data-transhead="{{$transactionHead->trans_head}}"
            >
              <i class="fa fa-edit"></i>
            </button>
        @endif
        @if(isset($transHeadPermit) && $transHeadPermit->can_delete==1)
            <button type="button" id="deletetransactionheadbtn" class="btn btn-default" title="Delete" data-toggle="modal" data-target="#deleteTransactionHead" 
            data-id="{{$transactionHead->id}}" 
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
      <th>Transaction Type</th>
      <th>Transaction Head</th>
      <th>Action</th>
    </tr>
  </tfoot>
</table>