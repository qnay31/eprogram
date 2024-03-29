$(document).ready(function () {

    $("#modalDaily").on('hidden.bs.modal', function () {
        $(this).find('form').trigger('reset');
    });

    $("#modalLaporan").on('hidden.bs.modal', function () {
        $(this).find('form').trigger('reset');
    });

    $("#nama").on('hidden.bs.modal', function () {
        $(this).find('form').trigger('reset');
    });

    $('.show').click(function () {
        var toggleId= 'menu' + $(this).data("id")
        // console.log(toggleId);
        $('.' + toggleId).slideToggle();
    });

    $('.showEdit').click(function () {
        var toggleId= 'menuEdit' + $(this).data("id")
        // console.log(toggleId);
        $('.' + toggleId).slideToggle();
    });

    var $modal = $('#modal');
    var image = document.getElementById('sample_image');
    var cropper;

    //$("body").on("change", ".image", function(e){
    $('#upload_image').change(function(event) {
        var files = event.target.files;
        var done = function(url) {
            image.src = url;
            $modal.modal('show');
        };

        if (files && files.length > 0) {
            /*file = files[0];
      		if(URL)
      		{
        		done(URL.createObjectURL(file));
      		}
      		else if(FileReader)
      		{*/
            reader = new FileReader();
            reader.onload = function(event) {
                done(reader.result);
            };
            reader.readAsDataURL(files[0]);
            //}
        }
    });

    $modal.on('shown.bs.modal', function() {
        cropper = new Cropper(image, {
            aspectRatio: 1,
            viewMode: 3,
            preview: '.preview'
        });
    }).on('hidden.bs.modal', function() {
        cropper.destroy();
        cropper = null;
    });

    $("#crop").click(function() {
        
        canvas = cropper.getCroppedCanvas({
            width: 400,
            height: 400,
        });

        canvas.toBlob(function(blob) {
            //url = URL.createObjectURL(blob);
            var reader = new FileReader();
            reader.readAsDataURL(blob);
            reader.onloadend = function() {
                var base64data = reader.result;

                $.ajax({
                    url: "../profil/upload.php",
                    method: "POST",
                    data: {
                        image: base64data
                    },
                    success: function(data) {
                        // console.log(data);
                        $modal.modal('hide');
                        $('#uploaded_image').attr('src', data);
                        //alert("success upload image");
                    }
                });
            }
        });
    });

    load_data();

    function load_data(keyword) {
        $.ajax({
            method: "POST",
            url: "../data_yatimDepok.php",
            data: {
                keyword: keyword
            },
            success: function (hasil) {
                $('.data_depok').html(hasil);
            }
        });
    }

    load_data2();

    function load_data2(keyword) {
        $.ajax({
            method: "POST",
            url: "../data_yatimBogor.php",
            data: {
                keyword: keyword
            },
            success: function (hasil) {
                $('.data_bogor').html(hasil);
            }
        });
    }

    load_data3();

    function load_data3(keyword) {
        $.ajax({
            method: "POST",
            url: "../data_yatimGlobal.php",
            data: {
                keyword: keyword
            },
            success: function (hasil) {
                $('.data_global').html(hasil);
            }
        });
    }

    $('#s_keywordDepok').keyup(function () {
        var keyword = $("#s_keywordDepok").val();
        load_data(keyword);
    });

    $('#s_keywordBogor').keyup(function () {
        var keyword = $("#s_keywordBogor").val();
        load_data2(keyword);
    });

    $('#s_keywordGlobal').keyup(function () {
        var keyword = $("#s_keywordGlobal").val();
        load_data3(keyword);
    });

    function Capitalize(str) {
        return str.replace(/\w\S*/g,
            function (txt) {
                return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
            });
    }

    // tabel log history
    $('#tabel-log').DataTable({
        "scrollX": true,
        "processing": true,
        "serverSide": true,
        "scrollCollapse": true,
        deferRender: true,
        dom: 'lfrtip',
        buttons: [{
                extend: 'excelHtml5',
                footer: true
            },
            'colvis'
        ],
        "lengthMenu": [
            [10, 25, 50, 100, 1000000],
            [10, 25, 50, 100, "All"]
        ],
        "ajax": "../data/data_log.php",
        "order": [
            [4, "desc"]
        ],
        // "autoWidth": true,
        columnDefs: [{
            "targets": 0,
            "render": function (data, type, row, meta) {
                var no = meta.row + meta.settings._iDisplayStart + 1;
                return "<center>" + no + "</center>"
            }
        }, {
            targets: 1,
            "render": function (data) {
                return Capitalize(data);
            }
        }, {
            targets: [4],
            orderData: [0, 4]
        }, {
            targets: [5],
            orderData: [1, 5]
        }],
    });

    // tabel laporan
    $('#tabel-data_laporan').DataTable({
        "scrollX": true,
        responsive: true,
        dom: 'Plfrtip',
        searchPanes: {
            cascadePanes: true
        },
        "lengthMenu": [
            [10, 25, 50, 100, -1],
            [10, 25, 50, 100, "All"]
        ],
        // "autoWidth": true,
        columnDefs: [{
            width: 120,
            targets: 1
        }, {
            width: 120,
            targets: 2
        }, {
            width: 350,
            targets: 3
        }, {
            width: 150,
            targets: 4
        }, {
            searchPanes: {
                show: true,
                initCollapsed: true,
                orderable: false
            },
            targets: [1, 2]
        }, {
            searchPanes: {
                show: false
            },
            targets: [3, 4]
        }],
    });

    // tabel database laporan
    $('#tabel-database_laporan').DataTable({
        "scrollX": true,
        responsive: true,
        dom: 'PBlfrtip',
        buttons: [{
            extend: 'excelHtml5',
            footer: true

        }],
        "lengthMenu": [
            [10, 25, 50, 100, -1],
            [10, 25, 50, 100, "All"]
        ],
        "autoWidth": true,
        columnDefs: [{
            width: 150,
            targets: 1
        }, {
            width: 200,
            targets: 2
        }, {
            width: 250,
            targets: 3
        }, {
            searchPanes: {
                show: true,
                initCollapsed: true,
                orderable: false
            },
            targets: [1, 2]
        }, {
            searchPanes: {
                show: false
            },
            targets: [3]
        }],
    });

    // tabel perkembangan
    $('#tabel-data_perkembangan').DataTable({
        "scrollX": true,
        "processing": true,
        "serverSide": false,
        "scrollCollapse": true,
        deferRender: true,
        dom: 'PBlfrtip',
        buttons: [{
                extend: 'excelHtml5',
                footer: true
            },
            'colvis'
        ],
        "lengthMenu": [
            [10, 25, 50, 100, 1000000],
            [10, 25, 50, 100, "All"]
        ],
        "ajax": "../data/data_perkembangan.php",
        // "autoWidth": true,
        columnDefs: [{
            "targets": 0,
            "render": function (data, type, row, meta) {
                var no = meta.row + meta.settings._iDisplayStart + 1;
                return "<center>" + no + "</center>"
            }
        }, {
            targets: 1,
            "render": function (data) {
                return Capitalize(data);
            }
        }, {
            targets: 3,
            "render": function (data) {
                return Capitalize(data);
            }
        }, {
            searchPanes: {
                show: true,
                initCollapsed: true,
                orderable: false
            },
            targets: [1, 2]
        }, {
            searchPanes: {
                show: false
            },
            targets: [3]
        }],
    });

    // data akun
    $('#tabel-data_akun').DataTable({
        "scrollX": true,
        "processing": true,
        "serverSide": false,
        "scrollCollapse": true,
        deferRender: true,
        dom: 'Plfrtip',
        "lengthMenu": [
            [10, 25, 50, 100, 1000000],
            [10, 25, 50, 100, "All"]
        ],
        "ajax": "../data/data_akun.php",
        // "autoWidth": true,
        columnDefs: [{
            "targets": 0,
            "render": function (data, type, row, meta) {
                var no = meta.row + meta.settings._iDisplayStart + 1;
                return "<center>" + no + "</center>"
            }
        }, {
            targets: 1,
            width: 120,
            "render": function (data) {
                return Capitalize(data);
            }
        }, {
            targets: 2,
            width: 150,
            "render": function (data) {
                return Capitalize(data);
            }
        }, {
            targets: 3,
            width: 80,
            "render": function (data) {
                return "<center>"+data+"</center>";
            }
        }, {
            targets: 4,
            width: 150
        }, {
            targets: 5,
            width: 150
        }, {
            targets: 6,
            width: 150,
            "render": function (data) {
                var btn = "<center><a href=\"../models/base_admin/hapus_akun.php?id_unik=" + data + "\" onclick=\"return confirm('Data akan dihapus?')\" class=\"btn btn-danger btn-xs\"><i class=\"bi bi-trash\"></i></a></center>"
                return btn;
            }
        }, {
            searchPanes: {
                show: true,
                initCollapsed: true,
                orderable: false
            },
            targets: [2]
        }, {
            searchPanes: {
                show: false
            },
            targets: [1, 3, 4, 5]
        }],
    });

    // data yatim
    $('#tabel-data_yatim').DataTable({
        "scrollX": true,
        "processing": true,
        "serverSide": false,
        "scrollCollapse": true,
        deferRender: true,
        dom: 'Plfrtip',
        "lengthMenu": [
            [10, 25, 50, 100, 1000000],
            [10, 25, 50, 100, "All"]
        ],
        "ajax": "../data/data_yatim.php",
        // "autoWidth": true,
        columnDefs: [{
            "targets": 0,
            "render": function (data, type, row, meta) {
                var no = meta.row + meta.settings._iDisplayStart + 1;
                return "<center>" + no + "</center>"
            }
        }, {
            targets: 1,
            width: 120,
            "render": function (data) {
                return Capitalize(data);
            }
        }, {
            targets: 2,
            width: 150,
            "render": function (data) {
                var btn = "<center><a href=\"../models/base_admin/hapus_yatim.php?id_unik=" + data + "\" onclick=\"return confirm('Data akan dihapus?')\" class=\"btn btn-danger btn-xs\"><i class=\"bi bi-trash\"></i></a></center>"
                return btn;
            }
        }, {
            searchPanes: {
                show: true,
                initCollapsed: true,
                orderable: false
            },
            targets: [1]
        }, {
            searchPanes: {
                show: false
            },
            targets: [2]
        }],
    });

    $('#tabel-adminLog').DataTable({
        "scrollX": true,
        "processing": true,
        "serverSide": true,
        "scrollCollapse": true,
        deferRender: true,
        dom: 'lfrtip',
        buttons: [{
                extend: 'excelHtml5',
                footer: true
            },
            'colvis'
        ],
        "lengthMenu": [
            [10, 25, 50, 100, 1000000],
            [10, 25, 50, 100, "All"]
        ],
        "ajax": "../data/data_log.php",
        "order": [
            [4, "desc"]
        ],
        // "autoWidth": true,
        columnDefs: [{
            "targets": 0,
            "render": function (data) {
                var btn = "<center><a href=\"../models/base_admin/hapus_log.php?id_unik=" + data + "\" onclick=\"return confirm('Hapus log history ini?')\" class=\"btn btn-danger btn-xs\"><i class=\"bi bi-trash\"></i></a></center>"
                return btn;
            }
        }, {
            "targets": 1,
            "render": function (data) {
                return Capitalize(data);
            }
        }, {
            targets: [4],
            orderData: [0, 4]
        }, {
            targets: [5],
            orderData: [1, 5]
        }],
    });

});