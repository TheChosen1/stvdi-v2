<table class="table table-bordered table-striped list-table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Date</th>
      <th>Head</th>
      <th>Inv-No</th>
      <th>Narration</th>
      <th>Debit</th>
      <th>Credit</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($allTransaction as $transaction) 
    <tr>
      <td>                   
        <div class="form-check">
          <input class="form-check-input" name="id[]" type="checkbox" value="{{$transaction->id}}">
        </div>
      </td>
      <td>{{$transaction->date}}</td>
      <td>{{ucwords(strtolower(Designation::getTransHeadField($transaction->trans_head_id,'trans_head')))}}</td>
      <td>{{$transaction->invoice_no}}</td>
      <td>{{$transaction->narration}}</td>
      <td>{{number_format($transaction->debit,2)}}</td>
      <td>{{number_format($transaction->credit,2)}}</td>
      <td>
        <div class="btn-group">
         @if(isset($transPermit) && $transPermit->can_edit==1)
            <button type="button" id="edittransactionbtn" class="btn btn-default" title="Edit" data-toggle="modal" data-target="#editTransaction" 
            data-id="{{$transaction->id}}" 
            data-transtype="{{$transaction->trans_type_id}}"
            data-transhead="{{$transaction->trans_head_id}}" 
            data-invoiceno="{{$transaction->invoice_no}}" 
            data-date="{{$transaction->date}}" 
            data-debit="{{$transaction->debit}}"
            data-credit="{{$transaction->credit}}"
            data-narration="{{$transaction->narration}}"            
            >
              <i class="fa fa-edit"></i>
            </button>
        @endif
        @if(isset($transPermit) && $transPermit->can_delete==1)
            <button type="button" id="deletetransactionbtn" class="btn btn-default" title="Delete" data-toggle="modal" data-target="#deleteTransaction" 
            data-id="{{$transaction->id}}" 
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
      <th>Date</th>
      <th>Head</th>
      <th>Inv-No</th>
      <th>Narration</th>
      <th>Debit</th>
      <th>Credit</th>
      <th>Action</th>
    </tr>
  </tfoot>
</table>