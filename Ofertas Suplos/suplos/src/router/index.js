import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import Crear_oferta from '../components/Crear_oferta.vue'
import Listar_oferta from '../components/Listar_oferta.vue'
import Editar_oferta from '../components/Editar_oferta.vue'

const routes = [
  {
    path: '/',
    name: 'home',
    component: HomeView
  },
  {
    path: '/crear_oferta',
    name: 'Crear_oferta',
    component: Crear_oferta
  },
  {
    path: '/listar_oferta',
    name: 'Listar_oferta',
    component: Listar_oferta
  },
  {
    path: '/editar_oferta/:id_ofertas',
    name: 'Editar_oferta',
    component: Editar_oferta
  },
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
