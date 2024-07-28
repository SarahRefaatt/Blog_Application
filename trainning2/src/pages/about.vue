<template>
    <v-timeline side="end">
      <v-timeline-item
        v-for="item in items"
        :key="item.id"
        :dot-color="item.color"
        size="small"
      >
        <v-alert
          :color="item.color"
          :icon="item.icon"
          :value="true"
        >
        {{ item.discreption }}
        </v-alert>
      </v-timeline-item>
    </v-timeline>

   <!-- <h2 v-for="(item,i) in 100" :key="i">About</h2>-->

  </template>
  <script>




    export default {
      data: () => ({
        items: [
          {
            id: 1,
            color: 'info',
            icon: 'mdi-information',


            discreption:'Lorem ipsum dolor sit amet, no nam oblique veritus. Commune scaevola imperdiet nec ut,'+
            'sed euismod convenire principes at. Est et nobis iisque percipit, an vim zril disputando voluptatibus, vix an salutandi sententiae.' 
          },
          {
            id: 2,
            color: 'error',
            icon: 'mdi-alert-circle',
            discreption:'about this page we here.....'
          },
          {
            id: 2,
            color: 'info',
            icon: 'mdi-alert-circle',
            discreption:'this website is all about posts and comments '
          },
          {
            id: 2,
            color: 'error',
            icon: 'mdi-alert-circle',
            discreption:'this website is all about posts and comments '

          },
          {
            id: 2,
            color: 'info',
            icon: 'mdi-alert-circle',
            discreption:'this website is all about posts and comments '

          },
          {
            id: 2,
            color: 'info',
            icon: 'mdi-alert-circle',
            discreption:'this website is all about posts and comments '

          },
          {
            id: 2,
            color: 'error',
            icon: 'mdi-alert-circle',
            discreption:'this website is all about posts and comments '

          },
          {
            id: 2,
            color: 'blue-grey-lighten-1',
            icon: 'mdi-alert-circle',
            discreption:'this website is all about posts and comments '

          },
        ],
      }),
    }



    
  </script>

