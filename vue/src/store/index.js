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
        categories: {
            data: {},
        },
        itemCategoryList: {
            data: {},
            loading: false,
        },
        subcategoryList: {
            data: {},
            loading: false,
        },
        foods: {},
        drinks:{},
        categories_store: [...tmpcategories],
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
        
        itemCategoryList_store: [
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
                    img_path: "http://localhost:8000/images/items/99-Meals-And-Single-Orders/99-meals-porkchop-with-rice.png",
                },
                {
                    id: 2,
                    name: "Pork Kawali with Rice",
                    price: 99.0,
                    img_path: "http://localhost:8000/images/items/99-Meals-And-Single-Orders/99-meals-pork-kawali-with-rice.png"
                },
                {
                    id: 3,
                    name: "Pork Sinigang with Rice",
                    price: 99.0,
                    img_path: "http://localhost:8000/images/items/99-Meals-And-Single-Orders/99-meals-pork-sinigang-with-rice.png"
                },
                {
                    id: 4,
                    name: "Bangus Daing with Rice",
                    price: 99.0,
                    img_path: "http://localhost:8000/images/items/99-Meals-And-Single-Orders/99-meals-bangus-daing-with-rice.png"
                },
                {
                    id: 5,
                    name: "Butter Chicken with Rice",
                    price: 99.0,
                    img_path: "http://localhost:8000/images/items/99-Meals-And-Single-Orders/99-meals-butter-chicken-with-rice.png"
                },
                {
                    id: 6,
                    name: "Sweet & Sour Chicken with Rice",
                    price: 99.0,
                    img_path: "http://localhost:8000/images/items/99-Meals-And-Single-Orders/99-meals-sweet-and-sour-chicken-with-rice.png"
                },
            ],
            "Single Orders": [
                {
                    id: 7, 
                    name: "Shrimp Gambas",
                    price: 200.0,
                    img_path: "http://localhost:8000/images/items/99-Meals-And-Single-Orders/single-orders-shrimp-gambas.png"
                },
                {
                    id: 8,
                    name: "Buttered Chicken Half",
                    price: 279.0,
                    img_path: "http://localhost:8000/images/items/99-Meals-And-Single-Orders/single-orders-buttered-chicken-half.png"
                },
                {
                    id: 9,
                    name: "Chicken Kawali",
                    price: 280.0,
                    img_path: "http://localhost:8000/images/items/99-Meals-And-Single-Orders/single-orders-chicken-kawali.png"
                },
                {
                    id: 10,
                    name: "Crispy Pata Family",
                    price: 525.0,
                    img_path: "http://localhost:8000/images/items/99-Meals-And-Single-Orders/single-orders-crispy-pata-family.png"
                },
                {
                    id: 11,
                    name: "Bam.E",
                    price: 180.0,
                    img_path: "http://localhost:8000/images/items/99-Meals-And-Single-Orders/single-orders-bame.png"
                },
                {
                    id: 12,
                    name: "Chicken and Fries",
                    price: 150.0,
                    img_path: "http://localhost:8000/images/items/99-Meals-And-Single-Orders/single-orders-chicken-and-fries.png"
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
                { id:13, name: "Pork Sinigang", price: 249.0, img_path: "http://localhost:8000/images/items/Soup/pork-sinigang.png" },
                { id:14, name: "Shrimp Sinigang", price: 229.0, img_path: "http://localhost:8000/images/items/Soup/shrimp-sinigang.png" },
                { id:15, name: "Bulalo Family", price: 389.0, img_path: "http://localhost:8000/images/items/Soup/bulalo-family.png" },
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
                { id: 16, name: "Pepperoni", price: 280.0, img_path: "http://localhost:8000/images/items/Pizza-And-Pasta/pizza-pepperoni.png" },
                { id: 17, name: "Hawaiian", price: 280.0, img_path: "http://localhost:8000/images/items/Pizza-And-Pasta/pizza-hawaiian.png" },
                { id: 18, name: "3 Cheese Pizza", price: 300.0, img_path: "http://localhost:8000/images/items/Pizza-And-Pasta/pizza-3-cheese-family.png" },
                { id: 19, name: "Beef and Mushroom", price: 320.0, img_path: "http://localhost:8000/images/items/Pizza-And-Pasta/pizza-beef-and-mushroom.png" },
                { id: 20, name: "Margaritta", price: 280.0, img_path: "http://localhost:8000/images/items/Pizza-And-Pasta/pizza-margaritta.png" },
            ],
            "Paradise Pasta": [
                { id: 21, name: "Carbonara", price: 170.0, img_path: "http://localhost:8000/images/items/Pizza-And-Pasta/pasta-carbonara.png" },
                { id: 22, name: "Spaghetti", price: 150.0, img_path: "http://localhost:8000/images/items/Pizza-And-Pasta/pasta-spaghetti.png" },
                { id: 23, name: "Lasagna", price: 180.0, img_path: "http://localhost:8000/images/items/Pizza-And-Pasta/pasta-lasagna.png" },
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
                { id: 24, name: "Chicken Burger w/ Fries", price: 150.0, img_path: "http://localhost:8000/images/items/Sandwiches/chicken-burger-with-fries.png" },
                { id: 25, name: "Beef Burger w/ Fries", price: 160.0, img_path: "http://localhost:8000/images/items/Sandwiches/beef-burger-with-fries.png" },
                { id: 26, name: "Clubhouse", price: 150.0, img_path: "http://localhost:8000/images/items/Sandwiches/clubhouse.png" },
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
                { id: 27, name: "Nachos", price: 120.0, img_path: "http://localhost:8000/images/items/Sides-And-Add-Ons/sides-nachos.png" },
                { id: 28, name: "Fries", price: 100.0, img_path: "http://localhost:8000/images/items/Sides-And-Add-Ons/sides-fries.png" },
            ],
            "Add Ons": [
                { id: 29, name: "Rice", price: 20.0, img_path: "http://localhost:8000/images/items/Sides-And-Add-Ons/add-ons-rice.png" },
                { id: 30, name: "Rice Platter", price: 120.0, img_path: "http://localhost:8000/images/items/Sides-And-Add-Ons/add-ons-rice-platter.png" },
                { id: 31, name: "Garlic Fried Rice", price: 160.0, img_path: "http://localhost:8000/images/items/Sides-And-Add-Ons/add-ons-garlic-fried-rice.png" },
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
                { id: 32, name: "Classic", price: 80.0 , img_path: "http://localhost:8000/images/items/Milktea-And-Frappe/milktea-classic.png"},
                { id: 33, name: "Taro", price: 89.0 , img_path: "http://localhost:8000/images/items/Milktea-And-Frappe/milktea-taro.png"},
                { id: 34, name: "Thai", price: 89.0 , img_path: "http://localhost:8000/images/items/Milktea-And-Frappe/milktea-thai.png"},
                { id: 35, name: "Matcha", price: 89.0 , img_path: "http://localhost:8000/images/items/Milktea-And-Frappe/milktea-matcha.png"},
                { id: 36, name: "Wintermelon", price: 89.0 , img_path: "http://localhost:8000/images/items/Milktea-And-Frappe/milktea-wintermelon.png"},
                { id: 37, name: "Okinawa", price: 89.0 , img_path: "http://localhost:8000/images/items/Milktea-And-Frappe/milktea-okinawa.png"},
                { id: 38, name: "Dark Chocolate", price: 89.0 , img_path: "http://localhost:8000/images/items/Milktea-And-Frappe/milktea-dark-chocolate.png"},
            ],
            Cheesecake: [
                { id: 39, name: "Pearl Milktea", price: 110.0, img_path: "http://localhost:8000/images/items/Milktea-And-Frappe/cheesecake-pearl-milktea.png"},
                { id: 40, name: "Nutella", price: 115.0, img_path: "http://localhost:8000/images/items/Milktea-And-Frappe/cheesecake-nutella.png"},
                { id: 41, name: "Oreo", price: 115.0, img_path: "http://localhost:8000/images/items/Milktea-And-Frappe/cheesecake-oreo.png"},
            ],
            "Cream Cheese": [
                { id: 42, name: "Taro", price: 100.0 , img_path: "http://localhost:8000/images/items/Milktea-And-Frappe/cream-cheese-taro.png"},
                { id: 43, name: "Dark Chocolate", price: 100.0 , img_path: "http://localhost:8000/images/items/Milktea-And-Frappe/cream-cheese-dark-chocolate.png"},
                { id: 44, name: "Thai", price: 100.0 , img_path: "http://localhost:8000/images/items/Milktea-And-Frappe/cream-cheese-thai.png"},
                { id: 45, name: "Matcha", price: 100.0 , img_path: "http://localhost:8000/images/items/Milktea-And-Frappe/cream-cheese-matcha.png"},
            ],
            Frappe: [
                { id: 46, name: "Red Velvet", price: 120.0, img_path: "http://localhost:8000/images/items/Milktea-And-Frappe/frappe-red-velvet.png"},
                { id: 47, name: "Cookies & Cream", price: 120.0, img_path: "http://localhost:8000/images/items/Milktea-And-Frappe/frappe-oreo.png"},
                { id: 48, name: "Dark Chocolate", price: 120.0, img_path: "http://localhost:8000/images/items/Milktea-And-Frappe/frappe-dark-chocolate.png"},
                { id: 49, name: "Creamy Taro", price: 120.0, img_path: "http://localhost:8000/images/items/Milktea-And-Frappe/frappe-creamy-taro.png"},
                { id: 50, name: "Mint Chocolate", price: 120.0, img_path: "http://localhost:8000/images/items/Milktea-And-Frappe/frappe-mint-chocolate.png"},
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
                { id: 51, name: "Mixed Berries", price: 140.0, img_path: "http://localhost:8000/images/items/Smoothies-And-Milkshake/smoothies-mixed-berries.png" },
                { id: 52, name: "Avocado Mango", price: 150.0, img_path: "http://localhost:8000/images/items/Smoothies-And-Milkshake/smoothies-avocado-mango.png" },
            ],
            "Paradise Milkshake": [
                { id: 53, name: "Strawberry", price: 120.0, img_path: "http://localhost:8000/images/items/Smoothies-And-Milkshake/milkshake-strawberry.png" },
                { id: 54, name: "Blueberry", price: 120.0, img_path: "http://localhost:8000/images/items/Smoothies-And-Milkshake/milkshake-blueberry.png" },
                { id: 55, name: "Chocolate", price: 120.0, img_path: "http://localhost:8000/images/items/Smoothies-And-Milkshake/milkshake-chocolate.png" },
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
                { id: 56, name: "Blueberry", price: 100.0, img_path: "http://localhost:8000/images/items/Yogurt-And-Coffee/yogurt-blueberry.png" },
                { id: 57, name: "Strawberry", price: 100.0, img_path: "http://localhost:8000/images/items/Yogurt-And-Coffee/yogurt-strawberry.png" },
                { id: 58, name: "Mango", price: 100.0, img_path: "http://localhost:8000/images/items/Yogurt-And-Coffee/yogurt-mango.png" },
            ],
            "Paradise Coffee": [
                { id: 59, name: "Cafe Latte", price: 100.0, img_path: "http://localhost:8000/images/items/Yogurt-And-Coffee/coffee-cafe-latte.png" },
                { id: 60, name: "Americano", price: 100.0, img_path: "http://localhost:8000/images/items/Yogurt-And-Coffee/coffee-americano.png" },
                { id: 61, name: "Cafe Matcha", price: 100.0, img_path: "http://localhost:8000/images/items/Yogurt-And-Coffee/coffee-cafe-mocha.png" },
                { id: 62, name: "Caramel Machiatto", price: 100.0, img_path: "http://localhost:8000/images/items/Yogurt-And-Coffee/coffee-caramel-machiatto.png" },
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
                { id: 63, name: "Melon Pop", price: 150.0, img_path: "http://localhost:8000/images/items/Lemonade-And-Fruitea/lemonade-melon-pop.png" },
                { id: 64, name: "Ocean", price: 120.0, img_path: "http://localhost:8000/images/items/Lemonade-And-Fruitea/lemonade-ocean.png" },
                { id: 65, name: "Cucumber", price: 130.0, img_path: "http://localhost:8000/images/items/Lemonade-And-Fruitea/lemonade-cucumber.png" },
                { id: 66, name: "Green Grape Ade", price: 120.0, img_path: "http://localhost:8000/images/items/Lemonade-And-Fruitea/lemonade-green-grape-ade.png" },
                { id: 67, name: "Lychee", price: 120.0, img_path: "http://localhost:8000/images/items/Lemonade-And-Fruitea/lemonade-lychee.png" },
                { id: 68, name: "Grapefruit", price: 120.0, img_path: "http://localhost:8000/images/items/Lemonade-And-Fruitea/lemonade-grapefruit.png" },
                { id: 69, name: "Honey Peach", price: 120.0, img_path: "http://localhost:8000/images/items/Lemonade-And-Fruitea/lemonade-honey-peach.png" },
            ],
            Fruitea: [
                { id: 70, name: "Passion Fruit", price: 100.0, img_path: "http://localhost:8000/images/items/Lemonade-And-Fruitea/fruitea-passion-fruit.png" },
                { id: 71, name: "Peach Mango", price: 100.0, img_path: "http://localhost:8000/images/items/Lemonade-And-Fruitea/fruitea-peach-mango.png" },
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
                { id: 72, name: "Lemonade", price: 100.0, img_path: "http://localhost:8000/images/items/Others/lemonade.png" },
                { id: 73, name: "Four Seasons", price: 60.0, img_path: "http://localhost:8000/images/items/Others/four-seasons.png" },
                { id: 74, name: "Iced Tea", price: 60.0, img_path: "http://localhost:8000/images/items/Others/icetea.png" },
                { id: 75, name: "Coke", price: 20.0, img_path: "http://localhost:8000/images/items/Others/coke.png" },
                { id: 76, name: "Sprite", price: 20.0, img_path: "http://localhost:8000/images/items/Others/sprite.png" },
                { id: 77, name: "San Mig Light", price: 55.0, img_path: "http://localhost:8000/images/items/Others/san-mig-light.png" },
                { id: 78, name: "San Mig Flavored", price: 55.0, img_path: "http://localhost:8000/images/items/Others/san-mig-flavored.png" },
                { id: 79, name: "San Mig Pilsen Small", price: 60.0, img_path: "http://localhost:8000/images/items/Others/san-mig-pilsen-small.png" },
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

  loadItemcategory({ commit }, id){
    commit('itemcategory_loading', true)
    return axiosClient.get("/item-category/" + id)
    .then(({data}) => {
        commit('itemcategory_loading', false)
        commit('setItemcategoryList',data.data)
        return data;
    })
  },
  
  getSubcategories({ commit }){
    return axiosClient.get("/subcategory")
    .then(({data}) => {
        commit('setCategory',data.data)
        return data;
    })
  },
  saveItem: ({commit}, data) => {
      delete data.image;
      let response;
      if (data.id) {
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

  itemcategory_loading (state, loading) {
    state.itemCategoryList.loading = loading
},

  setItemcategoryList (state, data) {
    state.itemCategoryList.data = data
  },

  addItem(state, data) {
        // convert object to array
        // let items = Object.values(data);

        // let itemCat_name = state.itemCategoryList.filter(function(item){
        //     return item.id == items[0].itemCat_id          
        //     })[0].name;

        // let ndx = items[0].subcat_id - 1;
        
        // state.categories[ndx].items[itemCat_name].push(items[0]);
        
        // console.log(items[0]);
        // console.log(items[0].subcat_id);
        // console.log(itemCat_name);
        // console.log(state.categories[ndx].items[itemCat_name])
    },        
    updateItem(state, data) {
        let itemCat_name = state.itemCategoryList.filter(function(item){
            return item.id == data[0].itemCat_id          
            })[0].name;
            
            let ndx = data[0].subcat_id - 1;
            
            //destructure data[0]
            let newObject = {
                id: data[0].id,
                name: data[0].item_name,
                price: data[0].price,
                itemCat_id: data[0].itemCat_id,
                subcat_id: data[0].subcat_id,
                img_path: data[0].img_path
            }
            // state.categories[ndx].items[itemCat_name].push(newObject);
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
    },
    setCategory(state, data){
        state.categories.data = data;
        state.foods = data.filter(
            (c) => c.category == "Food"
        );
        state.drinks = data.filter(
            (c) => c.category == "Drinks"
        );
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
