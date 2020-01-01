<template>
	<div class="container max-w-4xl mx-auto">
		<div class="flex items-center h-auto md:h-screen py-20 md:py-0">
			<div class="w-full h-auto" v-if="stepCount === 1">
				<div class="flex flex-col">
					<div class="w-full mb-12 px-6 md:px-0">
						<small><span v-text="stepCount"></span> / <span v-text="numberOfSlides"></span></small>
						<h2 class="font-medium text-4xl">Eftir hverju ertu að leita?</h2>
					</div>

					<div class="w-full px-6 md:px-0">
						<div class="flex flex-col md:flex-row -mx-2">
							<div class="flex-1 h-auto mb-8 md:mb-0">
								<div class="flex h-48 items-center">
									<input type="radio" id="Hádeigismat" value="Hádeigismat" class="opacity-0 fixed w-0" v-model="mealsPicked">
									<label for="Hádeigismat" class="inline-block selection unselected flex-1 h-48">
										<i class="fad fa-bacon fa-4x pt-8"></i>
										<h4 class="font-bold uppercase pt-4">Hádeigismat</h4>
									</label>
								</div>
							</div>

							<div class="flex-1 h-auto mb-8 md:mb-0">
								<div class="flex h-48 items-center">
									<input type="radio" id="Kvöldmat" value="Kvöldmat" class="opacity-0 fixed w-0" v-model="mealsPicked">
									<label for="Kvöldmat" class="inline-block selection unselected flex-1 h-48">
										<i class="fad fa-pizza fa-4x pt-8"></i>
										<h4 class="font-bold uppercase pt-4">Kvöldmat</h4>
									</label>
								</div>
							</div>

							<!-- <div class="flex-1 h-auto mb-8 md:mb-0">
								<div class="flex h-48 items-center">
									<input type="radio" id="Eftirrétt" value="Eftirrétt" class="opacity-0 fixed w-0" v-model="mealsPicked">
									<label for="Eftirrétt" class="inline-block selection unselected flex-1 h-48">
										<i class="fad fa-birthday-cake fa-4x pt-8"></i>
										<h4 class="font-bold uppercase pt-4">Eftirrétt</h4>
									</label>
								</div>
							</div> -->
						</div>
					</div>

					<div class="w-full mt-12 px-6 md:px-0">
						<div class="flex justify-end">
							<button class="next-button" @click="stepCount++" :disabled="!mealsPicked">
								<div class="flex w-auto">
									<span>
										Áfram
									</span>
									<i class="fad fa-long-arrow-alt-right pl-6 self-center"></i>
								</div>
							</button>
						</div>
					</div>
				</div>
			</div>

			<div class="w-full h-auto" v-if="stepCount === 2">
				<div class="flex flex-col">
					<div class="w-full mb-12 px-6 md:px-0">
						<small><span v-text="stepCount"></span> / <span v-text="numberOfSlides"></span></small>
						<h2 class="font-medium text-4xl">Ertu vegan?</h2>
					</div>

					<div class="w-full px-6 md:px-0">
						<div class="flex flex-col md:flex-row -mx-2">
							<div class="flex-1 h-auto mb-8 md:mb-0">
								<div class="flex h-48 items-center">
									<input type="radio" id="Vegan" value="Vegan" class="opacity-0 fixed w-0" v-model="veganPicked">
									<label for="Vegan" class="inline-block selection unselected flex-1 h-48">
										<i class="fad fa-leaf-heart fa-4x pt-8"></i>
										<h4 class="font-bold uppercase pt-4">Vegan</h4>
									</label>
								</div>
							</div>

							<div class="flex-1 h-auto mb-8 md:mb-0">
								<div class="flex h-48 items-center">
									<input type="radio" id="VeganEnBorðaFisk" value="Vegan en borða fisk" class="opacity-0 fixed w-0" v-model="veganPicked">
									<label for="VeganEnBorðaFisk" class="inline-block selection unselected flex-1 h-48">
										<i class="fad fa-fish fa-4x pt-8"></i>
										<h4 class="font-bold uppercase pt-4">Vegan en borða fisk</h4>
									</label>
								</div>
							</div>

							<div class="flex-1 h-auto mb-8 md:mb-0">
								<div class="flex h-48 items-center">
									<input type="radio" id="EkkiVegan" value="Ekki vegan" class="opacity-0 fixed w-0" v-model="veganPicked">
									<label for="EkkiVegan" class="inline-block selection unselected flex-1 h-48">
										<i class="fad fa-steak fa-4x pt-8"></i>
										<h4 class="font-bold uppercase pt-4">Er ekki vegan</h4>
									</label>
								</div>
							</div>
						</div>
					</div>

					<div class="w-full mt-12 px-6 md:px-0">
						<div class="flex justify-between">
							<button class="prev-button" @click="stepCount--">
								<div class="flex w-auto">
									<i class="fad fa-long-arrow-alt-left pr-6 self-center"></i>
									<span>
										Til baka
									</span>
								</div>
							</button>
							<button class="next-button" @click="stepCount++" :disabled="!veganPicked">
								<div class="flex w-auto">
									<span>
										Áfram
									</span>
									<i class="fad fa-long-arrow-alt-right pl-6 self-center"></i>
								</div>
							</button>
						</div>
					</div>
				</div>
			</div>

			<div class="w-full h-auto" v-if="stepCount === 3">
				<div class="flex flex-col">
					<div class="w-full mb-12 px-6 md:px-0">
						<small><span v-text="stepCount"></span> / <span v-text="numberOfSlides"></span></small>
						<h2 class="font-medium text-4xl">Frá hvaða landi viltu hafa matinn þinn?</h2>
					</div>

					<div class="w-full px-6 md:px-0">
						<div class="flex flex-col md:flex-row -mx-2">
							<div class="flex-1 h-auto mb-8 md:mb-0">
								<div class="flex h-48 items-center">
									<input type="radio" id="Evrópa" value="Evrópa" class="opacity-0 fixed w-0" v-model="continentsPicked">
									<label for="Evrópa" class="inline-block selection unselected flex-1 h-48">
										<i class="fad fa-globe-europe fa-4x pt-8"></i>
										<h4 class="font-bold uppercase pt-4">Evrópa</h4>
									</label>
								</div>
							</div>

							<div class="flex-1 h-auto mb-8 md:mb-0">
								<div class="flex h-48 items-center">
									<input type="radio" id="Asía" value="Asía" class="opacity-0 fixed w-0" v-model="continentsPicked">
									<label for="Asía" class="inline-block selection unselected flex-1 h-48">
										<i class="fad fa-globe-asia fa-4x pt-8"></i>
										<h4 class="font-bold uppercase pt-4">Asía</h4>
									</label>
								</div>
							</div>

							<div class="flex-1 h-auto mb-8 md:mb-0">
								<div class="flex h-48 items-center">
									<input type="radio" id="Suður-Ameríka" value="Suður-Ameríka" class="opacity-0 fixed w-0" v-model="continentsPicked">
									<label for="Suður-Ameríka" class="inline-block selection unselected flex-1 h-48">
										<i class="fad fa-globe-americas fa-4x pt-8"></i>
										<h4 class="font-bold uppercase pt-4">Suður-Ameríka</h4>
									</label>
								</div>
							</div>

							<!-- <div class="flex-1 h-auto mb-8 md:mb-0">
								<div class="flex h-48 items-center">
									<input type="radio" id="Afríka" value="Afríka" class="opacity-0 fixed w-0" v-model="continentsPicked">
									<label for="Afríka" class="inline-block selection unselected flex-1 h-48">
										<i class="fad fa-globe-africa fa-4x pt-8"></i>
										<h4 class="font-bold uppercase pt-4">Afríka</h4>
									</label>
								</div>
							</div> -->
						</div>
					</div>

					<div class="w-full mt-12 px-6 md:px-0">
						<div class="flex justify-between">
							<button class="prev-button" @click="stepCount--">
								<div class="flex w-auto">
									<i class="fad fa-long-arrow-alt-left pr-6 self-center"></i>
									<span>
										Til baka
									</span>
								</div>
							</button>
							<button class="next-button" @click="stepCount++" :disabled="!continentsPicked">
								<div class="flex w-auto">
									<span>
										Áfram
									</span>
									<i class="fad fa-long-arrow-alt-right pl-6 self-center"></i>
								</div>
							</button>
						</div>
					</div>
				</div>
			</div>

			<div class="w-full h-auto" v-if="stepCount === 4">
				<div class="flex flex-col">
					<div class="w-full mb-12 px-6 md:px-0">
						<small><span v-text="stepCount"></span> / <span v-text="numberOfSlides"></span></small>
						<h2 class="font-medium text-4xl">Í hverju ertu í stuði fyrir?</h2>
					</div>

					<div class="w-full px-6 md:px-0">
						<div class="flex flex-col md:flex-row -mx-2">
							<div class="flex-1 h-auto mb-8 md:mb-0" v-if="veganPicked !== 'Vegan'">
								<div class="flex h-48 items-center">
									<input type="radio" id="Fisk" value="Fisk" class="opacity-0 fixed w-0" v-model="foodPicked">
									<label for="Fisk" class="inline-block selection unselected flex-1 h-48">
										<i class="fad fa-fish fa-4x pt-8"></i>
										<h4 class="font-bold uppercase pt-4">Fisk</h4>
									</label>
								</div>
							</div>

							<div class="flex-1 h-auto mb-8 md:mb-0" v-if="veganPicked === 'Ekki vegan'">
								<div class="flex h-48 items-center">
									<input type="radio" id="Kjöt" value="Kjöt" class="opacity-0 fixed w-0" v-model="foodPicked">
									<label for="Kjöt" class="inline-block selection unselected flex-1 h-48">
										<i class="fad fa-steak fa-4x pt-8"></i>
										<h4 class="font-bold uppercase pt-4">Kjöt</h4>
									</label>
								</div>
							</div>

							<div class="flex-1 h-auto mb-8 md:mb-0" v-if="veganPicked === 'Ekki vegan'">
								<div class="flex h-48 items-center">
									<input type="radio" id="Kjúkling" value="Kjúkling" class="opacity-0 fixed w-0" v-model="foodPicked">
									<label for="Kjúkling" class="inline-block selection unselected flex-1 h-48">
										<i class="fad fa-drumstick fa-4x pt-8"></i>
										<h4 class="font-bold uppercase pt-4">Kjúkling</h4>
									</label>
								</div>
							</div>

							<div class="flex-1 h-auto mb-8 md:mb-0">
								<div class="flex h-48 items-center">
									<input type="radio" id="Súpu" value="Súpu" class="opacity-0 fixed w-0" v-model="foodPicked">
									<label for="Súpu" class="inline-block selection unselected flex-1 h-48">
										<i class="fad fa-soup fa-4x pt-8"></i>
										<h4 class="font-bold uppercase pt-4">Súpu</h4>
									</label>
								</div>
							</div>

							<div class="flex-1 h-auto mb-8 md:mb-0">
								<div class="flex h-48 items-center">
									<input type="radio" id="Annað" value="Annað" class="opacity-0 fixed w-0" v-model="foodPicked">
									<label for="Annað" class="inline-block selection unselected flex-1 h-48">
										<i class="fad fa-salad fa-4x pt-8"></i>
										<h4 class="font-bold uppercase pt-4">Annað</h4>
									</label>
								</div>
							</div>
						</div>
					</div>

					<div class="w-full mt-12 px-6 md:px-0">
						<div class="flex justify-between">
							<button class="prev-button" @click="stepCount--">
								<div class="flex w-auto">
									<i class="fad fa-long-arrow-alt-left pr-6 self-center"></i>
									<span>
										Til baka
									</span>
								</div>
							</button>
							<button class="next-button" @click="stepCount++" :disabled="!foodPicked">
								<div class="flex w-auto">
									<span>
										Áfram
									</span>
									<i class="fad fa-long-arrow-alt-right pl-6 self-center"></i>
								</div>
							</button>
						</div>
					</div>
				</div>
			</div>

			<div class="w-full h-auto" v-if="stepCount === 5">
				<div class="flex flex-col">
					<div class="w-full mb-12 px-6 md:px-0">
						<small><span v-text="stepCount"></span> / <span v-text="numberOfSlides"></span></small>
						<h2 class="font-medium text-4xl">Viltu sterkan mat eða ekki?</h2>
					</div>

					<div class="w-full px-6 md:px-0">
						<div class="flex flex-col md:flex-row -mx-2">
							<div class="flex-1 h-auto mb-8 md:mb-0">
								<div class="flex h-48 items-center">
									<input type="radio" id="Sterkt" value="1" class="opacity-0 fixed w-0" v-model="spicyPicked">
									<label for="Sterkt" class="inline-block selection unselected flex-1 h-48">
										<i class="fad fa-pepper-hot fa-4x pt-8"></i>
										<h4 class="font-bold uppercase pt-4">Sterkt</h4>
									</label>
								</div>
							</div>

							<div class="flex-1 h-auto mb-8 md:mb-0">
								<div class="flex h-48 items-center">
									<input type="radio" id="EkkiSterkt" value="0" class="opacity-0 fixed w-0" v-model="spicyPicked">
									<label for="EkkiSterkt" class="inline-block selection unselected flex-1 h-48">
										<i class="fad fa-leaf fa-4x pt-8"></i>
										<h4 class="font-bold uppercase pt-4">Ekki Sterkt</h4>
									</label>
								</div>
							</div>
						</div>
					</div>

					<div class="w-full mt-12 px-6 md:px-0">
						<div class="flex justify-between">
							<button class="prev-button" @click="stepCount--">
								<div class="flex w-auto">
									<i class="fad fa-long-arrow-alt-left pr-6 self-center"></i>
									<span>
										Til baka
									</span>
								</div>
							</button>
							<button class="next-button" @click="stepCount++" :disabled="!spicyPicked">
								<div class="flex w-auto">
									<span>
										Áfram
									</span>
									<i class="fad fa-long-arrow-alt-right pl-6 self-center"></i>
								</div>
							</button>
						</div>
					</div>
				</div>
			</div>

			<div class="w-full h-auto" v-if="stepCount === 6">
				<div class="flex flex-col">
					<div class="w-full mb-12 px-6 md:px-0">
						<small><span v-text="stepCount"></span> / <span v-text="numberOfSlides"></span></small>
						<h2 class="font-medium text-4xl">Er þetta rétt?</h2>
					</div>

					<div class="w-full px-6 md:px-0">
						<table class="text-left w-full border-collapse"> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
							<thead>
								<tr class="flex">
									<th class="w-6/12 py-4 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Spurning</th>
									<th class="flex-1 py-4 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Þú valdir</th>
								</tr>
							</thead>
							<tbody>
								<tr class="flex">
									<td class="w-6/12 py-4 border-b border-grey-light">Eftir hverju ertu að leita?</td>
									<td class="flex-1 py-4 border-b border-grey-light"><span v-text="mealsPicked"></span></td>
								</tr>
								<tr class="flex">
									<td class="w-6/12 py-4 border-b border-grey-light">Ertu vegan?</td>
									<td class="flex-1 py-4 border-b border-grey-light"><span v-text="veganPicked"></span></td>
								</tr>
								<tr class="flex">
									<td class="w-6/12 py-4 border-b border-grey-light">Frá hvaða landi viltu hafa matinn þinn?</td>
									<td class="flex-1 py-4 border-b border-grey-light"><span v-text="continentsPicked"></span></td>
								</tr>
								<tr class="flex">
									<td class="w-6/12 py-4 border-b border-grey-light">Í hverju ertu í stuði fyrir?</td>
									<td class="flex-1 py-4 border-b border-grey-light"><span v-text="foodPicked"></span></td>
								</tr>
								<tr class="flex">
									<td class="w-6/12 py-4 border-b border-grey-light">Viltu sterkan mat eða ekki?</td>
									<td class="flex-1 py-4 border-b border-grey-light" v-if="spicyPicked !== 0">Já</td> <!-- skilar vitlausu-->
									<td class="flex-1 py-4 border-b border-grey-light" v-else>Nei</td>
								</tr>
							</tbody>
						</table>
					</div>

					<div class="w-full mt-12 px-6 md:px-0">
						<div class="flex justify-between">
							<button class="prev-button" @click="stepCount--">
								<div class="flex w-auto">
									<i class="fad fa-long-arrow-alt-left pr-6 self-center"></i>
									<span>
										Til baka
									</span>
								</div>
							</button>
							<button class="next-button" @click.once="submitForm(); stepCount++;">
								<div class="flex w-auto">
									<span>
										Áfram
									</span>
									<i class="fad fa-long-arrow-alt-right pl-6 self-center"></i>
								</div>
							</button>
						</div>
					</div>
				</div>
			</div>

			<div class="w-full h-auto" v-if="stepCount === 7">
				<div class="flex flex-col">
					<div class="w-full mb-12 px-6 md:px-0">
						<h2 class="font-medium text-4xl">Hér er einhvað handa þér</h2>
					</div>

					<div class="w-full px-6 md:px-0">
						<div v-for="first in recipes">
							<div v-for="recipe in first">
								<p class="text-2xl mb-3"><strong>{{ recipe.title }}</strong></p>
								<p>{{ recipe.paragraph }}</p>
							</div>  
						</div>
					</div>

					<div class="w-full mt-12 px-6 md:px-0">
						<div class="flex justify-between">
							<button class="prev-button" @click="stepCount--">
								<div class="flex w-auto">
									<i class="fad fa-long-arrow-alt-left pr-6 self-center"></i>
									<span>
										Til baka
									</span>
								</div>
							</button>
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
			numberOfSlides: 6,
			mealsPicked: '',
			veganPicked: '',
			continentsPicked: '',
			foodPicked: '',
			spicyPicked: '',
			executed: false,
			recipes: []
		}
	},

	methods: {
		submitForm: function () {
			let self = this;

			if (self.executed === true) {

			} else {
				self.executed = true;

				axios.get('/uppskriftir/sækja', { // sækjir gögn úr gagngrunni
					params: {
						maltid: this.mealsPicked,
						vegan: this.veganPicked,
						heimsalfa: this.continentsPicked,
						kjot: this.foodPicked,
						spicy: this.spicyPicked
					}
				})
				.then(function (response) {
					self.recipes.push(response.data);
				})
				.catch(function (error) {
					console.log(error);
				});
			}
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

.next-button {
	background: #E67635;
	color: white;
	border-color: #E67635;
}

.next-button:hover {
	background: #EF8E58;
	border-color: #EF8E58;
}

.next-button:disabled {
	background: transparent;
	color: #9E9E9E;
	border-color: #9E9E9E
}

.prev-button {
	border-color: #9E9E9E;
}

.prev-button:hover {
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