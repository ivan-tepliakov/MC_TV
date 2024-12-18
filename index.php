<!doctype html>
<html>
<head>
	<title>MAINCAST.TV</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="https://www.dropbox.com/scl/fi/wxpfl82kpzkc36xhv9mu1/mctv-favicon.png?rlkey=7ggs17f7me6owuh4jt7j1opif&st=t5jyufav&dl=1">
  <link rel="icon" type="image/x-icon" href="https://www.dropbox.com/scl/fi/rqyp8lwf0zpxw3l8oytdt/favicon.ico?rlkey=rt0b30mz6yobaumnadx5cl4s9&st=h3vdq969&raw=1">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
	  tailwind.config = {
		theme: {
		  extend: {
			colors: {
			  	clifford: '#da373d',
				gray: {
					100: '#617E9D',
					
					300: '#3C4E65',
					400: '#2E3D50',
					500: '#262F3F',
					600: '#1F2633',
					700: '#181D28',
					800: '#10131B',
					900: '#0A0C10',
					950: '#000000'
				},
				blue: {
				  100: '#CDF5FF',
				  200: '#A3EBFF',
				  300: '#84E2FF'
				},
				white: {
					200: '#EEF2F6'
				}
			},
			fontFamily: {
  		  		sans: 'Geologica, sans-serif'
			},
			fontSize: {
			  temp: ['20px', '24px']
			},
			gridTemplateColumns: {
				temp: 'minmax(0, 1fr) 25rem'
			}
		  }
		}
	  }
	</script>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Geologica:wght@100..900&display=swap');

	</style>
	<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</head>
