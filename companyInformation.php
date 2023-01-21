<?php
$title = 'Company Information';

include('layout/header.php');
?>




<main id="main" class="main ">

    <div class="row" id="content" style="display: none">
        <div class="card col-5">
            <div class="card-body">
                <h2>Company Information</h2>
                <br/>

                <div class="row">

                    <div class="col-10 mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Name</label>
                        <input type="text" class="form-control" id="companyName" placeholder="">
                    </div>

                    <div class="col-10 mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Address</label>
                        <input type="text" class="form-control" id="companyAddress" placeholder="">
                    </div>

                    <div class="col-10 mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Street</label>
                        <input type="text" class="form-control" id="companyStreet" placeholder="">
                    </div>

                    <div class="col-10 mb-3">
                        <label for="exampleFormControlInput1" class="form-label">City</label>
                        <input type="text" class="form-control" id="companyCity" placeholder="">
                    </div>

                    <div class="col-10 mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Country</label>
                        <input type="text" class="form-control" id="companyCountry" placeholder="">
                    </div>

                    <div class="col-10 mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Category</label>
                        <input type="text" class="form-control" id="companyCategory" placeholder="">
                    </div>

                    <div class="col-10 mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Logo</label>
                        <input type="text" class="form-control" id="companyLogo" placeholder="">
                    </div>

                    <div class="col-10 mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Description</label>
                        <input type="text" class="form-control" id="companyDescription" placeholder="">
                    </div>



                    <div class="float-end">
                        <button class="btn btn-primary" id="save">Save company information</button>
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

<script src="requestClass.js"></script>
<script>
    var req = new requestClass();

    $(document).ready(function (){

        loadInfo();

        function loadInfo(){
            var company_id = localStorage.getItem('company_id')

            var res = req.doRequest('company/getProfile/'+ company_id, 'get');

            if (res.company) {
                $('#companyName').val(res.company.name);
                $('#companyDescription').val(res.company.description);
                $('#companyAddress').val(res.address[0].country +", "+ res.address[0].city+", "+res.address[0].street);
                $('#companyStreet').val(res.address[0].street);
                $('#companyCity').val(res.address[0].city);
                $('#companyCountry').val(res.address[0].country);
                $('#companyCategory').val(res.category[0].name);
                $('#companyCategory').attr('data-id', res.category[0].id);
            }else {
                alert('لا يوجد معلومات')
            }

            $('#content').show();

        }

        $('#save').on('click', function (){

            var data = {
                'name' : $('#companyName').val(),
                'email' : $('#companyEmail').val(),
                'phone_number' : $('#companyPhone').val(),
                'category_id' : $('#companyCategory').attr('data-id'),
                'description' : $('#companyDescription').val(),
                'type' : 1,
                'street' : $('#companyStreet').val(),
                'city' : $('#companyCity').val(),
                'country' : $('#companyCountry').val(),
                'logo' : 'logo',
            };


            var res = req.doRequest('company/updateProfile', 'get', data);
            if (res.length > 1) {
                alert("company Info updated successfully");
            } else {
                alert("company Info does not updated");
            }

        });



    })
</script>

