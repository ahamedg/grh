//Ajouter par Désiré
// Revealing Module Pattern
var myRoomNumber;

$('#rooms li a').click(function() {
    myRoomNumber = $(this).attr('data-id');
});

$('#myModal').on('show.bs.modal', function (e) {
    $(this).find('.roomNumber').text(myRoomNumber);
});



//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
//Ajouter par Emmanuel
$(function () {
    $(".editClientBtn").on("click", function () {
        $("#modal-wrapper").load("edit/" + $(this).attr("data-id"), {}, function () {
            $("#editClient").modal("show");
            var $monForm = $("#editClientForm");
            $("#btnEditClientSubmit").on("click", function () {
                $('#spinner').css('display', 'block');
                $monForm.validate();
                if ($monForm.valid()) {
                    $.ajax({
                        type: 'POST',
                        url: $monForm.attr('action'),
                        headers: {"name": "editclientvalidation"},
                        data: $monForm.serialize(),
                        dataType: "json",
                        success: function (response) {
                            window.location.reload();
                        }
                    });
                }
                return false;
            });
        });
    });
}());

