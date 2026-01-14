@extends('admin.layout.app')

@section('content')
<form action="{{route('schedule.update',['id'=>$driver->id])}}"  method="POST" enctype="multipart/form-data" id="driver_create">
    @csrf
    <div id="page-container">
        <div id="fx-container" class="fx-opacity">
            <div id="page-content" class="block">
                <div class="row gutter30">
                    <div class="col-md-12">
                        <section class="content">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <!-- general form elements disabled -->
                                        <div class="card card-success mb-3">
                                            <div class="bg-primary card-header">
                                                <h3 class="card-title">View Master Schedule</h3>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body">
                                                <!-- <div class="container" > -->
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label><b>Driver</b></label>
                                                            <input type="text" value="{{$driver->First_Name}}" disabled="" style="padding-left: 12px; width: 100%; border-radius: 5px; border-style: groove; height: 38px;" />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label><b>Special Hour</b></label>
                                                            <input type="text" value="None" disabled="" style="padding-left: 12px; width: 100%; border-radius: 5px; border-style: groove; height: 38px;" />
                                                            <input type="hidden" value="None" name="splHr" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label><b>Chauffeur Number</b></label>
                                                            <input type="hidden" name="chNumber" value="  " />
                                                            <input type="text" value="  " disabled="" style="padding-left: 12px; width: 100%; border-radius: 5px; border-style: groove; height: 38px;" />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label><b>Chauffeur Number Status</b></label>
                                                            <input type="text" id="sta" placeholder="Chauffeur Number Status" disabled="" style="padding-left: 12px; width: 100%; border-radius: 5px; border-style: groove; height: 38px;" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label><b>Driving License Number</b></label>
                                                            <input type="text" value="  " disabled="" style="padding-left: 12px; width: 100%; border-radius: 5px; border-style: groove; height: 38px;" />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label><b>Driving License Expiry</b></label>
                                                            <input type="text" value="  " disabled="" style="padding-left: 12px; width: 100%; border-radius: 5px; border-style: groove; height: 38px;" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col-md-6">
                                                        <label style="margin-right: 28px;"><b>Start Time</b></label>
                                                        <input
                                                            type="text"
                                                            id="timepickerm"
                                                            name="startTimeSingle"
                                                            class="timepicker1"
                                                            placeholder="0:00 AM/PM"
                                                            style="padding-left: 12px; width: 100%; border-radius: 5px; border-style: groove; height: 38px;"
                                                            readonly=""
                                                            value="{{isset($schedule->start_time)?$schedule->start_time:''}}"

                                                        />
                                                        <input type="hidden" value="{{isset($schedule->start_time)?$schedule->start_time:''}}" name="defualt_startTimeSingle"/>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label style="margin-right: 40px;"><b>Off Time</b></label>
                                                        <input
                                                            type="text"
                                                            id="timepicker2"
                                                            name="offTimeSingle"
                                                            class="timepicker1"
                                                            placeholder="0:00 AM/PM"
                                                            style="padding-left: 12px; width: 100%; border-radius: 5px; border-style: groove; height: 38px;"
                                                            readonly="",
                                                            value="{{isset($schedule->off_time)?$schedule->off_time:''}}"
                                                        />
                                                        <input type="hidden" value="{{isset($schedule->off_time)?$schedule->off_time:''}}" name="defualt_offTimeSingle"/>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <!-- <div class="form-group"> -->
                                                        <label><b>Total Hours</b></label>
                                                        <input type="text" id="total1" value="{{isset($schedule->total_hours)?$schedule->total_hours:''}}"  class="total" placeholder="Total Hour" disabled="" style="padding-left: 12px; width: 100%; border-radius: 5px; border-style: groove; height: 38px;" />
                                                        <input type="hidden" id="totalHr" name="totalHr" class="total" />

                                                        <!-- </div> -->
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label><b>Flexible Time</b></label>
                                                            <input
                                                                type="checkbox"
                                                                onclick="myFunction()"
                                                                id="Special_Hrs_1"
                                                                name="flexible_time"
                                                                value=""
                                                                style="margin-right: 10px; display: block; width: 20px; height: 20px; padding-left: 12px;"
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--last one-->
                                                <div class="row" style="margin-top: 20px;">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-sm-3">
                                                                    <label><b>Choose Rest Days</b></label>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <label><b>Start Time</b></label>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <label><b>Off Time</b></label>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <label><b>Hours</b></label>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-3 checkbox disabled">
                                                                    <label><input type="checkbox" value="Sunday" class="checked tp1" id="ch1" name="restDays[]" />Sunday</label><br />
                                                                    <label><input type="checkbox" value="Monday" class="checked tp1" id="ch2" name="restDays[]" />Monday</label><br />
                                                                    <label><input type="checkbox" value="Tuesday" class="checked tp1" id="ch3" name="restDays[]" />Tuesday</label><br />
                                                                    <label><input type="checkbox" value="Wednesday" class="checked tp1" id="ch4" name="restDays[]" />Wednesday</label><br />
                                                                    <label><input type="checkbox" value="Thursday" class="checked tp1" id="ch5" name="restDays[]" />Thursday</label><br />
                                                                    <label><input type="checkbox" value="Friday" class="checked tp1" id="ch6" name="restDays[]" />Friday</label><br />
                                                                    <label><input type="checkbox" value="Saturday" class="checked tp1" id="ch7" name="restDays[]" />Saturday</label><br />
                                                                </div>

                                                                <div class="col-sm-3 checkbox">
                                                                    <input type="text" id="timepicker3" class="timepicker11 tp" name="startTimeArray[]" disabled="" placeholder="0:00 AM/PM" readonly="" />
                                                                    <input type="text" id="timepicker5" class="timepicker11 tp" name="startTimeArray[]" disabled="" placeholder="0:00 AM/PM" readonly="" />
                                                                    <input type="text" id="timepicker7" class="timepicker11 tp" name="startTimeArray[]" disabled="" placeholder="0:00 AM/PM" readonly="" />
                                                                    <input type="text" id="timepicker9" class="timepicker11 tp" name="startTimeArray[]" disabled="" placeholder="0:00 AM/PM" readonly="" />
                                                                    <input type="text" id="timepicker11" class="timepicker11 tp" name="startTimeArray[]" disabled="" placeholder="0:00 AM/PM" readonly="" />
                                                                    <input type="text" id="timepicker13" class="timepicker11 tp" name="startTimeArray[]" disabled="" placeholder="0:00 AM/PM" readonly="" />
                                                                    <input type="text" id="timepicker15" class="timepicker11 tp" name="startTimeArray[]" disabled="" placeholder="0:00 AM/PM" readonly="" />
                                                                </div>

                                                                <div class="col-sm-3 checkbox">
                                                                    <input type="text" id="timepicker4" class="timepicker22 tp" name="offTimeArray[]" disabled="" placeholder="0:00 AM/PM" readonly="" />
                                                                    <input type="text" id="timepicker6" class="timepicker22 tp" name="offTimeArray[]" disabled="" placeholder="0:00 AM/PM" readonly="" />
                                                                    <input type="text" id="timepicker8" class="timepicker22 tp" name="offTimeArray[]" disabled="" placeholder="0:00 AM/PM" readonly="" />
                                                                    <input type="text" id="timepicker10" class="timepicker22 tp" name="offTimeArray[]" disabled="" placeholder="0:00 AM/PM" readonly="" />
                                                                    <input type="text" id="timepicker12" class="timepicker22 tp" name="offTimeArray[]" disabled="" placeholder="0:00 AM/PM" readonly="" />
                                                                    <input type="text" id="timepicker14" class="timepicker22 tp" name="offTimeArray[]" disabled="" placeholder="0:00 AM/PM" readonly="" />
                                                                    <input type="text" id="timepicker16" class="timepicker22 tp" name="offTimeArray[]" disabled="" placeholder="0:00 AM/PM" readonly="" />
                                                                </div>

                                                                <div class="col-sm-3 checkbox disabled">
                                                                    <input type="text" id="hr1" class="h tp" disabled="" placeholder="Hour" />
                                                                    <input type="text" id="hr2" class="h tp" disabled="" placeholder="Hour" />
                                                                    <input type="text" id="hr3" class="h tp" disabled="" placeholder="Hour" />
                                                                    <input type="text" id="hr4" class="h tp" disabled="" placeholder="Hour" />
                                                                    <input type="text" id="hr5" class="h tp" disabled="" placeholder="Hour" />
                                                                    <input type="text" id="hr6" class="h tp" disabled="" placeholder="Hour" />
                                                                    <input type="text" id="hr7" class="h tp" disabled="" placeholder="Hour" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                               <div class="row">
                                                    <div class="col-md-12">
                                                      <!--  <input class="btn btn-success" type="submit" name="btn" value="Save Schedule" /> -->
                                                        <button type="button" class="btn btn-danger">
                                                            <a href="{{route('schedule.list')}}">Back</a>
                                                        </button>
                                                    </div>
                                               </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection


