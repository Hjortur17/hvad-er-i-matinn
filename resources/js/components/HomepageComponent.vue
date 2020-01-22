<template>
	<div>
		<div class="container max-w-6xl mx-auto px-6 relative">
			<!-- <div class="fixed w-full top-0 left-0 bg-gray-300 h-3" v-if="contentProgress != 0">
				<div class="h-full progressbar bg-purple-500 rounded-r-lg"
					role="progressbar" 
					:style="{width: `${contentProgress}%`}" 
					:aria-valuenow="contentProgress"
					aria-valuemin="0" 
					aria-valuemax="100">
				</div>
			</div> -->

			<div class="flex content-between py-8 flex-wrap h-auto min-h-screen">
				<div class="w-full">
					<navbar></navbar> <!-- @toggle="toggleDarkMode" -->
				</div>

				<div class="w-full">
					<survey></survey>
				</div>

				<div class="w-full">
					<div class="flex flex-col md:flex-row justify-start md:justify-between">
						<small class="text-gray-700 text-xs md:text-sm">Þessi síða var gerð af <a href="https://hjorturfreyr.com" class="hover:text-teal-500 transition" target="_blank" rel="noopener">Hirti Frey</a></small>
						<small class="text-gray-700 text-xs md:text-sm">Ertu með einhvað sem þú vilt koma á framfarir, smelltu  <a href="mailto:hjorturfreyr@hjorturfreyr.com" class="hover:text-teal-500 transition">hér</a></small>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
import navbar from './NavbarComponent';
import survey from './SurveyComponent';

export default {
	components: {
		navbar,
		survey,
	},

	data() {
		return { // 14.3
			progressStart: 0,
			contentProgress: 0
		}
	},

	methods: {
		// toggleDarkMode() {
		// 	if (this.mode === 'dark-mode') {
		// 		this.mode = 'light-mode';
		// 	} else {
		// 		this.mode = 'dark-mode';
		// 	}
		// }

		// increasePercentage() {
		// 	if (this.contentProgress <= 80) {
		// 		this.contentProgress += 14.3;
		// 	}
		// },
		
		// decreasePercentage() {
		// 	if (this.contentProgress >= 14.3) {
		// 		this.contentProgress -= 14.3;
		// 	}
		// }
	}
};
</script>

<style>
.progressbar {
	transition: width 0.25s ease;
}
</style>
