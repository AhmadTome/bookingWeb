<?php
$title = 'Employee Report Page';

include('layout/header.php');
?>




<main id="main" class="main ">

    <div class="card">
        <div class="card-body">
            <h2>Employee</h2>
            <br/>


            <table class="table table-sm" id="employeeTabel">
                <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">role</th>
                    <th scope="col">Action</th>

                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <input type="text" id="name" class="form-control">
                    </td>
                    <td>
                        <input type="text" id="phone" class="form-control">
                    </td>
                    <td>
                        <input type="text" id="email" class="form-control">
                    </td>
                    <td>
                        <input type="text" id="role" class="form-control">
                    </td>

                    <td>
                        <div class="row">
                            <div class="col-6"><button class="btn btn-warning" id="apply">Apply</button></div>
                            <div class="col-6"><button class="btn btn-danger" id="clear">Clear</button></div>
                        </div>
                    </td>
                </tr>





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

        loadEmployees();

        function loadEmployees(){

            var res = req.doRequest('user/getAllUsers', 'get');

            if (res.users.length > 0) {
                var users = res.users;
                for(var i=0; i<users.length;i++) {
                    $('#employeeTabel').append(`
                    <tr>
                        <td>${users[i].name}</td>
                        <td>${users[i].phone_number}</td>
                        <td>${users[i].email}</td>
                        <td>admin</td>
<!--                        <td><a href="#">report</a></td>-->
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
                'role' : $('#role').val(),
            };


            var res = req.doRequest('filter3', 'get', data);



            $("#employeeTabel").find("tr:gt(1)").remove();


            if (res.user.length > 0) {
                var users = res.user;
                for(var i=0; i<users.length;i++) {
                    $('#employeeTabel').append(`
                    <tr>
                        <td>${users[i].name}</td>
                        <td>${users[i].phone_number}</td>
                        <td>${users[i].email}</td>
                        <td>admin</td>
<!--                        <td><a href="#">report</a></td>-->
                    </tr>
                `)
                }

            }

        });



    })
</script>





