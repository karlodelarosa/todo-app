<template>
    <form @submit="signIn()" class="mt-8 space-y-6" action="/login" method="POST">
        <error-alert v-if="!isEmptyErrors()">
            <li v-for="(value, key) in errors">
                {{ value }}
            </li>
        </error-alert>
        <input type="hidden" name="_token" :value="csrf">
        <input type="hidden" name="remember" value="true">
        <div class="rounded-md shadow-sm -space-y-px">
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
                Login
            </button>
            <br>
            <a href="/sign-up" class="underline">Create Account</a>
        </div>
    </form>
</template>

<script>
import _ from "lodash";
import ErrorAlert from "../atoms/ErrorAlert";

export default {
    name: "SignIn",
    components: {
        ErrorAlert,
    },
    data() {
        return {
            email: null,
            password: null,
            errors: [],
            csrf: document.querySelector('meta[name="csrf-token"]').content
        }
    },
    methods: {
        signIn() {
            const params = {
                email: this.email,
                password: this.password,
            }

            axios.post('/login', params)
                .then(response => {
                    console.log('im in then', response.data);
                })
                .catch (err => {
                    console.info('catch', err);
                    this.errors = [];
                    let vm = this;
                    _.map(Object.entries(err.response.data.errors), function (n, index) {
                        console.info(n)
                        vm.errors.push(n[1][0])
                    })
                    console.log(this.errors)

                });
        },
        isEmptyErrors() {
            return this.errors.length <= 0;
        },
    }
}
</script>

<style scoped>

</style>
