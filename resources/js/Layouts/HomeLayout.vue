<script setup>
import { Link } from '@inertiajs/vue3';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';

</script>

<style scoped>
.navbar:hover {
    color: rgb(36, 136, 36);
}
</style>

<template>
    <div>
        <div class="content flex-grow">
            <div class="min-h-screen">
                <nav class="bg-white border-b border-gray-400">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="flex justify-between h-16 items-center">
                            <div class="flex-shrink-0 flex items-center">
                                <NavLink :href="route('dashboard')" :active="route().current('dashboard')" id="landing-title">
                                    <img src="https://d2gg9evh47fn9z.cloudfront.net/800px_COLOURBOX2485088.jpg" alt="">
                                </NavLink>
                            </div>
                            <div class="hidden sm:flex sm:space-x-4">
                                <div class="flex items-center ml-5">
                                    <Link class="navbar text-md font-bold text-green-500 px-3 py-2" href="/dashboard">HOME</Link>
                                    <Link class="navbar text-md font-bold text-green-500 px-3 py-2" href="/movies">MOVIES</Link> 
                                    <Link class="navbar text-md font-bold text-green-500 px-3 py-2" href="/app">ANDROID APP</Link> 
                                    <Link class="navbar text-md font-bold text-green-500 px-3 py-2" href="/emailUs">ABOUT US</Link> 
                                </div>
                            </div>

                            <div class="relative flex-shrink-0">
                                <div class="relative w-full max-w-md">
                                    <input type="text" class="search-input w-full px-4 py-2 border border-gray-500 rounded-full shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="Search...">
                                    <button class="search-button absolute text-black rounded-full px-3 py-1 shadow-lg focus:outline-none transition-colors duration-300" style="right: 10px; top: 50%; transform: translateY(-50%);">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="hidden sm:flex sm:items-center sm:ms-6">
                                <div class="ms-3 relative">
                                    <Dropdown align="right" width="48">
                                        <template #trigger>
                                            <span class="inline-flex rounded-md">
                                                <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                                    {{ $page.props.auth.user.name }}
                                                    <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                    </svg>
                                                </button>
                                            </span>
                                        </template>
                                        <template #content>
                                            <DropdownLink :href="route('logout')" method="post" as="button">
                                                Log Out
                                            </DropdownLink>
                                        </template>
                                    </Dropdown>
                                </div>
                            </div>
                            <div class="-me-2 flex items-center sm:hidden">
                                <button @click="showingNavigationDropdown = !showingNavigationDropdown" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                        <path :class="{ hidden: showingNavigationDropdown, 'inline-flex': !showingNavigationDropdown }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                        <path :class="{ hidden: !showingNavigationDropdown, 'inline-flex': showingNavigationDropdown }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div :class="{ block: showingNavigationDropdown, hidden: !showingNavigationDropdown }" class="sm:hidden">
                        <div class="pt-2 pb-3 space-y-1">
                            <ResponsiveNavLink :href="route('dashboard')" :active="route().current('dashboard')">
                                Dashboard
                            </ResponsiveNavLink>
                        </div>
                        <div class="pt-4 pb-1 border-t border-gray-200">
                            <div class="px-4">
                                <div class="font-medium text-base text-gray-800">
                                    {{ $page.props.auth.user.name }}
                                </div>
                                <div class="font-medium text-sm text-gray-500">{{ $page.props.auth.user.email }}</div>
                            </div>
                            <div class="mt-3 space-y-1">
                                <ResponsiveNavLink :href="route('logout')" method="post" as="button">
                                    Log Out
                                </ResponsiveNavLink>
                            </div>
                        </div>
                    </div>
                </nav>

                <header class="bg-white shadow" v-if="$slots.header">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        <slot name="header" />
                    </div>
                </header>
                <main>
                    <Transition name="page-transition" mode="out-in">
                        <slot />
                    </Transition>
                </main>
            </div>
        </div>
    </div>
</template>

<style scoped>

img {
    width: 100px;
    height: 100px;
}

#landing-title {
    font-size: 30px;
    font-family:Arial, Helvetica, sans-serif;
    font-weight: bold;
    color: black;
}
</style>
