import VueRouter from "vue-router";

import ExampleComponent from "./components/ExampleComponent";
import show from "./question/show"
import {index as home} from "vuex";
import index from "./question/index";

const routes = [
    {
      path: '/',
      component: home,
      name: 'index'
    },
    {
        path: '/question',
        component: index,
        name: 'question.index'
    },
    {
        path: "/question/show",
        component: show,
        name: "question.show"
    },
    {
        path: "/ex",
        component: ExampleComponent,
        name: "ex"
    }
]

const router = new VueRouter({
    mode: 'history',
    routes, //short for `routes:routes`
});


export default router;
