$(document).ready(function () {

    $("#modalDaily").on('hidden.bs.modal', function () {
        $(this).find('form').trigger('reset');
    });

    $("#nama").on('hidden.bs.modal', function () {
        $(this).find('form').trigger('reset');
    });

    $("#alamat").on('hidden.bs.modal', function () {
        $(this).find('form').trigger('reset');
    });

    $("#ttl").on('hidden.bs.modal', function () {
        $(this).find('form').trigger('reset');
    });

    $("#ibu").on('hidden.bs.modal', function () {
        $(this).find('form').trigger('reset');
    });

    $("#ayah").on('hidden.bs.modal', function () {
        $(this).find('form').trigger('reset');
    });

    $("#sekolah").on('hidden.bs.modal', function () {
        $(this).find('form').trigger('reset');
    });

    $("#kelas").on('hidden.bs.modal', function () {
        $(this).find('form').trigger('reset');
    });

    $("#laporan").on('hidden.bs.modal', function () {
        $(this).find('form').trigger('reset');
    });

    load_data();
    function load_data(keyword) {
        $.ajax({
            method: "POST",
            url: "../data_yatimDepok.php",
            data: {
                keyword: keyword
            },
            success: function(hasil) {
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
            success: function(hasil) {
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
            success: function(hasil) {
                $('.data_global').html(hasil);
            }
        });
    }
    
    $('#s_keywordDepok').keyup(function() {
        var keyword = $("#s_keywordDepok").val();
        load_data(keyword);
    });

    $('#s_keywordBogor').keyup(function() {
        var keyword = $("#s_keywordBogor").val();
        load_data2(keyword);
    });

    $('#s_keywordGlobal').keyup(function() {
        var keyword = $("#s_keywordGlobal").val();
        load_data3(keyword);
    });

    // tabel log history
    $('#tabel-log').DataTable({
        "scrollX": true,
        responsive: true,
        "lengthMenu": [
            [10, 25, 50, 100, -1],
            [10, 25, 50, 100, "All"]
        ],
        dom: 'Plfrtip',
        // "autoWidth": true,
        columnDefs: [{
            searchPanes: {
                show: true,
                initCollapsed: true
            },
            targets: [1]
        }, {
            searchPanes: {
                show: true,
                initCollapsed: true
            },
            targets: [2]
        }, {
            searchPanes: {
                show: false
            },
            targets: [3]
        }, {
            searchPanes: {
                show: false
            },
            targets: [4]
        }, {
            searchPanes: {
                show: false
            },
            targets: [5]
        }, {
            searchPanes: {
                show: false
            },
            targets: [6]
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
            targets: [1,2]
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
            targets: [1,2]
        }, {
            searchPanes: {
                show: false
            },
            targets: [3]
        }],
    });

});