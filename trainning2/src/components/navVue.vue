<template>
<layout class="h-screen">
      <v-app-bar
        color="blue-grey-lighten-5"
        prominent
      >
        <v-app-bar-nav-icon variant="text" @click.stop="drawer = !drawer"></v-app-bar-nav-icon>

        <v-toolbar-title>Blog | App</v-toolbar-title>

        <v-spacer></v-spacer>

       <!--<template v-if="$vuetify.display.mdAndUp">
          <v-btn icon="mdi-magnify" variant="text"></v-btn>

           
        </template>

      -->


        <v-menu
      open-on-hover
    >
      <template v-slot:activator="{ props }">
        <v-btn
          color="primary"
          v-bind="props"


          
        >
        <v-avatar>
      <v-img
        alt="John"
        src="https://cdn.vuetifyjs.com/images/john.jpg"
      ></v-img>
</v-avatar>        </v-btn>
      </template>

      <v-list>
        <v-list-item
          v-for="(inf, index) in info"
          :key="index"
          :to="inf.value" 
        >
          <v-list-item-title>{{ inf.title }}</v-list-item-title>
        </v-list-item>
      </v-list>
    </v-menu>




        <v-menu>
            <template v-slot:activator="{ props }">
              <v-btn icon="mdi-dots-vertical" v-bind="props"></v-btn>
            </template>

            <v-list>
              <v-list-item
                v-for="(item, i) in items"
                :key="i":to="item.value"
              >
                <v-list-item-title>
                  
                  <v-btn  >{{ item.title }}</v-btn>
                                
                
                </v-list-item-title>
              </v-list-item>
            </v-list>
          </v-menu>



      </v-app-bar>

      <v-navigation-drawer
        v-model="drawer"
        :location="$vuetify.display.mobile ? 'left' : undefined"
        temporary
      >
      <v-list>

        <v-list-item v-for="(item,i) in items ":key="i" :to="item.value" :prepend-icon="item.icon">

        <v-list-title> {{ item.title }}</v-list-title>


        </v-list-item>


      </v-list>
        

      </v-navigation-drawer>
    </layout>
</template>
<script setup>


import {cards} from "@/plugins/cards.js"
import { useRouter } from "vue-router";

const router = useRouter();


const viewMore = (i)=>{

  router.push('/post/' + i)
}

  import {ref,onMounted} from "vue";
  const drawer=ref(false);
  const items=ref([]);
  const info=ref([]);
  info.value=[
    
  {
    title:"info",
    value:"/info"

  },

  {
    title:"logout",
    value:"/login"

  },
  
]

  onMounted(()=>{
    

    items.value=[
    {
        title:"Home",
        icon:"mdi-home",
        value:"/",
    },
    {
        title:"About",
        icon:"mdi-information",

        value:"/about",
    },
    {
        title:"Post",
        icon:"mdi-plus-box-multiple",

        value:"/post",
    },
    

  ];


  

})

  
</script>