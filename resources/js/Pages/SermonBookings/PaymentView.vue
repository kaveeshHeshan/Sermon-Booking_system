<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

defineProps({
    payment_detail: Object,
});

</script>

<template>
    <Head title="Sermon Booking" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Payment Slip Upload Process</h2>
        </template>

        <div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8 flex items-center justify-center text-center">
            <div class="w-screen bg-white overflow-hidden shadow-sm sm:rounded-lg p-12 w-full">
                
                <!--  -->
                <div class="space-y-12">
                    <div class="flex items-center justify-start gap-x-6">
                        <Link :href="route('dashboard')" class="rounded-md bg-indigo-600 px-6 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Back</Link>
                    </div>
                    <div class="border-b border-gray-900/10 pb-12">
                        <h2 class="text-base font-semibold leading-7 text-gray-900">Bank Slip Preview</h2>
                        <p class="mt-1 text-sm leading-6 text-gray-600"></p>
                        <hr>
                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                            <div class="sm:col-span-6">
                                <div class="shrink-0 w-full border-2 border-gray-400 border-dashed rounded-md px-12 py-6">
                                    <img id="payment_slip_preview" class="h-96 w-full rounded-md" :src="payment_detail.imageURL" alt="Current profile photo" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--  -->
            </div>
        </div>
        <br>
        <br>
    </AuthenticatedLayout>
</template>
