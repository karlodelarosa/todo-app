<template>
    <form @submit.prevent="signUp()" class="mt-8 space-y-6" method="POST">
        <input type="hidden" name="remember" value="true">
        <div class="rounded-md shadow-sm -space-y-px">
            <div>
                <label for="full_name" class="sr-only">Name</label>
                <input v-model="name" id="full_name" name="full_name" type="text" required class="appearance-none rounded-none relative block w-full px-3 py-3 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-orange-500 focus:border-orange-500 focus:z-10 sm:text-sm" placeholder="Name">
            </div>
            <div>
                <label for="email" class="sr-only">Email address</label>
                <input v-model="email" id="email" name="email" type="email" autocomplete="email" required class="appearance-none rounded-none relative block w-full px-3 py-3 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-orange-500 focus:border-orange-500 focus:z-10 sm:text-sm" placeholder="Email address">
            </div>
            <div>
                <label for="password" class="sr-only">Password</label>
                <input v-model="password" id="password" name="password" type="password" autocomplete="current-password" required class="appearance-none rounded-none relative block w-full px-3 py-3 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-orange-500 focus:border-orange-500 focus:z-10 sm:text-sm" placeholder="Password">
            </div>
        </div>


        <div>
            <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-orange-500 hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Create Account
            </button>
        </div>
    </form>
</template>

<script>
export default {
    name: "SignUp",
    data() {
        return {
            name: null,
            email: null,
            password: null,
        }
    },
    methods: {
        signUp() {
            const params = {
                name: this.name,
                email: this.email,
                password: this.password
            }

            axios.post('/create-account', params)
                .then(response => {
                    console.log(response.data);
                })
                .catch (err => {
                    console.error(err);
                });
        }
    }
}
</script>

<style scoped>

</style>
