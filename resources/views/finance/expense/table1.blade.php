<table id="list-table" class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Inv-No</th>
      <th>Exp-Head</th>
      <th>Name</th>
      <th>Date</th>
      <th>Amount</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($allExpenses as $expense) 
    <tr>
      <td>                   
        <div class="form-check">
          <input class="form-check-input" name="id[]" type="checkbox" value="{{ $expense->id }}">
        </div>
      </td>
      <td>{{$expense->invoice_no}}</td>
      <td>{{ucwords(strtolower($expense->expense_head))}}</td>
      <td>{{ucwords(strtolower($expense->name))}}</td>
      <td>{{$expense->date}}</td>
      <td>{{$expense->amount}}</td>
      <td>
        <div class="btn-group">
         @if(isset($expPermit) && $expPermit->can_edit==1)
            <button type="button" id="editexpensebtn" class="btn btn-default" title="Edit" data-toggle="modal" data-target="#editExpense" 
            data-id="{{$expense->id}}" 
            >
              <i class="fa fa-edit"></i>
            </button>
        @endif
        @if(isset($expPermit) && $expPermit->can_delete==1)
            <button type="button" id="deleteexpensebtn" class="btn btn-default" title="Delete" data-toggle="modal" data-target="#deleteExpense" 
            data-id="{{$expense->id}}" 
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
      <th>Inv-No</th>
      <th>Exp-Head</th>
      <th>Name</th>
      <th>Date</th>
      <th>Amount</th>
      <th>Action</th>
    </tr>
  </tfoot>
</table>