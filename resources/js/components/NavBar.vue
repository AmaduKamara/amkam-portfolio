<template>
  <header class="bg-gray-100 shadow-md sm:flex sm:justify-between sm:px-4 sm:py-3">
    <div class="container sm:flex items-center sm:justify-between mx-auto md:px-4">
      <nav class="flex items-center justify-between px-4 py-2 sm:p-0 sm:border-none">
        <div>
          <h1 class="text-gray-200 font-sans text-2xl">
            <a href="#" class="text-gray-700">
              <span class="text-teal-400">Am</span>kam
            </a>
          </h1>
        </div>
        <div class="sm:hidden">
          <button
            @click="isOpen = !isOpen"
            type="button"
            class="text-teal-500 focus:text-teal-600 focus:outline-none hover:text-teal-600 block transition delay-150 duration-200 ease-in-out"
          >
            <svg
              class="h-6 w-6 fill-current"
              fill="none"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                v-if="isOpen"
                d="M6 18L18 6M6 6l12 12"
                class="transition delay-150 duration-200 ease-in-out"
              />
              <path
                v-if="!isOpen"
                d="M4 6h16M4 12h16M4 18h16"
                class="transition delay-150 duration-200 ease-in-out"
              />
            </svg>
          </button>
        </div>
      </nav>

      <div :class="isOpen ? 'block' : 'hidden' " class="px-2 pt-2 pb-4 sm:flex sm:p-0 sm:pt-1">
        <router-link
          to="/"
          class="block sm:inline-block font-semibold hover:bg-teal-600 hover:text-gray-200 rounded px-2 py-1 text-gray-900"
          exact
        >Home</router-link>
        <router-link
          to="/about"
          class="block sm:inline-block font-semibold hover:bg-teal-600 hover:text-gray-200 rounded px-2 py-1 mt-1 sm:mt-0 sm:ml-3 text-gray-900"
          exact
        >About</router-link>
        <router-link
          to="/skills"
          class="block sm:inline-block font-semibold hover:bg-teal-600 hover:text-gray-200 rounded px-2 py-1 mt-1 sm:mt-0 sm:ml-3 text-gray-900"
          exact
        >Skills</router-link>
        <router-link
          to="/portfolio"
          class="block sm:inline-block font-semibold hover:bg-teal-600 hover:text-gray-200 rounded px-2 py-1 mt-1 sm:mt-0 sm:ml-3 text-gray-900"
          exact
        >Portfolio</router-link>
        <router-link
          to="/contact"
          class="block sm:inline-block font-semibold hover:bg-teal-600 hover:text-gray-200 rounded px-2 py-1 mt-1 sm:mt-0 sm:ml-3 text-gray-900"
        >Contact</router-link>
      </div>
    </div>
  </header>
</template>

<script>
export default {
  data() {
    return {
      isOpen: false,
    };
  },
};
</script>