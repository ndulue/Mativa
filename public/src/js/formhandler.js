$('.form').onSubmit(function() {
    var self = $(this);
    button = self.find('#button');
    button.attr('disabled', 'disabled').val('please wait...')
});