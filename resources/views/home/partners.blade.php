@extends('home.index')

@section('title')
    <title>Cambodia HR | Cambodia’s leading human resources and recruitment site.</title>
@endsection

@section('content')

<div class="page-wrap">
	<a id="go_back_button" class="btn btn-default btn-xs pull-right no-decoration margin-bottom-5" href="javascript:GoBack()">Go Back</a>
	<div class="clearfix"></div>
	<div class="job-details-wrap">
		<p class="h1 light text-uppercase text-center">EARN MORE WITH CambodiaHR</p>
		<p class="text-center h4 para">
			We've partnered with digital marketers like you to promote our jobs to users around the globe. Our digital marketers stick with us because of our ever-expanding catalog of quality jobs and unsurpassed reputation for reliability - we pay commissions on time, every time so you never have to worry about when you will get paid.
		</p>
		<br><br>
		<div class="row">
			<div class="col-md-5">
				<p class="h3 light">
					<span class="glyphicon glyphicon-usd text-primary"></span>
					EARN CASH FOR YOUR VISITORS
				</p>
				<p class="text-justify h4 para">Earn up to $10 per 1000 visits to your job URLs. referrers, and specific dates. We payout users every month for earnings above $10.00.</p>
				<p class="text-justify h4 para">We know that quality marketing is worth paying for. We work with our job creators to set the most competitive commissions possible</p>
			</div>
			<div class="col-md-6 pull-right">
				<p class="h3 light">
					<span class="glyphicon glyphicon-bullhorn text-primary"></span>
					CHOOSE THE JOBS YOU WANT TO PROMOTE
				</p>
				<p class="text-justify h4 para">With CambodiaHR, you select the jobs and offers to promote. Our online marketplace contains thousands of jobs that you can choose from, so you’re sure to always find offers that will profitably appeal to your audience.</p>
			</div>
		</div><br><br>
		<div class="row">
			<div class="col-md-5">
				<p class="h3 light">
					<span class="glyphicon glyphicon-time text-primary"></span>
					GET PAID ON TIME
				</p>
				<p class="text-justify h4 para">We’ve built our reputation by paying our affiliates on time.You can choose to get paid as often as every month, through multiple payment options.</p>
				<p class="text-justify h4 para"> You’ll always get credit for your share even if users clicking your jobs.</p>
			</div>
			<div class="col-md-6 pull-right">
				<p class="h3 light">
					<span class="glyphicon glyphicon-refresh text-primary"></span>
					RECURRING EARN
				</p>
				<p class="text-justify h4 para">Many of the jobs available on CambodiaHR are share on a recurring subscription basis.These are some of the greatest opportunities for digital marketers because as long as the users continues the subscription, you’ll continue earning money month after month, year after year, long after the original share.</p>
			</div>
		</div><br><br>
		<div class="row">
			<div class="col-md-12">
				<p class="h3 light">
					<span class="glyphicon glyphicon-usd text-primary"></span>
					How much money can I make? 
				</p>
				<p class="text-justify h4 para">
					So how much money can you make with CambodiaHR?<br>
					It's a good question. The amount of money you can make with CambodiaHR 
					depends on where the people who click your promote jobs.<br>
					The CambodiaHR pays upto $10.00 for 1000 views, $10.00 may sound 
					small, but just think for a second, How many people use Facebook or Twitter? Over 
					500 million people use Facebook on a daily basis. If you could get even a
					small portion of Facebook users to click on your job, you could be 
					earning a tidy amount of money. A great way to attract lots of users to 
					click on your links is to set up a Facebook group. Many of these groups 
					have more than a million users - so if you get your thinking cap on, you
					can make good money very quickly!!!.
				</p>
			</div>
		</div>
		<br><br>
		<div class="row">
			<div class="col-md-5">
				<p class="h3 light">
					<span class="glyphicon glyphicon-education text-primary"></span>
					HOW DO I MAKE MONEY FROM CAMBODIAHR ?
				</p>
				<p class="h4 para">
					The answer is:<br>
					1. <a class="text-primary" href="{{ route('facebook.login') }}">Login with Facebook</a> to create an account<br>
					2. Search your favorite job by function, location,industry ...<br>
					3. Click post button! and you done <br>
				</p>
			</div>
			<div class="col-md-6 pull-right">
				<p class="h3 light">
					<span class="glyphicon glyphicon-user text-primary"></span>
					PARTNERSHIPS TO INCREASE YOUR INCOME
				</p>
				<p class="text-justify h4 para">
					Our unique joint venture program allows you to easily split earnings with other CambodiaHR partners.
					</p><ol>
						<li><b>Facebook.com</b>: Millions of people use Facebook everyday, so Facebook is the best way to post your jobs and publish them.</li>
						<li><b>Facebook Comments</b>: This is similar to above "Post on comment". Just the difference is that this time you are comment on Facebook post related to your topic.</li>
						<li><b>Twitter.com</b>: Get some followers on twitter and post your jobs there so your followers can click on these jobs.</li>
						<li><b>Ask your Friends</b>: Share jobs to your friends by email or message.</li>
					</ol>
				<p></p>
			</div>
		</div>
		<br><br>
		<div class="row">
			<div class="col-md-12">
				<div class="jumbotron">
					<p class="h1 light">
						Sign Up &amp; Start Earning Today!
					</p>
					<p class="para">Go ahead, what are you waiting for? <a class="text-primary" href="{{ route('facebook.login') }}">Create your account</a> now.
					<br>
					<p></p>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection