<template>
	<div>
		<div class="container max-w-6xl mx-auto px-6">
			<div class="flex md:content-between py-8 flex-wrap h-screen">
				<div class="w-full md:mb-0">
					<navbar></navbar> <!-- @toggle="toggleDarkMode" -->
				</div>

				<div class="w-full">
					<survey></survey>
				</div>

				<div class="w-full">
					<div class="flex flex-col md:flex-row justify-start md:justify-between">
						<small class="text-gray-700 pt-12 pb-6 md:pt-0 md:pb-0">Þessi síða var gerð af <a href="https://hjorturfreyr.com" class="hover:text-teal-500 transition" target="_blank" rel="noopener">Hirti Frey</a></small>
						<small class="text-gray-700 pt-12 pb-6 md:pt-0 md:pb-0">Ertu með einhvað sem þú vilt koma á framfarir, smelltu  <a href="mailto:hjorturfreyr@hjorturfreyr.com" class="hover:text-teal-500 transition">hér</a></small>
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

	// methods: {
	// 	toggleDarkMode() {
	// 		if (this.mode === 'dark-mode') {
	// 			this.mode = 'light-mode';
	// 		} else {
	// 			this.mode = 'dark-mode';
	// 		}
	// 	},
	// }
};
</script>