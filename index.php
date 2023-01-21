<?php
include('layout/header.php');
?>
<main id="main" class="main">

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Bookings</h5>

            <div class="row">


                <div class="col-3">
                    <button class="btn btn-primary" onclick="loadBooking('getUpComingBooking')">Upcoming Booking</button>
                </div>

                <div class="col-3">
                    <button class="btn btn-primary" onclick="loadBooking('expiredBooking')">All Booking</button>
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

    loadBooking("getUpComingBooking");

    function loadBooking(api) {
        var res = req.doRequest(api, 'get', {});
        $('#booking_Table>tbody').empty();

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

            for (var i=0; i< 20; i++) {
                if(res[i]) {
                    var data = res[i].original;
                    $('#booking_Table>tbody').append(`
                        <tr>
                            <th scope="row">${data.date}</th>
                            <td>${data.service_time_number}</td>
                            <td>${data.service_name}</td>
                            <td>${data.client_name}</td>
                        </tr>
                        `);
                }
            }
        }
    }


    $(document).ready(function () {




    })
</script>
