<template>
	<section>
		<div v-if="!loading">
			<div class="w-full h-auto">
				<div class="flex flex-col">
					<div class="w-full mb-12 px-6 md:px-0">
						<div class="flex">
							<div class="flex-1">
								<button class="border-primary-gray text-primary-gray hover:bg-primary-gray hover:text-primary-gray-light transition outline-none focus:outline-none" @click="$emit('stepback')">
									<div class="flex w-auto">
										<span class="text-xs md:text-sm">
											<i class="fad fa-long-arrow-alt-left pr-2 self-center"></i>
											Til baka
										</span>
									</div>
								</button>
							</div>
							<div class="flex-1 self-center" v-if="recipes.length > 1">
								<a class="self-center text-xs md:text-sm text-primary-gray hover:text-primary transition cursor-pointer flex float-right" @click="checkingIfArrayLengthIsShorterThenIndexForLoop">
									<span class="pr-2 md:pr-4">Sækja nýja uppskrift</span>
									<i class="fas fa-sync-alt self-center"></i>
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="w-full px-6 md:px-0">
					<div v-if="!recipes.length">
						Engar uppskriftir fundust
					</div>
					<div v-else>
						<div class="flex flex-col md:flex-row">
							<div class="md:w-7/12 z-0 md:z-10 self-center">
								<img :src="'/images/' + recipes[indexLoop].link_to_image" width="100%">
							</div>
							<div class="w-full z-0 md:z-20 p-6 bg-white shadow-lg">
								<h2 class="font-bold text-3xl leading-tight mb-8" v-text="recipes[indexLoop].title"></h2>
								<p class="text-sm my-4" v-text="recipes[indexLoop].paragraph"></p>

								<div class="flex flex-col md:flex-row">
									<div class="w-full md:w-1/3">
										<table class="text-left w-full border-collapse -my-2">
											<tbody>
												<div v-for="ingredient in recipes[indexLoop].ingredients">
													<h4 class="uppercase font-medium text-base" v-text="ingredient.firstTitle" v-if="ingredient.firstTitle"></h4>
													<tr class="flex" v-for="(value, index) in ingredient" v-if="index < 19">
														<td class="py-2 border-b border-primary-gray w-full" v-if="value">
															<p class="text-sm capitalize" v-text="value"></p>
														</td>
													</tr>

													<h4 class="uppercase font-medium text-base mt-8" v-text="ingredient.secondTitle" v-if="ingredient.secondTitle"></h4>
													<tr class="flex" v-for="(value, index) in ingredient" v-if="index >= 20 && index < 30">
														<td class="py-2 border-b border-primary-gray w-full" v-if="value">
															<p class="text-sm capitalize" v-text="value"></p>
														</td>
													</tr>

													<h4 class="uppercase font-medium text-base mt-8" v-text="ingredient.thirdTitle" v-if="ingredient.thirdTitle"></h4>
													<tr class="flex" v-for="(value, index) in ingredient" v-if="index >= 30">
														<td class="py-2 border-b border-primary-gray w-full" v-if="value">
															<p class="text-sm capitalize" v-text="value"></p>
														</td>
													</tr>
												</div>
											</tbody>
										</table>
									</div>
									<div class="w-full md:flex-1 px-0 md:px-3">
										<h4 class="uppercase text-sm font-bold mt-8 mb-6 md:mt-0 md:mb-0 visible md:invisible">Aðferð</h4>

										<div v-for="instruction in recipes[indexLoop].instructions" class="-mt-0 md:-mt-6">
											<ul>
												<li v-for="(value, index, key) in instruction" v-if="key == index">
													<p class="text-sm leading-relaxed capitalize mb-4">{{ value }}</p>
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
		</div>
		<div id="overlay" v-else>
			<div class="h-screen flex items-center justify-center">
				<div class="bg-white h-48 shadow p-6 w-2/6 text-center rounded-lg">
					<h2 class="text-4xl">Augnablik</h2>
					<p class="text-lg mb-8">Við erum að sækja uppskriftir handa þér</p>

					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" id="loading-symbol" width="30px" class="mx-auto"><path d="M460.115 373.846l-6.941-4.008c-5.546-3.202-7.564-10.177-4.661-15.886 32.971-64.838 31.167-142.731-5.415-205.954-36.504-63.356-103.118-103.876-175.8-107.701C260.952 39.963 256 34.676 256 28.321v-8.012c0-6.904 5.808-12.337 12.703-11.982 83.552 4.306 160.157 50.861 202.106 123.67 42.069 72.703 44.083 162.322 6.034 236.838-3.14 6.149-10.75 8.462-16.728 5.011z"/></svg>
				</div>
			</div>
		</div>
	</section>
</template>

<script>
export default {
	props: ['recipes', 'loading', 'stepCount'],

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