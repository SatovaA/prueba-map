$(document).ready(function () {

    $("#saveClient").on('click', function () {
        $("#formClient").validate({
            rules: {
                name: {
                    required: true,
                },
                surname: {
                    required: true,
                },
                idCountry: {
                    required: true,
                },
                idRoute: {
                    required: true,
                },
                phone: {
                    required: true,
                },
                status: {
                    required: true,
                },

            },
            messages: {
                name: {
                    required: "El campo Nombre es requerido",
                },
                surname: {
                    required: "El campo Apellido es requerido",
                },
                idCountry: {
                    required: "El campo Pais es requerido",
                },
                idRoute: {
                    required: "El campo Pais es requerido",
                },
                phone: {
                    required: "El campo Telefono es requerido",
                },
                status: {
                    required: "El campo Estado es requerido",
                },
            }
        });
    });

})

function countryClient (id) {
    $.ajax({
        url: 'list-cities-route/' + id,
        type: 'GET',
        dataType: "json",
        success: function (response) {
            const cities = $("#idRoute");
            $('#idRoute option').remove();
            $.each(response, function (index, city) {

                cities.append(
                    '<option value="' + city.idRoute + ' ">' + city.name + '</option>'
                );
            });
        },
    });
}

