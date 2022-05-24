import { createStore } from "vuex";
import axiosClient from "../axios";
import createPersistedState from "vuex-persistedstate";
import { data } from "autoprefixer";

const getDefaultState = () => {
    return {
        user:{
            data:{},
            token: sessionStorage.getItem("TOKEN")
        },
        categories: [...tmpcategories],
        subcategoryList: [
            { id: 1,  name: "99 Meals & Single Orders",},
            { id: 2,  name: "Soup",},
            { id: 3,  name: "Pizza & Pasta",},
            { id: 4,  name: "Sandwiches",},
            { id: 5,  name: "Sides & Add Ons",},
            { id: 6,  name: "Milktea & Frappe",},
            { id: 7,  name: "Smoothies & Milkshake",},
            { id: 8,  name: "Yogurt & Coffee",},
            { id: 9,  name: "Lemonade & Fruitea",},
            { id: 10, name: "Others",},

        ],
        itemCategoryList: [
            {id: 1,  name: "99 Meals" },
            {id: 2,  name: "Single Orders" },
            {id: 3,  name: "Soup" },
            {id: 4,  name: "Paradise Pizza" },
            {id: 5,  name: "Paradise Pasta" },
            {id: 6,  name: "Paradise Sandwich" },
            {id: 7,  name: "Sides" },
            {id: 8,  name: "Add Ons" },
            {id: 9,  name: "Milktea" },
            {id: 10, name: "Cheesecake" },
            {id: 11, name: "Cream Cheese" },
            {id: 12, name: "Frappe" },
            {id: 13, name: "Smoothies" },
            {id: 14, name: "Paradise Milkshake" },
            {id: 15, name: "Paradise Yogurt" },
            {id: 16, name: "Paradise Coffee" },
            {id: 17, name: "Paradise Lemonade" },
            {id: 18, name: "Fruitea" },
            {id: 19, name: "Other Drinks" }
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
        ]
    }
  }


