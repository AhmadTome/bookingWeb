<?php
$title = 'Service Page';
include('layout/header.php');
?>
    <main id="main" class="main ">

        <div class="row">
            <div class="card col-12 col-sm-4 m-2 p-3">
                <h3>Services</h3>


                <div class="row ">
                    <div class="search-bar col-12 col-sm-6">
                        <input class="form-control" type="text" name="query" placeholder="Search"
                               title="Enter search keyword">
                    </div>
                    <div class="col-2">
                        <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#addService">
                            <i class="bi bi-plus"></i>
                        </button>
                    </div>
                    <div class="col-2">
                        <button class="btn btn-sm btn-danger"  onclick=" deleteService()">
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


            <div class="modal fade" id="addService" tabindex="-1" data-bs-backdrop="false">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Queue Details</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <div class="row">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Service Name</label>
                                    <input type="text" class="form-control" id="m_name" placeholder="">
                                </div>


                                <div class="mb-3 row">
                                    <label for="exampleFormControlInput1" class="form-label">Service duration</label><br/>
                                    <span class="col-6">
                Hours <br/>
                <input type="text" class="form-control" id="m_hour" placeholder="">

                                        <!--                <select class="form-control">-->
                                        <!--                    <option></option>-->
                                        <!--                </select>-->
            </span>
                                    <span class="col-6">
                Minutes <br/>
                <input type="text" class="form-control" id="m_minit" placeholder="">

                                        <!--                <select class="form-control">-->
                                        <!--                    <option></option>-->
                                        <!--                </select>-->
            </span>
                                </div>



                            </div>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" onclick="addService()">add</button>
                        </div>
                    </div>
                </div>
            </div><!-- End Disabled Backdrop Modal-->


            <div class="card col-12 col-sm-7 m-2">
                <?php include ('service-details.php')?>
<!--                --><?php //include('service-options.php') ?>
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
            let checkEle = $('.service-check').toArray();
            checkEle.forEach((ele) => ele.checked = !flag);
            $(this).attr('data-flag', !flag);
        });



        $(document).on('click', '.preview', function (){

            var services = $('.service-check:checked');

            for(var i=0; i< services.length; i++) {
                services[i].checked = false;
            }

            var ele = $(this);
            ele[0].parentElement.parentElement.querySelector('input').checked=true

            var services = $('.service-check:checked');
            var id = (services[0]).closest('#userCard').getAttribute('data-id')



            getServiceInfo(id);
        });

        $(document).on('click', '#save', function (){
            var services = $('.service-check:checked');
            var id = (services[0]).closest('#userCard').getAttribute('data-id')

            updateServiceInfo(id);
        })

    });
</script>
<script src="requestClass.js"></script>
<script>
    var req = new requestClass();

    function deleteService() {
        var services = $('.service-check:checked');
        for(var i=0; i<services.length;i++) {
            var id = (services[i]).closest('#userCard').getAttribute('data-id')
            req.doRequest('service/delete/'+id, 'delete');
        }

    }


    function getServiceInfo(id) {
        var res = req.doRequest('service/getDetails/'+id, 'get', {});
        if (res) {
            $("#name").val(res.name);
            //$("#logo").val(res.logo);
            $("#hour").val((res.duration_time).split(':')[0]);
            $("#minit").val((res.duration_time).split(':')[1]);
        }

    }


    function updateServiceInfo(id) {
        var data = {
            name: $("#name").val(),
            duration_time: $('#hour').val() +":"+$("#minit").val(),
            hour: $("#hour").val(),
            minit: $("#minit").val(),
            logo: $("#logo").val()
        }
        var res = req.doRequest('service/updateDetails/'+id, 'get', data);
        alert('service updated successfully')
    }


    $(document).ready(function () {
        loadServices();

        function loadServices() {
            var res = req.doRequest('service/getAllServices', 'get', {});
            if(res.services) {
                res = res.services;
                res.forEach((service)=>{
                    let ele = `<div class="row" id="userCard" data-id="${service.id}">
                    <div class="col-12">
                        <div class="card mt-5">
                            <div class="card-body pb-1 employee-card p-2">
                                <span class="float-start ">
                                    <span class="bi bi-person"></span>
                                    ${service.name}
                                </span>


                                <span class="float-end ">
                                    <input class=" btn btn-sm form-check-input bg-primary service-check" type="checkbox" name="option1" >
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
                alert('No Services exist')
            }

        }
    });

    function addService() {
        var data = {
            name: $("#m_name").val(),
            logo: 'logo',
            duration_time: $('#m_hour').val() +":"+$("#m_minit").val()

        }
        var res = req.doRequest('service/add', 'get', data);
        window.location.reload();
    }
</script>


