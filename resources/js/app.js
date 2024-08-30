import "./bootstrap";
import { createApp } from "vue";
import router from "./router";
import PolarisVue from '@ownego/polaris-vue'
import '@ownego/polaris-vue/dist/style.css'

import App from "./App.vue";

createApp(App).use(router, PolarisVue).mount("#app");