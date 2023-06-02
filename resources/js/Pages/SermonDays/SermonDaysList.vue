<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    sermonDays: Array,
    daysCount: Number,
});

</script>

<template>
    <Head title="Sermon Days" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Sermon Days</h2>
        </template>

        <div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8 flex items-center justify-center text-center">
            <div class="w-screen bg-white overflow-hidden shadow-sm sm:rounded-lg p-12 w-full">
                <div v-if="daysCount === 0" class="">
                    <div class="border border-gray-400 border-dashed p-12 rounded">
                        <i class='bx bx-plus text-[40px] text-gray-600'></i>
                        <p class="text-gray-600">Add New Sermon Days</p>
                        <br>
                        <Link :href="route('sermonDays.create')" class="bg-[#a855f7] rounded px-6 py-3 text-white">Add Sermon Days</Link>
                        <br>
                        <br>
                    </div>
                </div>
                <div v-else class="">
                    <div class="items-right justify-right text-right">
                        <div class="">
                            <Link
                                :href="route('sermonDays.create')"
                                class="bg-[#a855f7] rounded px-6 py-3 text-white"
                                >
                                <i class='bx bx-plus-circle'></i> Add Sermon Days
                            </Link>
                        </div>
                    </div>
                    <br>
                    <div class="">
                        <div class="">
                            <div class=""></div>
                        </div>
                        <hr>
                        <br>
                        <div class=""> 
                            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                                <table class="w-full text-sm text-left">
                                    <thead class="text-xs text-dark uppercase bg-white border-b border-gray-400">
                                        <tr>
                                            <th scope="col" class="px-6 py-3">
                                                Name
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Description
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Date
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Type
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                <!-- Action Button Group -->
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="sermonDay in sermonDays" class="bg-white">
                                            <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                                                {{ sermonDay.title }}
                                            </th>
                                            <td class="px-6 py-4">
                                                {{ sermonDay.description }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ sermonDay.date }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ sermonDay.type }}
                                            </td>
                                            <td class="px-6 py-4">
                                                <Link
                                                    :href="route('sermonDays.edit', sermonDay.id)"
                                                    class="bg-[#facc15] rounded px-3 py-2 text-white"
                                                    >
                                                    <i class='bx bxs-edit'></i>
                                                </Link>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </AuthenticatedLayout>
</template>
