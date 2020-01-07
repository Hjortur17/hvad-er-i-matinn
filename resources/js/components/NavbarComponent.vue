<template>
	<h1 class="font-bold text-3xl tracking-tighter text-primary px-6 md:px-0"><a href="/">hvað er í matinn?</a></h1>
	<!-- <div v-if="mode === 'dark-mode'" class="pt-20">
		<a @click="$emit('toggle')" class="cursor-pointer" title="Dark mode">
			<i class="fad fa-moon fa-lg"></i>
		</a>
	</div>
	<div v-else class="pt-20">
		<a @click="$emit('toggle')" class="cursor-pointer" title="Dark mode">
			<i class="fad fa-sun fa-lg"></i>
		</a>
	</div> -->
</template>

<script>
export default {
	props: ['mode'],
};
</script>
