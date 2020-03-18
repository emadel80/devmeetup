<template>
    <v-app-bar app color="orange darken-4" dark>
        <v-toolbar-title>
            <v-btn
                href="/"
                text
                rounded
                class="td-none">
                    {{ title }}
            </v-btn>
        </v-toolbar-title>

        <v-spacer></v-spacer>
        
        <v-btn
            v-for="link in JSON.parse(links)"
            :key="link.text"
            :href="link.url"
            text
            rounded
            class="td-none">
                <v-icon class="mr-2 pr-2">{{ link.icon }}</v-icon>
                {{ link.text }}
        </v-btn>
    </v-app-bar>
</template>

<script>
    export default {
        props: ['title', 'links']
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
</style>
