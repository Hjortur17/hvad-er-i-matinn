<template>
	<div>
		<div class="w-full h-auto" v-if="stepCount === 1">
			<div class="flex flex-col">
				<div class="w-full mb-12 px-6 md:px-0">
					<small class="text-gray-600"><span v-text="stepCount"></span> / <span v-text="numberOfSlides"></span></small>
					<h2 class="font-medium text-4xl">Eftir hverju ertu að leita?</h2>
				</div>

				<div class="w-full px-6 md:px-0">
					<div class="flex flex-col md:flex-row -mx-2">
						<div class="flex-1 h-auto mb-8 md:mb-0">
							<div class="flex h-48 items-center">
								<input type="radio" id="Hádeigismat" value="Hádeigismat" class="opacity-0 fixed w-0" v-model="mealsPicked">
								<label for="Hádeigismat" class="selection inline-block flex-1 h-48 hover:shadow-md" :class="(mode === 'dark-mode') ? 'dark-mode-selection' : ''">
									<i class="fad fa-bacon fa-4x pt-8"></i>
									<h4 class="font-bold uppercase pt-4">Hádeigismat</h4>
								</label>
							</div>
						</div>

						<div class="flex-1 h-auto mb-8 md:mb-0">
							<div class="flex h-48 items-center">
								<input type="radio" id="Kvöldmat" value="Kvöldmat" class="opacity-0 fixed w-0" v-model="mealsPicked">
								<label for="Kvöldmat" class="selection inline-block flex-1 h-48 hover:shadow-md" :class="(mode === 'dark-mode') ? 'dark-mode-selection' : ''">
									<i class="fad fa-pizza fa-4x pt-8"></i>
									<h4 class="font-bold uppercase pt-4">Kvöldmat</h4>
								</label>
							</div>
						</div>

						<!-- <div class="flex-1 h-auto mb-8 md:mb-0">
							<div class="flex h-48 items-center">
								<input type="radio" id="Eftirrétt" value="Eftirrétt" class="opacity-0 fixed w-0" v-model="mealsPicked">
								<label for="Eftirrétt" class="selection inline-block flex-1 h-48 hover:shadow-md" :class="(mode === 'dark-mode') ? 'dark-mode-selection' : ''">
									<i class="fad fa-birthday-cake fa-4x pt-8"></i>
									<h4 class="font-bold uppercase pt-4">Eftirrétt</h4>
								</label>
							</div>
						</div> -->
					</div>
				</div>

				<div class="w-full mt-12 px-6 md:px-0">
					<div class="flex justify-end">
						<button class="next-button bg-primary border-primary hover:bg-primary-hover hover:border-primary-hover text-white transition" @click="stepCount++" :disabled="!mealsPicked">
							<div class="flex w-auto">
								<span>
									Áfram
									<i class="fad fa-long-arrow-alt-right pl-2 self-center"></i>
								</span>
							</div>
						</button>
					</div>
				</div>
			</div>
		</div>

		<div class="w-full h-auto" v-if="stepCount === 2">
			<div class="flex flex-col">
				<div class="w-full mb-12 px-6 md:px-0">
					<small class="text-gray-600"><span v-text="stepCount"></span> / <span v-text="numberOfSlides"></span></small>
					<h2 class="font-medium text-4xl">Ertu vegan?</h2>
				</div>

				<div class="w-full px-6 md:px-0">
					<div class="flex flex-col md:flex-row -mx-2">
						<div class="flex-1 h-auto mb-8 md:mb-0">
							<div class="flex h-48 items-center">
								<input type="radio" id="Vegan" value="Vegan" class="opacity-0 fixed w-0" v-model="veganPicked">
								<label for="Vegan" class="selection inline-block flex-1 h-48 hover:shadow-md" :class="(mode === 'dark-mode') ? 'dark-mode-selection' : ''">
									<i class="fad fa-leaf-heart fa-4x pt-8"></i>
									<h4 class="font-bold uppercase pt-4">Vegan</h4>
								</label>
							</div>
						</div>

						<div class="flex-1 h-auto mb-8 md:mb-0">
							<div class="flex h-48 items-center">
								<input type="radio" id="VeganEnBorðaFisk" value="Vegan en borða fisk" class="opacity-0 fixed w-0" v-model="veganPicked">
								<label for="VeganEnBorðaFisk" class="selection inline-block flex-1 h-48 hover:shadow-md" :class="(mode === 'dark-mode') ? 'dark-mode-selection' : ''">
									<i class="fad fa-fish fa-4x pt-8"></i>
									<h4 class="font-bold uppercase pt-4">Vegan en borða fisk</h4>
								</label>
							</div>
						</div>

						<div class="flex-1 h-auto mb-8 md:mb-0">
							<div class="flex h-48 items-center">
								<input type="radio" id="EkkiVegan" value="Ekki vegan" class="opacity-0 fixed w-0" v-model="veganPicked">
								<label for="EkkiVegan" class="selection inline-block flex-1 h-48 hover:shadow-md" :class="(mode === 'dark-mode') ? 'dark-mode-selection' : ''">
									<i class="fad fa-steak fa-4x pt-8"></i>
									<h4 class="font-bold uppercase pt-4">Er ekki vegan</h4>
								</label>
							</div>
						</div>
					</div>
				</div>

				<div class="w-full mt-12 px-6 md:px-0">
					<div class="flex justify-between">
						<button class="border-primary-gray text-primary-gray hover:bg-primary-gray hover:text-primary-gray-light transition" @click="stepCount--">
							<div class="flex w-auto">
								<span>
									<i class="fad fa-long-arrow-alt-left pr-2 self-center"></i>
									Til baka
								</span>
							</div>
						</button>
						<button class="next-button bg-primary border-primary hover:bg-primary-hover hover:border-primary-hover text-white transition" @click="stepCount++" :disabled="!veganPicked">
							<div class="flex w-auto">
								<span>
									Áfram
									<i class="fad fa-long-arrow-alt-right pl-2 self-center"></i>
								</span>
							</div>
						</button>
					</div>
				</div>
			</div>
		</div>

		<div class="w-full h-auto" v-if="stepCount === 3">
			<div class="flex flex-col">
				<div class="w-full mb-12 px-6 md:px-0">
					<small class="text-gray-600"><span v-text="stepCount"></span> / <span v-text="numberOfSlides"></span></small>
					<h2 class="font-medium text-4xl">Frá hvaða landi viltu hafa matinn þinn?</h2>
				</div>

				<div class="w-full px-6 md:px-0">
					<div class="flex flex-col md:flex-row -mx-2">
						<div class="flex-1 h-auto mb-8 md:mb-0">
							<div class="flex h-48 items-center">
								<input type="radio" id="Evrópa" value="Evrópa" class="opacity-0 fixed w-0" v-model="continentsPicked">
								<label for="Evrópa" class="selection inline-block flex-1 h-48 hover:shadow-md" :class="(mode === 'dark-mode') ? 'dark-mode-selection' : ''">
									<i class="fad fa-globe-europe fa-4x pt-8"></i>
									<h4 class="font-bold uppercase pt-4">Evrópa</h4>
								</label>
							</div>
						</div>

						<div class="flex-1 h-auto mb-8 md:mb-0">
							<div class="flex h-48 items-center">
								<input type="radio" id="Asía" value="Asía" class="opacity-0 fixed w-0" v-model="continentsPicked">
								<label for="Asía" class="selection inline-block flex-1 h-48 hover:shadow-md" :class="(mode === 'dark-mode') ? 'dark-mode-selection' : ''">
									<i class="fad fa-globe-asia fa-4x pt-8"></i>
									<h4 class="font-bold uppercase pt-4">Asía</h4>
								</label>
							</div>
						</div>

						<div class="flex-1 h-auto mb-8 md:mb-0">
							<div class="flex h-48 items-center">
								<input type="radio" id="Suður-Ameríka" value="Suður-Ameríka" class="opacity-0 fixed w-0" v-model="continentsPicked">
								<label for="Suður-Ameríka" class="selection inline-block flex-1 h-48 hover:shadow-md" :class="(mode === 'dark-mode') ? 'dark-mode-selection' : ''">
									<i class="fad fa-globe-americas fa-4x pt-8"></i>
									<h4 class="font-bold uppercase pt-4">Suður-Ameríka</h4>
								</label>
							</div>
						</div>

						<!-- <div class="flex-1 h-auto mb-8 md:mb-0">
							<div class="flex h-48 items-center">
								<input type="radio" id="Afríka" value="Afríka" class="opacity-0 fixed w-0" v-model="continentsPicked">
								<label for="Afríka" class="selection inline-block flex-1 h-48 hover:shadow-md" :class="(mode === 'dark-mode') ? 'dark-mode-selection' : ''">
									<i class="fad fa-globe-africa fa-4x pt-8"></i>
									<h4 class="font-bold uppercase pt-4">Afríka</h4>
								</label>
							</div>
						</div> -->
					</div>
				</div>

				<div class="w-full mt-12 px-6 md:px-0">
					<div class="flex justify-between">
						<button class="border-primary-gray text-primary-gray hover:bg-primary-gray hover:text-primary-gray-light transition" @click="stepCount--">
							<div class="flex w-auto">
								<span>
									<i class="fad fa-long-arrow-alt-left pr-2 self-center"></i>
									Til baka
								</span>
							</div>
						</button>
						<button class="next-button bg-primary border-primary hover:bg-primary-hover hover:border-primary-hover text-white transition" @click="stepCount++" :disabled="!continentsPicked">
							<div class="flex w-auto">
								<span>
									Áfram
									<i class="fad fa-long-arrow-alt-right pl-2 self-center"></i>
								</span>
							</div>
						</button>
					</div>
				</div>
			</div>
		</div>

		<div class="w-full h-auto" v-if="stepCount === 4">
			<div class="flex flex-col">
				<div class="w-full mb-12 px-6 md:px-0">
					<small class="text-gray-600"><span v-text="stepCount"></span> / <span v-text="numberOfSlides"></span></small>
					<h2 class="font-medium text-4xl">Í hverju ertu í stuði fyrir?</h2>
				</div>

				<div class="w-full px-6 md:px-0">
					<div class="flex flex-col md:flex-row -mx-2">
						<div class="flex-1 h-auto mb-8 md:mb-0" v-if="veganPicked !== 'Vegan'">
							<div class="flex h-48 items-center">
								<input type="radio" id="Fisk" value="Fisk" class="opacity-0 fixed w-0" v-model="foodPicked">
								<label for="Fisk" class="selection inline-block flex-1 h-48 hover:shadow-md" :class="(mode === 'dark-mode') ? 'dark-mode-selection' : ''">
									<i class="fad fa-fish fa-4x pt-8"></i>
									<h4 class="font-bold uppercase pt-4">Fisk</h4>
								</label>
							</div>
						</div>

						<div class="flex-1 h-auto mb-8 md:mb-0" v-if="veganPicked === 'Ekki vegan'">
							<div class="flex h-48 items-center">
								<input type="radio" id="Kjöt" value="Kjöt" class="opacity-0 fixed w-0" v-model="foodPicked">
								<label for="Kjöt" class="selection inline-block flex-1 h-48 hover:shadow-md" :class="(mode === 'dark-mode') ? 'dark-mode-selection' : ''">
									<i class="fad fa-steak fa-4x pt-8"></i>
									<h4 class="font-bold uppercase pt-4">Kjöt</h4>
								</label>
							</div>
						</div>

						<div class="flex-1 h-auto mb-8 md:mb-0" v-if="veganPicked === 'Ekki vegan'">
							<div class="flex h-48 items-center">
								<input type="radio" id="Kjúkling" value="Kjúkling" class="opacity-0 fixed w-0" v-model="foodPicked">
								<label for="Kjúkling" class="selection inline-block flex-1 h-48 hover:shadow-md" :class="(mode === 'dark-mode') ? 'dark-mode-selection' : ''">
									<i class="fad fa-drumstick fa-4x pt-8"></i>
									<h4 class="font-bold uppercase pt-4">Kjúkling</h4>
								</label>
							</div>
						</div>

						<div class="flex-1 h-auto mb-8 md:mb-0">
							<div class="flex h-48 items-center">
								<input type="radio" id="Súpu" value="Súpu" class="opacity-0 fixed w-0" v-model="foodPicked">
								<label for="Súpu" class="selection inline-block flex-1 h-48 hover:shadow-md" :class="(mode === 'dark-mode') ? 'dark-mode-selection' : ''">
									<i class="fad fa-soup fa-4x pt-8"></i>
									<h4 class="font-bold uppercase pt-4">Súpu</h4>
								</label>
							</div>
						</div>

						<div class="flex-1 h-auto mb-8 md:mb-0">
							<div class="flex h-48 items-center">
								<input type="radio" id="Annað" value="Annað" class="opacity-0 fixed w-0" v-model="foodPicked">
								<label for="Annað" class="selection inline-block flex-1 h-48 hover:shadow-md" :class="(mode === 'dark-mode') ? 'dark-mode-selection' : ''">
									<i class="fad fa-salad fa-4x pt-8"></i>
									<h4 class="font-bold uppercase pt-4">Annað</h4>
								</label>
							</div>
						</div>
					</div>
				</div>

				<div class="w-full mt-12 px-6 md:px-0">
					<div class="flex justify-between">
						<button class="border-primary-gray text-primary-gray hover:bg-primary-gray hover:text-primary-gray-light transition" @click="stepCount--">
							<div class="flex w-auto">
								<span>
									<i class="fad fa-long-arrow-alt-left pr-2 self-center"></i>
									Til baka
								</span>
							</div>
						</button>
						<button class="next-button bg-primary border-primary hover:bg-primary-hover hover:border-primary-hover text-white transition" @click="stepCount++" :disabled="!foodPicked">
							<div class="flex w-auto">
								<span>
									Áfram
									<i class="fad fa-long-arrow-alt-right pl-2 self-center"></i>
								</span>
							</div>
						</button>
					</div>
				</div>
			</div>
		</div>

		<div class="w-full h-auto" v-if="stepCount === 5">
			<div class="flex flex-col">
				<div class="w-full mb-12 px-6 md:px-0">
					<small class="text-gray-600"><span v-text="stepCount"></span> / <span v-text="numberOfSlides"></span></small>
					<h2 class="font-medium text-4xl">Viltu sterkan mat eða ekki?</h2>
				</div>

				<div class="w-full px-6 md:px-0">
					<div class="flex flex-col md:flex-row -mx-2">
						<div class="flex-1 h-auto mb-8 md:mb-0">
							<div class="flex h-48 items-center">
								<input type="radio" id="Sterkt" value="1" class="opacity-0 fixed w-0" v-model="spicyPicked">
								<label for="Sterkt" class="selection inline-block flex-1 h-48 hover:shadow-md" :class="(mode === 'dark-mode') ? 'dark-mode-selection' : ''">
									<i class="fad fa-pepper-hot fa-4x pt-8"></i>
									<h4 class="font-bold uppercase pt-4">Sterkt</h4>
								</label>
							</div>
						</div>

						<div class="flex-1 h-auto mb-8 md:mb-0">
							<div class="flex h-48 items-center">
								<input type="radio" id="EkkiSterkt" value="0" class="opacity-0 fixed w-0" v-model="spicyPicked">
								<label for="EkkiSterkt" class="selection inline-block flex-1 h-48 hover:shadow-md" :class="(mode === 'dark-mode') ? 'dark-mode-selection' : ''">
									<i class="fad fa-leaf fa-4x pt-8"></i>
									<h4 class="font-bold uppercase pt-4">Ekki Sterkt</h4>
								</label>
							</div>
						</div>
					</div>
				</div>

				<div class="w-full mt-12 px-6 md:px-0">
					<div class="flex justify-between">
						<button class="border-primary-gray text-primary-gray hover:bg-primary-gray hover:text-primary-gray-light transition" @click="stepCount--">
							<div class="flex w-auto">
								<span>
									<i class="fad fa-long-arrow-alt-left pr-2 self-center"></i>
									Til baka
								</span>
							</div>
						</button>
						<button class="next-button bg-primary border-primary hover:bg-primary-hover hover:border-primary-hover text-white transition" @click="stepCount++" :disabled="!spicyPicked">
							<div class="flex w-auto">
								<span>
									Áfram
									<i class="fad fa-long-arrow-alt-right pl-2 self-center"></i>
								</span>
							</div>
						</button>
					</div>
				</div>
			</div>
		</div>

		<div class="w-full h-auto" v-if="stepCount === 6">
			<div class="flex flex-col">
				<div class="w-full mb-12 px-6 md:px-0">
					<small class="text-gray-600"><span v-text="stepCount"></span> / <span v-text="numberOfSlides"></span></small>
					<h2 class="font-medium text-4xl">Er þetta rétt?</h2>
				</div>

				<div class="w-full px-6 md:px-0">
					<table class="text-left w-full border-collapse">
						<thead>
							<tr class="flex">
								<th class="w-6/12 py-2 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-primary-gray">Spurning</th>
								<th class="flex-1 py-2 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-primary-gray">Þú valdir</th>
							</tr>
						</thead>
						<tbody>
							<tr class="flex">
								<td class="w-6/12 py-4 border-b border-primary-gray"><a @click="stepCount = 1" class="hover:text-primary transition cursor-pointer">Eftir hverju ertu að leita?</a></td>
								<td class="flex-1 py-4 border-b border-primary-gray"><span v-text="mealsPicked"></span></td>
							</tr>
							<tr class="flex">
								<td class="w-6/12 py-4 border-b border-primary-gray"><a @click="stepCount = 2" class="hover:text-primary transition cursor-pointer">Ertu vegan?</a></td>
								<td class="flex-1 py-4 border-b border-primary-gray"><span v-text="veganPicked"></span></td>
							</tr>
							<tr class="flex">
								<td class="w-6/12 py-4 border-b border-primary-gray"><a @click="stepCount = 3" class="hover:text-primary transition cursor-pointer">Frá hvaða landi viltu hafa matinn þinn?</a></td>
								<td class="flex-1 py-4 border-b border-primary-gray"><span v-text="continentsPicked"></span></td>
							</tr>
							<tr class="flex">
								<td class="w-6/12 py-4 border-b border-primary-gray"><a @click="stepCount = 4" class="hover:text-primary transition cursor-pointer">Í hverju ertu í stuði fyrir?</a></td>
								<td class="flex-1 py-4 border-b border-primary-gray"><span v-text="foodPicked"></span></td>
							</tr>
							<tr class="flex">
								<td class="w-6/12 py-4 border-b border-primary-gray"><a @click="stepCount = 5" class="hover:text-primary transition cursor-pointer">Viltu sterkan mat eða ekki?</a></td>
								<td class="flex-1 py-4 border-b border-primary-gray" v-if="spicyPicked === '1'">Já</td>
								<td class="flex-1 py-4 border-b border-primary-gray" v-else>Nei</td>
							</tr>
						</tbody>
					</table>
				</div>

				<div class="w-full mt-12 px-6 md:px-0">
					<div class="flex justify-between">
						<button class="border-primary-gray text-primary-gray hover:bg-primary-gray hover:text-primary-gray-light transition" @click="stepCount--">
							<div class="flex w-auto">
								<span>
									<i class="fad fa-long-arrow-alt-left pr-2 self-center"></i>
									Til baka
								</span>
							</div>
						</button>
						<button class="next-button bg-primary border-primary hover:bg-primary-hover hover:border-primary-hover text-white transition" @click.once="submitForm(); stepCount++;">
							<div class="flex w-auto">
								<span>
									Áfram
									<i class="fad fa-long-arrow-alt-right pl-2 self-center"></i>
								</span>
							</div>
						</button>
					</div>
				</div>
			</div>
		</div>

		<div class="w-full h-auto" v-if="stepCount === 7">
			<div class="flex flex-col">
				<div class="w-full mb-12 px-6 md:px-0">
					<div class="flex">
						<div class="flex-1">
							<button class="border-primary-gray text-primary-gray hover:bg-primary-gray hover:text-primary-gray-light transition" @click="stepCount--">
								<div class="flex w-auto">
									<span>
										<i class="fad fa-long-arrow-alt-left pr-2 self-center"></i>
										Til baka
									</span>
								</div>
							</button>
						</div>
						<div class="flex-1 self-center" v-if="recipes.length > 1">
							<a class="self-center text-sm text-primary-gray hover:text-primary transition cursor-pointer flex float-right" @click="checkingIfArrayLengthIsShorterThenIndexForLoop">
								Sækja nýja uppskrift
								<i class="fas fa-sync-alt pl-2 self-center"></i>
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
					<div class="flex">
						<div class="w-9/12 z-10 self-center">
							<img src="/images/duck.jpg" width="100%">
						</div>
						<div class="w-full z-20 p-6 bg-white shadow-lg">
							<h2 class="font-medium text-2xl leading-tight" v-text="recipes[indexLoop].title"></h2>
							<p class="text-sm my-4" v-text="recipes[indexLoop].paragraph"></p>

							<div class="flex">
								<div class="w-1/3">
									<table class="text-left w-full border-collapse -my-2">
										<tbody>
											<tr class="flex">
												<td class="py-2 border-b border-primary-gray w-full" :class="!recipes[indexLoop].ingredient1 ? 'invisible' : ''">
													<p class="text-sm" v-text="recipes[indexLoop].ingredient1"></p>
												</td>
											</tr>

											<tr class="flex">
												<td class="py-2 border-b border-primary-gray w-full" :class="!recipes[indexLoop].ingredient2 ? 'invisible' : ''">
													<p class="text-sm" v-text="recipes[indexLoop].ingredient2"></p>
												</td>
											</tr>

											<tr class="flex">
												<td class="py-2 border-b border-primary-gray w-full" :class="!recipes[indexLoop].ingredient3 ? 'invisible' : ''">
													<p class="text-sm" v-text="recipes[indexLoop].ingredient3"></p>
												</td>
											</tr>

											<tr class="flex">
												<td class="py-2 border-b border-primary-gray w-full" :class="!recipes[indexLoop].ingredient4 ? 'invisible' : ''">
													<p class="text-sm" v-text="recipes[indexLoop].ingredient4"></p>
												</td>
											</tr>

											<tr class="flex">
												<td class="py-2 border-b border-primary-gray w-full" :class="!recipes[indexLoop].ingredient5 ? 'invisible' : ''">
													<p class="text-sm" v-text="recipes[indexLoop].ingredient5"></p>
												</td>
											</tr>

											<tr class="flex">
												<td class="py-2 border-b border-primary-gray w-full" :class="!recipes[indexLoop].ingredient6 ? 'invisible' : ''">
													<p class="text-sm" v-text="recipes[indexLoop].ingredient6"></p>
												</td>
											</tr>

											<tr class="flex">
												<td class="py-2 border-b border-primary-gray w-full" :class="!recipes[indexLoop].ingredient7 ? 'invisible' : ''">
													<p class="text-sm" v-text="recipes[indexLoop].ingredient7"></p>
												</td>
											</tr>

											<tr class="flex">
												<td class="py-2 border-b border-primary-gray w-full" :class="!recipes[indexLoop].ingredient8 ? 'invisible' : ''">
													<p class="text-sm" v-text="recipes[indexLoop].ingredient8"></p>
												</td>
											</tr>

											<tr class="flex">
												<td class="py-2 border-b border-primary-gray w-full" :class="!recipes[indexLoop].ingredient9 ? 'invisible' : ''">
													<p class="text-sm" v-text="recipes[indexLoop].ingredient9"></p>
												</td>
											</tr>

											<tr class="flex">
												<td class="py-2 border-b border-primary-gray w-full" :class="!recipes[indexLoop].ingredient10 ? 'invisible' : ''">
													<p class="text-sm" v-text="recipes[indexLoop].ingredient10"></p>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="flex-1 px-3">
									<ul>
										<li class="mb-4">
											<p class="text-sm" v-text="recipes[indexLoop].instructions1"></p>
										</li>
										<li class="mb-4">
											<p class="text-sm" v-text="recipes[indexLoop].instructions2"></p>
										</li>
										<li class="mb-4">
											<p class="text-sm" v-text="recipes[indexLoop].instructions3"></p>
										</li>
										<li class="mb-4">
											<p class="text-sm" v-text="recipes[indexLoop].instructions4"></p>
										</li>
										<li class="mb-4">
											<p class="text-sm" v-text="recipes[indexLoop].instructions5"></p>
										</li>
										<li class="mb-4">
											<p class="text-sm" v-text="recipes[indexLoop].instructions6"></p>
										</li>
										<li class="mb-4">
											<p class="text-sm" v-text="recipes[indexLoop].instructions7"></p>
										</li>
										<li class="mb-4">
											<p class="text-sm" v-text="recipes[indexLoop].instructions8"></p>
										</li>
										<li class="mb-4">
											<p class="text-sm" v-text="recipes[indexLoop].instructions9"></p>
										</li>
										<li class="mb-4">
											<p class="text-sm" v-text="recipes[indexLoop].instructions10"></p>
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
</template>

<script>
export default {
	props: ['mode'],

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
			recipes: '',
			indexLoop: 0
		}
	},

	methods: {
		submitForm () {
			axios.get('/uppskriftir/sækja', {
				params: {
					maltid: this.mealsPicked,
					vegan: this.veganPicked,
					heimsalfa: this.continentsPicked,
					kjot: this.foodPicked,
					spicy: this.spicyPicked
				}
			})
			.then(response => {
				this.recipes = response.data.recipes;
			})
			.catch(function (error) {
				console.log(error);
			});
		},

		checkingIfArrayLengthIsShorterThenIndexForLoop() {
			if ((this.recipes.length-1) <= this.indexLoop) {
				return this.indexLoop = 0;
			} else {
				this.indexLoop++;
			}
		}
	},

	computed: {
	}
};
</script>

<style>
.next-button:disabled {
	background: transparent;
	color: #9E9E9E;
	border-color: #9E9E9E
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