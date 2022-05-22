import { createStore } from "vuex";
import axiosClient from "../axios";

const store = createStore({
    state: {
        user:{
            data:{},
            token: sessionStorage.getItem("TOKEN")
        },
        categories: [
            {
                name: "99 Meals & Single Orders",
                category: "Food",
                active: false,
                items: {
                    "99 Meals": [
                        {
                            name: "Porkchop with Rice",
                            price: 99.0,
                        },
                        {
                            name: "Pork Kawali with Rice",
                            price: 99.0,
                        },
                        {
                            name: "Pork Sinigang with Rice",
                            price: 99.0,
                        },
                        {
                            name: "Bangus Daing with Rice",
                            price: 99.0,
                        },
                        {
                            name: "Butter Chicken with Rice",
                            price: 99.0,
                        },
                        {
                            name: "Sweet & Sour Chicken with Rice",
                            price: 99.0,
                        },
                    ],
                    "Single Orders": [
                        {
                            name: "Shrimp Gambas",
                            price: 200.0,
                        },
                        {
                            name: "Buttered Chicken Half",
                            price: 279.0,
                        },
                        {
                            name: "Chicken Kawali",
                            price: 280.0,
                        },
                        {
                            name: "Crispy Pata Family",
                            price: 525.0,
                        },
                        {
                            name: "Bam.E",
                            price: 180.0,
                        },
                        {
                            name: "Chicken and Fries",
                            price: 150.0,
                        },
                    ],
                },
            },
            {
                name: "Soup",
                category: "Food",
                active: false,
                items: {
                    Soup: [
                        { name: "Pork Sinigang", price: 249.0 },
                        { name: "Shrimp Sinigang", price: 229.0 },
                        { name: "Bulalo Family", price: 389.0 },
                    ],
                },
            },
            {
                name: "Pizza & Pasta",
                category: "Food",
                active: false,
                items: {
                    "Paradise Pizza": [
                        { name: "Pepperoni", price: 280.0 },
                        { name: "Hawaiian", price: 280.0 },
                        { name: "3 Cheese Pizza", price: 300.0 },
                        { name: "Beef and Mushroom", price: 320.0 },
                        { name: "Margaritta", price: 280.0 },
                    ],
                    "Paradise Pasta": [
                        { name: "Carbonara", price: 170.0 },
                        { name: "Spaghetti", price: 150.0 },
                        { name: "Lasagna", price: 180.0 },
                    ],
                },
            },
            {
                name: "Sandwiches",
                category: "Food",
                active: false,
                items: {
                    "Paradise Sandwich": [
                        { name: "Chicken Burger w/ Fries", price: 150.0 },
                        { name: "Beef Burger w/ Fries", price: 160.0 },
                        { name: "Clubhouse", price: 150.0 },
                    ],
                },
            },
            {
                name: "Sides & Add Ons",
                category: "Food",
                active: false,
                items: {
                    Sides: [
                        { name: "Nachos", price: 120.0 },
                        { name: "Fries", price: 100.0 },
                    ],
                    "Add Ons": [
                        { name: "Rice", price: 20.0 },
                        { name: "Rice Platter", price: 120.0 },
                        { name: "Garlic Fried Rice", price: 160.0 },
                    ],
                },
            },
            {
                name: "Milktea & Frappe",
                category: "Drinks",
                active: false,
                items: {
                    Milktea: [
                        { name: "Classic", price: 80.0 },
                        { name: "Taro", price: 89.0 },
                        { name: "Thai", price: 89.0 },
                        { name: "Matcha", price: 89.0 },
                        { name: "Wintermelon", price: 89.0 },
                        { name: "Okinawa", price: 89.0 },
                        { name: "Dark Chocolate", price: 89.0 },
                    ],
                    Cheesecake: [
                        { name: "Pearl Milktea", price: 110.0 },
                        { name: "Nutella", price: 115.0 },
                        { name: "Oreo", price: 115.0 },
                    ],
                    "Cream Cheese": [
                        { name: "Taro", price: 100.0 },
                        { name: "Dark Chocolate", price: 100.0 },
                        { name: "Thai", price: 100.0 },
                        { name: "Matcha", price: 100.0 },
                    ],
                    Frappe: [
                        { name: "Red Velvet", price: 120.0 },
                        { name: "Cookies & Cream", price: 120.0 },
                        { name: "Dark Chocolate", price: 120.0 },
                        { name: "Creamy Taro", price: 120.0 },
                        { name: "Mint Chocolate", price: 120.0 },
                    ],
                },
            },
            {
                name: "Smoothies & Milkshake",
                category: "Drinks",
                active: false,
                items: {
                    Smoothies: [
                        { name: "Mixed Berries", price: 140.0 },
                        { name: "Avocado Mango", price: 150.0 },
                    ],
                    "Paradise Milkshake": [
                        { name: "Strawberry", price: 120.0 },
                        { name: "Blueberry", price: 120.0 },
                        { name: "Chocolate", price: 120.0 },
                    ],
                },
            },
            {
                name: "Yogurt & Coffee",
                category: "Drinks",
                active: false,
                items: {
                    "Paradise Yogurt": [
                        { name: "Blueberry", price: 100.0 },
                        { name: "Strawberry", price: 100.0 },
                        { name: "Mango", price: 100.0 },
                    ],
                    "Paradise Coffee": [
                        { name: "Cafe Latte", price: 100.0 },
                        { name: "Americano", price: 100.0 },
                        { name: "Cafe Matcha", price: 100.0 },
                        { name: "Caramel Machiatto", price: 100.0 },
                    ],
                },
            },
            {
                name: "Lemonade & Fruitea",
                category: "Drinks",
                active: false,
                items: {
                    "Paradise Lemonade": [
                        { name: "Melon Pop", price: 150.0 },
                        { name: "Ocean", price: 120.0 },
                        { name: "Cucumber", price: 130.0 },
                        { name: "Green Grape Ade", price: 120.0 },
                        { name: "Lychee", price: 120.0 },
                        { name: "Grapefruit", price: 120.0 },
                        { name: "Honey Peach", price: 120.0 },
                    ],
                    Fruitea: [
                        { name: "Passion Fruit", price: 100.0 },
                        { name: "Peach Mango", price: 100.0 },
                    ],
                },
            },
            {
                name: "Others",
                category: "Drinks",
                active: false,
                items: {
                    "Other Drinks": [
                        { name: "Lemonade", price: 100.0 },
                        { name: "Four Seasons", price: 60.0 },
                        { name: "Iced Tea", price: 60.0 },
                        { name: "Coke", price: 20.0 },
                        { name: "Sprite", price: 20.0 },
                        { name: "San Mig Light", price: 55.0 },
                        { name: "San Mig Flavored", price: 55.0 },
                        { name: "San Mig Pilsen Small", price: 60.0 },
                    ],
                },
            },
        ],
        addons: [
            "Tapioca",
            "Nata",
            "Oreo",
            "Coffee Jelly",
            "Pudding",
            "Red Bean",
            "Cream Cheese",
            "Cheese Cake",
        ],
        cart: [
            {
                name: "Dark Chocolate",
                category: "Milktea",
                quantity: 1,
                size: "22oz",
                sugar: "50%",
                price: 149.0,
                adds: ["Tapioca", "Red Bean", "Cream Cheese"],
            },
            {
                name: "Dark Chocolate",
                category: "Milktea",
                quantity: 1,
                size: "22oz",
                sugar: "50%",
                price: 149.0,
                adds: ["Tapioca", "Red Bean", "Cream Cheese"],
            },
            {
                name: "Dark Chocolate",
                category: "Milktea",
                quantity: 1,
                size: "22oz",
                sugar: "50%",
                price: 149.0,
                adds: ["Tapioca", "Red Bean", "Cream Cheese"],
            },
            {
                name: "Dark Chocolate",
                category: "Milktea",
                quantity: 1,
                size: "22oz",
                sugar: "50%",
                price: 149.0,
                adds: ["Tapioca", "Red Bean", "Cream Cheese"],
            },
            {
                name: "Dark Chocolate",
                category: "Milktea",
                quantity: 1,
                size: "22oz",
                sugar: "50%",
                price: 149.0,
                adds: ["Tapioca", "Red Bean", "Cream Cheese"],
            },
            {
                name: "Dark Chocolate",
                category: "Milktea",
                quantity: 1,
                size: "22oz",
                sugar: "50%",
                price: 149.0,
                adds: ["Tapioca", "Red Bean", "Cream Cheese"],
            },
            {
                name: "Dark Chocolate",
                category: "Milktea",
                quantity: 1,
                size: "22oz",
                sugar: "50%",
                price: 149.0,
                adds: ["Tapioca", "Red Bean", "Cream Cheese"],
            },
            {
                name: "Dark Chocolate",
                category: "Milktea",
                quantity: 1,
                size: "22oz",
                sugar: "50%",
                price: 149.0,
                adds: ["Tapioca", "Red Bean", "Cream Cheese"],
            },
            {
                name: "Dark Chocolate",
                category: "Milktea",
                quantity: 1,
                size: "22oz",
                sugar: "50%",
                price: 149.0,
                adds: ["Tapioca", "Red Bean", "Cream Cheese"],
            },
            {
                name: "Dark Chocolate",
                category: "Milktea",
                quantity: 1,
                size: "22oz",
                sugar: "50%",
                price: 149.0,
                adds: ["Tapioca", "Red Bean", "Cream Cheese"],
            },
            {
                name: "Dark Chocolate",
                category: "Milktea",
                quantity: 1,
                size: "22oz",
                sugar: "50%",
                price: 149.0,
                adds: ["Tapioca", "Red Bean", "Cream Cheese"],
            },
            {
                name: "Dark Chocolate",
                category: "Milktea",
                quantity: 1,
                size: "22oz",
                sugar: "50%",
                price: 149.0,
                adds: ["Tapioca", "Red Bean", "Cream Cheese"],
            },
        ],
    },
    getters: {},
    actions: {
        register({commit}, user) {
            return axiosClient.post("/register", user)
                .then(({data}) => {
                    commit("setUser", data)
                    return data;
                })
            },
        login({commit}, user) {
            return axiosClient.post("/login", user)
                .then(({data}) => {
                    commit("setUser", data)
                    return data;
                })
            },
        logout({commit}) {
            return axiosClient.post("/logout")
                .then(response => {
                    commit("logout")
                    return response;
                    })
            } 
        
    },
    mutations: {
        setUser(state, userData) {
            state.user.data = userData.user;
            state.user.token = userData.token;
            sessionStorage.setItem("TOKEN", userData.token);
        },
        
        logout : (state) => {
            state.user.data = {};
            state.user.token = null;
            sessionStorage.removeItem("TOKEN");
        }
    },
    modules: {},
});

export default store;
