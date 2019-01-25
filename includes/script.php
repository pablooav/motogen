<script type="text/javascript">
 $(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
    
    $("#btn-mensagem").click(function(){
        $("#janela1").modal();
    });
    




function checkWidth(init)
{
    if ($(window).width() < 1200) {
        $('#sidebar').addClass('active');
    }
    else {
        if (!init) {
            $('#sidebar').removeClass('active');
        }
    }
}

$(document).ready(function() {
    checkWidth(true);

    $(window).resize(function() {
        checkWidth(false);
    });
});

 });
</script>