<?php
$title = 'Employee Appointment';

include('layout/header.php');
?>




<main id="main" class="main ">

    <div class="card">
        <div class="card-body">
            <h2>Employee Appointment</h2>
            <br/>


            <h2 class="row">
                Select Employee
                <div class="col-3">
                    <select class="form-control" id="employees">
                        <option readonly>-- select employee --</option>
                    </select>
                </div>


            </h2>


            <style>

                .container-schedule {
                    overflow-y: auto;
                }
                @media screen and (max-width: 1300px) {
                    .container-schedule {
                        height: 500px;
                    }

                }

                @media screen and (min-width: 1301px) {
                    .container-schedule {
                        height: 800px;
                        /*zoom: 0.8;*/

                    }
                }


            </style>

            <div class="container-fluid container-schedule">

                <h2 class="p-4">
                    <span class="bi bi-calendar" style="color: #ff0080"></span> Employee Schedule

                </h2>

                <br/>

                <div class="row">
                    <div class="card col-6 col-md-12">
                        <div class="card-body p-2">
                            <div class="col-3 float-start p-4">
                                <div class="form-check form-switch ">
                                    <input class="form-check-input" type="checkbox" id="satSwitch" name="darkmode" value="yes"
                                           checked>
                                    <label class="form-check-label" for="mySwitch">Saturday</label>
                                </div>
                            </div>

                            <div class="col-8 float-end p-0">
                                <div id="slider-outer-div">
                                    <!--                        <div id="slider-max-label" class="slider-label"></div>-->
                                    <!--                        <div id="slider-min-label" class="slider-label"></div>-->
                                    <div id="slider-div">
                                        <div>8:00 am</div>
                                        <div>
                                            <input id="ex2" type="text" step="1" data-slider-min="8"
                                                   data-slider-max="18" data-slider-value="[8,18]"
                                                   data-slider-tooltip="hide" />
                                        </div>
                                        <div>18:00 pm</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="card">
                        <div class="card-body p-2">
                            <div class="col-3 float-start p-4">
                                <div class="form-check form-switch ">
                                    <input class="form-check-input" type="checkbox" id="monSwitch" name="darkmode" value="yes"
                                           checked>
                                    <label class="form-check-label" for="mySwitch">Monday</label>
                                </div>
                            </div>

                            <div class="col-8 float-end p-0">
                                <div id="slider-outer-div">
                                    <!--                        <div id="slider-max1-label" class="slider-label"></div>-->
                                    <!--                        <div id="slider-min1-label" class="slider-label"></div>-->
                                    <div id="slider-div">
                                        <div>8:00 am</div>
                                        <div>
                                            <input id="ex3" type="text" step="1" data-slider-min="8"
                                                   data-slider-max="18" data-slider-value="[8,18]"
                                                   data-slider-tooltip="hide" />
                                        </div>
                                        <div>18:00 pm</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="card">
                        <div class="card-body p-2">
                            <div class="col-3 float-start p-4">
                                <div class="form-check form-switch ">
                                    <input class="form-check-input" type="checkbox" id="tusSwitch" name="darkmode" value="yes"
                                           checked>
                                    <label class="form-check-label" for="mySwitch">Tuesday</label>
                                </div>
                            </div>

                            <div class="col-8 float-end p-0">
                                <div id="slider-outer-div">
                                    <!--                        <div id="slider-max2-label" class="slider-label"></div>-->
                                    <!--                        <div id="slider-min2-label" class="slider-label"></div>-->
                                    <div id="slider-div">
                                        <div>8:00 am</div>
                                        <div>
                                            <input id="ex4" type="text" step="1" data-slider-min="8"
                                                   data-slider-max="18" data-slider-value="[8,18]"
                                                   data-slider-tooltip="hide" />
                                        </div>
                                        <div>18:00 pm</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="card">
                        <div class="card-body p-2">
                            <div class="col-3 float-start p-4">
                                <div class="form-check form-switch ">
                                    <input class="form-check-input" type="checkbox" id="wenSwitch" name="darkmode" value="yes"
                                           checked>
                                    <label class="form-check-label" for="mySwitch">Wednesday</label>
                                </div>
                            </div>

                            <div class="col-8 float-end p-0">
                                <div id="slider-outer-div">
                                    <!--                        <div id="slider-max3-label" class="slider-label"></div>-->
                                    <!--                        <div id="slider-min3-label" class="slider-label"></div>-->
                                    <div id="slider-div">
                                        <div>8:00 am</div>
                                        <div>
                                            <input id="ex5" type="text" step="1" data-slider-min="8"
                                                   data-slider-max="18" data-slider-value="[8,18]"
                                                   data-slider-tooltip="hide" />
                                        </div>
                                        <div>18:00 pm</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="card">
                        <div class="card-body p-2">
                            <div class="col-3 float-start p-4">
                                <div class="form-check form-switch ">
                                    <input class="form-check-input" type="checkbox" id="thuSwitch" name="darkmode" value="yes"
                                           checked>
                                    <label class="form-check-label" for="mySwitch">Thursday</label>
                                </div>
                            </div>

                            <div class="col-8 float-end p-0">
                                <div id="slider-outer-div">
                                    <!--                        <div id="slider-max4-label" class="slider-label"></div>-->
                                    <!--                        <div id="slider-min4-label" class="slider-label"></div>-->
                                    <div id="slider-div">
                                        <div>8:00 am</div>
                                        <div>
                                            <input id="ex6" type="text" step="1" data-slider-min="8"
                                                   data-slider-max="18" data-slider-value="[8,18]"
                                                   data-slider-tooltip="hide" />
                                        </div>
                                        <div>18:00 pm</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="card">
                        <div class="card-body p-2">
                            <div class="col-3 float-start p-4">
                                <div class="form-check form-switch ">
                                    <input class="form-check-input" type="checkbox" id="friSwitch" name="darkmode" value="yes"
                                           checked>
                                    <label class="form-check-label" for="mySwitch">Friday</label>
                                </div>
                            </div>

                            <div class="col-8 float-end p-0">
                                <div id="slider-outer-div">
                                    <!--                        <div id="slider-max5-label" class="slider-label"></div>-->
                                    <!--                        <div id="slider-min5-label" class="slider-label"></div>-->
                                    <div id="slider-div">
                                        <div>8:00 am</div>
                                        <div>
                                            <input id="ex7" type="text" step="1" data-slider-min="8"
                                                   data-slider-max="18" data-slider-value="[8,18]"
                                                   data-slider-tooltip="hide" />
                                        </div>
                                        <div>18:00 pm</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="card">
                        <div class="card-body p-2">
                            <div class="col-3 float-start p-4">
                                <div class="form-check form-switch ">
                                    <input class="form-check-input" type="checkbox" id="sunSwitch" name="darkmode" value="yes"
                                           checked>
                                    <label class="form-check-label" for="mySwitch">Sunday</label>
                                </div>
                            </div>

                            <div class="col-8 float-end p-0">
                                <div id="slider-outer-div">
                                    <!--                        <div id="slider-max6-label" class="slider-label"></div>-->
                                    <!--                        <div id="slider-min6-label" class="slider-label"></div>-->
                                    <div id="slider-div">
                                        <div>8:00 am</div>
                                        <div>
                                            <input id="ex8" type="text" step="1" data-slider-min="8"
                                                   data-slider-max="18" data-slider-value="[8,18]"
                                                   data-slider-tooltip="hide" />
                                        </div>
                                        <div>18:00 pm</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <script>
                const setLabel = (lbl, val, index) => {
                    if (index == 0) {
                        const label = $(`#slider-${lbl}-label`);
                        label.text(val);
                        const slider = $(`#slider-div .${lbl}-slider-handle`);
                        const rect = slider[0].getBoundingClientRect();
                        label.offset({
                            top: rect.top - 30,
                            left: rect.left
                        });
                    } else {

                        const label = $(`#slider-${lbl + index}-label`);
                        label.text(val);
                        const slider = $(`#slider-div .${lbl}-slider-handle`);
                        const rect = slider[index].getBoundingClientRect();
                        label.offset({
                            top: rect.top - 30,
                            left: rect.left
                        });
                    }


                }

                const setLabels2 = (values) => {
                    setLabel("min", values[0],0);
                    setLabel("max", values[1],0);
                }
                $('#ex2').slider().on('slide', function(ev) {

                    var div = (($("#ex2")[0]).parentElement.parentElement).querySelectorAll('div');
                    div[0].textContent = (ev.value[0]) + ':00 am';
                    div[div.length-1].textContent = (ev.value[1])+ ':00 pm';


                    setLabels2(ev.value);
                });
                setLabels2($('#ex2').attr("data-value").split(","));



                const setLabels3 = (values) => {
                    setLabel("min", values[0], 1);
                    setLabel("max", values[1], 1);
                }

                $('#ex3').slider().on('slide', function(ev) {

                    var div = (($("#ex3")[0]).parentElement.parentElement).querySelectorAll('div');
                    div[0].textContent = (ev.value[0]) + ':00 am';
                    div[div.length-1].textContent = (ev.value[1])+ ':00 pm';

                    setLabels3(ev.value);
                });
                setLabels3($('#ex3').attr("data-value").split(","));


                const setLabels4 = (values) => {
                    setLabel("min", values[0], 2);
                    setLabel("max", values[1], 2);
                }
                $('#ex4').slider().on('slide', function(ev) {

                    var div = (($("#ex4")[0]).parentElement.parentElement).querySelectorAll('div');
                    div[0].textContent = (ev.value[0]) + ':00 am';
                    div[div.length-1].textContent = (ev.value[1])+ ':00 pm';
                    setLabels4(ev.value);
                });
                setLabels4($('#ex4').attr("data-value").split(","));


                const setLabels5 = (values) => {
                    setLabel("min", values[0], 3);
                    setLabel("max", values[1], 3);
                }
                $('#ex5').slider().on('slide', function(ev) {
                    var div = (($("#ex5")[0]).parentElement.parentElement).querySelectorAll('div');
                    div[0].textContent = (ev.value[0]) + ':00 am';
                    div[div.length-1].textContent = (ev.value[1])+ ':00 pm';

                    setLabels5(ev.value);
                });
                setLabels5($('#ex5').attr("data-value").split(","));


                const setLabels6 = (values) => {
                    setLabel("min", values[0], 4);
                    setLabel("max", values[1], 4);
                }
                $('#ex6').slider().on('slide', function(ev) {

                    var div = (($("#ex6")[0]).parentElement.parentElement).querySelectorAll('div');
                    div[0].textContent = (ev.value[0]) + ':00 am';
                    div[div.length-1].textContent = (ev.value[1])+ ':00 pm';

                    setLabels6(ev.value);
                });
                setLabels6($('#ex6').attr("data-value").split(","));


                const setLabels7 = (values) => {
                    setLabel("min", values[0], 5);
                    setLabel("max", values[1], 5);
                }
                $('#ex7').slider().on('slide', function(ev) {

                    var div = (($("#ex7")[0]).parentElement.parentElement).querySelectorAll('div');
                    div[0].textContent = (ev.value[0]) + ':00 am';
                    div[div.length-1].textContent = (ev.value[1])+ ':00 pm';

                    setLabels7(ev.value);
                });
                setLabels7($('#ex7').attr("data-value").split(","));


                const setLabels8 = (values) => {
                    setLabel("min", values[0], 6);
                    setLabel("max", values[1], 6);
                }
                $('#ex8').slider().on('slide', function(ev) {

                    var div = (($("#ex8")[0]).parentElement.parentElement).querySelectorAll('div');
                    div[0].textContent = (ev.value[0]) + ':00 am';
                    div[div.length-1].textContent = (ev.value[1])+ ':00 pm';

                    setLabels8(ev.value);
                });
                setLabels8($('#ex8').attr("data-value").split(","));

            </script>

        </div>
    </div>



