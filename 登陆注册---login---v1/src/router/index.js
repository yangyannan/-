import Vue from 'vue'
import Router from 'vue-router'
import Login from '../components/Login'
import Main from '../components/Main'
import Zhu from '../components/Zhu'
Vue.use(Router)
export default new Router({
    routes:
    [
        {
            path:'/',
            component:Login,
        },
        {
            path:'/Main',
            name:Main,
            component:Main
        },
        {
            path:'/Zhu',
            name:Zhu,
            component:Zhu
        }
    ]
})