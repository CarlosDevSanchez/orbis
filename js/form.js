$(document).ready(function(){

    $('#formLogin').on('submit',function(e){
        e.preventDefault();
        let submit = $(this).serialize();
        $.ajax({
            url: './php/ajax.php',
            method: $(this).attr('method'),
            data: submit,
            success: function (res){
                $(location).attr('href', './views/home.php');
                if(res && !res.error){
                    $(location).attr('href', './views/home.php');
                }
            }
        })
    });

    $('#formRegister').on('submit',function(e){
        e.preventDefault();
        let submit = $(this).serialize();
        $.ajax({
            url: '../php/ajax.php',
            method: $(this).attr('method'),
            data: submit,
            success: function(res){
                console.log(res);
            }
        })
    });
});