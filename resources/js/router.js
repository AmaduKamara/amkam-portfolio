import Vue from 'vue'
import Router from 'vue-router'

import Home from './pages/Home.vue'
import About from './pages/About.vue'
import Skills from './pages/Skills.vue'
import Portfolio from './pages/Portfolio.vue'
import Contact from './pages/Contact.vue'

Vue.use(Router)

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home
  },
  {
    path: '/about',
    name: 'About',
    component: About
  },
  {
    path: '/skills',
    name: 'Skills',
    component: Skills
  },
  {
    path: '/portfolio',
    name: 'Portfolio',
    component: Portfolio
  },
  {
    path: '/contact',
    name: 'Contact',
    component: Contact
  }
]

const router = new Router({
  routes,
  mode: 'history'
})

export default router