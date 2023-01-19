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


    loadClients();

    function loadClients() {
        var res = req.doRequest('client/list', 'get');
        if (res) {
            var data = res;
            for (var i=0; i<data.length; i++) {

                $('#clients>tbody').empty();
                $('#clients>tbody').append(`
                 <tr>
                    <td><input type="checkbox" ></td>
                    <td>${data[i].name}</td>
                    <td>${data[i].phone}</td>
                    <td>${data[i].email}</td>
                </tr>
                `);
            }
        }

    }
    $(document).ready(function (){
        $('#clear').on('click', function (){
            $('#name').val('');
            $('#phone').val('');
            $('#email').val('');
        });

        $('#apply').on('click', function (){
            var data = {
                name:  $('#name').val(),
                phone: $('#phone').val(),
                email: $('#email').val(),
            }

            var res = req.doRequest('client/add', 'post', data);
            if (res) {
                $('#clients>tbody').append(`
                 <tr>
                    <td><input type="checkbox" ></td>
                    <td>${data.name}</td>
                    <td>${data.phone}</td>
                    <td>${data.email}</td>
                </tr>
                `);
            } else {
                alert("cant add client");
            }


        });
    })
</script>


