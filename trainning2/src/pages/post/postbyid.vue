<template>

    

    
    <v-card class="mb-4" variant="outlined">
        <v-img height="128" :src="card.img_url" alt="Cuba Image" cover></v-img>
  
        <v-card-title>
          <div class="headline">{{ card.title }}</div>
          <div class="subtitle-1 grey--text">{{ card.subtitle }}</div>
        </v-card-title>
  
        <v-card-text>
         {{ card.dis }}


         
      <v-timeline align="start" density="compact">
        <v-timeline-item
          v-for="(comment, i) in card.comments"
          :key="i"
          dot-color="red"
          size="x-small"
        >
          <div class="mb-4">
            <div class="font-weight-normal">
              <strong>{{ users[comment.postedBy].name }}</strong> @{{ comment.date }}
            </div>

            <div>{{ comment.text }}</div>
          </div>
        </v-timeline-item>

</v-timeline>
        
        </v-card-text>
  
      
      </v-card>



</template>

<script setup>

import {useRoute } from "vue-router"
import {cards, users} from "@/plugins/cards.js"

const card = cards[useRoute().params.id]

</script>