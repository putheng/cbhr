@extends('layouts.employer')

@section('content')
<div id="page-wrapper">
	<div class="col-md-12 graphs">
		<div class="xs">
            <h3>Pay for your listing</h3>
			@include ('users.employer.listing.partials.alert')
            <div class="well1 white">
            <table class="table table-bordered">
                <tr>
                    <th>ORDER DESCRIPTION</th>
                    <th class="text-center">QUANTITY</th>
                    <th>AMOUNT</th>
                </tr>
                
                <tr>
                    <td>{{ $listing->title }}</td>
                    <td class="text-center">1</td>
                    <td>$0.00</td>
                </tr>
                
                <tr>
                    <td>&nbsp;</td>
                    <td class="text-right">
                        <select id="jobtype" name="option" class="form-control">
                            <option value="0">Basic Job</option>
                            <option value="10">Urgent Job</option>
                        </select>
                    </td>
                    <td>$<span id="subtotal">0</span>.00</td>
                </tr>

                
                <tr>
                    <td class="text-right" colspan="2">
                        <strong>Amount Payable:</strong>
                    </td>
                    <td>$<span id="payable">0</span>.00</td>
                </tr>
            </table><br>
            <form action="{{ route('employer.listing.payment', $listing) }}" method="post">
                <ul>
                    <div class="form-group{{ $errors->has('term') ? ' has-error': '' }}" style="margin-bottom:0 !important">
                        <input type="checkbox" name="term" id="term">
                        <label for="term" class="control-label">
                            I agree to the <a href="">terms and conditions</a>
                        </label>
                    </div>
                    <div class="form-group{{ $errors->has('disclaimer') ? ' has-error': '' }}">
                        <input type="checkbox" name="disclaimer" id="disclaimer">
                        <label for="disclaimer" class="control-label">
                            I agree that cambodiahr.com will not refund any payments.
                        </label>
                    </div>
                    <br>
                    {{ csrf_field() }}
                    <input type="hidden" name="submitValue" id="submitValue" value="0">
                    <input type="submit" class="btn btn-info" value="Complete Payment">
                </ul>
            </form>
            
            </div>
			
		</div>
		<!-- /Footer -->
		
		<!-- /End footer -->
	</div>
</div>
<!-- /#page-wrapper -->
@endsection

@section('script')
<script type="text/javascript">
    $(document).ready(function(){
        $('#jobtype').on('change', function(){
            var value = $(this).val();

            $('#subtotal').text(value);
            $('#payable').text(value);
            $('#submitValue').val(value);
        });
    });
</script>
@endsection