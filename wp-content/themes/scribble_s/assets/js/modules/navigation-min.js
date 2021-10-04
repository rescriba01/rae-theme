jQuery( document ).ready(
	function( $ ) {
		$( '.hideable' ).on(
			'click',
			function() {
				$( this ).hide();
			}
		);

		// Navigation

		/*$( 'header#masthead .search a, #search_frame a.search_close, #search_frame .bgclick' ).click(
			function( e ) {
				e.preventDefault();
				$( '#search_frame' ).fadeToggle( 'fast' );
			}
		);*/
		$( '#mobile-nav ul li.menu-item-has-children>a' ).click(
			function( e ) {
				e.preventDefault();
				$( this ).parent( 'li' ).children( 'ul.sub-menu' ).slideToggle( 'fast' );
				$( this ).parent( 'li' ).toggleClass( 'expanded' );
			}
		);
		$( 'ul.menu-navigation-contents li.menu-item-has-children>a' ).click(
			function( e ) {
				e.preventDefault();
			}
		);
		$( 'header#masthead button.hamburger' ).click(
			function() {
				$( '#mobile-nav' ).toggleClass( 'active' );
				$( this ).toggleClass( 'is-active' );
				$( 'html,body' ).toggleClass( 'fixed' );
			}
		);
	}
);
