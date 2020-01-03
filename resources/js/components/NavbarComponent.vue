<template>
	<div class="absolute top-0 right-0 pt-20 pr-40">
		<div v-if="mode === 'dark-mode'">
			<a @click="$emit('toggle')" class="cursor-pointer" title="Dark mode">
				<i class="fad fa-moon fa-lg"></i>
			</a>
		</div>
		<div v-else>
			<a @click="$emit('toggle')" class="cursor-pointer" title="Dark mode">
				<i class="fad fa-sun fa-lg"></i>
			</a>
		</div>
	</div>
</template>

<script>
export default {
	props: ['mode'],
};
</script>

<style>

</style>
