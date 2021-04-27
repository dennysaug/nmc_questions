require('./bootstrap');

import VueRouter from "vue-router";
import router from "./routes";
import Index from "./Index";
import ValidationErrors from "./components/ValidationErrors";
import Success from "./components/Success";

window.Vue = require('vue');

Vue.use(VueRouter);

Vue.component("v-errors", ValidationErrors);
Vue.component("v-success", Success);

const app = new Vue({
    el: '#app',
    router,
    components: {
        Index
    }
});

