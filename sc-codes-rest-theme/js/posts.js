var pageCounter = 1;

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

var getNewPost = function( e ) {
	if ( pageCounter <= 35 && e.target.id === "next-post" ) {
		pageCounter++;
	} else if ( pageCounter > 1 && e.target.id === "prev-post" ) {
		pageCounter--;
	} else {
		return;
	}

	getData( '/wp-json/wp/v2/posts/?per_page=1&page=' + pageCounter )
		.then( outputPosts )
		.catch( function( e ) {
			console.log( e );
		} );
};

var outputPosts = function( posts ) {
	var container = document.getElementById( 'post-content' );
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

getData( '/wp-json/wp/v2/posts/?per_page=1' )
	.then( outputPosts )
	.catch( function( e ) {
		console.log( e );
	} );

document.getElementById( 'prev-post' ).addEventListener( 'click', getNewPost );
document.getElementById( 'next-post' ).addEventListener( 'click', getNewPost );
