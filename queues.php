<?php
$title = 'Queue Page';

include('layout/header.php');
?>
    <main id="main" class="main ">

        <div class="row">
            <div class="card col-12 col-sm-4 m-2 p-3 ">
                <h3>Queue</h3>


                <div class="row ">
                    <div class="search-bar col-12 col-sm-6">
                        <input class="form-control" type="text" name="query" placeholder="Search"
                               title="Enter search keyword">
                    </div>
                    <div class="col-2">
                        <button class="btn btn-sm btn-warning">
                            <i class="bi bi-plus"></i>
                        </button>
                    </div>
                    <div class="col-2">
                        <button class="btn btn-sm btn-danger" onclick="deleteQueue()">
                            <i class="bi bi-trash"></i>
                        </button>
                    </div>
                    <div class="col-2">
                        <button class="btn btn-sm btn-primary" id="checkAll" data-flag="false">
                            <i class="bi bi-check-all"></i>
                        </button>
                    </div>
                </div>


                <div id="content">

                </div>

            </div>


            <div class="card col-12 col-sm-7 m-2">
<!--                --><?php //include ('queue-options.php')?>
<!--                --><?php //include ('queue-details.php')?>
<!--                --><?php //include ('queue-schedule.php')?>


                <div id="OptionContent" style="display: block">
                    <?php include ('queue-options.php')?>
                </div>

                <div id="DetailContent" style="display: none">
                    <?php include ('queue-details.php')?>
                </div>

                <div id="scheduleContent" style="display: none">
                    <?php include ('queue-schedule.php')?>
                </div>


            </div>

        </div>

    </main><!-- End #main -->


<?php
include('layout/footer.html');
?>

<script>
    $(document).ready(() => {
        $('#checkAll').on('click', () => {
            let flag = $(this).attr('data-flag');
            let checkEle = $('.employee-check').toArray();
            checkEle.forEach((ele) => ele.checked = !flag);
            $(this).attr('data-flag', !flag);
        });



        $(document).on("click", '#showDetails',function (){
            var employees = $('.employee-check:checked');
            if(employees.length > 0) {
                var id = (employees[0]).closest('#userCard').getAttribute('data-id')

               getQueueInfo(id);


                $('#OptionContent').hide();
                $('#DetailContent').show();
                $('#scheduleContent').hide();
            }else{
                alert('please select employee')
            }

        });

        $(document).on("click", '#showSchedule', function (){
            var employees = $('.employee-check:checked');
            if(employees.length > 0) {
                var id = (employees[0]).closest('#userCard').getAttribute('data-id')
               // loadEmployeeSchedule(id);



                $('#OptionContent').hide();
                $('#DetailContent').hide();
                $('#scheduleContent').show();
            }else{
                alert('please select employee')
            }


        });


        $(document).on("click", '.back', function (){

            var attr = $(this).attr('data-save');
            if (attr == "queue") {
                var employees = $('.employee-check:checked');
                var id = (employees[0]).closest('#userCard').getAttribute('data-id')
                updateQueue(id);
            } else if(attr == "queue_schedule"){
                var employees = $('.employee-check:checked');
                var id = (employees[0]).closest('#userCard').getAttribute('data-id')



                if($('#satSwitch')[0].checked) {
                    var times = $('#ex2').val();
                    times = times.split(',');
                    var data = {
                        source_id: id,
                        start_time: times[0],
                        end_time: times[1],
                        day: 6
                    }
                    req.doRequest('updateUserTime', 'put', data);
                }


                if($('#monSwitch')[0].checked) {
                    var times = $('#ex3').val();
                    times = times.split(',');
                    var data = {
                        source_id: id,
                        start_time: times[0],
                        end_time: times[1],
                        day: 0
                    }
                    req.doRequest('updateUserTime', 'put', data);
                }


                if($('#tusSwitch')[0].checked) {
                    var times = $('#ex4').val();
                    times = times.split(',');
                    var data = {
                        source_id: id,
                        start_time: times[0],
                        end_time: times[1],
                        day: 1
                    }
                    req.doRequest('updateUserTime', 'put', data);
                }

                if($('#wenSwitch')[0].checked) {
                    var times = $('#ex5').val();
                    times = times.split(',');
                    var data = {
                        source_id: id,
                        start_time: times[0],
                        end_time: times[1],
                        day: 2
                    }
                    req.doRequest('updateUserTime', 'put', data);
                }

                if($('#thuSwitch')[0].checked) {
                    var times = $('#ex6').val();
                    times = times.split(',');
                    var data = {
                        source_id: id,
                        start_time: times[0],
                        end_time: times[1],
                        day: 3
                    }
                    req.doRequest('updateUserTime', 'put', data);
                }

                if($('#friSwitch')[0].checked) {
                    var times = $('#ex7').val();
                    times = times.split(',');
                    var data = {
                        source_id: id,
                        start_time: times[0],
                        end_time: times[1],
                        day: 4
                    }
                    req.doRequest('updateUserTime', 'put', data);
                }


                if($('#sunSwitch')[0].checked) {
                    var times = $('#ex8').val();
                    times = times.split(',');
                    var data = {
                        source_id: id,
                        start_time: times[0],
                        end_time: times[1],
                        day: 5
                    }
                    req.doRequest('updateUserTime', 'put', data);
                }


            }
            $('#OptionContent').show();
            $('#DetailContent').hide();
            $('#scheduleContent').hide();


            // $('#showDetailsContainer').empty();
            // $('#showDetailsContainer').load('employee-options.php');
        });

        $(document).on('click', '.preview', function (){
            var employees = $('.employee-check:checked');

            for(var i=0; i< employees.length; i++) {
                employees[i].checked = false;
            }

            var ele = $(this);
            ele[0].parentElement.parentElement.querySelector('input').checked=true

            $('#showDetails').trigger("click")
        });


    });
