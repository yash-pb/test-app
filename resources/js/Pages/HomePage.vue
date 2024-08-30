<template>
    Hello Home
    <!-- {{ Auth::user()->name }} -->
    <router-link to="test">
        <!-- <button id="myButton" class="foo bar">Test</button> -->
        <Button>Test</Button>
    </router-link>
</template>
<script setup>
import { Button } from '@ownego/polaris-vue';
</script>