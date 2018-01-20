@extends('layouts.premium')

@section('content')
    <main class="main">
        <div class="container-fluid pb-5">
            <div id="ui-view-5" class="pt-3">
                <div class="row">
                    <form method="post" action="{{ route('events.update', ['id' => $event->id]) }}" class="col-12">
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group d-flex row align-items-center">
                            <div class="col-6">
                                <input class="form-control input-lg" type="text" name="title" value="{{ $event->title }}" />
                            </div>
                            <div class="col">
                                <button type="submit" class="btn btn-primary rounded-0">Opslaan</button>
                            </div>
                        </div>
                        <div id="datepair" class="form-group form-row d-flex flex-row">
                            <div class="col">
                                <input type="text" id="date_start" name="event_start[date]" class="form-control date start" placeholder="Start datum" value="{{ $event->date_start  }}" required />
                            </div>
                            <div class="col">
                                <input type="text" name="event_start[time]" class="form-control time start" placeholder="Tijd" value="{{ $event->time_start }}" required>
                            </div>
                            <span class="align-self-center">Tot</span>
                            <div class="col">
                                <input type="text" name="event_end[time]" class="form-control time end" placeholder="Tijd" value="{{ $event->time_end  }}" required>
                            </div>
                            <div class="col">
                                <input type="text" name="event_end[date]" class="form-control date end" placeholder="Eind datum" value="{{ $event->date_start  }}" required />
                            </div>
                        </div>
                        <div class="form-group mb-0">
                            <label id="fullDay" class="custom-control custom-checkbox">
                                <input type="checkbox" name="full_day" class="custom-control-input" value="1">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Hele dag</span>
                            </label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('scripts')

    <script>

        $(document).ready(function () {

            var component = {};

            // Uncheck if not full day FULL DAY MAGIC
            var checkbox = $("input[name='full_day']");

            // Initialise dates
            __init();

            checkbox.on('click', function(){
               __fullDay();
            });

            function __fullDay()
            {
                if(javaScriptVars.full_day == 1)
                {
                    checkbox.attr('checked', 'checked');
                }

                if (checkbox.is(':checked'))
                {
                    component.TimePickers.parent().hide();
                    component.TimePickers.attr('disabled', 'disabled');
                }
                else {
                    component.TimePickers.parent().show();
                    component.TimePickers.removeAttr('disabled');
                }
            }

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