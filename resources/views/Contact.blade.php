<div class="contact" id="contact">
	
	<div id="app" class="box" v-scroll="handleScroll">

		<h4 class="francais">Vous voulez me contacter? C'est par ici!</h4>
		<h4 class="anglais">Wanna get in touch? Write me here!</h4><br><br>

		<form method="post" action="{{ route('inscription') }}">

			@csrf
		

		
			<span class="francais">Bonjour Aleth, je m'appelle <input type="text" name="name" placeholder="tapez votre nom ici">.<br> Je voudrais vous écrire au sujet de <input type="text"  placeholder="sujet" name="sujet">. <br>
				Vous pouvez me contacter à <input type="mail" name="mail" placeholder="cette adresse email"> ou <input type="text" name="numero" placeholder="ce numéro de téléphone">. <br><br>
			<textarea type="text" name="message" placeholder="Voici mon message:"></textarea></span>
			<!-- <span class="anglais">Hello Aleth, My name is <input type="text" name="name" placeholder="your name here">.<br> I would like to contact you about <input type="text"  placeholder="subject" name="sujet">. <br>
				You can answer me on my <input type="mail" name="mail" placeholder="email"> or call me <input type="text" name="numero" placeholder="here">. <br><br>
			<textarea type="text" name="message" placeholder="Here is the thing:"></textarea></span>
<br> -->
			<input type="submit" name="envoyer" value="envoyer">


		</form>



	</div>
</div>
<!-- focus halo -->
