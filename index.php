<?php
include('layout/header.php');
?>
<main id="main" class="main">

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Bookings</h5>

            <div class="row">


                <div class="col-3">
                    <button class="btn btn-primary" >Upcoming Booking</button>
                </div>

                <div class="col-3">
                    <button class="btn btn-primary">All Booking</button>
                </div>


            </div>


            <table class="table table-sm" id="booking_Table" style="display: none">
                <thead>
                <tr>
                    <th scope="col">Date</th>
                    <th scope="col">Service Duration</th>
                    <th scope="col">Service Name</th>
                    <th scope="col">Client</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Brandon Jacob</td>
                    <td>Designer</td>
                    <td>28</td>
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
    $(document).ready(function () {

        var req = new requestClass();

        loadBooking();

        function loadBooking() {
            var res = req.doRequest('getUpComingBooking', 'get', {});
            $('#booking_Table').show()
            if(res.message){
                $('#booking_Table>tbody').empty();
                $('#booking_Table>tbody').append('<tr>' +
                    '<td></td>' +
                    '<td style="text-align: right">No Item</td>' +
                    '<td></td>' +
                    '<td></td>' +
                    '</tr>');
            }else{

            }
        }


    })
</script>
