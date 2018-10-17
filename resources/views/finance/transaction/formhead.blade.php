
<div class="card-body">

  <div class="row">
    <input id="cid" name="cid" type="hidden" value="{{ Session::get('cid') }}"></input>
    <div class="col-sm-12 form-group{{ $errors->has('trans_type_id') ? ' has-feedback' : '' }}">
      <label>Transaction Type <code>*</code></label>
      <select id="trans_type_id" name="trans_type_id" class="form-control select2" style="width: 100%;" required autofocus>
        <option value="">None</option>
        @if (count($allTransactionType) != '')
          @foreach ($allTransactionType as $transactionType)
        <option value="{{$transactionType->id}}">{{ucwords(strtolower($transactionType->name))}}</option>
          @endforeach
        @endif
      </select>
         @if ($errors->has('trans_type_id'))
            <span class="help-block">
                <strong>{{ $errors->first('trans_type_id') }}</strong>
            </span>
        @endif
    </div>
    <div class="col-sm-12 form-group{{ $errors->has('trans_head') ? ' has-feedback' : '' }}">
      <label>Transaction Head <code>*</code></label>
      <input type="text" class="form-control" placeholder="Head Title" id="trans_head" name="trans_head" value="{{ old('trans_head') }}" required autofocus>
        @if ($errors->has('trans_head'))
            <span class="help-block">
                <strong>{{ $errors->first('trans_head') }}</strong>
            </span>
        @endif
    </div>                        
  </div>

</div>
<!-- /.card-body -->

