<template>

    <!-- New Event Modal-->
    <div id="existEventModal" class="modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content rounded-0">
                <input type="hidden" name="_token" value="">
                <div class="modal-header rounded-0">
                    <h5 class="modal-title text-white">
                        <!--{ Event title } -->
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="d-flex flex-row">
                        <div class="col-1 align-self-center">
                            <span id="clock-icon" class="fa fa-clock-o"></span>
                        </div>
                        <div class="col">
                            <span class="form-control-plaintext" id="staticTime" >
                                <span id="exist-start">
                                    Woensdag, 17 januari
                                </span>
                                <br>
                                <small id="exist-time">17:00 - 18:00</small>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a id="delete" href="/events/destroy/{id}" class="btn btn-foot mr-auto text-danger">
                        <span class="fa fa-trash"></span>
                    </a>
                    <a date-method="delete" id="link" href="/events/{id}/edit" class="btn btn-foot text-info">
                        <span class="fa fa-pencil"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>

</template>

<script>

    $(document).ready(function(){

        // If modal is shown use the event id to get the data
        $('#existEventModal').on('shown.bs.modal', function(){

            // Catch the modal
            var modal = $(this);

            // Set the values in the modal
            setEventValues(calEvent);

            function setEventValues (event)
            {
                // Catch the start date and change the first letter to capital letter
                var startdate = event.start.format('dddd, D. MMMM').charAt(0).toUpperCase() + event.start.format('dddd, D. MMMM').slice(1);
                    enddate = event.end.format('dddd, D. MMMM').charAt(0).toUpperCase() + event.end.format('dddd, D. MMMM').slice(1);
                    starttime = event.start.format('kk:mm');
                    endtime = event.end.format('kk:mm');

                // Change modal title
                modal.find('.modal-title').text(event.title);

                // Change modal start date
                modal.find('#exist-start').text(startdate);

                // Change modal time
                modal.find('#exist-time').text(starttime + "-" + endtime);

                // Change color of header
                modal.find('.modal-header').css('background-color', event.backgroundColor);

                // Change the link to edit page
                modal.find('#link').attr('href', '/dashboard/events/' + event.id + '/edit');
            }


        });

    });

</script>

<style scoped>

    #clock-icon {
        font-size: 1.2rem;
    }

    .btn-foot {
        border : none;
        font-size: 1.2rem;
    }

</style>