const tmpcategories =  [
    {   
        id: 1,
        name: "99 Meals & Single Orders",
        category: "Food",
        active: false,
        items: {
            "99 Meals": [
                {
                    id: 1,
                    name: "Porkchop with Rice",
                    price: 99.0,
                    img_path: "https://www.99meals.com/wp-content/uploads/2019/01/porkchop-with-rice-1.jpg",
                },
                {
                    id: 2,
                    name: "Pork Kawali with Rice",
                    price: 99.0,
                    img_path: ""
                },
                {
                    id: 3,
                    name: "Pork Sinigang with Rice",
                    price: 99.0,
                    img_path: ""
                },
                {
                    id: 4,
                    name: "Bangus Daing with Rice",
                    price: 99.0,
                    img_path: ""
                },
                {
                    id: 5,
                    name: "Butter Chicken with Rice",
                    price: 99.0,
                    img_path: ""
                },
                {
                    id: 6,
                    name: "Sweet & Sour Chicken with Rice",
                    price: 99.0,
                    img_path: ""
                },
            ],
            "Single Orders": [
                {
                    id: 7, 
                    name: "Shrimp Gambas",
                    price: 200.0,
                    img_path: ""
                },
                {
                    id: 8,
                    name: "Buttered Chicken Half",
                    price: 279.0,
                    img_path: ""
                },
                {
                    id: 9,
                    name: "Chicken Kawali",
                    price: 280.0,
                    img_path: ""
                },
                {
                    id: 10,
                    name: "Crispy Pata Family",
                    price: 525.0,
                    img_path: ""
                },
                {
                    id: 11,
                    name: "Bam.E",
                    price: 180.0,
                    img_path: ""
                },
                {
                    id: 12,
                    name: "Chicken and Fries",
                    price: 150.0,
                    img_path: ""
                },
            ],
        },
    },
    {
        id: 2,
        name: "Soup",
        category: "Food",
        active: false,
        items: {
            Soup: [
                { id:13, name: "Pork Sinigang", price: 249.0, img_path: "" },
                { id:14, name: "Shrimp Sinigang", price: 229.0, img_path: "" },
                { id:15, name: "Bulalo Family", price: 389.0, img_path: "" },
            ],
        },
    },
    {
        id: 3,
        name: "Pizza & Pasta",
        category: "Food",
        active: false,
        items: {
            "Paradise Pizza": [
                { id: 16, name: "Pepperoni", price: 280.0, img_path: "" },
                { id: 17, name: "Hawaiian", price: 280.0, img_path: "" },
                { id: 18, name: "3 Cheese Pizza", price: 300.0, img_path: "" },
                { id: 19, name: "Beef and Mushroom", price: 320.0, img_path: "" },
                { id: 20, name: "Margaritta", price: 280.0, img_path: "" },
            ],
            "Paradise Pasta": [
                { id: 21, name: "Carbonara", price: 170.0, img_path: "" },
                { id: 22, name: "Spaghetti", price: 150.0, img_path: "" },
                { id: 23, name: "Lasagna", price: 180.0, img_path: "" },
            ],
        },
    },
    {
        id: 4,
        name: "Sandwiches",
        category: "Food",
        active: false,
        items: {
            "Paradise Sandwich": [
                { id: 24, name: "Chicken Burger w/ Fries", price: 150.0, img_path: "" },
                { id: 25, name: "Beef Burger w/ Fries", price: 160.0, img_path: "" },
                { id: 26, name: "Clubhouse", price: 150.0, img_path: "" },
            ],
        },
    },
    {
        id: 5,
        name: "Sides & Add Ons",
        category: "Food",
        active: false,
        items: {
            Sides: [
                { id: 27, name: "Nachos", price: 120.0, img_path: "" },
                { id: 28, name: "Fries", price: 100.0, img_path: "" },
            ],
            "Add Ons": [
                { id: 29, name: "Rice", price: 20.0, img_path: "" },
                { id: 30, name: "Rice Platter", price: 120.0, img_path: "" },
                { id: 31, name: "Garlic Fried Rice", price: 160.0, img_path: "" },
            ],
        },
    },
    {
        id: 6,
        name: "Milktea & Frappe",
        category: "Drinks",
        active: false,
        items: {
            Milktea: [
                { id: 32, name: "Classic", price: 80.0 , img_path: ""},
                { id: 33, name: "Taro", price: 89.0 , img_path: ""},
                { id: 34, name: "Thai", price: 89.0 , img_path: ""},
                { id: 35, name: "Matcha", price: 89.0 , img_path: ""},
                { id: 36, name: "Wintermelon", price: 89.0 , img_path: ""},
                { id: 37, name: "Okinawa", price: 89.0 , img_path: ""},
                { id: 38, name: "Dark Chocolate", price: 89.0 , img_path: ""},
            ],
            Cheesecake: [
                { id: 39, name: "Pearl Milktea", price: 110.0, img_path: ""},
                { id: 40, name: "Nutella", price: 115.0, img_path: ""},
                { id: 41, name: "Oreo", price: 115.0, img_path: ""},
            ],
            "Cream Cheese": [
                { id: 42, name: "Taro", price: 100.0 , img_path: ""},
                { id: 43, name: "Dark Chocolate", price: 100.0 , img_path: ""},
                { id: 44, name: "Thai", price: 100.0 , img_path: ""},
                { id: 45, name: "Matcha", price: 100.0 , img_path: ""},
            ],
            Frappe: [
                { id: 46, name: "Red Velvet", price: 120.0, img_path: ""},
                { id: 47, name: "Cookies & Cream", price: 120.0, img_path: ""},
                { id: 48, name: "Dark Chocolate", price: 120.0, img_path: ""},
                { id: 49, name: "Creamy Taro", price: 120.0, img_path: ""},
                { id: 50, name: "Mint Chocolate", price: 120.0, img_path: ""},
            ],
        },
    },
    {
        id: 7,
        name: "Smoothies & Milkshake",
        category: "Drinks",
        active: false,
        items: {
            Smoothies: [
                { id: 51, name: "Mixed Berries", price: 140.0, img_path: "" },
                { id: 52, name: "Avocado Mango", price: 150.0, img_path: "" },
            ],
            "Paradise Milkshake": [
                { id: 53, name: "Strawberry", price: 120.0, img_path: "" },
                { id: 54, name: "Blueberry", price: 120.0, img_path: "" },
                { id: 55, name: "Chocolate", price: 120.0, img_path: "" },
            ],
        },
    },
    {
        id: 8,
        name: "Yogurt & Coffee",
        category: "Drinks",
        active: false,
        items: {
            "Paradise Yogurt": [
                { id: 56, name: "Blueberry", price: 100.0, img_path: "" },
                { id: 57, name: "Strawberry", price: 100.0, img_path: "" },
                { id: 58, name: "Mango", price: 100.0, img_path: "" },
            ],
            "Paradise Coffee": [
                { id: 59, name: "Cafe Latte", price: 100.0, img_path: "" },
                { id: 60, name: "Americano", price: 100.0, img_path: "" },
                { id: 61, name: "Cafe Matcha", price: 100.0, img_path: "" },
                { id: 62, name: "Caramel Machiatto", price: 100.0, img_path: "" },
            ],
        },
    },
    {
        id: 9,
        name: "Lemonade & Fruitea",
        category: "Drinks",
        active: false,
        items: {
            "Paradise Lemonade": [
                { id: 63, name: "Melon Pop", price: 150.0, img_path: "" },
                { id: 64, name: "Ocean", price: 120.0, img_path: "" },
                { id: 65, name: "Cucumber", price: 130.0, img_path: "" },
                { id: 66, name: "Green Grape Ade", price: 120.0, img_path: "" },
                { id: 67, name: "Lychee", price: 120.0, img_path: "" },
                { id: 68, name: "Grapefruit", price: 120.0, img_path: "" },
                { id: 69, name: "Honey Peach", price: 120.0, img_path: "" },
            ],
            Fruitea: [
                { id: 70, name: "Passion Fruit", price: 100.0, img_path: "" },
                { id: 71, name: "Peach Mango", price: 100.0, img_path: "" },
            ],
        },
    },
    {  
        id: 10,
        name: "Others",
        category: "Drinks",
        active: false,
        items: {
            "Other Drinks": [
                { id: 72, name: "Lemonade", price: 100.0, img_path: "" },
                { id: 73, name: "Four Seasons", price: 60.0, img_path: "" },
                { id: 74, name: "Iced Tea", price: 60.0, img_path: "" },
                { id: 75, name: "Coke", price: 20.0, img_path: "" },
                { id: 76, name: "Sprite", price: 20.0, img_path: "" },
                { id: 77, name: "San Mig Light", price: 55.0, img_path: "" },
                { id: 78, name: "San Mig Flavored", price: 55.0, img_path: "" },
                { id: 79, name: "San Mig Pilsen Small", price: 60.0, img_path: "" },
            ],
        },
    },
];


