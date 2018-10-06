<table id="list-table" class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Invoice-No</th>
      <th>Expense-Head</th>
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
<!--                     <td>{{$student->admission_no}}</td>
      <td>{{ucwords(strtolower($student->lastname.', '.$student->firstname.' '.$student->middlename))}}</td>
      <td>{{$student->class_id}}</td>
      <td>{{$student->admision_date}}</td> -->
      <td>
        <div class="btn-group">
         @if(isset($expPermit) && $expPermit != '' && $expPermit->can_edit == 1)
            <button type="button" id="editexpensebtn" class="btn btn-default" title="Edit" data-toggle="modal" data-target="#editExpense" 
            data-id="{{$expense->id}}" 
            >
              <i class="fa fa-edit"></i>
            </button>
        @endif
        @if(isset($expPermit) && $expPermit != '' && $expPermit->can_delete == 1)
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
      <th>Invoice-No</th>
      <th>Expense-Head</th>
      <th>Date</th>
      <th>Amount</th>
      <th>Action</th>
    </tr>
  </tfoot>
</table>