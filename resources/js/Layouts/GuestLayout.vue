<script setup>
import { ref } from "vue";
import ResponsiveNavLink from "@/Components/ResponsiveNavLink.vue";
import { Link } from "@inertiajs/vue3";
import { ShoppingCartIcon } from "@heroicons/vue/24/outline";

const showingNavigationDropdown = ref(false);
</script>

<template>
  <div>
    <div class="min-h-screen bg-white">
      <nav class="bg-white border-gray-100">
        <!-- Responsive Navigation Menu -->
        <div
          :class="{
            block: showingNavigationDropdown,
            hidden: !showingNavigationDropdown,
          }"
          class="sm:hidden"
        >
          <div class="pt-2 pb-3 space-y-1">
            <ResponsiveNavLink
              :href="route('dashboard')"
              :active="route().current('dashboard')"
            >
              Dashboard
            </ResponsiveNavLink>
          </div>

          <!-- Responsive Settings Options -->
          <div class="pt-4 pb-1 border-t border-gray-200"></div>
        </div>
      </nav>

      <!-- Page Heading -->
      <header
        class="bg-white shadow-lg shadow-[#43b6921e] flex text-transparent bg-clip-text bg-gradient-to-r from-[#43B692] to-[#8fe4c5]"
        v-if="$slots.header"
      >
        <div class="flex w-screen mx-8">
          <div
            class="shrink-0 flex items-center mr-20 hover:scale-[1.1] ease-in-out duration-300"
          >
            <Link :href="route('dashboard')">
              <div>
                <img src="../../images/kanuu.svg" alt="kanuu" />
              </div>
            </Link>
          </div>
          <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <slot name="header" />
          </div>

          <button class="hover:scale-[1.1] ease-in-out duration-300">
            <Link
              :href="route('company')"
              class="flex shadow-md rounded-full px-6 bg-gradient-to-r from-[#43B692] to-[#8fe4c5] p-3 text-[#ffffff] text-md font-bold hover:bg-orange-600"
            >
              FIRMALE
            </Link>
          </button>

          <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <button class="hover:scale-[1.1] ease-in-out duration-300">
              <Link :href="route('cart')">
                <ShoppingCartIcon class="w-10 h-10 text-[#43B692]" />
              </Link>
            </button>
          </div>
        </div>
      </header>

      <!-- Page Content -->
      <main>
        <slot />
      </main>
    </div>
  </div>
</template>
