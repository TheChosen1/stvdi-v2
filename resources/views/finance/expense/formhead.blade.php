
<div class="card-body">

  <div class="row">
    <input id="cid" name="cid" type="hidden" value="{{ Session::get('cid') }}"></input>
    <div class="col-sm-12 form-group{{ $errors->has('exp_head') ? ' has-feedback' : '' }}">
      <label>Title <code>*</code></label>
      <input type="text" class="form-control" placeholder="Title" id="exp_head" name="exp_head" value="{{ old('exp_head') }}" required autofocus>
        @if ($errors->has('exp_head'))
            <span class="help-block">
                <strong>{{ $errors->first('exp_head') }}</strong>
            </span>
        @endif
    </div>        
    <div class="col-sm-12 form-group{{ $errors->has('note') ? ' has-feedback' : '' }}">
      <label>Note </label>
      <textarea class="form-control" placeholder="Description" id="note" name="note" value="{{ old('note') }}" autofocus></textarea> 
    </div>                  
  </div>

</div>
<!-- /.card-body -->

