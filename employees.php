<?php
$title = 'Employee Page';

include('layout/header.php');
?>
    <main id="main" class="main ">

        <div class="row">
            <div class="card col-12 col-sm-4 m-2 p-3">
                <h3>Employee</h3>


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
                        <button class="btn btn-sm btn-danger">
                            <i class="bi bi-trash"></i>
                        </button>
                    </div>
                    <div class="col-2">
                        <button class="btn btn-sm btn-primary" id="checkAll" data-flag="false">
                            <i class="bi bi-check-all"></i>
                        </button>
                    </div>
                </div>


                <div class="row">
                    <div class="col-12">
                        <div class="card mt-5">
                            <div class="card-body pb-0 employee-card">
                                <span class="float-start">
                                    <span class="bi bi-person"></span>
                                    Employee 1
                                </span>


                                <span class="float-end">
                                    <input class=" btn btn-sm form-check-input bg-primary employee-check" type="checkbox" name="option1" >
                                </span>

                                <span class="float-end">
                                    <button class="btn btn-sm float-end">
                                        <span class="bi bi-eye "></span>
                                    </button>
                                </span>


                            </div>

                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body pb-0 employee-card">
                                <span class="float-start">
                                    <span class="bi bi-person"></span>
                                    Employee 2
                                </span>


                                <span class="float-end">
                                    <input class=" btn btn-sm form-check-input bg-primary employee-check" type="checkbox" name="option1" >
                                </span>

                                <span class="float-end">
                                    <button class="btn btn-sm float-end">
                                        <span class="bi bi-eye "></span>
                                    </button>
                                </span>


                            </div>

                        </div>
                    </div>

                </div>

            </div>


            <div class="card col-12 col-sm-7 m-2">
                Employee Details
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
    });
</script>


