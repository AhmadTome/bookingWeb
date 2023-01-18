class requestClass {

    getServer() {
        return 'http://127.0.0.1:8000/api/';
    }


    doRequest(url, type, data = {}){

        var res = [];
        $.ajax({
            url: this.getServer() + url,
            type: type,
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                'X-Requested-With': 'XMLHttpRequest',
                "Authorization": "Bearer 10|PhWPvzoUeo4VcyVPVsMiOnUFCP6yq9J7gEgNENuH",
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

            },
            // beforeSend: function (xhr) {
            //     xhr.setRequestHeader('Authorization', 'Bearer 7|wgwXc6eFCDJGx6XXHLmTLJYZQ4XdMWJ5ik4DcL3X');
            // },
            data: data,
            async: false,
            success: function (data) {
                res = data;
            },error: function (err) {
                console.log(err);
            }
        });

        return res;
    }
}