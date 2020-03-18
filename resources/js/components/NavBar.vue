<template>
    <v-app-bar app color="orange darken-4" dark>
        <v-toolbar-title>
            <v-btn
                href="/"
                text
                rounded
                :class="currentLocation === '/' ? 'activeButton' : ''"
                class="td-none">
                    {{ title }}
            </v-btn>
        </v-toolbar-title>

        <v-spacer></v-spacer>
        
        <v-btn
            v-for="link in visibleLinks"
            :key="link.text"
            :href="link.url"
            text
            rounded
            :class="link.url === currentLocation ? 'activeButton' : ''"
            class="td-none">
                <v-icon class="mr-2 pr-2">{{ link.icon }}</v-icon>
                {{ link.text }}
        </v-btn>
    </v-app-bar>
</template>

<script>
    export default {
        props: ['title', 'user'],
        data() {
            return {
                links: [
                    {   'icon'      : 'mdi-account-circle', 
                        'text'      : 'View Meetups', 
                        'url'       : '/meetups',
                        'visible'   : true
                    },
                    {
                        'icon'      : 'mdi-map-marker', 
                        'text'      : 'Organize Meetups', 
                        'url'       : '/organize-meetups',
                        'visible'   : this.isLinkVisible
                    },
                    {
                        'icon'      : 'mdi-account', 
                        'text'      : 'Profile', 
                        'url'       : this.user ? `/profile/${user.username}` : '#',
                        'visible'   : this.isLinkVisible
                    },
                    {
                        'icon'      : this.user ? 'mdi-logout' : 'mdi-login',
                        'text'      : this.user ? 'logout' : 'login',
                        'url'       : this.user ? '/logout' : '/login',
                        'visible'   : true
                    }
                ],
            }
        },

        computed: {
            visibleLinks() {
                return _.pickBy(this.links, (l) => l.visible)   
            },

            isLinkVisible() {
                return this.links ? true : false
            },

            currentLocation() {
                return window.location.pathname
            }
        }

    }
</script>

<style scoped>
    .td-none {
        text-decoration: none;
    }

    a.td-none {
        color: #ffffff;
    }

    a.td-none:hover {
        background: #ff9800;
    }

    .activeButton {
        background: #ff9800;
    }
</style>
