<template>
    <!-- NewEventModal -->
    <div>

        <modal-component :modal="modal" :form="form" >

        </modal-component>

        <!--<div class="modal-mask py-5">-->
            <!--<div class="modal-wrapper mx-auto">-->
                <!--<div class="modal-container w-50 ">-->
                    <!--<form id="form" method="post" action="events">-->
                        <!--<input type="hidden" name="_token" v-model="token">-->
                        <!--<div class="modal-header border-0">-->
                            <!--<slot name="header">-->
                                <!--<h3>-->
                                    <!--Nieuwe afspraak &nbsp;-->
                                <!--</h3>-->
                            <!--</slot>-->
                        <!--</div>-->
                        <!--<div class="modal-body">-->
                            <!--<slot name="body">-->
                                <!--<div class="form-group" :class="{'has-error': errors.has('title') }">-->
                                    <!--<input type="text" class="form-control" name="title" v-model="title" id="title" placeholder="Titel" >-->
                                <!--</div>-->
                                <!--<div id="datepair" class="form-group form-row d-flex flex-row">-->
                                    <!--<div class="col">-->
                                        <!--<input type="text" id="date_start" name="event_start[date]" class="form-control date start" placeholder="Start datum" required />-->
                                    <!--</div>-->
                                    <!--<div class="col" v-if="!fullDay" >-->
                                        <!--<input type="text" name="event_start[time]" class="form-control time start" :disabled="fullDay" placeholder="Tijd" required>-->
                                    <!--</div>-->
                                    <!--<span class="align-self-center">Tot</span>-->
                                    <!--<div class="col" v-if="!fullDay" >-->
                                        <!--<input type="text" name="event_end[time]" class="form-control time end" v-if="!fullDay" :disabled="fullDay" placeholder="Tijd" required>-->
                                    <!--</div>-->
                                    <!--<div class="col">-->
                                        <!--<input type="text" name="event_end[date]" class="form-control date end" placeholder="Eind datum" required />-->
                                    <!--</div>-->
                                <!--</div>-->

                                <!--<div class="form-group mb-0">-->
                                    <!--<label id="fullDay" class="custom-control custom-checkbox">-->
                                        <!--<input type="checkbox" name="full_day" class="custom-control-input" @click="toggleDay"  value="1">-->
                                        <!--<span class="custom-control-indicator"></span>-->
                                        <!--<span class="custom-control-description">Hele dag</span>-->
                                    <!--</label>-->
                                <!--</div>-->
                                <!--<div class="form-group">-->
                                    <!--<select class="form-control d-block my-3 col-2" required>-->
                                        <!--<option value="1">Bezet</option>-->
                                        <!--<option value="2">Vrij</option>-->
                                    <!--</select>-->
                                <!--</div>-->

                            <!--</slot>-->
                        <!--</div>-->
                        <!--<div class="modal-footer border-0">-->
                            <!--<slot name="footer">-->
                                <!--<button class="btn btn-default" v-on:click="$emit('close')">-->
                                    <!--Sluiten-->
                                <!--</button>-->
                                <!--<button class="btn btn-primary">-->
                                    <!--Opslaan-->
                                <!--</button>-->
                            <!--</slot>-->
                        <!--</div>-->
                    <!--</form>-->
                <!--</div>-->
            <!--</div>-->
        <!--</div>-->
    </div>

</template>

<script>

    import ModalComponent from '../modal/ModalComponent.vue';

    export default {

        components : { ModalComponent },

        data() {
            return {

                // Pass modal variables
                modal : {
                    header : {
                        title : 'Nieuwe afspraak',
                    },
                    body : '',

                    footer : '',
                },

                // Build the form
                form : {
                    fields : [
                        {field_id : 'title', name: 'Titel', type : 'text', 'col' : 12},
                        {field_id : 'username', name: 'Gebruikersnaam', type : 'text', 'col' : 12},
                        {field_id : 'password', name: 'Wachtwoord', type : 'password', 'col' : 12},
                    ]
                }

            };
        },

        methods : {

        },

    }

</script>
