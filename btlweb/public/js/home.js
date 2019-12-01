$(document).ready(function() {
    const baseUrl = document.location.origin;
    load_data();

    function load_data() {
        $.ajax({
            url: baseUrl + "/btlweb/public/dangki/load_data",
            dataType: "json",
            success: function(data) {
                var html = '';
                for (var count = 0; count < data.length; count++) {
                    html += '<tr>';
                    html += '<td>' + data[count].tenmh + '</td>';
                    html += '<td>' + data[count].phongthi + '</td>';
                    html += '<td>' + data[count].cathi + '</td>';
                    html += '<td>' + data[count].ngaythi + '</td>';
                    html += '<td>' + data[count].soluong + '</td>';
                    html += '<td>' + data[count].soluongdk + '</td>';
                    html += '<td><input type="checkbox"></td>';
                }
                $('tbody').html(html);
            }
        });
    }

});