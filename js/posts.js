var getData = function( url ) {
	return new Promise( function( resolve, reject ) {
		var xhr = new XMLHttpRequest();
		var handleResponse = function() {
			if ( this.readyState === this.DONE ) {
				if ( this.status === 200 ) {
					var posts = JSON.parse( xhr.responseText );
					resolve( posts );
				} else {
					reject( this.statusText );
				}
			}
		};

		xhr.open( 'GET', url );
		xhr.onreadystatechange = handleResponse;
		xhr.onerror = function( error ) { reject( error ) };
		xhr.send();
	} );
};

var outputPosts = function( posts ) {
	var container = document.getElementById( 'content' );
	var postContent = '';

	posts.map( function( post ) {
		postContent += '<article class="list-group-item"><h1 class=post-title>',
		postContent += post.title.rendered,
		postContent += '</h1><div class="post-content">',
		postContent += post.content.rendered,
		postContent += '</div></article>';
	}.bind( this ) );

	container.innerHTML = postContent;
};

getData( '/wp-json/wp/v2/posts/?filter[orderby]=rand&filter[posts_per_page]=1' )
	.then( outputPosts )
	.catch( function( e ) {
		console.log( e );
	} );

document.getElementById( 'new-post' ).addEventListener( 'click', function() {
	getData( '/wp-json/wp/v2/posts/?filter[orderby]=rand&filter[posts_per_page]=1' )
		.then( outputPosts )
		.catch( function( e ) {
			console.log( e );
		} );
} );
