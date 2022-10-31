<?php
$title = 'Control Queue Page';

include('layout/header.php');
?>
<main id="main" class="main ">

    <div class="card">
        <div class="card-body">
           <h2>Control Queue </h2>
            <br/>
            <h4>
                Queue Name <span class="bi bi-eye " data-bs-toggle="modal" data-bs-target="#disablebackdrop" style="cursor: pointer"></span>
            </h4>
            <br/><br/>
            <h6>Current Client</h6>
            <table class="table table-sm">
                <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Brandon Jacob</td>
                    <td>Designer</td>
                    <td>28</td>
                </tr>

                </tbody>
            </table>


            <br/>
            <div class="row">
                <div class="col-4">
                    <button class="btn btn-primary">Check Out</button>
                </div>

                <div class="col-4">
                    <button class="btn btn-primary">Turn Customer</button>
                </div>

                <div class="col-4">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#extraTime">Take Extra Time</button>
                </div>
            </div>
        </div>
    </div>





    <div class="modal fade" id="disablebackdrop" tabindex="-1" data-bs-backdrop="false">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Queue Details</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <div class="row">
                                <label class="form-label col-6">Queue ID</label>
                                <label class="form-label col-6">1234567</label>
                            </div>
                            <div class="row">
                                <label class="form-label col-6">Queue Name</label>
                                <label class="form-label col-6">Name</label>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div><!-- End Disabled Backdrop Modal-->

    <div class="modal fade" id="extraTime" tabindex="-1" data-bs-backdrop="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Take Extra Time</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <label class="form-label col-3">Extra Time</label>
                        <div class="col-9">
                            <input type="text" class="form-control"/>
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div><!-- End Disabled Backdrop Modal-->


</main><!-- End #main -->


<?php
include('layout/footer.html');
?>