@push('scripts')
<link   rel="stylesheet" href="https://cdn.jsdelivr.net/gh/dmuy/MDTimePicker/mdtimepicker.css">
<script src="https://cdn.jsdelivr.net/gh/dmuy/MDTimePicker/mdtimepicker.js"></script>
<script>
    $(document).ready(function(){
      $('#timepickerm').mdtimepicker(); //Initializes the time picker

      $('#timepicker3').mdtimepicker(); //Initializes the time picker

      $('#timepicker4').mdtimepicker(); //Initializes the time picker

      $('#timepicker5').mdtimepicker(); //Initializes the time picker

      $('#timepicker6').mdtimepicker(); //Initializes the time picker

      $('#timepicker7').mdtimepicker(); //Initializes the time picker

      $('#timepicker8').mdtimepicker(); //Initializes the time picker

      $('#timepicker9').mdtimepicker(); //Initializes the time picker

      $('#timepicker10').mdtimepicker(); //Initializes the time picker

      $('#timepicker11').mdtimepicker(); //Initializes the time picker

      $('#timepicker12').mdtimepicker(); //Initializes the time picker

      $('#timepicker13').mdtimepicker(); //Initializes the time picker

      $('#timepicker14').mdtimepicker(); //Initializes the time picker

      $('#timepicker15').mdtimepicker(); //Initializes the time picker

      $('#timepicker16').mdtimepicker(); //Initializes the time picker
    });

    $('#timepickerm').mdtimepicker({

  // format of the time value (data-time attribute)
  timeFormat: 'hh:mm:ss.000',

  // format of the input value
  format: 'h:mm tt',

  // theme of the timepicker
  // 'red', 'purple', 'indigo', 'teal', 'green'
  theme: 'blue',

  // determines if input is readonly
  readOnly: true,

  // determines if display value has zero padding for hour value less than 10 (i.e. 05:30 PM); 24-hour format has padding by default
  hourPadding: false

  });

    $('#timepicker3').mdtimepicker({

  // format of the time value (data-time attribute)
  timeFormat: 'hh:mm:ss.000',

  // format of the input value
  format: 'h:mm tt',

  // theme of the timepicker
  // 'red', 'purple', 'indigo', 'teal', 'green'
  theme: 'blue',

  // determines if input is readonly
  readOnly: true,

  // determines if display value has zero padding for hour value less than 10 (i.e. 05:30 PM); 24-hour format has padding by default
  hourPadding: false

  });

    $('#timepicker4').mdtimepicker({

  // format of the time value (data-time attribute)
  timeFormat: 'hh:mm:ss.000',

  // format of the input value
  format: 'h:mm tt',

  // theme of the timepicker
  // 'red', 'purple', 'indigo', 'teal', 'green'
  theme: 'blue',

  // determines if input is readonly
  readOnly: true,

  // determines if display value has zero padding for hour value less than 10 (i.e. 05:30 PM); 24-hour format has padding by default
  hourPadding: false

  });

    $('#timepicker5').mdtimepicker({

  // format of the time value (data-time attribute)
  timeFormat: 'hh:mm:ss.000',

  // format of the input value
  format: 'h:mm tt',

  // theme of the timepicker
  // 'red', 'purple', 'indigo', 'teal', 'green'
  theme: 'blue',

  // determines if input is readonly
  readOnly: true,

  // determines if display value has zero padding for hour value less than 10 (i.e. 05:30 PM); 24-hour format has padding by default
  hourPadding: false

  });

      $('#timepicker').mdtimepicker().on('timechanged', function(e){
    console.log(e.value);
    console.log(e.time);
  });


    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

  </script>
<script>
    $('#timepicker2').mdtimepicker().on('timechanged', function(e){
  console.log(e.value);
  console.log(e.time);
});
    </script>
