<template>
    <div class="flex flex-col">
        <template v-for="task in tasks" >
            <div class="flex flex-row justify-between bg-yellow-100 rounded-lg p-4 mb-4 text-sm text-yellow-700 shadow hover:shadow-lg cursor-pointer" role="alert">
                <div>
                    <h2 class="text-xl font-bold">{{ task.title }}</h2>
                    <p>{{ task.description }}</p>
                </div>

                <div class="flex flex-row gap-x-2 items-center justify-end">
                    <a href="#" class="underline">Update</a>
                    <a href="#" class="underline">Delete</a>
                </div>
            </div>
        </template>
    </div>
</template>

<script>
import _ from "lodash";

export default {
    name: "TaskList",
    data() {
        return {
            tasks: []
        }
    },
    methods: {
        getTasks() {
            axios.get('/tasks')
                .then(response => {
                    this.tasks = response.data.data;
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
        }
    },
    mounted() {
        this.getTasks();
    }
}
</script>

<style scoped>

</style>
