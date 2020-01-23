<template>
	<section>
		<div v-if="!loading" class="py-12">
				<div class="w-full">
					<div v-if="!recipes.length">
						<div class="w-full">
							<button class="outline-none focus:outline-none hover:text-teal-500 transition font-light text-sm" @click="$emit('stepback')">Til baka</button>
						</div>
						<div class="w-full mt-12">
							<p>Engar uppskriftir fundust</p>
						</div>
					</div>
					<div v-else>
						<header class="mb-12">
							<img :src="'/images/' + recipes[indexLoop].link_to_image" class="w-full h-64 rounded-lg object-cover">
							<div class="flex justify-between mt-4">
								<button class="outline-none focus:outline-none hover:text-teal-500 transition font-light text-sm" @click="$emit('stepback')">Til baka</button>
								<button class="outline-none focus:outline-none hover:text-teal-500 transition font-light text-sm" @click="checkingIfArrayLengthIsShorterThenIndexForLoop" v-if="recipes.length > 1">
									Sækja nýja uppskrift
								</button>
							</div>
						</header>

						<div>
							<h3 class="font-extrabold text-4xl leading-tight" v-text="recipes[indexLoop].title"></h3>
							<p class="text-sm mt-2 mb-12">Þessi uppskrift er fengin af: <a :href="'http://' + recipes[indexLoop].credit" class="hover:text-teal-500 transition" target="_blank" rel="noopener">{{ recipes[indexLoop].credit }}</a></p>

							<div class="flex flex-col md:flex-row">
								<div class="w-full md:w-1/3">
									<table class="text-left w-full border-collapse -my-2">
										<tbody>
											<div v-for="ingredient in recipes[indexLoop].ingredients">
												<h4 class="uppercase font-bold text-base" v-text="ingredient.firstTitle" v-if="ingredient.firstTitle"></h4>
												<tr class="flex" v-for="(value, index) in ingredient" v-if="index < 19">
													<td class="py-2 border-b border-primary-gray w-full" v-if="value">
														<p class="text-sm md:text-base italic capitalize" v-text="value"></p>
													</td>
												</tr>

												<h4 class="uppercase font-bold text-base mt-8" v-text="ingredient.secondTitle" v-if="ingredient.secondTitle"></h4>
												<tr class="flex" v-for="(value, index) in ingredient" v-if="index >= 20 && index < 30">
													<td class="py-2 border-b border-primary-gray w-full" v-if="value">
														<p class="text-sm md:text-base italic capitalize" v-text="value"></p>
													</td>
												</tr>

												<h4 class="uppercase font-bold text-base mt-8" v-text="ingredient.thirdTitle" v-if="ingredient.thirdTitle"></h4>
												<tr class="flex" v-for="(value, index) in ingredient" v-if="index >= 30">
													<td class="py-2 border-b border-primary-gray w-full" v-if="value">
														<p class="text-sm md:text-base italic capitalize" v-text="value"></p>
													</td>
												</tr>
											</div>
										</tbody>
									</table>
								</div>
								<div class="w-full md:flex-1 px-0 md:px-3">
									<h4 class="uppercase font-bold mt-12 mb-4 md:mt-0 md:mb-0 visible md:invisible text-lg">Aðferð</h4>

									<div v-for="instruction in recipes[indexLoop].instructions" class="-mt-0 md:-mt-6">
										<ul>
											<li v-for="(value, index, key) in instruction" v-if="key == index">
												<p class="text-sm md:text-base leading-relaxed capitalize mb-4">{{ value }}</p>
											</li>
										</ul>
									</div>
								</div>	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div v-else>
			<div class="h-full flex items-center justify-center">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" id="loading-symbol" width="50px" class="mx-auto"><path d="M460.115 373.846l-6.941-4.008c-5.546-3.202-7.564-10.177-4.661-15.886 32.971-64.838 31.167-142.731-5.415-205.954-36.504-63.356-103.118-103.876-175.8-107.701C260.952 39.963 256 34.676 256 28.321v-8.012c0-6.904 5.808-12.337 12.703-11.982 83.552 4.306 160.157 50.861 202.106 123.67 42.069 72.703 44.083 162.322 6.034 236.838-3.14 6.149-10.75 8.462-16.728 5.011z"/></svg>
			</div>
		</div>
	</div>
</section>
</template>

<script>
export default {
	props: ['recipes', 'loading'],

	data() {
		return {
			indexLoop: 0,
		}
	},

	methods: {
		checkingIfArrayLengthIsShorterThenIndexForLoop() {
			if ((this.recipes.length-1) <= this.indexLoop) {
				return this.indexLoop = 0;
			} else {
				this.indexLoop++;
			}
		}
	}
};
</script>