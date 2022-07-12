<template>
    <div class="flex bg-red-100 rounded-lg p-4 mb-4 text-sm text-red-700" role="alert">
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
