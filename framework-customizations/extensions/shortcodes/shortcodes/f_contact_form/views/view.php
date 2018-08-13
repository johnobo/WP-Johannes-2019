<?php
 
/*
 * V A R I A B L E S 
 */
 
// Title       : $atts["f_item_title"]
// Mail to     : $atts["f_mail_to"]
//



/*
 * F U N C T I O N S 
 */

 $message = "";
 
 if( isset( $_POST["f-cf-submitt"] ) ) {
 	$to      = $atts["f_mail_to"];
 	$subject = $_POST["f-cf-subject"];
 	$message = nl2br( $_POST["f-cf-message"] ) ;
 	$headers = "Content-type: text/html";
	
 	if( wp_mail( $to, $subject, $message,  $headers ) ) {
 		$message = "<div class=\"f-cf__message f-cf__message-success\">Vielen dank für Ihre Anfrage!</div>";
 	} else {
 		$message = "<div class=\"f-cf__message f-cf__message-error\">Es gab einen Fehler. Ihre Anfrage konnte nicht versendet werden. <br> Bitte melden Sie sich direkt bei: " . $atts["f_mail_to"] . "</div>";
 	}
	
 }


/*
 * T E M P L A T E
 */
 
?>

<div class="f-cf">
	<h1 class="f-cf__title"><?php echo $atts["f_item_title"]; ?></h1>
	
	<?php echo $message; ?>
	
	<form action="#" method="post" class="f-cf__form">
		
		<input type="hidden" value="true" name="f-cf-submitt" />
		
		<label for="f-cf-name" class="f-cf__label">Ihr Name <span class="f-cf__required-asterix">*</span>
			<input type="text" id="f-cf-name" name="f-cf-name" value="" class="f-cf__input f-cf__input-text" placeholder="Name" required />
		</label>
		
		<label for="f-cf-mail" class="f-cf__label">Ihre E-Mail-Adresse <span class="f-cf__required-asterix">*</span>
			<input type="email" id="f-cf-mail" name="f-cf-mail" value="" class="f-cf__input f-cf__input-text" placeholder="ihre@adresse.de" required />
		</label>
		
		<label for="f-cf-subject" class="f-cf__label">Betreff
			<input type="text" id="f-cf-subject" name="f-cf-subject" value="" class="f-cf__input f-cf__input-text" placeholder="Betreff" />
		</label>
		
		<label for="f-cf-message"  class="f-cf__label">Ihre Nachricht
			<textarea id="f-cf-message" name="f-cf-message" class="f-cf__input f-cf__input-textarea"></textarea>
		</label>
		
		<input type="submit" value="Nachricht senden" class="uk-button f-cf__submit">
	
	</form>
</div>