<template>
	<div :class="mode">
		<div class="container max-w-5xl mx-auto">
			<div class="flex content-around flex-wrap h-screen">
				<div class="w-full">
					<navbar :mode="mode" @toggle="toggleDarkMode"></navbar>
				</div>

				<div class="w-full">
					<survey :mode="mode"></survey>
				</div>

				<div class="w-full text-left">
					<small class="text-primary-gray">Þessi síða var gerð af <a href="https://hjorturfreyr.com" class="hover:text-primary transition" target="_blank" rel="noopener">Hirti Frey</a></small>
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
		return {
			mode: 'light-mode'
		}
	},

	methods: {
		toggleDarkMode() {
			if (this.mode === 'dark-mode') {
				this.mode = 'light-mode';
			} else {
				this.mode = 'dark-mode';
			}
		},
	}
};
</script>