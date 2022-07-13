<template>
    <div>
        <div>
            <button @click="openModal()" type="button" class="py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-orange-500 hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Create task
            </button>
        </div>

        <br>

        <task-list/>

        <transition>
            <div v-if="isOpenModal" class="w-screen h-screen fixed top-0 left-0 bg-black bg-opacity-50 z-10  flex items-center justify-center">
                <div class="bg-white rounded-2xl quote-modal p-5" style="width: 600px">
                    <div class="flex justify-between border-b border-gray-100 px-5 py-4">
                        <div>
                            <i class="fas fa-exclamation-circle text-blue-500"></i>
                            <span class="font-bold text-gray-700 text-lg">Add Task</span>
                        </div>

                    </div>

                    <div class="px-10 py-5 text-gray-600">
                        <div>
                            <div class="py-2">
                                <span class="px-1 text-sm text-gray-600">Title</span>
                                <input v-model="title" placeholder="" type="text"
                                       class="text-md block px-3 py-2  rounded-lg w-full
                bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">
                            </div>
                            <div class="py-2">
                                <span class="px-1 text-sm text-gray-600">Description</span>
                                <textarea v-model="description" name="description" id="description" rows="3" class="text-md block px-3 py-2  rounded-lg w-full
                bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="px-5 py-4 flex justify-between">
                        <button @click="closeModal()" class="text-sm py-2 px-3 text-gray-500 hover:text-gray-600 transition duration-150">Close</button>
                        <button @click="closeModal()" class="py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-green-500 hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
                    </div>
                </div>
            </div>
        </transition>
    </div>
</template>

<script>
import TaskList from "./TaskList";
import {store} from "../state";

export default {
    name: "Task",
    components: {
        TaskList
    },
    data() {
        return {
            isOpenModal: false,
            title: null,
            description: null,
        }
    },
    methods: {
        openModal() {
            this.isOpenModal = true;
        },
        closeModal() {
            this.isOpenModal = false;
        }
    }
}
</script>

<style scoped>

</style>
