<template>
	<div class="container max-w-4xl mx-auto">
		<div class="flex items-center h-screen donate-now">
			<div class="w-full h-auto" v-if="stepCount === 1">
				<div class="mb-12">
					<small><span v-text="stepCount"></span> / <span v-text="numberOfSlides"></span></small>
					<h2 class="font-medium text-4xl">Frá hvaða landi viltu hafa réttinn þinn?</h2>
				</div>
				
				<div class="flex -mx-2">
					<div class="flex-1 h-auto">
						<div class="flex h-48 items-center">
							<input type="radio" id="Evrópa" value="Evrópa" class="opacity-0 fixed w-0" v-model="countryPicked">
							<label for="Evrópa" class="inline-block selection unselected flex-1 h-48">
								<i class="fad fa-globe-europe fa-4x"></i>
								<h4 class="font-bold uppercase pt-4">Evrópa</h4>
							</label>
						</div>
					</div>

					<div class="flex-1 h-auto">
						<div class="flex h-48 items-center">
							<input type="radio" id="Asía" value="Asía" class="opacity-0 fixed w-0" v-model="countryPicked">
							<label for="Asía" class="inline-block selection unselected flex-1 h-48">
								<i class="fad fa-globe-asia fa-4x"></i>
								<h4 class="font-bold uppercase pt-4">Asía</h4>
							</label>
						</div>
					</div>

					<div class="flex-1 h-auto">
						<div class="flex h-48 items-center">
							<input type="radio" id="Suður-Ameríka" value="Suður-Ameríka" class="opacity-0 fixed w-0" v-model="countryPicked">
							<label for="Suður-Ameríka" class="inline-block selection unselected flex-1 h-48">
								<i class="fad fa-globe-americas fa-4x"></i>
								<h4 class="font-bold uppercase pt-4">Suður-Ameríka</h4>
							</label>
						</div>
					</div>

					<div class="flex-1 h-auto">
						<div class="flex h-48 items-center">
							<input type="radio" id="Afríka" value="Afríka" class="opacity-0 fixed w-0" v-model="countryPicked">
							<label for="Afríka" class="inline-block selection unselected flex-1 h-48">
								<i class="fad fa-globe-africa fa-4x"></i>
								<h4 class="font-bold uppercase pt-4">Afríka</h4>
							</label>
						</div>
					</div>
				</div>

				<div class="mt-12">
					<div class="flex justify-end">
						<button id="next-button" @click="stepCount++" :disabled="!countryPicked">
							<div class="flex w-auto">
								<span>
									Áfram
								</span>
								<i class="fas fa-long-arrow-alt-right pl-6 self-center"></i>
							</div>
						</button>
					</div>
				</div>
			</div>

			<div class="w-full h-auto" v-if="stepCount === 2">
				<div class="mb-12">
					<small><span v-text="stepCount"></span> / <span v-text="numberOfSlides"></span></small>
					<h2 class="font-medium text-4xl">Í hverju ertu í stuði fyrir?</h2>
				</div>
				<div class="flex -mx-2">
					<div class="flex-1 h-auto">
						<div class="flex h-48 items-center">
							<input type="radio" id="Fisk" value="Fisk" class="opacity-0 fixed w-0" v-model="foodPicked">
							<label for="Fisk" class="inline-block selection unselected flex-1 h-48">
								<i class="fas fa-fish fa-4x"></i>
								<h4 class="font-bold uppercase pt-4">Fisk</h4>
							</label>
						</div>
					</div>

					<div class="flex-1 h-auto">
						<div class="flex h-48 items-center">
							<input type="radio" id="Kjöt" value="Kjöt" class="opacity-0 fixed w-0" v-model="foodPicked">
							<label for="Kjöt" class="inline-block selection unselected flex-1 h-48">
								<i class="fas fa-steak fa-4x"></i>
								<h4 class="font-bold uppercase pt-4">Kjöt</h4>
							</label>
						</div>
					</div>

					<div class="flex-1 h-auto">
						<div class="flex h-48 items-center">
							<input type="radio" id="Kjúkling" value="Kjúkling" class="opacity-0 fixed w-0" v-model="foodPicked">
							<label for="Kjúkling" class="inline-block selection unselected flex-1 h-48">
								<i class="fas fa-drumstick fa-4x"></i>
								<h4 class="font-bold uppercase pt-4">Kjúkling</h4>
							</label>
						</div>
					</div>

					<div class="flex-1 h-auto">
						<div class="flex h-48 items-center">
							<input type="radio" id="Súpu" value="Súpu" class="opacity-0 fixed w-0" v-model="foodPicked">
							<label for="Súpu" class="inline-block selection unselected flex-1 h-48">
								<i class="fas fa-soup fa-4x"></i>
								<h4 class="font-bold uppercase pt-4">Súpu</h4>
							</label>
						</div>
					</div>

					<div class="flex-1 h-auto">
						<div class="flex h-48 items-center">
							<input type="radio" id="Annað" value="Annað" class="opacity-0 fixed w-0" v-model="foodPicked">
							<label for="Annað" class="inline-block selection unselected flex-1 h-48">
								<i class="fas fa-salad fa-4x"></i>
								<h4 class="font-bold uppercase pt-4">Annað</h4>
							</label>
						</div>
					</div>
				</div>

				<div class="mt-12">
					<div class="flex justify-between">
						<button id="prev-button" @click="stepCount--">
							<div class="flex w-auto">
								<i class="fas fa-long-arrow-alt-left pr-6 self-center"></i>
								<span>
									Til baka
								</span>
							</div>
						</button>
						<button id="next-button" @click="stepCount++" :disabled="!foodPicked">
							<div class="flex w-auto">
								<span>
									Áfram
								</span>
								<i class="fas fa-long-arrow-alt-right pl-6 self-center"></i>
							</div>
						</button>
					</div>
				</div>
			</div>

			<div class="w-full h-auto" v-if="stepCount === 3">
				<div class="mb-12">
					<small><span v-text="stepCount"></span> / <span v-text="numberOfSlides"></span></small>
					<h2 class="font-medium text-4xl">Sterka eða ekki?</h2>
				</div>
				<div class="flex -mx-2">
					<div class="flex-1 h-auto">
						<div class="flex h-48 items-center">
							<input type="radio" id="Sterkt" value="Sterkt" class="opacity-0 fixed w-0" v-model="spicyPicked">
							<label for="Sterkt" class="inline-block selection unselected flex-1 h-48">
								<i class="fas fa-pepper-hot fa-4x"></i>
								<h4 class="font-bold uppercase pt-4">Sterkt</h4>
							</label>
						</div>
					</div>

					<div class="flex-1 h-auto">
						<div class="flex h-48 items-center">
							<input type="radio" id="EkkiSterkt" value="Ekki Sterkt" class="opacity-0 fixed w-0" v-model="spicyPicked">
							<label for="EkkiSterkt" class="inline-block selection unselected flex-1 h-48">
								<i class="fas fa-leaf fa-4x"></i>
								<h4 class="font-bold uppercase pt-4">Ekki Sterkt</h4>
							</label>
						</div>
					</div>
				</div>

				<div class="mt-12">
					<div class="flex justify-between">
						<button id="prev-button" @click="stepCount--">
							<div class="flex w-auto">
								<i class="fas fa-long-arrow-alt-left pr-6 self-center"></i>
								<span>
									Til baka
								</span>
							</div>
						</button>
						<button id="next-button" @click="stepCount++" :disabled="!spicyPicked">
							<div class="flex w-auto">
								<span>
									Áfram
								</span>
								<i class="fas fa-long-arrow-alt-right pl-6 self-center"></i>
							</div>
						</button>
					</div>
				</div>
			</div>

			<div class="w-full h-auto" v-if="stepCount === 4">
				<div class="flex -mx-2 pt-64 pb-12">
					<div class="w-2/5">
						<img src="/images/duck.jpg" class="w-full object-cover">
						<button id="prev-button" class="btn mt-12" @click="stepCount--">
							<div class="flex w-auto">
								<i class="fas fa-long-arrow-alt-left pr-6 self-center"></i>
								<span>
									Til baka
								</span>
							</div>
						</button>
					</div>
					<div class="flex-1 self-center px-6 overflow-hidden">
						<h2 class="text-4xl font-bold leading-tight">Andar salat</h2>

						<p class="text-base font-normal leading-relaxed py-6">
							Dýrindist andarsalat sem er létt í eldun sem og maga. 
						</p>

						<div class="py-6">
							<h4 class="font-bold uppercase">Hráefni</h4>
							<hr class="border mb-4">
							
							<p class="mb-2">1 andarlæri</p>
							<p class="mb-2">1 tsp Chinese five-spice powder</p>
							<p class="mb-2">140g rice noodles</p>
							<p class="mb-2">1 celery, stick, cut into matchsticks</p>
							<p class="mb-2">1 carrot, cut into matchsticks</p>
							<p class="mb-2">½ cucumber, deseeded and cut into matchsticks</p>
							<p class="mb-2">2 spring onions, sliced lengthways</p>
							<p class="mb-2">2 tbsp hoisin sauce</p>
							<p class="mb-2">1 tbsp soy sauce</p>
						</div>

						<div>
							<h4 class="font-bold uppercase">Aðferð</h4>
							<hr class="border mb-4">
							
							<p class="leading-relaxed mb-2">Heat oven to 220C/200C fan/gas 7. Rub the duck leg all over with five-spice and seasoning, place on a baking tray and roast for 25 mins.</p>
							<p class="leading-relaxed mb-2">Meanwhile, cook the rice noodles following pack instructions. Drain and cool under cold running water, then drain again well and toss with the celery, carrot, cucumber and spring onions. When cool enough to handle, remove the duck meat and crispy skin from the bone and finely shred.</p>
							<p class="leading-relaxed mb-2">To make the dressing, mix the hoisin and soy sauce with 2 tbsp water. Divide the noodles between two plates and top with the shredded duck. Drizzle over the dressing and serve.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</template>

