<template>
    <div>
        <div class="parallax"></div>

        <section class="container py-5">
            <div class="row">
                <div class="col">
                    <h2 class="text-uppercase mb-4">Stap voor stap naar uw praktijk<span class="main">.</span></h2>
                    <p class="strong">
                        Heeft u een praktijk binnen de alternatieve geneeswijze branch?
                        Dan bent u aan het juiste adres! <br>
                    </p>
                    <p class="thin">
                        Wij leveren diensten die u helpen om al het werk, makkelijker en effectiever te maken.
                        Bekijk onze diensten en neem contact met ons op. Wij zullen u zo spoedig mogelijk op weg helpen.
                    </p>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <router-link :to="{name: 'Service'}" class="btn btn-info w-25 mr-3">Lees meer</router-link>
                    <router-link :to="{name: 'ChineseInfo'}" class="btn btn-info w-25">更多信息</router-link>
                </div>
            </div>
        </section>

        <div class="row">
            <div class="col-8 bg-light py-5">
                <div class="container">
                    <div class="d-flex justify-content-center">
                        <div class="row w-75">
                            <div class="container">
                                <div class="col-12">
                                    <h2 class="text-uppercase mb-4">Waarom zou u voor een alternatief therapeut kiezen<span class="main">.</span></h2>
                                    <p class="strong">
                                        Al van ouds gebruiken mensen vanuit elke cultuur plantaardige producten of uitgedachte methodes om iemand te kunnen genezen.
                                    </p>
                                    <p class="thin">
                                        Ieder mens is anders dus alle therapieën zullen misschien op ieder persoon anders kunnen uitwerken,
                                        daarom gaat een alternatief therapeut vaak uit van u als persoon, wat uw balans is en uw behoefte.</p>
                                    <p class="thin">
                                        Er zijn een vele verschillende soorten therapieën.
                                        De meest bekende zijn de oosterse geneeswijze, maar ook vanuit de westerse wereld zijn veel therapieen opgekomen.
                                        Op onze site kunt u uw therapeut vinden die met u een persoonlijk traject in gaat.
                                        Mocht u uw therapie vinden die bij u past dan wensen wij u alvast heel veel beterschap en vooruitgang met uw gezondheid.
                                    </p>
                                    <router-link class="btn btn-info mt-3"  :to="{name: 'Contact'}">
                                        Neem contact op!
                                    </router-link>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-4 pl-0">
                <div class="parallax-2"></div>
            </div>
        </div>



    </div>
</template>

<script>
    export default {
        data () {
          return {
            message : 'Hoera!'
          }
        }
    }
</script>

<style scoped>
    h3 {
        font-weight: 900;
        text-transform: uppercase;
    }
</style>