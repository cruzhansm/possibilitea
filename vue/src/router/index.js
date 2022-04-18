import { createRouter, createWebHistory } from "vue-router";
import App from "../App.vue";
import Login from "../pages/Login.vue";
import Navigation from "../pages/Navigation.vue";
import POS from "../pages/POS.vue";
import ItemMenu from "../pages/Nested/ItemMenu.vue";
import Dashboard from "../pages/Dashboard.vue";
import DashboardSummary from "../pages/Nested/DashboardSummary.vue";
import ListingManagement from "../pages/Nested/ListingManagement.vue";
import AccountCreation from "../pages/AccountCreation.vue";

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
    {
        path: "/dashboard",
        name: "dashboard",
        component: Dashboard,
        children: [
            {
                path: "/summary",
                name: "dashboard-summary",
                component: DashboardSummary,
            },
            {
                path: "/listing-management",
                name: "listing-management",
                component: ListingManagement,
            },
        ],
    },
        path: "/create-account",
        name: "account-creation",
        component: AccountCreation,
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes: routes,
});

export default router;
