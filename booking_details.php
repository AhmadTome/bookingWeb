<?php
$title = 'Booking Details Page';

include('layout/header.php');
?>




<main id="main" class="main ">

    <div class="card">
        <div class="card-body">
            <h2>Booking Details</h2>
            <br/>

<!--            <div id="filterCollapse" class="">-->
<!--                <div class="collapse row filter bg-dark-light p-3" id="filter">-->
<!--                    <div class="col-3">-->
<!--                        <label>Date from</label>-->
<!--                        <input type="date">-->
<!--                    </div>-->
<!---->
<!--                    <div class="col-3">-->
<!--                        <label>Date from</label>-->
<!--                        <input type="date">-->
<!--                    </div>-->
<!---->
<!--                    <div class="col-3">-->
<!--                        <label>Service</label>-->
<!--                        <input type="text">-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="collapse row mb-3 filter bg-dark-light p-3" id="filter">-->
<!--                    <div class="col-3">-->
<!--                        <label>Client</label>-->
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
                    <button class="btn btn-primary">Cancel Selected</button>
                </div>

                <div class="col-3">
                    <button class="btn btn-primary">send Email</button>
                </div>
            </div>



            <table class="table table-sm">
                <thead>
                <tr>
                    <th scope="col"><input type="checkbox" ></th>
                    <th scope="col">Created</th>
                    <th scope="col">Date</th>
                    <th scope="col">Service</th>
                    <th scope="col">Employee</th>
                    <th scope="col">Client</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td></td>
                    <td>
                        From <input type="date" class="form-control">
                        to<input type="date" class="form-control">
                    </td>
                    <td>
                        From <input type="date" class="form-control">
                        to<input type="date" class="form-control">
                    </td>
                    <td>
                        <br/>
                        <input type="text" class="form-control">
                    </td>
                    <td>
                        <br/>
                        <input type="text" class="form-control">
                    </td>
                    <td>
                        <br/>
                        <input type="text" class="form-control">
                    </td>
                    <td>
                        <br/>
                        <input type="text" class="form-control">
                    </td>

                    <td>
                        <br/>
                        <div class="row">
                            <div class="col-7"><button class="btn btn-warning">Apply</button></div>
                            <div class="col-7"><button class="btn btn-danger">Clear</button></div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td><input type="checkbox" ></td>
                    <td>date</td>
                    <td>date</td>
                    <td>cut hair</td>
                    <td>bella</td>
                    <td>sande</td>
                    <td>confirmed</td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>



</main><!-- End #main -->


<?php
include('layout/footer.html');
?>



