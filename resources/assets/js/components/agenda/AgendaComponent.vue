<template>

    <div class="container-fluid pb-5">

        <!-- Calendar component -->
        <calendar-component></calendar-component>

        <!-- New Event component -->
        <new-event-component v-if="showNewEvent" @close="showNewEvent = false"></new-event-component>

        <button class="btn btn-lg btn-danger mb-3 fixed-bottom" id="show-modal" @click="showNewEvent = true" >
            <span class="fa fa-plus"></span>
        </button>

        <!--Existing Event Modal-->
        <!--<showevent></showevent>-->

    </div>

</template>

<!-- Calendar -->
<script>

    import CalendarComponent from './CalendarComponent.vue';
    import NewEventComponent from './NewEventComponent.vue';

    export default {

        components : { CalendarComponent, NewEventComponent },

        data() {
           return {
               showNewEvent: false
           };
        },

        mounted() {

        },

    }

    $(document).ready(function() {

        var component = {};

        // Initialise Calendar
        __init();

        // Whole day magic
        component.NewEventModal.find('#fullDay').on('click', function () {
            var checkbox = $(this).find('input');
            if (checkbox.is(':checked'))
            {
                component.TimePickers.parent().hide();
                component.TimePickers.attr('disabled', 'disabled');
            }
            else {
                component.TimePickers.parent().show();
                component.TimePickers.removeAttr('disabled');
            }
        });

        function __init ()
        {
            // Load Essential component elements
            component.Calendar = $('#calendar');
            component.NewEventModal = $('#newEventModal');
            component.ExistEventModal = $('#existEventModal');
            component.TimePickers = $('.time');
            component.DatePickers = $('.date');
            component.DatePair = $('#datepair');
            component.NewEvent = $('#newEvent');

            // Set Options of component elements
            __setCalendarOptions(component.Calendar);
            __setTimePickerOptions(component.TimePickers);
            __setDatePickerOptions(component.DatePickers);
            __setDatePairOptions(component.DatePair);

        }

        function __setCalendarOptions(el)
        {
            el.fullCalendar({
                // put your options and callbacks here
                events : fetchCalendarEvents(javaScriptVars),
                header: { center: 'month,agendaWeek,agendaDay,listYear' }, // buttons for switching between views
                locale: 'nl',
                navLinks: true,
                displayEventTime : true,
                timeFormat: 'HH:mm',
                defaultView: 'agendaWeek',
                allDayText : 'Hele dag',
                buttonText : {
                    today : 'Vandaag',
                    month : 'Maand',
                    week : 'Week',
                    day : 'Dag',
                    list : 'Lijst',
                },
                views : {
                    'agenda' : {
                        titleFormat: 'MMMM Y',
                        timeFormat: 'HH:mm',
                        columnFormat : 'ddd D',
                        slotLabelFormat : 'HH:mm'
                    }
                },
                // Click on day number
                navLinkDayClick: function(date) {
                    component.Calendar.fullCalendar('changeView', 'agendaDay', date.format());
                },
                // Click on day square
                dayClick : function (date, jsEvent, view) {
                    // Show Create Event Modal
                    component.NewEventModal.modal('show');
                    // Make a date string and set the value of the clicked day in the input
                    component.NewEventModal.find('#date_start').datepicker("update", new Date(date));
                },
                // Click on event
                eventClick: function(calEvent, jsEvent, view) {
                    window.calEvent = calEvent;
                    component.ExistEventModal.modal('show');
                }
            });
        }

        // Set the timepicker lib options
        function __setTimePickerOptions(el)
        {
            el.timepicker({
                'showDuration': true,
                'timeFormat': 'H:i',
                'lang' : {
                    mins : 'min',
                    hr : 'uur',
                    hrs : 'uur'
                }
            });
        }

        function __setDatePickerOptions(el)
        {
            el.datepicker({
                'format': 'd. M yyyy',
                'autoclose': true,
                'language' : 'nl-NL'
            });
        }

        function __setDatePairOptions(el)
        {
            el.datepair();
        }

        // Set the Events in the Calendar
        function fetchCalendarEvents(dateObjects) {

            let Obj = {};
            Obj.events = [];

            $.each(dateObjects.events, function (key, val) {

                let tmp = [];
                tmp.id = val.id;
                tmp.title = val.title;
                tmp.start = val.date_start;
                tmp.end = val.date_end;
                tmp.backgroundColor = val.color;
                tmp.borderColor = val.color;

                // Check if events is a full day
                if(val.full_day === 1)
                {
                    // Set allDay option true
                    tmp.allDay = true;
                }

                // Events
                Obj.events.push(tmp);
            });

            return Obj;
        }

    });

</script>

<style scoped>

    #show-modal {
        left: auto;
        right: 3rem
    }
</style>