<body class="h-screen flex flex-col bg-gray-600" onload="temp()">
	<header class="pl-3 md:pl-6 flex flex-row items-center justify-between">
		<img class="h-4 md:h-5" src="https://www.dropbox.com/scl/fi/tzovk80jhhab39cugs1c6/logo.svg?rlkey=xc0zfhurcle574jau72e1o01v&st=9nh8gsic&raw=1" />
		
		
		
		<div class="w-[25rem] hidden md:flex flex-row">
			<a href="https://maincast.com" class="flex-1 flex justify-center items-center gap-3 p-3.5 text-sm font-medium text-white-200 bg-gray-900 hover:bg-gray-800 active:bg-gray-950">
				<img src="https://www.dropbox.com/scl/fi/wgcbt8l6m0y7gv8blt10y/maincast-icon.svg?rlkey=gekfcimjvbe9gbu56njoa9f24&st=iqe6sqol&raw=1" />
				<span><span class="uppercase">maincast</span>.com</span>
				<img src="https://www.dropbox.com/scl/fi/bmzdw0jdxifs3vvqskx74/arrow-up-right-icon.svg?rlkey=hql6mympg84qk2l3j7ziha5h8&st=0foyk94h&raw=1" />
			</a>
			<a href="https://majorequip.azov.one" class="flex-1 flex justify-center items-center gap-3 p-3.5 text-sm font-medium text-gray-900 bg-blue-200 hover:bg-blue-100 active:bg-blue-300">
				<img src="https://www.dropbox.com/scl/fi/thmynsf6zvsuzeve1tc6h/afu-icon.svg?rlkey=0r20pjbhc5wpqazifiyccaq83&st=aeuf3xg8&raw=1" />
				<span class="uppercase">Підтримати ЗСУ</span>
			</a>
		</div>
		
		
		<button class="flex md:hidden justify-center items-center gap-3 p-3.5 text-sm font-medium bg-gray-400 hover:bg-gray-300 active:bg-gray-500">
			<img src="https://www.dropbox.com/scl/fi/5uwc3k8xkz29zkvl34nj7/menu-icon.svg?rlkey=ssllvo5inqqw3blyy4k8r4w4w&st=yno6qqlf&raw=1" />
		</button>
	</header>
	<div class="grow relative flex flex-col">
		
		<div v-if="flag" class="absolute inset-0 h-full m-d:flex flex-row bg-gray-400 z-10 px-3 py-6 space-y-6 hidden">
			<div class="space-y-3">
				<a href="#" class="flex-1 flex justify-center items-center gap-3 p-3.5 rounded-md text-sm font-medium text-white-200 bg-gray-900 hover:bg-gray-800 active:bg-gray-950">
					<img src="https://www.dropbox.com/scl/fi/wgcbt8l6m0y7gv8blt10y/maincast-icon.svg?rlkey=gekfcimjvbe9gbu56njoa9f24&st=iqe6sqol&raw=1" />
					<span><span class="uppercase">maincast</span>.com</span>
					<img src="https://www.dropbox.com/scl/fi/bmzdw0jdxifs3vvqskx74/arrow-up-right-icon.svg?rlkey=hql6mympg84qk2l3j7ziha5h8&st=0foyk94h&raw=1" />
				</a>
				<a href="#" class="flex-1 flex justify-center items-center gap-3 p-3.5 rounded-md text-sm font-medium text-gray-900 bg-blue-200 hover:bg-blue-100 active:bg-blue-300">
					<img src="https://www.dropbox.com/scl/fi/thmynsf6zvsuzeve1tc6h/afu-icon.svg?rlkey=0r20pjbhc5wpqazifiyccaq83&st=aeuf3xg8&raw=1" />
					<span class="uppercase">Підтримати ЗСУ</span>
				</a>
			</div>
			<ul class="text-sm font-light text-blue-200 space-y-2">
				<li class="py-2"><a href="#" class="hover:text-blue-100 active:text-blue-300">Угода користувача</a></li>
				<li class="py-2"><a href="#" class="hover:text-blue-100 active:text-blue-300">Політика конфіденційності</a></li>
				<li class="flex flex-row gap-x-3 py-2"><span>Підтримка:</span><a href="#" class="hover:text-blue-100 active:text-blue-300">support@mctv.com.ua</a></li>
			</ul>
		
			
			
		</div>
		<!-- grid-cols-temp -->
		<div class="grow md:grid">
			
		  <div class="bg-gray-700 grow">
		
			  <iframe class="w-full aspect-video" id="cosmoframe" frameBorder="0" scrolling="no" allowfullscreen onload="access()"></iframe>
		
		
			  <iframe hidden class="w-full h-[202px] md:h-[585px]" src="https://live-maincast.cosmonova-broadcast.tv/player?autoplay=1" allow="autoplay *; fullscreen *" allowfullscreen="true"></iframe>
			</div>
		  <div class="py-4 xl:py-6 flex items-center justify-center bg-gray-800">
			  <img class="w-[320px] h-[100px] xl:hidden" src="https://www.dropbox.com/scl/fi/th9xpj6530w20uwha3pp2/ad-banner-mobile.png?rlkey=crhgnbv5kpp1hc7m628qmeeki&st=zszvzuzj&raw=1" />
			  <img class="w-[728px] h-[90px] hidden xl:block" src="https://www.dropbox.com/scl/fi/fkfnotkdyk53jg82371wx/ad-banner-desktop.png?rlkey=hwhyy5rlmxl8ziqmmitrpke3j&st=dcuk9h0s&raw=1" />
		  </div>
		  
		</div>
		
		<footer class="flex flex-col lg:flex-row gap-4 lg:gap-6 px-3 lg:px-6 py-4 lg:py-3 text-sm font-light bg-gray-900 text-gray-100">
			  <p><a href="#" class="hover:text-blue-200 active:text-blue-300">Угода користувача</a></p>
			  <p><a href="#" class="text-gray-100 hover:text-blue-200 active:text-blue-300">Політика конфіденційності</a></p>
			  <p class="flex flex-row gap-x-3"><span>Підтримка:</span><a href="#" class="hover:text-blue-200 active:text-blue-300">support@mctv.com.ua</a></p>
			  <p class="grow lg:order-first">© 2024 <a href="#" class="hover:text-blue-200 active:text-blue-300">Maincast</a>. Всі права захищено.</p>
		 </footer>
		
	</div>

  <script>
	  const { createApp, ref } = Vue
	  
	  createApp({
		setup() {
		  const flag = ref(false)
		  return {
			flag
		  }
		}
	  }).mount('#app')
  </script>
  
  <script>
	  
	  function temp() {

		   console.log("🎃");
		   var iframe = document.getElementById("cosmoPlayer_html5_api");
		   console.log(iframe)
		}
	  
	  function access() {
		  console.log("🎃🎃🎃");

		  var iframe = document.getElementById("cosmoPlayer_html5_api");

		 var iframe = document.getElementById("cosmoframe");
		 
		 console.log(iframe);
		 var innerDoc = iframe.contentDocument || iframe.contentWindow.document;
		 
		 console.log(innerDoc.body);
		 
		 var _temp = innerDoc.getElementById("cosmoPlayer_html5_api");
		 
		 console.log("🎃🎃");

		 console.log(_temp);
		 console.log("🎃🎃");

		 // alert(123);
	  }
	  
	var _cosmoframe = document.getElementById("cosmoframe");
	const width = document.getElementById('cosmoframe').parentNode.clientWidth;
	  const height = Math.floor((width * 9)/16);
	// _cosmoframe.setAttribute("style", "border:0; overflow: hidden; width:" + width + "px; height:" + height + "px;");
	// _cosmoframe.setAttribute("autoplay", "autoplay");

	_cosmoframe.contentWindow.location.href = "https://live-maincast.cosmonova-broadcast.tv/player";
	
	var elmnt = _cosmoframe.contentWindow.document.getElementsByTagName("video");

	
	var _t = document.getElementById("cosmoPlayer_html5_api");

	console.log("!!!");

	console.log(elmnt);
  </script>
  
</body>
</html>