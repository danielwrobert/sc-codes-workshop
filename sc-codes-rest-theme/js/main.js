/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};

/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {

/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;

/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			exports: {},
/******/ 			id: moduleId,
/******/ 			loaded: false
/******/ 		};

/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);

/******/ 		// Flag the module as loaded
/******/ 		module.loaded = true;

/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}


/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;

/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;

/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";

/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ function(module, exports) {

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

	document.getElementById( 'new-post' ).addEventListener( 'click', function() {
		if ( pageCounter <= 35 ) {
			pageCounter++;
		}
		getData( '/wp-json/wp/v2/posts/?per_page=1&page=' + pageCounter )
			.then( outputPosts )
			.catch( function( e ) {
				console.log( e );
			} );
	} );


/***/ }
/******/ ]);