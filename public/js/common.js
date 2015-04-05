$(function() {
    // editable
    $('.field_editable').editable({
        params: function(params) {
            params._token = $(this).attr('rel');
            return params;
        }
    });
});
