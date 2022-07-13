<template>
    <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-5 text-xs" role="alert">
        <ul class="list-disc pl-4">
            <slot></slot>
        </ul>
    </div>
</template>

<script>
export default {
    name: "ErrorAlert"
}
</script>

<style scoped>

</style>
