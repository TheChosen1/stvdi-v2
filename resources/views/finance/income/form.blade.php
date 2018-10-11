
    <div class="card-body">

      <div class="row">
        <input id="cid" name="cid" type="hidden" value="{{ Session::get('cid') }}"></input>
        <input id="education_id" name="education_id" type="hidden" value="{{ Session::get('education_id') }}"></input>
        <input id="user_code" name="user_code" type="hidden" value="{{ Session::get('client_code') }}"></input>
        <div class="col-sm-12 form-group{{ $errors->has('inc_head_id') ? ' has-feedback' : '' }}">
          <label>Income Head <code>*</code></label>
          <select id="inc_head_id" name="inc_head_id" class="form-control" required>
            <option value="">Select</option>
            <option value="1">J.S.S 1</option>
            <option value="2">J.S.S 2</option>
            <option value="3">J.S.S 3</option>
            <option value="4">S.S.S 1</option>
            <option value="5">S.S.S 2</option>
            <option value="6">S.S.S 3</option>
          </select>
             @if ($errors->has('inc_head_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('inc_head_id') }}</strong>
                </span>
            @endif
        </div> 
        <div class="col-sm-12 form-group{{ $errors->has('name') ? ' has-feedback' : '' }}">
          <label>Name <code>*</code></label>
          <input type="text" class="form-control" placeholder="Name" id="name" name="name" value="{{ old('name') }}" required autofocus>
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div> 
        <div class="col-sm-6 form-group{{ $errors->has('invoice_no') ? ' has-feedback' : '' }}">
          <label>Invoice Number </label>
          <input type="text" class="form-control" placeholder="Invoice Number" id="invoice_no" name="invoice_no" value="{{ old('invoice_no') }}" required autofocus>
        </div> 
        <div class="col-sm-6 form-group{{ $errors->has('date') ? ' has-feedback' : '' }}">
          <label>Date <code>*</code></label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="fa fa-calendar"></i>
              </span>
            </div>
            <input type="text" class="form-control" placeholder="yyyy-mm-dd" id="date" name="date" value="{{ old('date') }}" required autofocus>
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
          <textarea class="form-control" placeholder="Description" id="note" name="note" value="{{ old('note') }}" required autofocus></textarea> 
        </div>                  
      </div>

    </div>
    <!-- /.card-body -->

