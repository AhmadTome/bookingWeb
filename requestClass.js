class requestClass {

    getServer() {
        return 'http://127.0.0.1:8000/api/';
    }


    doRequest(url, type, data = {}){

        // var token = localStorage.getItem('token');
        var token = "12|pjrQRyyyw8yZB9kXWrVIduuEsZC3u3hkAEuIlYDK";
        data._token = token;

        var res = [];
        $.ajax({
            url: this.getServer() + url,
            type: type,
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                'X-Requested-With': 'XMLHttpRequest',
                "Authorization": "Bearer " + token,
                'X-CSRF-TOKEN': token
            },
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