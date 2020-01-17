//Ajouter par Désiré
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();


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
                        headers: { "name": "editclientvalidation" },
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

