@extends('layouts.app')

@section('content')

<div class="container-fluid py-5 mt-5">
    <div class="row">
        <div class="col">
            <div class="card rounded-0">
                <div class="card-body">
                    <h5 class="card-title mb-3">{{ $therapist->name }}</h5>
                    <form action="{{ route('therapeuten.store') }}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="users_id" value="{{ $therapist->users_id }}">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Naam</label>
                            <input type="text" class="form-control" name="name" id="exampleFormControlInput1" required>
                        </div>
                        <div class="form-group">
                            <div id="datepair" class="form-group form-row d-flex flex-row">
                                <div class="col-6">
                                    <label for="exampleFormControlInput1">Datum</label>
                                    <input type="text" id="date_start" name="event_start[date]" class="form-control date start" placeholder="Start datum" required />
                                </div>
                                <div class="col-6">
                                    <label for="exampleFormControlInput1">Tijd</label>
                                    <input type="text" name="event_start[time]" class="form-control time start" placeholder="Tijd" required>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-info rounded-0"> Afspraak maken </button>

                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection

@section('scripts')

<script>

    $(document).ready(function(){
        var component = {};

        // Initialise dates
        __init();


        function __init ()
        {
            // Load Essential component elements
            component.TimePickers = $('.time');
            component.DatePickers = $('.date');
            component.DatePair = $('#datepair');

            // Set Options of component elements
            __setTimePickerOptions(component.TimePickers);
            __setDatePickerOptions(component.DatePickers);
            __setDatePairOptions(component.DatePair);
            __fullDay();
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
    });

</script>

@endsection