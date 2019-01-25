<!DOCTYPE html>
<html>
    <head>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="listar/lib/bootstrap.min.css">
        <link rel="stylesheet" href="listar/lib/ionicons.min.css">
        <link rel="stylesheet" href="listar/lib/morris.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
        <link rel="stylesheet" href="listar/lib/skins/_all-skins.min.css">
        <script src="listar/lib/bootstrap.min.js"></script>
        <script src="listar/lib/raphael.min.js"></script>
        <script src="listar/lib/morris.min.js"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Motogen - Home</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="style.css">
		<link rel="shortcut icon" href="login/img/motogen.ico" />
    
    </head>
	
	<STYLE>
	.gambiarra-tabela{border: 1px solid black; padding: 8px;};
	td{border: 1px solid black;};
	tr{border: 1px solid black;};
	th{border: 1px solid black;};
	.relatorio_ativo{};
	.relatorio_inativo{};
	
	.centralizar {
  margin: auto;
  width: 80%;
  background: #fff;
  border: 3px solid #73AD21;
  padding: 10px;
}

	
	</style>
    <body>

        <div class="wrapper">
            
			<!-- Incluir menu de lado -->
           <?php include ("includes/menu.php"); ?>

            <!-- Page Content Holder -->
            <div id="content" class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
			
			<!-- Incluir menu superior -->
			<?php include ("includes/menu2.php"); ?>

               
					<h3><center>Destaques</center></h3><br><br>
						<p>	
						<div class="col-md-1 col-lg-1 col-xs-1 col-sm-1"></div>
						<div class="col-md-10 col-lg-10 col-xs-10 col-sm-10">
						    <div class="col-md-6 col-lg-6 col-xs-6 col-sm-6">
						        
						        <p><b>Relatório de Motoboys</b><br>
								
								<div id="relatorio_motoboys" >
								    <div class="box-body chart-responsive">
                                    <div class="chart" id="bar-chart-motoboy" style="height: 300px;"></div>
                                    </div>
								</div>
						        
						    </div>
						    <div class="col-md-6 col-lg-6 col-xs-6 col-sm-6">
						        
						        	<p><b>Relatório de Lucro dos últimos 12 Meses</b><br>
								
								<div id="relatorio_lucro_1mes" >
								    <div class="box-body chart-responsive">
                                    <div class="chart" id="bar-chart-lucro" style="height: 300px;"></div>
                                    </div>
								</div>
						        
						    </div>
						    
							<div class="row center">	
							
							<div class="line "></div>
 
  <div class="centralizar"><center>
      
      	<p><b>Relatório de Lucro Tempo Determinado</b><br>
								
								<Br>
								
									<label for="data_inicio">Data Início</label>
									<input type=date name="data_inicio" id="data_inicio" class="form-control" size="45"  style="max-width: 180px" ></p><br>
									
									<label for="data_fim">Data Fim</label>
									<input type=date name="data_fim" id="data_fim" class="form-control" size="45" style="max-width: 180px;"></p><br>
									
									
									<div class="box-body chart-responsive">
                                    <div class="chart" id="bar-chart-tempo" style="height: 300px;"></div>
                                    </div>
									<br>
      
  
  
								
							
							
								</div>
								
								
								 
								<p><center> <input type="button" class="btn btn-default"  id="relMes" name="relMes" value="Gerar Relatorio"></p><br>
								<input type="hidden" hidden name="varRel" id="varRel" value="0"/></center>
								<br>
						</center></div>
								<div class="col-md-1 col-lg-1 col-xs-1 col-sm-1"></div>
							
							</div>				
						</div>
			</div>
		</div>



        <!-- jQuery CDN -->
         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

         <!-- Incluir animações do menu -->
			 <?php include ("includes/script.php"); ?>
         
    </body>

	
	<script type="text/javascript">
	
    $(function () {
        var data4 = {};

        $.ajax({
            url: "listar/listar_relatorio_lucro_meses.php",
            async: false,
            dataType: 'json',
            success: function(data) {
                data4 = data;
            }
        });

        var bar = new Morris.Bar({
            element: 'bar-chart-lucro',
            resize: true,
            data: data4,
            barColors: ['orange'],
            xkey: 'nomeMes',
            ykeys: ['totalMes'],
            labels: ['Lucro p/ Mês'],
            hideHover: 'auto'
        });
        
        	var v = setInterval(mTimer, 20000);

            function mTimer() {
                
                    $.ajax({
                        url: "listar/listar_relatorio_lucro_meses.php",
                        async: false,
                        dataType: 'json',
                        success: function(data) {
                            data4 = data;
                        }
                    });
            bar.setData(data4);
            }

    });
    // --------------- //
    
    
     $(function () {
        var data42 = {};

        $.ajax({
            url: "listar/listar_relatorio_motoboy.php",
            async: false,
            dataType: 'json',
            success: function(data) {
                data42 = data;
            }
        });

        var bar2 = new Morris.Bar({
            element: 'bar-chart-motoboy',
            resize: true,
            data: data42,
            barColors: ['orange'],
            xkey: 'nomeMotoboy',
            ykeys: ['valorMotoboy'],
            labels: ['Montante p/ Motoboy'],
            hideHover: 'auto'
        });
        
        	var v2 = setInterval(mTimer2, 20000);

            function mTimer2() {
                
                    $.ajax({
                        url: "listar/listar_relatorio_motoboy.php",
                        async: false,
                        dataType: 'json',
                        success: function(data) {
                            data42 = data;
                        }
                    });
            bar2.setData(data42);
            }

    });
    
    // -------- //
    var bar3 = null;
 
  $(function(){
    $('#relMes').click(function(){
        
        
        
        var data2 = $("#data_fim").val();
        var data1 = $("#data_inicio").val();
        
        if(data1 != "" && data1 != null && data2 != "" && data2 != null){
        var data1String = moment(data1).format('YYYY-MM-DD');
        var data2String = moment(data2).format('YYYY-MM-DD');
       
       if( $("#varRel").val() == "0"){
        

        var data43 = {};

        $.ajax({
            url: "listar/listar_relatorio_lucro_tempo.php",
            method:"GET",
             data:{
                data1:data1String,
                data2:data2String
            },
            async: false,
            dataType: 'json',
            success: function(data) {
                data43 = data;
                
            }
        });

         bar3 = new Morris.Bar({
            element: 'bar-chart-tempo',
            resize: true,
            data: data43,
            barColors: ['green'],
            xkey: 'nomeMes',
            ykeys: ['totalMes'],
            labels: ['Valor p/ Mês'],
            hideHover: 'auto'
        });
        
        
        $("#varRel").val("1");
        

    }
    
    else{
        
        var data43 = {};

        $.ajax({
            url: "listar/listar_relatorio_lucro_tempo.php",
            method:"GET",
             data:{
                data1:data1String,
                data2:data2String
            },
            async: false,
            dataType: 'json',
            success: function(data) {
                data43 = data;
                
            }
        });
        
        
       bar3.setData(data43);
        
        
        
    }
    
        }
        
        else{
            
            alert("Preencha o período corretamente!");
        }
      
    });
    
});





    
    
    
    
    
    
    
    
    
</script>
</html>
