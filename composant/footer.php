<SCRIPT TYPE="text/javascript">

$('#confirmerpassword').keyup(function(evenement)
	{
			var password = $('#mdp').val();
			var confirmerpassword = $('#confirmerpassword').val();

			if(password==confirmerpassword)
				{
					//alert('Mot de passe identique');
					$('#cmp').css('background','green');
					$('#cmp').css('color','white');
					$('#cmp').css('padding','5px');
					$('#cmp').html('Mot de passe Identique');
				}
			else
				{
					//alert('Mot de passe non identique');
					$('#cmp').css('background','red');
					$('#cmp').css('color','white');
					$('#cmp').css('padding','5px');
					$('#cmp').html('Mot de passe incorrect');
				}
			
	}
)

</script>

	<!-- Bottom scripts (common) -->
	<script src="home/assets/js/gsap/TweenMax.min.js"></script>
	<script src="home/assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="home/assets/js/bootstrap.js"></script>
	<script src="home/assets/js/joinable.js"></script>
	<script src="home/assets/js/resizeable.js"></script>
	<script src="home/assets/js/neon-api.js"></script>
	<script src="home/assets/js/jquery.validate.min.js"></script>
	<script src="home/assets/js/neon-login.js"></script>

	<!-- JavaScripts initializations and stuff -->
	<script src="home/assets/js/neon-custom.js"></script>

	<!-- Demo Settings -->
    <script src="home/assets/js/neon-demo.js"></script>