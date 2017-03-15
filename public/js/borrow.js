(function (scope, $, undefined) {
    scope.onBorrowChange = function () {
        var id = $('#customerField').val();
        $.ajax({
            method: 'POST',
            url: '/api/GetDate',
            data: {
                customerId: id
            }
        }).done(function (result) {
            $('#borrowInformation').html("Videos für diesen Kunden müssen am " + result['DATE_RESULT'] + " zurückgegeben werden.");
        }).fail(function (result) {
            alert(result);
        });
    };

    scope.formatDate = function date2str(x, y) {
        var z = {
            M: x.getMonth() + 1,
            d: x.getDate(),
            h: x.getHours(),
            m: x.getMinutes(),
            s: x.getSeconds()
        };
        y = y.replace(/(M+|d+|h+|m+|s+)/g, function(v) {
            return ((v.length > 1 ? "0" : "") + eval('z.' + v.slice(-1))).slice(-2)
        });
        return y.replace(/(y+)/g, function(v) {
            return x.getFullYear().toString().slice(-v.length)
        });
     }

    scope.borrowVideo = function (){
        var cId = $('#customerField').val();
        var vId = $('#videoField').val();
        var date = new Date();
        date = scope.formatDate(date, 'dd/MM/yyyy');
        $.ajax({
            method: 'POST',
            url: '/api/Borrow/Add',
            data: {
                customerId: cId,
                videoId: vId,
                borrowDate: date
            }
        }).done(function(result){
            var errors = $('#errors');
            errors.html('');
            for (var res in result) {
                errors.append(result[res]);
                errors.append('<br>');
            }
            if (result["SUCCESS"] !== undefined) {
                window.location.href = "/BorrowList";
            }
        }).fail(function (result) {
            alert(result);
        });
    }
})(window, $);

$('#customerField').on('change', function() {
    window.onBorrowChange();
});

$('#borrowButton').on('click', function() {
    window.borrowVideo();
})