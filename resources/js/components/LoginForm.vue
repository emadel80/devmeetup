<template>
    <v-card width="550px" class="mx-auto">
        <v-card-title>
            <h1>Login</h1>
        </v-card-title>
        <v-card-text>
            <v-form>
                <v-text-field
                    prepend-icon="mdi-account-circle"
                    label="Username"
                    required>
                </v-text-field>
                <v-text-field
                    prepend-icon="mdi-lock"
                    :append-icon="toggleEyeIcon"
                    label="Password"
                    :type="toggleCheckboxType"
                    @click:append="togglePasswordVisibility"
                    required>
                </v-text-field>
                <v-row>
                    <v-col cols="12" md="6">
                        <v-checkbox 
                            v-model="rememberMe"
                            label="Remember Me"
                            color="orange darken-3">
                        </v-checkbox>
                    </v-col>
                    <v-col cols="12" md="6">
                        <v-btn
                            text
                            rounded
                            color="orange darken-3"
                            :href="forgotPasswordUrl"
                            class="mt-3 px-2">
                            Forgot your password?
                        </v-btn>
                    </v-col>
                </v-row>
                <v-divider></v-divider>
                <v-card-actions>
                    <v-btn
                        href="register" 
                        color="primary">
                            Register
                    </v-btn>
                    <v-spacer></v-spacer>
                    <v-btn 
                        type="submit"
                        color="orange darken-3" 
                        dark>
                            Login
                    </v-btn>
                </v-card-actions>
            </v-form>
        </v-card-text>
    </v-card>
</template>

<script>
export default {
    props: ['forgotPasswordUrl'],
    data() {
        return {
            username: '',
            password: '',
            showPassword: false,
            rememberMe: false
        }
    },

    methods: {
        togglePasswordVisibility() {
            this.showPassword = ! this.showPassword
        },
    },

    computed: {
        toggleCheckboxType() {
            return this.showPassword ? 'text' : 'password'
        },

        toggleEyeIcon() {
            return this.showPassword ? 'mdi-eye' : 'mdi-eye-off'
        }
    }
}
</script>

<style scoped>

</style>