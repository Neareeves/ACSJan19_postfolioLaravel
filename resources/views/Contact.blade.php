
<div class="contact" id="contact">
	
	<div id="app" class="box" v-scroll="handleScroll">

		<h4 class="francais">Vous voulez me contacter? C'est par ici!</h4>
		<h4 class="anglais">Wanna get in touch? Write me here!</h4><br><br>

		<form class="contactform" method="post" action="{{ route('inscription') }}">

			@csrf

<div class="francais">
	
			<span class=" gridauto">
				<input type="text" name="name[]" placeholder="Votre nom">
				<input type="text" name="mail[]" placeholder="Votre email">
				<input type="text"  placeholder="Sujet" name="sujet[]">
				<input type="text" name="numero[]" placeholder="Téléphone">
				<textarea type="text" name="message[]" placeholder="Votre message"></textarea>
				<img class="logocontact" src="http://localhost:8000/images/logoaac.png">

			</span>
</div>
<div class="anglais">
	
			<span class="gridauto">
				<input type="text" name="name[]" placeholder="Your name">
				<input type="text" name="mail[]" placeholder="Email">
				<input type="text"  placeholder="What is your message about" name="sujet[]">
				<input type="text" name="numero[]" placeholder="Phone number">
				<textarea type="text" name="message[]" placeholder="Your message"></textarea>
				<img class="logocontact" src="http://localhost:8000/images/logoaac.png">

			</span>
</div>
			<!-- <span class="francais">Bonjour Aleth, je m'appelle <input type="text" name="name" placeholder="tapez votre nom ici">.<br> Je voudrais vous écrire au sujet de <input type="text"  placeholder="sujet" name="sujet">. <br>
				Vous pouvez me contacter à <input type="mail" name="mail" placeholder="cette adresse email"> ou <input type="text" name="numero" placeholder="ce numéro de téléphone">. <br><br>
				<textarea type="text" name="message" placeholder="Voici mon message:"></textarea></span> -->
			<!-- <span class="anglais">Hello Aleth, My name is <input type="text" name="name" placeholder="your name here">.<br> I would like to contact you about <input type="text"  placeholder="subject" name="sujet">. <br>
				You can answer me on my <input type="mail" name="mail" placeholder="email"> or call me <input type="text" name="numero" placeholder="here">. <br><br>
			<textarea type="text" name="message" placeholder="Here is the thing:"></textarea></span>
			<br> -->
			<input type="submit" name="envoyer" value="Envoyer">


		</form>



	</div>
</div>

<!-- focus halo -->
