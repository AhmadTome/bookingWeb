<?php
$title = 'Employee Report Page';

include('layout/header.php');
?>




<main id="main" class="main ">

    <div class="card">
        <div class="card-body">
            <h2>Employee</h2>
            <br/>


            <table class="table table-sm">
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
                        <input type="text" class="form-control">
                    </td>
                    <td>
                        <input type="text" class="form-control">
                    </td>
                    <td>
                        <input type="text" class="form-control">
                    </td>
                    <td>
                        <input type="text" class="form-control">
                    </td>

                    <td>
                        <div class="row">
                            <div class="col-6"><button class="btn btn-warning">Apply</button></div>
                            <div class="col-6"><button class="btn btn-danger">Clear</button></div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>ahmad</td>
                    <td>0598521636</td>
                    <td>atome@asaltech.com</td>
                    <td>admin</td>
                    <td><a href="#">report</a></td>
                </tr>



                </tbody>
            </table>
        </div>
    </div>



</main><!-- End #main -->


<?php
include('layout/footer.html');
?>



