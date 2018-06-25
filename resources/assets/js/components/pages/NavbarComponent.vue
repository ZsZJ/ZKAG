<template>
    <!-- Top Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white py-3">
        <a class="navbar-brand main" href="#"> <strong> ZKAG I Zorgkantoor <span class="secondary">Alternatieve Geneeswijze</span> </strong> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-uppercase small" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <router-link class="nav-link" :to="{name: 'Home'}">Home</router-link>
                </li>
                <li class="nav-item">
                    <router-link class="nav-link" :to="{name: 'Service'}">Diensten</router-link>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Informatie</a>
                </li>
                <li class="nav-item divider">
                    <router-link class="nav-link" :to="{name: 'Login'}">Login</router-link>
                </li>
            </ul>
        </div>
    </nav>

</template>

<script>
    export default {
      data () {
        return {

        }
      }
    }
</script>

<style scoped>

</style>