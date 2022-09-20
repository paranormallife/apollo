<script>

	function menuToggle() {
		var element = document.getElementById("body");
		element.classList.toggle("menu-active");
	}



	// Close menu on menu item click
	jQuery( '.menu-item' ).on( 'click', function() {
			var element = document.getElementById("body");
			element.classList.remove("menu-active");
	});

	// Child Menus Toggle
	jQuery( '.menu-item-has-children' ).on( 'click', function() {
			jQuery( this ).toggleClass( 'active' );
	});

</script>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>