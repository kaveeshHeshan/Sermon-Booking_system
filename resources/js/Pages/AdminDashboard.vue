<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    user_bookings: Array,
    user_bookings_count: Number,
});

</script>

<template>
    <Head title="Admin Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Admin Dashboard</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">You're logged in!</div>
                </div>
            </div>
        </div>

        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex items-center justify-center text-center">
            <div class="w-screen bg-white overflow-hidden shadow-sm sm:rounded-lg p-12 w-full">
                <div class="">
                    <Link
                    :href="route('sermonDays.index')"
                    class="bg-[#a855f7] rounded px-6 py-3 text-white"
                    >
                       Add Sermon Days
                    </Link>
                </div>
                <br>
                <!-- If requests are not there -->
                <div v-if="user_bookings_count > 0" class="">
                    <ul role="list" class="divide-y divide-gray-100">
                        <li class="flex justify-between gap-x-6 py-5">
                            <div class="flex gap-x-4">
                                <div class="min-w-0 flex-auto">
                                    <p class="text-sm font-semibold leading-6 text-gray-900 font-bold">User Details</p>
                                </div>
                            </div>
                            <div class="hidden sm:flex sm:flex-col sm:items-start">
                                <p class="text-sm leading-6 text-gray-900 font-bold">Day / Date</p>
                            </div>
                            <div class="hidden sm:flex sm:flex-col sm:items-end">
                                <p class="mt-1 text-xs leading-5 text-gray-900 font-bold uppercase">State</p>
                            </div>
                            <div class="flex item-center justify-center sm:flex sm:flex-col sm:items-end">
                                
                            </div>
                        </li>
                        <li v-for="user_booking in user_bookings" class="flex justify-between gap-x-6 py-5">
                            <div class="flex gap-x-4">
                                <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                <div class="min-w-0 flex-auto">
                                    <p class="text-sm font-semibold leading-6 text-gray-900">{{user_booking.sermon_booked_user_data.first_name}} {{user_booking.sermon_booked_user_data.last_name}}</p>
                                    <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{user_booking.sermon_booked_user_data.email}} {{user_booking.sermon_booked_user_data.last_name}}</p>
                                </div>
                            </div>
                            <div class="hidden sm:flex sm:flex-col sm:items-start">
                                <p class="text-sm leading-6 text-gray-900">{{user_booking.sermon_day_data.title}}</p>
                                <p class="mt-1 text-xs leading-5 text-gray-500 uppercase">{{user_booking.sermon_day_data.date}}</p>
                            </div>
                            <div class="hidden sm:flex sm:flex-col sm:items-end">
                                <p v-if="user_booking.status === 'requested'" class="mt-1 text-xs leading-5 text-gray-500 uppercase bg-[#fbbf24] text-white py-1 px-3 rounded">{{user_booking.status}}</p>
                                <p v-else-if="user_booking.status === 'booked'" class="mt-1 text-xs leading-5 text-gray-500 uppercase bg-[#22c55e] text-white py-1 px-3 rounded">{{user_booking.status}}</p>
                                <p v-else class="mt-1 text-xs leading-5 text-gray-500 uppercase bg-[#dc2626] text-white py-1 px-3 rounded">{{user_booking.status}}</p>
                            </div>
                            <div class="flex item-center justify-center sm:flex sm:flex-col sm:items-end">
                                <button class="mt-1 text-xs leading-5 text-gray-500 uppercase bg-[#22c55e] text-white py-1 px-3 rounded"><i class='bx bx-check-circle text-[16px]'></i> Accept</button>
                                <button class="mt-1 text-xs leading-5 text-gray-500 uppercase bg-[#dc2626] text-white py-1 px-3 rounded"><i class='bx bx-x-circle text-[16px]'></i> Decline</button>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- If requests are there -->
                <div v-else class="">
                    <div class="border border-gray-400 border-dashed p-12 rounded">
                        <p class="text-gray-600">No Sermon Booking Requests yet</p>
                    </div>                       
                </div>
            </div>
        </div>

        <br>
        <br>
        
    </AuthenticatedLayout>
</template>
