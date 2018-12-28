@extends('layouts.publisher')

@section('content')
<div id="page-wrapper">
	<div class="col-md-12 graphs">
		<div class="xs">
			<div class="row wrapper text-center">
				<div class="col-xs-6 col-md-3 b-r b-light">
					<span class="h3 text-danger font-bold m-t m-b-xs block">
						{{ $posts->totalViewThisMonth }}
					</span>
					<small class="h5 text-muted m-b help-block">Views</small>
				</div>
				<div class="col-xs-6 col-md-3 b-r b-light">
					<span class="h3 text-danger font-bold m-t m-b-xs block">
						${{ ($posts->totalViewThisMonth * $posts->ecmp) }}
					</span>
					<small class="h5 text-muted m-b help-block">Earnings</small>
					
				</div>
				<div class="col-xs-6 col-md-3 b-r b-light">
					<span class="h3 text-danger font-bold m-t m-b-xs block">
						${{ $posts->ecmp }}
					</span>
					<small class="h5 text-muted m-b help-block" title="Effective Cost per 1000">eCPM</small>
				</div>
				<div class="col-xs-6 col-md-3">
					<span class="h3 text-success font-bold m-t m-b-xs block">
						${{ number_format(auth()->user()->usd, 3) }}
					</span>
					<small class="h5 text-muted m-b help-block">Total Available Earnings</small>
				</div>
			</div>
			<br>
			<div class="well1 white">
				
				<div style="width:100%;">
					<canvas id="canvas"></canvas>
				</div>
			</div>
		</div>
		<!-- /Footer -->
		
		<!-- /End footer -->
	</div>
</div>
<!-- /#page-wrapper -->
@endsection

@section('script')
    <script src="{{ asset('js/Chart.bundle.js') }}"></script>
    <script src="{{ asset('js/utils.js') }}"></script>
	
    <script>
        var config = {
            type: 'line',
            data: {
                labels: {{ day_of_month() }},
                datasets: [{
                    label: "Click",
                    fill: false,
                    backgroundColor: window.chartColors.blue,
                    borderColor: window.chartColors.blue,
                    data:
						{{ $posts->totalViews }},
                }]
            },
            options: {
                responsive: true,
                title:{
                    display:true,
                    text:'Total post clicks this month'
                },
                tooltips: {
                    callbacks: {
    					label: function(tooltipItems, data) {
                            return 'Click:'+ tooltipItems.yLabel + '; Earn: '+ (tooltipItems.yLabel * {{ $posts->ecmp }}).toFixed(3) +'$' ;
                        }
    				},
                    mode: 'index',
                    intersect: false,
                },
                hover: {
                    mode: 'nearest',
                    intersect: true
                },
                scales: {
                    xAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Month'
                        }
                    }],
                    yAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Value'
                        }
                    }]
                }
            }
        };

        window.onload = function() {
            var ctx = document.getElementById("canvas").getContext("2d");
            window.myLine = new Chart(ctx, config);
        };
    </script>
    <style>
		canvas{
			-moz-user-select: none;
			-webkit-user-select: none;
			-ms-user-select: none;
		}
    </style>
@endsection