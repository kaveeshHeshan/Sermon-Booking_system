<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

const props = defineProps({
    bookingId: String,
});

const form = useForm({
    slipImage: null,
});

// const submit = () => {
//     form.post(route('sermonBooking.paySlip.store', ), {
//         onFinish: () => form.reset(),
//     });
// };

const imagePreview = (event) => {

    var output = document.getElementById('payment_slip_preview');
    // form.slipImage = event.target.files[0];
    output.src=URL.createObjectURL(event.target.files[0]);
};

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

                <form @submit.prevent="form.post(route('sermonBooking.paySlip.store', bookingId))" enctype="multipart/form-data">
                    <div class="space-y-12">
                        <div class="flex items-center justify-start gap-x-6">
                            <Link :href="route('dashboard')" class="rounded-md bg-indigo-600 px-6 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Back</Link>
                        </div>
                        <div class="border-b border-gray-900/10 pb-12">
                            <h2 class="text-base font-semibold leading-7 text-gray-900">Bank Slip Information</h2>
                            <p class="mt-1 text-sm leading-6 text-gray-600"></p>
                            <hr>
                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                                <div class="sm:col-span-6">
                                    <div class="shrink-0 w-full border-2 border-gray-400 border-dashed rounded-md px-12 py-6">
                                        <img id="payment_slip_preview" class="h-96 w-full rounded-md" src="https://www.century21albania.com/vendor/core/images/default-image.jpg" alt="Current profile photo" />
                                    </div>
                                    <div class="">
                                        <label class="block flex items-center justify-center text-center">
                                            <span class="sr-only">Choose profile photo</span>
                                            <TextInput type="file" v-on:change="imagePreview" v-on:input="form.slipImage = $event.target.files[0]" class="block w-full text-sm text-slate-500 mt-6
                                            file:mr-4 file:py-2 file:px-4
                                            file:rounded-full file:border-0
                                            file:text-sm file:font-semibold
                                            file:bg-violet-50 file:text-violet-700
                                            hover:file:bg-violet-100
                                            "/>
                                        </label>
                                        <InputError class="mt-2" :message="form.errors.slipImage" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 flex items-center justify-center gap-x-6">
                        <button type="submit" class="rounded-md bg-indigo-600 px-6 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                        <button type="reset" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                    </div>
                </form>



                <!--  -->
            </div>
        </div>
        <br>
        <br>
    </AuthenticatedLayout>
</template>
