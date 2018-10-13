
    <div class="card-body">

      <div class="row">
        <input id="cid" name="cid" type="hidden" value="{{ Session::get('cid') }}"></input>
        <input id="education_id" name="education_id" type="hidden" value="{{ Session::get('education_id') }}"></input>
        <input id="user_code" name="user_code" type="hidden" value="{{ Session::get('client_code') }}"></input>
        <div class="col-sm-6 form-group{{ $errors->has('exp_head_id') ? ' has-feedback' : '' }}">
          <label>Expense Head <code>*</code></label>
          <select id="exp_head_id" name="exp_head_id" class="form-control" required>
            <option value="">None</option>
            @if (count($allExpenseHead) != '')
              @foreach ($allExpenseHead as $expenseHead)
            <option value="{{$expenseHead->id}}">{{ucwords(strtolower($expenseHead->exp_head))}}</option>
              @endforeach
            @endif
          </select>
             @if ($errors->has('exp_head_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('exp_head_id') }}</strong>
                </span>
            @endif
        </div> 
        <div class="col-sm-6 form-group{{ $errors->has('name') ? ' has-feedback' : '' }}">
          <label>Title <code>*</code></label>
          <input type="text" class="form-control" placeholder="Title" id="name" name="name" value="{{ old('name') }}" required autofocus>
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div> 
        <div class="col-sm-6 form-group{{ $errors->has('invoice_no') ? ' has-feedback' : '' }}">
          <label>Invoice Number </label>
          <input type="text" class="form-control" placeholder="Invoice Number" id="invoice_no" name="invoice_no" value="{{ old('invoice_no') }}" autofocus>
        </div> 
        <div class="col-sm-6 form-group{{ $errors->has('date') ? ' has-feedback' : '' }}">
          <label>Date <code>*</code></label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="fa fa-calendar"></i>
              </span>
            </div>
            <input type="text" class="form-control" placeholder="yyyy-mm-dd" id="date" name="date" value="{{ date('Y-m-d') }}" required autofocus>
              @if ($errors->has('date'))
                  <span class="help-block">
                      <strong>{{ $errors->first('date') }}</strong>
                  </span>
              @endif              
          </div>
        </div>
        <div class="col-sm-6 form-group{{ $errors->has('amount') ? ' has-feedback' : '' }}">
          <label>Amount <code>*</code></label>
          <input type="text" class="form-control" placeholder="Amount" id="amount" name="amount" value="{{ old('amount') }}" required autofocus>
            @if ($errors->has('amount'))
                <span class="help-block">
                    <strong>{{ $errors->first('amount') }}</strong>
                </span>
            @endif
        </div> 
        <div class="col-sm-6 form-group{{ $errors->has('document') ? ' has-feedback' : '' }}">
          <label for="image">Attach Document</label>
          <div class="input-group">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="document">
              <label class="custom-file-label" for="document">Choose file</label>
            </div>
          </div>
        </div>        
        <div class="col-sm-12 form-group{{ $errors->has('note') ? ' has-feedback' : '' }}">
          <label>Note </label>
          <textarea class="form-control" placeholder="Description" id="note" name="note" value="{{ old('note') }}" autofocus></textarea> 
        </div>                  
      </div>

    </div>
    <!-- /.card-body -->