<script>

    function myCcef(){
      $.ajax({
        url: "https://data.cityofchicago.org/resource/97wa-y6ff.json",
        type: "GET",
        data: {
          "$limit" : 5000,
          "license" :'',
          "$$app_token" : "maF7iQdMYHMuYqgof0lXDzoDY"
        }
    }).done(function(data) {
      $stutusdate=data[0].status_date.split(' ')[0];

      $('#sta').val(data[0].status);
        // $('#status_date').val($stutusdate);
        // $('#d_type').val(data[0].driver_type);
        // $('#l_type').val(data[0].license_type);
        // $('#ch_name').val(data[0].name);
        // $('#ch_gender').val(data[0].sex);
        // $('#ch_city').val(data[0].city);
        // $('#ch_state').val(data[0].state);
    });

    }



    $(document).ready(function(){


    var days=7;
    var hours;
    var totalHr;
    var startHour;
    var EndHour;
    var CurrentHour;
    var SpHr=0;
    var FlixebleDay;
    var cke=false;



    var getStartHr="";
    var EndStartHr="";

    var specail= "";
        if(specail != 0 && specail !=null && specail != ""){

          FlixebleDay="";

          dt1 = new Date("April 26, 2017 "+""+":00");
        dt2 = new Date("April 26, 2017 "+""+":00");
        var hours2=diff_hours(dt1, dt2);
        if(hours2 == 0 || hours2 == null || hours2 == ""){
          SpHr = 0;
        }else{
          SpHr = hours2;
        }


    }
    if(getStartHr != "" && EndStartHr != ""){
                  EndHour=EndStartHr
                  var date_now1 =getHours(getStartHr) ;
                    var date_future1 =getHours(EndHour) ;
                    dt1 = new Date("April 26, 2017 "+date_now1+":00");
                    dt2 = new Date("April 26, 2017 "+date_future1+":00");
                    CurrentHour=diff_hours(dt1, dt2);
                    totalHr=CurrentHour*days;
                    totalHr=totalHr-SpHr;
                    var he;

                    let form = document.getElementsByClassName('checked');

                      for (i = 0; i < form.length; i++) {
                        var j=i+1;
                        if (!form[i].checked) {
                          if(FlixebleDay == form[i].value){
                           he=CurrentHour - SpHr;

                            $('#hr'+j).val(he + ' Hr');
                          }else{
                            $('#hr'+j).val(CurrentHour + ' Hr');
                          }
                        }
                      }

                      for (i = 0; i < form.length; i++) {
                        var j=i+1;
                        if (form[i].checked) {
                          if(FlixebleDay == form[i].value){
                           he=CurrentHour - SpHr;
                           totalHr = totalHr - he;
                            $('#hr'+j).val("Hour");
                          }else{
                            totalHr = totalHr - CurrentHour;
                            $('#hr'+j).val("Hour");
                          }
                        }
                      }

                      $('.total').val(totalHr);
    }




      // $('#datepicker').on('change',function(){
      //   var date2 = $('#datepicker').datepicker('getDate', '+1d');
      //   date2.setDate(date2.getDate()+6);
      //   $('#datepicker2').datepicker('setDate', date2);
      //   $('#datepicker22').datepicker('setDate', date2);
      //   var from=$('#datepicker').val();
      //   var to=$('#datepicker2').val();
      //   if(from != null && to != null){
      //               var startDate = Date.parse(from);
      //               var endDate = Date.parse(to);
      //               var timeDiff = endDate - startDate;
      //               days = Math.floor(timeDiff / (1000 * 60 * 60 * 24) +1);
      //   }
      // });


    $('#timepickerm').on('change',function(){
        $('.timepicker11').val($('#timepickerm').val());
        startHour = $('#timepickerm').val();
        jQuery('[name="defualt_startTimeSingle"]').val(startHour)
    });


    $('#timepicker2').on('change',function(){
          $('.timepicker22').val($('#timepicker2').val());
          jQuery('[name="defualt_offTimeSingle"]').val($('#timepicker2').val())

                    EndHour=$('#timepicker2').val();
                  var date_now1 =getHours(startHour) ;
                    var date_future1 =getHours(EndHour) ;
                    dt1 = new Date("April 26, 2017 "+date_now1+":00");
                    dt2 = new Date("April 26, 2017 "+date_future1+":00");
                    CurrentHour=diff_hours(dt1, dt2);
                    totalHr=CurrentHour*days;
                    totalHr=totalHr-SpHr;
                    $('.total').val(totalHr);

                    let form = document.getElementsByClassName('checked');

                      for (i = 0; i < form.length; i++) {
                        var j=i+1;
                        if (!form[i].checked) {
                          if(FlixebleDay == form[i].value){
                            var he=CurrentHour - SpHr;

                            $('#hr'+j).val(he + ' Hr');
                          }else{
                            $('#hr'+j).val(CurrentHour + ' Hr');
                          }
                        }
                      }


        });


        $('#timepicker3,#timepicker4').focus(function(){

          var sH1=$('#timepicker3').val();
                  var eH1=$('#timepicker4').val();
                  if(sH1 != null && eH1 != null){
                  var date_now1 =getHours(sH1) ;
                    var date_future1 =getHours(eH1) ;
                    dt1 = new Date("April 26, 2017 "+date_now1+":00");
                    dt2 = new Date("April 26, 2017 "+date_future1+":00");
                    hours=diff_hours(dt1, dt2);

                     CurrentHour=hours;
                  }
        });

        $('#timepicker5,#timepicker6').focus(function(){

          var sH1=$('#timepicker5').val();
                  var eH1=$('#timepicker6').val();
                  if(sH1 != null && eH1 != null){
                  var date_now1 =getHours(sH1) ;
                    var date_future1 =getHours(eH1) ;
                    dt1 = new Date("April 26, 2017 "+date_now1+":00");
                    dt2 = new Date("April 26, 2017 "+date_future1+":00");
                    hours=diff_hours(dt1, dt2);

                     CurrentHour=hours;
                  }
        });


        $('#timepicker7,#timepicker8').focus(function(){

          var sH1=$('#timepicker7').val();
                  var eH1=$('#timepicker8').val();
                  if(sH1 != null && eH1 != null){
                  var date_now1 =getHours(sH1) ;
                    var date_future1 =getHours(eH1) ;
                    dt1 = new Date("April 26, 2017 "+date_now1+":00");
                    dt2 = new Date("April 26, 2017 "+date_future1+":00");
                    hours=diff_hours(dt1, dt2);

                     CurrentHour=hours;
                  }
        });

        $('#timepicker9,#timepicker10').focus(function(){

          var sH1=$('#timepicker9').val();
                  var eH1=$('#timepicker10').val();
                  if(sH1 != null && eH1 != null){
                  var date_now1 =getHours(sH1) ;
                    var date_future1 =getHours(eH1) ;
                    dt1 = new Date("April 26, 2017 "+date_now1+":00");
                    dt2 = new Date("April 26, 2017 "+date_future1+":00");
                    hours=diff_hours(dt1, dt2);

                     CurrentHour=hours;
                  }
        });

        $('#timepicker11,#timepicker12').focus(function(){

          var sH1=$('#timepicker11').val();
                  var eH1=$('#timepicker12').val();
                  if(sH1 != null && eH1 != null){
                  var date_now1 =getHours(sH1) ;
                    var date_future1 =getHours(eH1) ;
                    dt1 = new Date("April 26, 2017 "+date_now1+":00");
                    dt2 = new Date("April 26, 2017 "+date_future1+":00");
                    hours=diff_hours(dt1, dt2);

                     CurrentHour=hours;
                  }
        });

        $('#timepicker13,#timepicker14').focus(function(){

          var sH1=$('#timepicker13').val();
                  var eH1=$('#timepicker14').val();
                  if(sH1 != null && eH1 != null){
                  var date_now1 =getHours(sH1) ;
                    var date_future1 =getHours(eH1) ;
                    dt1 = new Date("April 26, 2017 "+date_now1+":00");
                    dt2 = new Date("April 26, 2017 "+date_future1+":00");
                    hours=diff_hours(dt1, dt2);

                     CurrentHour=hours;
                  }
        });


        $('#timepicker15,#timepicker16').focus(function(){

          var sH1=$('#timepicker15').val();
                  var eH1=$('#timepicker16').val();
                  if(sH1 != null && eH1 != null){
                  var date_now1 =getHours(sH1) ;
                    var date_future1 =getHours(eH1) ;
                    dt1 = new Date("April 26, 2017 "+date_now1+":00");
                    dt2 = new Date("April 26, 2017 "+date_future1+":00");
                    hours=diff_hours(dt1, dt2);

                     CurrentHour=hours;
                  }
        });


    $('#timepicker3,#timepicker4').on('change',function(){

                  var sH1=$('#timepicker3').val();
                  var eH1=$('#timepicker4').val();
                  if(sH1 != null && eH1 != null){
                  var date_now1 =getHours(sH1) ;
                    var date_future1 =getHours(eH1) ;
                    dt1 = new Date("April 26, 2017 "+date_now1+":00");
                    dt2 = new Date("April 26, 2017 "+date_future1+":00");
                    hours=diff_hours(dt1, dt2);
                    totalHr= totalHr + hours ;
                    totalHr= totalHr  - CurrentHour;
                    $('.total').val(totalHr);
                    var checkBox1 = document.getElementById("ch1");
                        if(FlixebleDay == checkBox1.value){
                          $('#hr1').val((hours-SpHr) + ' Hr');
                          }else{
                            $('#hr1').val(hours + ' Hr');
                          }
                  }
        });



        $('#timepicker5,#timepicker6').on('change',function(){

          var sH1=$('#timepicker5').val();
          var eH1=$('#timepicker6').val();
          if(sH1 != null && eH1 != null){
          var date_now1 =getHours(sH1) ;
            var date_future1 =getHours(eH1) ;
            dt1 = new Date("April 26, 2017 "+date_now1+":00");
            dt2 = new Date("April 26, 2017 "+date_future1+":00");
            hours=diff_hours(dt1, dt2);
            totalHr= totalHr + hours ;
            totalHr= totalHr  - CurrentHour;
            $('.total').val(totalHr);
            var checkBox1 = document.getElementById("ch2");
                        if(FlixebleDay == checkBox1.value){
                          $('#hr2').val((hours-SpHr) + ' Hr');
                          }else{
                            $('#hr2').val(hours + ' Hr');
                          }
          }
    });


    $('#timepicker7,#timepicker8').on('change',function(){

          var sH1=$('#timepicker7').val();
          var eH1=$('#timepicker8').val();

    if(sH1 != null && eH1 != null){
          var date_now1 =getHours(sH1) ;
            var date_future1 =getHours(eH1) ;
            dt1 = new Date("April 26, 2017 "+date_now1+":00");
            dt2 = new Date("April 26, 2017 "+date_future1+":00");
            hours=diff_hours(dt1, dt2);
            totalHr= totalHr + hours ;
            totalHr= totalHr  - CurrentHour;
            $('.total').val(totalHr);
            var checkBox1 = document.getElementById("ch3");
                        if(FlixebleDay == checkBox1.value){
                          $('#hr3').val((hours-SpHr) + ' Hr');
                          }else{
                            $('#hr3').val(hours + ' Hr');
                          }
          }
    });

    $('#timepicker9,#timepicker10').on('change',function(){

          var sH1=$('#timepicker9').val();
          var eH1=$('#timepicker10').val();
          if(sH1 != null && eH1 != null){
          var date_now1 =getHours(sH1) ;
            var date_future1 =getHours(eH1) ;
            dt1 = new Date("April 26, 2017 "+date_now1+":00");
            dt2 = new Date("April 26, 2017 "+date_future1+":00");
            hours=diff_hours(dt1, dt2);
            totalHr= totalHr + hours ;
            totalHr= totalHr  - CurrentHour;
            $('.total').val(totalHr);
            var checkBox1 = document.getElementById("ch4");
                        if(FlixebleDay == checkBox1.value){
                          $('#hr4').val((hours-SpHr) + ' Hr');
                          }else{
                            $('#hr4').val(hours + ' Hr');
                          }
      }
    });



    $('#timepicker11,#timepicker12').on('change',function(){

          var sH1=$('#timepicker11').val();
          var eH1=$('#timepicker12').val();
          if(sH1 != null && eH1 != null){
          var date_now1 =getHours(sH1) ;
            var date_future1 =getHours(eH1) ;
            dt1 = new Date("April 26, 2017 "+date_now1+":00");
            dt2 = new Date("April 26, 2017 "+date_future1+":00");
            hours=diff_hours(dt1, dt2);
            totalHr= totalHr + hours ;
            totalHr= totalHr  - CurrentHour;
            $('.total').val(totalHr);
            var checkBox1 = document.getElementById("ch5");
                        if(FlixebleDay == checkBox1.value){
                          $('#hr5').val((hours-SpHr) + ' Hr');
                          }else{
                            $('#hr5').val(hours + ' Hr');
                          }
          }
    });




    $('#timepicker13,#timepicker14').on('change',function(){

          var sH1=$('#timepicker13').val();
          var eH1=$('#timepicker14').val();
          if(sH1 != null && eH1 != null){
          var date_now1 =getHours(sH1) ;
            var date_future1 =getHours(eH1) ;
            dt1 = new Date("April 26, 2017 "+date_now1+":00");
            dt2 = new Date("April 26, 2017 "+date_future1+":00");
            hours=diff_hours(dt1, dt2);
            totalHr= totalHr + hours ;
            totalHr= totalHr  - CurrentHour;
            $('.total').val(totalHr);
            var checkBox1 = document.getElementById("ch6");
                        if(FlixebleDay == checkBox1.value){
                          $('#hr6').val((hours-SpHr) + ' Hr');
                          }else{
                            $('#hr6').val(hours + ' Hr');
                          }
          }
    });



    $('#timepicker15,#timepicker16').on('change',function(){

          var sH1=$('#timepicker15').val();
          var eH1=$('#timepicker16').val();
          if(sH1 != null && eH1 != null){
          var date_now1 =getHours(sH1) ;
            var date_future1 =getHours(eH1) ;
            dt1 = new Date("April 26, 2017 "+date_now1+":00");
            dt2 = new Date("April 26, 2017 "+date_future1+":00");
            hours=diff_hours(dt1, dt2);
            totalHr= totalHr + hours ;
            totalHr= totalHr  - CurrentHour;
            $('.total').val(totalHr);
            var checkBox1 = document.getElementById("ch7");
                        if(FlixebleDay == checkBox1.value){
                          $('#hr7').val((hours-SpHr) + ' Hr');
                          }else{
                            $('#hr7').val(hours + ' Hr');
                          }
          }
    });



    $('#Special_Hrs_1').click(function(){
      var checkBox = document.getElementById("Special_Hrs_1");
      totalHr=0;
      if (checkBox.checked == true){

          var sH1=$('#timepicker3').val();
          var eH1=$('#timepicker4').val();
          if(sH1 != null && eH1 != null){
          var date_now1 =getHours(sH1) ;
            var date_future1 =getHours(eH1) ;
            dt1 = new Date("April 26, 2017 "+date_now1+":00");
            dt2 = new Date("April 26, 2017 "+date_future1+":00");
            hours=diff_hours(dt1, dt2);
            totalHr= totalHr + hours ;

          }




    var sH2=$('#timepicker5').val();
    var eH2=$('#timepicker6').val();
    if(sH2 != null && eH2 != null){
    var date_now1 =getHours(sH2) ;
    var date_future1 =getHours(eH2) ;
    dt1 = new Date("April 26, 2017 "+date_now1+":00");
    dt2 = new Date("April 26, 2017 "+date_future1+":00");
    hours=diff_hours(dt1, dt2);
    totalHr= totalHr + hours ;

    }



    var sH3=$('#timepicker7').val();
    var eH3=$('#timepicker8').val();

    if(sH3 != null && eH3 != null){
    var date_now1 =getHours(sH3) ;
    var date_future1 =getHours(eH3) ;
    dt1 = new Date("April 26, 2017 "+date_now1+":00");
    dt2 = new Date("April 26, 2017 "+date_future1+":00");
    hours=diff_hours(dt1, dt2);
    totalHr= totalHr + hours ;

    }


    var sH4=$('#timepicker9').val();
    var eH4=$('#timepicker10').val();
    if(sH4 != null && eH4 != null){
    var date_now1 =getHours(sH4) ;
    var date_future1 =getHours(eH4) ;
    dt1 = new Date("April 26, 2017 "+date_now1+":00");
    dt2 = new Date("April 26, 2017 "+date_future1+":00");
    hours=diff_hours(dt1, dt2);
    totalHr= totalHr + hours ;

    }




    var sH5=$('#timepicker11').val();
    var eH5=$('#timepicker12').val();
    if(sH5 != null && eH5 != null){
    var date_now1 =getHours(sH5) ;
    var date_future1 =getHours(eH5) ;
    dt1 = new Date("April 26, 2017 "+date_now1+":00");
    dt2 = new Date("April 26, 2017 "+date_future1+":00");
    hours=diff_hours(dt1, dt2);
    totalHr= totalHr + hours ;

    }





    var sH6=$('#timepicker13').val();
    var eH6=$('#timepicker14').val();
    if(sH6 != null && eH6 != null){
    var date_now1 =getHours(sH6) ;
    var date_future1 =getHours(eH6) ;
    dt1 = new Date("April 26, 2017 "+date_now1+":00");
    dt2 = new Date("April 26, 2017 "+date_future1+":00");
    hours=diff_hours(dt1, dt2);
    totalHr= totalHr + hours ;


    }




    var sH7=$('#timepicker15').val();
    var eH7=$('#timepicker16').val();
    if(sH7 != null && eH7 != null){
    var date_now1 =getHours(sH7) ;
    var date_future1 =getHours(eH7) ;
    dt1 = new Date("April 26, 2017 "+date_now1+":00");
    dt2 = new Date("April 26, 2017 "+date_future1+":00");
    hours=diff_hours(dt1, dt2);
    totalHr= totalHr + hours ;

    }
    totalHr=totalHr-SpHr
    $('.total').val(totalHr);

      }else{


                    startHour=$('#timepickerm').val();
                    EndHour=$('#timepicker2').val();
                    if(startHour != null && EndHour != null){
                  var date_now1 =getHours(startHour) ;
                    var date_future1 =getHours(EndHour) ;
                    dt1 = new Date("April 26, 2017 "+date_now1+":00");
                    dt2 = new Date("April 26, 2017 "+date_future1+":00");
                    CurrentHour=diff_hours(dt1, dt2);
                    totalHr=CurrentHour*days;
                    totalHr=totalHr-SpHr
                    }
                    $('.total').val(totalHr);
      }


      let form = document.getElementsByClassName('checked');

    for (i = 0; i < form.length; i++) {
      var j=i+1;
      if (!form[i].checked) {
        if(FlixebleDay == form[i].value){
         he=CurrentHour - SpHr;

          $('#hr'+j).val(he + ' Hr');
        }else{
          $('#hr'+j).val(CurrentHour + ' Hr');
        }
      }else{
        if(FlixebleDay == form[i].value){
         he=CurrentHour - SpHr;

          $('#hr'+j).val("Hour");
        }else{
          $('#hr'+j).val("Hour");
        }

      }
    }


    });




    $('#ch1').on('click',function(){
     var checkBox1 = document.getElementById("ch1");

     var checkBox = document.getElementById("Special_Hrs_1");
     if (checkBox1.checked == true){
              $('#timepicker3').attr('disabled', true);
              $('#timepicker4').attr('disabled', true);
              $('#timepicker3').val('0:00 AM/PM');
          $('#timepicker4').val('0:00 AM/PM');
          $('#hr1').val('Hour');
      if (checkBox.checked == true){
        var sH1=$('#timepickerm').val();
          var eH1=$('#timepicker2').val();

          if(sH1 != null && eH1 != null){
          var date_now1 =getHours(sH1) ;
            var date_future1 =getHours(eH1) ;
            dt1 = new Date("April 26, 2017 "+date_now1+":00");
            dt2 = new Date("April 26, 2017 "+date_future1+":00");
            hours=diff_hours(dt1, dt2);
            totalHr= totalHr - hours ;
            if(FlixebleDay == checkBox1.value){
              totalHr=totalHr+SpHr;
            }


          }
      }else{
                    startHour=$('#timepickerm').val();
                    EndHour=$('#timepicker2').val();
                    if(startHour != null && EndHour != null){
                  var date_now1 =getHours(startHour) ;
                    var date_future1 =getHours(EndHour) ;
                    dt1 = new Date("April 26, 2017 "+date_now1+":00");
                    dt2 = new Date("April 26, 2017 "+date_future1+":00");
                    CurrentHour=diff_hours(dt1, dt2);
                    totalHr= totalHr - CurrentHour ;
                    if(FlixebleDay == checkBox1.value){
              totalHr=totalHr+SpHr;
            }
                    }

      }



     }else{

      $('#timepicker3').val($('#timepickerm').val());
          $('#timepicker4').val($('#timepicker2').val());
        if (checkBox.checked == true){

        var sH1=$('#timepicker3').val();
          var eH1=$('#timepicker4').val();
          if(sH1 != null && eH1 != null){
          var date_now1 =getHours(sH1) ;
            var date_future1 =getHours(eH1) ;
            dt1 = new Date("April 26, 2017 "+date_now1+":00");
            dt2 = new Date("April 26, 2017 "+date_future1+":00");
            hours=diff_hours(dt1, dt2);
            totalHr= totalHr + hours ;
            if(FlixebleDay == checkBox1.value){
              totalHr=totalHr-SpHr;
              $('#hr1').val((hours-SpHr) + ' Hr');
            }else{
              $('#hr1').val(hours + ' Hr');
            }
            $('#timepicker3').attr('disabled', false);
              $('#timepicker4').attr('disabled', false);
          }
      }else{
                    startHour=$('#timepickerm').val();
                    EndHour=$('#timepicker2').val();
                    if(startHour != null && EndHour != null){
                  var date_now1 =getHours(startHour) ;
                    var date_future1 =getHours(EndHour) ;
                    dt1 = new Date("April 26, 2017 "+date_now1+":00");
                    dt2 = new Date("April 26, 2017 "+date_future1+":00");
                    CurrentHour=diff_hours(dt1, dt2);
                    totalHr= totalHr + CurrentHour ;
                    if(FlixebleDay == checkBox1.value){
                          totalHr=totalHr-SpHr;
                          $('#hr1').val((CurrentHour-SpHr) + ' Hr');
                          }else{
                            $('#hr1').val(CurrentHour + ' Hr');
                          }

                    }

      }

        }


        $('.total').val(totalHr);
    });











    $('#ch2').on('click',function(){
     var checkBox1 = document.getElementById("ch2");

     var checkBox = document.getElementById("Special_Hrs_1");
     if (checkBox1.checked == true){
              $('#timepicker5').attr('disabled', true);
              $('#timepicker6').attr('disabled', true);
              $('#timepicker5').val('0:00 AM/PM');
          $('#timepicker6').val('0:00 AM/PM');
          $('#hr2').val('Hour');
      if (checkBox.checked == true){
        var sH1=$('#timepickerm').val();
          var eH1=$('#timepicker2').val();

          if(sH1 != null && eH1 != null){
          var date_now1 =getHours(sH1) ;
            var date_future1 =getHours(eH1) ;
            dt1 = new Date("April 26, 2017 "+date_now1+":00");
            dt2 = new Date("April 26, 2017 "+date_future1+":00");
            hours=diff_hours(dt1, dt2);
            totalHr= totalHr - hours ;
            if(FlixebleDay == checkBox1.value){
              totalHr=totalHr+SpHr;
            }


          }
      }else{
                    startHour=$('#timepickerm').val();
                    EndHour=$('#timepicker2').val();
                    if(startHour != null && EndHour != null){
                  var date_now1 =getHours(startHour) ;
                    var date_future1 =getHours(EndHour) ;
                    dt1 = new Date("April 26, 2017 "+date_now1+":00");
                    dt2 = new Date("April 26, 2017 "+date_future1+":00");
                    CurrentHour=diff_hours(dt1, dt2);
                    totalHr= totalHr - CurrentHour ;
                    if(FlixebleDay == checkBox1.value){
              totalHr=totalHr+SpHr;
            }
                    }

      }



     }else{

      $('#timepicker5').val($('#timepickerm').val());
          $('#timepicker6').val($('#timepicker2').val());
        if (checkBox.checked == true){

        var sH1=$('#timepicker5').val();
          var eH1=$('#timepicker6').val();
          if(sH1 != null && eH1 != null){
          var date_now1 =getHours(sH1) ;
            var date_future1 =getHours(eH1) ;
            dt1 = new Date("April 26, 2017 "+date_now1+":00");
            dt2 = new Date("April 26, 2017 "+date_future1+":00");
            hours=diff_hours(dt1, dt2);
            totalHr= totalHr + hours ;
            if(FlixebleDay == checkBox1.value){
              totalHr=totalHr-SpHr;
              $('#hr2').val((hours-SpHr) + ' Hr');
            }else{
              $('#hr2').val(hours + ' Hr');
            }
            $('#timepicker5').attr('disabled', false);
              $('#timepicker6').attr('disabled', false);
          }
      }else{
                    startHour=$('#timepickerm').val();
                    EndHour=$('#timepicker2').val();
                    if(startHour != null && EndHour != null){
                  var date_now1 =getHours(startHour) ;
                    var date_future1 =getHours(EndHour) ;
                    dt1 = new Date("April 26, 2017 "+date_now1+":00");
                    dt2 = new Date("April 26, 2017 "+date_future1+":00");
                    CurrentHour=diff_hours(dt1, dt2);
                    totalHr= totalHr + CurrentHour ;
                    if(FlixebleDay == checkBox1.value){
                          totalHr=totalHr-SpHr;
                          $('#hr2').val((CurrentHour-SpHr) + ' Hr');
                          }else{
                            $('#hr2').val(CurrentHour + ' Hr');
                          }

                    }

      }

        }


        $('.total').val(totalHr);
    });












    $('#ch3').on('click',function(){
     var checkBox1 = document.getElementById("ch3");

     var checkBox = document.getElementById("Special_Hrs_1");
     if (checkBox1.checked == true){
              $('#timepicker7').attr('disabled', true);
              $('#timepicker8').attr('disabled', true);
              $('#timepicker7').val('0:00 AM/PM');
          $('#timepicker8').val('0:00 AM/PM');
          $('#hr3').val('Hour');
      if (checkBox.checked == true){
        var sH1=$('#timepickerm').val();
          var eH1=$('#timepicker2').val();

          if(sH1 != null && eH1 != null){
          var date_now1 =getHours(sH1) ;
            var date_future1 =getHours(eH1) ;
            dt1 = new Date("April 26, 2017 "+date_now1+":00");
            dt2 = new Date("April 26, 2017 "+date_future1+":00");
            hours=diff_hours(dt1, dt2);
            totalHr= totalHr - hours ;
            if(FlixebleDay == checkBox1.value){
              totalHr=totalHr+SpHr;
            }


          }
      }else{
                    startHour=$('#timepickerm').val();
                    EndHour=$('#timepicker2').val();
                    if(startHour != null && EndHour != null){
                  var date_now1 =getHours(startHour) ;
                    var date_future1 =getHours(EndHour) ;
                    dt1 = new Date("April 26, 2017 "+date_now1+":00");
                    dt2 = new Date("April 26, 2017 "+date_future1+":00");
                    CurrentHour=diff_hours(dt1, dt2);
                    totalHr= totalHr - CurrentHour ;
                    if(FlixebleDay == checkBox1.value){
              totalHr=totalHr+SpHr;
            }
                    }

      }



     }else{

      $('#timepicker7').val($('#timepickerm').val());
          $('#timepicker8').val($('#timepicker2').val());
        if (checkBox.checked == true){

        var sH1=$('#timepicker7').val();
          var eH1=$('#timepicker8').val();
          if(sH1 != null && eH1 != null){
          var date_now1 =getHours(sH1) ;
            var date_future1 =getHours(eH1) ;
            dt1 = new Date("April 26, 2017 "+date_now1+":00");
            dt2 = new Date("April 26, 2017 "+date_future1+":00");
            hours=diff_hours(dt1, dt2);
            totalHr= totalHr + hours ;
            if(FlixebleDay == checkBox1.value){
              totalHr=totalHr-SpHr;
              $('#hr3').val((hours-SpHr) + ' Hr');
            }else{
              $('#hr3').val(hours + ' Hr');
            }
            $('#timepicker7').attr('disabled', false);
              $('#timepicker8').attr('disabled', false);
          }
      }else{
                    startHour=$('#timepickerm').val();
                    EndHour=$('#timepicker2').val();
                    if(startHour != null && EndHour != null){
                  var date_now1 =getHours(startHour) ;
                    var date_future1 =getHours(EndHour) ;
                    dt1 = new Date("April 26, 2017 "+date_now1+":00");
                    dt2 = new Date("April 26, 2017 "+date_future1+":00");
                    CurrentHour=diff_hours(dt1, dt2);
                    totalHr= totalHr + CurrentHour ;
                    if(FlixebleDay == checkBox1.value){
              totalHr=totalHr-SpHr;
              $('#hr3').val((CurrentHour-SpHr) + ' Hr');
                          }else{
                            $('#hr3').val(CurrentHour + ' Hr');
                          }

                    }

      }

        }


        $('.total').val(totalHr);
    });










    $('#ch4').on('click',function(){
     var checkBox1 = document.getElementById("ch4");

     var checkBox = document.getElementById("Special_Hrs_1");
     if (checkBox1.checked == true){
              $('#timepicker9').attr('disabled', true);
              $('#timepicker10').attr('disabled', true);
              $('#timepicker9').val('0:00 AM/PM');
          $('#timepicker10').val('0:00 AM/PM');
          $('#hr4').val('Hour');
      if (checkBox.checked == true){
        var sH1=$('#timepickerm').val();
          var eH1=$('#timepicker2').val();

          if(sH1 != null && eH1 != null){
          var date_now1 =getHours(sH1) ;
            var date_future1 =getHours(eH1) ;
            dt1 = new Date("April 26, 2017 "+date_now1+":00");
            dt2 = new Date("April 26, 2017 "+date_future1+":00");
            hours=diff_hours(dt1, dt2);
            totalHr= totalHr - hours ;
            if(FlixebleDay == checkBox1.value){
              totalHr=totalHr+SpHr;
            }


          }
      }else{
                    startHour=$('#timepickerm').val();
                    EndHour=$('#timepicker2').val();
                    if(startHour != null && EndHour != null){
                  var date_now1 =getHours(startHour) ;
                    var date_future1 =getHours(EndHour) ;
                    dt1 = new Date("April 26, 2017 "+date_now1+":00");
                    dt2 = new Date("April 26, 2017 "+date_future1+":00");
                    CurrentHour=diff_hours(dt1, dt2);
                    totalHr= totalHr - CurrentHour ;
                      if(FlixebleDay == checkBox1.value){
                          totalHr=totalHr+SpHr;
                        }
                    }

      }



     }else{

      $('#timepicker9').val($('#timepickerm').val());
          $('#timepicker10').val($('#timepicker2').val());
        if (checkBox.checked == true){

        var sH1=$('#timepicker9').val();
          var eH1=$('#timepicker10').val();
          if(sH1 != null && eH1 != null){
          var date_now1 =getHours(sH1) ;
            var date_future1 =getHours(eH1) ;
            dt1 = new Date("April 26, 2017 "+date_now1+":00");
            dt2 = new Date("April 26, 2017 "+date_future1+":00");
            hours=diff_hours(dt1, dt2);
            totalHr= totalHr + hours ;
            if(FlixebleDay == checkBox1.value){
              totalHr=totalHr-SpHr;
              $('#hr4').val((hours-SpHr) + ' Hr');
            }else{
              $('#hr4').val(hours + ' Hr');
            }
            $('#timepicker9').attr('disabled', false);
              $('#timepicker10').attr('disabled', false);
          }
      }else{
                    startHour=$('#timepickerm').val();
                    EndHour=$('#timepicker2').val();
                    if(startHour != null && EndHour != null){
                  var date_now1 =getHours(startHour) ;
                    var date_future1 =getHours(EndHour) ;
                    dt1 = new Date("April 26, 2017 "+date_now1+":00");
                    dt2 = new Date("April 26, 2017 "+date_future1+":00");
                    CurrentHour=diff_hours(dt1, dt2);
                    totalHr= totalHr + CurrentHour ;
                    if(FlixebleDay == checkBox1.value){
                          totalHr=totalHr-SpHr;
                          $('#hr4').val((CurrentHour-SpHr) + ' Hr');
                          }else{
                            $('#hr4').val(CurrentHour + ' Hr');
                          }

                    }

      }

        }


        $('.total').val(totalHr);
    });
















    $('#ch5').on('click',function(){
     var checkBox1 = document.getElementById("ch5");

     var checkBox = document.getElementById("Special_Hrs_1");
     if (checkBox1.checked == true){
              $('#timepicker11').attr('disabled', true);
              $('#timepicker12').attr('disabled', true);
              $('#timepicker11').val('0:00 AM/PM');
          $('#timepicker12').val('0:00 AM/PM');
          $('#hr5').val('Hour');
      if (checkBox.checked == true){
        var sH1=$('#timepickerm').val();
          var eH1=$('#timepicker2').val();

          if(sH1 != null && eH1 != null){
          var date_now1 =getHours(sH1) ;
            var date_future1 =getHours(eH1) ;
            dt1 = new Date("April 26, 2017 "+date_now1+":00");
            dt2 = new Date("April 26, 2017 "+date_future1+":00");
            hours=diff_hours(dt1, dt2);
            totalHr= totalHr - hours ;
            if(FlixebleDay == checkBox1.value){
              totalHr=totalHr+SpHr;
            }


          }
      }else{
                    startHour=$('#timepickerm').val();
                    EndHour=$('#timepicker2').val();
                    if(startHour != null && EndHour != null){
                  var date_now1 =getHours(startHour) ;
                    var date_future1 =getHours(EndHour) ;
                    dt1 = new Date("April 26, 2017 "+date_now1+":00");
                    dt2 = new Date("April 26, 2017 "+date_future1+":00");
                    CurrentHour=diff_hours(dt1, dt2);
                    totalHr= totalHr - CurrentHour ;
                      if(FlixebleDay == checkBox1.value){
                          totalHr=totalHr+SpHr;
                        }
                    }

      }



     }else{
      $('#timepicker11').val($('#timepickerm').val());
          $('#timepicker12').val($('#timepicker2').val());

        if (checkBox.checked == true){

        var sH1=$('#timepicker11').val();
          var eH1=$('#timepicker12').val();
          if(sH1 != null && eH1 != null){
          var date_now1 =getHours(sH1) ;
            var date_future1 =getHours(eH1) ;
            dt1 = new Date("April 26, 2017 "+date_now1+":00");
            dt2 = new Date("April 26, 2017 "+date_future1+":00");
            hours=diff_hours(dt1, dt2);
            totalHr= totalHr + hours ;
            if(FlixebleDay == checkBox1.value){
              totalHr=totalHr-SpHr;
              $('#hr5').val((hours-SpHr) + ' Hr');
            }else{
              $('#hr5').val(hours + ' Hr');
            }
            $('#timepicker11').attr('disabled', false);
              $('#timepicker12').attr('disabled', false);
          }
      }else{
                    startHour=$('#timepickerm').val();
                    EndHour=$('#timepicker2').val();
                    if(startHour != null && EndHour != null){
                  var date_now1 =getHours(startHour) ;
                    var date_future1 =getHours(EndHour) ;
                    dt1 = new Date("April 26, 2017 "+date_now1+":00");
                    dt2 = new Date("April 26, 2017 "+date_future1+":00");
                    CurrentHour=diff_hours(dt1, dt2);
                    totalHr= totalHr + CurrentHour ;
                    if(FlixebleDay == checkBox1.value){
                          totalHr=totalHr-SpHr;
                          $('#hr5').val((CurrentHour-SpHr) + ' Hr');
                          }else{
                            $('#hr5').val(CurrentHour + ' Hr');
                          }

                    }

      }

        }


        $('.total').val(totalHr);
    });









    $('#ch6').on('click',function(){
     var checkBox1 = document.getElementById("ch6");

               var checkBox = document.getElementById("Special_Hrs_1");
                  if (checkBox1.checked == true){
                        $('#timepicker13').attr('disabled', true);
                        $('#timepicker14').attr('disabled', true);
                        $('#timepicker13').val('0:00 AM/PM');
                        $('#timepicker14').val('0:00 AM/PM');
                        $('#hr6').val('Hour');
                              if (checkBox.checked == true){
                                 var sH1=$('#timepickerm').val();
                                 var eH1=$('#timepicker2').val();

                                          if(sH1 != null && eH1 != null){
                                              var date_now1 =getHours(sH1) ;
                                              var date_future1 =getHours(eH1) ;
                                              dt1 = new Date("April 26, 2017 "+date_now1+":00");
                                              dt2 = new Date("April 26, 2017 "+date_future1+":00");
                                              hours=diff_hours(dt1, dt2);
                                              totalHr= totalHr - hours ;
                                                  if(FlixebleDay == checkBox1.value){
                                                    totalHr=totalHr+SpHr;
                                                  }else{
                                                    $('#hr6').val((hours-SpHr) + 'Hr');
                                                  }
                                          }
                              }else{
                                  startHour=$('#timepickerm').val();
                                  EndHour=$('#timepicker2').val();
                                              if(startHour != null && EndHour != null){
                                                        var date_now1 =getHours(startHour) ;
                                                        var date_future1 =getHours(EndHour) ;
                                                        dt1 = new Date("April 26, 2017 "+date_now1+":00");
                                                        dt2 = new Date("April 26, 2017 "+date_future1+":00");
                                                        CurrentHour=diff_hours(dt1, dt2);
                                                        totalHr= totalHr - CurrentHour ;
                                                              if(FlixebleDay == checkBox1.value){
                                                                  totalHr=totalHr+SpHr;
                                                                }else{
                                                                  $('#hr6').val((hours-SpHr) + 'Hr');
                                                                }
                                                        }

                              }



     }else{
          $('#timepicker13').val($('#timepickerm').val());
          $('#timepicker14').val($('#timepicker2').val());

        if (checkBox.checked == true){

        var sH1=$('#timepicker13').val();
          var eH1=$('#timepicker14').val();
          if(sH1 != null && eH1 != null){
          var date_now1 =getHours(sH1) ;
            var date_future1 =getHours(eH1) ;
            dt1 = new Date("April 26, 2017 "+date_now1+":00");
            dt2 = new Date("April 26, 2017 "+date_future1+":00");
            hours=diff_hours(dt1, dt2);
            totalHr= totalHr + hours ;
            if(FlixebleDay == checkBox1.value){
              totalHr=totalHr-SpHr;
              $('#hr6').val((hours-SpHr) + 'Hr');
            }else{
              $('#hr6').val(hours + 'Hr');
            }
            $('#timepicker13').attr('disabled', false);
              $('#timepicker14').attr('disabled', false);
          }
      }else{
                    startHour=$('#timepickerm').val();
                    EndHour=$('#timepicker2').val();
                    if(startHour != null && EndHour != null){
                  var date_now1 =getHours(startHour) ;
                    var date_future1 =getHours(EndHour) ;
                    dt1 = new Date("April 26, 2017 "+date_now1+":00");
                    dt2 = new Date("April 26, 2017 "+date_future1+":00");
                    CurrentHour=diff_hours(dt1, dt2);
                    totalHr= totalHr + CurrentHour ;
                    if(FlixebleDay == checkBox1.value){
                          totalHr=totalHr-SpHr;
                          $('#hr6').val((CurrentHour-SpHr) + ' Hr');
                        }else{
                          $('#hr6').val(CurrentHour + ' Hr');
                        }

                    }

      }

        }


        $('.total').val(totalHr);
    });











    $('#ch7').on('click',function(){
     var checkBox1 = document.getElementById("ch7");

     var checkBox = document.getElementById("Special_Hrs_1");
     if (checkBox1.checked == true){
              $('#timepicker15').attr('disabled', true);
              $('#timepicker16').attr('disabled', true);
              $('#timepicker15').val('0:00 AM/PM');
          $('#timepicker16').val('0:00 AM/PM');
          $('#hr7').val('Hour');
      if (checkBox.checked == true){
        var sH1=$('#timepickerm').val();
          var eH1=$('#timepicker2').val();

          if(sH1 != null && eH1 != null){
          var date_now1 =getHours(sH1) ;
            var date_future1 =getHours(eH1) ;
            dt1 = new Date("April 26, 2017 "+date_now1+":00");
            dt2 = new Date("April 26, 2017 "+date_future1+":00");
            hours=diff_hours(dt1, dt2);
            totalHr= totalHr - hours ;
            if(FlixebleDay == checkBox1.value){
              totalHr=totalHr+SpHr;
            }


          }
      }else{
                    startHour=$('#timepickerm').val();
                    EndHour=$('#timepicker2').val();
                    if(startHour != null && EndHour != null){
                  var date_now1 =getHours(startHour) ;
                    var date_future1 =getHours(EndHour) ;
                    dt1 = new Date("April 26, 2017 "+date_now1+":00");
                    dt2 = new Date("April 26, 2017 "+date_future1+":00");
                    CurrentHour=diff_hours(dt1, dt2);
                    totalHr= totalHr - CurrentHour ;
                      if(FlixebleDay == checkBox1.value){
                          totalHr=totalHr+SpHr;
                        }
                    }

      }



     }else{

      $('#timepicker15').val($('#timepickerm').val());
          $('#timepicker16').val($('#timepicker2').val());
        if (checkBox.checked == true){

        var sH1=$('#timepicker15').val();
          var eH1=$('#timepicker16').val();
          if(sH1 != null && eH1 != null){
            var date_now1 =getHours(sH1) ;
            var date_future1 =getHours(eH1) ;
            dt1 = new Date("April 26, 2017 "+date_now1+":00");
            dt2 = new Date("April 26, 2017 "+date_future1+":00");
            hours=diff_hours(dt1, dt2);
            totalHr= totalHr + hours ;
            if(FlixebleDay == checkBox1.value){
              totalHr=totalHr-SpHr;
              $('#hr7').val((hours-SpHr) + ' Hr');
            }else{
                $('#hr7').val(hours + ' Hr');
            }

            $('#timepicker15').attr('disabled', false);
              $('#timepicker16').attr('disabled', false);
          }
      }else{
                    startHour=$('#timepickerm').val();
                    EndHour=$('#timepicker2').val();
                    if(startHour != null && EndHour != null){
                  var date_now1 =getHours(startHour) ;
                    var date_future1 =getHours(EndHour) ;
                    dt1 = new Date("April 26, 2017 "+date_now1+":00");
                    dt2 = new Date("April 26, 2017 "+date_future1+":00");
                    CurrentHour=diff_hours(dt1, dt2);
                    totalHr= totalHr + CurrentHour ;
                    if(FlixebleDay == checkBox1.value){
                          totalHr=totalHr-SpHr;
                          $('#hr7').val((CurrentHour-SpHr) + ' Hr');
                        }else{
                          $('#hr7').val(CurrentHour + ' Hr');
                        }


                    }

      }

        }


        $('.total').val(totalHr);
    });














      });










    function myFunction() {
      var checkBox = document.getElementById("Special_Hrs_1");
      var text = document.getElementsByClassName("timepicker11");
      var text11 = document.getElementsByClassName("timepicker22");
      var text1 = document.getElementsByClassName("timepicker1");
      var checked = document.getElementsByClassName("checked");
      if (checkBox.checked == true){
       // check=true;
        $(text).attr('disabled', false);
        $(text11).attr('disabled', false);
        $(text1).attr('disabled', true);
       $(checked).attr('checked', false);

       $('.timepicker11').val($('#timepickerm').val());
       $('.timepicker22').val($('#timepicker2').val());


      } else {
        //check=false;

       $('.timepicker11').val($('#timepickerm').val());
       $('.timepicker22').val($('#timepicker2').val());
        $(text).attr('disabled', true);
        $(text11).attr('disabled', true);
        $(text1).attr('disabled', false);
        $(checked).attr('checked', false);

      }
    }








    function getHours(time){
      var time = time;
        if(time)
        {
            var hours = Number(time.match(/^(\d+)/)[1]);
            var minutes = Number(time.match(/:(\d+)/)[1]);
            var AMPM = time.match(/\s(.*)$/)[1];
            if(AMPM == "PM" && hours<12) hours = hours+12;
            if(AMPM == "AM" && hours==12) hours = hours-12;
            var sHours = hours.toString();
            var sMinutes = minutes.toString();
            if(hours<10) sHours = "0" + sHours;
            if(minutes<10) sMinutes = "0" + sMinutes;
            return sHours+":"+minutes ;
        }
    }

    function diff_hours(dt2, dt1)
     {

      var diff =(dt2.getTime() - dt1.getTime()) / 1000;
      diff /= (60 * 60);
      return Math.abs(Math.round(diff));

     }

      @if(isset($schedule->rest_days) && $schedule->rest_days)
      jQuery('#Special_Hrs_1').trigger('click');
      @endif

      @if(isset($schedule->rest_days) && $schedule->rest_days)
        @foreach($schedule->rest_days as $rest_day)
            jQuery('[name="restDays[]"][value="{{$rest_day}}"]').trigger('click');
        @endforeach
      @endif
     @if(isset($schedule->flexible_time['offTimeArray']) && $schedule->flexible_time['offTimeArray'])

    @else
        @if(isset($schedule->start_time) && $schedule->start_time)
                jQuery('[name="startTimeArray[]"]').val('{{$schedule->start_time}}');
                jQuery('[name="offTimeArray[]"]').val('{{$schedule->off_time}}');
                var date_now1 =getHours('{{$schedule->start_time}}') ;
                var date_future1 =getHours('{{$schedule->off_time}}') ;
                dt1 = new Date("April 26, 2017 "+date_now1+":00");
                dt2 = new Date("April 26, 2017 "+date_future1+":00");
                hours=diff_hours(dt1, dt2);
                $('.h.tp').val(hours + ' Hr');
            @endif
     @endif

    </script>

@endpush
