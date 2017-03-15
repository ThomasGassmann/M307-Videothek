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

    scope.borrowVideo = function (){
        var cId = $('#customerField').val();
        var vId = $('#videoField').val();
        var date = $.now();
        $.ajax({
            method: 'POST',
            url: '/api/Borrow/Add',
            data: {
                customerId: cId,
                videoId: vId,
                borrowDate: date
            }
        }).done(function(result){
            window.location.href = "/";
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