
/**
 * router/index.ts
 *
 * Automatic routes for `./src/pages/*.vue`
 */

// Composables
import { createRouter, createWebHistory } from 'vue-router/auto'
//import { routes } from 'vue-router/auto-routes'


const routes=[
  
        {
                path:'/',
                component:()=>import('@/pages/index.vue'),
                children:[
                  {
                  
                    path:'/',
                    name:'Home',
                    component:()=>import('@/pages/home.vue')
                  },
                  {
                  
                    path:'/about',
                    name:'About',
                    component:()=>import('@/pages/about.vue')
                  },
                  {
                  
                    path:'/post',
                    name:'Post',
                    component:()=>import('@/pages/post/index.vue')
                  },

                  {
                    path:'/post/:id',
                    name:'subpost',
                    component:()=>import('@/pages/post/postbyid.vue')
                  },
                  {
                  
                    path:'/info',
                    name:'Info',
                    component:()=>import('@/pages/info.vue')
                  },

                ]
        },
       

        {
                  
          path:'/register',
          name:'register',
          component:()=>import('@/pages/register.vue')
        },
        {
                  
          path:'/login',
          name:'login',
          component:()=>import('@/pages/login.vue')
        },
      
  
  ]
const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes,
})

/*
// Workaround for https://github.com/vitejs/vite/issues/11804
router.onError((err, to) => {
  if (err?.message?.includes?.('Failed to fetch dynamically imported module')) {
    if (!localStorage.getItem('vuetify:dynamic-reload')) {
      console.log('Reloading page to fix dynamic import error')
      localStorage.setItem('vuetify:dynamic-reload', 'true')
      location.assign(to.fullPath)
    } else {
      console.error('Dynamic import error, reloading page did not fix it', err)
    }
  } else {
    console.error(err)
  }
})*/

router.isReady().then(() => {
  localStorage.removeItem('vuetify:dynamic-reload')
})

export default router
