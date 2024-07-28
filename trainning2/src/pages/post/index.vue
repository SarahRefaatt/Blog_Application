<template>
    <v-container fluid>
  <!--    <div v-if ="!$vuetify.display.mobile">

        llhlih
        
      </div>

      <div v-else>
        mobile
      </div>
    -->
      <v-container>
        <v-row>
          <v-col cols="12" lg="4" sm="12" xs="12" offset-lg="4">


        <v-card v-for="(item, i) in cards" :key="i" class="mb-4" variant="outlined">
        <v-img height="128" :src="item.img_url" alt="Cuba Image" cover></v-img>
  
        <v-card-title>
          <div class="headline">{{ item.title }}</div>
          <div class="subtitle-1 grey--text">{{ item.subtitle }}</div>
        </v-card-title>
  
        <v-card-text>
         {{ item.dis }}
        </v-card-text>
  
        <v-card-actions>
          <v-btn color="primary" @click="viewMore(i)"  class="mr-4">View More</v-btn>
          <v-btn color="primary" >See in Map</v-btn>
        </v-card-actions>
      </v-card>
  


          </v-col>
        </v-row>
      </v-container>

      <!-- Card 1 -->
      
    </v-container>
  </template>
  
<script setup>

import {cards} from "@/plugins/cards.js"
import { useRouter } from "vue-router";

const router = useRouter();


const viewMore = (i)=>{

  router.push('/post/' + i)
}



</script>