<?php

/**
 * Fügt ein Google Tracking hinzu
 *
 * Eigenen Code einfügen, wird von Google Bereit gestellt
 *
 * @return [type] [description]
 */
function theme_tracking() {
	// Template
	$output = "\n\n
	<!-- TRACKING -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-5110625-14', 'auto');
	  ga('send', 'pageview');

	</script>
	<!-- End of Tracking -->
	\n\n ";

	echo $output;
};
//add_action( 'wp_footer', 'theme_tracking' );


/**
 * Fügt einen Google Tag hinzu
 *
 * Mit dem Google Tag Manager kann man Scripte von extern steuern
 *
 * @return void
 */
function theme_google_tag_manager() {
		// Template
	$output = "\n\n
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-W97FVF');</script>
		<!-- End Google Tag Manager -->
	\n\n ";

	echo $output;
}
add_action( 'wp_head', 'theme_google_tag_manager' );
