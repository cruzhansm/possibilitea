import { createApp } from "vue";
import App from "./App.vue";
import router from "./router";
import store from "./store";

/* Assets */
import FontAwesomeIcon from "./icons.js";
import "./assets/css/main.css";

createApp(App)
    .component("font-awesome-icon", FontAwesomeIcon)
    .use(router)
    .use(store)
    .mount("#app");
