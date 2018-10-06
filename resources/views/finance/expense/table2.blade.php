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
  @foreach ($allExpenseHead as $expenseHead) 
    <tr>
      <td>                   
        <div class="form-check">
          <input class="form-check-input" name="id[]" type="checkbox" value="{{ $expenseHead->id }}">
        </div>
      </td>
<!--                     <td>{{$student->admission_no}}</td>
      <td>{{ucwords(strtolower($student->lastname.', '.$student->firstname.' '.$student->middlename))}}</td>
      <td>{{$student->class_id}}</td>
      <td>{{$student->admision_date}}</td> -->
      <td>
        <div class="btn-group">
        @if(isset($expHeadPermit) && expHeadPermit != '' && $expHeadPermit->can_edit == 1)
            <button type="button" id="editexpenseheadbtn" class="btn btn-default" title="Edit" data-toggle="modal" data-target="#editExpenseHead" 
            data-id="{{$expenseHead->id}}" 
            >
              <i class="fa fa-edit"></i>
            </button>
        @endif
        @if(isset($expHeadPermit) && $expHeadPermit != '' && $expHeadPermit->can_delete == 1)
            <button type="button" id="deleteexpenseheadbtn" class="btn btn-default" title="Delete" data-toggle="modal" data-target="#deleteExpenseHead" 
            data-id="{{$expenseHead->id}}" 
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