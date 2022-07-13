<template>
    <div class="flex flex-col">
        <template v-for="i in 5" >
            <div class="flex flex-row justify-between bg-yellow-100 rounded-lg p-4 mb-4 text-sm text-yellow-700 shadow hover:shadow-lg cursor-pointer" role="alert">
                <div>
                    <h2 class="text-xl font-bold">Coding laravel auth</h2>
                    <p>Change a few things up and try submitting again.</p>
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
export default {
    name: "TaskList"
}
</script>

<style scoped>

</style>
