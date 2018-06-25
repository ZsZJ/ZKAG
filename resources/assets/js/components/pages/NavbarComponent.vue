<template>
    <!-- Top Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white py-3">
        <a class="navbar-brand main" href="#"> <strong> ZKAG I Zorgkantoor <span class="secondary">Alternatieve Geneeswijze</span> </strong> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-uppercase small" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <router-link class="nav-link" :to="{name: 'Home'}">Home</router-link>
                </li>
                <li class="nav-item">
                    <router-link class="nav-link" :to="{name: 'Service'}">Diensten</router-link>
                </li>
                <li class="nav-item">
                    <router-link class="nav-link" :to="{name: 'Therapies'}">Therapieën</router-link>
                </li>
                <li class="nav-item">
                    <router-link class="nav-link" :to="{name: 'About'}">Over ons</router-link>
                </li>
                <li class="nav-item">
                    <router-link class="nav-link" :to="{name: 'Contact'}">Contact</router-link>
                </li>
                <li v-if="loginStatus != 1" class="nav-item">
                    <router-link class="nav-link" :to="{name: 'Login'}">Login</router-link>
                </li>
                <li v-if="loginStatus" class="nav-item">
                    <a href="#" @click="logout" class="nav-link">Logout</a>
                </li>
                <form id="logout-form" action="/logout" method="POST" style="display: none;">
                    <input type="hidden" name="_token" :value="csrf">
                </form>

            </ul>
        </div>
    </nav>

</template>

<script>
    export default {
      data () {
        return {
          csrf: document.getElementsByTagName("meta")[1].content,
          loginStatus: document.getElementsByTagName("meta")[3].content
        }
      },
      methods: {
        logout : function () {
          document.getElementById("logout-form").submit()
        }
      }
    }
</script>

<style scoped>
    .nav-item {
        font-weight: bold;
    }
</style>