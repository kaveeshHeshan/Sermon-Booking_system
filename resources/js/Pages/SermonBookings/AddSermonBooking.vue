<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, useForm } from '@inertiajs/vue3';

const form = useForm({
    description: '',
    sermon_day_id: '',
});

defineProps({
    poya_days: Array,
    poya_days_count: Number, 
});

const submit = () => {
    form.post(route('sermonBooking.store'), {
        onFinish: () => form.reset(),
    });
};


</script>

<style>
    input:checked + label{
        border-color: #4f46e5;
        box-shadow: 0 10px 20px -3px rgba(0, 0, 0, 0.1);
        background-color: #4f46e5;
        color: #fff;
    }
</style>

<template>
    <Head title="Sermon Booking" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Sermon Booking Process</h2>
        </template>

        <div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8 flex items-center justify-center text-center">
            <div class="w-screen bg-white overflow-hidden shadow-sm sm:rounded-lg p-12 w-full">
                
                <!--  -->

                <form @submit.prevent="submit">
                    <div class="space-y-12">
                        <div class="border-b border-gray-900/10 pb-12">
                            <h2 class="text-base font-semibold leading-7 text-gray-900">Sermon Booking Information</h2>
                            <p class="mt-1 text-sm leading-6 text-gray-600"></p>
                            <hr>

                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                                <div class="sm:col-span-6">

                                    <InputLabel for="sermon-booking-dates" class="block text-sm font-medium leading-6 text-gray-900" value="Poya Days" />
                                    <InputError class="mt-2" :message="form.errors.sermon_day_id" />

                                        <div class="" v-if="poya_days_count > 0">
                                            <div class="mx-auto max-w-2xl px-4 sm:px-6 sm:py-6 lg:max-w-7xl lg:px-8">
                                                <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                                                    <div v-for="poya_day in poya_days" class="group relative">
                                                        <div class="flex justify-between">
                                                            <div>
                                                                <div class="mx-2">
                                                                    <input type="radio" class="hidden" :id=poya_day.id name="sermon_day_id" v-model="form.sermon_day_id" :value=poya_day.id>
                                                                    <label :for=poya_day.id class="flex flex-col h-12 w-64 border-indigo-500 border-2 cursor-pointer rounded-full justify-center items-center">
                                                                        <span class="text-xs font-bold uppercase">
                                                                            <p>{{poya_day.date}}</p>
                                                                            <p>{{poya_day.title}}</p>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <!-- <p class="text-sm font-medium text-gray-900">$35</p> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="" v-else>
                                            <p>No Dates</p>
                                        </div>
                                </div>

                                <div class="sm:col-span-6">

                                    <InputLabel for="sermon-booking-description" class="block text-sm font-medium leading-6 text-gray-900" value="Description" />

                                    <textarea
                                        id="sermon-booking-description"
                                        type=""
                                        class="mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                        v-model="form.description"
                                        autofocus
                                        autocomplete="sermon-booking-description"
                                    />

                                    <InputError class="mt-2" :message="form.errors.description" />

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 flex items-center justify-end gap-x-6">
                        <button type="reset" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                    </div>
                </form>



                <!--  -->
            </div>
        </div>
        <br>
        <br>
    </AuthenticatedLayout>
</template>
