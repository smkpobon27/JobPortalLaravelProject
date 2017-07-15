// seeker_edit_cv page js
jQuery(document).ready(function($) {
  
        $('#personal_1').click(function(event) {
                var name = $('#name').val();
                var location = $('#location').val();
                var phone = $('#phone').val();
                var gender = $('input[name=gender]:checked').val();
                
                $.post('/seeker/edit-cv', {'_token': $('input[name=_token]').val(), 'name': name,'location':location,'phone':phone,'gender':gender}, function(data) {
                    $('#sec_1').load(location.href + ' #sec_1');
                    console.log(data);
                });
            });
});