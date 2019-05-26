<template>
    <div>
        <div @click="toggleMenu" class="menu">
            <span data-feather="menu" class="w-5 h-5"></span>
        </div>

        <div @click="toggleMenu" v-if="showMenu" class="w-full h-full fixed pin"></div>

        <div class="absolute pin-r pin-t pt-10 pr-12" :class="showMenu ? '' : 'hidden'">

            <div class="pt-8 pr-2">
                
                <ul class="list-reset text-right leading-loose">
                    <li>
                        <a href="#" class="menu-link" :class="'text-'+colour+'-darker hover:text-'+colour+'-dark'">Home</a>
                    </li>
                    <li>
                        <a href="#" class="menu-link" :class="'text-'+colour+'-darker hover:text-'+colour+'-dark'">Services</a>
                    </li>
                    <li>
                        <a href="#" class="menu-link" :class="'text-'+colour+'-darker hover:text-'+colour+'-dark'">Products</a>
                    </li>
                    <li>
                        <a href="#" class="menu-link" :class="'text-'+colour+'-darker hover:text-'+colour+'-dark'">Blog</a>
                    </li>
                    <li>
                        <a href="#" class="menu-link" :class="'text-'+colour+'-darker hover:text-'+colour+'-dark'">Contact</a>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['colour'],
        data() {
            return {
                showMenu: false
            };
        },
        methods : {
            toggleMenu() {
                this.showMenu = !this.showMenu;
            }
        },
        mounted() {

        }
    }
</script>

<style scoped lang="sass">
    .menu
        @apply w-8 h-8 flex items-center justify-center cursor-pointer z-50 relative
        &:hover
            span
                @apply text-orange
    .menu-link
        @apply no-underline text-sm
</style>