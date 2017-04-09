function initialize() {
	var latlng = new google.maps.LatLng(35.917359, 139.795382);
	var myOptions = {
		zoom: 16,/*拡大比率*/
		center: latlng,/*表示枠内の中心点*/
		scrollwheel: false, //マウスホイールでの拡大縮小
		mapTypeControlOptions: { mapTypeIds: ['sample', google.maps.MapTypeId.ROADMAP] }/*表示タイプの指定*/
	};
	var map = new google.maps.Map(document.getElementById('map-canvas-rin'), myOptions);
	/*アイコン設定*/
	var icon = new google.maps.MarkerImage('share/img/ico-rin.png',
		new google.maps.Size(80,91),//アイコンサイズ設定
		new google.maps.Point(0,0)//アイコン位置設定
	);
	var markerOptions = {
		position: latlng,
		map: map,
		title: 'ペット共生有料老人ホーム「輪（りん）」',
		icon: icon
	};
	var marker = new google.maps.Marker(markerOptions);
	/*取得スタイルの貼り付け*/
	var styleOptions = [
		{
			"stylers": [
				{ "saturation": -66 },
				{ "visibility": "simplified" },
				{ "lightness": 22 }
			]
		}
	];
var styledMapOptions = { name: 'ペット共生有料老人ホーム「輪（りん）」' }

// めぐり
var mapType = new google.maps.StyledMapType(styleOptions, styledMapOptions);
	map.mapTypes.set('sample', mapType);
	map.setMapTypeId('sample');
	var latlng = new google.maps.LatLng(35.917359, 139.795382);
	var myOptions = {
		zoom: 16,/*拡大比率*/
		center: latlng,/*表示枠内の中心点*/
		scrollwheel: false, //マウスホイールでの拡大縮小
		mapTypeControlOptions: { mapTypeIds: ['sample', google.maps.MapTypeId.ROADMAP] }/*表示タイプの指定*/
	};
	var map = new google.maps.Map(document.getElementById('map-canvas-meguri'), myOptions);
	/*アイコン設定*/
	var icon = new google.maps.MarkerImage('share/img/ico-meguri.png',
		new google.maps.Size(80,91),//アイコンサイズ設定
		new google.maps.Point(0,0)//アイコン位置設定
	);
	var markerOptions = {
		position: latlng,
		map: map,
		title: '療養通所介護「めぐり」',
		icon: icon
	};
	var marker = new google.maps.Marker(markerOptions);
	/*取得スタイルの貼り付け*/
	var styleOptions = [
		{
			"stylers": [
				{ "saturation": -66 },
				{ "visibility": "simplified" },
				{ "lightness": 22 }
			]
		}
	];
var styledMapOptions = { name: '療養通所介護「めぐり」' }
var mapType = new google.maps.StyledMapType(styleOptions, styledMapOptions);
	map.mapTypes.set('sample', mapType);
	map.setMapTypeId('sample');

// こころ
var mapType = new google.maps.StyledMapType(styleOptions, styledMapOptions);
	map.mapTypes.set('sample', mapType);
	map.setMapTypeId('sample');
	var latlng = new google.maps.LatLng(35.934398, 139.771825);
	var myOptions = {
		zoom: 16,/*拡大比率*/
		center: latlng,/*表示枠内の中心点*/
		scrollwheel: false, //マウスホイールでの拡大縮小
		mapTypeControlOptions: { mapTypeIds: ['sample', google.maps.MapTypeId.ROADMAP] }/*表示タイプの指定*/
	};
	var map = new google.maps.Map(document.getElementById('map-canvas-kokoro'), myOptions);
	/*アイコン設定*/
	var icon = new google.maps.MarkerImage('share/img/ico-kokoro.png',
		new google.maps.Size(80,91),//アイコンサイズ設定
		new google.maps.Point(0,0)//アイコン位置設定
	);
	var markerOptions = {
		position: latlng,
		map: map,
		title: 'デイサービスセンター「こころ」',
		icon: icon
	};
	var marker = new google.maps.Marker(markerOptions);
	/*取得スタイルの貼り付け*/
	var styleOptions = [
		{
			"stylers": [
				{ "saturation": -66 },
				{ "visibility": "simplified" },
				{ "lightness": 22 }
			]
		}
	];
var styledMapOptions = { name: 'デイサービスセンター「こころ」' }
var mapType = new google.maps.StyledMapType(styleOptions, styledMapOptions);
	map.mapTypes.set('sample', mapType);
	map.setMapTypeId('sample');

// プエンテ
var mapType = new google.maps.StyledMapType(styleOptions, styledMapOptions);
	map.mapTypes.set('sample', mapType);
	map.setMapTypeId('sample');
	var latlng = new google.maps.LatLng(35.890610, 139.798451);
	var myOptions = {
		zoom: 17,/*拡大比率*/
		center: latlng,/*表示枠内の中心点*/
		scrollwheel: false, //マウスホイールでの拡大縮小
		mapTypeControlOptions: { mapTypeIds: ['sample', google.maps.MapTypeId.ROADMAP] }/*表示タイプの指定*/
	};
	var map = new google.maps.Map(document.getElementById('map-canvas-puente'), myOptions);
	/*アイコン設定*/
	var icon = new google.maps.MarkerImage('share/img/ico-puente.png',
		new google.maps.Size(80,91),//アイコンサイズ設定
		new google.maps.Point(0, 0)//アイコン位置設定
	);
	var markerOptions = {
		position: latlng,
		map: map,
		title: 'デイサービスセンター「プエンテ」',
		icon: icon
	};
	var marker = new google.maps.Marker(markerOptions);
	/*取得スタイルの貼り付け*/
	var styleOptions = [
		{
			"stylers": [
				{ "saturation": -66 },
				{ "visibility": "simplified" },
				{ "lightness": 22 }
			]
		}
	];
var styledMapOptions = { name: 'デイサービスセンター「プエンテ」' }
var mapType = new google.maps.StyledMapType(styleOptions, styledMapOptions);
	map.mapTypes.set('sample', mapType);
	map.setMapTypeId('sample');
}
google.maps.event.addDomListener(window, 'load', initialize);
