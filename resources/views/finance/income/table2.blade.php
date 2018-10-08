<table id="list-table" class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Income-Head</th>
      <th>Desciption</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($allIncomeHead as $incomeHead) 
    <tr>
      <td>                   
        <div class="form-check">
          <input class="form-check-input" name="id[]" type="checkbox" value="{{ $incomeHead->id }}">
        </div>
      </td>
      <td>{{ucwords(strtolower($incomeHead->inc_category))}}</td>
      <td>{{ucwords(strtolower($incomeHead->description))}}</td>
      <td>
        <div class="btn-group">
        @if(isset($incHeadPermit) && $incHeadPermit->can_edit==1)
            <button type="button" id="editincomeheadbtn" class="btn btn-default" title="Edit" data-toggle="modal" data-target="#editIncomeHead" 
            data-id="{{$incomeHead->id}}" 
            >
              <i class="fa fa-edit"></i>
            </button>
        @endif
        @if(isset($incHeadPermit) && $incHeadPermit->can_delete==1)
            <button type="button" id="deleteincomeheadbtn" class="btn btn-default" title="Delete" data-toggle="modal" data-target="#deleteIncomeHead" 
            data-id="{{$incomeHead->id}}" 
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
      <th>Income-Head</th>
      <th>Desciption</th>
      <th>Action</th>
    </tr>
  </tfoot>
</table>