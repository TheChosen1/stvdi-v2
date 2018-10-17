
<div class="card-body">

  <div class="row">
    <input id="cid" name="cid" type="hidden" value="{{ Session::get('cid') }}"></input>
    <div class="col-sm-6 form-group{{ $errors->has('trans_head_id') ? ' has-feedback' : '' }}">
      <label>Transaction Head <code>*</code></label>
      <select id="trans_head_id" name="trans_head_id" class="form-control select2" style="width: 100%;" required autofocus>
        <option value="">None</option>
        @if (count($allTransactionHead) != '')
          @foreach ($allTransactionHead as $transactionHead)
        <option value="{{$transactionHead->id}}">{{ucwords(strtolower($transactionHead->trans_head))}}</option>
          @endforeach
        @endif
      </select>
         @if ($errors->has('trans_head_id'))
            <span class="help-block">
                <strong>{{ $errors->first('trans_head_id') }}</strong>
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
    <div class="col-sm-12 form-group{{ $errors->has('document') ? ' has-feedback' : '' }}">
      <label for="image">Attach Document</label>
      <div class="input-group">
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="document" name="document">
          <label class="custom-file-label" for="document">Choose file</label>
        </div>
      </div>
    </div>        
    <div class="col-sm-12 form-group{{ $errors->has('narration') ? ' has-feedback' : '' }}">
      <label>Narration </label>
      <textarea class="form-control" placeholder="Description" id="narration" name="narration" value="{{ old('narration') }}" autofocus></textarea> 
    </div>                  
  </div>

</div>
<!-- /.card-body -->

