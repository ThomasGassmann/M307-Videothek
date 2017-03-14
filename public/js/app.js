console.info("Loaded typescript.");

function displayErrors(result) {
    var errors = $('#errors');
    errors.html('');
    for (var res in result) {
        errors.append(result[res]);
        errors.append('<br>');
    }
}

function createVideo() {
    var title = $('#titleField').val();
    var length = $('#lengthField').val();
    var releaseYear = $('#releaseYearField').val();
    var data = {
        title: title,
        length: length,
        releaseYear: releaseYear,
        isBorrowed: 0
    };
    $.ajax({
        method: 'POST',
        url: '/api/Video/Add',
        data: data
    }).done(function (result) {
        displayErrors(result);
    });
}

function createCustomer() {
    var data = {
        firstName: $('#firstNameField').val(),
        lastName: $('#lastNameField').val(),
        mail: $('#mailField').val(),
        phone: $('#phoneField').val(),
        membership: $("select#membershipField option").filter(":selected").val()
    };
    $.ajax({
        method: 'POST',
        url: '/api/Customer/Add',
        data: data
    }).done(function (result) {
        displayErrors(result);
    });
}

function deleteCustomer(id) {
    $.ajax({
        method: 'POST',
        url: 'api/Customer/DeleteById',
        data: {
            id: id
        }
    }).done(function (result){
        window.location.reload();
    }).fail(function (result) {
        alert("Konnte nicht gelöscht werden, da Kunde immer noch in Verwendung ist.");   
    });
}

function toggleVideoBorrowed(id) {
    $.ajax({
        url: 'api/Video/ToggleBorrowById',
        method: 'POST',
        data: {
            id: id
        }
    }).done(function (result) {
        window.location.reload();
    });
}

function editCustomer(id) {
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
}

function saveEditCustomer(id) {
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
}

function deleteVideo(id) {
    $.ajax({
        method: 'POST',
        url: 'api/Video/DeleteById',
        data: {
            id: id
        }
    }).done(function (result) {
        window.location.reload();
    }).fail(function (result) {
        alert("Konnte nicht gelöscht werden, da Video immer noch in Verwendung ist.");   
    });;;
}