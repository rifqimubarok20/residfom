<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
        <div class="container mt-5">

<div class="row">
    <div class="col-md-8 col-sm-8">

        <div class="panel panel-default">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span class="glyphicon glyphicon-globe">Map</span>
                    </h3>
                </div>
                <div class="panel-body">
                    <div style="height:300px;" id="map-canvas">

                    </div>

                </div>
            </div>

        </div>

    </div>

    <div class="col-md-4 col-sm-4">
        <div class="panel panel-default">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span class="glyphicon glyphicon-map-marker"> Marker Rumah</span>
                    </h3>
                </div>
                <div class="panel-body">

                    <form>

                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label for="latitude">Latitude</label>
                                    <input type="text" class="form-control" id="latitude" placeholder="Input field">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label for="longitude">Longitude</label>
                                    <input type="text" class="form-control" id="longitude" placeholder="Input field">
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 mt-4">
                                <div class="form-group">
                                    <label for="jembatan_id">Nama Warga</label>
                                    <select class="form-control" name="id_warga" id="id_warga">
                                        <option value="">Pilih nama warga</option>
                                        <?php foreach ($itemwarga->result() as $warga) {
                                        ?>
                                            <option value="<?php echo $warga->id; ?>"><?php echo $warga->nama; ?></option>
                                        <?php
                                        } ?>
                                    </select>
                                </div>

                                <div class="form-group mt-3">
                                    <button type="button" id="simpan" class="btn btn-primary" name="simpan">simpan</button>
                                    <button type="button" id="reset" class="btn btn-danger" name="reset">clear</button>
                                </div>





                            </div>


                        </div>







                    </form>

                </div>
            </div>

        </div>
    </div>



</div>

<div class="row">
    <div class="col-md-12 col-sm-12 mt-3">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title mt-3"><span class="glyphicon glyphicon-th-list"></span> Data Marker Rumah</h3>
            </div>
            <div class="panel-body">
                <table class="table table-bordered">
                    <th>No</th>
                    <th>Nama Warga</th>
                    <th>Latitude</th>
                    <th>Longitude</th>
                    <th>Alamat</th>
                    <th></th>

                    <tbody id="daftarmarker">
                        <?php
                        $no = 1;
                        foreach ($itemkoordinat->result() as $koordinat) {
                        ?>

                            <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo $koordinat->nama ?></td>
                                <td><?php echo $koordinat->latitude ?></td>
                                <td><?php echo $koordinat->longitude ?></td>
                                <td><?php echo $koordinat->alamat ?></td>
                                <td>
                                    <button type="button" id="deletemarker" data-idkoordinatrumah="<?php echo $koordinat->id_koordinatrumah ?>" class="btn btn-sm btn-danger" name="button" title="hapus marker rumah"><span class="nav-icon fas fa-trash"></span></button>
                                </td>
                            </tr>

                        <?php
                            $no++;
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>





</div>

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
<script>
var map;
var markers = [];

function initialize() {
    var mapOptions = {
        zoom: 14,
        // Center di kantor kabupaten kudus
        center: new google.maps.LatLng(-6.806428778495534, 110.84213197231293)
    };

    map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

    // Add a listener for the click event
    google.maps.event.addListener(map, 'rightclick', addLatLng);
    google.maps.event.addListener(map, 'rightclick', function(event) {
        var lat = event.latLng.lat();
        var lng = event.latLng.lng();
        $('#latitude').val(lat);
        $('#longitude').val(lng);
        //alert(lat +" dan "+lng);
    });
}

function addLatLng(event) {
    var marker = new google.maps.Marker({
        position: event.latLng,
        title: 'Simple GIS',
        map: map
    });
    markers.push(marker);
}

function addMarker(nama, location) {
    var marker = new google.maps.Marker({
        position: location,
        map: map,
        title: nama
    });
    markers.push(marker);
}

function clearmap() {
    $('#latitude').val('');
    $('#longitude').val('');
    setMapOnAll(null);
}

function setMapOnAll(map) {
    for (var i = 0; i < markers.length; i++) {
        markers[i].setMap(map);
    }
    markers = [];
}

google.maps.event.addDomListener(window, 'load', initialize);

$(document).on('click', '#simpan', simpan)
    .on('click', '#reset', reset)
    .on('click', '#deletemarker', deletemarker);

function reset() {
    $('#id_warga').val('');
    $('#latitude').val('');
    $('#longitude').val('');
    clearmap();
}

function simpan() {
    var datakoordinat = {
        'id': $('#id_warga').val(),
        'latitude': $('#latitude').val(),
        'longitude': $('#longitude').val()
    };
    console.log(datakoordinat);
    $.ajax({
        url: '<?php echo site_url("rumah/create") ?>',
        data: datakoordinat,
        dataType: 'json',
        type: 'POST',
        success: function(data, status) {
            if (data.status != 'error') {
                reset();
                $('#daftarmarker').load('<?php echo current_url() . "/ #daftarmarker > *" ?>');
                //end load marker
            } else {
                alert("data berhasil disimpan");
            }
        },
        error: function(x, t, m) {
            alert(x.responseText);
        }
    })

}

function deletemarker() {
    if (confirm('anda yakin ingin menghapus ?')) {
        var id = $(this).data('idkoordinatrumah');
        var datamarker = {
            'id_koordinatrumah': id
        };
        $.ajax({
            url: '<?php echo site_url("rumah/delete") ?>',
            data: datamarker,
            dataType: 'json',
            type: 'POST',
            success: function(data, status) {
                if (data.status != 'error') {
                    // reset();
                    $('#daftarmarker').load('<?php echo current_url() . "/ #daftarmarker > *" ?>');
                    //end load marker
                } else {
                    alert(data.msg);
                }
            },
            error: function(x, t, m) {
                alert(x.responseText);
            }
        })
    }

}
</script>
        </div>
    </section>
</div>

