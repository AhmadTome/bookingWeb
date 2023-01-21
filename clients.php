<?php
$title = 'Clients Page';

include('layout/header.php');
?>




<main id="main" class="main ">

    <div class="card">
        <div class="card-body">
            <h2>Clients</h2>
            <br/>

<!--            <div id="filterCollapse" class="">-->
<!--                <div class="collapse row filter bg-dark-light p-3" id="filter">-->
<!--                    <div class="col-3">-->
<!--                            <label>Date from</label>-->
<!--                            <input type="date">-->
<!--                    </div>-->
<!---->
<!--                    <div class="col-3">-->
<!--                        <label>Date from</label>-->
<!--                        <input type="date">-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="collapse row mb-3 filter bg-dark-light p-3" id="filter">-->
<!--                    <div class="col-3">-->
<!--                        <label>Service</label>-->
<!--                        <input type="text">-->
<!--                    </div>-->
<!---->
<!--                    <div class="col-3">-->
<!--                        <label>Employee</label>-->
<!--                        <input type="text">-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->

            <div class="row">
<!--                <div class="col-3">-->
<!--                    <button class="btn btn-primary" id="filtrationBtn" data-bs-toggle="collapse" data-bs-target="#filter">Show/hide filter</button>-->
<!--                </div>-->

                <div class="col-3">
                    <button class="btn btn-primary" data-bs-toggle="dropdown">Export</button>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow p-3">
                        <li>
                            <h6>Export to Excel</h6>
                        </li>
                        <li>
                            <h6>Export to .Csv</h6>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <h6>Select columns to export</h6>
                        </li>

                    </ul>
                </div>

                <div class="col-3">
                    <button class="btn btn-primary">send message</button>
                </div>

                <div class="col-3">
                    <button class="btn btn-primary">send Email</button>
                </div>
            </div>



            <table class="table table-sm" id="clients">
                <thead>
                <tr>
                    <th scope="col"><input type="checkbox" ></th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td></td>
                    <td><input type="text" id="name" class="form-control"></td>
                    <td><input type="text" id="phone" class="form-control"></td>
                    <td><input type="text" id="email" class="form-control"></td>

                    <td>
                        <div class="row">
                            <div class="col-5"><button class="btn btn-warning" id="apply">Apply</button></div>
                            <div class="col-5"><button class="btn btn-danger" id="clear">Clear</button></div>
                        </div>
                    </td>
                </tr>
<!--                <tr>-->
<!--                    <td><input type="checkbox" ></td>-->
<!--                    <td>Brandon Jacob</td>-->
<!--                    <td>05985216436</td>-->
<!--                    <td>atome@asaltech.com</td>-->
<!--                </tr>-->

                </tbody>
            </table>
        </div>
    </div>



</main><!-- End #main -->


<?php
include('layout/footer.html');
?>

<script src="requestClass.js"></script>
<script>
    var req = new requestClass();

    $(document).ready(function (){

        loadClient();

        function loadClient(){

            var res = req.doRequest('user/getAllUsers', 'get');

            if (res.users.length > 0) {
                var users = res.users;
                for(var i=0; i<users.length;i++) {
                    $('#clients').append(`
                    <tr>
<td></td>
                        <td>${users[i].name}</td>
                        <td>${users[i].phone_number}</td>
                        <td>${users[i].email}</td>
                    </tr>
                `)
                }

            }else {
                alert('لا يوجد معلومات')
            }


        }

        $('#clear').on('click', function (){
            $('#name').val('');
            $('#phone').val('');
            $('#email').val('');
            $('#role').val('');
        });

        $('#apply').on('click', function (){

            var data = {
                'name' : $('#name').val(),
                'email' : $('#email').val(),
                'phone_number' : $('#phone').val(),
            };


            var res = req.doRequest('filter1', 'get', data);



            $("#clients").find("tr:gt(1)").remove();


            if (res.user.length > 0) {
                var users = res.user;
                for(var i=0; i<users.length;i++) {
                    $('#clients').append(`
                    <tr>
                        <td>${users[i].name}</td>
                        <td>${users[i].phone_number}</td>
                        <td>${users[i].email}</td>
                    </tr>
                `)
                }

            }

        });



    })
</script>





