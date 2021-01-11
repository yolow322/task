$(document).ready(function () {
    $('#search').click(function () {
        let searchingKey = $('#searching_key').val();
        $.ajax({
            url: '/test-task/second-task/show-answer',
            method: 'get',
            data: {
                searching_key: searchingKey
            },
            success: function (data) {
                $('#answer').html(data);
            },
        });
    });
});