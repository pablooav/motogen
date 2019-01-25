<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
<div id="mapaTodos" style="height: 650px"></div>
<div id="mapaOff" class="text-center" style="height: 650px" hidden>
    <img src="../img/icone_interroga.png" style="height: 70%; width: auto;"/>
    <h2>Nenhum Motoboy cadastrado.</h2>
</div>
</div>
<div id="modalLoc" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
			    <input type="hidden" id="empresaId" hidden value="<?php session_start(); echo $_SESSION['empresaId'];?>"/>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Localização</h4>
			</div>
			
			<div id="mapaMotoboy" style="height: 400px;"></div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
			</div>
		</div>
	</div>
</div>
	
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDvkxcSEIDmc5jvWcS9_cQPcfMtAB7-6Dk"></script>
<script>
    var geocoder,
		mode,
		map,
		latitude,
		longitude,
		bounds = new google.maps.LatLngBounds();;

	

	//Funcao que realiza a exibicao dos marcadores de localizao dos motoboys.
	function displayMarkers() {
		// A variavel bounds realiza a criacao de um objeto da api do maps, que por si só delimita a area em
		// que será feita a marcacao dos pontos.
		var bounds = new google.maps.LatLngBounds();

		// Chamada do banco de dados firebase onde realizo a consulta pegando a latitude e longitude e repetindo
		// no forEach, chamando assim a funcao createMarker que cria os marcadores no mapa.
		firebase.database().ref('rastreio/').on('value', snapshot => {
			snapshot.forEach(rastreio => {
	
			    if(rastreio.val().empresaId == $("#empresaId").val() ){
			    
				var loc = rastreio.val().location,
					latlng = new google.maps.LatLng(loc.latitude, loc.longitude);

				createMarker(loc.latitude, loc.longitude);

				bounds.extend(latlng);
				map.fitBounds(bounds);
				
			    }
			    else{
			       
			   $("#mapaTodos").hide();
			   $("#mapaOff").show();
			    }
			});
		});

		
	}

	// Funcao de criacao dos markers que aparecem no mapa e marcam os motoboys.
	// Se quiser pode estilizar esses marcadores, colocando imagem ou mudando cor.
	function createMarker(lat, lng){
		var marker = new google.maps.Marker({
			 icon: '../img/marcador.png',
			map: map,
			position: new google.maps.LatLng(lat, lng)
		});

		google.maps.event.addListener(marker, 'click', function() {
			mapaMotoboy(lat, lng);
		});
	}

    function mapaMotoboy(lat, lng) {
		$('#modalLoc').modal('show');
		var infoWindow = new google.maps.InfoWindow({map: map}),
			latlng = new google.maps.LatLng(lat, lng);
		map = new google.maps.Map(document.getElementById("mapaMotoboy"), {
			zoom: 18,
		
			center: latlng,
			mapTypeId: google.maps.MapTypeId.ROADMAP
			
		})
		var infowindow = new google.maps.InfoWindow();
		var marker = new google.maps.Marker({
			zoom: 18,
			
			position: latlng,
			animation: google.maps.Animation.DROP,
				icon: '../img/marcador2.png',
			map: map
		});
		google.maps.event.addListener(marker, 'click', (function(marker) {
			return function() {
				if (marker.getAnimation() !== null) {
					marker.setAnimation(null);
				} else {
					marker.setAnimation(google.maps.Animation.BOUNCE);
				}
			}
		})(marker));
	}

	//Funcao que rendeniza o mapa na tela do usuario e que chama a funcao displayMarkers que esta la em cima.
	function initialize() {
		let root = firebase.database().ref().child('rastreio');
		root.on("value", snap => {
			var loc = snap.val(),
				mapOptions = {
					center: new google.maps.LatLng(loc.latitude, loc.longitude),
					zoom: 20,
					mapTypeId: 'roadmap',
				};
			map = new google.maps.Map(document.getElementById('mapaTodos'), mapOptions);
			infoWindow = new google.maps.InfoWindow();

			google.maps.event.addListener(map, 'click', function() {
				infoWindow.close();
			});

			displayMarkers();
		})			
	}

	$(function(){
		$("#btn-mensagem").click(function(){
			$("#janela1").modal();
		});
	});
	google.maps.event.addDomListener(window, 'load', initialize);
</script>
		