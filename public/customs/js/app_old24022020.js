//Ajouter par Désiré
// let modal = null
//
// const openModal = function (e) {
//     e.preventDefault()
//     const target = document.querySelector(e.target.getAttribute('href'))
//     target.style.display = null
//     target.removeAttribute('aria-hidden')
//     target.setAttribute('aria-modal', 'true')
//     modal = target
//     modal.addEventListener('click', closeModal)
//     modal.querySelector('.js-modal-close').addEventListener('click', closeModal)
// }
//
// const closeModal = function (e) {
//     if (modal===null)return
//     e.preventDefault()
//     const target = document.querySelector(e.target.getAttribute('href'))
//     target.style.display = "none"
//     target.setAttribute('aria-hidden')
//     target.removeAttribute('aria-modal', 'true')
//     modal = target
//     modal.removeEventListener('click', closeModal)
//     modal.querySelector('.js-modal-close').removeEventListener('click', closeModal)
//     modal = null
// }
//
// document.querySelectorAll('.js-modal').forEach(a => {
//     a.addEventListener('click', openModal)
//
// })


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

