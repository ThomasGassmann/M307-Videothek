console.info("Loaded typescript.");

(function (scope, $, undefined) {
    scope.displayErrors = function (result) {
        var errors = $('#errors');
        errors.html('');
        for (var res in result) {
            errors.append(result[res]);
            errors.append('<br>');
        }
    };

    scope.createVideo = function () {
        var title = $('#titleField');
        var length = $('#lengthField');
        var releaseYear = $('#releaseYearField');
        var data = {
            title: title.val(),
            length: length.val(),
            releaseYear: releaseYear.val(),
            isBorrowed: 0
        };
        $.ajax({
            method: 'POST',
            url: '/api/Video/Add',
            data: data
        }).done(function (result) {
            displayErrors(result);
            if (result["SUCCESS"] !== '') {
                title.val('');
                length.val('');
                releaseYear.val('');
            }
        });
    };

    scope.createCustomer = function () {
        var firstName = $('#firstNameField');
        var lastName = $('#lastNameField');
        var mail = $('#mailField');
        var phone = $('#phoneField');
        var data = {
            firstName: firstName.val(),
            lastName: lastName.val(),
            mail: mail.val(),
            phone: phone.val(),
            membership: $("select#membershipField option").filter(":selected").val()
        };
        $.ajax({
            method: 'POST',
            url: '/api/Customer/Add',
            data: data
        }).done(function (result) {
            displayErrors(result);
            if (result['SUCCESS'] !== '') {
                firstName.val('');
                lastName.val('');
                mail.val('');
                phone.val('');
            }
        });
    };

    scope.deleteCustomer = function (id, elementToRemove) {
        $.ajax({
            method: 'POST',
            url: 'api/Customer/DeleteById',
            data: {
                id: id
            }
        }).done(function (result){
            $('#' + elementToRemove).remove();
        }).fail(function (result) {
            alert("Konnte nicht gelöscht werden, da Kunde immer noch in Verwendung ist.");   
        });
    };

    scope.toggleVideoBorrowed = function (id) {
        $.ajax({
            url: 'api/Video/ToggleBorrowById',
            method: 'POST',
            data: {
                id: id
            }
        }).done(function (result) {
            window.location.reload();
        });
    };

    scope.editCustomer = function (id) {
        $('#editModal').modal('open');
        $.ajax({
            method: 'POST',
            url: 'api/Customer/GetById',
            data: {
                id: id
            }
        }).done(function (result) {
            $('#firstNameField').val(result['firstName']);
            $('#lastNameField').val(result['lastName']);
            $('#mailField').val(result['mail']);
            $('#idField').val(result['id']);
            $('#phoneField').val(result['phone']);
            $('#membershipField option[value=' + result['memberShipStateId'] + ']').attr('selected','selected');
        }).fail(function (result) {
            displayErrors(result);  
        });
    };

    scope.saveEditCustomer = function (id) {
        var id = $('#idField').val();
        var data = {
            id: id,
            firstName: $('#firstNameField').val(),
            lastName: $('#lastNameField').val(),
            mail: $('#mailField').val(),
            phone: $('#phoneField').val(),
            membership: $("select#membershipField option").filter(":selected").val()
        };
        $.ajax({
            method: 'POST',
            url: 'api/Customer/UpdateById',
            data: data
        }).done(function (result) {
            displayErrors(result);
            if (result['SUCCESS'] === 'The video was successfully updated.') {
                $('#editModal').modal('close');
                window.location.reload();
            }
        }).fail(function (error) {
            alert(error);
        });
    };

    scope.deleteVideo = function (id, elementToRemove) {
        $.ajax({
            method: 'POST',
            url: 'api/Video/DeleteById',
            data: {
                id: id
            }
        }).done(function (result) {
            $('#' + elementToRemove).remove();
        }).fail(function (result) {
            alert("Konnte nicht gelöscht werden, da Video immer noch in Verwendung ist.");   
        });
    };
})(window, $);