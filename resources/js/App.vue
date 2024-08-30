<template>
    <AppProvider :i18n="locales">
        <router-view />
    </AppProvider>
</template>
<script setup>
    import locales from '@ownego/polaris-vue/dist/locales/en.json';
</script>