<template>
     <div>
<navbar :app="this"></navbar>
<spinner v-if="loading"> </spinner>
<div v-else-if="initiated">

</div>
          <router-view/>
     </div>
</template>
<script>
import Navbar from'../components/Navbar.vue'
export default {
     name: 'app',
     components:{
          Navbar
     },
     data(){
          return{
               user: null,
               loading: false,
               initiated: false,
               req: axios.create({
                    baseUrl: BASE_URL
               })
          }

     },
     methods:{
          init(){
               this.loading=true;
               this.req.get('auth/init ').then(response =>{
                    this.user = response.data;
                    this.loading=false;
                    this.initiated=true; 
               })
          }
     }
}
</script>