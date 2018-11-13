@if(session('success'))
    <div class="alert alert-success" role="alert">
    	<strong>Well done!</strong> {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger" role="alert">
    	<strong>Error!</strong> {{ session('error') }}
    </div>
@endif
