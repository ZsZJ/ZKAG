<template>
    <footer class="bg-dark py-5">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <h4 class="text-white">
                        <strong>Zorgkantoor Alternatieve Geneeswijze</strong>
                    </h4>
                    <p class="text-muted small">
                        &copy; {{ currentYear }} ZKAG <br>
                        Alle rechten voorbehouden.
                    </p>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="text-white">De grootste onafhankelijke zorgkantoor voor alternatieve geneeswijze van Nederland.</h4>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <p class="text-muted">Neem contact op</p>
                            <a class="text-white" href="mailto: info@zkag.nl">info@zkag.nl</a><br>
                            <a class="text-white" href="callto: +31 6 442 04 693">+31 6 442 04 693</a>
                        </div>
                        <div class="col">
                            <p class="text-muted">
                                <i class="fab fa-facebook-square mr-3"></i>
                                <i class="fab fa-google-plus-square mr-3"></i>
                                <i class="fab fa-twitter-square"></i>
                            </p>
                            <a class="text-muted" href="#"> Algemene voorwaarden </a> <br>
                            <a class="text-muted" href="#"> Privacy beleid </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</template>

<script>
    export default {
      data () {
        return {
            currentYear : new Date().getFullYear(),
        }
      }
    }
</script>

<style scoped>
    footer {
        bottom: 0;
        position: absolute;
        width: 100%;
    }
</style>