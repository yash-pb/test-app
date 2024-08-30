import { createRouter, createWebHistory } from "vue-router";
import HomePage from "./Pages/HomePage.vue";
import TestPage from "./Pages/TestPage.vue";

const routes = [
    {
        path: "/",
        component: () => HomePage,
    },
    {
        path: "/test",
        component: () => TestPage,
    },
];

export default createRouter({
    history: createWebHistory(),
    routes,
});