<template>
	<div :class="mode">
		<div class="container max-w-4xl mx-auto">
			<navbar :mode="mode" @toggle="toggleDarkMode"></navbar>

			<survey :mode="mode"></survey>

			<div class="text-center">
				<small class="text-primary-gray">Þessi síða var gerð af <a href="https://hjorturfreyr.com" class="hover:text-primary transition" target="_blank">Hirti Frey</a></small>
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