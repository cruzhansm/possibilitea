import { createRouter, createWebHistory } from "vue-router";
import App from "../App.vue";
import Login from "../pages/Login.vue";
import Navigation from "../pages/Navigation.vue";
import POS from "../pages/POS.vue";
import ItemMenu from "../pages/Nested/ItemMenu.vue";

const routes = [
    {
        path: "/",
        name: "home",
        component: App,
    },
    {
        path: "/login",
        name: "login",
        component: Login,
    },
    {
        path: "/navigation",
        name: "navigation",
        component: Navigation,
    },
    {
        path: "/pos",
        name: "pos",
        component: POS,
        children: [
            {
                path: "/:category",
                name: "menu",
                component: ItemMenu,
            },
        ],
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes: routes,
});

export default router;