</script>

<script src="requestClass.js"></script>
<script>
    var req = new requestClass();

    function deleteQueue() {
        var employees = $('.employee-check:checked');
        for(var i=0; i<employees.length;i++) {
            var id = (employees[i]).closest('#userCard').getAttribute('data-id')
            req.doRequest('queue/delete/'+id, 'delete');
        }

    }


    function getQueueInfo(id) {
        var res = req.doRequest('queue/getDetails/'+id, 'get', {});
        if (res.queue) {
            $("#name").val(res.queue.name);
            $("#employeeName").val(res.Employee_name || '');
            $("#employeeName").attr('data-id', res.queue.user_id);
            $("#servive_name").append(`<option id="${res.service_name[0].id}"> ${res.service_name[0].name} </option>`);
            $("#time").val(res.queue.start_regesteration);
            $("#repeats").append(`<option id="${res.queue.repeats}"> ${res.queue.repeats} </option>`);
        }

    }


    function updateQueue(id) {
        var data = {
            name:  $("#name").val(),
            user_id: $("#employeeName").attr('data-id'),
            servive_name : $("#servive_name").val(),
            start_regesteration: $("#time").val(),
            repeats: $("#repeats").val()

    }
        var res = req.doRequest('queue/updateDetails/'+id, 'put', data);
    }


    function loadQueueSchedule(id){
        var res = req.doRequest('getscheduleTime/'+id+'/1', 'get');
        if (res.time) {
            var times = res.time;

            for(var i=0; i< times.length; i++) {
                if(times[i].day == 0) {
                    setLabel('min', 10,0);
                    setLabel('max', 14,0);

                }
            }


        }
        // debugger;

    }



    $(document).ready(function () {


        loadQueue();



        function loadQueue() {
            var res = req.doRequest('queue/getAllQueue', 'get', {});
            if(res.queues) {
                res = res.queues;
                res.forEach((queue)=>{
                    let ele = `<div class="row" id="userCard" data-id="${queue.id}">
                    <div class="col-12">
                        <div class="card mt-5">
                            <div class="card-body pb-1 employee-card p-2">
                                <span class="float-start ">
                                    <span class="bi bi-person"></span>
                                    ${queue.name}
                                </span>


                                <span class="float-end ">
                                    <input class=" btn btn-sm form-check-input bg-primary employee-check" type="checkbox" name="option1" >
                                </span>

                                <span class="float-end ">
                                    <button class="btn btn-sm float-end preview">
                                        <span class="bi bi-eye "></span>
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>`;

                    $("#content").append(ele);
                })



            } else {
                alert('No Employees exist')
            }

        }



    })
</script>

