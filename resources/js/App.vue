<template>
    <main>
        <!-- Navigation Bar -->
        <NavBar />
        <router-view></router-view>
    </main>
</template>

<script>

import NavBar from './components/NavBar'

export default {
    name: "App",
    components: {
      NavBar
    }
};
</script>
