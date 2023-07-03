<!DOCTYPE html>
<html lang="en">
	<head>
		<title>three.js webgl - GLTFloader</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
		{{-- <link type="text/css" rel="stylesheet" href="main.css"> --}}
        <style>
            *{
                padding: 0;
                margin: 0;
            }
        </style>
	</head>

	<body>
		<script type="importmap">
			{
				"imports": {
					"three": "https://threejs.org/build/three.module.js",
					"three/addons/": "https://threejs.org/examples/jsm/"
				}
			}
		</script>

		<script type="module">

			import * as THREE from 'three';

			import { OrbitControls } from 'three/addons/controls/OrbitControls.js';
			import { GLTFLoader } from 'three/addons/loaders/GLTFLoader.js';
			import { RGBELoader } from 'three/addons/loaders/RGBELoader.js';

			let camera, scene, renderer;

			init();
			render();

			function init() {

				const container = document.createElement( 'div' );
				document.body.appendChild( container );
                
				camera = new THREE.PerspectiveCamera( 45, window.innerWidth / window.innerHeight, 0.25, 20 );
				camera.position.set( - 1.8, 0.6, 2.7 );
                
				scene = new THREE.Scene();
                
				new RGBELoader()
                // .setPath( 'textures/equirectangular/' )
					.setPath( 'https://threejs.org/examples/textures/equirectangular/' )
					.load( 'royal_esplanade_1k.hdr', function ( texture ) {

						// texture.mapping = THREE.EquirectangularReflectionMapping;

						
                        texture.mapping = THREE.EquirectangularReflectionMapping;
                        

						scene.environment = texture;

						render();

						// model

						// const loader = new GLTFLoader().setPath( 'models/gltf/DamagedHelmet/glTF/' );
						const loader = new GLTFLoader().setPath( 'https://threejs.org/examples/models/gltf/DamagedHelmet/glTF/' );
						loader.load( 'DamagedHelmet.gltf', function ( gltf ) {

							scene.add( gltf.scene );

							render();

						} );

					} );

				renderer = new THREE.WebGLRenderer( { antialias: true, alpha: true } );
				renderer.setPixelRatio( window.devicePixelRatio );
				renderer.setSize( window.innerWidth, window.innerHeight );
				renderer.toneMapping = THREE.ACESFilmicToneMapping;
				renderer.toneMappingExposure = 1;
				renderer.useLegacyLights = false;
				container.appendChild( renderer.domElement );

				const controls = new OrbitControls( camera, renderer.domElement );
				controls.addEventListener( 'change', render ); // use if there is no animation loop
				controls.minDistance = 2;
				controls.maxDistance = 10;
				controls.target.set( 0, 0, - 0.2 );
				controls.update();

				window.addEventListener( 'resize', onWindowResize );

			}

			function onWindowResize() {

				camera.aspect = window.innerWidth / window.innerHeight;
				camera.updateProjectionMatrix();

				renderer.setSize( window.innerWidth, window.innerHeight );

				render();

			}

			//

			function render() {

				renderer.render( scene, camera );

			}

		</script>
        <video src="" style="width: 100vw; height: 100vh; position: absolute; top: 0; left: 0; z-index: -100;"></video>
        <script>
            // get webcam
            navigator.mediaDevices.getUserMedia({video: true})
            .then(stream => {
                let video = document.querySelector('video');
                video.srcObject = stream;
                video.onloadedmetadata = (e) => {
                    video.play();
                }
            })
        </script>
	</body>
</html>