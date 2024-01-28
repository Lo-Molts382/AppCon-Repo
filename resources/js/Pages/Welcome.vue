<script setup>
import { Head, Link } from '@inertiajs/vue3';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});
</script>

<template>
    <Head title="Welcome" />

    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white"
    >

        <div>   
            <div v-if="canLogin" class="sm:fixed sm:top-0 sm:left-0 p-6 text-end">

                <div style = 
                    "padding: 25px 1550px 25px 25px;  
                    background-color: rgb(27, 39, 64);
                    margin: -25px -25px;">
                    <!-- USER AUTHENTICATED -->
                    <Link
                        v-if="$page.props.auth.user"
                        :href="route('dashboard')" style = "margin-left: 5px; margin-right:40px;"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
                        >Back to Account Dashboard </Link>
                    
                    <Link
                        v-if="$page.props.auth.user"
                        :href="route('logout')" method="post"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
                        >Logout</Link>  
                
                <template v-else>

                    <div style = 
                        "padding: 25px 1550px 25px 25px;  
                        background-color: rgb(27, 39, 64);
                        margin: -25px -25px;">
                        <!-- USER UNAUTHENTICATED -->

                        <Link
                            v-if="canRegister"
                            :href="route('login')" style = " margin-right:40px;"
                            class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
                            >Log in</Link>

                        <Link
                            v-if="canRegister"
                            :href="route('register')"
                            class="ms-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
                            >Register</Link > 
                    </div>

                </template>
            </div>
        </div>
    </div>
        
    <div>
            <h1 style = "color: white;"> Hello World! This is the LANDING Page. </h1>
    </div>
    </div>
</template>

<style>
.bg-dots-darker {
    background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E");
}
@media (prefers-color-scheme: dark) {
    .dark\:bg-dots-lighter {
        background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E");
    }
}
</style>
