<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, useForm } from '@inertiajs/vue3';

const form = useForm({
    description: '',
});

const submit = () => {
    form.post(route('sermonBooking.store'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};


</script>

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

                                    <InputLabel for="sermon-booking-dates" class="block text-sm font-medium leading-6 text-gray-900" value="Description" />

                                    <textarea
                                        id="sermon-day-description"
                                        type=""
                                        class="mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                        v-model="form.description"
                                        autofocus
                                        autocomplete="sermon-day-description"
                                    />

                                    <InputError class="mt-2" :message="form.errors.description" />

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
