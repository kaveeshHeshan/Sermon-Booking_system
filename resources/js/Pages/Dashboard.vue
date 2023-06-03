<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    user_bookings: Array,
    user_bookings_count: Number,
});

</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
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
                <div v-if="user_bookings_count > 0" class="">
                    <div class="items-right justify-right text-right">
                        <div class="">
                            <Link
                                :href="route('sermonBooking.create')"
                                class="bg-[#a855f7] rounded px-6 py-3 text-white"
                                >
                                <i class='bx bx-plus-circle'></i> Add Sermon Booking
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
                                <ul role="list" class="divide-y divide-gray-100">
                                    <li class="flex justify-between px-10 py-5">
                                        <!-- <pre>{{user_booking}}</pre> -->
                                        <!-- <div class="flex gap-x-4">
                                            <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                            <div class="min-w-0 flex-auto">
                                                <p class="text-sm font-semibold leading-6 text-gray-900">{{user_booking.sermon_booked_user_data.first_name}} {{user_booking.sermon_booked_user_data.last_name}}</p>
                                                <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{user_booking.sermon_booked_user_data.email}}</p>
                                            </div>
                                        </div> -->
                                        <div class="hidden sm:flex sm:flex-col sm:items-center font-bold">
                                            <p class="text-sm leading-6 text-gray-900">Day /Title</p>
                                        </div>
                                        <div class="hidden sm:flex sm:flex-col sm:items-center font-bold">
                                            <p class="mt-1 text-xs leading-5 text-gray-900 uppercase">Date</p>
                                        </div>
                                        <div class="hidden sm:flex sm:flex-col sm:items-end font-bold">
                                            <p class="mt-1 text-xs leading-5 text-gray-900 uppercase">Status</p>
                                        </div>
                                        <div class="hidden sm:flex sm:flex-col sm:items-end font-bold">
                                            <p class="mt-1 text-xs leading-5 text-gray-900 uppercase">Actions</p>
                                        </div>
                                    </li>
                                    <li v-for="user_booking in user_bookings" class="flex justify-between px-10 py-5">
                                        <!-- <pre>{{user_booking}}</pre> -->
                                        <!-- <div class="flex gap-x-4">
                                            <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                            <div class="min-w-0 flex-auto">
                                                <p class="text-sm font-semibold leading-6 text-gray-900">{{user_booking.sermon_booked_user_data.first_name}} {{user_booking.sermon_booked_user_data.last_name}}</p>
                                                <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{user_booking.sermon_booked_user_data.email}}</p>
                                            </div>
                                        </div> -->
                                        <div class="hidden sm:flex sm:flex-col sm:items-start">
                                            <p class="text-sm leading-6 text-gray-900">{{user_booking.sermon_day_data.title}}</p>
                                        </div>
                                        <div class="hidden sm:flex sm:flex-col sm:items-center">
                                            <p class="mt-1 text-xs leading-5 text-gray-500 uppercase">{{user_booking.sermon_day_data.date}}</p>
                                        </div>
                                        <div class="hidden sm:flex sm:flex-col sm:items-end">
                                            <p v-if="user_booking.status === 'requested'" class="mt-1 text-xs leading-5 text-gray-500 uppercase bg-[#fbbf24] text-white py-1 px-3 rounded">{{user_booking.status}}</p>
                                            <p v-else-if="user_booking.status === 'booked'" class="mt-1 text-xs leading-5 text-gray-500 uppercase bg-[#22c55e] text-white py-1 px-3 rounded">{{user_booking.status}}</p>
                                            <p v-else class="mt-1 text-xs leading-5 text-gray-500 uppercase bg-[#dc2626] text-white py-1 px-3 rounded">{{user_booking.status}}</p>
                                        </div>
                                        <div class="hidden sm:flex sm:flex-col sm:items-end">
                                            <div class="" v-if="!user_booking.payment_data && user_booking.status === 'booked'">
                                                <Link class="bg-indigo-500 text-white py-1 px-3 rounded" :href="route('sermonBooking.paySlip.create', user_booking.id)">Payment Slip Upload</Link>
                                            </div>
                                            <div class="" v-else-if="user_booking.payment_data && user_booking.status === 'booked'">
                                                <button class="bg-indigo-300 text-white py-1 px-3 rounded 
                                                relative
                                                before:content-[attr(data-tip)]
                                                before:absolute
                                                before:px-3 before:py-2
                                                before:left-1/2 before:-left-3
                                                before:w-max before:max-w-xs
                                                before:-translate-y-1/2 before:-translate-x-full
                                                before:bg-gray-700 before:text-white
                                                before:rounded-md before:opacity-0
                                                before:transition-all
                                                before:z-0

                                                after:absolute
                                                after:left-1/2 after:-left-3
                                                after:h-0 after:w-0
                                                after:-translate-x-1/2 after:border-8
                                                after:border-t-gray-700
                                                after:border-l-transparent
                                                after:border-b-transparent
                                                after:border-r-transparent
                                                after:opacity-0
                                                after:transition-all
                                                after:z-10

                                                hover:before:opacity-100 hover:after:opacity-100" data-tip="You have uploaded Bank Slip." disabled >Payment Slip Upload</button>
                                            </div>
                                            <div class="" v-else>
                                                <button class="bg-indigo-300 text-white py-1 px-3 rounded 
                                                relative
                                                before:content-[attr(data-tip)]
                                                before:absolute
                                                before:px-3 before:py-2
                                                before:left-1/2 before:-left-3
                                                before:w-max before:max-w-xs
                                                before:-translate-y-1/2 before:-translate-x-full
                                                before:bg-gray-700 before:text-white
                                                before:rounded-md before:opacity-0
                                                before:transition-all
                                                before:z-0

                                                after:absolute
                                                after:left-1/2 after:-left-3
                                                after:h-0 after:w-0
                                                after:-translate-x-1/2 after:border-8
                                                after:border-t-gray-700
                                                after:border-l-transparent
                                                after:border-b-transparent
                                                after:border-r-transparent
                                                after:opacity-0
                                                after:transition-all
                                                after:z-10

                                                hover:before:opacity-100 hover:after:opacity-100" data-tip="Wait till the request is approved." disabled >Payment Slip Upload</button>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <!-- <table class="w-full text-sm text-left">
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
                                                
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="user_booking in user_bookings" class="bg-white">
                                            <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                                                {{ user_booking.id }}
                                            </th>
                                            <td class="px-6 py-4">
                                                {{ user_booking.description }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ user_booking.sermon_day_id }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ user_booking.status }}
                                            </td>
                                            <td class="px-6 py-4">
                                                <Link v-show="user_booking.status === 'requested'"
                                                    :href="route('sermonBooking.edit', user_booking.id)"
                                                    class="bg-[#facc15] rounded px-3 py-2 text-white"
                                                    >
                                                    <i class='bx bxs-edit'></i>
                                                </Link>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div v-else class="">
                    <div class="border border-gray-400 border-dashed p-12 rounded">
                        <i class='bx bx-plus text-[40px] text-gray-600'></i>
                        <p class="text-gray-600">Add New Sermon Days</p>
                        <br>
                        <Link :href="route('sermonBooking.create')" class="bg-[#a855f7] rounded px-6 py-3 text-white">Add Sermon Booking</Link>
                        <br>
                        <br>
                    </div>
                    
                </div>
            </div>
        </div>
        <br>
        <br>
    </AuthenticatedLayout>
</template>

<script>

$( document ).ready(function() {
    $('#myTable').DataTable();
});

</script>
