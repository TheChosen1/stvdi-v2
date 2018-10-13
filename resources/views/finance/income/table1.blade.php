<table id="list-table" class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Inv-No</th>
      <th>Inc-Head</th>
      <th>Name</th>
      <th>Date</th>
      <th>Amount</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($allIncome as $income) 
    <tr>
      <td>                   
        <div class="form-check">
          <input class="form-check-input" name="id[]" type="checkbox" value="{{ $income->id }}">
        </div>
      </td>
      <td>{{$income->invoice_no}}</td>
      <td>{{ucwords(strtolower(Designation::getIncomeHeadField($income->inc_head_id ,'inc_head')))}}</td>
      <td>{{ucwords(strtolower($income->name))}}</td>
      <td>{{$income->date}}</td>
      <td>{{number_format($income->amount,2)}}</td>
      <td>
        <div class="btn-group">
         @if(isset($incPermit) && $incPermit->can_edit==1)
            <button type="button" id="editincomebtn" class="btn btn-default" title="Edit" data-toggle="modal" data-target="#editIncome" 
            data-id="{{$income->id}}" 
            data-incomehead="{{$income->inc_head_id}}" 
            data-name="{{ucwords(strtolower($income->name))}}" 
            data-date="{{$income->date}}" 
            data-amount="{{$income->amount}}"
            data-note="{{$income->note}}"            
            >
              <i class="fa fa-edit"></i>
            </button>
        @endif
        @if(isset($incPermit) && $incPermit->can_delete==1)
            <button type="button" id="deleteincomebtn" class="btn btn-default" title="Delete" data-toggle="modal" data-target="#deleteIncome" 
            data-id="{{$income->id}}" 
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
      <th>Inc-Head</th>
      <th>Name</th>
      <th>Date</th>
      <th>Amount</th>
      <th>Action</th>
    </tr>
  </tfoot>
</table>