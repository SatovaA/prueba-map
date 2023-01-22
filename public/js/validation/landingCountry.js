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

export class landingCountry {
}
