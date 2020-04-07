<template>
    <nav class="bg-white">
        <div class="md:flex items-center justify-between py-2 px-8 md:px-12 -mx-4">
            <div class="flex justify-between items-center">
               <div class="text-2xl font-bold text-gray-800 md:text-3xl">
                    <a href="#">ACA</a>
               </div>
                <div class="md:hidden">
                    <button @click="isOpen = !isOpen" type="button" class="block text-gray-800 hover:text-gray-700 focus:text-gray-700 focus:outline-none">
                        <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                            <path class="hidden" d="M16.24 14.83a1 1 0 0 1-1.41 1.41L12 13.41l-2.83 2.83a1 1 0 0 1-1.41-1.41L10.59 12 7.76 9.17a1 1 0 0 1 1.41-1.41L12 10.59l2.83-2.83a1 1 0 0 1 1.41 1.41L13.41 12l2.83 2.83z"/>
                            <path d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="font-montserrat flex flex-col md:flex-row hidden md:block -mx-2">
                <a href="#" class="text-gray-800 rounded hover:bg-gray-900 hover:text-gray-100 hover:font-medium py-2 px-2 md:mx-2">Home</a>
                <a href="#" class="text-gray-800 rounded hover:bg-gray-900 hover:text-gray-100 hover:font-medium py-2 px-2 md:mx-2">About</a>
                <a href="#" class="text-gray-800 rounded hover:bg-gray-900 hover:text-gray-100 hover:font-medium py-2 px-2 md:mx-2">Contact</a>
            </div>
            <transition appear enter-active-class="animated slideInDown delay" leave-active-class="animated slideOutUp">
	            <div v-if="isOpen" class="bg-white font-montserrat flex flex-col md:flex-row md:hidden -mx-2 pb-4 px-2 pt-6 shadow-md">
	                <a href="#" class="text-gray-800 rounded hover:bg-gray-900 hover:text-gray-100 hover:font-medium py-2 px-2 md:mx-2">Home</a>
	                <a href="#" class="text-gray-800 rounded hover:bg-gray-900 hover:text-gray-100 hover:font-medium py-2 px-2 md:mx-2">About</a>
	                <a href="#" class="text-gray-800 rounded hover:bg-gray-900 hover:text-gray-100 hover:font-medium py-2 px-2 md:mx-2">Contact</a>
	            </div>
	        </transition>
        </div>
    </nav>
</template>

<script>
	import 'alpinejs';

	export default {
		data() {
			return {
				isOpen: false,
	      	}
		},

      	methods: {

      	}
	}
</script>

<style>
	.delay{
		animation-delay: s;
	}
	.v-enter-active {
		transform: bounce .5s;
	}
	.v-leave-active {
		transform: bounce 5s reverse;
	}
	.bounce-enter-active, .bounce-leave-active {
		/*transition: transform .2s ease-in-out;*/
		/*transform: scaleY(0);*/
		transition: top .3s ease cubic-bezier(0.17, 0.04, 0.03, 0.94);
	}
	.bounce-enter, .bounce-leave-to {
		/*transition: all 3s ease-in-out cubic-bezier(0.17, 0.04, 0.03, 0.94);*/
		transition: all .2s ease;
		/*transform: scaleY(0);*/
	}
	@keyframes bounce {
		0% {
			transform: scale(0);
			opacity: (0);
		}
		50% {
			transform: scale(0.5);
			opacity: (1);
		}
		100% {
			transform: scale(1);
			opacity: (1)
		}
	}


</style>