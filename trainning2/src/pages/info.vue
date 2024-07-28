<template>
    <v-sheet class="bg-blue-grey-lighten-5 pa-12 h-screen " rounded >
      <v-card class="mx-auto px-6 py-8" max-hight="700" max-width="544">
   
        <v-avatar  size="80" class="mb-10"><v-img
        alt="John"
        src="https://cdn.vuetifyjs.com/images/john.jpg"
      ></v-img></v-avatar>
  
          <br>
          <br>
  
    <v-row justify="center">
  
  
      <v-col
      
      >
        <v-card
          color="indigo"
          class="mx-auto"
        >
          <v-card-item>
            <div>
              <div class="text-overline mb-1">
              </div>
              <div class="text-h10 mb-1">
                Name :  John
              </div>
              <div class="text-h10 mb-1">
                UserName :  JohnEdward
              </div>
              <div class="text-h10 mb-1">
                Gender :  Male
              </div>
              <div class="text-caption">Visited 24 country 120 to Visit</div>
              <div class="text-caption">Dont hisitate to text me </div>

            </div>
          </v-card-item>
  
          <v-card-actions>
            <v-btn @click="logOut()">
              LogOut
            </v-btn>
          </v-card-actions>
        </v-card>
      </v-col>
    </v-row>
  
  
         
      </v-card>
    </v-sheet>
  </template>
<script setup>
import { useRouter } from "vue-router";

const router = useRouter();

const logOut = ()=>{

router.push('/login')
}

</script>