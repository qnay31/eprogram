<?php
session_start();
/*
 * DataTables example server-side processing script.
 *
 * Please note that this script is intentionally extremely simple to show how
 * server-side processing can be implemented, and probably shouldn't be used as
 * the basis for a large complex system. It is suitable for simple use cases as
 * for learning.
 *
 * See http://datatables.net/usage/server-side for full details on the server-
 * side processing requirements of DataTables.
 *
 * @license MIT - http://datatables.net/license_mit
 */
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */
 
// DB table to use
$table = 'perkembangan_yatim';
 
// Table's primary key
$primaryKey = 'id';
 
if ($_SESSION["id_pengurus"] == "ketua_yayasan") {
    $where = "id_pengurus = 'guru' ORDER BY nama_yatim ASC";

} elseif ($_SESSION["id_pengurus"] == "kepala_program" && $_SESSION["cabang"] == "Bogor" || $_SESSION["id_pengurus"] == "kepala_cabang" && $_SESSION["cabang"] == "Bogor") {
    $where = "cabang = '$_SESSION[cabang]' ORDER BY nama_yatim ASC";

} elseif ($_SESSION["id_pengurus"] == "kepala_program" && $_SESSION["cabang"] == "Depok") {
    $where = "cabang = '$_SESSION[cabang]' ORDER BY nama_yatim ASC";

} else {
    $where = "nomor_id = '$_SESSION[id]' ORDER BY nama_yatim ASC";
}
// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
    array( 'db' => 'id', 'dt' => 0 ),
    array( 'db' => 'nama_yatim', 'dt' => 1 ),
    array( 'db' => 'cabang', 'dt' => 2 ),
    array( 'db' => 'guru',  'dt' => 3 ),
    array(
        'db'        => 'perkembangan',     
        'dt'        => 4,
        'formatter' => function( $d, $row ) {
            $deskripsi = ucwords($d);
            return $deskripsi;
        }
    )
);
 
// SQL server connection information
$sql_details = array(
    'user' => 'root',
    'pass' => '',
    'db'   => 'program',
    'host' => 'localhost'
);
 
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */
 
require( '../ssp.class.php' );
 
echo json_encode(
    SSP::complex( $_GET, $sql_details, $table, $primaryKey, $columns, $where )
);