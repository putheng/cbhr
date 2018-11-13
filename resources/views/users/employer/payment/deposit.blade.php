@extends('layouts.employer')

@section('content')
<div id="page-wrapper">
	<div class="col-md-12 graphs">
		<div class="xs">
			<h3>Make a deposit to your wallet</h3>
			<div class="well1 white">
				<form action="{{ route('employer.payment.deposit') }}" method="post">
					{{ csrf_field() }}
					<h5 class="{{ $errors->has('processor') ? 'text-danger' : 'text-success' }}">Processor </h5>
					<hr style="margin-top:0;"/>
					<ul class="no-margin list-inline processor">
						@foreach(\App\Models\Processor::get() as $processor)
							<li>
								<input {!! old('processor') ==  $processor->id ? 'checked' : '' !!} id="{{ $processor->name }}" type="radio" name="processor" value="{{ $processor->id }}" class="hidden style">
								<label for="{{ $processor->name }}">
									<img src="/images/checking.png" class="checking">
									<img src="/images/{{ strtolower($processor->name) }}.png" width="70" height="70" class="opacity">
								</label>
							</li>
						@endforeach
					</ul>
					@if($errors->has('processor'))
						<span class="help-block text-danger">{{ $errors->first('processor') }}</span>
					@endif
					<br><br>
					<h5 class="{{ $errors->has('amount') ? 'text-danger' : 'text-success' }}">Amount</h5>
					<hr style="margin-top:0;"/>
					<div class="row">
						<div class="col-sm-7">
							<div class="input-group{{ $errors->has('amount') ? ' has-error' : '' }}">
								<span class="input-group-addon">$</span>
								<input value="{{ old('amount') }}" style="letter-spacing: 3px; font-weight: bold;" autocomplete="off" placeholder="00" type="text" class="form-control1" name="amount">
								<span class="input-group-addon">.00</span>
							</div>
							@if($errors->has('amount'))
								<span class="help-block text-danger">{{ $errors->first('amount') }}</span>
							@endif
						</div>
					</div>
					<br>
					
					<div class="form-group">
						<label class="control-label h5 {{ $errors->has('transaction') ? 'text-danger' : 'text-success' }}">Transaction Code</label>
						<hr style="margin-top:0;"/>
						<div class="row">
							<div class="col-sm-7">
								<input value="{{ old('transaction') }}" style="letter-spacing: 10px; font-weight: bold;" autocomplete="off" name="transaction" type="text" class="form-control1" placeholder="00000000">
								
								@if($errors->has('transaction'))
									<span class="help-block text-danger">{{ $errors->first('transaction') }}</span>
								@endif
							</div>
						</div>
					</div>
					
					<br>
					
					<div class="form-group hidden">
						<label class="control-label h5 text-success">Recipient</label>
						<hr style="margin-top:0;"/>
						<div class="row">
							<div class="col-sm-7">
								<input style="letter-spacing: 3px; font-weight: bold;" disabled="disabled" placeholder="093259984" id="disabledInput" type="number" class="form-control1" name="recipient">
							</div>
						</div>
					</div>
						
					<hr>
					
					<p>
						<button type="submit" class="btn btn-primary">
							<i class="fa fa-arrow-circle-o-down"></i>
							&nbsp;&nbsp;SUBMIT&nbsp;&nbsp;
						</button>
					</p>
				
				</form>
			</div>
		</div>
		<!-- /Footer -->
		
		<!-- /End footer -->
	</div>
</div>
<!-- /#page-wrapper -->
@endsection