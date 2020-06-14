$(document).ready(function(){

    $('#formLogin').on('click',function(e){
        e.preventDefault();
        let submit = $(this).serialize();
        $.ajax({
            url: './php/ajax.php',
            method: $(this).attr('method'),
            data: submit,
            success: function (res){
                if(res && !res.error){
                    $(location).attr('href', './views/home.php');
                }
            }
        })
    })
});