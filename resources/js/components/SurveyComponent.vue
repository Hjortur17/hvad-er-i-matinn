<template>
	<main class="relative">
		<section v-if="stepCount === 1">
			<div class="flex">
				<div class="w-8/12">
					<h1 class="font-bold text-6xl text-purple-500 leading-none my-4">Hvað er í matinn?</h1>
					<h2 class="text-lg font-light text-gray-900">Einn erfiðasta spurning dagsins. Findu þinn kvöld mat hér með fá einum auðveldum spurningum</h2>
					<button class="px-6 py-2 mt-12 rounded-full uppercase text-sm bg-teal-300 hover:shadow-md text-teal-800 font-bold transition shadow focus:outline-none" @click="stepCount++">Fá hugmyndir</button>
				</div>
			</div>
		</section>

		<section v-if="stepCount === 2">
			<header class="mb-12">
				<small class="text-sm text-gray-700"><span v-text="stepCount"></span>/<span v-text="numberOfSlides"></span></small>
				<h2 class="text-5xl text-purple-500">Ertu vegan?</h2>
			</header>

			<div class="flex -mx-2 flex-col md:flex-row">
				<div class="flex-1 m-2">
					<input type="radio" id="vegan" name="veganPick" :value="true" class="opacity-0 fixed w-0" v-model="veganPick">
					<label for="vegan" class="inline-block w-full rounded-lg bg-white border-4 border-white p-6 shadow hover:shadow-md transition cursor-pointer relative">
						<span class="w-6 md:w-8 h-6 md:h-8 rounded-full bg-purple-600 absolute top-0 right-0 m-8 md:m-10 checkedSign invisible text-center">
							<div class="flex h-full w-full justify-center content-center">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-3 md:w-4" fill="#FFF"><path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"/></svg>
							</div>
						</span>
						<img src="/images/survey/vegan.jpg" class="rounded-lg h-48 w-full object-cover">
						<h3 class="mt-6 text-3xl text-gray-800 text-center md:text-left">Já</h3>
					</label>
				</div>
				<div class="flex-1 m-2">
					<input type="radio" id="notVegan" name="veganPick" :value="false" class="opacity-0 fixed w-0" v-model="veganPick">
					<label for="notVegan" class="inline-block w-full rounded-lg bg-white border-4 border-white p-6 shadow hover:shadow-md transition cursor-pointer relative">
						<span class="w-6 md:w-8 h-6 md:h-8 rounded-full bg-purple-600 absolute top-0 right-0 m-8 md:m-10 checkedSign invisible text-center">
							<div class="flex h-full w-full justify-center content-center">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-3 md:w-4" fill="#FFF"><path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"/></svg>
							</div>
						</span>
						<img src="/images/survey/not-vegan.jpg" class="rounded-lg h-48 w-full object-cover">
						<h3 class="mt-6 text-3xl text-gray-800 text-center md:text-left">Nei</h3>
					</label>
				</div>
			</div>

			<footer>
				<div class="flex justify-center md:justify-end">
					<button class="px-6 py-2 mt-12 mr-6 rounded-full uppercase text-sm bg-gray-300 hover:shadow-md text-gray-700 font-bold transition shadow focus:outline-none" @click="stepCount--">Til baka</button>
					<button class="px-6 py-2 mt-12 rounded-full uppercase text-sm bg-teal-300 hover:shadow-md text-teal-800 font-bold transition shadow focus:outline-none" @click="stepCount++" :disabled="veganPick === ''">Áfram</button>
				</div>
			</footer>
		</section>

		<section v-if="(veganPick === true && stepCount === 3)">
			<header class="mb-12">
				<small class="text-sm text-gray-700"><span v-text="stepCount"></span>/<span v-text="numberOfSlides"></span></small>
				<h2 class="text-5xl text-purple-500">Ertu Pesceterian?</h2>
			</header>

			<div class="flex -mx-2 flex-col md:flex-row">
				<div class="flex-1 m-2">
					<input type="radio" id="pesceterian" name="pesceterianPick" :value="true" class="opacity-0 fixed w-0" v-model="pesceterianPick">
					<label for="pesceterian" class="inline-block w-full rounded-lg bg-white border-4 border-white p-6 shadow hover:shadow-md transition cursor-pointer relative">
						<span class="w-6 md:w-8 h-6 md:h-8 rounded-full bg-purple-600 absolute top-0 right-0 m-8 md:m-10 checkedSign invisible text-center">
							<div class="flex h-full w-full justify-center content-center">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-3 md:w-4" fill="#FFF"><path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"/></svg>
							</div>
						</span>
						<img src="/images/survey/pesceterian.jpg" class="rounded-lg h-48 w-full object-cover">
						<h3 class="mt-6 text-3xl text-gray-800 text-center md:text-left">Já</h3>
					</label>
				</div>

				<div class="flex-1 m-2">
					<input type="radio" id="notPesceterian" name="pesceterianPick" :value="false" class="opacity-0 fixed w-0" v-model="pesceterianPick">
					<label for="notPesceterian" class="inline-block w-full rounded-lg bg-white border-4 border-white p-6 shadow hover:shadow-md transition cursor-pointer relative">
						<span class="w-6 md:w-8 h-6 md:h-8 rounded-full bg-purple-600 absolute top-0 right-0 m-8 md:m-10 checkedSign invisible text-center">
							<div class="flex h-full w-full justify-center content-center">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-3 md:w-4" fill="#FFF"><path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"/></svg>
							</div>
						</span>
						<img src="/images/survey/vegan.jpg" class="rounded-lg h-48 w-full object-cover">
						<h3 class="mt-6 text-3xl text-gray-800 text-center md:text-left">Nei</h3>
					</label>
				</div>
			</div>

			<footer>
				<div class="flex justify-center md:justify-end">
					<button class="px-6 py-2 mt-12 mr-6 rounded-full uppercase text-sm bg-gray-300 hover:shadow-md text-gray-700 font-bold transition shadow focus:outline-none" @click="stepCount--">Til baka</button>
					<button class="px-6 py-2 mt-12 rounded-full uppercase text-sm bg-teal-300 hover:shadow-md text-teal-800 font-bold transition shadow focus:outline-none" @click="stepCount++" :disabled="pesceterianPick === ''">Áfram</button>
				</div>
			</footer>
		</section>

		<section v-if="(veganPick === true && stepCount === 4)">
			<header class="mb-12">
				<small class="text-sm text-gray-700"><span v-text="stepCount"></span>/<span v-text="numberOfSlides"></span></small>
				<h2 class="text-5xl text-purple-500">Frá hvaða landi viltu hafa rétinn þinn?</h2>
			</header>

			<div class="flex -mx-2 flex-col md:flex-row">
				<div class="flex-1 m-2">
					<input type="radio" id="europe" name="europe" value="Evrópa" class="opacity-0 fixed w-0" v-model="continentsPick">
					<label for="europe" class="inline-block w-full rounded-lg bg-white border-4 border-white p-6 shadow hover:shadow-md transition cursor-pointer relative">
						<span class="w-6 md:w-8 h-6 md:h-8 rounded-full bg-purple-600 absolute top-0 right-0 m-8 md:m-10 checkedSign invisible text-center">
							<div class="flex h-full w-full justify-center content-center">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-3 md:w-4" fill="#FFF"><path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"/></svg>
							</div>
						</span>
						<img src="/images/survey/europe.jpg" class="rounded-lg h-48 w-full object-cover">
						<h3 class="mt-6 text-3xl text-gray-800 text-center md:text-left">Evrópu</h3>
					</label>
				</div>
				<div class="flex-1 m-2">
					<input type="radio" id="asia" name="asia" value="Asía" class="opacity-0 fixed w-0" v-model="continentsPick">
					<label for="asia" class="inline-block w-full rounded-lg bg-white border-4 border-white p-6 shadow hover:shadow-md transition cursor-pointer relative">
						<span class="w-6 md:w-8 h-6 md:h-8 rounded-full bg-purple-600 absolute top-0 right-0 m-8 md:m-10 checkedSign invisible text-center">
							<div class="flex h-full w-full justify-center content-center">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-3 md:w-4" fill="#FFF"><path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"/></svg>
							</div>
						</span>
						<img src="/images/survey/asia.jpg" class="rounded-lg h-48 w-full object-cover">
						<h3 class="mt-6 text-3xl text-gray-800 text-center md:text-left">Asía</h3>
					</label>
				</div>
				<div class="flex-1 m-2">
					<input type="radio" id="americas" name="americas" value="Ameríku" class="opacity-0 fixed w-0" v-model="continentsPick">
					<label for="americas" class="inline-block w-full rounded-lg bg-white border-4 border-white p-6 shadow hover:shadow-md transition cursor-pointer relative">
						<span class="w-6 md:w-8 h-6 md:h-8 rounded-full bg-purple-600 absolute top-0 right-0 m-8 md:m-10 checkedSign invisible text-center">
							<div class="flex h-full w-full justify-center content-center">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-3 md:w-4" fill="#FFF"><path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"/></svg>
							</div>
						</span>
						<img src="/images/survey/americas.jpg" class="rounded-lg h-48 w-full object-cover">
						<h3 class="mt-6 text-3xl text-gray-800 text-center md:text-left">Ameríku</h3>
					</label>
				</div>
			</div>

			<footer>
				<div class="flex justify-center md:justify-end">
					<button class="px-6 py-2 mt-12 mr-6 rounded-full uppercase text-sm bg-gray-300 hover:shadow-md text-gray-700 font-bold transition shadow focus:outline-none" @click="stepCount--">Til baka</button>
					<button class="px-6 py-2 mt-12 rounded-full uppercase text-sm bg-teal-300 hover:shadow-md text-teal-800 font-bold transition shadow focus:outline-none" @click="stepCount++" :disabled="continentsPick === ''">Áfram</button>
				</div>
			</footer>
		</section>

		<section v-if="(veganPick === true && pesceterianPick === true && stepCount === 5)">
			<header class="mb-12">
				<small class="text-sm text-gray-700"><span v-text="stepCount"></span>/<span v-text="numberOfSlides"></span></small>
				<h2 class="text-5xl text-purple-500">Hvað langar þér í?</h2>
			</header>

			<div class="flex -mx-2 flex-col md:flex-row">
				<div class="flex-1 m-2">
					<input type="radio" id="fish" name="fish" value="Fisk" class="opacity-0 fixed w-0" v-model="foodPick">
					<label for="fish" class="inline-block w-full rounded-lg bg-white border-4 border-white p-6 shadow hover:shadow-md transition cursor-pointer relative">
						<span class="w-6 md:w-8 h-6 md:h-8 rounded-full bg-purple-600 absolute top-0 right-0 m-8 md:m-10 checkedSign invisible text-center">
							<div class="flex h-full w-full justify-center content-center">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-3 md:w-4" fill="#FFF"><path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"/></svg>
							</div>
						</span>
						<img src="/images/survey/fish.jpg" class="rounded-lg h-48 w-full object-cover">
						<h3 class="mt-6 text-3xl text-gray-800 text-center md:text-left">Fisk</h3>
					</label>
				</div>
				<div class="flex-1 m-2">
					<input type="radio" id="salad" name="salad" value="Salat" class="opacity-0 fixed w-0" v-model="foodPick">
					<label for="salad" class="inline-block w-full rounded-lg bg-white border-4 border-white p-6 shadow hover:shadow-md transition cursor-pointer relative">
						<span class="w-6 md:w-8 h-6 md:h-8 rounded-full bg-purple-600 absolute top-0 right-0 m-8 md:m-10 checkedSign invisible text-center">
							<div class="flex h-full w-full justify-center content-center">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-3 md:w-4" fill="#FFF"><path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"/></svg>
							</div>
						</span>
						<img src="/images/survey/salad.jpg" class="rounded-lg h-48 w-full object-cover">
						<h3 class="mt-6 text-3xl text-gray-800 text-center md:text-left">Salat</h3>
					</label>
				</div>
				<div class="flex-1 m-2">
					<input type="radio" id="soup" name="soup" value="Súpa" class="opacity-0 fixed w-0" v-model="foodPick">
					<label for="soup" class="inline-block w-full rounded-lg bg-white border-4 border-white p-6 shadow hover:shadow-md transition cursor-pointer relative">
						<span class="w-6 md:w-8 h-6 md:h-8 rounded-full bg-purple-600 absolute top-0 right-0 m-8 md:m-10 checkedSign invisible text-center">
							<div class="flex h-full w-full justify-center content-center">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-3 md:w-4" fill="#FFF"><path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"/></svg>
							</div>
						</span>
						<img src="/images/survey/soup.jpg" class="rounded-lg h-48 w-full object-cover">
						<h3 class="mt-6 text-3xl text-gray-800 text-center md:text-left">Súpu</h3>
					</label>
				</div>
				<div class="flex-1 m-2">
					<input type="radio" id="other" name="other" value="Annað" class="opacity-0 fixed w-0" v-model="foodPick">
					<label for="other" class="inline-block w-full rounded-lg bg-white border-4 border-white p-6 shadow hover:shadow-md transition cursor-pointer relative">
						<span class="w-6 md:w-8 h-6 md:h-8 rounded-full bg-purple-600 absolute top-0 right-0 m-8 md:m-10 checkedSign invisible text-center">
							<div class="flex h-full w-full justify-center content-center">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-3 md:w-4" fill="#FFF"><path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"/></svg>
							</div>
						</span>
						<img src="/images/survey/other.jpg" class="rounded-lg h-48 w-full object-cover">
						<h3 class="mt-6 text-3xl text-gray-800 text-center md:text-left">Annað</h3>
					</label>
				</div>
			</div>

			<footer>
				<div class="flex justify-center md:justify-end">
					<button class="px-6 py-2 mt-12 mr-6 rounded-full uppercase text-sm bg-gray-300 hover:shadow-md text-gray-700 font-bold transition shadow focus:outline-none" @click="stepCount--">Til baka</button>
					<button class="px-6 py-2 mt-12 rounded-full uppercase text-sm bg-teal-300 hover:shadow-md text-teal-800 font-bold transition shadow focus:outline-none" @click="stepCount++" :disabled="foodPick === ''">Áfram</button>
				</div>
			</footer>
		</section>

		<section v-if="(veganPick === true && pesceterianPick === false && stepCount === 5)">
			<header class="mb-12">
				<small class="text-sm text-gray-700"><span v-text="stepCount"></span>/<span v-text="numberOfSlides"></span></small>
				<h2 class="text-5xl text-purple-500">Hvað langar þér í?</h2>
			</header>

			<div class="flex -mx-2 flex-col md:flex-row">
				<div class="flex-1 m-2">
					<input type="radio" id="salad" name="salad" value="Salat" class="opacity-0 fixed w-0" v-model="foodPick">
					<label for="salad" class="inline-block w-full rounded-lg bg-white border-4 border-white p-6 shadow hover:shadow-md transition cursor-pointer relative">
						<span class="w-6 md:w-8 h-6 md:h-8 rounded-full bg-purple-600 absolute top-0 right-0 m-8 md:m-10 checkedSign invisible text-center">
							<div class="flex h-full w-full justify-center content-center">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-3 md:w-4" fill="#FFF"><path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"/></svg>
							</div>
						</span>
						<img src="/images/survey/salad.jpg" class="rounded-lg h-48 w-full object-cover">
						<h3 class="mt-6 text-3xl text-gray-800 text-center md:text-left">Salat</h3>
					</label>
				</div>
				<div class="flex-1 m-2">
					<input type="radio" id="soup" name="soup" value="Súpa" class="opacity-0 fixed w-0" v-model="foodPick">
					<label for="soup" class="inline-block w-full rounded-lg bg-white border-4 border-white p-6 shadow hover:shadow-md transition cursor-pointer relative">
						<span class="w-6 md:w-8 h-6 md:h-8 rounded-full bg-purple-600 absolute top-0 right-0 m-8 md:m-10 checkedSign invisible text-center">
							<div class="flex h-full w-full justify-center content-center">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-3 md:w-4" fill="#FFF"><path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"/></svg>
							</div>
						</span>
						<img src="/images/survey/soup.jpg" class="rounded-lg h-48 w-full object-cover">
						<h3 class="mt-6 text-3xl text-gray-800 text-center md:text-left">Súpu</h3>
					</label>
				</div>
				<div class="flex-1 m-2">
					<input type="radio" id="other" name="other" value="Annað" class="opacity-0 fixed w-0" v-model="foodPick">
					<label for="other" class="inline-block w-full rounded-lg bg-white border-4 border-white p-6 shadow hover:shadow-md transition cursor-pointer relative">
						<span class="w-6 md:w-8 h-6 md:h-8 rounded-full bg-purple-600 absolute top-0 right-0 m-8 md:m-10 checkedSign invisible text-center">
							<div class="flex h-full w-full justify-center content-center">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-3 md:w-4" fill="#FFF"><path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"/></svg>
							</div>
						</span>
						<img src="/images/survey/other.jpg" class="rounded-lg h-48 w-full object-cover">
						<h3 class="mt-6 text-3xl text-gray-800 text-center md:text-left">Annað</h3>
					</label>
				</div>
			</div>

			<footer>
				<div class="flex justify-center md:justify-end">
					<button class="px-6 py-2 mt-12 mr-6 rounded-full uppercase text-sm bg-gray-300 hover:shadow-md text-gray-700 font-bold transition shadow focus:outline-none" @click="stepCount--">Til baka</button>
					<button class="px-6 py-2 mt-12 rounded-full uppercase text-sm bg-teal-300 hover:shadow-md text-teal-800 font-bold transition shadow focus:outline-none" @click="stepCount++" :disabled="foodPick === ''">Áfram</button>
				</div>
			</footer>
		</section>

		<section v-if="(veganPick === true && stepCount === 6)">
			<header class="mb-12">
				<small class="text-sm text-gray-700"><span v-text="stepCount"></span>/<span v-text="numberOfSlides"></span></small>
				<h2 class="text-5xl text-purple-500">Fílaru sterkan mat eða ekki?</h2>
			</header>

			<div class="flex -mx-2 flex-col md:flex-row">
				<div class="flex-1 m-2">
					<input type="radio" id="spicy" name="spicy" :value="true" class="opacity-0 fixed w-0" v-model="spicyPick">
					<label for="spicy" class="inline-block w-full rounded-lg bg-white border-4 border-white p-6 shadow hover:shadow-md transition cursor-pointer relative">
						<span class="w-6 md:w-8 h-6 md:h-8 rounded-full bg-purple-600 absolute top-0 right-0 m-8 md:m-10 checkedSign invisible text-center">
							<div class="flex h-full w-full justify-center content-center">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-3 md:w-4" fill="#FFF"><path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"/></svg>
							</div>
						</span>
						<img src="/images/survey/spicy.jpg" class="rounded-lg h-48 w-full object-cover">
						<h3 class="mt-6 text-3xl text-gray-800 text-center md:text-left">Já</h3>
					</label>
				</div>

				<div class="flex-1 m-2">
					<input type="radio" id="notSpicy" name="spicy" :value="false" class="opacity-0 fixed w-0" v-model="spicyPick">
					<label for="notSpicy" class="inline-block w-full rounded-lg bg-white border-4 border-white p-6 shadow hover:shadow-md transition cursor-pointer relative">
						<span class="w-6 md:w-8 h-6 md:h-8 rounded-full bg-purple-600 absolute top-0 right-0 m-8 md:m-10 checkedSign invisible text-center">
							<div class="flex h-full w-full justify-center content-center">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-3 md:w-4" fill="#FFF"><path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"/></svg>
							</div>
						</span>
						<img src="/images/survey/not-spicy.jpg" class="rounded-lg h-48 w-full object-cover">
						<h3 class="mt-6 text-3xl text-gray-800 text-center md:text-left">Nei</h3>
					</label>
				</div>
			</div>

			<footer>
				<div class="flex justify-center md:justify-end">
					<button class="px-6 py-2 mt-12 mr-6 rounded-full uppercase text-sm bg-gray-300 hover:shadow-md text-gray-700 font-bold transition shadow focus:outline-none" @click="stepCount--">Til baka</button>
					<button class="px-6 py-2 mt-12 rounded-full uppercase text-sm bg-teal-300 hover:shadow-md text-teal-800 font-bold transition shadow focus:outline-none" @click="submitForm(); stepCount++" :disabled="spicyPick === ''">Sækja uppskriftir</button>
				</div>
			</footer>
		</section>

		<recipes :recipes="recipes" :loading="loading" @stepback="stepCount--" v-if="(veganPick === true && stepCount === 7)"></recipes>

		<section v-if="(this.veganPick === false && this.stepCount === 3)">
			<header class="mb-12">
				<small class="text-sm text-gray-700"><span v-text="stepCount"></span>/<span v-text="numberOfSlides"></span></small>
				<h2 class="text-5xl text-purple-500">Frá hvaða landi viltu hafa rétinn þinn?</h2>
			</header>

			<div class="flex -mx-2 flex-col md:flex-row">
				<div class="flex-1 m-2">
					<input type="radio" id="europe" name="europe" value="Evrópa" class="opacity-0 fixed w-0" v-model="continentsPick">
					<label for="europe" class="inline-block w-full rounded-lg bg-white border-4 border-white p-6 shadow hover:shadow-md transition cursor-pointer relative">
						<span class="w-6 md:w-8 h-6 md:h-8 rounded-full bg-purple-600 absolute top-0 right-0 m-8 md:m-10 checkedSign invisible text-center">
							<div class="flex h-full w-full justify-center content-center">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-3 md:w-4" fill="#FFF"><path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"/></svg>
							</div>
						</span>
						<img src="/images/survey/europe.jpg" class="rounded-lg h-48 w-full object-cover">
						<h3 class="mt-6 text-3xl text-gray-800 text-center md:text-left">Evrópu</h3>
					</label>
				</div>
				<div class="flex-1 m-2">
					<input type="radio" id="asia" name="asia" value="Asía" class="opacity-0 fixed w-0" v-model="continentsPick">
					<label for="asia" class="inline-block w-full rounded-lg bg-white border-4 border-white p-6 shadow hover:shadow-md transition cursor-pointer relative">
						<span class="w-6 md:w-8 h-6 md:h-8 rounded-full bg-purple-600 absolute top-0 right-0 m-8 md:m-10 checkedSign invisible text-center">
							<div class="flex h-full w-full justify-center content-center">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-3 md:w-4" fill="#FFF"><path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"/></svg>
							</div>
						</span>
						<img src="/images/survey/asia.jpg" class="rounded-lg h-48 w-full object-cover">
						<h3 class="mt-6 text-3xl text-gray-800 text-center md:text-left">Asía</h3>
					</label>
				</div>
				<div class="flex-1 m-2">
					<input type="radio" id="americas" name="americas" value="Ameríku" class="opacity-0 fixed w-0" v-model="continentsPick">
					<label for="americas" class="inline-block w-full rounded-lg bg-white border-4 border-white p-6 shadow hover:shadow-md transition cursor-pointer relative">
						<span class="w-6 md:w-8 h-6 md:h-8 rounded-full bg-purple-600 absolute top-0 right-0 m-8 md:m-10 checkedSign invisible text-center">
							<div class="flex h-full w-full justify-center content-center">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-3 md:w-4" fill="#FFF"><path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"/></svg>
							</div>
						</span>
						<img src="/images/survey/americas.jpg" class="rounded-lg h-48 w-full object-cover">
						<h3 class="mt-6 text-3xl text-gray-800 text-center md:text-left">Ameríku</h3>
					</label>
				</div>
			</div>

			<footer>
				<div class="flex justify-center md:justify-end">
					<button class="px-6 py-2 mt-12 mr-6 rounded-full uppercase text-sm bg-gray-300 hover:shadow-md text-gray-700 font-bold transition shadow focus:outline-none" @click="stepCount--">Til baka</button>
					<button class="px-6 py-2 mt-12 rounded-full uppercase text-sm bg-teal-300 hover:shadow-md text-teal-800 font-bold transition shadow focus:outline-none" @click="stepCount++" :disabled="continentsPick === ''">Áfram</button>
				</div>
			</footer>
		</section>

		<section v-if="(this.veganPick === false && this.stepCount === 4)">
			<header class="mb-12">
				<small class="text-sm text-gray-700"><span v-text="stepCount"></span>/<span v-text="numberOfSlides"></span></small>
				<h2 class="text-5xl text-purple-500">Hvað langar þér í?</h2>
			</header>

			<div class="flex -mx-2 flex-col md:flex-row">
				<div class="flex-1 m-2">
					<input type="radio" id="fish" name="fish" value="Fisk" class="opacity-0 fixed w-0" v-model="foodPick">
					<label for="fish" class="inline-block w-full rounded-lg bg-white border-4 border-white p-6 shadow hover:shadow-md transition cursor-pointer relative">
						<span class="w-6 md:w-8 h-6 md:h-8 rounded-full bg-purple-600 absolute top-0 right-0 m-8 md:m-10 checkedSign invisible text-center">
							<div class="flex h-full w-full justify-center content-center">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-3 md:w-4" fill="#FFF"><path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"/></svg>
							</div>
						</span>
						<img src="/images/survey/fish.jpg" class="rounded-lg h-48 w-full object-cover">
						<h3 class="mt-6 text-3xl text-gray-800 text-center md:text-left">Fisk</h3>
					</label>
				</div>
				<div class="flex-1 m-2">
					<input type="radio" id="meat" name="meat" value="Kjöt" class="opacity-0 fixed w-0" v-model="foodPick">
					<label for="meat" class="inline-block w-full rounded-lg bg-white border-4 border-white p-6 shadow hover:shadow-md transition cursor-pointer relative">
						<span class="w-6 md:w-8 h-6 md:h-8 rounded-full bg-purple-600 absolute top-0 right-0 m-8 md:m-10 checkedSign invisible text-center">
							<div class="flex h-full w-full justify-center content-center">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-3 md:w-4" fill="#FFF"><path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"/></svg>
							</div>
						</span>
						<img src="/images/survey/meat.jpg" class="rounded-lg h-48 w-full object-cover">
						<h3 class="mt-6 text-3xl text-gray-800 text-center md:text-left">Kjöt</h3>
					</label>
				</div>
				<div class="flex-1 m-2">
					<input type="radio" id="chicken" name="chicken" value="Kjúklingur" class="opacity-0 fixed w-0" v-model="foodPick">
					<label for="chicken" class="inline-block w-full rounded-lg bg-white border-4 border-white p-6 shadow hover:shadow-md transition cursor-pointer relative">
						<span class="w-6 md:w-8 h-6 md:h-8 rounded-full bg-purple-600 absolute top-0 right-0 m-8 md:m-10 checkedSign invisible text-center">
							<div class="flex h-full w-full justify-center content-center">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-3 md:w-4" fill="#FFF"><path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"/></svg>
							</div>
						</span>
						<img src="/images/survey/chicken.jpg" class="rounded-lg h-48 w-full object-cover">
						<h3 class="mt-6 text-3xl text-gray-800 text-center md:text-left">Kjúkling</h3>
					</label>
				</div>
				<div class="flex-1 m-2">
					<input type="radio" id="soup" name="soup" value="Súpa" class="opacity-0 fixed w-0" v-model="foodPick">
					<label for="soup" class="inline-block w-full rounded-lg bg-white border-4 border-white p-6 shadow hover:shadow-md transition cursor-pointer relative">
						<span class="w-6 md:w-8 h-6 md:h-8 rounded-full bg-purple-600 absolute top-0 right-0 m-8 md:m-10 checkedSign invisible text-center">
							<div class="flex h-full w-full justify-center content-center">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-3 md:w-4" fill="#FFF"><path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"/></svg>
							</div>
						</span>
						<img src="/images/survey/soup.jpg" class="rounded-lg h-48 w-full object-cover">
						<h3 class="mt-6 text-3xl text-gray-800 text-center md:text-left">Súpu</h3>
					</label>
				</div>
				<div class="flex-1 m-2">
					<input type="radio" id="other" name="other" value="Annað" class="opacity-0 fixed w-0" v-model="foodPick">
					<label for="other" class="inline-block w-full rounded-lg bg-white border-4 border-white p-6 shadow hover:shadow-md transition cursor-pointer relative">
						<span class="w-6 md:w-8 h-6 md:h-8 rounded-full bg-purple-600 absolute top-0 right-0 m-8 md:m-10 checkedSign invisible text-center">
							<div class="flex h-full w-full justify-center content-center">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-3 md:w-4" fill="#FFF"><path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"/></svg>
							</div>
						</span>
						<img src="/images/survey/other.jpg" class="rounded-lg h-48 w-full object-cover">
						<h3 class="mt-6 text-3xl text-gray-800 text-center md:text-left">Annað</h3>
					</label>
				</div>
			</div>

			<footer>
				<div class="flex justify-center md:justify-end">
					<button class="px-6 py-2 mt-12 mr-6 rounded-full uppercase text-sm bg-gray-300 hover:shadow-md text-gray-700 font-bold transition shadow focus:outline-none" @click="stepCount--">Til baka</button>
					<button class="px-6 py-2 mt-12 rounded-full uppercase text-sm bg-teal-300 hover:shadow-md text-teal-800 font-bold transition shadow focus:outline-none" @click="stepCount++" :disabled="foodPick === ''">Áfram</button>
				</div>
			</footer>
		</section>

		<section v-if="(this.veganPick === false && this.stepCount === 5)">
			<header class="mb-12">
				<small class="text-sm text-gray-700"><span v-text="stepCount"></span>/<span v-text="numberOfSlides"></span></small>
				<h2 class="text-5xl text-purple-500">Fílaru sterkan mat eða ekki?</h2>
			</header>

			<div class="flex -mx-2 flex-col md:flex-row">
				<div class="flex-1 m-2">
					<input type="radio" id="spicy" name="spicy" :value="true" class="opacity-0 fixed w-0" v-model="spicyPick">
					<label for="spicy" class="inline-block w-full rounded-lg bg-white border-4 border-white p-6 shadow hover:shadow-md transition cursor-pointer relative">
						<span class="w-6 md:w-8 h-6 md:h-8 rounded-full bg-purple-600 absolute top-0 right-0 m-8 md:m-10 checkedSign invisible text-center">
							<div class="flex h-full w-full justify-center content-center">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-3 md:w-4" fill="#FFF"><path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"/></svg>
							</div>
						</span>
						<img src="/images/survey/spicy.jpg" class="rounded-lg h-48 w-full object-cover">
						<h3 class="mt-6 text-3xl text-gray-800 text-center md:text-left">Já</h3>
					</label>
				</div>

				<div class="flex-1 m-2">
					<input type="radio" id="notSpicy" name="spicy" :value="false" class="opacity-0 fixed w-0" v-model="spicyPick">
					<label for="notSpicy" class="inline-block w-full rounded-lg bg-white border-4 border-white p-6 shadow hover:shadow-md transition cursor-pointer relative">
						<span class="w-6 md:w-8 h-6 md:h-8 rounded-full bg-purple-600 absolute top-0 right-0 m-8 md:m-10 checkedSign invisible text-center">
							<div class="flex h-full w-full justify-center content-center">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-3 md:w-4" fill="#FFF"><path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"/></svg>
							</div>
						</span>
						<img src="/images/survey/not-spicy.jpg" class="rounded-lg h-48 w-full object-cover">
						<h3 class="mt-6 text-3xl text-gray-800 text-center md:text-left">Nei</h3>
					</label>
				</div>
			</div>

			<footer>
				<div class="flex justify-center md:justify-end">
					<button class="px-6 py-2 mt-12 mr-6 rounded-full uppercase text-sm bg-gray-300 hover:shadow-md text-gray-700 font-bold transition shadow focus:outline-none" @click="stepCount--">Til baka</button>
					<button class="px-6 py-2 mt-12 rounded-full uppercase text-sm bg-teal-300 hover:shadow-md text-teal-800 font-bold transition shadow focus:outline-none" @click="submitForm(); stepCount++" :disabled="spicyPick === ''">Sækja uppskriftir</button>
				</div>
			</footer>
		</section>

		<recipes :recipes="recipes" :loading="loading" @stepback="stepCount--" v-if="(this.veganPick === false && this.stepCount === 6)"></recipes> <!-- missing stepCount -->
	</main>
</template>

<script>
import recipes from './RecipesComponent.vue';

export default {
	components: { recipes },

	data() {
		return {
			stepCount: 1,
			numberOfSlides: 6,
			loading: true,
			veganPick: '',
			pesceterianPick: '',
			continentsPick: '',
			foodPick: '',
			spicyPick: '',
			recipes: '',
		}
	},

	methods: {
		submitForm() {
			axios.get('/uppskriftir/sækja', {
				params: {
					vegan: this.veganPick,
					pesceterian: this.pesceterianPick,
					continents: this.continentsPick,
					food: this.foodPick,
					spicy: this.spicyPick
				}
			})
			.then(response => {
				this.recipes = response.data.recipes;
			})
			.catch(function (error) {})
			.finally(() => this.loading = false);
		}
	},
};
</script>

<style>
@keyframes spin {
	0% { transform: rotate(0deg); }
	100% {  transform: rotate(359deg); }
}

#loading-symbol {
	animation: spin 2s linear infinite;
}

#overlay {
	position: fixed;
	top: 0;
	bottom: 0;
	left: 0;
	right: 0;
	width: 100%;
	height: 100%;
	background: rgba(0,0,0,0.3);
}
</style>