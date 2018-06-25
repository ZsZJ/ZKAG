<template>
    <footer class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h4><strong>ZKAG</strong></h4>
                    <p class="text-muted">
                        De grootste onafhankelijke zorgkantoor voor alternatieve geneeswijze van Nederland
                    </p>
                </div>
                <div class="col">
                    <h4><strong>Quick Links</strong></h4>
                    <ul class="list-unstyled">
                        <li><a href="#" class="btn btn-underline">Changelog</a></li>
                        <li><a href="#" class="btn btn-underline">Updates</a></li>
                        <li><a href="#" class="btn btn-underline">News</a></li>
                        <li><a href="#" class="btn btn-underline">Contact us</a></li>
                        <li><a href="#" class="btn btn-underline">Bootstrap4 Beta</a></li>
                    </ul>
                </div>
                <div class="col">
                    <h4><strong>Over ons</strong></h4>
                    <ul class="list-unstyled">
                        <li><a href="#" class="btn btn-underline">Changelog</a></li>
                        <li><a href="#" class="btn btn-underline">Updates</a></li>
                        <li><a href="#" class="btn btn-underline">News</a></li>
                        <li><a href="#" class="btn btn-underline">Contact us</a></li>
                        <li><a href="#" class="btn btn-underline">Bootstrap4 Beta</a></li>
                    </ul>
                </div>
                <div class="col">
                    <h4><strong>Nieuwsbrief</strong></h4>
                    <form>
                        <div class="form-group">
                            <label for="subscribe">Abonneer op onze nieuwsbrief</label>
                            <input type="email" class="form-control" placeholder="Email" id="subscribe">
                            <button type="submit" class="btn-newsletter"><i class="fa fa-paper-plane-o"></i></button>
                        </div>
                    </form>
                    <span class="text-muted">© Copyright {{ date }}. ZKAG</span>
                </div>
            </div>
        </div>
    </footer>
</template>

<script>
    export default {
      data () {
        return {
            date : new Date().getFullYear(),
        }
      }
    }
</script>

<style scoped>

</style>