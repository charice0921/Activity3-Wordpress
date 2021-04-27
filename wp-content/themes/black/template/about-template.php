	<?php 
/* Template Name: ABOUT */
	get_header();
?>

<div class="content-left">

		<img src="http://localhost/ecommerce/wp-content/uploads/2021/04/tool.png" alt="" class="tool"> 
		<p id="blink"> Tambike <br> Motorparts and Accessories  </p>
    <script type="text/javascript">
        var blink = document.getElementById('blink');
        setInterval(function() {
            blink.style.opacity = (blink.style.opacity == 0 ? 1 : 0);
        }, 1500);
    </script>

	<div class="content-right">
		<p class="text"><img src="http://localhost/ecommerce/wp-content/uploads/2021/04/shocks.png" alt="" class="shock">We sell parts, offer services, and <br> custom works for motorcycles.Aims to <br> give quality parts to satisfy the needs <br> of every riders enthusiasts and <br> motorcycle owner.</p>

	</div>

<?php

GET_FOOTER();
?>