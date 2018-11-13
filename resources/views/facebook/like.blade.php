<!DOCTYPE html>
<html>
	<head>
		<style>
		.centered {
		  position: fixed;
		  top: 50%;
		  left: 50%;
		  /* bring your own prefixes */
		  transform: translate(-50%, -50%);
		}
		</style>
	</head>
	<body>
		<div class="centered">
			<div style="position:relative;">
				<div style="position:absolute;">
					<div class="fb-like" 
						data-href="https://www.facebook.com/CambodiaHRcom/" 
						data-layout="button" 
						data-action="like" 
						data-size="large" 
						data-show-faces="false" 
						data-share="false">
					</div>
				</div>
				<div>
					<a href="#">
						<img style="width:70px;" src="/images/read.png">
					</a>
				</div>
			</div>
		</div>
		
		
		<div id="fb-root"></div>
		<script>
			(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12&appId=279909695691770&autoLogAppEvents=1';
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script>
		
	</body>
</html>
