var wms_layers = [];


        var lyr_GoogleSatellite_0 = new ol.layer.Tile({
            'title': 'Google Satellite',
            'type': 'base',
            'opacity': 1.000000,
            
            
            source: new ol.source.XYZ({
    attributions: ' ',
                url: 'https://mt1.google.com/vt/lyrs=s&x={x}&y={y}&z={z}'
            })
        });
var format_DASRAPERMEN_1 = new ol.format.GeoJSON();
var features_DASRAPERMEN_1 = format_DASRAPERMEN_1.readFeatures(json_DASRAPERMEN_1, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_DASRAPERMEN_1 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_DASRAPERMEN_1.addFeatures(features_DASRAPERMEN_1);
var lyr_DASRAPERMEN_1 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_DASRAPERMEN_1, 
                style: style_DASRAPERMEN_1,
                interactive: true,
                title: '<img src="styles/legend/DASRAPERMEN_1.png" /> DAS RAPERMEN'
            });

lyr_GoogleSatellite_0.setVisible(true);lyr_DASRAPERMEN_1.setVisible(true);
var layersList = [lyr_GoogleSatellite_0,lyr_DASRAPERMEN_1];
lyr_DASRAPERMEN_1.set('fieldAliases', {'fid': 'fid', 'OBJECTID': 'OBJECTID', 'KODE_DAS': 'KODE_DAS', 'NAMA_DAS': 'NAMA_DAS', 'LUAS_HA': 'LUAS_HA', 'KLSFKS': 'KLSFKS', 'BPDASHL': 'BPDASHL', 'KETERANGAN': 'KETERANGAN', 'SHAPE_Leng': 'SHAPE_Leng', 'SHAPE_Area': 'SHAPE_Area', 'KET': 'KET', 'layer': 'layer', 'path': 'path', });
lyr_DASRAPERMEN_1.set('fieldImages', {'fid': 'TextEdit', 'OBJECTID': 'TextEdit', 'KODE_DAS': 'TextEdit', 'NAMA_DAS': 'TextEdit', 'LUAS_HA': 'TextEdit', 'KLSFKS': 'TextEdit', 'BPDASHL': 'TextEdit', 'KETERANGAN': 'TextEdit', 'SHAPE_Leng': 'TextEdit', 'SHAPE_Area': 'TextEdit', 'KET': 'TextEdit', 'layer': 'TextEdit', 'path': 'TextEdit', });
lyr_DASRAPERMEN_1.set('fieldLabels', {'fid': 'inline label', 'OBJECTID': 'inline label', 'KODE_DAS': 'inline label', 'NAMA_DAS': 'inline label', 'LUAS_HA': 'inline label', 'KLSFKS': 'inline label', 'BPDASHL': 'inline label', 'KETERANGAN': 'inline label', 'SHAPE_Leng': 'inline label', 'SHAPE_Area': 'inline label', 'KET': 'inline label', 'layer': 'inline label', 'path': 'inline label', });
lyr_DASRAPERMEN_1.on('precompose', function(evt) {
    evt.context.globalCompositeOperation = 'normal';
});