// initial state
const state = getDefaultState()

const actions = {
  resetCartState ({ commit }) {
    commit('resetState')
  },
  
  saveItem: ({commit}, data) => {
      
      let response;
      if (data.id) {
        let items = Object.values(data);
        response = axiosClient.put(`/items/${data.id}`, data).then((res) => {
            commit("updateItem", res.data)
            return res;
        });
    }else{
        response = axiosClient.post("/items", data).then((res) => {
                    commit("addItem", res.data)
                    return res;
        });
    }

    return response;
    },

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
}

const mutations = {
  resetState (state) {
    Object.assign(state, getDefaultState())
  },
  addItem(state, data) {
        // convert object to array
        let items = Object.values(data);

        let itemCat_name = state.itemCategoryList.filter(function(item){
            return item.id == items[0].itemCat_id          
            })[0].name;

        let ndx = items[0].subcat_id - 1;
        
        state.categories[ndx].items[itemCat_name].push(items[0]);
        
        // console.log(items[0]);
        // console.log(items[0].subcat_id);
        // console.log(itemCat_name);
        // console.log(state.categories[ndx].items[itemCat_name].name);
  },
        
    updateItem(state, data) {
        console.log(data);
    },

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
}

 const plugins = [createPersistedState()];

const store = createStore({
    state,
    getters: {},
    actions,
    mutations,
    modules: {},
    plugins,
});

export default store;
