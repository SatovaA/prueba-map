$(document).ready(function () {

    $("#saveRoute").on('click',function(){
    $("#formRoute").validate({
        rules: {
            idCountry: {
                required: true,
            },
            id_city: {
                required: true,
            },
            latitude: {
                required: true,
            },
            length: {
                required: true,
            },
            status: {
                required: true,
            },

        },
        messages: {
            idCountry: {
                required: "El campo País es requerido",
            },
            id_city: {
                required: "El campo Ciudad es requerido",
            },
            latitude: {
                required: "El campo Latitud es requerido",
            },
            length: {
                required: "El campo Longitud es requerido",
            },
            status: {
                required: "El campo Estado es requerido",
            },
        }
    });
});

})

function landingCountry(id) {
    $.ajax({
        url: 'list-cities/' + id,
        type: 'GET',
        dataType: "json",
        success: function (response) {

            const subClassification = $("#id_city");
            $('#id_city option').remove();
            $.each(response, function (index, city) {

                subClassification.append(
                    '<option value="' + city.idCity + ' ">' + city.name + '</option>'
                );
            });
        },
    });
}
