<template>
</template>

<script>
export default {

	created(){
		localStorage.removeItem('token')
		localStorage.removeItem('user')

        Notification.customsucess('Logout in successfully')

		// this.$router.push({name: '/login'})
            window.location.href ="/login";
	}
}
</script>

<style lang="css" scoped>
</style>
