<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
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
                        Sermon Days
                    </Link>
                </div>
                <br>
                <!-- If requests are not there -->
                <div class="border border-gray-400 border-dashed p-12 rounded">
                    <p class="text-gray-600">No Sermon Booking Requests yet</p>
                </div>
                <!-- If requests are there -->
                <div class="">
                        <br>
                        <div class="">
                            
                            <ul role="list" class="divide-y divide-gray-100">
                                <li class="flex justify-between gap-x-6 py-5">
                                    <div class="flex gap-x-4">
                                    <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                    <div class="min-w-0 flex-auto">
                                        <p class="text-sm font-semibold leading-6 text-gray-900">Leslie Alexander</p>
                                        <p class="mt-1 truncate text-xs leading-5 text-gray-500">leslie.alexander@example.com</p>
                                    </div>
                                    </div>
                                    <div class="hidden sm:flex sm:flex-col sm:items-end">
                                    <p class="text-sm leading-6 text-gray-900">Co-Founder / CEO</p>
                                    <p class="mt-1 text-xs leading-5 text-gray-500">Last seen <time datetime="2023-01-23T13:23Z">3h ago</time></p>
                                    </div>
                                </li>
                                <li class="flex justify-between gap-x-6 py-5">
                                    <div class="flex gap-x-4">
                                    <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                    <div class="min-w-0 flex-auto">
                                        <p class="text-sm font-semibold leading-6 text-gray-900">Michael Foster</p>
                                        <p class="mt-1 truncate text-xs leading-5 text-gray-500">michael.foster@example.com</p>
                                    </div>
                                    </div>
                                    <div class="hidden sm:flex sm:flex-col sm:items-end">
                                    <p class="text-sm leading-6 text-gray-900">Co-Founder / CTO</p>
                                    <p class="mt-1 text-xs leading-5 text-gray-500">Last seen <time datetime="2023-01-23T13:23Z">3h ago</time></p>
                                    </div>
                                </li>
                                <li class="flex justify-between gap-x-6 py-5">
                                    <div class="flex gap-x-4">
                                    <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                    <div class="min-w-0 flex-auto">
                                        <p class="text-sm font-semibold leading-6 text-gray-900">Dries Vincent</p>
                                        <p class="mt-1 truncate text-xs leading-5 text-gray-500">dries.vincent@example.com</p>
                                    </div>
                                    </div>
                                    <div class="hidden sm:flex sm:flex-col sm:items-end">
                                    <p class="text-sm leading-6 text-gray-900">Business Relations</p>
                                    <div class="mt-1 flex items-center gap-x-1.5">
                                        <div class="flex-none rounded-full bg-emerald-500/20 p-1">
                                        <div class="h-1.5 w-1.5 rounded-full bg-emerald-500"></div>
                                        </div>
                                        <p class="text-xs leading-5 text-gray-500">Online</p>
                                    </div>
                                    </div>
                                </li>
                                <li class="flex justify-between gap-x-6 py-5">
                                    <div class="flex gap-x-4">
                                    <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                    <div class="min-w-0 flex-auto">
                                        <p class="text-sm font-semibold leading-6 text-gray-900">Lindsay Walton</p>
                                        <p class="mt-1 truncate text-xs leading-5 text-gray-500">lindsay.walton@example.com</p>
                                    </div>
                                    </div>
                                    <div class="hidden sm:flex sm:flex-col sm:items-end">
                                    <p class="text-sm leading-6 text-gray-900">Front-end Developer</p>
                                    <p class="mt-1 text-xs leading-5 text-gray-500">Last seen <time datetime="2023-01-23T13:23Z">3h ago</time></p>
                                    </div>
                                </li>
                                <li class="flex justify-between gap-x-6 py-5">
                                    <div class="flex gap-x-4">
                                    <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                    <div class="min-w-0 flex-auto">
                                        <p class="text-sm font-semibold leading-6 text-gray-900">Courtney Henry</p>
                                        <p class="mt-1 truncate text-xs leading-5 text-gray-500">courtney.henry@example.com</p>
                                    </div>
                                    </div>
                                    <div class="hidden sm:flex sm:flex-col sm:items-end">
                                    <p class="text-sm leading-6 text-gray-900">Designer</p>
                                    <p class="mt-1 text-xs leading-5 text-gray-500">Last seen <time datetime="2023-01-23T13:23Z">3h ago</time></p>
                                    </div>
                                </li>
                                <li class="flex justify-between gap-x-6 py-5">
                                    <div class="flex gap-x-4">
                                    <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                    <div class="min-w-0 flex-auto">
                                        <p class="text-sm font-semibold leading-6 text-gray-900">Tom Cook</p>
                                        <p class="mt-1 truncate text-xs leading-5 text-gray-500">tom.cook@example.com</p>
                                    </div>
                                    </div>
                                    <div class="hidden sm:flex sm:flex-col sm:items-end">
                                    <p class="text-sm leading-6 text-gray-900">Director of Product</p>
                                    <div class="mt-1 flex items-center gap-x-1.5">
                                        <div class="flex-none rounded-full bg-emerald-500/20 p-1">
                                        <div class="h-1.5 w-1.5 rounded-full bg-emerald-500"></div>
                                        </div>
                                        <p class="text-xs leading-5 text-gray-500">Online</p>
                                    </div>
                                    </div>
                                </li>
                                </ul>
                        </div>
                    </div>
            </div>
        </div>
        
    </AuthenticatedLayout>
</template>
