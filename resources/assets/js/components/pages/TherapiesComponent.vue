<template>
    <div class="container-fluid bg-light py-5 d-flex justify-content-md-center flex-row">
        <div class="card rounded-0 col-lg-9 px-0 border-0">
            <div class="card-body row">
                <div class="col">
                    <h1>Oosterse Geneeswijze<span class="main">.</span></h1>
                    <div class="therapies row">
                        <div v-for="(therapy, index) in therapies" class="col-12">
                            <div @click="showInfo(index)" class="card">
                                <div class="card-body">
                                    <h5 class="card-title main">{{ therapy.name }}</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">{{ therapy.description }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <modal v-if="showModal" @close="showModal = false">
            <h3 slot="header" class="main">{{ therapies[index].name }}</h3>
            <p slot="body">{{ therapies[index].info }}</p>
        </modal>

    </div>
</template>

<script>
    import ModalComponent from '../templates/ModalComponent'
    export default {
      components: {
        modal : ModalComponent
      },
      methods: {
        showInfo : function (index) {
          this.showModal = true;
          this.index = index;
        }
      },
      data () {
        return {
            showModal : false,
            index : null,
            therapies : [
             {
               name : "Acupunctuur",
               description : "herstelt de energiestromen door naalden op specifieke punten van het lichaam te plaatsen",
               info : "Deze traditionele Chinese geneeswijze herstelt de energiestromen door naalden op specifieke punten van het lichaam te plaatsen. " +
               "Die punten hebben te maken met de chi, ofwel de levensenergie. " +
               "Ze bevinden zich op plekken van de meridianen (kanalen van de levensenergie) " +
               "Deze meridianen staan in verbinding met organen. " +
               "Acupunctuur heft energieblokkades in de meridianen op en laat de levensenergie weer vrij stromen."
             },
             {
               name : "Ayurveda",
               description : "geneeskundig systeem uit India van meer dan 5000 jaar oud, dat werkt met leefwijze en voeding",
               info : "Dit is een geneeskundig systeem uit India van meer dan 5000 jaar oud. " +
               "Het gaat ervan uit dat een verkeerde voeding en een verkeerde leefwijze lichaam en geest uit balans brengen en ziekten veroorzaken. " +
               "Het systeem werkt met de drie dosha’s, ofwel de verschillende lichaamstypen/consituties die ieder eigen kenmerken hebben. " +
               "Deze hebben ook ieder een eigen aanpak nodig om in balans te blijven of om de balans te herstellen."
             },
             {
               name : "Elektro-acupunctuur",
               description : "systeem dat energieverstoringen meet op acupunctuurpunten en herstelt",
               info : "Electro-acupunctuur is een methodiek waarbij verschillende metingen plaatsvinden, zoals de energie en weerstand van de organen, de vitaminen- en mineralenstatus van het lichaam, allergieën en intoleranties en meer. " +
               "Op deze manier worden disfuncties en energieblokkades opgespoord. " +
               "De cliënt heeft een elektrode in zijn hand die elektrische weerstand meet. " +
               "In sommige gevallen gebeurt het dat pijnklachten behandeld worden met de apparatuur. " +
               "Maar de basis is het normaliseren van de totale energiehuishouding. " +
               "Bij een tekort aan energie voert de behandelaar een stroom met lage frequentie en lage intensiteit toe. " +
               "Bij een teveel is dat een kortdurende prikkel van hoge frequentie en hoge intensiteit."
             },
             {
               name : "Shiatsu/Tuina",
               description : "drukpunt massage",
               info : "Deze drukpuntmassage vindt zijn oorsprong in Japan. " +
               "Op specifieke (acupunctuur)punten van het lichaam wordt druk uitgeoefend die de bloedsomloop stimuleert en energieblokkades opheft. " +
               "Shiatsu is een Japanse drukpuntmassage die met de vingers uitgeoefend wordt en die gericht is op het stimuleren van de bloedsomloop en het opheffen van energieblokkades in het lichaam. " +
               "Op de meridianen (energiebanen van het lichaam) liggen 365 vitale punten. " +
               "Wanneer een van de twaalf organen slecht functioneert, vermindert de energiestroom in het bijbehorende meridiaan en wordt het lichaam ziek. " +
               "Shiatsu herstelt de energiestroom in de meridiaan."
             },
             {
               name : "Ademhalingstherapie",
               description : "gericht op de ademhaling",
               info : "Deze therapie is erop gericht de ademhaling bewust te voelen en te reguleren. " +
               "Uitgangspunt is dat we onder invloed van stress verkeerd ademen en daar in de westerse maatschappij al zo aan gewend zijn, dat we het niet eens meer opmerken. " +
               "We ademen allang niet meer ‘natuurlijk’. " +
               "Door dieper en langzamer te ademen, laten we spanningen los, voorzien we onze organen van meer zuurstof en oefenen we goede invloed uit op onze gezondheid en ons welbevinden. " +
               "De therapie zorgt voor betere adembewustzijn, gevolgd door ademoefeningen. " +
               "Dat resulteert niet alleen in meer bewust contact met de ademhaling, maar ook met alle lichaamsprocessen en –reacties."
             },
             {
               name : "Aromatherapie",
               description : "werkt met etherische oliën",
               info : "Een therapie die werkt met zeer geconcentreerde en zeer zuivere plantaardige essentiële/etherische oliën. " +
               "De therapie kan op zichzelf staan maar ook als ondersteuning dienen bij andere therapieën. " +
               "Aromatherapie wordt ingezet bij zowel lichamelijke als psychische problemen. " +
               "Uitgangspunt is dat elke olie specifieke eigenschappen heeft die geschikt zijn voor bepaalde toepassingen. " +
               "Zo kan een bepaalde geur die wordt ingeademd ontspanning teweegbrengen. " +
               "Een andere werkt weer opwekkend of activerend."
             },
             {
               name : "Auriculotherapie",
               description : "oor-acupunctuur",
               info : "Deze vorm van ooracupunctuur gaat ervan uit dat de oorschelp en het gebied daaromheen in verbinding staan met alle onderdelen van het lichaam. " +
               "Door naalden te plaatsen op specifieke punten of daarop laserstralen te richten, wordt het daarmee corresponderende onderdeel behandeld. " +
               "De gebruikte naalden zijn klein en gemaakt van chirurgisch metaal. " +
               "Hierbij worden piepkleine puntjes van chirurgisch staal op en rondom de oorschelp geplaatst. " +
               "Het is een veelgebruikte methode om van een rookverslaving af te komen, maar wordt ook ingezet bij tal van (pijn)klachten."
             },
             {
               name : "Bachbloesemtherapie",
               description : "werkt met bloesemremedies",
               info : "Deze therapie werkt met flesjes verdunningen van plantenaftreksels die worden ingezet bij emotionele onbalansen. " +
               "Ontdekker van de heilzame werking van planten (en bomen) is Dr. Edward Bach die leefde in het begin van de 20e eeuw. " +
               "Het bijzondere is dat de diagnose wordt gesteld aan de hand van karakterstructuur en gemoedgesteldheid en niet aan de hand van lichamelijke klachten. " +
               "Vaak krijgen cliënten een flesje met daarin verschillende Bachbloesempreparaten die zowel afzonderlijk werken als in combinatie met elkaar."
             },
             {
               name : "Bioresonantie",
               description : "apparatuur die werkt met elektro-magnetische signalen,",
               info : "Bij bioresonantie meet de therapeut trillingen die het lichaam van de cliënt voortbrengt. " +
               "Waar een verstoring is, dient de therapeut tegenovergestelde trillingen toe zodat het lichaam weer in balans komt. " +
               "Elk orgaan heeft een specifieke, eigen trillingsfrequentie. " +
               "Bioresonantie wordt veel toegepast bij allergieën en bij bacteriële infecties en virusziekten."
             },
             {
               name : "Chakratherapie",
               description : "draait om de energiecentra van het lichaam",
               info : "Chakra’s zijn de energiecentra van het lichaam. " +
               "Aan de voorkant van het lichaam bevinden zich zeven chakra’s. " +
               "Deze hebben invloed op de organen, emoties, gedachten en hormonen. " +
               "Bij ongemakken, ziekten of aandoeningen kunnen een of meer chakra’s uit balans zijn. " +
               "De behandeling is gericht op de chakra’s en er maakt gebruik van verschillende hulpmiddelen, zoals etherische oliën, bloesemtincturen en edelstenen. " +
               "Ook visualisatie- en magnetiseertechnieken kunnen behoren tot de therapie. " +
               "Elke chakra vertegenwoordigt een bepaalde kleur, dus ook kleurentherapie kan effectief werken op deze energiecentra."
             },
             {
               name : "Energetische",
               description : "",
               info : "Basis van deze vorm is de gedachte dat de energievelden die zich in en om het menselijk lichaam bevinden, diens gezondheid bepalen. " +
               "Eclectisch betekent dat er verschillende stromingen binnen één vorm plaatsvinden."
             },
             {
               name : "Huid- en oedeemtherapie",
               description : "behandelt huidproblemen en plaatselijke vochtophopingen",
               info : "Een huidtherapeut geeft adviezen en behandelingen voor een goede dagelijkse verzorging van een zieke of een beschadigde huid. " +
               "Voorbeelden van huidproblemen zijn acne, littekens, pigmentstoornissen, vaatafwijkingen, maar ook afwijkingen als gevolg van chemotherapie. " +
               "Oedeem is een plaatselijke vochtophoping. " +
               "Er zijn verschillende behandelingen mogelijk om daar iets aan te doen. " +
               "Een voorbeeld daarvan is lymfedrainage dat vaak in combinatie wordt gegeven met compressietherapie met zwachtels of elastische kousen."
             },
             {
               name : "Iriscopie",
               description : "diagnosemethodiek met behulp van de ogen",
               info : "Met behulp van een irismicroscoop bekijkt de behandelaar de structuur van het oog. " +
               "Vlekken, strepen en verkleuringen weerspiegelen de constitutie, de aanleg en de gezondheid van een persoon. " +
               "De iris staat in directe verbinding met de hersenen en het zenuwstelsel. " +
               "Na een diagnose te hebben gesteld op basis van de waarnemingen, geeft de iriscopist een persoonlijk advies voor voeding, leefstijl en/of eventueel ontgifting."
             },
             {
               name : "Kinesiologie",
               description : "therapie aan de hand van spier-testen",
               info : "Kinesiologie maakt gebruik van spiertesten als diagnosemethodiek. " +
               "Een sterke spier betekent balans, een zwakke spier betekent onbalans. " +
               "Spieren reageren direct op alles wat de balans in het menselijk lichaam verstoort. " +
               "Dat kan zijn ongeschikte voeding maar ook emoties, gedachten en onbewuste patronen. " +
               "De spiertest maakt duidelijk wat zich op onbewust niveau afspeelt. " +
               "Dat komt door de samenhang tussen spiergroepen, meridianen, organen en chakra’s."
             },
             {
               name : "Licht/Kleurentherapie naar Mandel",
               description : "werkt met helende energie van kleuren",
               info : "Kleuren en licht verspreiden een helende energie. " +
               "Dat is het uitgangspunt van kleurentherapie, waarbij op verschillende manieren kleuren worden ingezet om verstoorde energiebalansen te herstellen. " +
               "Licht is een vorm van elektromagnetische trilling. " +
               "Kleuren zijn bestanddelen van het witte licht en ontstaan door verschillende trillingsfrequenties. " +
               "Mandel is de inspirator van de kleurenpunttherapie en combineert opvattingen uit de acupunctuur met kleurenbehandeling."
             },
             {
               name : "Magneetveldtherapie",
               description : "werkt met trillingsfrequenties die overeenkomen met de menselijke cellen",
               info : "Deze therapie werkt met trillingsfrequenties die overeenkomen met de menselijke cellen. " +
               "Daarbij zijn er zowel pulserende als statische magneetvelden die worden ingezet om onbalansen op te heffen en om verstoorde functies van het lichaam te herstellen."
             },
             {
               name : "Mesologie",
               description : "combineert kennis uit reguliere en complementaire geneeskunde voor vooral chronische aandoeningen, onderzoekt de orgaanfuncties",
               info : "In principe zou je mesologie een vorm van integrated medicine kunnen noemen, want het is gebaseerd op kennis van zowel reguliere geneeswijzen als complementaire. " +
               "Vooral chronische aandoeningen hebben baat bij deze vorm van geneeskunde. " +
               "Mesologie besteedt aandacht aan de voedingswijze, de luchtwegen en het zenuwstelsel. " +
               "De oorzaken van de klacht of ziekte zijn te herleiden uit het bindweefsel (het mesoderm) Daar vinden reacties plaats als gevolg van verstoringen."
             },
             {
               name : "Oligotherapie",
               description : "normaliseert verstoorde stofwisselingsfunctie met sporenelementen",
               info : "Deze therapie herstelt de balans in het lichaam door de stofwisseling te reguleren. " +
               "Dit gebeurt met de toediening van kleine hoeveelheden sporenelementencombinaties met plantensappen. " +
               "Met de oligotherapie worden vooral klachten behandeld die veroorzaakt worden door onvoldoende werking van het metabolisme. " +
               "Voorbeelden daarvan zijn gewrichtsklachten, infecties, stofwisselingsproblemen en allergieën."
             },
             {
               name : "Orthomoleculaire therapie",
               description : "bevordert zelfgenezend vermogen door het lichaam de juiste voedingsstoffen aan te bieden",
               info : "Deze therapie bevordert het zelfgenezend vermogen door het lichaam de voedingsstoffen aan te bieden die het nodig heeft om gezond en vitaal te zijn. " +
               "En dan niet alleen in hoeveelheden die absolute tekorten in het lichaam opheft, maar vooral om de relatieve tekorten. " +
               "Dat zijn tekorten waarvan je een langere periode niets of weinig hoeft te merken, maar wel op de langere duur kunnen leiden tot chronische klachten. " +
               "Bij de orthomoleculaire geneeskunde gaat het om natuurlijke stoffen als vitaminen, mineralen, sporenelementen en bepaalde kruiden. " +
               "Leefstijladviezen horen ook bij de behandeling."
             },
             {
               name : "Paranormale geneeswijzen",
               description : "werkt met paranormale gaven om gezondheid te herstellen",
               info : "Dit is een verzamelnaam voor een groot aantal therapieën die werken met informatie verkregen buiten de bekende zes zintuigen om. " +
               "Voorbeelden daarvan zijn helderziendheid, helderhorendheid, heldervoelendheid, energetische therapieën, healing en magnetiseren."
             },
             {
               name : "Phytotherapie",
               description : "werkt met geneeskrachtige kruiden",
               info : "Deze therapie werkt met geneeskrachtige kruiden afkomstig van planten"
             },
             {
               name : "(Natuur)Voedingstherapie",
               description : "gericht op voeding om gezondheid te herstellen",
               info : "Dit is een verzamelnaam voor therapieën die (natuurlijke) voeding als invalshoek hebben om de gezondheid te herstellen."
             },
            ]
        }
      }
    }
</script>

<style>

    .therapies .card {
        margin-bottom: 1rem;
    }
    
    .therapies .card:hover {
        cursor: pointer;
    }
    
</style>