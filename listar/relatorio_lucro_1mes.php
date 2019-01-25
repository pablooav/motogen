<?php

$dados = listar();
?>
<html>
<script>
    $(function () {
        var data4 = {};

        $.ajax({
            url: "listar_relatorio_lucro_1mes.php",
            async: false,
            dataType: 'json',
            success: function(data) {
                data4 = data;
            }
        });

        var bar = new Morris.Bar({
            element: 'bar-chart',
            resize: true,
            data: data4,
            barColors: ['red', 'blue', 'red', 'blue', 'red'],
            xkey: 'nomeMes',
            ykeys: ['totalMes', 'totalMes', 'totalMes', 'totalMes', 'totalMes' ],
            labels: ['nomeMes', 'nomeMes', 'nomeMes', 'nomeMes', 'nomeMes'],
            hideHover: 'auto'
        });

    });
</script>
</html>                   