
/**
 * @author mrdoob / http://mrdoob.com/
 */
import { OrbitControls } from './OrbitControls.js';
var APP = {

	Player: function () {

		var renderer = new THREE.WebGLRenderer( { antialias: true } );
		renderer.setPixelRatio( window.devicePixelRatio );
		renderer.outputEncoding = THREE.sRGBEncoding;
		var cameraHUD,sceneHUD,hudBitmap,hudCanvas;
		
		
		var loader = new THREE.ObjectLoader();
		var camera, scene, controls;
		var cubeMap;
		var vrButton = VRButton.createButton( renderer );
		var listener = new THREE.AudioListener();
		var events = {};

		var dom = document.createElement( 'div' );
		dom.appendChild( renderer.domElement );

		this.dom = dom;

		this.width = 500;
		this.height = 500;
		playAmbient();
		
		this.load = function ( json ) {

			var project = json.project;

			renderer.shadowMap.enabled = project.shadows === true;
			renderer.xr.enabled = project.vr === true;
			HDRTextureLoader();
			this.setScene( loader.parse( json.scene ) );
			this.setCamera( loader.parse( json.camera ) );

			events = {
				init: [],
				start: [],
				stop: [],
				keydown: [],
				keyup: [],
				mousedown: [],
				mouseup: [],
				mousemove: [],
				touchstart: [],
				touchend: [],
				touchmove: [],
				update: []
			};

			var scriptWrapParams = 'player,renderer,scene,camera';
			var scriptWrapResultObj = {};

			for ( var eventKey in events ) {

				scriptWrapParams += ',' + eventKey;
				scriptWrapResultObj[ eventKey ] = eventKey;

			}

			var scriptWrapResult = JSON.stringify( scriptWrapResultObj ).replace( /\"/g, '' );

			for ( var uuid in json.scripts ) {

				var object = scene.getObjectByProperty( 'uuid', uuid, true );

				if ( object === undefined ) {

					console.warn( 'APP.Player: Script without object.', uuid );
					continue;

				}

				var scripts = json.scripts[ uuid ];

				for ( var i = 0; i < scripts.length; i ++ ) {

					var script = scripts[ i ];

					var functions = ( new Function( scriptWrapParams, script.source + '\nreturn ' + scriptWrapResult + ';' ).bind( object ) )( this, renderer, scene, camera );

					for ( var name in functions ) {

						if ( functions[ name ] === undefined ) continue;

						if ( events[ name ] === undefined ) {

							console.warn( 'APP.Player: Event type not supported (', name, ')' );
							continue;

						}

						events[ name ].push( functions[ name ].bind( object ) );

					}

				}

			}

			dispatch( events.init, arguments );
			
			
		};

		this.setCamera = function ( value ) {

			camera = value;
			camera.aspect = this.width / this.height;
			camera.add( listener );
			camera.updateProjectionMatrix();
			controls = new OrbitControls( camera, renderer.domElement );
			controls.minDistance = 10.5;
			controls.maxDistance = 25;
			controls.enablePan = false;
			controls.enableZoom = true;
			controls.enableDamping = true;
			controls.dampingFactor = 0.5;

		};

		this.setScene = function ( value ) {

			scene = value;
			scene.background = cubeMap;

		};

		this.setSize = function ( width, height ) {

			this.width = width;
			this.height = height;

			if ( camera ) {

				camera.aspect = this.width / this.height;
				camera.updateProjectionMatrix();

			}

			if ( renderer ) {

				renderer.setSize( width, height );

			}

		};

		function dispatch( array, event ) {

			for ( var i = 0, l = array.length; i < l; i ++ ) {

				array[ i ]( event );

			}

		}

		var time, prevTime;


		function HDRTextureLoader(){
			var ldrUrls = [ 'posx.jpg', 'negx.jpg', 'posy.jpg', 'negy.jpg', 'posz.jpg', 'negz.jpg' ];
			var ldrCubeMap = new THREE.CubeTextureLoader()
				.setPath( 'hdr/sky1/' )
				.load( ldrUrls, function () {
		
					//  hdrCubeRenderTarget = pmremGenerator.fromCubemap( hdrCubeMap );
			//      ldrCubeMap.encoding = THREE.sRGBEncoding;
		
			} );
			cubeMap = ldrCubeMap;
			var pmremGenerator = new THREE.PMREMGenerator( renderer );
			pmremGenerator.compileCubemapShader();
			//renderer.outputEncoding = THREE.sRGBEncoding;
		
		}

		function animate() {

			time = performance.now();

			try {

				dispatch( events.update, { time: time, delta: time - prevTime } );

			} catch ( e ) {

				console.error( ( e.message || e ), ( e.stack || "" ) );

			}
			controls.update();
    
			renderer.render( scene, camera );

			prevTime = time;

		}

		this.play = function () {

			if ( renderer.xr.enabled ) dom.append( vrButton );

			prevTime = performance.now();

			document.addEventListener( 'keydown', onDocumentKeyDown );
			document.addEventListener( 'keyup', onDocumentKeyUp );
			document.addEventListener( 'mousedown', onDocumentMouseDown );
			document.addEventListener( 'mouseup', onDocumentMouseUp );
			document.addEventListener( 'mousemove', onDocumentMouseMove );
			document.addEventListener( 'touchstart', onDocumentTouchStart );
			document.addEventListener( 'touchend', onDocumentTouchEnd );
			document.addEventListener( 'touchmove', onDocumentTouchMove );

			dispatch( events.start, arguments );

			renderer.setAnimationLoop( animate );

		};

		this.stop = function () {

			if ( renderer.xr.enabled ) vrButton.remove();

			document.removeEventListener( 'keydown', onDocumentKeyDown );
			document.removeEventListener( 'keyup', onDocumentKeyUp );
			document.removeEventListener( 'mousedown', onDocumentMouseDown );
			document.removeEventListener( 'mouseup', onDocumentMouseUp );
			document.removeEventListener( 'mousemove', onDocumentMouseMove );
			document.removeEventListener( 'touchstart', onDocumentTouchStart );
			document.removeEventListener( 'touchend', onDocumentTouchEnd );
			document.removeEventListener( 'touchmove', onDocumentTouchMove );

			dispatch( events.stop, arguments );

			renderer.setAnimationLoop( null );

		};

		this.dispose = function () {

			renderer.dispose();

			camera = undefined;
			scene = undefined;

		};

		//

		function onDocumentKeyDown( event ) {

			dispatch( events.keydown, event );

		}

		function onDocumentKeyUp( event ) {

			dispatch( events.keyup, event );

		}

		function onDocumentMouseDown( event ) {

			dispatch( events.mousedown, event );

		}

		function onDocumentMouseUp( event ) {

			dispatch( events.mouseup, event );

		}

		function onDocumentMouseMove( event ) {

			dispatch( events.mousemove, event );

		}

		function onDocumentTouchStart( event ) {

			dispatch( events.touchstart, event );

		}

		function onDocumentTouchEnd( event ) {

			dispatch( events.touchend, event );

		}
		
		function onDocumentTouchMove( event ) {

			dispatch( events.touchmove, event );

		}

		function playAmbient(){
			// create an AudioListener and add it to the camera
		
			

			// create a global audio source
			var sound = new THREE.Audio( listener );

			// load a sound and set it as the Audio object's buffer
			var audioLoader = new THREE.AudioLoader();
			audioLoader.load( 'sounds/Ambient.ogg', function( buffer ) {
				sound.setBuffer( buffer );
				sound.setLoop( true );
				sound.setVolume(3.5);
				sound.play();
			});
		}

	}

};

export { APP };