<script>
export default {
	data() {
		return {
			stepCount: 1,
			numberOfSlides: 4,
			countryPicked: '',
			foodPicked: '',
			spicyPicked: '',
		}
	}
};
</script>

<style>
button {
	background: transparent;
	color: #9E9E9E;
	border: 2px solid;
	padding-right: 1rem;
	padding-left: 1rem;
	padding-top: 0.5rem;
	padding-bottom: 0.5rem;
	text-transform: uppercase;
	font-weight: 700;
	transition: all .1s ease-out;
}

button:focus {outline:0;}

#next-button {
	background: #E67635;
	color: white;
	border-color: #E67635;
}

#next-button:hover {
	background: #EF8E58;
	border-color: #EF8E58;
}

#next-button:disabled {
	background: transparent;
	color: #9E9E9E;
	border-color: #9E9E9E
}

#prev-button {
	border-color: #9E9E9E;
}

#prev-button:hover {
	background: #9E9E9E;
	border-color: #9E9E9E;
	color: #F7F7F7;
}

input[type="radio"] + label {
	border: 3px solid grey;
	background: transparent;
	padding-right: 1rem;
	padding-left: 1rem;
	padding-top: 0.5rem;
	padding-bottom: 0.5rem;
	margin: 0.5rem;
	text-align: center;
	transition: all .15s ease-out;
	border-color: #9E9E9E;
	color: #9E9E9E;
}

input[type="radio"] + label:hover {
	background: white;
	border-color: #E67635;
	color: #E67635;
}

input[type="radio"]:checked + label {
	background: white;
	border-color: #E67635;
	color: #E67635;
}
</style>