<?php
$title = 'Company Information';

include('layout/header.php');
?>




<main id="main" class="main ">

    <div class="row">
        <div class="card col-5">
            <div class="card-body">
                <h2>Company Information</h2>
                <br/>

                <div class="row">

                    <div class="col-10 mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>

                    <div class="col-10 mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Address</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>

                    <div class="col-10 mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Street</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>

                    <div class="col-10 mb-3">
                        <label for="exampleFormControlInput1" class="form-label">City</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>

                    <div class="col-10 mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Country</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>

                    <div class="col-10 mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>

                    <div class="col-10 mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>

                    <div class="col-10 mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Category</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>

                    <div class="col-10 mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Logo</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>

                    <div class="col-10 mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Description</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>



                    <div class="float-end">
                        <button class="btn btn-primary">Save company information</button>
                    </div>


                </div>

            </div>
        </div>

        <div class="card col-6 offset-1 ">
            <div class="card-body">
                <h2>Address</h2>
                <br/>

                <div class="row">
                    <iframe src=
                            "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3506.2233913121413!2d77.4051603706222!3d28.50292593193056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce626851f7009%3A0x621185133cfd1ad1!2sGeeksforGeeks!5e0!3m2!1sen!2sin!4v1585040658255!5m2!1sen!2sin"
                            width="400"
                            height="300"
                            frameborder="0"
                            style="border:0;"
                            allowfullscreen=""
                            aria-hidden="false"
                            tabindex="0">
                    </iframe>                </div>

            </div>
        </div>
    </div>





</main><!-- End #main -->




<?php
include('layout/footer.html');
?>



