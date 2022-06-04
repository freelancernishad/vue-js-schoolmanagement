<template>
</template>

<script>
export default {

	created(){
		localStorage.removeItem('token')
		localStorage.removeItem('user')

		Toast.fire({
			icon: 'success',
			title: 'Logout in successfully'
		})

		// this.$router.push({name: '/login'})
            window.location.href ="/login";
	}
}
</script>

<style lang="css" scoped>
</style>
