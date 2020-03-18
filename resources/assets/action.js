const sendDeleteRequest = function (url) {
    var token = document.querySelector('meta[name="csrf-token"]').content;
    var data = "_method=DELETE&_token=" + token;

    var request = new XMLHttpRequest();
    request.open('POST', url, true);
    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
    request.send(data);

    request.onload = function () {
        if (this.status >= 200 && this.status < 400) {
            // Success!
            location.href = request.responseURL;
        } else {
            // We reached our target server, but it returned an error

        }
    };
    request.onerror = function () {
        // There was a connection error of some sort
    };
}
