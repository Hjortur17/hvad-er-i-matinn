<template>
	<main class="relative">
		<section v-if="stepCount === 1">
			<div class="flex">
				<div class="w-full md:w-8/12">
					<h1 class="font-extrabold text-5xl md:text-6xl text-purple-500 leading-none mb-4">Hvað er í matinn?</h1>
					<h2 class="text-base md:text-lg font-light text-gray-900 leading-relaxed md:leading-normal">Einn erfiðasta spurning dagsins. Findu þinn kvöld mat hér með fá einum auðveldum spurningum</h2>
					<button class="px-6 py-2 mt-6 md:mt-12 rounded-full text-sm bg-teal-300 hover:shadow-md text-teal-800 transition shadow focus:outline-none" @click="stepCount++">Finna uppskriftir</button>
				</div>
			</div>
		</section>

		<section v-if="stepCount === 2" class="text-center">
			<header class="max-w-xl mx-auto">
				<h2 class="text-3xl md:text-4xl">Ertu vegan?</h2>
			</header>

			<div class="max-w-md mx-auto my-12">
				<div class="flex justify-center flex-wrap flex-row">
					<div class="w-auto">
						<input type="radio" id="vegan" name="veganPick" :value="true" class="opacity-0 fixed w-0" v-model="veganPick" @click="pesceterianPick = ''">
						<label for="vegan" class="inline-block relative px-6 py-2 border-2 border-white bg-white rounded-full transition shadow hover:shadow-md m-2">
							<h3 class="text-center text-sm md:text-base">Já</h3>
						</label>
					</div>

					<div class="w-auto">
						<input type="radio" id="notVegan" name="veganPick" :value="false" class="opacity-0 fixed w-0" v-model="veganPick" @click="pesceterianPick = false">
						<label for="notVegan" class="inline-block relative px-6 py-2 border-2 border-white bg-white rounded-full transition shadow hover:shadow-md m-2">
							<h3 class="text-center text-sm md:text-base">Nei</h3>
						</label>
					</div>
				</div>
			</div>

			<footer class="max-w-xl mx-auto">
				<div class="flex justify-between">
					<button class="outline-none focus:outline-none hover:text-teal-500 transition text-sm font-light" @click="stepCount--">Til baka</button>
					<button class="outline-none focus:outline-none hover:text-teal-500 transition text-sm" @click="stepCount++" :disabled="veganPick === ''">Áfram</button>
				</div>
			</footer>
		</section>

		<section v-if="(veganPick === true && stepCount === 3)" class="text-center">
			<header class="max-w-xl mx-auto">
				<h2 class="text-3xl md:text-4xl">Ertu pesceterian?</h2>
			</header>

			<div class="max-w-md mx-auto my-12">
				<div class="flex justify-center flex-wrap flex-row">
					<div class="w-auto">
						<input type="radio" id="pesceterian" name="pesceterianPick" :value="true" class="opacity-0 fixed w-0" v-model="pesceterianPick">
						<label for="pesceterian" class="inline-block relative px-6 py-2 border-2 border-white bg-white rounded-full transition shadow hover:shadow-md m-2">
							<h3 class="text-center text-sm md:text-base">Já</h3>
						</label>
					</div>

					<div class="w-auto">
						<input type="radio" id="notPesceterian" name="pesceterianPick" :value="false" class="opacity-0 fixed w-0" v-model="pesceterianPick">
						<label for="notPesceterian" class="inline-block relative px-6 py-2 border-2 border-white bg-white rounded-full transition shadow hover:shadow-md m-2">
							<h3 class="text-center text-sm md:text-base">Nei</h3>
						</label>
					</div>
				</div>
			</div>

			<footer class="max-w-xl mx-auto">
				<div class="flex justify-between">
					<button class="outline-none focus:outline-none hover:text-teal-500 transition text-sm font-light" @click="stepCount--">Til baka</button>
					<button class="outline-none focus:outline-none hover:text-teal-500 transition text-sm" @click="stepCount++" :disabled="pesceterianPick === ''">Áfram</button>
				</div>
			</footer>
		</section>

		<section v-if="(veganPick === true && stepCount === 4)" class="text-center">
			<header class="max-w-xl mx-auto">
				<h2 class="text-3xl md:text-4xl">Hvers lenskan viltu hafa réttinn?</h2>
			</header>

			<div class="max-w-md mx-auto my-12">
				<div class="flex justify-center flex-wrap flex-row">
					<div class="w-auto">
						<input type="radio" id="europe" name="europe" value="Evrópa" class="opacity-0 fixed w-0" v-model="continentsPick">
						<label for="europe" class="inline-block relative px-6 py-2 border-2 border-white bg-white rounded-full transition shadow hover:shadow-md m-2">
							<h3 class="text-center text-sm md:text-base">Evrópskan</h3>
						</label>
					</div>

					<div class="w-auto">
						<input type="radio" id="asia" name="asia" value="Asía" class="opacity-0 fixed w-0" v-model="continentsPick">
						<label for="asia" class="inline-block relative px-6 py-2 border-2 border-white bg-white rounded-full transition shadow hover:shadow-md m-2">
							<h3 class="text-center text-sm md:text-base">Asískan</h3>
						</label>
					</div>

					<div class="w-auto">
						<input type="radio" id="americas" name="americas" value="Ameríka" class="opacity-0 fixed w-0" v-model="continentsPick">
						<label for="americas" class="inline-block relative px-6 py-2 border-2 border-white bg-white rounded-full transition shadow hover:shadow-md m-2">
							<h3 class="text-center text-sm md:text-base">Amerískan</h3>
						</label>
					</div>
				</div>
			</div>

			<footer class="max-w-xl mx-auto">
				<div class="flex justify-between">
					<button class="outline-none focus:outline-none hover:text-teal-500 transition text-sm font-light" @click="stepCount--">Til baka</button>
					<button class="outline-none focus:outline-none hover:text-teal-500 transition text-sm" @click="stepCount++" :disabled="continentsPick === ''">Áfram</button>
				</div>
			</footer>
		</section>

		<section v-if="(veganPick === true && stepCount === 5)" class="text-center">
			<header class="max-w-xl mx-auto">
				<h2 class="text-3xl md:text-4xl">Hvað langar þér í?</h2>
			</header>

			<div class="max-w-md mx-auto my-12">
				<div class="flex justify-center flex-wrap flex-row">
					<div class="w-auto" v-if="pesceterianPick === true">
						<input type="radio" id="fish" name="fish" value="Fisk" class="opacity-0 fixed w-0" v-model="foodPick">
						<label for="fish" class="inline-block relative px-6 py-2 border-2 border-white bg-white rounded-full transition shadow hover:shadow-md m-2">
							<h3 class="text-center text-sm md:text-base">Fisk</h3>
						</label>
					</div>

					<div class="w-auto">
						<input type="radio" id="salad" name="salad" value="Salat" class="opacity-0 fixed w-0" v-model="foodPick">
						<label for="salad" class="inline-block relative px-6 py-2 border-2 border-white bg-white rounded-full transition shadow hover:shadow-md m-2">
							<h3 class="text-center text-sm md:text-base">Salat</h3>
						</label>
					</div>

					<div class="w-auto">
						<input type="radio" id="soup" name="soup" value="Súpa" class="opacity-0 fixed w-0" v-model="foodPick">
						<label for="soup" class="inline-block relative px-6 py-2 border-2 border-white bg-white rounded-full transition shadow hover:shadow-md m-2">
							<h3 class="text-center text-sm md:text-base">Súpu</h3>
						</label>
					</div>

					<div class="w-auto">
						<input type="radio" id="other" name="other" value="Annað" class="opacity-0 fixed w-0" v-model="foodPick">
						<label for="other" class="inline-block relative px-6 py-2 border-2 border-white bg-white rounded-full transition shadow hover:shadow-md m-2">
							<h3 class="text-center text-sm md:text-base">Annað</h3>
						</label>
					</div>
				</div>
			</div>

			<footer class="max-w-xl mx-auto">
				<div class="flex justify-between">
					<button class="outline-none focus:outline-none hover:text-teal-500 transition text-sm font-light" @click="stepCount--">Til baka</button>
					<button class="outline-none focus:outline-none hover:text-teal-500 transition text-sm" @click="stepCount++" :disabled="foodPick === ''">Áfram</button>
				</div>
			</footer>
		</section>

		<section v-if="(veganPick === true && stepCount === 6)" class="text-center">
			<header class="max-w-xl mx-auto">
				<h2 class="text-3xl md:text-4xl">Borðar þú sterkan mat?</h2>
			</header>

			<div class="max-w-md mx-auto my-12">
				<div class="flex justify-center flex-wrap flex-row">
					<div class="w-auto">
						<input type="radio" id="spicy" name="spicy" :value="true" class="opacity-0 fixed w-0" v-model="spicyPick">
						<label for="spicy" class="inline-block relative px-6 py-2 border-2 border-white bg-white rounded-full transition shadow hover:shadow-md m-2">
							<h3 class="text-center text-sm md:text-base">Já</h3>
						</label>
					</div>

					<div class="w-auto">
						<input type="radio" id="notSpicy" name="notSpicy" :value="false" class="opacity-0 fixed w-0" v-model="spicyPick">
						<label for="notSpicy" class="inline-block relative px-6 py-2 border-2 border-white bg-white rounded-full transition shadow hover:shadow-md m-2">
							<h3 class="text-center text-sm md:text-base">Nei</h3>
						</label>
					</div>
				</div>
			</div>

			<footer class="max-w-xl mx-auto">
				<div class="flex justify-between">
					<button class="outline-none focus:outline-none hover:text-teal-500 transition text-sm font-light" @click="stepCount--">Til baka</button>
					<button class="outline-none focus:outline-none hover:text-teal-500 transition text-sm" @click="submitForm(); stepCount++" :disabled="spicyPick === ''">Sækja uppskriftir</button>
				</div>
			</footer>
		</section>

		<recipes :recipes="recipes" :loading="loading" @stepback="stepCount--" v-if="(veganPick === true && stepCount === 7)"></recipes>

		<section v-if="(veganPick === false && stepCount === 3)" class="text-center">
			<header class="max-w-xl mx-auto">
				<h2 class="text-3xl md:text-4xl">Hvers lenskan viltu hafa réttinn?</h2>
			</header>

			<div class="max-w-md mx-auto my-12">
				<div class="flex justify-center flex-wrap flex-row">
					<div class="w-auto">
						<input type="radio" id="europe" name="europe" value="Evrópa" class="opacity-0 fixed w-0" v-model="continentsPick">
						<label for="europe" class="inline-block relative px-6 py-2 border-2 border-white bg-white rounded-full transition shadow hover:shadow-md m-2">
							<h3 class="text-center text-sm md:text-base">Evrópskan</h3>
						</label>
					</div>

					<div class="w-auto">
						<input type="radio" id="asia" name="asia" value="Asía" class="opacity-0 fixed w-0" v-model="continentsPick">
						<label for="asia" class="inline-block relative px-6 py-2 border-2 border-white bg-white rounded-full transition shadow hover:shadow-md m-2">
							<h3 class="text-center text-sm md:text-base">Asískan</h3>
						</label>
					</div>

					<div class="w-auto">
						<input type="radio" id="americas" name="americas" value="Ameríka" class="opacity-0 fixed w-0" v-model="continentsPick">
						<label for="americas" class="inline-block relative px-6 py-2 border-2 border-white bg-white rounded-full transition shadow hover:shadow-md m-2">
							<h3 class="text-center text-sm md:text-base">Amerískan</h3>
						</label>
					</div>
				</div>
			</div>

			<footer class="max-w-xl mx-auto">
				<div class="flex justify-between">
					<button class="outline-none focus:outline-none hover:text-teal-500 transition text-sm font-light" @click="stepCount--">Til baka</button>
					<button class="outline-none focus:outline-none hover:text-teal-500 transition text-sm" @click="stepCount++" :disabled="continentsPick === ''">Áfram</button>
				</div>
			</footer>
		</section>

		<section v-if="(veganPick === false && stepCount === 4)" class="text-center">
			<header class="max-w-xl mx-auto">
				<h2 class="text-3xl md:text-4xl">Hvað langar þér í?</h2>
			</header>

			<div class="max-w-md mx-auto my-12">
				<div class="flex justify-center flex-wrap flex-row">
					<div class="w-auto">
						<input type="radio" id="fish" name="fish" value="Fisk" class="opacity-0 fixed w-0" v-model="foodPick">
						<label for="fish" class="inline-block relative px-6 py-2 border-2 border-white bg-white rounded-full transition shadow hover:shadow-md m-2">
							<h3 class="text-center text-sm md:text-base">Fisk</h3>
						</label>
					</div>

					<div class="w-auto">
						<input type="radio" id="meat" name="meat" value="Kjöt" class="opacity-0 fixed w-0" v-model="foodPick">
						<label for="meat" class="inline-block relative px-6 py-2 border-2 border-white bg-white rounded-full transition shadow hover:shadow-md m-2">
							<h3 class="text-center text-sm md:text-base">Kjöt</h3>
						</label>
					</div>

					<div class="w-auto">
						<input type="radio" id="chicken" name="chicken" value="Kjúklingur" class="opacity-0 fixed w-0" v-model="foodPick">
						<label for="chicken" class="inline-block relative px-6 py-2 border-2 border-white bg-white rounded-full transition shadow hover:shadow-md m-2">
							<h3 class="text-center text-sm md:text-base">Kjúkling</h3>
						</label>
					</div>

					<div class="w-auto">
						<input type="radio" id="salad" name="salad" value="Salat" class="opacity-0 fixed w-0" v-model="foodPick">
						<label for="salad" class="inline-block relative px-6 py-2 border-2 border-white bg-white rounded-full transition shadow hover:shadow-md m-2">
							<h3 class="text-center text-sm md:text-base">Salat</h3>
						</label>
					</div>

					<div class="w-auto">
						<input type="radio" id="soup" name="soup" value="Súpa" class="opacity-0 fixed w-0" v-model="foodPick">
						<label for="soup" class="inline-block relative px-6 py-2 border-2 border-white bg-white rounded-full transition shadow hover:shadow-md m-2">
							<h3 class="text-center text-sm md:text-base">Súpu</h3>
						</label>
					</div>

					<div class="w-auto">
						<input type="radio" id="other" name="other" value="Annað" class="opacity-0 fixed w-0" v-model="foodPick">
						<label for="other" class="inline-block relative px-6 py-2 border-2 border-white bg-white rounded-full transition shadow hover:shadow-md m-2">
							<h3 class="text-center text-sm md:text-base">Annað</h3>
						</label>
					</div>
				</div>
			</div>

			<footer class="max-w-xl mx-auto">
				<div class="flex justify-between">
					<button class="outline-none focus:outline-none hover:text-teal-500 transition text-sm font-light" @click="stepCount--">Til baka</button>
					<button class="outline-none focus:outline-none hover:text-teal-500 transition text-sm" @click="stepCount++" :disabled="foodPick === ''">Áfram</button>
				</div>
			</footer>
		</section>

		<section v-if="(veganPick === false && stepCount === 5)" class="text-center">
			<header class="max-w-xl mx-auto">
				<h2 class="text-3xl md:text-4xl">Borðar þú sterkan mat?</h2>
			</header>

			<div class="max-w-md mx-auto my-12">
				<div class="flex justify-center flex-wrap flex-row">
					<div class="w-auto">
						<input type="radio" id="spicy" name="spicy" :value="true" class="opacity-0 fixed w-0" v-model="spicyPick">
						<label for="spicy" class="inline-block relative px-6 py-2 border-2 border-white bg-white rounded-full transition shadow hover:shadow-md m-2">
							<h3 class="text-center text-sm md:text-base">Já</h3>
						</label>
					</div>

					<div class="w-auto">
						<input type="radio" id="notSpicy" name="notSpicy" :value="false" class="opacity-0 fixed w-0" v-model="spicyPick">
						<label for="notSpicy" class="inline-block relative px-6 py-2 border-2 border-white bg-white rounded-full transition shadow hover:shadow-md m-2">
							<h3 class="text-center text-sm md:text-base">Nei</h3>
						</label>
					</div>
				</div>
			</div>

			<footer class="max-w-xl mx-auto">
				<div class="flex justify-between">
					<button class="outline-none focus:outline-none hover:text-teal-500 transition text-sm font-light" @click="stepCount--">Til baka</button>
					<button class="outline-none focus:outline-none hover:text-teal-500 transition text-sm" @click="submitForm(); stepCount++" :disabled="spicyPick === ''">Sækja uppskriftir</button>
				</div>
			</footer>
		</section>

		<recipes :recipes="recipes" :loading="loading" @stepback="stepCount--" v-if="(veganPick === false && stepCount === 6)"></recipes> <!-- missing stepCount -->
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
			this.recipes = '';

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
</style>