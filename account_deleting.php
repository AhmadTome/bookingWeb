<?php
$title = 'Delete Account Page';

include('layout/header.php');
?>


<main id="main" class="main ">

    <div class="card">
        <div class="card-body">
            <h2>Account deleting</h2>
            <br/>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="">
                    <label class="form-check-label">I am closing my business</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="">
                    <label class="form-check-label">I don’t see the benefits of online bookings for my service</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="">
                    <label class="form-check-label">I need more features (please indicate which features in
                        comments)</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="">
                    <label class="form-check-label">I found better booking system (please indicate in comments the name
                        of the system and the features you liked about them)</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="">
                    <label class="form-check-label">I will register another company with you, just need to close this
                        one.</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="">
                    <label class="form-check-label">The system is too complex and not intuitive enough (please explain
                        in comments if possible)</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="">
                    <label class="form-check-label">Lack of support</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="">
                    <label class="form-check-label">Prices are too high</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="">
                    <label class="form-check-label">Other reason (write in comments)</label>
                    <textarea rows="4" class="form-control"></textarea>
                </div>


                <textarea rows="8" class="form-control bg-dark-light" readonly>
IMPORTANT
1. Please note! After you delete your company, you will be able to register with us again later, but you will not be able to use the same name in url (company login). E.g. in url https://secure.neon.SimplyBook.me - neon is company name and can’t be used again.

2. By deleting an account, I agree that my data will be permanently deleted, and that I have saved all the data I need
            </textarea>


                <div class="row mt-3">
                    <div class="col-4">
                        <button id="delete" class="btn btn-danger">Delete my account now</button>
                    </div>
                    <div class="col-4">
                        <button class="btn btn-primary">cancel account deleting</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


</main><!-- End #main -->


<?php
include('layout/footer.html');
?>

<script src="requestClass.js"></script>
<script>
    var req = new requestClass();

    $(document).ready(function () {
        $('#delete').on('click', function () {

            var res = req.doRequest('company/delete', 'get', {});



            alert(res.message);
            window.location.reload();

        });
    })
</script>

