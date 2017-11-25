</main>
<footer container class="siteFooter">

	<p>Design uses <a href="http://concisecss.com/">Concise CSS Framework</a>
	</p>
	<p class="float-right">
		<!--Print the current date and timezone-->
		<?php date_default_timezone_set('America/Puerto_Rico');
	print date('l F d,  Y g:iA');
	include('nav.php')
	?>
	</p>
</footer>
</body>

</html>
<?php 
//Turn off buffering
ob_end_flush();
?>