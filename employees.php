<?php
$title = 'Employee Page';

include('layout/header.php');
?>



    <main id="main" class="main ">

        <div class="row">
            <div class="card col-12 col-sm-4 m-2 p-3 ">
                <h3>Employee</h3>


                <div class="row ">
                    <div class="search-bar col-12 col-sm-6">
                        <input class="form-control" type="text" name="query" placeholder="Search"
                               title="Enter search keyword">
                    </div>
                    <div class="col-2">
                        <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#addEmployee">
                            <i class="bi bi-plus" ></i>
                        </button>
                    </div>
                    <div class="col-2">
                        <button class="btn btn-sm btn-danger" onclick=" deleteEmployees()">
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


<!--                --><?php //include ('employee-options.php')?>
<!--                --><?php //include ('employee-details.php')?>

                <div id="OptionContent" style="display: block">
                    <?php include ('employee-options.php')?>
                </div>

                <div id="DetailContent" style="display: none">
                    <?php include ('employee-details.php')?>
                </div>

               <div id="scheduleContent" style="display: none">
                   <?php include ('employee-schedule.php')?>
               </div>
            </div>

        </div>

    </main><!-- End #main -->


<div class="modal fade" id="addEmployee" tabindex="-1" data-bs-backdrop="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Queue Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Name</label>
                        <input type="email" class="form-control" id="m_name" placeholder="name@example.com">
                    </div>




                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">role_id</label>
                        <select class="form-control" id="m_role">

                        </select>
                    </div>


                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Employee E-mail</label>
                        <input type="email" class="form-control" id="m_email" placeholder="name@example.com">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Employee E-mail</label>
                        <input type="password" class="form-control" id="m_password" >
                    </div>



                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Phone</label>
                        <input type="email" class="form-control" id="m_phone" >
                    </div>
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" onclick="addEmployees()">add</button>
            </div>
        </div>
    </div>
</div><!-- End Disabled Backdrop Modal-->





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

               getEmployeeInfo(id);


               $('#OptionContent').hide();
               $('#DetailContent').show();
               $('#scheduleContent').hide();
           }else{
               alert('please select employee')
           }






           // $('#showDetailsContainer').empty();
           // $('#showDetailsContainer').load('employee-details.php');
       });

       $(document).on("click", '#showSchedule', function (){
           var employees = $('.employee-check:checked');
           if(employees.length > 0) {
               var id = (employees[0]).closest('#userCard').getAttribute('data-id')
               loadEmployeeSchedule(id);



               $('#OptionContent').hide();
               $('#DetailContent').hide();
               $('#scheduleContent').show();
           }else{
               alert('please select employee')
           }


       });


       $(document).on("click", '.back', function (){
           var attr = $(this).attr('data-save');
           if (attr == "employee") {
               var employees = $('.employee-check:checked');
                   var id = (employees[0]).closest('#userCard').getAttribute('data-id')
                   updateUser(id);
           } else if(attr == "employee_schedule"){

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
                    req.doRequest('updateUserTime', 'get', data);
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
                   req.doRequest('updateUserTime', 'get', data);
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
                   req.doRequest('updateUserTime', 'get', data);
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
                   req.doRequest('updateUserTime', 'get', data);
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
                   req.doRequest('updateUserTime', 'get', data);
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
                   req.doRequest('updateUserTime', 'get', data);
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
                   req.doRequest('updateUserTime', 'get', data);
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

    function addEmployees() {
        var data = {
            name: $("#m_name").val(),
            phone_number: $("#m_phone").val(),
            email: $("#m_email").val(),
            role_id: $("#m_role").val(),
            password: $("#m_password").val(),
        }
        var res = req.doRequest('user/add/', 'get', data);
        window.location.reload();
    }


    function deleteEmployees() {
        var employees = $('.employee-check:checked');
        for(var i=0; i<employees.length;i++) {
            var id = (employees[i]).closest('#userCard').getAttribute('data-id')
            req.doRequest('user/delete/'+id, 'get');
        }

        window.location.reload();
    }


    function getEmployeeInfo(id) {
        var res = req.doRequest('user/getDetails/'+id, 'get', {});
        if (res) {
            $("#name").val(res.name);
            $("#phone").val(res.phone_number);
            $("#email").val(res.email);
            $("#role").val(res.role_id);
        }

    }


    function updateUser(id) {
        var data = {
            name: $("#name").val(),
            phone_number: $("#phone").val(),
            email: $("#email").val(),
            role_id: $("#role").val(),
        }
        var res = req.doRequest('user/updateDetails/'+id, 'get', data);
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



    $(document).ready(function () {


        loadEmployees();
        loadRoles();



        function loadEmployees() {
            var res = req.doRequest('user/getAllUsers', 'get', {});
            if(res.users.length > 0) {
                res = res.users;
                res.forEach((user)=>{
                    let ele = `<div class="row" id="userCard" data-id="${user.id}">
                    <div class="col-12">
                        <div class="card mt-5">
                            <div class="card-body pb-1 employee-card p-2">
                                <span class="float-start ">
                                    <span class="bi bi-person"></span>
                                    ${user.name}
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

        function loadRoles(){

            var res = req.doRequest('getAllRoles', 'get', {});
            if (res.length > 0) {
                $('#role').empty();
                res.forEach((role) => {
                    $('#role').append(`<option value="${role.id}">${role.name}</option>`);
                    $('#m_role').append(`<option value="${role.id}">${role.name}</option>`);

                })


            }
        }


    })
</script>