</main><!-- End #main -->


<?php
include('layout/footer.html');
?>
<script src="requestClass.js"></script>

<script>
    var req = new requestClass();

    loadEmployees();


    function loadEmployees(){
        var res = req.doRequest('user/getUsers', 'get');
        if(res.length > 0) {
            res.forEach((user)=>{
                let ele = `<option value="${user.id}">${user.name}</option>`;

                $("#employees").append(ele);
            })
        }
    }


    function loadEmployeeSchedule(id){
        var res = req.doRequest('getscheduleTime/'+id+'/1', 'get');
        if (res.time) {
            var times = res.time;
            for(var i=0; i< times.length; i++) {
                // setLabel("min", parseInt((times[i].start_time).substr(0,2)),i);
                // setLabel("max", parseInt((times[i].end_time).substr(0,2)),i);

                var div = (($("#ex"+ (i+2))[0]).parentElement.parentElement).querySelectorAll('div');
                div[0].textContent = (times[i].start_time).substr(0,5) +' am';
                div[div.length-1].textContent = (times[i].end_time).substr(0,5)+ ' pm';

            }
        }
    }


    $(document).ready(function (){
        $('#employees').on("change", function (){

            var id = $(this).val();
            loadEmployeeSchedule(id);





        })
    })



</script>


