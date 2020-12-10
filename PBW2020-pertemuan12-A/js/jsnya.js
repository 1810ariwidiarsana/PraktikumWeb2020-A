$(document).ready(function(){
    $(".logout").click(function(e){
        e.preventDefault();
        if(confirm("Anda Yakin Logout?")){
            window.location.href = $(this).attr('href');
        }
    });
    $(".editdata").click(function(e){
        e.preventDefault();
        $.ajax({
            url: $(this).attr('href'),
            dataType: 'html',
            success: function(pesan){
                $(".isiannya").html(pesan);
            }
        });
        $("#editdata").modal('show');
    });
    $(".hapusdata").click(function(e){
        e.preventDefault();
        if(confirm("Anda yakin ingin hapus?")){
            window.location.href = $(this).attr('href');
        }
    })
});