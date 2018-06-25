<template>
    <div>
        <div class="container-fluid bg-light py-5 d-flex justify-content-md-center flex-row">
            <div class="card rounded-0 col-lg-9 px-0 border-0">
                <div class="card-body row p-0">
                    <div class="col p-5">
                        <h1>Contact<span class="main">.</span></h1>
                        <p class="strong">
                            Wilt u meer weten? Of wilt u graag een afspraak maken, neemt u dan contact via onderstaand contactformulier
                            of via de contactgegevens hiernaast.
                        </p>

                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Naam</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label for="subject">Onderwerp</label>
                                <input type="text" class="form-control" id="subject">
                            </div>
                            <div class="form-group">
                                <label for="message">Bericht</label>
                                <textarea class="form-control" id="message" rows="4"></textarea>
                            </div>
                            <button type="submit" class="btn btn-info rounded-0">Verzenden</button>
                        </form>

                    </div>
                    <div class="col p-5">
                        <h2 class="company">
                            ZKAG | Zorgkantoor
                            <span class="secondary">Alternatieve Geneeswijze</span>
                        </h2>
                        <div class="d-flex flex-row mt-4">
                            <address class="col px-0">
                                <strong>Postadres</strong><br>
                                Stellendaal 74<br>
                                6228GB Maastricht <br>
                                Nederland <br>
                            </address>
                            <div class="col">
                                <strong>Telefoon</strong> 06-442 04 693 <br>
                                <strong>Mail</strong> info@zkag.nl <br>
                                <strong>Website</strong> www.zkag.nl
                            </div>
                        </div>
                        <strong>Openingstijden voor administratieve begeleiding na therapeutische werkuren</strong>
                        <p class="mt-3">Maandag t/m vrijdag 18:30 -22:00 uur</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

</script>

<style>
    h1 {
        margin-bottom: 2rem;
        font-weight: 800;
    }
    .company {
        font-weight: bold;
        color: #4CAF50;
    }
</style>