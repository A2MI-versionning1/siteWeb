<link rel='stylesheet'  media='screen'  type='text/css'  href='essai.css' />

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript">
        $(function() {
          if ($.browser.msie && $.browser.version.substr(0,1)<7)
          {
                $('li').has('ul').mouseover(function(){
                        $(this).children('ul').show();
                        }).mouseout(function(){
                        $(this).children('ul').hide();
                        })
          }
        });
</script>
<ul id="menu">
	<li><a href="#">Présentation</a></li>
	<li>
		<a href="#">Savoir faire</a>
		<ul>
			<li><a href="#">Flyers</a>
				<ul>
					<li><a href='#'>A4</a></li>
					<li><a href='#'>A5</a></li>
					<li><a href='#'>A6</a></li>
				</ul>
			</li>
			<li><a href="#">Logos</a></li>
			<li><a href="#">Cartes de visites</a></li>
			<li><a href="#">Etiquettes</a></li>
			<li><a href="#">Chartes graphiques</a></li>
		</ul>
	</li>
	<li><a href="#">Vos réalitions types</a></li>
	<li><a href="#">Contact</a>
		<ul>
			<li><a href="#">Formulaire contact</a></li>
			<li><a href="#">Situer l'entreprise</a></li>
		</ul>
	</li>
	<li><a href="#">Nos références et réalisations</a>
		 <ul>
			<li><a href="#">Flyers</a>
				<ul>
					<li><a href='#'>A4</a></li>
					<li><a href='#'>A5</a></li>
					<li><a href='#'>A6</a></li>
				</ul>
			</li>
			<li><a href="#">Logos</a></li>
			<li><a href="#">Cartes de visites</a></li>
			<li><a href="#">Etiquettes</a></li>
			<li><a href="#">Chartes graphiques</a></li>
		</ul>
	</li>
</ul>

