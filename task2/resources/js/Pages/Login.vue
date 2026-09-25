```vue
<template>
    <main class="login-page">
        <header class="brand">
            <h1 class="logo">
                SH<span class="play-o"><span class="play-triangle"></span></span>W<span class="logo-red">TIME</span>
            </h1>

            <p>MOVIES · SERIES · LIVE · UNLIMITED</p>
        </header>

        <section class="login-card">
            <h2>Admin sign in</h2>
            <p>Manage content, audience and revenue</p>

            <el-form
                label-position="top"
                @submit.prevent="login"
            >
                <el-form-item label="Email">
                    <el-input
                        v-model="email"
                        type="email"
                        placeholder="Enter your email"
                    />
                </el-form-item>

                <el-form-item label="Password">
                    <el-input
                        v-model="password"
                        type="password"
                        placeholder="Enter your password"
                        show-password
                    />
                </el-form-item>

                <el-button
                    class="sign-in-button"
                    type="primary"
                    native-type="submit"
                >
                    Sign in
                </el-button>
            </el-form>

            <a href="/forgot-password" class="forgot-link">
                Forgot password?
            </a>
        </section>

        <footer>
            © 2026 Showtime · Admin Portal v2.1
        </footer>
    </main>
</template>

<script setup>
import { ref } from 'vue';
import { router } from '@inertiajs/vue3';

const email = ref('');
const password = ref('');

const login = () => {
    router.post('/login', {
        email: email.value,
        password: password.value,
    });
};
</script>

<style scoped>
.login-page {
    min-height: 100vh;
    background: #171213;
    color: #f5f5f5;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 28px 20px;
}

.login-card {
    width: 100%;
    max-width: 400px;
    margin-top: 26px;
    padding: 30px;
    background: #1c1c1e;
    border: 1px solid #343438;
    border-radius: 16px;
}

.login-page footer {
    margin-top: 24px;
    color: #777780;
    font-size: 12px;
}

.brand {
    text-align: center;
}

.logo {
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0;
    font-size: 48px;
    font-weight: 900;
    letter-spacing: -3px;
    line-height: 1;
}

.logo-red {
    color: #eb2328;
}

.play-o {
    width: 42px;
    height: 42px;
    margin: 0 2px;
    border: 5px solid #f5f5f5;
    border-radius: 50%;
    display: grid;
    place-items: center;
    animation: pulse 1.8s ease-in-out infinite;
}

.play-triangle {
    width: 0;
    height: 0;
    margin-left: 4px;
    border-top: 9px solid transparent;
    border-bottom: 9px solid transparent;
    border-left: 14px solid #eb2328;
}

@keyframes pulse {
    50% {
        transform: scale(1.12);
    }
}

.sign-in-button {
    width: 100%;
    height: 42px;
    margin-top: 8px;
    background: #eb2328;
    border-color: #eb2328;
    font-weight: bold;
}

.sign-in-button:hover {
    background: #d91c22;
    border-color: #d91c22;
}
</style>
