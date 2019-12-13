<?php
include('auth.php'); 
include('viewer/base.php'); 
/* * * *
 * Document : profile.php
 * Description : handle operation occur in ?p=profile
 * Author : afif
 * Modified : 9th Jannuary 2013
 * * * */

?>


<!--------------------------------START: CSS STYLING SECTION ------------------------------>
<style>

a,
a:link,
a:visited,
a:hover,
a:active{
	text-decoration: none;
	outline: none;
}

button:active,
button:focus
{
	border: none;
	outline: none;
}

.input_max_large{
	//width: 500px;
	width: 95%;
	text-transform: uppercase;

}

.lesen_huruf{
	margin-left: 3px;
    margin-right: 15px;
}

.tr_sub_title{
	margin-top: 30px; 
	background: #d9edf7;
	border: 1px solid #bce8f1;
	height: 27px;
	color: #3a87ad;
}

.td_margin_right{
	display: block;
	margin-right: 25px;
}

</style>
<!---------------------------------END: CSS STYLING SECTION ------------------------------->


<?php

$applicant = $_SESSION['sesAppID'];


/****************************************************************************************
																	START: DELETE QUERY
****************************************************************************************/

//DELETE COL1
if(isset($_GET['col1'])){

	$id = $_GET['col1'];

	$query_check_id1 = "SELECT * FROM rek_affiliation WHERE Id = $id";
	$result_check_id1 = mysql_query($query_check_id1);
	$total_check_id1 = mysql_num_rows($result_check_id1);

	if($total_check_id1 != 0){

			$query_del_row = "DELETE
							FROM
							rek_affiliation
							WHERE
							Id = '$id'
							";

	mysql_query($query_del_row) or die();

	}
}

//DELETE COL2
if(isset($_GET['col2'])){

	$id = $_GET['col2'];

	$query_check_id1 = "SELECT * FROM rek_jaw_akad_pengalaman WHERE Id = $id";
	$result_check_id1 = mysql_query($query_check_id1);
	$total_check_id1 = mysql_num_rows($result_check_id1);

	if($total_check_id1 != 0){

			$query_del_row = "DELETE
							FROM
							rek_jaw_akad_pengalaman
							WHERE
							Id = '$id'
							";

	mysql_query($query_del_row) or die();

	}
}


//DELETE COL3
if(isset($_GET['col3'])){

	$id = $_GET['col3'];

	$query_check_id1 = "SELECT * FROM rek_keanggotaan_diiktiraf WHERE Id = $id";
	$result_check_id1 = mysql_query($query_check_id1);
	$total_check_id1 = mysql_num_rows($result_check_id1);

	if($total_check_id1 != 0){

			$query_del_row = "DELETE
							FROM
							rek_keanggotaan_diiktiraf
							WHERE
							Id = '$id'
							";

	mysql_query($query_del_row) or die();

	}
}


//DELETE COL4
if(isset($_GET['col4'])){

	$id = $_GET['col4'];

	$query_check_id1 = "SELECT * FROM rek_tugas_pentadbiran WHERE Id = $id";
	$result_check_id1 = mysql_query($query_check_id1);
	$total_check_id1 = mysql_num_rows($result_check_id1);

	if($total_check_id1 != 0){

			$query_del_row = "DELETE
							FROM
							rek_tugas_pentadbiran
							WHERE
							Id = '$id'
							";

	mysql_query($query_del_row) or die();

	}
}

//DELETE COL5
if(isset($_GET['col5'])){

	$id = $_GET['col5'];

	$query_check_id1 = "SELECT * FROM rek_bidang_kepakaran WHERE Id = $id";
	$result_check_id1 = mysql_query($query_check_id1);
	$total_check_id1 = mysql_num_rows($result_check_id1);

	if($total_check_id1 != 0){

			$query_del_row = "DELETE
							FROM
							rek_bidang_kepakaran
							WHERE
							Id = '$id'
							";

	mysql_query($query_del_row) or die();

	}
}


//DELETE COL6-I
if(isset($_GET['col6_I'])){

	$id = $_GET['col6_I'];

	$query_check_id1 = "SELECT * FROM rek_penerbitan_1_module WHERE Id = $id";
	$result_check_id1 = mysql_query($query_check_id1);
	$total_check_id1 = mysql_num_rows($result_check_id1);

	if($total_check_id1 != 0){

			$query_del_row = "DELETE
							FROM
							rek_penerbitan_1_module
							WHERE
							Id = '$id'
							";

	mysql_query($query_del_row) or die();

	}
}


//DELETE COL6-II
if(isset($_GET['col6_II'])){

	$id = $_GET['col6_II'];

	$query_check_id1 = "SELECT * FROM rek_penerbitan_2_indexed_journal WHERE Id = $id";
	$result_check_id1 = mysql_query($query_check_id1);
	$total_check_id1 = mysql_num_rows($result_check_id1);

	if($total_check_id1 != 0){

			$query_del_row = "DELETE
							FROM
							rek_penerbitan_2_indexed_journal
							WHERE
							Id = '$id'
							";

	mysql_query($query_del_row) or die();

	}
}


//DELETE COL6-III
if(isset($_GET['col6_III'])){

	$id = $_GET['col6_III'];

	$query_check_id1 = "SELECT * FROM rek_penerbitan_3_reviewed_journal WHERE Id = $id";
	$result_check_id1 = mysql_query($query_check_id1);
	$total_check_id1 = mysql_num_rows($result_check_id1);

	if($total_check_id1 != 0){

			$query_del_row = "DELETE
							FROM
							rek_penerbitan_3_reviewed_journal
							WHERE
							Id = '$id'
							";

	mysql_query($query_del_row) or die();

	}
}


//DELETE COL6-IV
if(isset($_GET['col6_IV'])){

	$id = $_GET['col6_IV'];

	$query_check_id1 = "SELECT * FROM rek_penerbitan_4_proceeding WHERE Id = $id";
	$result_check_id1 = mysql_query($query_check_id1);
	$total_check_id1 = mysql_num_rows($result_check_id1);

	if($total_check_id1 != 0){

			$query_del_row = "DELETE
							FROM
							rek_penerbitan_4_proceeding
							WHERE
							Id = '$id'
							";

	mysql_query($query_del_row) or die();

	}
}


//DELETE COL6-V
if(isset($_GET['col6_V'])){

	$id = $_GET['col6_V'];

	$query_check_id1 = "SELECT * FROM rek_penerbitan_5_media_masa WHERE Id = $id";
	$result_check_id1 = mysql_query($query_check_id1);
	$total_check_id1 = mysql_num_rows($result_check_id1);

	if($total_check_id1 != 0){

			$query_del_row = "DELETE
							FROM
							rek_penerbitan_5_media_masa
							WHERE
							Id = '$id'
							";

	mysql_query($query_del_row) or die();

	}
}


//DELETE COL6-VI
if(isset($_GET['col6_VI'])){

	$id = $_GET['col6_VI'];

	$query_check_id1 = "SELECT * FROM rek_penerbitan_6_media_lain WHERE Id = $id";
	$result_check_id1 = mysql_query($query_check_id1);
	$total_check_id1 = mysql_num_rows($result_check_id1);

	if($total_check_id1 != 0){

			$query_del_row = "DELETE
							FROM
							rek_penerbitan_6_media_lain
							WHERE
							Id = '$id'
							";

	mysql_query($query_del_row) or die();

	}
}


//DELETE COL7
if(isset($_GET['col7'])){

	$id = $_GET['col7'];

	$query_check_id1 = "SELECT * FROM rek_penyelidikan WHERE Id = $id";
	$result_check_id1 = mysql_query($query_check_id1);
	$total_check_id1 = mysql_num_rows($result_check_id1);

	if($total_check_id1 != 0){

			$query_del_row = "DELETE
							FROM
							rek_penyelidikan
							WHERE
							Id = '$id'
							";

	mysql_query($query_del_row) or die();

	}
}


//DELETE COL8
if(isset($_GET['col8'])){

	$id = $_GET['col8'];

	$query_check_id1 = "SELECT * FROM rek_konsultan WHERE Id = $id";
	$result_check_id1 = mysql_query($query_check_id1);
	$total_check_id1 = mysql_num_rows($result_check_id1);

	if($total_check_id1 != 0){

			$query_del_row = "DELETE
							FROM
							rek_konsultan
							WHERE
							Id = '$id'
							";

	mysql_query($query_del_row) or die();

	}
}


//DELETE COL9
if(isset($_GET['col9'])){

	$id = $_GET['col19'];

	$query_check_id1 = "SELECT * FROM rek_pembentangan WHERE Id = $id";
	$result_check_id1 = mysql_query($query_check_id1);
	$total_check_id1 = mysql_num_rows($result_check_id1);

	if($total_check_id1 != 0){

			$query_del_row = "DELETE
							FROM
							rek_pembentangan
							WHERE
							Id = '$id'
							";

	mysql_query($query_del_row) or die();

	}
}


//DELETE COL10
if(isset($_GET['col10'])){

	$id = $_GET['col10'];

	$query_check_id1 = "SELECT * FROM rek_penyeliaan WHERE Id = $id";
	$result_check_id1 = mysql_query($query_check_id1);
	$total_check_id1 = mysql_num_rows($result_check_id1);

	if($total_check_id1 != 0){

			$query_del_row = "DELETE
							FROM
							rek_penyeliaan
							WHERE
							Id = '$id'
							";

	mysql_query($query_del_row) or die();

	}
}


//DELETE COL11
if(isset($_GET['col11'])){

	$id = $_GET['col11'];

	$query_check_id1 = "SELECT * FROM rek_expert_linkages WHERE Id = $id";
	$result_check_id1 = mysql_query($query_check_id1);
	$total_check_id1 = mysql_num_rows($result_check_id1);

	if($total_check_id1 != 0){

			$query_del_row = "DELETE
							FROM
							rek_expert_linkages
							WHERE
							Id = '$id'
							";

	mysql_query($query_del_row) or die();

	}
}


//DELETE COL12
if(isset($_GET['col12'])){

	$id = $_GET['col12'];

	$query_check_id1 = "SELECT * FROM rek_sumbangan_teknikal WHERE Id = $id";
	$result_check_id1 = mysql_query($query_check_id1);
	$total_check_id1 = mysql_num_rows($result_check_id1);

	if($total_check_id1 != 0){

			$query_del_row = "DELETE
							FROM
							rek_sumbangan_teknikal
							WHERE
							Id = '$id'
							";

	mysql_query($query_del_row) or die();

	}
}


//DELETE COL13
if(isset($_GET['col13'])){

	$id = $_GET['col13'];

	$query_check_id1 = "SELECT * FROM rek_mengajar WHERE Id = $id";
	$result_check_id1 = mysql_query($query_check_id1);
	$total_check_id1 = mysql_num_rows($result_check_id1);

	if($total_check_id1 != 0){

			$query_del_row = "DELETE
							FROM
							rek_mengajar
							WHERE
							Id = '$id'
							";

	mysql_query($query_del_row) or die();

	}
}



//DELETE COL14
if(isset($_GET['col14'])){

	$id = $_GET['col14'];

	$query_check_id1 = "SELECT * FROM rek_aktiviti_penilaian WHERE Id = $id";
	$result_check_id1 = mysql_query($query_check_id1);
	$total_check_id1 = mysql_num_rows($result_check_id1);

	if($total_check_id1 != 0){

			$query_del_row = "DELETE
							FROM
							rek_aktiviti_penilaian
							WHERE
							Id = '$id'
							";

	mysql_query($query_del_row) or die();

	}
}

//DELETE COL15
if(isset($_GET['col15'])){

	$id = $_GET['col15'];

	$query_check_id1 = "SELECT * FROM rek_rekabentuk_kokurikulum WHERE Id = $id";
	$result_check_id1 = mysql_query($query_check_id1);
	$total_check_id1 = mysql_num_rows($result_check_id1);

	if($total_check_id1 != 0){

			$query_del_row = "DELETE
							FROM
							rek_rekabentuk_kokurikulum
							WHERE
							Id = '$id'
							";

	mysql_query($query_del_row) or die();

	}
}


//DELETE COL16
if(isset($_GET['col16'])){

	$id = $_GET['col16'];

	$query_check_id1 = "SELECT * FROM rek_kehadiran_bengkel WHERE Id = $id";
	$result_check_id1 = mysql_query($query_check_id1);
	$total_check_id1 = mysql_num_rows($result_check_id1);

	if($total_check_id1 != 0){

			$query_del_row = "DELETE
							FROM
							rek_kehadiran_bengkel
							WHERE
							Id = '$id'
							";

	mysql_query($query_del_row) or die();

	}
}


//DELETE COL17
if(isset($_GET['col17'])){

	$id = $_GET['col17'];

	$query_check_id1 = "SELECT * FROM rek_sumbangan_masyarakat WHERE Id = $id";
	$result_check_id1 = mysql_query($query_check_id1);
	$total_check_id1 = mysql_num_rows($result_check_id1);

	if($total_check_id1 != 0){

			$query_del_row = "DELETE
							FROM
							rek_sumbangan_masyarakat
							WHERE
							Id = '$id'
							";

	mysql_query($query_del_row) or die();

	}
}


//DELETE COL18
if(isset($_GET['col18'])){

	$id = $_GET['col18'];

	$query_check_id1 = "SELECT * FROM rek_anugerah_pencapaian WHERE Id = $id";
	$result_check_id1 = mysql_query($query_check_id1);
	$total_check_id1 = mysql_num_rows($result_check_id1);

	if($total_check_id1 != 0){

			$query_del_row = "DELETE
							FROM
							rek_anugerah_pencapaian
							WHERE
							Id = '$id'
							";

	mysql_query($query_del_row) or die();

	}
}


/****************************************************************************************
																	END: DELETE QUERY
****************************************************************************************/









/* SUBMIT ACTION START */
if(isset($_POST['btnSubmit'])){


		/**********************************************************************************
		 					1) KEANGGOTAAN
		***********************************************************************************/

		$table_len_1 = $_POST['table_len_1'];
		
		for($i = 1; $i < $table_len_1; $i++){

		$id = $_POST['id'.$i];

		$affiliation_nama = mysql_real_escape_string(strtoupper($_POST['txt1_nama'.$i]));
		$affiliation_jawatan = mysql_real_escape_string(strtoupper($_POST['txt1_jawatan'.$i]));
		$affiliation_alamat = mysql_real_escape_string(strtoupper($_POST['txt1_alamat'.$i]));
		$affiliation_tel = mysql_real_escape_string(strtoupper($_POST['txt1_tel'.$i]));


			 $query_check_affiliation = "SELECT
										Nama,
										Jawatan,
										Alamat,
										NoTel
										 FROM
										 rek_affiliation
										 WHERE
										 Id = '$id'
										 ";

		 $result_check_affiliation = mysql_query($query_check_affiliation);
		 $total_rows_check_affiliation = mysql_num_rows($result_check_affiliation);
		 $row_check_affiliation = mysql_fetch_assoc($result_check_affiliation);


		 if($total_rows_check_affiliation > 0){


			$query_update_affiliation = "UPDATE
											rek_affiliation
											SET
											Nama = '".$affiliation_nama."',
											Jawatan = '".$affiliation_jawatan."',
											Alamat = '".$affiliation_alamat."',
											NoTel = '".$affiliation_tel."'
											WHERE
											Id = '".$id."'
											";

				$result_update_affiliation = mysql_query($query_update_affiliation) or die(mysql_error());

				// if($result_update_penyelidikan){

				// 	echo "<script>Maklumat penyelidikan berjaya dikemaskini.</script>";
				// }
			
		 }else{


			

			$query_affiliation_checker_insert = "SELECT 
																					 * 
																					 FROM 
																					 rek_affiliation 
																					 WHERE
																					 IdPemohon = '$applicant'
																					 AND
																					 Nama = '$affiliation_nama'
																					 AND
																					 Jawatan = '$affiliation_jawatan'
																					 AND
																					 Alamat = '$affiliation_alamat'
																					 AND
																					 NoTel = '$affiliation_tel'
																					 ";

			$result_affiliation_checker_insert = mysql_query($query_affiliation_checker_insert);		
			$total_checker_insert = mysql_num_rows($result_affiliation_checker_insert);							


			if($total_checker_insert == 0){

				if($affiliation_nama != '' || $affiliation_jawatan != '' || $affiliation_alamat != ''
				|| $affiliation_tel != ''){
			
			$query_insert_affiliation = "INSERT INTO
										rek_affiliation
										(
											IdPemohon,
											Nama,
											Jawatan,
											Alamat,
											NoTel
										)
										VALUES
										(
											'".$applicant."',
											'".$affiliation_nama."',
											'".$affiliation_jawatan."',
											'".$affiliation_alamat."',
											'".$affiliation_tel."'
											
										)
										";

				$result_insert_affiliation = mysql_query($query_insert_affiliation) or die(mysql_error());

						}// END checker_insert
			} //END if != ''
		 } //END else
		}// END loop


		 /**********************************************************************************
		 					2) JAWATAN AKADEMIK/PENGALAMAN
		***********************************************************************************/

		$table_len_2 = $_POST['table_len_2'];
		
		for($i_2 = 1; $i_2 < $table_len_2; $i_2++){

		$id_2 = $_POST['id_2'.$i_2];

		$jaw_akad_pengalaman_organisasi = mysql_real_escape_string($_POST['txt2_jaw_akad_organisasi'.$i_2]);
	  $jaw_akad_pengalaman_jawatan = mysql_real_escape_string($_POST['txt2_jaw_akad_jawatan'.$i_2]);
		$jaw_akad_pengalaman_tarikh_std = mysql_real_escape_string($_POST['txt2_jaw_akad_tarikh'.$i_2]);


		
		 //convert date to DB format 
		 $jaw_akad_pengalaman_tarikh_db = date("Y-m-d", strtotime($jaw_akad_pengalaman_tarikh_std));
		

		 if($jaw_akad_pengalaman_tarikh_db == '1970-01-01'){
			$jaw_akad_pengalaman_tarikh_db = '0000-00-00';
		 }
		 

		  $query_check_jaw_akad_pengalaman = "SELECT 
		 								*
										 FROM
										 rek_jaw_akad_pengalaman
										 WHERE
										 Id = '".$id_2."'
										 ";

		 $result_check_jaw_akad_pengalaman = mysql_query($query_check_jaw_akad_pengalaman);
		 $total_rows_check_jaw_akad_pengalaman = mysql_num_rows($result_check_jaw_akad_pengalaman);


		 if($total_rows_check_jaw_akad_pengalaman > 0){


			  $query_update_jaw_akad_pengalaman = "UPDATE rek_jaw_akad_pengalaman SET
																									Organisasi = '".$jaw_akad_pengalaman_organisasi."',
																									JawatanPeranan = '".$jaw_akad_pengalaman_jawatan."',
																									Tarikh = '".$jaw_akad_pengalaman_tarikh_db."'
																									WHERE
																									Id = '".$id_2."'
																									";

				$result_update_jaw_akad_pengalaman = mysql_query($query_update_jaw_akad_pengalaman);

			
		 }else{

					 $query_checker_insert_jaw_akad_pengalaman = "SELECT
																									*
																									FROM
																									rek_jaw_akad_pengalaman
																									WHERE
																									IdPemohon = '$applicant'
																									AND
																									Organisasi = '".$jaw_akad_pengalaman_organisasi."'
																									AND
																									JawatanPeranan = '".$jaw_akad_pengalaman_jawatan."'
																									AND
																									Tarikh = '".$jaw_akad_pengalaman_tarikh_db."'
																									";

			$result_checker_insert_jaw_akad_pengalaman = mysql_query($query_checker_insert_jaw_akad_pengalaman);
			$total_checker_insert_jaw_akad_pengalaman = mysql_num_rows($result_checker_insert_jaw_akad_pengalaman);

			if($total_checker_insert_jaw_akad_pengalaman == 0){

			if($jaw_akad_pengalaman_organisasi != '' || $jaw_akad_pengalaman_jawatan != ''){

				$query_insert_jaw_akad_pengalaman = "INSERT INTO
										rek_jaw_akad_pengalaman
										(
											IdPemohon,
											Organisasi,
											JawatanPeranan,
											Tarikh
										)
										VALUES
										(
											'".$applicant."',
											'".$jaw_akad_pengalaman_organisasi."',
											'".$jaw_akad_pengalaman_jawatan."',
											'".$jaw_akad_pengalaman_tarikh_db."'
										)
										";

				$result_insert_jaw_akad_pengalaman = mysql_query($query_insert_jaw_akad_pengalaman) or die(mysql_error());

	
			} //END if != ''
			}//END insert
		 } //END else

		}// END loop COLUMN 2




		 /**********************************************************************************
		 					3) KEAHLIAN YG DIIKTIRAF & PROFESIONAL/KEAHLIAN
		***********************************************************************************/

	  $table_len_3 = $_POST['table_len_3'];
		
		for($i_3 = 1; $i_3 < $table_len_3; $i_3++){

		$id_3 = $_POST['id_3'.$i_3];  

		$keanggotaan_diiktiraf_organisasi = mysql_real_escape_string($_POST['txt3_keanggotaan_organisasi'.$i_3]);
		$keanggotaan_diiktiraf_jawatan = mysql_real_escape_string($_POST['txt3_keanggotaan_jawatan'.$i_3]);
		$keanggotaan_diiktiraf_tarikh_std = mysql_real_escape_string($_POST['txt3_keanggotaan_tarikh'.$i_3]);
		

		
		 //convert date to DB format 
		 $keanggotaan_diiktiraf_tarikh_db = date("Y-m-d", strtotime($keanggotaan_diiktiraf_tarikh_std));
		

		 if($keanggotaan_diiktiraf_tarikh_db == '1970-01-01'){
			$keanggotaan_diiktiraf_tarikh_db = '0000-00-00';
		 }
		 

		 $query_check_keanggotaan_diiktiraf = "SELECT
										Organisasi,
										JawatanPeranan,
										Tarikh
										 FROM
										 rek_keanggotaan_diiktiraf
										 WHERE
										 Id = '$id_3'
										 ";

		 $result_check_keanggotaan_diiktiraf = mysql_query($query_check_keanggotaan_diiktiraf);
		 $total_rows_check_keanggotaan_diiktiraf = mysql_num_rows($result_check_keanggotaan_diiktiraf);
		 $row_check_keanggotaan_diiktiraf = mysql_fetch_assoc($result_check_keanggotaan_diiktiraf);


		 if($total_rows_check_keanggotaan_diiktiraf > 0){

			$query_update_keanggotaan_diiktiraf = "UPDATE
											rek_keanggotaan_diiktiraf
											SET
											Organisasi = '".$keanggotaan_diiktiraf_organisasi."',
											JawatanPeranan = '".$keanggotaan_diiktiraf_jawatan."',
											Tarikh = '".$keanggotaan_diiktiraf_tarikh_db."'
											WHERE
											Id = '".$id_3."'
											";

				$result_update_keanggotaan_diiktiraf = mysql_query($query_update_keanggotaan_diiktiraf) or die(mysql_error());


		 }else{


			if($keanggotaan_diiktiraf_organisasi != '' || $keanggotaan_diiktiraf_jawatan != ''){

			$query_checker_insert_keanggotaan_diiktiraf = "SELECT 
																											* 
																											FROM 
																											rek_keanggotaan_diiktiraf
																											WHERE
																											IdPemohon = '".$applicant."'
																											AND
																											Organisasi = '".$keanggotaan_diiktiraf_organisasi."'
																											AND
																											JawatanPeranan = '".$keanggotaan_diiktiraf_jawatan."'
																											AND
																											Tarikh = '".$keanggotaan_diiktiraf_tarikh_db."'
																											";

				$result_checker_insert_keanggotaan_diiktiraf = mysql_query($query_checker_insert_keanggotaan_diiktiraf);
				$total_keanggotaan_diiktiraf = mysql_num_rows($result_checker_insert_keanggotaan_diiktiraf);
				
				if($total_keanggotaan_diiktiraf == 0){

			$query_insert_keanggotaan_diiktiraf = "INSERT INTO
										rek_keanggotaan_diiktiraf
										(
											IdPemohon,
											Organisasi,
											JawatanPeranan,
											Tarikh
										)
										VALUES
										(
											'".$applicant."',
											'".$keanggotaan_diiktiraf_organisasi."',
											'".$keanggotaan_diiktiraf_jawatan."',
											'".$keanggotaan_diiktiraf_tarikh_db."'
										)
										";

				$result_insert_keanggotaan_diiktiraf = mysql_query($query_insert_keanggotaan_diiktiraf) or die(mysql_error());
					}//END checker_keanggotaan
			
			} //END if != ''
		//	}// END if(total_checker = 0)
		 } //END else
		} // END for loop






		 /**********************************************************************************
		 					4) TUGAS PENTADBIRAN
		***********************************************************************************/


		$table_len_4 = $_POST['table_len_4'];
		
		for($i_4 = 1; $i_4 < $table_len_4; $i_4++){

		$id_4 = $_POST['id_4'.$i_4];

		$tugas_pentadbiran_jawatan = mysql_real_escape_string($_POST['txt4_tugas_pent_jawatan'.$i_4]);
		$tugas_pentadbiran_tahap = mysql_real_escape_string($_POST['txt4_tugas_pent_tahap'.$i_4]);
		$tugas_pentadbiran_tarikh_mula_std = mysql_real_escape_string($_POST['txt4_tugas_pent_tarikh_mula'.$i_4]);
		$tugas_pentadbiran_tarikh_tamat_std = mysql_real_escape_string($_POST['txt4_tugas_pent_tarikh_tamat'.$i_4]);
		

		
		 //convert date to DB format 
		 $tugas_pentadbiran_tarikh_mula_db = date("Y-m-d", strtotime($tugas_pentadbiran_tarikh_mula_std));
		 $tugas_pentadbiran_tarikh_tamat_db = date("Y-m-d", strtotime($tugas_pentadbiran_tarikh_tamat_std));
		

		 if($tugas_pentadbiran_tarikh_mula_db == '1970-01-01'){
			$tugas_pentadbiran_tarikh_mula_db = '0000-00-00';
		 }
		 if($tugas_pentadbiran_tarikh_tamat_db == '1970-01-01'){
			$tugas_pentadbiran_tarikh_tamat_db = '0000-00-00';
		 }
		 

		 $query_check_tugas_pentadbiran = "SELECT
										JawatanTugas,
										TahapPeringkat,
										TarikhMula,
										TarikhTamat
										 FROM
										 rek_tugas_pentadbiran
										 WHERE
										 Id = '$id_4'
										 ";

		 $result_check_tugas_pentadbiran = mysql_query($query_check_tugas_pentadbiran);
		 $total_rows_check_tugas_pentadbiran = mysql_num_rows($result_check_tugas_pentadbiran);
		 $row_check_tugas_pentadbiran = mysql_fetch_assoc($result_check_tugas_pentadbiran);


		 if($total_rows_check_tugas_pentadbiran > 0){

			
			$query_update_tugas_pentadbiran = "UPDATE
											rek_tugas_pentadbiran
											SET
											JawatanTugas = '".$tugas_pentadbiran_jawatan."',
											TahapPeringkat = '".$tugas_pentadbiran_tahap."',
											TarikhMula = '".$tugas_pentadbiran_tarikh_mula_db."',
											TarikhTamat = '".$tugas_pentadbiran_tarikh_tamat_db."'
											WHERE
											Id = '".$id_4."'
											";

				$result_update_tugas_pentadbiran = mysql_query($query_update_tugas_pentadbiran) or die(mysql_error());
			
		 }else{



			if($tugas_pentadbiran_jawatan != '' || $tugas_pentadbiran_tahap != ''){
			
			$query_checker_insert_tugas_pentadbiran = "SELECT
																									*
																									FROM
																									rek_tugas_pentadbiran
																									WHERE
																									IdPemohon = '$applicant'
																									AND
																									JawatanTugas = '$tugas_pentadbiran_jawatan'
																									AND
																									TahapPeringkat = '$tugas_pentadbiran_tahap'
																									AND
																									TarikhMula = '$tugas_pentadbiran_tarikh_mula_db'
																									AND
																									TarikhTamat = '$tugas_pentadbiran_tarikh_tamat_db'
																									";

			$result_checker_insert_tugas_pentadbiran = mysql_query($query_checker_insert_tugas_pentadbiran);
			$total_checker_insert_tugas_pentadbiran = mysql_num_rows($result_checker_insert_tugas_pentadbiran);

			if($total_checker_insert_tugas_pentadbiran == 0){

			$query_insert_tugas_pentadbiran = "INSERT INTO
										rek_tugas_pentadbiran
										(
											IdPemohon,
											JawatanTugas,
											TahapPeringkat,
											TarikhMula,
											TarikhTamat
										)
										VALUES
										(
											'".$applicant."',
											'".$tugas_pentadbiran_jawatan."',
											'".$tugas_pentadbiran_tahap."',
											'".$tugas_pentadbiran_tarikh_mula_db."',
											'".$tugas_pentadbiran_tarikh_tamat_db."'
										)
										";

				$result_insert_tugas_pentadbiran = mysql_query($query_insert_tugas_pentadbiran) or die(mysql_error());

				}//END checker 

			} //END if != ''

		 } //END else
		}// END loop







		 /**********************************************************************************
		 					5) BIDANG KEPAKARAN
		***********************************************************************************/

		$table_len_5 = $_POST['table_len_5'];
		
		for($i_5 = 1; $i_5 < $table_len_5; $i_5++){

			$id_5 = $_POST['id_5'.$i_5];

		$bidang_kepakaran = mysql_real_escape_string($_POST['txt5_bidang_kepakaran'.$i_5]);

		

		 $query_check_bidang_kepakaran = "SELECT
										BidangKepakaran
										 FROM
										 rek_bidang_kepakaran
										 WHERE
										 Id = '$id_5'
										 ";

		 $result_check_bidang_kepakaran = mysql_query($query_check_bidang_kepakaran);
		 $total_rows_check_bidang_kepakaran = mysql_num_rows($result_check_bidang_kepakaran);
		 $row_check_bidang_kepakaran = mysql_fetch_assoc($result_check_bidang_kepakaran);


		 if($total_rows_check_bidang_kepakaran > 0){

			

			$query_update_bidang_kepakaran = "UPDATE
											rek_bidang_kepakaran
											SET
											BidangKepakaran = '".$bidang_kepakaran."'
											WHERE
											Id = '".$id_5."'
											";

				$result_update_bidang_kepakaran = mysql_query($query_update_bidang_kepakaran) or die(mysql_error());

			
			
		 }else{

			

			if($bidang_kepakaran != ''){

				$query_check_insert_bidang_kepakaran = "SELECT * FROM rek_bidang_kepakaran WHERE IdPemohon = '$applicant' AND BidangKepakaran = '$bidang_kepakaran'";
				$result_check_insert_bidang_kepakaran = mysql_query($query_check_insert_bidang_kepakaran);
				$total_check_insert_bidang_kepakaran = mysql_num_rows($result_check_insert_bidang_kepakaran);


				if($total_check_insert_bidang_kepakaran == 0){

			$query_insert_bidang_kepakaran = "INSERT INTO
										rek_bidang_kepakaran
										(
											IdPemohon,
											BidangKepakaran
										)
										VALUES
										(
											'".$applicant."',
											'".$bidang_kepakaran."'
										)
										";

				$result_insert_bidang_kepakaran = mysql_query($query_insert_bidang_kepakaran) or die(mysql_error());

						}//END checker

			} //END if != ''

		 } //END else

		}// END loop





		/**********************************************************************************
		 					6-I) PENERBITAN TERPILIH: MODULE
		***********************************************************************************/

		$table_len_6_I = $_POST['table_len_6_I'];
		
		for($i_6_I = 1; $i_6_I < $table_len_6_I; $i_6_I++){

		  $id_6_I = $_POST['id_6_I'.$i_6_I];

		 $penerbitan_1_module_nama_penulis = mysql_real_escape_string($_POST['txt6_pener_1_module_nama_penulis'.$i_6_I]);
		 $penerbitan_1_module_tajuk = mysql_real_escape_string($_POST['txt6_pener_1_module_tajuk'.$i_6_I]);
		 $penerbitan_1_module_institusi = mysql_real_escape_string($_POST['txt6_pener_1_module_institusi'.$i_6_I]);

		

		 $query_check_pener_1_module = "SELECT
										NamaPenulis,
										Tajuk,
										Institusi
										 FROM
										 rek_penerbitan_1_module
										 WHERE
										 Id = '$id_6_I'
										 ";

		 $result_check_pener_1_module = mysql_query($query_check_pener_1_module);
		 $total_rows_check_pener_1_module = mysql_num_rows($result_check_pener_1_module);
		 $row_check_pener_1_module = mysql_fetch_assoc($result_check_pener_1_module);


		 if($total_rows_check_pener_1_module > 0){

			

			$query_update_pener_1_module = "UPDATE
											rek_penerbitan_1_module
											SET
											NamaPenulis = '".$penerbitan_1_module_nama_penulis."',
											Tajuk = '".$penerbitan_1_module_tajuk."',
											Institusi = '".$penerbitan_1_module_institusi."'
											WHERE
											Id = '".$id_6_I."'
											";

				$result_update_pener_1_module = mysql_query($query_update_pener_1_module) or die(mysql_error());

			
			
		 }else{

			

			if($penerbitan_1_module_nama_penulis != '' || $penerbitan_1_module_tajuk != '' || $penerbitan_1_module_institusi != ''){

				$query_check_insert_pener_1_module = "SELECT 
																							* 
																							FROM 
																							rek_penerbitan_1_module 
																							WHERE 
																							IdPemohon = '$applicant' 
																							AND 
																							NamaPenulis = '$penerbitan_1_module_nama_penulis'
																							AND
																							Tajuk = '$penerbitan_1_module_tajuk'
																							AND
																							Institusi = '$penerbitan_1_module_institusi'
																							";

				$result_check_insert_pener_1_module = mysql_query($query_check_insert_pener_1_module);
				$total_check_insert_pener_1_module = mysql_num_rows($result_check_insert_pener_1_module);


				if($total_check_insert_pener_1_module == 0){

			$query_insert_pener_1_module = "INSERT INTO
										rek_penerbitan_1_module
										(
											IdPemohon,
											NamaPenulis,
											Tajuk,
											Institusi
										)
										VALUES
										(
											'".$applicant."',
											'".$penerbitan_1_module_nama_penulis."',
											'".$penerbitan_1_module_tajuk."',
											'".$penerbitan_1_module_institusi."'
										)
										";

				$result_insert_pener_1_module = mysql_query($query_insert_pener_1_module) or die(mysql_error());

						}//END checker

			} //END if != ''

		 } //END else

		}// END loop








		/**********************************************************************************
		 					6-II) PENERBITAN TERPILIH: INDEXED JOURNAL
		***********************************************************************************/

		$table_len_6_II = $_POST['table_len_6_II'];
		
		for($i_6_II = 1; $i_6_II < $table_len_6_II; $i_6_II++){

		  $id_6_II = $_POST['id_6_II'.$i_6_II];

		 $penerbitan_2_idx_journal_nama = mysql_real_escape_string($_POST['txt6_pener_2_idx_journal_nama'.$i_6_II]);
		 $penerbitan_2_idx_journal_tajuk = mysql_real_escape_string($_POST['txt6_pener_2_idx_journal_tajuk'.$i_6_II]);
		 $penerbitan_2_idx_journal_tahun = mysql_real_escape_string($_POST['txt6_pener_2_idx_journal_tahun'.$i_6_II]);
		 $penerbitan_2_idx_journal_penerbitan = mysql_real_escape_string($_POST['txt6_pener_2_idx_journal_penerbitan'.$i_6_II]);
		 $penerbitan_2_idx_journal_mukasurat = mysql_real_escape_string($_POST['txt6_pener_2_idx_journal_mukasurat'.$i_6_II]);

		

		 $query_check_pener_2_idx_journal = "SELECT
										Nama,
										Tajuk,
										Tahun,
										Penerbitan,
										MukasuratHalaman
										 FROM
										 rek_penerbitan_2_indexed_journal
										 WHERE
										 Id = '$id_6_II'
										 ";

		 $result_check_pener_2_idx_journal = mysql_query($query_check_pener_2_idx_journal);
		 $total_rows_check_pener_2_idx_journal = mysql_num_rows($result_check_pener_2_idx_journal);
		 $row_check_pener_2_idx_journal = mysql_fetch_assoc($result_check_pener_2_idx_journal);


		 if($total_rows_check_pener_2_idx_journal > 0){

			

			$query_update_pener_2_idx_journal = "UPDATE
											rek_penerbitan_2_indexed_journal
											SET
											Nama = '".$penerbitan_2_idx_journal_nama."',
											Tajuk = '".$penerbitan_2_idx_journal_tajuk."',
											Tahun = '".$penerbitan_2_idx_journal_tahun."',
											Penerbitan = '".$penerbitan_2_idx_journal_penerbitan."',
											MukasuratHalaman = '".$penerbitan_2_idx_journal_mukasurat."'
											WHERE
											Id = '".$id_6_II."'
											";

				$result_update_pener_2_idx_journal = mysql_query($query_update_pener_2_idx_journal) or die(mysql_error());

			
			
		 }else{

			

			if($penerbitan_2_idx_journal_nama != '' || $penerbitan_2_idx_journal_tajuk != '' || $penerbitan_2_idx_journal_penerbitan != '' || $penerbitan_2_idx_journal_mukasurat != ''){

				$query_check_insert_pener_2_idx_journal = "SELECT 
																							* 
																							FROM 
																							rek_penerbitan_2_indexed_journal 
																							WHERE 
																							IdPemohon = '$applicant' 
																							AND 
																							Nama = '$penerbitan_2_idx_journal_nama'
																							AND
																							Tajuk = '$penerbitan_2_idx_journal_tajuk'
																							AND
																							Tahun = '$penerbitan_2_idx_journal_tahun'
																							AND
																							Penerbitan = '$penerbitan_2_idx_journal_penerbitan'
																							AND
																							MukasuratHalaman = '$penerbitan_2_idx_journal_mukasurat'
																							";

				$result_check_insert_pener_2_idx_journal = mysql_query($query_check_insert_pener_2_idx_journal);
				$total_check_insert_pener_2_idx_journal = mysql_num_rows($result_check_insert_pener_2_idx_journal);


				if($total_check_insert_pener_2_idx_journal == 0){

			$query_insert_pener_2_idx_journal = "INSERT INTO
																						rek_penerbitan_2_indexed_journal
																						(
																							IdPemohon,
																							Nama,
																							Tajuk,
																							Tahun,
																							Penerbitan,
																							MukasuratHalaman
																						)
																						VALUES
																						(
																							'".$applicant."',
																							'".$penerbitan_2_idx_journal_nama."',
																							'".$penerbitan_2_idx_journal_tajuk."',
																							'".$penerbitan_2_idx_journal_tahun."',
																							'".$penerbitan_2_idx_journal_penerbitan."',
																							'".$penerbitan_2_idx_journal_mukasurat."'
																						)
																						";

				$result_insert_pener_2_idx_journal = mysql_query($query_insert_pener_2_idx_journal) or die(mysql_error());

						}//END checker

			} //END if != ''

		 } //END else

		}// END loop








		/**********************************************************************************
		 					6-III) PENERBITAN TERPILIH: REVIEWED JOURNAL
		***********************************************************************************/

		$table_len_6_III = $_POST['table_len_6_III'];
		
		for($i_6_III = 1; $i_6_III < $table_len_6_III; $i_6_III++){

		 $id_6_III = $_POST['id_6_III'.$i_6_III];

		 $penerbitan_3_rev_journal_nama = mysql_real_escape_string($_POST['txt6_pener_3_rev_journal_nama'.$i_6_III]);
		 $penerbitan_3_rev_journal_tajuk = mysql_real_escape_string($_POST['txt6_pener_3_rev_journal_tajuk'.$i_6_III]);
		 $penerbitan_3_rev_journal_tahun = mysql_real_escape_string($_POST['txt6_pener_3_rev_journal_tahun'.$i_6_III]);
		 $penerbitan_3_rev_journal_penerbitan = mysql_real_escape_string($_POST['txt6_pener_3_rev_journal_penerbitan'.$i_6_III]);
		 $penerbitan_3_rev_journal_mukasurat = mysql_real_escape_string($_POST['txt6_pener_3_rev_journal_mukasurat'.$i_6_III]);

		

		 $query_check_pener_3_rev_journal = "SELECT
										NamaPenulis,
										Tajuk,
										Tahun,
										Penerbitan,
										MukasuratHalaman
										 FROM
										 rek_penerbitan_3_reviewed_journal
										 WHERE
										 Id = '$id_6_III'
										 ";

		 $result_check_pener_3_rev_journal = mysql_query($query_check_pener_3_rev_journal);
		 $total_rows_check_pener_3_rev_journal = mysql_num_rows($result_check_pener_3_rev_journal);
		 $row_check_pener_3_rev_journal = mysql_fetch_assoc($result_check_pener_3_rev_journal);


		 if($total_rows_check_pener_3_rev_journal > 0){

			

			$query_update_pener_3_rev_journal = "UPDATE
											rek_penerbitan_3_reviewed_journal
											SET
											NamaPenulis = '".$penerbitan_3_rev_journal_nama."',
											Tajuk = '".$penerbitan_3_rev_journal_tajuk."',
											Tahun = '".$penerbitan_3_rev_journal_tahun."',
											Penerbitan = '".$penerbitan_3_rev_journal_penerbitan."',
											MukasuratHalaman = '".$penerbitan_3_rev_journal_mukasurat."'
											WHERE
											Id = '".$id_6_III."'
											";

				$result_update_pener_3_rev_journal = mysql_query($query_update_pener_3_rev_journal) or die(mysql_error());

			
			
		 }else{

			

			if($penerbitan_3_rev_journal_nama != '' || $penerbitan_3_rev_journal_tajuk != '' || $penerbitan_3_rev_journal_penerbitan != '' || $penerbitan_3_rev_journal_mukasurat != ''){

				$query_check_insert_pener_3_rev_journal = "SELECT 
																							* 
																							FROM 
																							rek_penerbitan_3_reviewed_journal 
																							WHERE 
																							IdPemohon = '$applicant' 
																							AND 
																							NamaPenulis = '$penerbitan_3_rev_journal_nama'
																							AND
																							Tajuk = '$penerbitan_3_rev_journal_tajuk'
																							AND
																							Tahun = '$penerbitan_3_rev_journal_tahun'
																							AND
																							Penerbitan = '$penerbitan_3_rev_journal_penerbitan'
																							AND
																							MukasuratHalaman = '$penerbitan_3_rev_journal_mukasurat'
																							";

				$result_check_insert_pener_3_rev_journal = mysql_query($query_check_insert_pener_3_rev_journal);
				$total_check_insert_pener_3_rev_journal = mysql_num_rows($result_check_insert_pener_3_rev_journal);


				if($total_check_insert_pener_3_rev_journal == 0){

			$query_insert_pener_3_rev_journal = "INSERT INTO
																						rek_penerbitan_3_reviewed_journal
																						(
																							IdPemohon,
																							NamaPenulis,
																							Tajuk,
																							Tahun,
																							Penerbitan,
																							MukasuratHalaman
																						)
																						VALUES
																						(
																							'".$applicant."',
																							'".$penerbitan_3_rev_journal_nama."',
																							'".$penerbitan_3_rev_journal_tajuk."',
																							'".$penerbitan_3_rev_journal_tahun."',
																							'".$penerbitan_3_rev_journal_penerbitan."',
																							'".$penerbitan_3_rev_journal_mukasurat."'
																						)
																						";

				$result_insert_pener_3_rev_journal = mysql_query($query_insert_pener_3_rev_journal) or die(mysql_error());

						}//END checker

			} //END if != ''

		 } //END else

		}// END loop











		/**********************************************************************************
		 					6-IV) PENERBITAN TERPILIH: PROCEEDING
		***********************************************************************************/

		$table_len_6_IV = $_POST['table_len_6_IV'];
		
		for($i_6_IV = 1; $i_6_IV < $table_len_6_IV; $i_6_IV++){

		 $id_6_IV = $_POST['id_6_IV'.$i_6_IV];

		 $penerbitan_4_proceeding_nama_penulis = mysql_real_escape_string($_POST['txt6_pener_4_proceeding_nama_penulis'.$i_6_IV]);
		 $penerbitan_4_proceeding_tajuk = mysql_real_escape_string($_POST['txt6_pener_4_proceeding_tajuk'.$i_6_IV]);
		 $penerbitan_4_proceeding_persidangan = mysql_real_escape_string($_POST['txt6_pener_4_proceeding_persidangan'.$i_6_IV]);
		 $penerbitan_4_proceeding_tahun = mysql_real_escape_string($_POST['txt6_pener_4_proceeding_tahun'.$i_6_IV]);

		

		 $query_check_pener_4_proceeding = "SELECT
																				NamaPenulis,
																				Tajuk,
																				Persidangan,
																				Tahun
																				FROM
																				rek_penerbitan_4_proceeding
																				WHERE
																				Id = '$id_6_IV'
																				";

		 $result_check_pener_4_proceeding = mysql_query($query_check_pener_4_proceeding);
		 $total_rows_check_pener_4_proceeding = mysql_num_rows($result_check_pener_4_proceeding);
		 $row_check_pener_4_proceeding = mysql_fetch_assoc($result_check_pener_4_proceeding);


		 if($total_rows_check_pener_4_proceeding > 0){

			

			$query_update_pener_4_proceeding = "UPDATE
											rek_penerbitan_4_proceeding
											SET
											NamaPenulis = '".$penerbitan_4_proceeding_nama_penulis."',
											Tajuk = '".$penerbitan_4_proceeding_tajuk."',
											Persidangan = '".$penerbitan_4_proceeding_persidangan."',
											Tahun = '".$penerbitan_4_proceeding_tahun."'
											WHERE
											Id = '".$id_6_IV."'
											";

				$result_update_pener_4_proceeding = mysql_query($query_update_pener_4_proceeding) or die(mysql_error());

			
			
		 }else{

			

			if($penerbitan_4_proceeding_nama_penulis != '' || $penerbitan_4_proceeding_tajuk != '' || $penerbitan_4_proceeding_persidangan != ''){

				$query_check_insert_pener_4_proceeding = "SELECT 
																							* 
																							FROM 
																							rek_penerbitan_4_proceeding
																							WHERE 
																							IdPemohon = '$applicant' 
																							AND 
																							NamaPenulis = '$penerbitan_4_proceeding_nama_penulis'
																							AND
																							Tajuk = '$penerbitan_4_proceeding_tajuk'
																							AND
																							Persidangan = '$penerbitan_4_proceeding_persidangan'
																							AND
																							Tahun = '$penerbitan_4_proceeding_tahun'
																							";

				$result_check_insert_pener_4_proceeding = mysql_query($query_check_insert_pener_4_proceeding);
				$total_check_insert_pener_4_proceeding = mysql_num_rows($result_check_insert_pener_4_proceeding);


				if($total_check_insert_pener_4_proceeding == 0){

			$query_insert_pener_4_proceeding = "INSERT INTO
																						rek_penerbitan_4_proceeding
																						(
																							IdPemohon,
																							NamaPenulis,
																							Tajuk,
																							Persidangan,
																							Tahun
																						)
																						VALUES
																						(
																							'".$applicant."',
																							'".$penerbitan_4_proceeding_nama_penulis."',
																							'".$penerbitan_4_proceeding_tajuk."',
																							'".$penerbitan_4_proceeding_persidangan."',
																							'".$penerbitan_4_proceeding_tahun."'
																						)
																						";

				$result_insert_pener_4_proceeding = mysql_query($query_insert_pener_4_proceeding) or die(mysql_error());

						}//END checker

			} //END if != ''

		 } //END else

		}// END loop










		/**********************************************************************************
		 					6-V) PENERBITAN TERPILIH: MEDIA MASA
		***********************************************************************************/

		$table_len_6_V = $_POST['table_len_6_V'];
		
		for($i_6_V = 1; $i_6_V < $table_len_6_V; $i_6_V++){

		 $id_6_V = $_POST['id_6_V'.$i_6_V];

		 $penerbitan_5_media_masa_newspaper = mysql_real_escape_string($_POST['txt6_pener_5_media_masa_newspaper'.$i_6_V]);
		 $penerbitan_5_media_masa_radio = mysql_real_escape_string($_POST['txt6_pener_5_media_masa_radio'.$i_6_V]);
		 $penerbitan_5_media_masa_tv = mysql_real_escape_string($_POST['txt6_pener_5_media_masa_tv'.$i_6_V]);
		 $penerbitan_5_media_masa_popular = mysql_real_escape_string($_POST['txt6_pener_5_media_masa_popular'.$i_6_V]);
		 $penerbitan_5_media_masa_magazine = mysql_real_escape_string($_POST['txt6_pener_5_media_masa_magazine'.$i_6_V]);
		 $penerbitan_5_media_masa_nama = mysql_real_escape_string($_POST['txt6_pener_5_media_masa_nama'.$i_6_V]);
		 $penerbitan_5_media_masa_tajuk = mysql_real_escape_string($_POST['txt6_pener_5_media_masa_tajuk'.$i_6_V]);
		 $penerbitan_5_media_masa_tempat = mysql_real_escape_string($_POST['txt6_pener_5_media_masa_tempat'.$i_6_V]);
		 $penerbitan_5_media_masa_tarikh_std = mysql_real_escape_string($_POST['txt6_pener_5_media_masa_tarikh'.$i_6_V]);

		 //convert date to DB format 
		 $penerbitan_5_media_masa_tarikh_db = date("Y-m-d", strtotime($penerbitan_5_media_masa_tarikh_std));
		

		 if($penerbitan_5_media_masa_tarikh_db == '1970-01-01'){
			$penerbitan_5_media_masa_tarikh_db = '0000-00-00';
		 }
		 

		

		 $query_check_pener_5_media_masa = "SELECT
																				Newspaper,
																				Radio,
																				Tv,
																				Popular,
																				Magazine,
																				Nama,
																				Tajuk,
																				Tempat,
																				Tarikh
																				FROM
																				rek_penerbitan_5_media_masa
																				WHERE
																				Id = '$id_6_V'
																				";

		 $result_check_pener_5_media_masa = mysql_query($query_check_pener_5_media_masa);
		 $total_rows_check_pener_5_media_masa = mysql_num_rows($result_check_pener_5_media_masa);
		 $row_check_pener_5_media_masa = mysql_fetch_assoc($result_check_pener_5_media_masa);


		 if($total_rows_check_pener_5_media_masa > 0){

			

			$query_update_pener_5_media_masa = "UPDATE
																					rek_penerbitan_5_media_masa
																					SET
																					Newspaper = '".$penerbitan_5_media_masa_newspaper."',
																					Radio = '".$penerbitan_5_media_masa_radio."',
																					Tv = '".$penerbitan_5_media_masa_tv."',
																					Popular = '".$penerbitan_5_media_masa_popular."',
																					Magazine = '".$penerbitan_5_media_masa_magazine."',
																					Nama = '".$penerbitan_5_media_masa_nama."',
																					Tajuk = '".$penerbitan_5_media_masa_tajuk."',
																					Tempat = '".$penerbitan_5_media_masa_tempat."',
																					Tarikh = '".$penerbitan_5_media_masa_tarikh_db."'
																					WHERE
																					Id = '".$id_6_V."'
																					";

				$result_update_pener_5_media_masa = mysql_query($query_update_pener_5_media_masa) or die(mysql_error());

			
			
		 }else{

			

			if($penerbitan_5_media_masa_newspaper != '' || $penerbitan_5_media_masa_radio != '' || $penerbitan_5_media_masa_tv != ''
					|| $penerbitan_5_media_masa_popular || $penerbitan_5_media_masa_magazine || $penerbitan_5_media_masa_nama
					|| $penerbitan_5_media_masa_tempat){

				$query_check_insert_pener_5_media_masa = "SELECT 
																							* 
																							FROM 
																							rek_penerbitan_5_media_masa
																							WHERE 
																							IdPemohon = '$applicant' 
																							AND 
																							Newspaper = '$penerbitan_5_media_masa_newspaper'
																							AND
																							Radio = '$penerbitan_5_media_masa_radio'
																							AND
																							Tv = '$penerbitan_5_media_masa_tv'
																							AND
																							Popular = '$penerbitan_5_media_masa_popular'
																							AND
																							Magazine = '$penerbitan_5_media_masa_magazine'
																							AND
																							Nama = '$penerbitan_5_media_masa_nama'
																							AND
																							Tajuk = '$penerbitan_5_media_masa_tajuk'
																							AND
																							Tempat = '$penerbitan_5_media_masa_tempat'
																							AND
																							Tarikh = '$penerbitan_5_media_masa_tarikh_db'
																							";

				$result_check_insert_pener_5_media_masa = mysql_query($query_check_insert_pener_5_media_masa);
				$total_check_insert_pener_5_media_masa = mysql_num_rows($result_check_insert_pener_5_media_masa);


				if($total_check_insert_pener_5_media_masa == 0){

			$query_insert_pener_5_media_masa = "INSERT INTO
																						rek_penerbitan_5_media_masa
																						(
																							IdPemohon,
																							Newspaper,
																							Radio,
																							Tv,
																							Popular,
																							Magazine,
																							Nama,
																							Tajuk,
																							Tempat,
																							Tarikh
																						)
																						VALUES
																						(
																							'".$applicant."',
																							'".$penerbitan_5_media_masa_newspaper."',
																							'".$penerbitan_5_media_masa_radio."',
																							'".$penerbitan_5_media_masa_tv."',
																							'".$penerbitan_5_media_masa_popular."',
																							'".$penerbitan_5_media_masa_magazine."',
																							'".$penerbitan_5_media_masa_nama."',
																							'".$penerbitan_5_media_masa_tajuk."',
																							'".$penerbitan_5_media_masa_tempat."',
																							'".$penerbitan_5_media_masa_tarikh_db."'
																						
																						)
																						";

				$result_insert_pener_5_media_masa = mysql_query($query_insert_pener_5_media_masa) or die(mysql_error());

						}//END checker

			} //END if != ''

		 } //END else

		}// END loop









		/**********************************************************************************
		 					6-VI) PENERBITAN TERPILIH: MEDIA LAIN
		***********************************************************************************/

		$table_len_6_VI = $_POST['table_len_6_VI'];
		
		for($i_6_VI = 1; $i_6_VI < $table_len_6_VI; $i_6_VI++){

		 $id_6_VI = $_POST['id_6_VI'.$i_6_VI];


		 $penerbitan_6_media_lain_tape = mysql_real_escape_string($_POST['txt6_pener_6_media_lain_tape'.$i_6_VI]);
		 $penerbitan_6_media_lain_video = mysql_real_escape_string($_POST['txt6_pener_6_media_lain_video'.$i_6_VI]);
		 $penerbitan_6_media_lain_internet = mysql_real_escape_string($_POST['txt6_pener_6_media_lain_internet'.$i_6_VI]);
		 $penerbitan_6_media_lain_nama = mysql_real_escape_string($_POST['txt6_pener_6_media_lain_nama'.$i_6_VI]);
		 $penerbitan_6_media_lain_tajuk = mysql_real_escape_string($_POST['txt6_pener_6_media_lain_tajuk'.$i_6_VI]);
		 $penerbitan_6_media_lain_tempat = mysql_real_escape_string($_POST['txt6_pener_6_media_lain_tempat'.$i_6_VI]);
		 $penerbitan_6_media_lain_tarikh_std = mysql_real_escape_string($_POST['txt6_pener_6_media_lain_tarikh'.$i_6_VI]);

		 //convert date to DB format 
		 $penerbitan_6_media_lain_tarikh_db = date("Y-m-d", strtotime($penerbitan_6_media_lain_tarikh_std));
		

		 if($penerbitan_6_media_lain_tarikh_db == '1970-01-01'){
			$penerbitan_6_media_lain_tarikh_db = '0000-00-00';
		 }
		 

		

		 $query_check_pener_6_media_lain = "SELECT
																				Tape,
																				Video,
																				Internet,
																				Nama,
																				Tajuk,
																				Tempat,
																				Tarikh
																				FROM
																				rek_penerbitan_6_media_lain
																				WHERE
																				Id = '$id_6_VI'
																				";

		 $result_check_pener_6_media_lain = mysql_query($query_check_pener_6_media_lain);
		 $total_rows_check_pener_6_media_lain = mysql_num_rows($result_check_pener_6_media_lain);
		 $row_check_pener_6_media_lain = mysql_fetch_assoc($result_check_pener_6_media_lain);


		 if($total_rows_check_pener_6_media_lain > 0){

			

			$query_update_pener_6_media_lain = "UPDATE
																					rek_penerbitan_6_media_lain
																					SET
																					Tape = '".$penerbitan_6_media_lain_tape."',
																					Video = '".$penerbitan_6_media_lain_video."',
																					Internet = '".$penerbitan_6_media_lain_internet."',
																					Nama = '".$penerbitan_6_media_lain_nama."',
																					Tajuk = '".$penerbitan_6_media_lain_tajuk."',
																					Tempat = '".$penerbitan_6_media_lain_tempat."',
																					Tarikh = '".$penerbitan_6_media_lain_tarikh_db."'
																					WHERE
																					Id = '".$id_6_VI."'
																					";

				$result_update_pener_6_media_lain = mysql_query($query_update_pener_6_media_lain) or die(mysql_error());

			
			
		 }else{


			if($penerbitan_6_media_lain_tape != '' || $penerbitan_6_media_lain_video != '' || $penerbitan_6_media_lain_internet != ''
					|| $penerbitan_6_media_lain_nama != '' || $penerbitan_6_media_lain_tajuk != '' || $penerbitan_6_media_lain_tempat != ''){

				$query_check_insert_pener_6_media_lain = "SELECT 
																							* 
																							FROM 
																							rek_penerbitan_6_media_lain
																							WHERE 
																							IdPemohon = '$applicant' 
																							AND 
																							Tape = '$penerbitan_6_media_lain_tape'
																							AND
																							Video = '$penerbitan_6_media_lain_video'
																							AND
																							Internet = '$penerbitan_6_media_lain_internet'
																							AND
																							Nama = '$penerbitan_6_media_lain_nama'
																							AND
																							Tajuk = '$penerbitan_6_media_lain_tajuk'
																							AND
																							Tempat = '$penerbitan_6_media_lain_tempat'
																							AND
																							Tarikh = '$penerbitan_6_media_lain_tarikh_db'
																							";

				$result_check_insert_pener_6_media_lain = mysql_query($query_check_insert_pener_6_media_lain);
				$total_check_insert_pener_6_media_lain = mysql_num_rows($result_check_insert_pener_6_media_lain);


				if($total_check_insert_pener_6_media_lain == 0){

			$query_insert_pener_6_media_lain = "INSERT INTO
																						rek_penerbitan_6_media_lain
																						(
																							IdPemohon,
																							Tape,
																							Video,
																							Internet,
																							Nama,
																							Tajuk,
																							Tempat,
																							Tarikh
																						)
																						VALUES
																						(
																							'".$applicant."',
																							'".$penerbitan_6_media_lain_tape."',
																							'".$penerbitan_6_media_lain_video."',
																							'".$penerbitan_6_media_lain_internet."',
																							'".$penerbitan_6_media_lain_nama."',
																							'".$penerbitan_6_media_lain_tajuk."',
																							'".$penerbitan_6_media_lain_tempat."',
																							'".$penerbitan_6_media_lain_tarikh_db."'
																						
																						)
																						";

				$result_insert_pener_6_media_lain = mysql_query($query_insert_pener_6_media_lain) or die(mysql_error());

						}//END checker

			} //END if != ''

		 } //END else

		}// END loop






		/**********************************************************************************
		 					7) PENYELIDIKAN
		***********************************************************************************/

		$table_len_7 = $_POST['table_len_7'];
		
		for($i_7 = 1; $i_7 < $table_len_7; $i_7++){

			$id_7 = $_POST['id_7'.$i_7];

		$penyelidikan_nama = mysql_real_escape_string($_POST['txt7_penyelidikan_nama'.$i_7]);
		$penyelidikan_tajuk = mysql_real_escape_string($_POST['txt7_penyelidikan_tajuk'.$i_7]);
		$penyelidikan_jawatan = mysql_real_escape_string($_POST['txt7_penyelidikan_jawatan'.$i_7]);
		$penyelidikan_sumber = mysql_real_escape_string($_POST['txt7_penyelidikan_sumber'.$i_7]);
		$penyelidikan_dana = mysql_real_escape_string($_POST['txt7_penyelidikan_dana'.$i_7]);
		$penyelidikan_tarikh_mula_std = mysql_real_escape_string($_POST['txt7_penyelidikan_tarikh_mula'.$i_7]);
		$penyelidikan_tarikh_tamat_std = mysql_real_escape_string($_POST['txt7_penyelidikan_tarikh_tamat'.$i_7]);

		
		 //convert date to DB format 
		 $penyelidikan_tarikh_mula_db = date("Y-m-d", strtotime($penyelidikan_tarikh_mula_std));
		 $penyelidikan_tarikh_tamat_db = date("Y-m-d", strtotime($penyelidikan_tarikh_tamat_std));

		 if($penyelidikan_tarikh_mula_db == '1970-01-01'){
			$penyelidikan_tarikh_mula_db = '0000-00-00';
		 }
		 if($penyelidikan_tarikh_tamat_db == '1970-01-01'){
			$penyelidikan_tarikh_tamat_db = '0000-00-00';
		 }


		 $query_check_penyelidikan = "SELECT
										 Nama,
										 TajukProjek,
										 JawatanTugas,
										 Sumber,
										 Dana,
										 Dari,
										 Hingga
										 FROM
										 rek_penyelidikan
										 WHERE
										 Id = '$id_7'
										 ";

		$result_check_penyelidikan = mysql_query($query_check_penyelidikan);
		 $total_rows_penyelidikan = mysql_num_rows($result_check_penyelidikan);
		 $row_check_penyelidikan = mysql_fetch_assoc($result_check_penyelidikan);


		 if($total_rows_penyelidikan > 0){

			

			$query_update_penyelidikan = "UPDATE
											rek_penyelidikan
											SET
											Nama = '".$penyelidikan_nama."',
											TajukProjek = '".$penyelidikan_tajuk."',
											JawatanTugas = '".$penyelidikan_jawatan."',
											Sumber = '".$penyelidikan_sumber."',
											Dana = '".$penyelidikan_dana."',
											Dari = '".$penyelidikan_tarikh_mula_db."',
											Hingga = '".$penyelidikan_tarikh_tamat_db."'
											WHERE
											Id = '$id_7'
											";

				$result_update_penyelidikan = mysql_query($query_update_penyelidikan) or die(mysql_error());
			
		 }else{


			if($penyelidikan_nama != '' || $penyelidikan_tajuk != '' || $penyelidikan_jawatan != '' || $penyelidikan_sumber != ''
			 || $penyelidikan_dana != ''){

				$query_checker_insert_penyelidikan = "SELECT
																							*
																							FROM
																							rek_penyelidikan
																							WHERE
																							IdPemohon = '$applicant'
																							AND
																							Nama = '$penyelidikan_nama'
																							AND
																							TajukProjek = '$penyelidikan_tajuk'
																							AND
																							JawatanTugas = '$penyelidikan_jawatan'
																							AND
																							Dari = '$penyelidikan_tarikh_mula_db'
																							AND
																							Hingga = '$penyelidikan_tarikh_tamat_db'
																						";

				$result_checker_insert_penyelidikan	= mysql_query($query_checker_insert_penyelidikan);	 
				$total_checker_insert_penyelidikan = mysql_num_rows($result_checker_insert_penyelidikan);


				if($total_checker_insert_penyelidikan == 0){

			$query_insert_penyelidikan = "INSERT INTO
										rek_penyelidikan
										(
											IdPemohon,
											Nama,
											TajukProjek,
											JawatanTugas,
											Sumber,
											Dana,
											Dari,
											Hingga
										)
										VALUES
										(
											'".$applicant."',
											'".$penyelidikan_nama."',
											'".$penyelidikan_tajuk."',
											'".$penyelidikan_jawatan."',
											'".$penyelidikan_sumber."',
											'".$penyelidikan_dana."',
											'".$penyelidikan_tarikh_mula_db."',
											'".$penyelidikan_tarikh_tamat_db."'
										)
										";

									$result_insert_penyelidikan = mysql_query($query_insert_penyelidikan) or die(mysql_error());

						}//if checker == 0
			} //END if != ''
		//	}// END if(total_checker = 0)
		 } //END else

		}// END loop
	

		/**********************************************************************************
		 					 8) KONSULTANSI/PROJEK KONSULTANSI
		***********************************************************************************/

		$table_len_8 = $_POST['table_len_8'];
		
		for($i_8 = 1; $i_8 < $table_len_8; $i_8++){

		 $id_8 = $_POST['id_8'.$i_8];

		 $konsultan_tajuk = mysql_real_escape_string($_POST['txt8_consultancy_tajuk'.$i_8]);
		 $konsultan_jawatan = mysql_real_escape_string($_POST['txt8_consultancy_jawatan'.$i_8]);
		 $konsultan_tarikh_dari_std = mysql_real_escape_string($_POST['txt8_consultancy_tarikh_mula'.$i_8]);
		 $konsultan_tarikh_tamat_std = mysql_real_escape_string($_POST['txt8_consultancy_tarikh_tamat'.$i_8]);
		 $konsultan_organisasi = mysql_real_escape_string($_POST['txt8_consultancy_organisasi'.$i_8]);

		 //convert date to DB format 
		 $konsultan_tarikh_dari_db = date("Y-m-d", strtotime($konsultan_tarikh_dari_std));
		 $konsultan_tarikh_tamat_db = date("Y-m-d", strtotime($konsultan_tarikh_tamat_std));

		 if($konsultan_tarikh_dari_db == '1970-01-01'){
			$konsultan_tarikh_dari_db = '0000-00-00';
		 }
		 if($konsultan_tarikh_tamat_db == '1970-01-01'){
			$konsultan_tarikh_tamat_db = '0000-00-00';
		 }



	$query_check_konsultan = "SELECT
								TajukProjek,
								JawatanPeranan,
								Dari,
								Hingga,
								Organisasi
								FROM
								rek_konsultan
								WHERE
								Id = '$id_8'
								";

	$result_check_konsultan = mysql_query($query_check_konsultan);
	$total_rows_konsultan = mysql_num_rows($result_check_konsultan);
	$row_check_konsultan = mysql_fetch_assoc($result_check_konsultan);

		
	
	if($total_rows_konsultan > 0){


			$query_update_konsultan = "UPDATE 
										rek_konsultan 
										SET 
										TajukProjek = '".$konsultan_tajuk."', 
										JawatanPeranan = '".$konsultan_jawatan."', 
										Dari = '".$konsultan_tarikh_dari_db."', 
										Hingga = '".$konsultan_tarikh_tamat_db."',
										Organisasi = '".$konsultan_organisasi."' 
										WHERE 
										Id = '".$id_8."'
										";
			

			$result_update_konsultan = mysql_query($query_update_konsultan) or die(mysql_error());

				
	}else{

		if($konsultan_tajuk != '' || $konsultan_jawatan = '' || $konsultan_organisasi = ''){

			$query_check_insert_konsultan = "SELECT
																				*
																				FROM
																				rek_konsultan
																				WHERE
																				IdPemohon = '$applicant'
																				AND
																				TajukProjek = '$konsultan_tajuk'
																				AND
																				JawatanPeranan = '$konsultan_jawatan'
																				AND
																				Dari = '$konsultan_tarikh_dari_db'
																				AND
																				Hingga = '$konsultan_tarikh_tamat_db'
																				AND
																				Organisasi = '$konsultan_organisasi'
																			";

			$result_check_insert_konsultan = mysql_query($query_check_insert_konsultan);
			$total_insert_konsultan = mysql_num_rows($result_check_insert_konsultan);

			if($total_insert_konsultan == 0){

		$query_insert_konsultan = "INSERT INTO 
											rek_konsultan 
											(
												IdPemohon, 
												TajukProjek, 
												JawatanPeranan, 
												Dari, 
												Hingga, 
												Organisasi
												)
											VALUES 
											(
												'".$applicant."', 
												'".$konsultan_tajuk."', 
												'".$konsultan_jawatan."',
												'".$konsultan_tarikh_dari_db."', 
												'".$konsultan_tarikh_tamat_db."', 
												'".$konsultan_organisasi."'
												)";
											

		$result_insert_konsultan = mysql_query($query_insert_konsultan) or die(mysql_error()); 
					} //if total == 0
		}//if input not empty
	}// END else
}//END loop




		/**********************************************************************************
		 					9) PEMBENTANGAN
		***********************************************************************************/


		$table_len_9 = $_POST['table_len_9'];
		
		for($i_9 = 1; $i_9 < $table_len_9; $i_9++){

			$id_9 = $_POST['id_9'.$i_9];
	
		 $pembentangan_tajuk = mysql_real_escape_string($_POST['txt9_pembentangan_tajuk'.$i_9]);
		 $pembentangan_nama_acara = mysql_real_escape_string($_POST['txt9_pembentangan_nama_acara'.$i_9]);
		 $pembentangan_tarikh_std = mysql_real_escape_string($_POST['txt9_pembentangan_tarikh'.$i_9]);
		 $pembentangan_penganjur = mysql_real_escape_string($_POST['txt9_pembentangan_penganjur'.$i_9]);
		 $pembentangan_peringkat = mysql_real_escape_string($_POST['txt9_pembentangan_peringkat'.$i_9]);

		 //convert date to DB format 
		 $pembentangan_tarikh_db = date("Y-m-d", strtotime($pembentangan_tarikh_std));

		 if($pembentangan_tarikh_db == '1970-01-01'){
			$pembentangan_tarikh_db = '0000-00-00';
		 }
		



	$query_check_pembentangan = "SELECT
								Tajuk,
								NamaAcara,
								TarikhPembentangan,
								Penganjur,
								Peringkat
								FROM
								rek_pembentangan
								WHERE
								Id = '$id_9'
								";

	$result_check_pembentangan = mysql_query($query_check_pembentangan);
	$total_rows_pembentangan = mysql_num_rows($result_check_pembentangan);
	$row_check_pembentangan = mysql_fetch_assoc($result_check_pembentangan);




		if($total_rows_pembentangan > 0){


			$query_update_pembentangan = "UPDATE 
										rek_pembentangan 
										SET 
										Tajuk = '".$pembentangan_tajuk."', 
										NamaAcara = '".$pembentangan_nama_acara."', 
										TarikhPembentangan = '".$pembentangan_tarikh_db."', 
										Penganjur = '".$pembentangan_penganjur."',
										Peringkat = '".$pembentangan_peringkat."' 
										WHERE 
										Id = '".$id_9."'
										";
			

			$result_update_pembentangan = mysql_query($query_update_pembentangan) or die(mysql_error());
				
	}else{

		if($pembentangan_tajuk != '' || $pembentangan_nama_acara != '' || $pembentangan_penganjur != '' || $pembentangan_peringkat != ''){

			$query_check_insert_pembentangan = "SELECT
																					*
																					FROM
																					rek_pembentangan
																					WHERE
																					IdPemohon = '$applicant'
																					AND
																					Tajuk = '$pembentangan_tajuk'
																					AND
																					NamaAcara = '$pembentangan_nama_acara'
																					AND
																					TarikhPembentangan = '$pembentangan_tarikh_db'
																					AND
																					Penganjur = '$pembentangan_penganjur'
																					AND
																					Peringkat = '$pembentangan_peringkat'
																					";

			$result_check_insert_pembentangan = mysql_query($query_check_insert_pembentangan);
			$total_check_insert_pembentangan = mysql_num_rows($result_check_insert_pembentangan);

			if($total_check_insert_pembentangan == 0){

		$query_insert_pembentangan = "INSERT INTO 
											rek_pembentangan
											(
												IdPemohon,
												Tajuk, 
												NamaAcara, 
												TarikhPembentangan, 
												Penganjur,
												Peringkat
												)
											VALUES 
											(
												'".$applicant."', 
												'".$pembentangan_tajuk."', 
												'".$pembentangan_nama_acara."',
												'".$pembentangan_tarikh_db."', 
												'".$pembentangan_penganjur."', 
												'".$pembentangan_peringkat."'
												)";
											

		$result_insert_pembentangan = mysql_query($query_insert_pembentangan) or die(mysql_error()); 

							}//if checker == 0
					}//if input not empty
				}// END else
		}//END loop


		/**********************************************************************************
		 					10) PENYELIAAN
		***********************************************************************************/

		$table_len_10 = $_POST['table_len_10'];
		
		for($i_10 = 1; $i_10 < $table_len_10; $i_10++){

			$id_10 = $_POST['id_10'.$i_10];

		$penyeliaan_peringkat = mysql_real_escape_string($_POST['txt10_penyeliaan_peringkat'.$i_10]);
		$penyeliaan_calon = mysql_real_escape_string($_POST['txt10_penyeliaan_calon'.$i_10]);
		$penyeliaan_tajuk = mysql_real_escape_string($_POST['txt10_penyeliaan_tajuk'.$i_10]);
		$penyeliaan_semester = mysql_real_escape_string($_POST['txt10_penyeliaan_semester'.$i_10]);
		$penyeliaan_status = mysql_real_escape_string($_POST['txt10_penyeliaan_status'.$i_10]);

		

   $query_check_penyeliaan = "SELECT
							   Peringkat,
							   Calon,
							   Tajuk,
							   Semester,
							   Status
							   FROM
							   rek_penyeliaan
							   WHERE
							   Id = '$id_10'
							   ";

   $result_check_penyeliaan = mysql_query($query_check_penyeliaan);
   $total_rows_penyeliaan = mysql_num_rows($result_check_penyeliaan);
   $row_check_penyeliaan = mysql_fetch_assoc($result_check_penyeliaan);




	   if($total_rows_penyeliaan > 0){


		   $query_update_penyeliaan = "UPDATE 
									   rek_penyeliaan 
									   SET 
									   Peringkat = '".$penyeliaan_peringkat."', 
									   Calon = '".$penyeliaan_calon."', 
									   Tajuk = '".$penyeliaan_tajuk."', 
									   Semester = '".$penyeliaan_semester."',
									   Status = '".$penyeliaan_status."' 
									   WHERE 
									   Id = '".$id_10."'
									   ";
		   

		   $result_update_penyeliaan = mysql_query($query_update_penyeliaan) or die(mysql_error());
			   
   }else{

	   if($penyeliaan_calon != '' || $penyeliaan_tajuk != '' || $penyeliaan_semester != '' || $penyeliaan_status != ''){

			$query_check_insert_penyeliaan = "SELECT
																				*
																				FROM
																				rek_penyeliaan
																				WHERE
																				IdPemohon = '$applicant'
																				AND
																				Peringkat = '$penyeliaan_peringkat'
																				AND
																				Calon = '$penyeliaan_calon'
																				AND
																				Tajuk = '$penyeliaan_tajuk'
																				AND
																				Semester = '$penyeliaan_semester'
																				AND
																				Status = '$penyeliaan_status'
																				";

			$result_check_insert_penyeliaan = mysql_query($query_check_insert_penyeliaan);
			$total_check_insert_penyeliaan = mysql_num_rows($result_check_insert_penyeliaan);

			if($total_check_insert_penyeliaan == 0){

	   $query_insert_penyeliaan = "INSERT INTO 
										   rek_penyeliaan
										   (
											   IdPemohon,
											   Peringkat,
											   Calon, 
											   Tajuk, 
											   Semester, 
											   Status
											   )
										   VALUES 
										   (
											   '".$applicant."', 
											   '".$penyeliaan_peringkat."', 
											   '".$penyeliaan_calon."',
											   '".$penyeliaan_tajuk."', 
											   '".$penyeliaan_semester."', 
											   '".$penyeliaan_status."'
											   )";
										   

		 $result_insert_penyeliaan = mysql_query($query_insert_penyeliaan) or die(mysql_error()); 
		 
				}//END check == 0
	   }//if input not empty
   }// END else
	}//END loop



   
		/**********************************************************************************
		 					11) EXPERT LINKAGES
		***********************************************************************************/

		$table_len_11 = $_POST['table_len_11'];
		
		for($i_11 = 1; $i_11 < $table_len_11; $i_11++){

			$id_11 = $_POST['id_11'.$i_11];

		$expert_link_description = mysql_real_escape_string($_POST['txt11_expert_link_description'.$i_11]);
		$expert_link_organisasi = mysql_real_escape_string($_POST['txt11_expert_link_organisasi'.$i_11]);
		$expert_link_tahun = mysql_real_escape_string($_POST['txt11_expert_link_tahun'.$i_11]);
		$expert_link_tempoh = mysql_real_escape_string($_POST['txt11_expert_link_tempoh'.$i_11]);
		$expert_link_tahap = mysql_real_escape_string($_POST['txt11_expert_link_tahap'.$i_11]);

		

   $query_check_expert_link = "SELECT
							   LinkagesDescription,
							   Organisasi,
							   TahunPenglibatan,
							   Tempoh,
							   TahapPeringkat
							   FROM
							   rek_expert_linkages
							   WHERE
							   Id = '$id_11'
							   ";

   $result_check_expert_link = mysql_query($query_check_expert_link);
   $total_rows_expert_link = mysql_num_rows($result_check_expert_link);
   $row_check_expert_link = mysql_fetch_assoc($result_check_expert_link);




	   if($total_rows_expert_link > 0){


		   $query_update_expert_link = "UPDATE 
									   rek_expert_linkages
									   SET 
									   LinkagesDescription = '".$expert_link_description."', 
									   Organisasi = '".$expert_link_organisasi."', 
									   TahunPenglibatan = '".$expert_link_tahun."', 
									   Tempoh = '".$expert_link_tempoh."',
									   TahapPeringkat = '".$expert_link_tahap."' 
									   WHERE 
									   Id = '".$id_11."'
									   ";
		   

		   $result_update_expert_link = mysql_query($query_update_expert_link) or die(mysql_error());
			   
   }else{

	   if($expert_link_description != '' || $expert_link_organisasi != '' || $expert_link_tempoh != '' || $expert_link_tahap != ''){

			$query_check_insert_expert_linkage = "SELECT
																						*
																						FROM
																						rek_expert_linkages
																						WHERE
																						IdPemohon = '$applicant'
																						AND
																						LinkagesDescription = '$expert_link_description'
																						AND
																						Organisasi = '$expert_link_organisasi'
																						AND
																						TahunPenglibatan = '$expert_link_tahun'
																						AND
																						Tempoh = '$expert_link_tempoh'
																						AND
																						TahapPeringkat = '$expert_link_tahap'
																						";

		$result_check_insert_expert_linkage	= mysql_query($query_check_insert_expert_linkage);
		$total_check_insert_expert_linkage = mysql_num_rows($result_check_insert_expert_linkage);

		if($total_check_insert_expert_linkage == 0){

	   $query_insert_expert_link = "INSERT INTO 
										   rek_expert_linkages
										   (
											   IdPemohon,
											   LinkagesDescription,
											   Organisasi, 
											   TahunPenglibatan, 
											   Tempoh, 
											   TahapPeringkat
											   )
										   VALUES 
										   (
											   '".$applicant."', 
											   '".$expert_link_description."', 
											   '".$expert_link_organisasi."',
											   '".$expert_link_tahun."', 
											   '".$expert_link_tempoh."', 
											   '".$expert_link_tahap."'
											   )";
										   

	   $result_insert_expert_link = mysql_query($query_insert_expert_link) or die(mysql_error()); 
					}//END check == 0
	   }//if input not empty
   }// END else
	}//END loop



   		/**********************************************************************************
		 					12) SUMBANGAN TEKNIKAL/KEPAKARAN
		***********************************************************************************/

		$table_len_12 = $_POST['table_len_12'];
		
		for($i_12 = 1; $i_12 < $table_len_12; $i_12++){

			$id_12 = $_POST['id_12'.$i_12];

		$sumb_teknikal_aktiviti = mysql_real_escape_string($_POST['txt12_sumbangan_tek_aktiviti'.$i_12]);
		$sumb_teknikal_organisasi = mysql_real_escape_string($_POST['txt12_sumbangan_tek_organisasi'.$i_12]);
		$sumb_teknikal_jawatan = mysql_real_escape_string($_POST['txt12_sumbangan_tek_jawatan'.$i_12]);
		$sumb_teknikal_tarikh_mula_std = mysql_real_escape_string($_POST['txt12_sumbangan_tek_tarikh_mula'.$i_12]);
		$sumb_teknikal_tarikh_tamat_std = mysql_real_escape_string($_POST['txt12_sumbangan_tek_tarikh_tamat'.$i_12]);
		$sumb_teknikal_tahap = mysql_real_escape_string($_POST['txt12_sumbangan_tek_tarikh_tahap'.$i_12]);

		

   $query_check_sumb_teknikal = "SELECT
							   Aktiviti,
							   Organisasi,
							   JawatanPeranan,
							   Dari,
							   Hingga,
							   TahapPeringkat
							   FROM
							   rek_sumbangan_teknikal
							   WHERE
							   Id = '$id_12'
							   ";

   $result_check_sumb_teknikal = mysql_query($query_check_sumb_teknikal);
   $total_rows_sumb_teknikal = mysql_num_rows($result_check_sumb_teknikal);
   $row_check_sumb_teknikal = mysql_fetch_assoc($result_check_sumb_teknikal);


    //convert date to DB format 
	$sumb_teknikal_tarikh_mula_db = date("Y-m-d", strtotime($sumb_teknikal_tarikh_mula_std));
	$sumb_teknikal_tarikh_tamat_db = date("Y-m-d", strtotime($sumb_teknikal_tarikh_tamat_std));

	if($sumb_teknikal_tarikh_mula_db == '1970-01-01'){
		$sumb_teknikal_tarikh_mula_db = '0000-00-00';
	}
	if($sumb_teknikal_tarikh_tamat_db == '1970-01-01'){
		$sumb_teknikal_tarikh_tamat_db = '0000-00-00';
	}




	   if($total_rows_sumb_teknikal > 0){


		   $query_update_sumb_teknikal = "UPDATE 
									   rek_sumbangan_teknikal
									   SET 
									   Aktiviti = '".$sumb_teknikal_aktiviti."', 
									   Organisasi = '".$sumb_teknikal_organisasi."', 
									   JawatanPeranan = '".$sumb_teknikal_jawatan."', 
									   Dari = '".$sumb_teknikal_tarikh_mula_db."',
									   Hingga = '".$sumb_teknikal_tarikh_tamat_db."' ,
									   TahapPeringkat = '".$sumb_teknikal_tahap."'
									   WHERE 
									   Id = '".$id_12."'
									   ";
		   

		   $result_update_sumb_teknikal = mysql_query($query_update_sumb_teknikal) or die(mysql_error());
			   
   }else{

	   if($sumb_teknikal_aktiviti != '' || $sumb_teknikal_organisasi != '' || $sumb_teknikal_jawatan != '' || $sumb_teknikal_tahap != ''){

			$query_check_insert_sumb_teknikal = "SELECT
																						*
																						FROM
																						rek_sumbangan_teknikal
																						WHERE
																						IdPemohon = '$applicant'
																						AND
																						Aktiviti = '$sumb_teknikal_aktiviti'
																						AND
																						Organisasi = '$sumb_teknikal_organisasi'
																						AND
																						JawatanPeranan = '$sumb_teknikal_jawatan'
																						AND
																						Dari = '$sumb_teknikal_tarikh_mula_db'
																						AND
																						Hingga = '$sumb_teknikal_tarikh_tamat_db'
																						AND
																						TahapPeringkat = '$sumb_teknikal_tahap'
																					";

		$result_check_insert_sumb_teknikal = mysql_query($query_check_insert_sumb_teknikal);
		$total_check_insert_sumb_teknikal = mysql_num_rows($result_check_insert_sumb_teknikal);

		if($total_check_insert_sumb_teknikal == 0){


	   $query_insert_sumb_teknikal = "INSERT INTO 
										   rek_sumbangan_teknikal
										   (
											   IdPemohon,
											   Aktiviti,
											   Organisasi, 
											   JawatanPeranan, 
											   Dari, 
											   Hingga,
											   TahapPeringkat
											   )
										   VALUES 
										   (
											   '".$applicant."', 
											   '".$sumb_teknikal_aktiviti."', 
											   '".$sumb_teknikal_organisasi."',
											   '".$sumb_teknikal_jawatan."', 
											   '".$sumb_teknikal_tarikh_mula_db."', 
											   '".$sumb_teknikal_tarikh_tamat_db."',
											   '".$sumb_teknikal_tahap."'
											   )";
										   

	   $result_insert_sumb_teknikal = mysql_query($query_insert_sumb_teknikal) or die(mysql_error()); 
				} //END checker == 0
	   }//if input not empty
   }// END else
	}//END loop


   	/**********************************************************************************
		 					13) MENGAJAR
		***********************************************************************************/

		$table_len_13 = $_POST['table_len_13'];
		
		for($i_13 = 1; $i_13 < $table_len_13; $i_13++){

			$id_13 = $_POST['id_13'.$i_13];

		$mengajar_nama_subjek = mysql_real_escape_string($_POST['txt13_mengajar_nama_subjek'.$i_13]);
		$mengajar_sesi_akad = mysql_real_escape_string($_POST['txt13_mengajar_sesi_akad'.$i_13]);
		$mengajar_bil_pelajar = mysql_real_escape_string($_POST['txt13_mengajar_bil_pelajar'.$i_13]);
		$mengajar_bil_jam = mysql_real_escape_string($_POST['txt13_mengajar_bil_jam'.$i_13]);

		

   $query_check_mengajar = "SELECT
							   NamaSubjek,
							   SesiAkademik,
							   BilPelajar,
							   BilJam
							   FROM
							   rek_mengajar
							   WHERE
							   Id = '$id_13'
							   ";

   $result_check_mengajar = mysql_query($query_check_mengajar);
   $total_rows_check_mengajar = mysql_num_rows($result_check_mengajar);
   $row_check_mengajar = mysql_fetch_assoc($result_check_mengajar);


    
	   if($total_rows_check_mengajar > 0){


		   $query_update_mengajar = "UPDATE 
									   rek_mengajar
									   SET 
									   NamaSubjek = '".$mengajar_nama_subjek."', 
									   SesiAkademik = '".$mengajar_sesi_akad."', 
									   BilPelajar = '".$mengajar_bil_pelajar."', 
									   BilJam = '".$mengajar_bil_jam."'
									   WHERE 
									   Id = '".$id_13."'
									   ";
		   

		   $result_update_mengajar = mysql_query($query_update_mengajar) or die(mysql_error());


   }else{

	   if($mengajar_nama_subjek != '' || $mengajar_sesi_akad != ''){

			$query_check_insert_mengajar = "SELECT
																			*
																			FROM
																			rek_mengajar
																			WHERE
																			IdPemohon = '$applicant'
																			AND
																			NamaSubjek = '$mengajar_nama_subjek'
																			AND
																			SesiAkademik = '$mengajar_sesi_akad'
																			AND
																			BilPelajar = '$mengajar_bil_pelajar'
																			AND
																			BilJam = '$mengajar_bil_jam'
																			";

			$result_check_insert_mengajar = mysql_query($query_check_insert_mengajar);
			$total_check_insert_mengajar = mysql_num_rows($result_check_insert_mengajar);

			if($total_check_insert_mengajar == 0){

	   $query_insert_mengajar = "INSERT INTO 
										   rek_mengajar
										   (
											   IdPemohon,
											   NamaSubjek,
											   SesiAkademik,
											   BilPelajar, 
											   BilJam 
											   )
										   VALUES 
										   (
											   '".$applicant."', 
											   '".$mengajar_nama_subjek."', 
											   '".$mengajar_sesi_akad."',
											   '".$mengajar_bil_pelajar."', 
											   '".$mengajar_bil_jam."'
											   )";
										   

	   $result_insert_mengajar = mysql_query($query_insert_mengajar) or die(mysql_error()); 
				} //END checker == 0
	   }//if input not empty
   }// END else
	}//END loop




    /**********************************************************************************
		 					14) AKTIVITI-AKTIVITI PENILAIAN
		***********************************************************************************/

		$table_len_14 = $_POST['table_len_14'];
		
		for($i_14 = 1; $i_14 < $table_len_14; $i_14++){

			$id_14 = $_POST['id_14'.$i_14];


   $akt_penilaian_penerangan = mysql_real_escape_string($_POST['txt14_akt_penilaian_penerangan'.$i_14]);
   $akt_penilaian_aktiviti = mysql_real_escape_string($_POST['txt14_akt_penilaian_aktiviti'.$i_14]);
   $akt_penilaian_tahun = mysql_real_escape_string($_POST['txt14_akt_penilaian_tahun'.$i_14]);
   

		$query_check_akt_penilaian = "SELECT
								Penerangan,
								Aktiviti,
								Tahun
								FROM
								rek_aktiviti_penilaian
								WHERE
								Id = '$id_14'
								";

		$result_check_akt_penilaian = mysql_query($query_check_akt_penilaian);
		$total_rows_akt_penilaian = mysql_num_rows($result_check_akt_penilaian);
		$row_check_akt_penilaian = mysql_fetch_assoc($result_check_akt_penilaian);




  if($total_rows_akt_penilaian > 0){


	  $query_update_akt_penilaian = "UPDATE 
								  rek_aktiviti_penilaian
								  SET 
								  Penerangan = '". $akt_penilaian_penerangan."', 
								  Aktiviti = '". $akt_penilaian_aktiviti."', 
								  Tahun = '". $akt_penilaian_tahun."'
								  WHERE 
								  Id = '".$id_14."'
								  ";
	  

	  $result_update_akt_penilaian = mysql_query($query_update_akt_penilaian) or die(mysql_error());

		  
}else{

  if($akt_penilaian_penerangan != '' || $akt_penilaian_aktiviti != ''){

		$query_check_insert_akt_penilaian = "SELECT
																					*
																					FROM
																					rek_aktiviti_penilaian
																					WHERE
																					IdPemohon = '$applicant'
																					AND
																					Penerangan = '$akt_penilaian_penerangan'
																					AND
																					Aktiviti = '$akt_penilaian_aktiviti'
																					AND
																					Tahun = '$akt_penilaian_tahun'
																				";

	$result_check_insert_akt_penilaian = mysql_query($query_check_insert_akt_penilaian);
	$total_check_insert_akt_penilaian = mysql_num_rows($result_check_insert_akt_penilaian);

	if($total_check_insert_akt_penilaian == 0){

  $query_insert_akt_penilaian = "INSERT INTO 
									  rek_aktiviti_penilaian
									  (
										  IdPemohon,
										  Penerangan,
										  Aktiviti,
										  Tahun
										  )
									  VALUES 
									  (
										  '".$applicant."', 
										  '".$akt_penilaian_penerangan."', 
										  '".$akt_penilaian_aktiviti."',
										  '".$akt_penilaian_tahun."'
										  )";
									  

	$result_insert_akt_penilaian = mysql_query($query_insert_akt_penilaian) or die(mysql_error()); 
					} //END check == 0
			}//if input not empty
		}// END else
}//END loop





    /**********************************************************************************
		 					15) REKABENTUK KO-KURIKULUM
		***********************************************************************************/


		$table_len_15 = $_POST['table_len_15'];
		
		for($i_15 = 1; $i_15 < $table_len_15; $i_15++){

			$id_15 = $_POST['id_15'.$i_15];

		$rekabentuk_kok_program = mysql_real_escape_string($_POST['txt15_rekabtk_kok_program'.$i_15]);
		$rekabentuk_kok_institusi = mysql_real_escape_string($_POST['txt15_rekabtk_kok_institusi'.$i_15]);
		$rekabentuk_kok_tarikh_std = mysql_real_escape_string($_POST['txt15_rekabtk_kok_tarikh'.$i_15]);
		
	 
			 $query_check_rekabentuk_kok = "SELECT
											Program,
											Institusi,
											Tarikh
											FROM
											rek_rekabentuk_kokurikulum
											WHERE
											Id = '$id_15'
											";
	 
			 $result_check_rekabentuk_kok = mysql_query($query_check_rekabentuk_kok);
			 $total_rows_rekabentuk_kok = mysql_num_rows($result_check_rekabentuk_kok);
			 $row_check_rekabentuk_kok = mysql_fetch_assoc($result_check_rekabentuk_kok);


			 //convert date to DB format 
	$rekabentuk_kok_tarikh_db = date("Y-m-d", strtotime($rekabentuk_kok_tarikh_std));

	if($rekabentuk_kok_tarikh_db == '1970-01-01'){
		$rekabentuk_kok_tarikh_db = '0000-00-00';
	}
	 
	 
	   if($total_rows_rekabentuk_kok > 0){
	 
	 
		   $query_update_rekabentuk_kok = "UPDATE 
									   rek_rekabentuk_kokurikulum
									   SET 
									   Program = '". $rekabentuk_kok_program."', 
									   Institusi = '". $rekabentuk_kok_institusi."', 
									   Tarikh = '". $rekabentuk_kok_tarikh_db."'
									   WHERE 
									   Id = '".$id_15."'
									   ";
		   
	 
		   $result_update_rekabentuk_kok = mysql_query($query_update_rekabentuk_kok) or die(mysql_error());
	 

	 }else{
	 
	   if($rekabentuk_kok_program != '' || $rekabentuk_kok_institusi != ''){

			$query_check_insert_rekabentuk_kok = "SELECT
																						*
																						FROM
																						rek_rekabentuk_kokurikulum
																						WHERE
																						IdPemohon = '$applicant'
																						AND
																						Program = '$rekabentuk_kok_program'
																						AND
																						Institusi = '$rekabentuk_kok_institusi'
																						AND
																						Tarikh = '$rekabentuk_kok_tarikh_db'
																						";

			$result_check_insert_rekabentuk_kok = mysql_query($query_check_insert_rekabentuk_kok);
			$total_check_insert_rekabentuk_kok = mysql_num_rows($result_check_insert_rekabentuk_kok);

			if($total_check_insert_rekabentuk_kok == 0){
	 
	   $query_insert_rekabentuk_kok = "INSERT INTO 
										   rek_rekabentuk_kokurikulum
										   (
											   IdPemohon,
											   Program,
											   Institusi,
											   Tarikh
											   )
										   VALUES 
										   (
											   '".$applicant."', 
											   '".$rekabentuk_kok_program."', 
											   '".$rekabentuk_kok_institusi."',
											   '".$rekabentuk_kok_tarikh_db."'
											   )";
										   
	 
		 $result_insert_rekabentuk_kok = mysql_query($query_insert_rekabentuk_kok) or die(mysql_error()); 
		 
				} //END total_check == 0
	   }//if input not empty
	 }// END else
	}//END loop







	 /**********************************************************************************
		 					16) KEHADIRAN BENGKEL & SEMINAR
		***********************************************************************************/

		$table_len_16 = $_POST['table_len_16'];
		
		for($i_16 = 1; $i_16 < $table_len_16; $i_16++){

			$id_16 = $_POST['id_16'.$i_16];


		$kehadiran_bengkel_nama = mysql_real_escape_string($_POST['txt16_bengkel_seminar_nama'.$i_16]);
		$kehadiran_bengkel_tarikh_std = mysql_real_escape_string($_POST['txt16_bengkel_seminar_tarikh'.$i_16]);
		$kehadiran_bengkel_tempat = mysql_real_escape_string($_POST['txt16_bengkel_seminar_tempat'.$i_16]);
		$kehadiran_bengkel_penganjur = mysql_real_escape_string($_POST['txt16_bengkel_seminar_penganjur'.$i_16]);
		$kehadiran_bengkel_jawatan = mysql_real_escape_string($_POST['txt16_bengkel_seminar_jawatan'.$i_16]);
		
	 
			 $query_check_kehadiran_bengkel = "SELECT
											Nama,
											Tarikh,
											Tempat,
											Penganjur,
											JawatanPeranan
											FROM
											rek_kehadiran_bengkel
											WHERE
											Id = '$id_16'
											";
	 
			 $result_check_kehadiran_bengkel = mysql_query($query_check_kehadiran_bengkel);
			 $total_rows_kehadiran_bengkel = mysql_num_rows($result_check_kehadiran_bengkel);
			 $row_check_kehadiran_bengkel = mysql_fetch_assoc($result_check_kehadiran_bengkel);


			 //convert date to DB format 
	$kehadiran_bengkel_tarikh_db = date("Y-m-d", strtotime($kehadiran_bengkel_tarikh_std));

	if($kehadiran_bengkel_tarikh_db == '1970-01-01'){
		$kehadiran_bengkel_tarikh_db = '0000-00-00';
	}
	 
	 
	 
	 
	   if($total_rows_kehadiran_bengkel > 0){
	 
	 
		   $query_update_kehadiran_bengkel = "UPDATE 
									   rek_kehadiran_bengkel
									   SET 
									   Nama = '". $kehadiran_bengkel_nama."', 
									   Tarikh = '". $kehadiran_bengkel_tarikh_db."', 
									   Tempat = '". $kehadiran_bengkel_tempat."',
									   Penganjur = '".$kehadiran_bengkel_penganjur."',
									   JawatanPeranan = '".$kehadiran_bengkel_jawatan."'
									   WHERE 
									   Id = '".$id_16."'
									   ";
		   
	 
		   $result_update_kehadiran_bengkel = mysql_query($query_update_kehadiran_bengkel) or die(mysql_error());
			   
	 }else{
	 
	   if($kehadiran_bengkel_nama != '' || $kehadiran_bengkel_tempat != '' || $kehadiran_bengkel_penganjur != '' || $kehadiran_bengkel_tarikh != ''){
	 
			$query_check_insert_kehadiran_bengkel = "SELECT
																								*
																								FROM
																								rek_kehadiran_bengkel
																								WHERE
																								IdPemohon = '$applicant'
																								AND
																								Nama = '$kehadiran_bengkel_nama'
																								AND
																								Tarikh = '$kehadiran_bengkel_tarikh_db'
																								AND
																								Tempat = '$kehadiran_bengkel_tempat'
																								AND
																								Penganjur = '$kehadiran_bengkel_penganjur'
																								AND
																								JawatanPeranan = '$kehadiran_bengkel_jawatan'
																							";

			$result_check_insert_kehadiran_bengkel = mysql_query($query_check_insert_kehadiran_bengkel);
			$total_check_insert_kehadiran_bengkel = mysql_num_rows($result_check_insert_kehadiran_bengkel);

				if($total_check_insert_kehadiran_bengkel == 0){

	   $query_insert_kehadiran_bengkel = "INSERT INTO 
										   rek_kehadiran_bengkel
										   (
											   IdPemohon,
											   Nama,
											   Tarikh,
											   Tempat,
											   Penganjur,
											   JawatanPeranan
											   )
										   VALUES 
										   (
											   '".$applicant."', 
											   '".$kehadiran_bengkel_nama."', 
											   '".$kehadiran_bengkel_tarikh_db."',
											   '".$kehadiran_bengkel_tempat."',
											   '".$kehadiran_bengkel_penganjur."',
											   '".$kehadiran_bengkel_jawatan."'
											   )";
										   
	 
	   $result_insert_kehadiran_bengkel = mysql_query($query_insert_kehadiran_bengkel) or die(mysql_error()); 
	 
						} //END total_check == 0
					}//if input not empty
			}// END else
		}//END loop




	  /**********************************************************************************
		 					17) SUMBANGAN KEPADA MASYARAKAT
		***********************************************************************************/

		$table_len_17 = $_POST['table_len_17'];
		
		for($i_17 = 1; $i_17 < $table_len_17; $i_17++){

			$id_17 = $_POST['id_17'.$i_17];


		$sumbangan_masyarakat_masyarakat = mysql_real_escape_string($_POST['txt17_sumbangan_masyarakat_nama'.$i_17]);
		$sumbangan_masyarakat_tahap = mysql_real_escape_string($_POST['txt17_sumbangan_masyarakat_tahap'.$i_17]);
		$sumbangan_masyarakat_tarikh_mula_std = mysql_real_escape_string($_POST['txt17_sumbangan_masyarakat_tarikh_mula'.$i_17]);
		$sumbangan_masyarakat_tarikh_tamat_std = mysql_real_escape_string($_POST['txt17_sumbangan_masyarakat_tarikh_tamat'.$i_17]);
		
	 
			 $query_check_sumbangan_masyarakat = "SELECT
											Sumbangan,
											TahapPeringkat,
											TarikhMula,
											TarikhTamat
											FROM
											rek_sumbangan_masyarakat
											WHERE
											Id = '$id_17'
											";
	 
			 $result_check_sumbangan_masyarakat = mysql_query($query_check_sumbangan_masyarakat);
			 $total_rows_sumbangan_masyarakat = mysql_num_rows($result_check_sumbangan_masyarakat);
			 $row_check_sumbangan_masyarakat = mysql_fetch_assoc($result_check_sumbangan_masyarakat);


			 //convert date to DB format 
	$sumbangan_masyarakat_tarikh_mula_db = date("Y-m-d", strtotime($sumbangan_masyarakat_tarikh_mula_std));
	$sumbangan_masyarakat_tarikh_tamat_db = date("Y-m-d", strtotime($sumbangan_masyarakat_tarikh_tamat_std));

	if($sumbangan_masyarakat_tarikh_mula_db == '1970-01-01'){
		$sumbangan_masyarakat_tarikh_mula_db = '0000-00-00';
	}
	if($sumbangan_masyarakat_tarikh_tamat_db == '1970-01-01'){
		$sumbangan_masyarakat_tarikh_tamat_db = '0000-00-00';
	}
	 
	 
	 
	 
	   if($total_rows_sumbangan_masyarakat > 0){
	 
	 
		   $query_update_sumbangan_masyarakat = "UPDATE 
												rek_sumbangan_masyarakat
												SET 
												Sumbangan = '". $sumbangan_masyarakat_masyarakat."', 
												TahapPeringkat = '". $sumbangan_masyarakat_tahap."', 
												TarikhMula = '". $sumbangan_masyarakat_tarikh_mula_db."',
												TarikhTamat = '".$sumbangan_masyarakat_tarikh_tamat_db."'
												WHERE 
												Id = '".$id_17."'
												";
		   
	 
		   $result_update_sumbangan_masyarakat = mysql_query($query_update_sumbangan_masyarakat) or die(mysql_error());
	 
			   
	 }else{
	 
	   if($sumbangan_masyarakat_masyarakat != '' || $sumbangan_masyarakat_tahap != ''){

			$query_check_insert_sumbangan_masyarakat = "SELECT
																									*
																									FROM
																									rek_sumbangan_masyarakat
																									WHERE
																									IdPemohon = '$applicant'
																									AND
																									Sumbangan = '$sumbangan_masyarakat_masyarakat'
																									AND
																									TahapPeringkat = '$sumbangan_masyarakat_tahap'
																									AND
																									TarikhMula = '$sumbangan_masyarakat_tarikh_mula_db'
																									AND
																									TarikhTamat = '$sumbangan_masyarakat_tarikh_tamat_db'
																									";

			$result_check_insert_sumbangan_masyarakat = mysql_query($query_check_insert_sumbangan_masyarakat);
			$total_check_insert_sumbangan_masyarakat = mysql_num_rows($result_check_insert_sumbangan_masyarakat);

			if($total_check_insert_sumbangan_masyarakat == 0){
	 
	   $query_insert_sumbangan_masyarakat = "INSERT INTO 
										   rek_sumbangan_masyarakat
										   (
											   IdPemohon,
											   Sumbangan,
											   TahapPeringkat,
											   TarikhMula,
											   TarikhTamat
											   )
										   VALUES 
										   (
											   '".$applicant."', 
											   '".$sumbangan_masyarakat_masyarakat."', 
											   '".$sumbangan_masyarakat_tahap."',
											   '".$sumbangan_masyarakat_tarikh_mula_db."',
											   '".$sumbangan_masyarakat_tarikh_tamat_db."'
											   )";
										   
	 
		 $result_insert_sumbangan_masyarakat = mysql_query($query_insert_sumbangan_masyarakat) or die(mysql_error()); 
			} //END checker_insert == 0
	   }//if input not empty
	 }// END else
	}//END loop






	 
	    /**********************************************************************************
		 					18) ANUGERAH DAN PENCAPAIAN
		***********************************************************************************/

		$table_len_18 = $_POST['table_len_18'];
		
		for($i_18 = 1; $i_18 < $table_len_18; $i_18++){

			$id_18 = $_POST['id_18'.$i_18];


		$anugerah_pencapaian_nama = mysql_real_escape_string($_POST['txt18_anugerah_pencapaian_nama'.$i_18]);
		$anugerah_pencapaian_institusi = mysql_real_escape_string($_POST['txt18_anugerah_pencapaian_institusi'.$i_18]);
		$anugerah_pencapaian_tahun = mysql_real_escape_string($_POST['txt18_anugerah_pencapaian_tahun'.$i_18]);
		$anugerah_pencapaian_peringkat = mysql_real_escape_string($_POST['txt18_anugerah_pencapaian_peringkat'.$i_18]);
		
	 
			 $query_check_anugerah_pencapaian = "SELECT
											Nama,
											Institusi,
											Tahun,
											Peringkat
											FROM
											rek_anugerah_pencapaian
											WHERE
											Id = '$id_18'
											";
	 
			 $result_check_anugerah_pencapaian = mysql_query($query_check_anugerah_pencapaian);
			 $total_rows_anugerah_pencapaian = mysql_num_rows($result_check_anugerah_pencapaian);
			 $row_check_anugerah_pencapaian = mysql_fetch_assoc($result_check_anugerah_pencapaian);



	 
	   if($total_rows_anugerah_pencapaian > 0){
	 
	 
		   $query_update_anugerah_pencapaian = "UPDATE 
												rek_anugerah_pencapaian
												SET 
												Nama = '". $anugerah_pencapaian_nama."', 
												Institusi = '". $anugerah_pencapaian_institusi."', 
												Tahun = '". $anugerah_pencapaian_tahun."',
												Peringkat = '".$anugerah_pencapaian_peringkat."'
												WHERE 
												Id = '".$id_18."'
												";
		   
	 
		   $result_update_anugerah_pencapaian = mysql_query($query_update_anugerah_pencapaian) or die(mysql_error());
	 
			   
	 }else{
	 
	   if($anugerah_pencapaian_nama != '' || $anugerah_pencapaian_institusi != '' || $anugerah_pencapaian_peringkat != ''){

			$query_check_insert_anugerah_pencapaian = "SELECT
																									*
																									FROM
																									rek_anugerah_pencapaian
																									WHERE
																									IdPemohon = '$applicant'
																									AND
																									Nama = '$anugerah_pencapaian_nama'
																									AND
																									Institusi = '$anugerah_pencapaian_institusi'
																									AND
																									Tahun = '$anugerah_pencapaian_tahun'
																									AND
																									Peringkat = '$anugerah_pencapaian_peringkat'
																								";

			$result_check_insert_anugerah_pencapaian = mysql_query($query_check_insert_anugerah_pencapaian);
			$total_check_insert_anugerah_pencapaian = mysql_num_rows($result_check_insert_anugerah_pencapaian);

			if($total_check_insert_anugerah_pencapaian == 0){
	 
	   $query_insert_anugerah_pencapaian = "INSERT INTO 
										   rek_anugerah_pencapaian
										   (
											   IdPemohon,
											   Nama,
											   Institusi,
											   Tahun,
											   Peringkat
											   )
										   VALUES 
										   (
											   '".$applicant."', 
											   '".$anugerah_pencapaian_nama."', 
											   '".$anugerah_pencapaian_institusi."',
											   '".$anugerah_pencapaian_tahun."',
											   '".$anugerah_pencapaian_peringkat."'
											   )";
										   
	 
	   $result_insert_anugerah_pencapaian = mysql_query($query_insert_anugerah_pencapaian) or die(mysql_error()); 
						} //END check_insert == 0
	   }//if input not empty
	 }// END else
	}//END loop 18


	} //END: isset($_POST['btnSubmit'])

	/******************************************************************************************************************************* 
			 END OF ISSET SUBMIT				END OF ISSET SUBMIT					END OF ISSET SUBMIT		END OF ISSET SUBMIT
	*******************************************************************************************************************************/
?>

<?php startblock('main');?>


<div class="container">
	<div class="page-header">
		<h3><?php t('PENYELIDIKAN_HEADER'); ?></h3>
    </div>
    <br />

<div class="container">
    <div class="alert alert-info">
    	<strong><?php t('INFO'); ?></strong><br />
    	<?php t('PENYELIDIKAN_INFO'); ?>
    </div>
	<strong>
            <span style="color: red; font-style: italic; margin-left: 15px;">
                Bagi permohonan jawatan akademik, anda diwajibkan mengisi semua maklumat di bawah.
            </span><br /><br />
		</strong>
    
<form name='registration-form' id="registration-form" method="post">
<table border="0" align="center">
  


  <!------------------------------------START: FORM JAWATAN AKADEMIK SAHAJA ----------------------------------------------->

	<!--------------------------------------- 1 of 18 -------------------------------------------------------------->




	<tr class="tr_sub_title">
				<td colspan="6"><b>&nbsp;&nbsp;&nbsp;1) Keanggotaan* (Badan/Agensi/Institut/Jawatankuasa dll)</b></td>
		</tr>
		<tr>
			<td colspan="6">&nbsp;</td>
		</tr>
	  
	<?php

$query_get_affiliation = "SELECT 
						Id,
						Nama,
						Jawatan,
						Alamat,
						NoTel
						FROM
						rek_affiliation
						WHERE
						IdPemohon = '$applicant'
						";

	$result_get_affiliation = mysql_query($query_get_affiliation);
	$total_affiliation = mysql_num_rows($result_get_affiliation); 


	$table_len_1 = 1;

	if($total_affiliation == 0){

	?>

	

		<!-------------- MAKLUMAT 1 ---------------->
<tr>
		<td align="right"><b>Maklumat <?php echo $table_len_1; ?></b></td>
		<td></td>
		<td colspan="4"></td>
</tr>
<!-------------- MAKLUMAT 1 ---------------->

	  <tr >
			<td  align="right">Nama*</td>
			<td  align="center" class="td_margin_right"></td>
			<td colspan="4">
				<input
					class="input_max_large"
					type="text" 
					id="txt1_nama"
					name="txt1_nama<?php echo $table_len_1; ?>" 
					value="<?php echo $row_get_affiliation['Nama']; ?>" 
					maxlength="80"
					autocomplete="off"
				/>	
		</td>
			
	</tr>
	<tr>
			<td  align="right"><i>Jawatan*</i></td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input 
					class="input_max_large"
					type="text" 
					id="txt1_jawatan"
					name="txt1_jawatan<?php echo $table_len_1; ?>" 
					value="<?php echo $row_get_affiliation['Jawatan']; ?>" 
					maxlength="80"  
					autocomplete="off"
				/>
			</td>
			</span>
	</tr>
	<tr>
			<td  align="right">Alamat*</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input 
					class="input_max_large"
					type="text" 
					id="txt1_alamat"
					name="txt1_alamat<?php echo $table_len_1; ?>" 
					value="<?php echo $row_get_affiliation['Alamat']; ?>" 
					maxlength="80" 
					autocomplete="off"
				 />
		</td>
			</span>
	</tr>
	<tr>
			<td  align="right">No Tel*</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input
					class="input_max_large"
					type="text" 
					id="txt1_tel"
					name="txt1_tel<?php echo $table_len_1; ?>" 
					value="<?php echo $row_get_affiliation['NoTel']; ?>"  
					maxlength="15" 
					autocomplete="off"
					style="width: 100px;"
				/>
				<span> <i>&nbsp;Format: dd-mm-yyyy (Cth: 31-01-2018)</i></span>
		</td>
	</tr>




<?php 
	$table_len_1++;
	} //END $total_affiliation == 0



	while ($row_get_affiliation = mysql_fetch_assoc($result_get_affiliation)){

?>


	<tr>
		<td colspan="6">&nbsp;</td>
	</tr>

<input type="hidden" name="id<?php echo $table_len_1; ?>" value="<?php echo $id_col1 = $row_get_affiliation['Id']; ?>" />





<!-------------- MAKLUMAT 1 ---------------->
<tr style="background: #f3f7f9; line-height: 1.8em;">
		<td align="right"><b>Maklumat <?php echo $table_len_1; ?></b></td>
		<td></td>
		<td colspan="4" style="float: right;">
		<a style="font-weight: bold; font-size: 1.3em; padding-right: 5px;" onclick="return confirm('Adakah anda pasti untuk hapuskan rekod ini?')"
		href="?p=tab_penyelidikan&col1=<?php echo $id_col1; ?>" title="BATAL">
			X</a></td>
</tr>
<!-------------- MAKLUMAT 1 ---------------->

<!-------------- SPACING ---------------->
<tr>
		<td>&nbsp;</td><td></td><td></td>
</tr>
<!-------------- SPACING ---------------->

	  <tr >
			<td  align="right">Nama*</td>
			<td  align="center" class="td_margin_right"></td>
			<td colspan="4">
				<input
					class="input_max_large"
					type="text" 
					id="txt1_nama"
					name="txt1_nama<?php echo $table_len_1; ?>" 
					value="<?php echo $row_get_affiliation['Nama']; ?>" 
					maxlength="80"
					autocomplete="off"
				/>	
		</td>
			
	</tr>
	<tr>
			<td  align="right"><i>Jawatan*</i></td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input 
					class="input_max_large"
					type="text" 
					id="txt1_jawatan"
					name="txt1_jawatan<?php echo $table_len_1; ?>" 
					value="<?php echo $row_get_affiliation['Jawatan']; ?>" 
					maxlength="80"  
					autocomplete="off"
				/>
			</td>
			</span>
	</tr>
	<tr>
			<td  align="right">Alamat*</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input 
					class="input_max_large"
					type="text" 
					id="txt1_alamat"
					name="txt1_alamat<?php echo $table_len_1; ?>" 
					value="<?php echo $row_get_affiliation['Alamat']; ?>" 
					maxlength="80" 
					autocomplete="off"
				 />
		</td>
			</span>
	</tr>
	<tr>
			<td  align="right">No Tel*</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input
					class="input_max_large"
					type="text" 
					id="txt1_tel"
					name="txt1_tel<?php echo $table_len_1; ?>" 
					value="<?php echo $row_get_affiliation['NoTel']; ?>"  
					maxlength="15" 
					autocomplete="off"
					style="width: 100px;"
				/>
				<span> <i>&nbsp;Cth: 0123344555</i></span>
		</td>
	</tr>



	<?php
	$table_len_1++;
		}
	?>

<!----------------------------------- TD MAKLUMAT TAMBAHAN 1 --------------------------------->
	<tbody class="div_added_kolum_1"></tbody>
<!----------------------------------- TD MAKLUMAT TAMBAHAN 1 --------------------------------->



<!------------------------------------- BUTTON TAMBAH 1 of 18 ------------------------------------->
	<tr>
		<td colspan="6">
				<center>
					<button id="btn_tambah_1" class="btn btn-success" type="button" name="btn_tambah_1">+ TAMBAH</button>
				</center>
		</td>
	</tr>
	<td colspan="6" style="display: block; height: 30px;"></td><!-- LINE SPACING (FOR NEXT CATEGORY -->








<!------------------------(2 of 18) JAWATAN AKADEMIK/PENGALAMAN ---------------------->

<tr class="tr_sub_title">
  <td colspan="6"><b>&nbsp;&nbsp;&nbsp;2) Jawatan Akademik/Pengalaman</b></td>
</tr>

<?php

$query_get_jaw_akad_pengalaman = "SELECT 
									Id,
									Organisasi,
									JawatanPeranan,
									Tarikh
									FROM
									rek_jaw_akad_pengalaman
									WHERE
									IdPemohon = '$applicant'
									";

	$result_get_jaw_akad_pengalaman = mysql_query($query_get_jaw_akad_pengalaman);
	$total_jaw_akad_pengalaman = mysql_num_rows($result_get_jaw_akad_pengalaman);
	

	$table_len_2 = 1;

	if($total_jaw_akad_pengalaman == 0){
?>

<tr>
	<td colspan="6">&nbsp;</td>
</tr>

<!-------------- MAKLUMAT 1 ---------------->
<tr>
		<td align="right"><b>Maklumat <?php echo $table_len_2; ?></b></td>
		<td></td>
		<td colspan="4"></td>
</tr>
<!-------------- MAKLUMAT 1 ---------------->

<tr>
			<td  align="right">Organisasi</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input
					class="input_max_large"
					type="text" 
					id="txt2_jaw_akad_organisasi"
					name="txt2_jaw_akad_organisasi<?php echo $table_len_2; ?>" 
					value="<?php echo $row_get_jaw_akad_pengalaman['Organisasi']; ?>" 
					maxlength="80"  
					autocomplete="off"
					/>
			</td>
	</tr>
	<tr>
			<td  align="right">Jawatan/Peranan</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input
					class="input_max_large"
					type="text" 
					id="txt2_jaw_akad_jawatan"
					name="txt2_jaw_akad_jawatan<?php echo $table_len_2; ?>" 
					value="<?php echo $row_get_jaw_akad_pengalaman['JawatanPeranan']; ?>" 
					maxlength="80"  
					autocomplete="off"
					/>
		</td>
	</tr>
	<tr>
		<td  align="right">Tarikh</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4">
			<input
				type="text" 
				name="txt2_jaw_akad_tarikh<?php echo $table_len_2; ?>" 
				id="txt2_jaw_akad_tarikh" 
				style="width: 100px;" 
				value="<?php echo $jaw_akad_pengalaman_tarikh_std; ?>" 
				maxlength="10"  
				autocomplete="off"
				/>
				<span> <i>&nbsp;Format: dd-mm-yyyy (Cth: 31-01-2018)</i></span>
	</td>
</tr>




<?php
		$table_len_2++;
	}

	while($row_get_jaw_akad_pengalaman = mysql_fetch_assoc($result_get_jaw_akad_pengalaman)){


	//convert date to STD format
	$jaw_akad_pengalaman_tarikh_db = $row_get_jaw_akad_pengalaman['Tarikh'];
	
	$jaw_akad_pengalaman_tarikh_std = date("d-m-Y", strtotime($jaw_akad_pengalaman_tarikh_db));


	if($jaw_akad_pengalaman_tarikh_std == '01-01-1970'){
		$jaw_akad_pengalaman_tarikh_std = '';
	}


?>

<input type="hidden" name="id_2<?php echo $table_len_2; ?>" value="<?php echo $id_col2 = $row_get_jaw_akad_pengalaman['Id']; ?>" />

<tr>
	<td colspan="6">&nbsp;</td>
</tr>

<!-------------- MAKLUMAT 1 ---------------->
<tr style="background: #f3f7f9; line-height: 1.8em;">
		<td align="right"><b>Maklumat <?php echo $table_len_2; ?></b></td>
		<td></td>
		<td colspan="4" style="float: right;"><a style="font-weight: bold; font-size: 1.3em; padding-right: 5px;" onclick="return confirm('Adakah anda pasti untuk hapuskan rekod ini?')"
		href="?p=tab_penyelidikan&col2=<?php echo $id_col2; ?>" title="BATAL">
			X</a></td>
</tr>
<!-------------- MAKLUMAT 1 ---------------->

<!-------------- SPACING ---------------->
<tr>
		<td>&nbsp;</td><td></td><td></td>
</tr>
<!-------------- SPACING ---------------->

<tr>
			<td  align="right">Organisasi</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input
					class="input_max_large"
					type="text" 
					id="txt2_jaw_akad_organisasi"
					name="txt2_jaw_akad_organisasi<?php echo $table_len_2; ?>" 
					value="<?php echo $row_get_jaw_akad_pengalaman['Organisasi']; ?>" 
					maxlength="80"  
					autocomplete="off"
					/>
			</td>
	</tr>
	<tr>
			<td  align="right">Jawatan/Peranan</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input
					class="input_max_large"
					type="text" 
					id="txt2_jaw_akad_jawatan"
					name="txt2_jaw_akad_jawatan<?php echo $table_len_2; ?>" 
					value="<?php echo $row_get_jaw_akad_pengalaman['JawatanPeranan']; ?>" 
					maxlength="80"  
					autocomplete="off"
					/>
		</td>
	</tr>
	<tr>
		<td  align="right">Tarikh</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4">
			<input
				type="text" 
				class="txt2_jaw_akad_tarikh"
				name="txt2_jaw_akad_tarikh<?php echo $table_len_2; ?>" 
				id="txt2_jaw_akad_tarikh" 
				style="width: 100px;" 
				value="<?php echo $jaw_akad_pengalaman_tarikh_std; ?>" 
				maxlength="10"  
				autocomplete="off"
				/>
				<span> <i>&nbsp;Format: dd-mm-yyyy (Cth: 31-01-2018)</i></span>
	</td>
</tr>

<tr>
	<td colspan="6">&nbsp;</td>
</tr>




<?php
	$table_len_2++;
	}
?>



	<!----------------------------------- TD MAKLUMAT TAMBAHAN 2 --------------------------------->
											<tbody class="div_added_kolum_2"></tbody>
	<!----------------------------------- TD MAKLUMAT TAMBAHAN 2 --------------------------------->



<!------------------------------------- BUTTON TAMBAH 2 of 18 ------------------------------------->
	<tr>
		<td colspan="6">
				<center>
					<button id="btn_tambah_2" class="btn btn-success" type="button" name="btn_tambah_2">+ TAMBAH</button>
				</center>
		</td>
	</tr>
	<td colspan="6" style="display: block; height: 30px;"></td><!-- LINE SPACING (FOR NEXT CATEGORY -->








<!------------------------(3 of 18) KEANGGOTAAN YANG DIIKTIRAF & PROFESSIONAL/KEAHLIAN ---------------------->

<tr class="tr_sub_title">
  <td colspan="6"><b>&nbsp;&nbsp;&nbsp;3) Keanggotaan Yang Diiktiraf & Professional/Keahlian</b></td>
</tr>



<?php

	$query_get_keanggotaan_diiktiraf = "SELECT 
									Id,
									Organisasi,
									JawatanPeranan,
									Tarikh
									FROM
									rek_keanggotaan_diiktiraf
									WHERE
									IdPemohon = '$applicant'
									";

	$result_get_keanggotaan_diiktiraf = mysql_query($query_get_keanggotaan_diiktiraf);
	$total_keanggotaan_diiktiraf = mysql_num_rows($result_get_keanggotaan_diiktiraf);


	$table_len_3 = 1;

	if($total_keanggotaan_diiktiraf == 0){
		?>


<tr>
	<td colspan="6">&nbsp;</td>
</tr>

<!-------------- MAKLUMAT 1 ---------------->
<tr>
		<td align="right"><b>Maklumat <?php echo $table_len_3; ?></b></td>
		<td></td>
		<td colspan="4"></td>
</tr>
<!-------------- MAKLUMAT 1 ---------------->



<tr>
			<td  align="right">Organisasi</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input
					class="input_max_large"
					type="text" 
					id="txt3_keanggotaan_organisasi"
					name="txt3_keanggotaan_organisasi<?php echo $table_len_3; ?>" 
					value="<?php echo $row_get_keanggotaan_diiktiraf['Organisasi']; ?>" 
					maxlength="80"  
					autocomplete="off"
					/>
			</td>
	</tr>
	<tr>
			<td  align="right">Jawatan/Peranan</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input
					class="input_max_large"
					type="text"
					id="txt3_keanggotaan_jawatan"
					name="txt3_keanggotaan_jawatan<?php echo $table_len_3; ?>"  
					value="<?php echo $row_get_keanggotaan_diiktiraf['Organisasi']; ?>" 
					maxlength="80" 
					autocomplete="off"
					 />
		</td>
	</tr>
	<tr>
		<td  align="right">Tarikh</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4">
			<input
				type="text"
				id="txt3_keanggotaan_tarikh"
				name="txt3_keanggotaan_tarikh<?php echo $table_len_3; ?>" 
				style="width: 100px;" 
				value="<?php echo $keanggotaan_diiktiraf_tarikh_std; ?>" 
				maxlength="10"  
				autocomplete="off"
			/>
			<span> <i>&nbsp;Format: dd-mm-yyyy (Cth: 31-01-2018)</i></span>
	</td>
</tr>



<?php 
		$table_len_3++;
	}



	while($row_get_keanggotaan_diiktiraf = mysql_fetch_assoc($result_get_keanggotaan_diiktiraf)){

	//convert date to STD format
	$keanggotaan_diiktiraf_tarikh_db = $row_get_keanggotaan_diiktiraf['Tarikh'];
	
	$keanggotaan_diiktiraf_tarikh_std = date("d-m-Y", strtotime($keanggotaan_diiktiraf_tarikh_db));


	if($keanggotaan_diiktiraf_tarikh_std == '01-01-1970'){
		$keanggotaan_diiktiraf_tarikh_std = '';
	}

?>

<tr>
	<td colspan="6">&nbsp;</td>
</tr>
<input type="hidden" name="id_3<?php echo $table_len_3; ?>" value="<?php echo $id_col3 = $row_get_keanggotaan_diiktiraf['Id']; ?>" />

<!-------------- MAKLUMAT 1 ---------------->
<tr style="background: #f3f7f9; line-height: 1.8em;">
		<td align="right"><b>Maklumat <?php echo $table_len_3; ?></b></td>
		<td></td>
		<td colspan="4" style="float: right;"><a style="font-weight: bold; font-size: 1.3em; padding-right: 5px;" onclick="return confirm('Adakah anda pasti untuk hapuskan rekod ini?')"
		href="?p=tab_penyelidikan&col3=<?php echo $id_col3; ?>" title="BATAL">
			X</a></td>
</tr>
<!-------------- MAKLUMAT 1 ---------------->

<!-------------- SPACING ---------------->
<tr>
		<td>&nbsp;</td><td></td><td></td>
</tr>
<!-------------- SPACING ---------------->
</tr>
<!-------------- MAKLUMAT 1 ---------------->





<tr>
			<td  align="right">Organisasi</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input
					class="input_max_large"
					type="text" 
					id="txt3_keanggotaan_organisasi"
					name="txt3_keanggotaan_organisasi<?php echo $table_len_3; ?>" 
					value="<?php echo $row_get_keanggotaan_diiktiraf['Organisasi']; ?>" 
					maxlength="80"  
					autocomplete="off"
					/>
			</td>
	</tr>
	<tr>
			<td  align="right">Jawatan/Peranan</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input
					class="input_max_large"
					type="text"
					id="txt3_keanggotaan_jawatan"
					name="txt3_keanggotaan_jawatan<?php echo $table_len_3; ?>"  
					value="<?php echo $row_get_keanggotaan_diiktiraf['Organisasi']; ?>" 
					maxlength="80" 
					autocomplete="off"
					 />
		</td>
	</tr>
	<tr>
		<td  align="right">Tarikh</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4">
			<input
				type="text"
				id="txt3_keanggotaan_tarikh"
				name="txt3_keanggotaan_tarikh<?php echo $table_len_3; ?>" 
				style="width: 100px;" 
				value="<?php echo $keanggotaan_diiktiraf_tarikh_std; ?>" 
				maxlength="10"  
				autocomplete="off"
			/>
			<span> <i>&nbsp;Format: dd-mm-yyyy (Cth: 31-01-2018)</i></span>
	</td>
</tr>

<?php
		$table_len_3++;
	}
?>


	<!----------------------------------- TD MAKLUMAT TAMBAHAN 3 --------------------------------->
														<tbody class="div_added_kolum_3"></tbody>
	<!----------------------------------- TD MAKLUMAT TAMBAHAN 3 --------------------------------->



<!------------------------------------- BUTTON TAMBAH 3 of 18 ------------------------------------->
<tr>
		<td colspan="6">
				<center>
					<button id="btn_tambah_3" class="btn btn-success" type="button" name="btn_tambah_3">+ TAMBAH</button>
				</center>
		</td>
	</tr>


<tr>
	<td colspan="6">&nbsp;</td>
</tr>
<td colspan="6" style="display: block; height: 30px;"></td><!-- LINE SPACING (FOR NEXT CATEGORY -->






<!------------------------ (4 of 18) TUGAS-TUGAS PENTADBIRAN ---------------------->
<tr class="tr_sub_title">
  <td colspan="6"><b>&nbsp;&nbsp;&nbsp;4) Tugas-tugas Pentadbiran</b></td>
</tr>


<?php

$query_get_tugas_pentadbiran = "SELECT 
									Id,
									JawatanTugas,
									TahapPeringkat,
									TarikhMula,
									TarikhTamat
									FROM
									rek_tugas_pentadbiran
									WHERE
									IdPemohon = '$applicant'
									";

	$result_get_tugas_pentadbiran = mysql_query($query_get_tugas_pentadbiran);
	$total_tugas_pentadbiran = mysql_num_rows($result_get_tugas_pentadbiran);
	//$row_get_tugas_pentadbiran = mysql_fetch_assoc($result_get_tugas_pentadbiran);


	$table_len_4 = 1;

	if($total_tugas_pentadbiran == 0){
	?>

<tr>
	<td colspan="6">&nbsp;</td>
</tr>

<!-------------- MAKLUMAT 1 ---------------->
<tr>
		<td align="right"><b>Maklumat <?php echo $table_len_4; ?></b></td>
		<td></td>
		<td colspan="4"></td>
</tr>
<!-------------- MAKLUMAT 1 ---------------->

<tr>
			<td  align="right">Jawatan/Tugas</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
					<input
						class="input_max_large"
						type="text"
						id="txt4_tugas_pent_jawatan"
						name="txt4_tugas_pent_jawatan<?php echo $table_len_4; ?>"  
						value="<?php echo $row_get_tugas_pentadbiran['JawatanTugas']; ?>" 
						maxlength="80"  
						autocomplete="off"
					/>
			</td>
	</tr>
	<tr>
			<td  align="right">Tahap/Peringkat</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input
					class="input_max_large"
					type="text"
					id="txt4_tugas_pent_tahap"
					name="txt4_tugas_pent_tahap<?php echo $table_len_4; ?>"
					value="<?php echo $row_get_tugas_pentadbiran['TahapPeringkat']; ?>" 
					maxlength="80" 
					autocomplete="off"
					 />
		</td>
	</tr>
	<tr>
		<td  align="right">Tarikh Mula</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4">
			<input
				type="text" 
				id="txt4_tugas_pent_tarikh_mula" 
				name="txt4_tugas_pent_tarikh_mula<?php echo $table_len_4; ?>" 
				style="width: 100px;" 
				value="<?php echo $tugas_pentadbiran_tarikh_mula_std; ?>" 
				maxlength="10"  
				autocomplete="off"
			/>
			<span> <i>&nbsp;Format: dd-mm-yyyy (Cth: 31-01-2018)</i></span>
	</td>
</tr>
<tr>
		<td  align="right">Tarikh Tamat</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4">
			<input 
				type="text"
				id="txt4_tugas_pent_tarikh_tamat"
				name="txt4_tugas_pent_tarikh_tamat<?php echo $table_len_4; ?>"   
				style="width: 100px;" 
				value="<?php echo $tugas_pentadbiran_tarikh_tamat_std; ?>" 
				maxlength="10"  
				autocomplete="off"
			/>
			<span> <i>&nbsp;Format: dd-mm-yyyy (Cth: 31-01-2018)</i></span>
	</td>
</tr>

	<?php
		$table_len_4++;
	}

	while($row_get_tugas_pentadbiran = mysql_fetch_assoc($result_get_tugas_pentadbiran)){

	//convert date to STD format
	$tugas_pentadbiran_tarikh_mula_db = $row_get_tugas_pentadbiran['TarikhMula'];
	$tugas_pentadbiran_tarikh_tamat_db = $row_get_tugas_pentadbiran['TarikhTamat'];
	
	$tugas_pentadbiran_tarikh_mula_std = date("d-m-Y", strtotime($tugas_pentadbiran_tarikh_mula_db));
	$tugas_pentadbiran_tarikh_tamat_std = date("d-m-Y", strtotime($tugas_pentadbiran_tarikh_tamat_db));


	if($tugas_pentadbiran_tarikh_mula_std == '01-01-1970'){
		$tugas_pentadbiran_tarikh_mula_std = '';
	}
	if($tugas_pentadbiran_tarikh_tamat_std == '01-01-1970'){
		$tugas_pentadbiran_tarikh_tamat_std = '';
	}

?>

<tr>
	<td colspan="6">&nbsp;</td>
</tr>

<input type="hidden" name="id_4<?php echo $table_len_4; ?>" value="<?php echo $id_col4 = $row_get_tugas_pentadbiran['Id']; ?>" />

<!-------------- MAKLUMAT 1 ---------------->
<tr style="background: #f3f7f9; line-height: 1.8em;">
		<td align="right"><b>Maklumat <?php echo $table_len_4; ?></b></td>
		<td></td>
		<td colspan="4" style="float: right;"><a style="font-weight: bold; font-size: 1.3em; padding-right: 5px;" onclick="return confirm('Adakah anda pasti untuk hapuskan rekod ini?')"
		href="?p=tab_penyelidikan&col4=<?php echo $id_col4; ?>" title="BATAL">
			X</a></td>
</tr>
<!-------------- MAKLUMAT 1 ---------------->

<!-------------- SPACING ---------------->
<tr>
		<td>&nbsp;</td><td></td><td></td>
</tr>
<!-------------- SPACING ---------------->





<tr>
			<td  align="right">Jawatan/Tugas</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
					<input
						class="input_max_large"
						type="text"
						id="txt4_tugas_pent_jawatan"
						name="txt4_tugas_pent_jawatan<?php echo $table_len_4; ?>"  
						value="<?php echo $row_get_tugas_pentadbiran['JawatanTugas']; ?>" 
						maxlength="80"  
						autocomplete="off"
					/>
			</td>
	</tr>
	<tr>
			<td  align="right">Tahap/Peringkat</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input
					class="input_max_large"
					type="text"
					id="txt4_tugas_pent_tahap"
					name="txt4_tugas_pent_tahap<?php echo $table_len_4; ?>"
					value="<?php echo $row_get_tugas_pentadbiran['TahapPeringkat']; ?>" 
					maxlength="80" 
					autocomplete="off"
					 />
		</td>
	</tr>
	<tr>
		<td  align="right">Tarikh Mula</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4">
			<input
				type="text" 
				id="txt4_tugas_pent_tarikh_mula" 
				name="txt4_tugas_pent_tarikh_mula<?php echo $table_len_4; ?>" 
				style="width: 100px;" 
				value="<?php echo $tugas_pentadbiran_tarikh_mula_std; ?>" 
				maxlength="10"  
				autocomplete="off"
			/>
			<span> <i>&nbsp;Format: dd-mm-yyyy (Cth: 31-01-2018)</i></span>
	</td>
</tr>
<tr>
		<td  align="right">Tarikh Tamat</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4">
			<input 
				type="text"
				id="txt4_tugas_pent_tarikh_tamat"
				name="txt4_tugas_pent_tarikh_tamat<?php echo $table_len_4; ?>"   
				style="width: 100px;" 
				value="<?php echo $tugas_pentadbiran_tarikh_tamat_std; ?>" 
				maxlength="10"  
				autocomplete="off"
			/>
			<span> <i>&nbsp;Format: dd-mm-yyyy (Cth: 31-01-2018)</i></span>
	</td>
</tr>


<?php
		$table_len_4++;
	}
?>


	<!----------------------------------- TD MAKLUMAT TAMBAHAN 4 --------------------------------->
													<tbody class="div_added_kolum_4"></tbody>
	<!----------------------------------- TD MAKLUMAT TAMBAHAN 4 --------------------------------->


<!------------------------------------- BUTTON TAMBAH 4 of 18 ------------------------------------->
<tr>
		<td colspan="6">
				<center>
					<button id="btn_tambah_4" class="btn btn-success" type="button" name="btn_tambah_1">+ TAMBAH</button>
				</center>
		</td>
	</tr>

<tr>
	<td colspan="6">&nbsp;</td>
</tr>
<td colspan="6" style="display: block; height: 30px;"></td><!-- LINE SPACING (FOR NEXT CATEGORY -->







<!------------------------(5 of 18)  BIDANG-BIDANG KEPAKARAN ---------------------->
<tr class="tr_sub_title">
  <td colspan="6"><b>&nbsp;&nbsp;&nbsp;5) Bidang-bidang Kepakaran</b></td>
</tr>

<tr>
	<td colspan="6">&nbsp;</td>
</tr>

<?php

$query_get_bidang_kepakaran = "SELECT 
                  Id,
									BidangKepakaran
									FROM
									rek_bidang_kepakaran
									WHERE
									IdPemohon = '$applicant'
									";

	$result_get_bidang_kepakaran = mysql_query($query_get_bidang_kepakaran);
	$total_get_bidang_kepakaran = mysql_num_rows($result_get_bidang_kepakaran);
	//$row_get_bidang_kepakaran = mysql_fetch_assoc($result_get_bidang_kepakaran);

	$table_len_5 = 1;

	if($total_get_bidang_kepakaran == 0){

?>
		<tr>
			<td  align="right">Bidang 1<br />&nbsp;</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input
					class="input_max_large"
					type="text"
					id="txt5_bidang_kepakaran"
					name="txt5_bidang_kepakaran<?php echo $table_len_5; ?>"  
					value="<?php echo $row_get_bidang_kepakaran['BidangKepakaran']; ?>" 
					maxlength="80"  
					autocomplete="off"
				/>
				<!--<br /> -->
				
			</td>
	</tr>
	</tr>


<?php 
	$table_len_5++;
	}

	

	while($row_get_bidang_kepakaran = mysql_fetch_assoc($result_get_bidang_kepakaran)){

?>

<input type="hidden" name="id_5<?php echo $table_len_5; ?>" value="<?php echo $id_col5 = $row_get_bidang_kepakaran['Id']; ?>" />

<tr>
			<td  align="right">Bidang <?php echo $table_len_5; ?><br />&nbsp;</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input
					class="input_max_large"
					type="text"
					id="txt5_bidang_kepakaran"
					name="txt5_bidang_kepakaran<?php echo $table_len_5; ?>"  
					value="<?php echo $row_get_bidang_kepakaran['BidangKepakaran']; ?>" 
					maxlength="80"  
					autocomplete="off"
				/>
				<a style="font-weight: bold; font-size: 1.3em; padding-right: 5px;" onclick="return confirm('Adakah anda pasti untuk hapuskan rekod ini?')"
		href="?p=tab_penyelidikan&col5=<?php echo $id_col5; ?>" title="BATAL">
			X</a>
			</td>
		
	</tr>
	</tr>

	


<?php
	$table_len_5++;
	}
?>

<!----------------------------------- TD MAKLUMAT TAMBAHAN 5 --------------------------------->
												<tbody class="div_added_kolum_5"></tbody>
<!----------------------------------- TD MAKLUMAT TAMBAHAN 5 --------------------------------->


<!------------------------------------- BUTTON TAMBAH 5 of 18 ------------------------------------->
<tr>
		<td colspan="6">
				<center>
					<button id="btn_tambah_5" class="btn btn-success" type="button" name="btn_tambah_1">+ TAMBAH</button>
				</center>
		</td>
	</tr>
	

<tr>
	<td colspan="6">&nbsp;</td>
</tr>
<td colspan="6" style="display: block; height: 30px;"></td><!-- LINE SPACING (FOR NEXT CATEGORY -->







<!------------------------------------------ PENERBITAN TERPILIH (1 -6) --------------------------------------->
<tr class="tr_sub_title">
  <td colspan="6"><b>&nbsp;&nbsp;&nbsp;6) Penerbitan Terpilih Yang Terkini</b></td>
</tr>

<tr>
	<td colspan="6">&nbsp;</td>
</tr>

	<!---------- 6 PART I: MODULE --------------------->
	<tr>
					<td  align="right"><i><b>Module</b></i></td>
					<td  align="center">&nbsp;</td>
					<td colspan="4">
					</td>
		</tr>
		


<?php

$query_get_pener_1_module = "SELECT 
									Id,
									NamaPenulis,
									Tajuk,
									Institusi
									FROM
									rek_penerbitan_1_module
									WHERE
									IdPemohon = '$applicant'
									";

	$result_get_pener_1_module = mysql_query($query_get_pener_1_module);
	$total_pener_1_module = mysql_num_rows($result_get_pener_1_module);


	$table_len_6_I = 1;


	if($total_pener_1_module == 0){

	?>

<tr>
	<td colspan="6">&nbsp;</td>
</tr>


		
		<!-------------- MAKLUMAT 1 ---------------->
		<tr>
				<td align="right"><b>Maklumat <?php echo $table_len_6_I; ?></b></td>
				<td></td>
				<td colspan="4"></td>
		</tr>
		<!-------------- MAKLUMAT 1 ---------------->
		
		
			<tr>
					<td  align="right" style="width: 10%;">Nama Penulis</td>
					<td  align="center" style="width: 5%;">&nbsp;</td>
					<td colspan="4">
						<input class="input_max_large"
							type="text"
							id="txt6_pener_1_module_nama_penulis<?php echo $table_len_6_I; ?>"
							name="txt6_pener_1_module_nama_penulis<?php echo $table_len_6_I; ?>"  
							value="<?php echo $row_get_pener_1_module['NamaPenulis']; ?>" 
							maxlength="80"  
							autocomplete="off"
						/>
					</td>
			</tr>
		
			<tr>
					<td  align="right">Tajuk</td>
					<td  align="center">&nbsp;</td>
					<td colspan="4">
						<input class="input_max_large"
							type="text"
							id="txt6_pener_1_module_tajuk"
							name="txt6_pener_1_module_tajuk<?php echo $table_len_6_I; ?>"  
							value="<?php echo $row_get_pener_1_module['Tajuk']; ?>" 
							maxlength="80"  
							autocomplete="off"
						/>
					</td>
			</tr>
		
			<tr>
					<td  align="right">Institusi</td>
					<td  align="center">&nbsp;</td>
					<td colspan="4">
						<input class="input_max_large"
							type="text"
							id="txt6_pener_1_module_institusi"
							name="txt6_pener_1_module_institusi<?php echo $table_len_6_I; ?>"  
							value="<?php echo $row_get_pener_1_module['Institusi']; ?>" 
							maxlength="80"  
							autocomplete="off"
						/>
					</td>
			</tr>

		
		
<tr>
		<?php
		 $table_len_6_I++;
	}


	while($row_get_pener_1_module = mysql_fetch_assoc($result_get_pener_1_module)){
		?>

<tr>
	<td colspan="6">&nbsp;</td>
</tr>

<input type="hidden" name="id_6_I<?php echo $table_len_6_I; ?>" value="<?php echo $id_col6_I = $row_get_pener_1_module['Id']; ?>" />

				<!-------------- MAKLUMAT 1 ---------------->
				<tr style="background: #f3f7f9; line-height: 1.8em;">
				<td align="right"><b>Maklumat <?php echo $table_len_6_I; ?></b></td>
				<td></td>
				<td colspan="4" style="float: right;"><a style="font-weight: bold; font-size: 1.3em; padding-right: 5px;" onclick="return confirm('Adakah anda pasti untuk hapuskan rekod ini?')"
		href="?p=tab_penyelidikan&col6_I=<?php echo $id_col6_I; ?>" title="BATAL">
			X</a></td>
</tr>
<!-------------- MAKLUMAT 1 ---------------->

<!-------------- SPACING ---------------->
<tr>
		<td>&nbsp;</td><td></td><td></td>
</tr>
<!-------------- SPACING ---------------->


		
		
			<tr>
					<td  align="right" style="width: 10%;">Nama Penulis</td>
					<td  align="center" style="width: 5%;">&nbsp;</td>
					<td colspan="4">
						<input class="input_max_large"
							type="text"
							id="txt6_pener_1_module_nama_penulis<?php echo $table_len_6_I; ?>"
							name="txt6_pener_1_module_nama_penulis<?php echo $table_len_6_I; ?>"  
							value="<?php echo $row_get_pener_1_module['NamaPenulis']; ?>" 
							maxlength="80"  
							autocomplete="off"
						/>
					</td>
			</tr>
		
			<tr>
					<td  align="right">Tajuk</td>
					<td  align="center">&nbsp;</td>
					<td colspan="4">
						<input class="input_max_large"
							type="text"
							id="txt6_pener_1_module_tajuk"
							name="txt6_pener_1_module_tajuk<?php echo $table_len_6_I; ?>"  
							value="<?php echo $row_get_pener_1_module['Tajuk']; ?>" 
							maxlength="80"  
							autocomplete="off"
						/>
					</td>
			</tr>
		
			<tr>
					<td  align="right">Institusi</td>
					<td  align="center">&nbsp;</td>
					<td colspan="4">
						<input class="input_max_large"
							type="text"
							id="txt6_pener_1_module_institusi"
							name="txt6_pener_1_module_institusi<?php echo $table_len_6_I; ?>"  
							value="<?php echo $row_get_pener_1_module['Institusi']; ?>" 
							maxlength="80"  
							autocomplete="off"
						/>
					</td>
			</tr>
		
			

		
	<tr>
		<?php
		 $table_len_6_I++;
	}

	?>

	


				<!----------------------------------- TD MAKLUMAT TAMBAHAN 6-I --------------------------------->
			                         	<tbody class="div_added_kolum_6_I"></tbody>
			  <!----------------------------------- TD MAKLUMAT TAMBAHAN 6-I --------------------------------->


		<!------------------------------------- BUTTON TAMBAH 6-I of 18 ------------------------------------->
				<td colspan="6">
						<center>
							<button id="btn_tambah_6-I" class="btn btn-success" type="button" name="btn_tambah_1">+ TAMBAH</button>
						</center>
				</td>
			</tr>
		
			<tr>
	<td colspan="6">&nbsp;</td>
</tr>
<td colspan="6" style="display: block; height: 30px;"></td><!-- LINE SPACING (FOR NEXT CATEGORY -->







	<!---------- 6 PART II: INDEXED JOURNAL --------------------->
	<tr>
					<td  align="right"><i><b>Indexed Journal</b></i></td>
					<td  align="center">&nbsp;</td>
					<td colspan="4">
					</td>
		</tr>
		


<?php

$query_get_pener_2_indexed_journal = "SELECT
																			Id,
																			Nama,
																			Tajuk,
																			Tahun,
																			Penerbitan,
																			MukasuratHalaman
																			FROM
																			rek_penerbitan_2_indexed_journal
																			WHERE
																			IdPemohon = '$applicant'
																			";

	$result_get_pener_2_indexed_journal = mysql_query($query_get_pener_2_indexed_journal);
	$total_pener_2_indexed_journal = mysql_num_rows($result_get_pener_2_indexed_journal);
	

	$table_len_6_II = 1;


	if($total_pener_2_indexed_journal == 0){

	?>

<td colspan="6">&nbsp;</td>
</tr>

		
		<!-------------- MAKLUMAT 1 ---------------->
		<tr>
				<td align="right"><b>Maklumat <?php echo $table_len_6_II; ?></b></td>
				<td></td>
				<td colspan="4"></td>
		</tr>
		<!-------------- MAKLUMAT 1 ---------------->
		
		
			<tr>
					<td  align="right" style="width: 10%;">Nama</td>
					<td  align="center" style="width: 5%;">&nbsp;</td>
					<td colspan="4">
						<input class="input_max_large"
							type="text"
							id="txt6_pener_2_idx_journal_nama<?php echo $table_len_6_II; ?>"
							name="txt6_pener_2_idx_journal_nama<?php echo $table_len_6_II; ?>"  
							value="<?php echo $row_get_pener_2_indexed_journal['Nama']; ?>" 
							maxlength="80"  
							autocomplete="off"
						/>
					</td>
			</tr>
		
			<tr>
					<td  align="right">Tajuk</td>
					<td  align="center">&nbsp;</td>
					<td colspan="4">
						<input class="input_max_large"
							type="text"
							id="txt6_pener_2_idx_journal_tajuk"
							name="txt6_pener_2_idx_journal_tajuk<?php echo $table_len_6_II; ?>"  
							value="<?php echo $row_get_pener_2_indexed_journal['Tajuk']; ?>" 
							maxlength="80"  
							autocomplete="off"
						/>
					</td>
			</tr>
		
			<tr>
		<td  align="right">Tahun</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4">
			<select name="txt6_pener_2_idx_journal_tahun<?php echo $table_len_6_II; ?>" style="width: 110px;">
				<option value="" selected>Pilih Tahun</option>

				<?php

					$curr_year = date("Y");

					for($i=$curr_year; $i>=1940; $i--){
					?>

						<option <?php if($i == $row_get_pener_2_indexed_journal['Tahun']){ echo "selected"; } ?>>
								<?php echo $i; ?> 
						</option>
					<?php
					}
				?>
			</select>
	</td>
</tr>

			<tr>
					<td  align="right">Penerbitan</td>
					<td  align="center">&nbsp;</td>
					<td colspan="4">
						<input class="input_max_large"
							type="text"
							id="txt6_pener_2_idx_journal_penerbitan"
							name="txt6_pener_2_idx_journal_penerbitan<?php echo $table_len_6_II; ?>"  
							value="<?php echo $row_get_pener_2_indexed_journal['Penerbitan']; ?>" 
							maxlength="80"  
							autocomplete="off"
						/>
					</td>
			</tr>

			<tr>
					<td  align="right">Mukasurat/Halaman</td>
					<td  align="center">&nbsp;</td>
					<td colspan="4">
						<input class="input_max_large"
							type="text"
							id="txt6_pener_2_idx_journal_mukasurat"
							name="txt6_pener_2_idx_journal_mukasurat<?php echo $table_len_6_II; ?>"  
							value="<?php echo $row_get_pener_2_indexed_journal['MukasuratHalaman']; ?>" 
							maxlength="80"  
							autocomplete="off"
						/>
					</td>
			</tr>
		
		
				
		
<tr>
		<?php
		 $table_len_6_II++;
	}


	while($row_get_pener_2_indexed_journal = mysql_fetch_assoc($result_get_pener_2_indexed_journal)){
		?>

<td colspan="6">&nbsp;</td>
</tr>

<input type="hidden" name="id_6_II<?php echo $table_len_6_II; ?>" value="<?php echo $id_col6_II = $row_get_pener_2_indexed_journal['Id']; ?>" />

				<!-------------- MAKLUMAT 1 ---------------->
				<tr style="background: #f3f7f9; line-height: 1.8em;">
				<td align="right"><b>Maklumat <?php echo $table_len_6_II; ?></b></td>
				<td></td>
				<td colspan="4" style="float: right;"><a style="font-weight: bold; font-size: 1.3em; padding-right: 5px;" onclick="return confirm('Adakah anda pasti untuk hapuskan rekod ini?')"
		href="?p=tab_penyelidikan&col6_II=<?php echo $id_col6_II; ?>" title="BATAL">
			X</a></td>
</tr>
<!-------------- MAKLUMAT 1 ---------------->

<!-------------- SPACING ---------------->
<tr>
		<td>&nbsp;</td><td></td><td></td>
</tr>
<!-------------- SPACING ---------------->
		</tr>
		<!-------------- MAKLUMAT 1 ---------------->
		
		
			<tr>
					<td  align="right" style="width: 10%;">Nama</td>
					<td  align="center" style="width: 5%;">&nbsp;</td>
					<td colspan="4">
						<input class="input_max_large"
							type="text"
							id="txt6_pener_2_idx_journal_nama<?php echo $table_len_6_II; ?>"
							name="txt6_pener_2_idx_journal_nama<?php echo $table_len_6_II; ?>"  
							value="<?php echo $row_get_pener_2_indexed_journal['Nama']; ?>" 
							maxlength="80"  
							autocomplete="off"
						/>
					</td>
			</tr>
		
			<tr>
					<td  align="right">Tajuk</td>
					<td  align="center">&nbsp;</td>
					<td colspan="4">
						<input class="input_max_large"
							type="text"
							id="txt6_pener_2_idx_journal_tajuk"
							name="txt6_pener_2_idx_journal_tajuk<?php echo $table_len_6_II; ?>"  
							value="<?php echo $row_get_pener_2_indexed_journal['Tajuk']; ?>" 
							maxlength="80"  
							autocomplete="off"
						/>
					</td>
			</tr>
		
	<tr>
		<td  align="right">Tahun</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4">
			<select name="txt6_pener_2_idx_journal_tahun<?php echo $table_len_6_II; ?>" style="width: 110px;">
				<option value="" selected>Pilih Tahun</option>

				<?php

					$curr_year = date("Y");

					for($i=$curr_year; $i>=1940; $i--){
					?>

						<option <?php if($i == $row_get_pener_2_indexed_journal['Tahun']){ echo "selected"; } ?>>
								<?php echo $i; ?> 
						</option>
					<?php
					}
				?>
			</select>
	</td>
</tr>

			<tr>
					<td  align="right">Penerbitan</td>
					<td  align="center">&nbsp;</td>
					<td colspan="4">
						<input class="input_max_large"
							type="text"
							id="txt6_pener_2_idx_journal_penerbitan"
							name="txt6_pener_2_idx_journal_penerbitan<?php echo $table_len_6_II; ?>"  
							value="<?php echo $row_get_pener_2_indexed_journal['Penerbitan']; ?>" 
							maxlength="80"  
							autocomplete="off"
						/>
					</td>
			</tr>

			<tr>
					<td  align="right">Mukasurat/Halaman</td>
					<td  align="center">&nbsp;</td>
					<td colspan="4">
						<input class="input_max_large"
							type="text"
							id="txt6_pener_2_idx_journal_mukasurat"
							name="txt6_pener_2_idx_journal_mukasurat<?php echo $table_len_6_II; ?>"  
							value="<?php echo $row_get_pener_2_indexed_journal['MukasuratHalaman']; ?>" 
							maxlength="80"  
							autocomplete="off"
						/>
					</td>
			</tr>

			
		
			
		
		
		<!------------------------------------- BUTTON TAMBAH 6-II of 18 ------------------------------------->
			<tr>



		<?php
		 $table_len_6_II++;
	}

	?>

				<!----------------------------------- TD MAKLUMAT TAMBAHAN 6-II --------------------------------->
													<tbody class="div_added_kolum_6_II"></tbody>
				<!----------------------------------- TD MAKLUMAT TAMBAHAN 6-II --------------------------------->

				<!------------------------------------- BUTTON TAMBAH 6-II of 18 ------------------------------------->
				<td colspan="6">
						<center>
							<button id="btn_tambah_6-II" class="btn btn-success" type="button" name="btn_tambah_1">+ TAMBAH</button>
						</center>
				</td>
			</tr>
		
			<td colspan="6">&nbsp;</td>
</tr>
<td colspan="6" style="display: block; height: 30px;"></td><!-- LINE SPACING (FOR NEXT CATEGORY -->









	<!---------- 6 PART III: REVIEWED JOURNAL --------------------->
	<tr>
					<td  align="right"><i><b>Reviewed Journal</b></i></td>
					<td  align="center">&nbsp;</td>
					<td colspan="4">
					</td>
		</tr>
		
	

<?php

$query_get_pener_3_reviewed_journal = "SELECT
																			Id,
																			NamaPenulis,
																			Tajuk,
																			Tahun,
																			Penerbitan,
																			MukasuratHalaman
																			FROM
																			rek_penerbitan_3_reviewed_journal
																			WHERE
																			IdPemohon = '$applicant'
																			";

	$result_get_pener_3_reviewed_journal = mysql_query($query_get_pener_3_reviewed_journal);
	$total_pener_3_reviewed_journal = mysql_num_rows($result_get_pener_3_reviewed_journal);


	$table_len_6_III = 1;


	if($total_pener_3_reviewed_journal == 0){

	?>

<tr>
			<td colspan="6">&nbsp;</td>
		</tr>
		
		<!-------------- MAKLUMAT 1 ---------------->
		<tr>
				<td align="right"><b>Maklumat <?php echo $table_len_6_III; ?></b></td>
				<td></td>
				<td colspan="4"></td>
		</tr>
		<!-------------- MAKLUMAT 1 ---------------->
		
		
			<tr>
					<td  align="right" style="width: 10%;">Nama</td>
					<td  align="center" style="width: 5%;">&nbsp;</td>
					<td colspan="4">
						<input class="input_max_large"
							type="text"
							id="txt6_pener_3_rev_journal_nama<?php echo $table_len_6_III; ?>"
							name="txt6_pener_3_rev_journal_nama<?php echo $table_len_6_III; ?>"  
							value="<?php echo $row_get_pener_3_reviewed_journal['NamaPenulis']; ?>" 
							maxlength="80"  
							autocomplete="off"
						/>
					</td>
			</tr>
		
			<tr>
					<td  align="right">Tajuk</td>
					<td  align="center">&nbsp;</td>
					<td colspan="4">
						<input class="input_max_large"
							type="text"
							id="txt6_pener_3_rev_journal_tajuk"
							name="txt6_pener_3_rev_journal_tajuk<?php echo $table_len_6_III; ?>"  
							value="<?php echo $row_get_pener_2_indexed_journal['Tajuk']; ?>" 
							maxlength="80"  
							autocomplete="off"
						/>
					</td>
			</tr>
		
			<tr>
		<td  align="right">Tahun</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4">
			<select name="txt6_pener_3_rev_journal_tahun<?php echo $table_len_6_III; ?>" style="width: 110px;">
				<option value="" selected>Pilih Tahun</option>

				<?php

					$curr_year = date("Y");

					for($i=$curr_year; $i>=1940; $i--){
					?>

						<option <?php if($i == $row_get_pener_3_reviewed_journal['Tahun']){ echo "selected"; } ?>>
								<?php echo $i; ?> 
						</option>
					<?php
					}
				?>
			</select>
	</td>
</tr>

			<tr>
					<td  align="right">Penerbitan</td>
					<td  align="center">&nbsp;</td>
					<td colspan="4">
						<input class="input_max_large"
							type="text"
							id="txt6_pener_3_rev_journal_penerbitan"
							name="txt6_pener_3_rev_journal_penerbitan<?php echo $table_len_6_III; ?>"  
							value="<?php echo $row_get_pener_3_reviewed_journal['Penerbitan']; ?>" 
							maxlength="80"  
							autocomplete="off"
						/>
					</td>
			</tr>

			<tr>
					<td  align="right">Mukasurat/Halaman</td>
					<td  align="center">&nbsp;</td>
					<td colspan="4">
						<input class="input_max_large"
							type="text"
							id="txt6_pener_3_rev_journal_mukasurat"
							name="txt6_pener_3_rev_journal_mukasurat<?php echo $table_len_6_III; ?>"  
							value="<?php echo $row_get_pener_3_reviewed_journal['MukasuratHalaman']; ?>" 
							maxlength="80"  
							autocomplete="off"
						/>
					</td>
			</tr>
		
		

<tr>

		<?php
		 $table_len_6_III++;
	}


	while($row_get_pener_3_reviewed_journal = mysql_fetch_assoc($result_get_pener_3_reviewed_journal)){
		?>

			<tr>
						<td colspan="6">&nbsp;</td>
					</tr>

					<input type="hidden" name="id_6_III<?php echo $table_len_6_III; ?>" value="<?php echo $id_col6_III = $row_get_pener_3_reviewed_journal['Id']; ?>" />

				<!-------------- MAKLUMAT 1 ---------------->
				<tr style="background: #f3f7f9; line-height: 1.8em;">
				<td align="right"><b>Maklumat <?php echo $table_len_6_III; ?></b></td>
				<td></td>
				<td colspan="4" style="float: right;"><a style="font-weight: bold; font-size: 1.3em; padding-right: 5px;" onclick="return confirm('Adakah anda pasti untuk hapuskan rekod ini?')"
		href="?p=tab_penyelidikan&col6_III=<?php echo $id_col6_III; ?>" title="BATAL">
			X</a></td>
</tr>
<!-------------- MAKLUMAT 1 ---------------->

<!-------------- SPACING ---------------->
<tr>
		<td>&nbsp;</td><td></td><td></td>
</tr>
<!-------------- SPACING ---------------->
		</tr>
		<!-------------- MAKLUMAT 1 ---------------->
		
		
			<tr>
					<td  align="right" style="width: 10%;">Nama</td>
					<td  align="center" style="width: 5%;">&nbsp;</td>
					<td colspan="4">
						<input class="input_max_large"
							type="text"
							id="txt6_pener_3_rev_journal_nama<?php echo $table_len_6_III; ?>"
							name="txt6_pener_3_rev_journal_nama<?php echo $table_len_6_III; ?>"  
							value="<?php echo $row_get_pener_3_reviewed_journal['NamaPenulis']; ?>" 
							maxlength="80"  
							autocomplete="off"
						/>
					</td>
			</tr>
		
			<tr>
					<td  align="right">Tajuk</td>
					<td  align="center">&nbsp;</td>
					<td colspan="4">
						<input class="input_max_large"
							type="text"
							id="txt6_pener_3_rev_journal_tajuk"
							name="txt6_pener_3_rev_journal_tajuk<?php echo $table_len_6_III; ?>"  
							value="<?php echo $row_get_pener_3_reviewed_journal['Tajuk']; ?>" 
							maxlength="80"  
							autocomplete="off"
						/>
					</td>
			</tr>
		
	<tr>
		<td  align="right">Tahun</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4">
			<select name="txt6_pener_3_rev_journal_tahun<?php echo $table_len_6_III; ?>" style="width: 110px;">
				<option value="" selected>Pilih Tahun</option>

				<?php

					$curr_year = date("Y");

					for($i=$curr_year; $i>=1940; $i--){
					?>

						<option <?php if($i == $row_get_pener_3_reviewed_journal['Tahun']){ echo "selected"; } ?>>
								<?php echo $i; ?> 
						</option>
					<?php
					}
				?>
			</select>
	</td>
</tr>

			<tr>
					<td  align="right">Penerbitan</td>
					<td  align="center">&nbsp;</td>
					<td colspan="4">
						<input class="input_max_large"
							type="text"
							id="txt6_pener_3_rev_journal_penerbitan"
							name="txt6_pener_3_rev_journal_penerbitan<?php echo $table_len_6_III; ?>"  
							value="<?php echo $row_get_pener_3_reviewed_journal['Penerbitan']; ?>" 
							maxlength="80"  
							autocomplete="off"
						/>
					</td>
			</tr>

			<tr>
					<td  align="right">Mukasurat/Halaman</td>
					<td  align="center">&nbsp;</td>
					<td colspan="4">
						<input class="input_max_large"
							type="text"
							id="txt6_pener_3_rev_journal_mukasurat"
							name="txt6_pener_3_rev_journal_mukasurat<?php echo $table_len_6_III; ?>"  
							value="<?php echo $row_get_pener_3_reviewed_journal['MukasuratHalaman']; ?>" 
							maxlength="80"  
							autocomplete="off"
						/>
					</td>
			</tr>

			
		
			
<tr>
		<?php
		 $table_len_6_III++;
	}

	?>


					<!----------------------------------- TD MAKLUMAT TAMBAHAN 6-III --------------------------------->
																<tbody class="div_added_kolum_6_III"></tbody>
					<!----------------------------------- TD MAKLUMAT TAMBAHAN 6-III --------------------------------->


		<!------------------------------------- BUTTON TAMBAH 6-III of 18 ------------------------------------->
				<td colspan="6">
						<center>
							<button id="btn_tambah_6-III" class="btn btn-success" type="button" name="btn_tambah_1">+ TAMBAH</button>
						</center>
				</td>
			</tr>
		
		<tr>
			<td colspan="6">&nbsp;</td>
		</tr>











<!---------- 6 PART IV: PROCEEDING --------------------->
	<tr>
					<td  align="right"><i><b>Proceeding</b></i></td>
					<td  align="center">&nbsp;</td>
					<td colspan="4">
					</td>
		</tr>
		
	
<?php

$query_get_pener_4_proceeding = "SELECT
																			Id,
																			NamaPenulis,
																			Tajuk,
																			Persidangan,
																			Tahun
																			FROM
																			rek_penerbitan_4_proceeding
																			WHERE
																			IdPemohon = '$applicant'
																			";

	$result_get_pener_4_proceeding = mysql_query($query_get_pener_4_proceeding);
	$total_pener_4_proceeding = mysql_num_rows($result_get_pener_4_proceeding);



	$table_len_6_IV = 1;


	if($total_pener_4_proceeding == 0){

	?>

<tr>
			<td colspan="6">&nbsp;</td>
		</tr>
		
		<!-------------- MAKLUMAT 1 ---------------->
		<tr>
				<td align="right"><b>Maklumat <?php echo $table_len_6_IV; ?></b></td>
				<td></td>
				<td colspan="4"></td>
		</tr>
		<!-------------- MAKLUMAT 1 ---------------->
		
		
			<tr>
					<td  align="right" style="width: 10%;">Nama Penulis</td>
					<td  align="center" style="width: 5%;">&nbsp;</td>
					<td colspan="4">
						<input class="input_max_large"
							type="text"
							id="txt6_pener_4_proceeding_nama_penulis<?php echo $table_len_6_IV; ?>"
							name="txt6_pener_4_proceeding_nama_penulis<?php echo $table_len_6_IV; ?>"  
							value="<?php echo $row_get_pener_4_proceeding['NamaPenulis']; ?>" 
							maxlength="80"  
							autocomplete="off"
						/>
					</td>
			</tr>
		
			<tr>
					<td  align="right">Tajuk</td>
					<td  align="center">&nbsp;</td>
					<td colspan="4">
						<input class="input_max_large"
							type="text"
							id="txt6_pener_4_proceeding_tajuk"
							name="txt6_pener_4_proceeding_tajuk<?php echo $table_len_6_IV; ?>"  
							value="<?php echo $row_get_pener_4_proceeding['Tajuk']; ?>" 
							maxlength="80"  
							autocomplete="off"
						/>
					</td>
			</tr>

			<tr>
					<td  align="right">Persidangan</td>
					<td  align="center">&nbsp;</td>
					<td colspan="4">
						<input class="input_max_large"
							type="text"
							id="txt6_pener_4_proceeding_persidangan"
							name="txt6_pener_4_proceeding_persidangan<?php echo $table_len_6_IV; ?>"  
							value="<?php echo $row_get_pener_4_proceeding['Persidangan']; ?>" 
							maxlength="80"  
							autocomplete="off"
						/>
					</td>
			</tr>
		
			<tr>
		<td  align="right">Tahun</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4">
			<select name="txt6_pener_4_proceeding_tahun<?php echo $table_len_6_IV; ?>" style="width: 110px;">
				<option value="" selected>Pilih Tahun</option>

				<?php

					$curr_year = date("Y");

					for($i=$curr_year; $i>=1940; $i--){
					?>

						<option <?php if($i == $row_get_pener_4_proceeding['Tahun']){ echo "selected"; } ?>>
								<?php echo $i; ?> 
						</option>
					<?php
					}
				?>
			</select>
	</td>
</tr>



<tr>
		<?php
		 $table_len_6_IV++;
	}


	while($row_get_pener_4_proceeding = mysql_fetch_assoc($result_get_pener_4_proceeding)){
		?>

<tr>
			<td colspan="6">&nbsp;</td>
		</tr>

		<input type="hidden" name="id_6_IV<?php echo $table_len_6_IV; ?>" value="<?php echo $id_col6_IV = $row_get_pener_4_proceeding['Id']; ?>" />

				<!-------------- MAKLUMAT 1 ---------------->
				<tr style="background: #f3f7f9; line-height: 1.8em;">
				<td align="right"><b>Maklumat <?php echo $table_len_6_IV; ?></b></td>
				<td></td>
				<td colspan="4" style="float: right;"><a style="font-weight: bold; font-size: 1.3em; padding-right: 5px;" onclick="return confirm('Adakah anda pasti untuk hapuskan rekod ini?')"
		href="?p=tab_penyelidikan&col6_IV=<?php echo $id_col6_IV; ?>" title="BATAL">
			X</a></td>
</tr>
<!-------------- MAKLUMAT 1 ---------------->

<!-------------- SPACING ---------------->
<tr>
		<td>&nbsp;</td><td></td><td></td>
</tr>
<!-------------- SPACING ---------------->
		</tr>
		<!-------------- MAKLUMAT 1 ---------------->
		
		
			<tr>
					<td  align="right" style="width: 10%;">Nama Penulis</td>
					<td  align="center" style="width: 5%;">&nbsp;</td>
					<td colspan="4">
						<input class="input_max_large"
							type="text"
							id="txt6_pener_4_proceeding_nama_penulis<?php echo $table_len_6_IV; ?>"
							name="txt6_pener_4_proceeding_nama_penulis<?php echo $table_len_6_IV; ?>"  
							value="<?php echo $row_get_pener_4_proceeding['NamaPenulis']; ?>" 
							maxlength="80"  
							autocomplete="off"
						/>
					</td>
			</tr>
		
			<tr>
					<td  align="right">Tajuk</td>
					<td  align="center">&nbsp;</td>
					<td colspan="4">
						<input class="input_max_large"
							type="text"
							id="txt6_pener_4_proceeding_tajuk"
							name="txt6_pener_4_proceeding_tajuk<?php echo $table_len_6_IV; ?>"  
							value="<?php echo $row_get_pener_4_proceeding['Tajuk']; ?>" 
							maxlength="80"  
							autocomplete="off"
						/>
					</td>
			</tr>

			<tr>
					<td  align="right">Persidangan</td>
					<td  align="center">&nbsp;</td>
					<td colspan="4">
						<input class="input_max_large"
							type="text"
							id="txt6_pener_4_proceeding_persidangan"
							name="txt6_pener_4_proceeding_persidangan<?php echo $table_len_6_IV; ?>"  
							value="<?php echo $row_get_pener_4_proceeding['Persidangan']; ?>" 
							maxlength="80"  
							autocomplete="off"
						/>
					</td>
			</tr>
		
			<tr>
		<td  align="right">Tahun</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4">
			<select name="txt6_pener_4_proceeding_tahun<?php echo $table_len_6_IV; ?>" style="width: 110px;">
				<option value="" selected>Pilih Tahun</option>

				<?php

					$curr_year = date("Y");

					for($i=$curr_year; $i>=1940; $i--){
					?>

						<option <?php if($i == $row_get_pener_4_proceeding['Tahun']){ echo "selected"; } ?>>
								<?php echo $i; ?> 
						</option>
					<?php
					}
				?>
			</select>
	</td>
</tr>

		
			
<tr>

		<?php
		 $table_len_6_IV++;
	}

	?>


					<!----------------------------------- TD MAKLUMAT TAMBAHAN 6-IV --------------------------------->
																	<tbody class="div_added_kolum_6_IV"></tbody>
					<!----------------------------------- TD MAKLUMAT TAMBAHAN 6-IV --------------------------------->

			<!------------------------------------- BUTTON TAMBAH 6-IV of 18 ------------------------------------->
				<td colspan="6">
						<center>
							<button id="btn_tambah_6-IV" class="btn btn-success" type="button" name="btn_tambah_1">+ TAMBAH</button>
						</center>
				</td>
			</tr>
		
			<tr>
			<td colspan="6">&nbsp;</td>
		</tr>










	<!---------- 6 PART V: MEDIA MASA --------------------->
	<tr>
					<td  align="right"><i><b>Media Masa</b></i></td>
					<td  align="center">&nbsp;</td>
					<td colspan="4">
					</td>
		</tr>
		

<?php

$query_get_pener_5_media_masa = "SELECT
																			Id,
																			Newspaper,
																			Radio,
																			Tv,
																			Popular,
																			Magazine,
																			Nama,
																			Tajuk,
																			Tempat,
																			Tarikh
																			FROM
																			rek_penerbitan_5_media_masa
																			WHERE
																			IdPemohon = '$applicant'
																			";

	$result_get_pener_5_media_masa = mysql_query($query_get_pener_5_media_masa);
	$total_pener_5_media_masa = mysql_num_rows($result_get_pener_5_media_masa);



	$table_len_6_V = 1;


	if($total_pener_5_media_masa == 0){

	?>

<tr>
			<td colspan="6">&nbsp;</td>
		</tr>
	
		
		<!-------------- MAKLUMAT 1 ---------------->
		<tr>
				<td align="right"><b>Maklumat <?php echo $table_len_6_V; ?></b></td>
				<td></td>
				<td colspan="4"></td>
		</tr>
		<!-------------- MAKLUMAT 1 ---------------->
		
		
			<tr>
					<td  align="right" style="width: 10%;">Newspaper</td>
					<td  align="center" style="width: 5%;">&nbsp;</td>
					<td colspan="4">
						<input class="input_max_large"
							type="text"
							id="txt6_pener_5_media_masa_newspaper<?php echo $table_len_6_V; ?>"
							name="txt6_pener_5_media_masa_newspaper<?php echo $table_len_6_V; ?>"  
							value="<?php echo $row_get_pener_5_media_masa['Newspaper']; ?>" 
							maxlength="80"  
							autocomplete="off"
						/>
					</td>
			</tr>
		
			<tr>
					<td  align="right">Radio</td>
					<td  align="center">&nbsp;</td>
					<td colspan="4">
						<input class="input_max_large"
							type="text"
							id="txt6_pener_5_media_masa_radio"
							name="txt6_pener_5_media_masa_radio<?php echo $table_len_6_V; ?>"  
							value="<?php echo $row_get_pener_5_media_masa['Radio']; ?>" 
							maxlength="80"  
							autocomplete="off"
						/>
					</td>
			</tr>

			<tr>
					<td  align="right">Tv</td>
					<td  align="center">&nbsp;</td>
					<td colspan="4">
						<input class="input_max_large"
							type="text"
							id="txt6_pener_5_media_masa_tv"
							name="txt6_pener_5_media_masa_tv<?php echo $table_len_6_V; ?>"  
							value="<?php echo $row_get_pener_5_media_masa['Tv']; ?>" 
							maxlength="80"  
							autocomplete="off"
						/>
					</td>
			</tr>

			<tr>
					<td  align="right" style="width: 10%;">Popular</td>
					<td  align="center" style="width: 5%;">&nbsp;</td>
					<td colspan="4">
						<input class="input_max_large"
							type="text"
							id="txt6_pener_5_media_masa_popular<?php echo $table_len_6_V; ?>"
							name="txt6_pener_5_media_masa_popular<?php echo $table_len_6_V; ?>"  
							value="<?php echo $row_get_pener_5_media_masa['Popular']; ?>" 
							maxlength="80"  
							autocomplete="off"
						/>
					</td>
			</tr>
		
			<tr>
					<td  align="right">Magazine</td>
					<td  align="center">&nbsp;</td>
					<td colspan="4">
						<input class="input_max_large"
							type="text"
							id="txt6_pener_5_media_masa_magazine"
							name="txt6_pener_5_media_masa_magazine<?php echo $table_len_6_V; ?>"  
							value="<?php echo $row_get_pener_5_media_masa['Magazine']; ?>" 
							maxlength="80"  
							autocomplete="off"
						/>
					</td>
			</tr>

			<tr>
					<td  align="right">Nama</td>
					<td  align="center">&nbsp;</td>
					<td colspan="4">
						<input class="input_max_large"
							type="text"
							id="txt6_pener_5_media_masa_nama"
							name="txt6_pener_5_media_masa_nama<?php echo $table_len_6_V; ?>"  
							value="<?php echo $row_get_pener_5_media_masa['Nama']; ?>" 
							maxlength="80"  
							autocomplete="off"
						/>
					</td>
			</tr>

			<tr>
					<td  align="right">Tajuk</td>
					<td  align="center">&nbsp;</td>
					<td colspan="4">
						<input class="input_max_large"
							type="text"
							id="txt6_pener_5_media_masa_tajuk"
							name="txt6_pener_5_media_masa_tajuk<?php echo $table_len_6_V; ?>"  
							value="<?php echo $row_get_pener_5_media_masa['Tajuk']; ?>" 
							maxlength="80"  
							autocomplete="off"
						/>
					</td>
			</tr>

			<tr>
					<td  align="right">Tempat</td>
					<td  align="center">&nbsp;</td>
					<td colspan="4">
						<input class="input_max_large"
							type="text"
							id="txt6_pener_5_media_masa_tempat"
							name="txt6_pener_5_media_masa_tempat<?php echo $table_len_6_V; ?>"  
							value="<?php echo $row_get_pener_5_media_masa['Tempat']; ?>" 
							maxlength="80"  
							autocomplete="off"
						/>
					</td>
			</tr>

			<tr>
		<td  align="right">Tarikh</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4">
			<input
				type="text"
				name="txt6_pener_5_media_masa_tarikh<?php echo $table_len_6_V; ?>" 
				id="" 
				style="width: 100px;" 
				value="<?php echo $pener_5_media_masa_tarikh_std; ?>" 
				maxlength="10"  
				autocomplete="off"
				/>
				<span> <i>&nbsp;Format: dd-mm-yyyy (Cth: 31-01-2018)</i></span>
	</td>
</tr>
		
	
<tr>
		<?php
		 $table_len_6_V++;

		 			
	}


	while($row_get_pener_5_media_masa = mysql_fetch_assoc($result_get_pener_5_media_masa)){


				//convert date to STD format
				$pener_5_media_masa_tarikh_db = $row_get_pener_5_media_masa['Tarikh'];
						
				$pener_5_media_masa_tarikh_std = date("d-m-Y", strtotime($pener_5_media_masa_tarikh_db));


				if($pener_5_media_masa_tarikh_std == '01-01-1970'){
					$pener_5_media_masa_tarikh_std = '';
				}

		?>

<tr>
			<td colspan="6">&nbsp;</td>
		</tr>

		<input type="hidden" name="id_6_V<?php echo $table_len_6_V; ?>" value="<?php echo $id_col6_V = $row_get_pener_5_media_masa['Id']; ?>" />

				<!-------------- MAKLUMAT 1 ---------------->
				<tr style="background: #f3f7f9; line-height: 1.8em;">
				<td align="right"><b>Maklumat <?php echo $table_len_6_V; ?></b></td>
				<td></td>
				<td colspan="4" style="float: right;"><a style="font-weight: bold; font-size: 1.3em; padding-right: 5px;" onclick="return confirm('Adakah anda pasti untuk hapuskan rekod ini?')"
		href="?p=tab_penyelidikan&col6_V=<?php echo $id_col6_V; ?>" title="BATAL">
			X</a></td>
</tr>
<!-------------- MAKLUMAT 1 ---------------->

<!-------------- SPACING ---------------->
<tr>
		<td>&nbsp;</td><td></td><td></td>
</tr>
<!-------------- SPACING ---------------->
		</tr>
		<!-------------- MAKLUMAT 1 ---------------->
		
		
		<tr>
					<td  align="right" style="width: 10%;">Newspaper</td>
					<td  align="center" style="width: 5%;">&nbsp;</td>
					<td colspan="4">
						<input class="input_max_large"
							type="text"
							id="txt6_pener_5_media_masa_newspaper<?php echo $table_len_6_V; ?>"
							name="txt6_pener_5_media_masa_newspaper<?php echo $table_len_6_V; ?>"  
							value="<?php echo $row_get_pener_5_media_masa['Newspaper']; ?>" 
							maxlength="80"  
							autocomplete="off"
						/>
					</td>
			</tr>
		
			<tr>
					<td  align="right">Radio</td>
					<td  align="center">&nbsp;</td>
					<td colspan="4">
						<input class="input_max_large"
							type="text"
							id="txt6_pener_5_media_masa_radio"
							name="txt6_pener_5_media_masa_radio<?php echo $table_len_6_V; ?>"  
							value="<?php echo $row_get_pener_5_media_masa['Radio']; ?>" 
							maxlength="80"  
							autocomplete="off"
						/>
					</td>
			</tr>

			<tr>
					<td  align="right">Tv</td>
					<td  align="center">&nbsp;</td>
					<td colspan="4">
						<input class="input_max_large"
							type="text"
							id="txt6_pener_5_media_masa_tv"
							name="txt6_pener_5_media_masa_tv<?php echo $table_len_6_V; ?>"  
							value="<?php echo $row_get_pener_5_media_masa['Tv']; ?>" 
							maxlength="80"  
							autocomplete="off"
						/>
					</td>
			</tr>

			<tr>
					<td  align="right" style="width: 10%;">Popular</td>
					<td  align="center" style="width: 5%;">&nbsp;</td>
					<td colspan="4">
						<input class="input_max_large"
							type="text"
							id="txt6_pener_5_media_masa_popular<?php echo $table_len_6_V; ?>"
							name="txt6_pener_5_media_masa_popular<?php echo $table_len_6_V; ?>"  
							value="<?php echo $row_get_pener_5_media_masa['Popular']; ?>" 
							maxlength="80"  
							autocomplete="off"
						/>
					</td>
			</tr>
		
			<tr>
					<td  align="right">Magazine</td>
					<td  align="center">&nbsp;</td>
					<td colspan="4">
						<input class="input_max_large"
							type="text"
							id="txt6_pener_5_media_masa_magazine"
							name="txt6_pener_5_media_masa_magazine<?php echo $table_len_6_V; ?>"  
							value="<?php echo $row_get_pener_5_media_masa['Magazine']; ?>" 
							maxlength="80"  
							autocomplete="off"
						/>
					</td>
			</tr>

			<tr>
					<td  align="right">Nama</td>
					<td  align="center">&nbsp;</td>
					<td colspan="4">
						<input class="input_max_large"
							type="text"
							id="txt6_pener_5_media_masa_nama"
							name="txt6_pener_5_media_masa_nama<?php echo $table_len_6_V; ?>"  
							value="<?php echo $row_get_pener_5_media_masa['Nama']; ?>" 
							maxlength="80"  
							autocomplete="off"
						/>
					</td>
			</tr>

			<tr>
					<td  align="right">Tajuk</td>
					<td  align="center">&nbsp;</td>
					<td colspan="4">
						<input class="input_max_large"
							type="text"
							id="txt6_pener_5_media_masa_tajuk"
							name="txt6_pener_5_media_masa_tajuk<?php echo $table_len_6_V; ?>"  
							value="<?php echo $row_get_pener_5_media_masa['Tajuk']; ?>" 
							maxlength="80"  
							autocomplete="off"
						/>
					</td>
			</tr>

			<tr>
					<td  align="right">Tempat</td>
					<td  align="center">&nbsp;</td>
					<td colspan="4">
						<input class="input_max_large"
							type="text"
							id="txt6_pener_5_media_masa_tempat"
							name="txt6_pener_5_media_masa_tempat<?php echo $table_len_6_V; ?>"  
							value="<?php echo $row_get_pener_5_media_masa['Tempat']; ?>" 
							maxlength="80"  
							autocomplete="off"
						/>
					</td>
			</tr>

			<tr>
		<td  align="right">Tarikh</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4">
			<input
				type="text"
				name="txt6_pener_5_media_masa_tarikh<?php echo $table_len_6_V; ?>" 
				id="" 
				style="width: 100px;" 
				value="<?php echo $pener_5_media_masa_tarikh_std; ?>" 
				maxlength="10"  
				autocomplete="off"
				/>
				<span> <i>&nbsp;Format: dd-mm-yyyy (Cth: 31-01-2018)</i></span>
	</td>
</tr>

			
		
			
<tr>
		<?php
		 $table_len_6_V++;
	}

	?>

					<!----------------------------------- TD MAKLUMAT TAMBAHAN 6-V --------------------------------->
																<tbody class="div_added_kolum_6_V"></tbody>
					<!----------------------------------- TD MAKLUMAT TAMBAHAN 6-V --------------------------------->
		
				<!------------------------------------- BUTTON TAMBAH 6-V of 18 ------------------------------------->
				<td colspan="6">
						<center>
							<button id="btn_tambah_6-V" class="btn btn-success" type="button" name="btn_tambah_1">+ TAMBAH</button>
						</center>
				</td>
			</tr>
		
			<tr>
			<td colspan="6">&nbsp;</td>
		</tr>













<!---------- 6 PART VI: MEDIA LAIN --------------------->
	<tr>
					<td  align="right"><i><b>Media-media Lain</b></i></td>
					<td  align="center">&nbsp;</td>
					<td colspan="4">
					</td>
		</tr>
		

<?php

$query_get_pener_6_media_lain = "SELECT
																			Id,
																			Tape,
																			Video,
																			Internet,
																			Nama,
																			Tajuk,
																			Tempat,
																			Tarikh
																			FROM
																			rek_penerbitan_6_media_lain
																			WHERE
																			IdPemohon = '$applicant'
																			";

	$result_get_pener_6_media_lain = mysql_query($query_get_pener_6_media_lain);
	$total_pener_6_media_lain = mysql_num_rows($result_get_pener_6_media_lain);



	$table_len_6_VI = 1;


	if($total_pener_6_media_lain == 0){

	?>

<tr>
			<td colspan="6">&nbsp;</td>
		</tr>
		
		<!-------------- MAKLUMAT 1 ---------------->
		<tr>
				<td align="right"><b>Maklumat <?php echo $table_len_6_VI; ?></b></td>
				<td></td>
				<td colspan="4"></td>
		</tr>
		<!-------------- MAKLUMAT 1 ---------------->
		
		
			<tr>
					<td  align="right" style="width: 10%;">Tape</td>
					<td  align="center" style="width: 5%;">&nbsp;</td>
					<td colspan="4">
						<input class="input_max_large"
							type="text"
							id="txt6_pener_6_media_lain_tape<?php echo $table_len_6_VI; ?>"
							name="txt6_pener_6_media_lain_tape<?php echo $table_len_6_VI; ?>"  
							value="<?php echo $row_get_pener_6_media_lain['Tape']; ?>" 
							maxlength="80"  
							autocomplete="off"
						/>
					</td>
			</tr>
		
			<tr>
					<td  align="right">Video</td>
					<td  align="center">&nbsp;</td>
					<td colspan="4">
						<input class="input_max_large"
							type="text"
							id="txt6_pener_6_media_lain_video"
							name="txt6_pener_6_media_lain_video<?php echo $table_len_6_VI; ?>"  
							value="<?php echo $row_get_pener_6_media_lain['Video']; ?>" 
							maxlength="80"  
							autocomplete="off"
						/>
					</td>
			</tr>

			<tr>
					<td  align="right">Internet</td>
					<td  align="center">&nbsp;</td>
					<td colspan="4">
						<input class="input_max_large"
							type="text"
							id="txt6_pener_6_media_lain_internet"
							name="txt6_pener_6_media_lain_internet<?php echo $table_len_6_VI; ?>"  
							value="<?php echo $row_get_pener_6_media_lain['Internet']; ?>" 
							maxlength="80"  
							autocomplete="off"
						/>
					</td>
			</tr>


			<tr>
					<td  align="right">Nama</td>
					<td  align="center">&nbsp;</td>
					<td colspan="4">
						<input class="input_max_large"
							type="text"
							id="txt6_pener_6_media_lain_nama"
							name="txt6_pener_6_media_lain_nama<?php echo $table_len_6_VI; ?>"  
							value="<?php echo $row_get_pener_6_media_lain['Nama']; ?>" 
							maxlength="80"  
							autocomplete="off"
						/>
					</td>
			</tr>

			<tr>
					<td  align="right">Tajuk</td>
					<td  align="center">&nbsp;</td>
					<td colspan="4">
						<input class="input_max_large"
							type="text"
							id="txt6_pener_6_media_lain_tajuk"
							name="txt6_pener_6_media_lain_tajuk<?php echo $table_len_6_VI; ?>"  
							value="<?php echo $row_get_pener_6_media_lain['Tajuk']; ?>" 
							maxlength="80"  
							autocomplete="off"
						/>
					</td>
			</tr>

			<tr>
					<td  align="right">Tempat</td>
					<td  align="center">&nbsp;</td>
					<td colspan="4">
						<input class="input_max_large"
							type="text"
							id="txt6_pener_6_media_lain_tempat"
							name="txt6_pener_6_media_lain_tempat<?php echo $table_len_6_VI; ?>"  
							value="<?php echo $row_get_pener_6_media_lain['Tempat']; ?>" 
							maxlength="80"  
							autocomplete="off"
						/>
					</td>
			</tr>

			<tr>
		<td  align="right">Tarikh</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4">
			<input
				type="text"
				name="txt6_pener_6_media_lain_tarikh<?php echo $table_len_6_VI; ?>" 
				id="" 
				style="width: 100px;" 
				value="<?php echo $pener_6_media_lain_tarikh_std; ?>" 
				maxlength="10"  
				autocomplete="off"
				/>
				<span> <i>&nbsp;Format: dd-mm-yyyy (Cth: 31-01-2018)</i></span>
	</td>
</tr>
		
	
<tr>
		<?php
		 $table_len_6_VI++;

		 			
	}


	while($row_get_pener_6_media_lain = mysql_fetch_assoc($result_get_pener_6_media_lain)){


				//convert date to STD format
				$pener_6_media_lain_tarikh_db = $row_get_pener_6_media_lain['Tarikh'];
						
				$pener_6_media_lain_tarikh_std = date("d-m-Y", strtotime($pener_6_media_lain_tarikh_db));


				if($pener_6_media_lain_tarikh_std == '01-01-1970'){
					$pener_6_media_lain_tarikh_std = '';
				}

		?>

		<tr>
			<td colspan="6">&nbsp;</td>
		</tr>

		<input type="hidden" name="id_6_VI<?php echo $table_len_6_VI; ?>" value="<?php echo $id_col6_VI = $row_get_pener_6_media_lain['Id']; ?>" />

				<!-------------- MAKLUMAT 1 ---------------->
				<tr style="background: #f3f7f9; line-height: 1.8em;">
				<td align="right"><b>Maklumat <?php echo $table_len_6_VI; ?></b></td>
				<td></td>
				<td colspan="4" style="float: right;"><a style="font-weight: bold; font-size: 1.3em; padding-right: 5px;" onclick="return confirm('Adakah anda pasti untuk hapuskan rekod ini?')"
		href="?p=tab_penyelidikan&col6_VI=<?php echo $id_col6_VI; ?>" title="BATAL">
			X</a></td>
</tr>
<!-------------- MAKLUMAT 1 ---------------->

<!-------------- SPACING ---------------->
<tr>
		<td>&nbsp;</td><td></td><td></td>
</tr>
<!-------------- SPACING ---------------->
		</tr>
		<!-------------- MAKLUMAT 1 ---------------->
		
		
		<tr>
					<td  align="right" style="width: 10%;">Tape</td>
					<td  align="center" style="width: 5%;">&nbsp;</td>
					<td colspan="4">
						<input class="input_max_large"
							type="text"
							id="txt6_pener_6_media_lain_tape<?php echo $table_len_6_VI; ?>"
							name="txt6_pener_6_media_lain_tape<?php echo $table_len_6_VI; ?>"  
							value="<?php echo $row_get_pener_6_media_lain['Tape']; ?>" 
							maxlength="80"  
							autocomplete="off"
						/>
					</td>
			</tr>
		
			<tr>
					<td  align="right">Video</td>
					<td  align="center">&nbsp;</td>
					<td colspan="4">
						<input class="input_max_large"
							type="text"
							id="txt6_pener_6_media_lain_video"
							name="txt6_pener_6_media_lain_video<?php echo $table_len_6_VI; ?>"  
							value="<?php echo $row_get_pener_6_media_lain['Video']; ?>" 
							maxlength="80"  
							autocomplete="off"
						/>
					</td>
			</tr>

			<tr>
					<td  align="right">Internet</td>
					<td  align="center">&nbsp;</td>
					<td colspan="4">
						<input class="input_max_large"
							type="text"
							id="txt6_pener_6_media_lain_internet"
							name="txt6_pener_6_media_lain_internet<?php echo $table_len_6_VI; ?>"  
							value="<?php echo $row_get_pener_6_media_lain['Internet']; ?>" 
							maxlength="80"  
							autocomplete="off"
						/>
					</td>
			</tr>


			<tr>
					<td  align="right">Nama</td>
					<td  align="center">&nbsp;</td>
					<td colspan="4">
						<input class="input_max_large"
							type="text"
							id="txt6_pener_6_media_lain_nama"
							name="txt6_pener_6_media_lain_nama<?php echo $table_len_6_VI; ?>"  
							value="<?php echo $row_get_pener_6_media_lain['Nama']; ?>" 
							maxlength="80"  
							autocomplete="off"
						/>
					</td>
			</tr>

			<tr>
					<td  align="right">Tajuk</td>
					<td  align="center">&nbsp;</td>
					<td colspan="4">
						<input class="input_max_large"
							type="text"
							id="txt6_pener_6_media_lain_tajuk"
							name="txt6_pener_6_media_lain_tajuk<?php echo $table_len_6_VI; ?>"  
							value="<?php echo $row_get_pener_6_media_lain['Tajuk']; ?>" 
							maxlength="80"  
							autocomplete="off"
						/>
					</td>
			</tr>

			<tr>
					<td  align="right">Tempat</td>
					<td  align="center">&nbsp;</td>
					<td colspan="4">
						<input class="input_max_large"
							type="text"
							id="txt6_pener_6_media_lain_tempat"
							name="txt6_pener_6_media_lain_tempat<?php echo $table_len_6_VI; ?>"  
							value="<?php echo $row_get_pener_6_media_lain['Tempat']; ?>" 
							maxlength="80"  
							autocomplete="off"
						/>
					</td>
			</tr>

			<tr>
		<td  align="right">Tarikh</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4">
			<input
				type="text"
				name="txt6_pener_6_media_lain_tarikh<?php echo $table_len_6_VI; ?>" 
				id="" 
				style="width: 100px;" 
				value="<?php echo $pener_6_media_lain_tarikh_std; ?>" 
				maxlength="10"  
				autocomplete="off"
				/>
				<span> <i>&nbsp;Format: dd-mm-yyyy (Cth: 31-01-2018)</i></span>
	</td>
</tr>

		
				
			<tr>



		<?php
		 $table_len_6_VI++;
	}

	?>
				<!----------------------------------- TD MAKLUMAT TAMBAHAN 6-VI --------------------------------->
													<tbody class="div_added_kolum_6_VI"></tbody>
					<!----------------------------------- TD MAKLUMAT TAMBAHAN 6-VI --------------------------------->

		<!------------------------------------- BUTTON TAMBAH 6-VI of 18 ------------------------------------->
				<td colspan="6">
						<center>
							<button id="btn_tambah_6-VI" class="btn btn-success" type="button" name="btn_tambah_1">+ TAMBAH</button>
						</center>
				</td>
			</tr>
		
			<tr>
			<td colspan="6">&nbsp;</td>
		</tr>
		<td colspan="6" style="display: block; height: 30px;"></td><!-- LINE SPACING (FOR NEXT CATEGORY -->
		
	




	



<!-----------------------------(7 of 18) PENYELIDIKAN ----------------------------------------->
<tr class="tr_sub_title">
  <td colspan="6"><b>&nbsp;&nbsp;&nbsp;7) Penyelidikan</b></td>
</tr>


<?php

$query_get_penyelidikan = "SELECT 
						Id,
						Nama,
						TajukProjek,
						JawatanTugas,
						Sumber,
						Dana,
						Dari,
						Hingga
						FROM
						rek_penyelidikan
						WHERE
						IdPemohon = '$applicant'
						";

$result_get_penyelidikan = mysql_query($query_get_penyelidikan);
$total_penyelidikan = mysql_num_rows($result_get_penyelidikan);


$table_len_7 = 1;

if($total_penyelidikan == 0){

?>

<tr>
	<td colspan="6">&nbsp;</td>
</tr>


<!-------------- MAKLUMAT 1 ---------------->
<tr>
		<td align="right"><b>Maklumat <?php echo $table_len_7; ?></b></td>
		<td></td>
		<td colspan="4"></td>
</tr>
<!-------------- MAKLUMAT 1 ---------------->


<tr>
			<td  align="right">Nama</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input
					class="input_max_large"
					type="text"
					id="txt7_penyelidikan_nama"
					name="txt7_penyelidikan_nama<?php echo $table_len_7; ?>"  
					value="<?php echo $row_get_penyelidikan['Nama']; ?>" 
					maxlength="80"  
					autocomplete="off"
				/>
			</td>
	</tr>
	<tr>
			<td  align="right">Tajuk Projek</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input
					class="input_max_large"
					type="text"
					id="txt7_penyelidikan_tajuk"
					name="txt7_penyelidikan_tajuk<?php echo $table_len_7; ?>"  
					value="<?php echo $row_get_penyelidikan['TajukProjek']; ?>" 
					maxlength="80"  
					autocomplete="off"
				/>
		</td>
	</tr>
	<tr>
		<td  align="right">Jawatan/Tugas</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4">
			<input class="input_max_large"
					type="text"
					id="txt7_penyelidikan_jawatan"
					name="txt7_penyelidikan_jawatan<?php echo $table_len_7; ?>"  
					value="<?php echo $row_get_penyelidikan['JawatanTugas']; ?>" 
					maxlength="80"  
					autocomplete="off"
				/>
	</td>
</tr>
<tr>
		<td  align="right">Sumber</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4">
			<input 
				class="input_max_large" 
				type="text"
				id="txt7_penyelidikan_sumber"
				name="txt7_penyelidikan_sumber<?php echo $table_len_7; ?>"  
				value="<?php echo $row_get_penyelidikan['Sumber']; ?>" 
				maxlength="80"  
				autocomplete="off"
			/>
	</td>
</tr>

<tr>
		<td  align="right">Dana</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4">
			<input 
				class="input_max_large" 
				type="text"
				id="txt7_penyelidikan_dana"
				name="txt7_penyelidikan_dana<?php echo $table_len_7; ?>"  
				value="<?php echo $row_get_penyelidikan['Dana']; ?>" 
				maxlength="80"  
				autocomplete="off"
			/>
	</td>
</tr>

<tr>
		<td  align="right">Dari</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4">
			<input
				type="text" 
				id="txt7_penyelidikan_tarikh_mula" 
				name="txt7_penyelidikan_tarikh_mula<?php echo $table_len_7; ?>" 
				value="<?php echo $penyelidikan_tarikh_mula_std; ?>"
				style="width: 100px;" 
				maxlength="10"  
				autocomplete= "off"
			/>
			<span> <i>&nbsp;Format: dd-mm-yyyy (Cth: 31-01-2018)</i></span>
	</td>
</tr>

<tr>
		<td  align="right">Hingga</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4">
			<input
				type="text"
				id="txt7_penyelidikan_tarikh_tamat" 
				name="txt7_penyelidikan_tarikh_tamat<?php echo $table_len_7; ?>" 
				value="<?php echo $penyelidikan_tarikh_tamat_std; ?>" 
				style="width: 100px;" 
				maxlength="10" 
				autocomplete= "off"
			 />
			 <span> <i>&nbsp;Format: dd-mm-yyyy (Cth: 31-01-2018)</i></span>
	</td>
</tr>





<?php 
	$table_len_7++;
}



	while($row_get_penyelidikan = mysql_fetch_assoc($result_get_penyelidikan)){

//convert date to STD format
$penyelidikan_tarikh_mula_db = $row_get_penyelidikan['Dari'];
$penyelidikan_tarikh_tamat_db = $row_get_penyelidikan['Hingga'];
$penyelidikan_tarikh_mula_std = date("d-m-Y", strtotime($penyelidikan_tarikh_mula_db));
$penyelidikan_tarikh_tamat_std = date("d-m-Y", strtotime($penyelidikan_tarikh_tamat_db));

if($penyelidikan_tarikh_mula_std == '01-01-1970'){
	$penyelidikan_tarikh_mula_std = '';
}
if($penyelidikan_tarikh_tamat_std == '01-01-1970'){
	$penyelidikan_tarikh_tamat_std = '';
}


?>

<tr>
	<td colspan="6">&nbsp;</td>
</tr>

<input type="hidden" name="id_7<?php echo $table_len_7; ?>" value="<?php echo $id_col7 = $row_get_penyelidikan['Id']; ?>" />

<!-------------- MAKLUMAT 1 ---------------->
<tr style="background: #f3f7f9; line-height: 1.8em;">
		<td align="right"><b>Maklumat <?php echo $table_len_7; ?></b></td>
		<td></td>
		<td colspan="4" style="float: right;"><a style="font-weight: bold; font-size: 1.3em; padding-right: 5px;" onclick="return confirm('Adakah anda pasti untuk hapuskan rekod ini?')"
		href="?p=tab_penyelidikan&col7=<?php echo $id_col7; ?>" title="BATAL">
			X</a></td>
</tr>
<!-------------- MAKLUMAT 1 ---------------->

<!-------------- SPACING ---------------->
<tr>
		<td>&nbsp;</td><td></td><td></td>
</tr>
<!-------------- SPACING ---------------->
</tr>
<!-------------- MAKLUMAT 1 ---------------->


<tr>
			<td  align="right">Nama</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input
					class="input_max_large"
					type="text"
					id="txt7_penyelidikan_nama"
					name="txt7_penyelidikan_nama<?php echo $table_len_7; ?>"  
					value="<?php echo $row_get_penyelidikan['Nama']; ?>" 
					maxlength="80"  
					autocomplete="off"
				/>
			</td>
	</tr>
	<tr>
			<td  align="right">Tajuk Projek</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input
					class="input_max_large"
					type="text"
					id="txt7_penyelidikan_tajuk"
					name="txt7_penyelidikan_tajuk<?php echo $table_len_7; ?>"  
					value="<?php echo $row_get_penyelidikan['TajukProjek']; ?>" 
					maxlength="80"  
					autocomplete="off"
				/>
		</td>
	</tr>
	<tr>
		<td  align="right">Jawatan/Tugas</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4">
			<input class="input_max_large"
					type="text"
					id="txt7_penyelidikan_jawatan"
					name="txt7_penyelidikan_jawatan<?php echo $table_len_7; ?>"  
					value="<?php echo $row_get_penyelidikan['JawatanTugas']; ?>" 
					maxlength="80"  
					autocomplete="off"
				/>
	</td>
</tr>
<tr>
		<td  align="right">Sumber</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4">
			<input 
				class="input_max_large" 
				type="text"
				id="txt7_penyelidikan_sumber"
				name="txt7_penyelidikan_sumber<?php echo $table_len_7; ?>"  
				value="<?php echo $row_get_penyelidikan['Sumber']; ?>" 
				maxlength="80"  
				autocomplete="off"
			/>
	</td>
</tr>

<tr>
		<td  align="right">Dana</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4">
			<input 
				class="input_max_large" 
				type="text"
				id="txt7_penyelidikan_dana"
				name="txt7_penyelidikan_dana<?php echo $table_len_7; ?>"  
				value="<?php echo $row_get_penyelidikan['Dana']; ?>" 
				maxlength="80"  
				autocomplete="off"
			/>
	</td>
</tr>

<tr>
		<td  align="right">Dari</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4">
			<input
				type="text" 
				id="txt7_penyelidikan_tarikh_mula" 
				name="txt7_penyelidikan_tarikh_mula<?php echo $table_len_7; ?>" 
				value="<?php echo $penyelidikan_tarikh_mula_std; ?>"
				style="width: 100px;" 
				maxlength="10"  
				autocomplete= "off"
			/>
			<span> <i>&nbsp;Format: dd-mm-yyyy (Cth: 31-01-2018)</i></span>
	</td>
</tr>

<tr>
		<td  align="right">Hingga</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4">
			<input
				type="text"
				id="txt7_penyelidikan_tarikh_tamat" 
				name="txt7_penyelidikan_tarikh_tamat<?php echo $table_len_7; ?>" 
				value="<?php echo $penyelidikan_tarikh_tamat_std; ?>" 
				style="width: 100px;" 
				maxlength="10" 
				autocomplete= "off"
			 />
			 <span> <i>&nbsp;Format: dd-mm-yyyy (Cth: 31-01-2018)</i></span>
	</td>
</tr>



<?php
		$table_len_7++;
	}
?>


<!----------------------------------- TD MAKLUMAT TAMBAHAN 7 --------------------------------->
												<tbody class="div_added_kolum_7"></tbody>
<!----------------------------------- TD MAKLUMAT TAMBAHAN 7 --------------------------------->


<!------------------------------------- BUTTON TAMBAH 7 of 18 ------------------------------------->
	<tr>
		<td colspan="6">
				<center>
					<button id="btn_tambah_7" class="btn btn-success" type="button" name="btn_tambah_1">+ TAMBAH</button>
				</center>
		</td>
	</tr>

<tr>
	<td colspan="6">&nbsp;</td>
</tr>
<td colspan="6" style="display: block; height: 30px;"></td><!-- LINE SPACING (FOR NEXT CATEGORY -->




<!------------------------(8 of 18) CONSULTANCY PROJECT/CONSULTANCY ---------------------->
<tr class="tr_sub_title">
  <td colspan="6"><b>&nbsp;&nbsp;&nbsp;8) <i>Konsultansi/Projek Konsultansi</i></b></td>
</tr>


<?php

$query_get_konsultan = "SELECT 
						Id,
						TajukProjek,
						JawatanPeranan,
						Dari,
						Hingga,
						Organisasi
						FROM
						rek_konsultan
						WHERE
						IdPemohon = '$applicant'";

$result_get_konsultan = mysql_query($query_get_konsultan);
//$row_get_konsultan = mysql_fetch_assoc($result_get_konsultan);
$total_konsultan = mysql_num_rows($result_get_konsultan);

$table_len_8 = 1;

if($total_konsultan == 0){
?>

<tr>
	<td colspan="6">&nbsp;</td>
</tr>

<!-------------- MAKLUMAT 1 ---------------->
<tr>
		<td align="right"><b>Maklumat <?php echo $table_len_8; ?></b></td>
		<td></td>
		<td colspan="4"></td>
</tr>
<!-------------- MAKLUMAT 1 ---------------->

<tr>
			<td  align="right">Tajuk Projek</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input
					class="input_max_large"
					type="text"
					id="txt8_consultancy_tajuk"
					name="txt8_consultancy_tajuk<?php echo $table_len_8; ?>"  
					value="<?php echo $row_get_konsultan['TajukProjek']; ?>" 
					maxlength="80"  
					autocomplete="off"
				/>
			</td>
	</tr>
	<tr>
			<td  align="right">Jawatan/Peranan</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input
					class="input_max_large"
					type="text" 
					id="txt8_consultancy_jawatan"
					name="txt8_consultancy_jawatan<?php echo $table_len_8; ?>" 
					value="<?php echo $row_get_konsultan['JawatanPeranan']; ?>" 
					maxlength="80"  
					autocomplete="off"
				/>
			</td>
	</tr>

	<tr>
		<td  align="right">Dari</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4">
		<input 
			type="text" 
			id="txt8_consultancy_tarikh_mula"
			name="txt8_consultancy_tarikh_mula<?php echo $table_len_8; ?>"  
			value="<?php echo $konsultan_tarikh_mula_std; ?>" 
			style="width: 100px;"
			maxlength="10"  
			autocomplete="off"
		/>
		<span> <i>&nbsp;Format: dd-mm-yyyy (Cth: 31-01-2018)</i></span>
	</td>
</tr>

<tr>
		<td  align="right">Hingga</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4">
			<input
				type="text" 
				id="txt8_consultancy_tarikh_tamat" 
				name="txt8_consultancy_tarikh_tamat<?php echo $table_len_8; ?>" 
				value="<?php echo $konsultan_tarikh_tamat_std; ?>" 
				style="width: 100px;"
				maxlength="10"  
				autocomplete="off"
			/>
			<span> <i>&nbsp;Format: dd-mm-yyyy (Cth: 31-01-2018)</i></span>
	</td>
</tr>

<tr>
			<td  align="right">Organisasi</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input
					class="input_max_large"
					type="text"
					id="txt8_consultancy_organisasi"
					name="txt8_consultancy_organisasi<?php echo $table_len_8; ?>"  
					value="<?php echo $row_get_konsultan['Organisasi']; ?>" 
					maxlength="80"  
					autocomplete="off"
				/>
			</td>
	</tr>


<?php
	$table_len_8++;
}

	while($row_get_konsultan = mysql_fetch_assoc($result_get_konsultan)){

//convert date to STD format
$konsultan_tarikh_mula_db = $row_get_konsultan['Dari'];
$konsultan_tarikh_tamat_db = $row_get_konsultan['Hingga'];
$konsultan_tarikh_mula_std = date("d-m-Y", strtotime($konsultan_tarikh_mula_db));
$konsultan_tarikh_tamat_std = date("d-m-Y", strtotime($konsultan_tarikh_tamat_db));

if($konsultan_tarikh_mula_std == '01-01-1970'){
	$konsultan_tarikh_mula_std = '';
}
if($konsultan_tarikh_tamat_std == '01-01-1970'){
	$konsultan_tarikh_tamat_std = '';
}

?>


<tr>
	<td colspan="6">&nbsp;</td>
</tr>

<input type="hidden" name="id_8<?php echo $table_len_8; ?>" value="<?php echo $id_col8 = $row_get_konsultan['Id']; ?>" />

<!-------------- MAKLUMAT 1 ---------------->
<tr style="background: #f3f7f9; line-height: 1.8em;">
		<td align="right"><b>Maklumat <?php echo $table_len_8; ?></b></td>
		<td></td>
		<td colspan="4" style="float: right;"><a style="font-weight: bold; font-size: 1.3em; padding-right: 5px;" onclick="return confirm('Adakah anda pasti untuk hapuskan rekod ini?')"
		href="?p=tab_penyelidikan&col8=<?php echo $id_col8; ?>" title="BATAL">
			X</a></td>
</tr>
<!-------------- MAKLUMAT 1 ---------------->

<!-------------- SPACING ---------------->
<tr>
		<td>&nbsp;</td><td></td><td></td>
</tr>
<!-------------- SPACING ---------------->
</tr>
<!-------------- MAKLUMAT 1 ---------------->

<tr>
			<td  align="right">Tajuk Projek</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input
					class="input_max_large"
					type="text"
					id="txt8_consultancy_tajuk"
					name="txt8_consultancy_tajuk<?php echo $table_len_8; ?>"  
					value="<?php echo $row_get_konsultan['TajukProjek']; ?>" 
					maxlength="80"  
					autocomplete="off"
				/>
			</td>
	</tr>
	<tr>
			<td  align="right">Jawatan/Peranan</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input
					class="input_max_large"
					type="text" 
					id="txt8_consultancy_jawatan"
					name="txt8_consultancy_jawatan<?php echo $table_len_8; ?>" 
					value="<?php echo $row_get_konsultan['JawatanPeranan']; ?>" 
					maxlength="80"  
					autocomplete="off"
				/>
			</td>
	</tr>

	<tr>
		<td  align="right">Dari</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4">
		<input 
			type="text" 
			id="txt8_consultancy_tarikh_mula"
			name="txt8_consultancy_tarikh_mula<?php echo $table_len_8; ?>"  
			value="<?php echo $konsultan_tarikh_mula_std; ?>" 
			style="width: 100px;"
			maxlength="10"  
			autocomplete="off"
		/>
		<span> <i>&nbsp;Format: dd-mm-yyyy (Cth: 31-01-2018)</i></span>
	</td>
</tr>

<tr>
		<td  align="right">Hingga</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4">
			<input
				type="text" 
				id="txt8_consultancy_tarikh_tamat" 
				name="txt8_consultancy_tarikh_tamat<?php echo $table_len_8; ?>" 
				value="<?php echo $konsultan_tarikh_tamat_std; ?>" 
				style="width: 100px;"
				maxlength="10"  
				autocomplete="off"
			/>
			<span> <i>&nbsp;Format: dd-mm-yyyy (Cth: 31-01-2018)</i></span>
	</td>
</tr>

<tr>
			<td  align="right">Organisasi</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input
					class="input_max_large"
					type="text"
					id="txt8_consultancy_organisasi"
					name="txt8_consultancy_organisasi<?php echo $table_len_8; ?>"  
					value="<?php echo $row_get_konsultan['Organisasi']; ?>" 
					maxlength="80"  
					autocomplete="off"
				/>
			</td>
	</tr>
	
	

<tr>
	<td colspan="6">&nbsp;</td>
</tr>

<?php
	$table_len_8++;
		}
?>


<!----------------------------------- TD MAKLUMAT TAMBAHAN 8 --------------------------------->
									<tbody class="div_added_kolum_8"></tbody>
<!----------------------------------- TD MAKLUMAT TAMBAHAN 8 --------------------------------->

<!------------------------------------- BUTTON TAMBAH 8 of 18 ------------------------------------->
<tr>
		<td colspan="6">
				<center>
					<button id="btn_tambah_8" class="btn btn-success" type="button" name="btn_tambah_1">+ TAMBAH</button>
				</center>
		</td>
	</tr>

	<tr>
	<td colspan="6">&nbsp;</td>
</tr>
<td colspan="6" style="display: block; height: 30px;"></td><!-- LINE SPACING (FOR NEXT CATEGORY -->







<!------------------------(9 of 18) PEMBENTANGAN ---------------------->
<tr class="tr_sub_title">
  <td colspan="6"><b>&nbsp;&nbsp;&nbsp;9) Pembentangan</b></td>
</tr>



<?php

	$query_get_pembentangan = "SELECT 
								Id,
								Tajuk,
								NamaAcara,
								TarikhPembentangan,
								Penganjur,
								Peringkat
								FROM
								rek_pembentangan
								WHERE
								IdPemohon = '$applicant'";

	$result_get_pembentangan = mysql_query($query_get_pembentangan);
	$total_pembentangan = mysql_num_rows($result_get_pembentangan);

	$table_len_9 = 1;

	if($total_pembentangan == 0){
?>

			<tr>
				<td colspan="6">&nbsp;</td>
			</tr>


		<!-------------- MAKLUMAT 1 ---------------->
<tr>
		<td align="right"><b>Maklumat <?php echo $table_len_9; ?></b></td>
		<td></td>
		<td colspan="4"></td>
</tr>
<!-------------- MAKLUMAT 1 ---------------->

<tr>
			<td  align="right">Tajuk</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input
					class="input_max_large"
					type="text"
					id="txt9_pembentangan_tajuk"
					name="txt9_pembentangan_tajuk<?php echo $table_len_9; ?>"  
					value="<?php echo $row_get_pembentangan['Tajuk']; ?>" 
					maxlength="80" 
					autocomplete="off"
				 />
			</td>
	</tr>
	<tr>
			<td  align="right">Nama Acara</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input
					class="input_max_large"
					type="text"
					id="txt9_pembentangan_nama_acara"
					name="txt9_pembentangan_nama_acara<?php echo $table_len_9; ?>" 
					value="<?php echo $row_get_pembentangan['NamaAcara']; ?>" 
					maxlength="80"  
					autcomplete="off"
				/>
			</td>
	</tr>

	<tr>
		<td  align="right">Tarikh Pembentangan</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4">
			<input
				type="text"
				id="txt9_pembentangan_tarikh"
				name="txt9_pembentangan_tarikh<?php echo $table_len_9; ?>"
				style="width: 100px;" 
				value="<?php echo $pembentangan_tarikh_std; ?>" 
				maxlength="10"  
				autocomplete="off"
			/>
			<span> <i>&nbsp;Format: dd-mm-yyyy (Cth: 31-01-2018)</i></span>
	</td>

	
</tr>

<tr>
		<td  align="right">Penganjur</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4">
			<input 
				class="input_max_large"
				type="text"
				id="txt9_pembentangan_penganjur"
				name="txt9_pembentangan_penganjur<?php echo $table_len_9; ?>" 
				value="<?php echo $row_get_pembentangan['Penganjur']; ?>" 
				maxlength="80"  
				autocomplete="off"
			/>
	</td>
</tr>

<tr>
			<td  align="right">Peringkat</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input 
					class="input_max_large"
					type="text"
					id="txt9_pembentangan_peringkat"
					name="txt9_pembentangan_peringkat<?php echo $table_len_9; ?>" 
					value="<?php echo $row_get_pembentangan['Peringkat']; ?>" 
					maxlength="80"
					autocomplete="off"  
				/>
			</td>
	</tr>



<?php
		$table_len_9++;
	}

	while($row_get_pembentangan = mysql_fetch_assoc($result_get_pembentangan)){

	//convert date to STD format
	$pembentangan_tarikh_db = $row_get_pembentangan['TarikhPembentangan'];
	$pembentangan_tarikh_std = date("d-m-Y", strtotime($pembentangan_tarikh_db));

	if($pembentangan_tarikh_std == '01-01-1970'){
		$pembentangan_tarikh_std = '';
	}


?>



<tr>
	<td colspan="6">&nbsp;</td>
</tr>

<input type="hidden" name="id_9<?php echo $table_len_9; ?>" value="<?php echo $id_col9 = $row_get_pembentangan['Id']; ?>" />

<!-------------- MAKLUMAT 1 ---------------->
<tr style="background: #f3f7f9; line-height: 1.8em;">
		<td align="right"><b>Maklumat <?php echo $table_len_9; ?></b></td>
		<td></td>
		<td colspan="4" style="float: right;"><a style="font-weight: bold; font-size: 1.3em; padding-right: 5px;" onclick="return confirm('Adakah anda pasti untuk hapuskan rekod ini?')"
		href="?p=tab_penyelidikan&col9=<?php echo $id_col9; ?>" title="BATAL">
			X</a></td>
</tr>
<!-------------- MAKLUMAT 1 ---------------->

<!-------------- SPACING ---------------->
<tr>
		<td>&nbsp;</td><td></td><td></td>
</tr>
<!-------------- SPACING ---------------->
</tr>
<!-------------- MAKLUMAT 1 ---------------->

<tr>
			<td  align="right">Tajuk</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input
					class="input_max_large"
					type="text"
					id="txt9_pembentangan_tajuk"
					name="txt9_pembentangan_tajuk<?php echo $table_len_9; ?>"  
					value="<?php echo $row_get_pembentangan['Tajuk']; ?>" 
					maxlength="80" 
					autocomplete="off"
				 />
			</td>
	</tr>
	<tr>
			<td  align="right">Nama Acara</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input
					class="input_max_large"
					type="text"
					id="txt9_pembentangan_nama_acara"
					name="txt9_pembentangan_nama_acara<?php echo $table_len_9; ?>" 
					value="<?php echo $row_get_pembentangan['NamaAcara']; ?>" 
					maxlength="80"  
					autcomplete="off"
				/>
			</td>
	</tr>

	<tr>
		<td  align="right">Tarikh Pembentangan</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4">
			<input
				type="text"
				id="txt9_pembentangan_tarikh"
				name="txt9_pembentangan_tarikh<?php echo $table_len_9; ?>"
				style="width: 100px;" 
				value="<?php echo $pembentangan_tarikh_std; ?>" 
				maxlength="10"  
				autocomplete="off"
			/>
			<span> <i>&nbsp;Format: dd-mm-yyyy (Cth: 31-01-2018)</i></span>
	</td>

	
</tr>

<tr>
		<td  align="right">Penganjur</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4">
			<input 
				class="input_max_large"
				type="text"
				id="txt9_pembentangan_penganjur"
				name="txt9_pembentangan_penganjur<?php echo $table_len_9; ?>" 
				value="<?php echo $row_get_pembentangan['Penganjur']; ?>" 
				maxlength="80"  
				autocomplete="off"
			/>
	</td>
</tr>

<tr>
			<td  align="right">Peringkat</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input 
					class="input_max_large"
					type="text"
					id="txt9_pembentangan_peringkat"
					name="txt9_pembentangan_peringkat<?php echo $table_len_9; ?>" 
					value="<?php echo $row_get_pembentangan['Peringkat']; ?>" 
					maxlength="80"
					autocomplete="off"  
				/>
			</td>
	</tr>



<?php
	$table_len_9++;
	}
?>


<!----------------------------------- TD MAKLUMAT TAMBAHAN 9 --------------------------------->
<tbody class="div_added_kolum_9"></tbody>

<!------------------------------------- BUTTON TAMBAH 9 of 18 ------------------------------------->
<tr>
		<td colspan="6">
				<center>
					<button id="btn_tambah_9" class="btn btn-success" type="button" name="btn_tambah_1">+ TAMBAH</button>
				</center>
		</td>
	</tr>

	<tr>
	<td colspan="6">&nbsp;</td>
</tr>
<td colspan="6" style="display: block; height: 30px;"></td><!-- LINE SPACING (FOR NEXT CATEGORY -->




<!------------------------(10 of 18) PENYELIAAN ---------------------->
<tr class="tr_sub_title">
  <td colspan="6"><b>&nbsp;&nbsp;&nbsp;10) Penyeliaan</b></td>
</tr>


<?php

	$query_get_penyeliaan = "SELECT 
								Id,
								Peringkat,
								Calon,
								Tajuk,
								Semester,
								Status
								FROM
								rek_penyeliaan
								WHERE
								IdPemohon = '$applicant'";

	$result_get_penyeliaan = mysql_query($query_get_penyeliaan);
	$total_penyeliaan = mysql_num_rows($result_get_penyeliaan);
	//$row_get_penyeliaan = mysql_fetch_assoc($result_get_penyeliaan);

	$table_len_10 = 1;

	if($total_penyeliaan == 0){
?>

<tr>
	<td colspan="6">&nbsp;</td>
</tr>


<!-------------- MAKLUMAT 1 ---------------->
<tr>
		<td align="right"><b>Maklumat <?php echo $table_len_10; ?></b></td>
		<td></td>
		<td colspan="4"></td>
</tr>
<!-------------- MAKLUMAT 1 ---------------->

<tr>
			<td  align="right">Peringkat</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4"><span class="control-group">
				<select name="txt10_penyeliaan_peringkat<?php echo $table_len_10; ?>">
					<option value="" selected>Sila Pilih</option>
					<option value="Ijazah Pertama"
						<?php if($row_get_penyeliaan['Peringkat'] == "Ijazah Pertama"){ echo "selected"; } ?>
					>
						Ijazah Pertama
					</option>
					<option value="Diploma"
						<?php if($row_get_penyeliaan['Peringkat'] == "Diploma"){ echo "selected"; } ?>
					>
						Diploma
					</option>
					<option value="Pra-Ijazah"
					<?php if($row_get_penyeliaan['Peringkat'] == "Pra-Ijazah"){ echo "selected"; } ?>
					>
						Pra-Ijazah
					</option>
				</select>
			</td>
	</tr>

	<tr>
			<td  align="right">Calon</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input 
					class="input_max_large"
					type="text"
					id="txt10_penyeliaan_calon"
					name="txt10_penyeliaan_calon<?php echo $table_len_10; ?>" 
					value="<?php echo $row_get_penyeliaan['Calon']; ?>" 
					maxlength="80"  
					autocomplete="off"
				/>
			</td>
	</tr>

	<tr>
		<td  align="right">Tajuk</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4">
			<input 
					class="input_max_large"
					type="text"
					id="txt10_penyeliaan_tajuk"
					name="txt10_penyeliaan_tajuk<?php echo $table_len_10; ?>" 
					value="<?php echo $row_get_penyeliaan['Tajuk']; ?>" 
					maxlength="80"  
				/>
	</td>

	
</tr>

<tr>
		<td  align="right">Semester</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4">
			<input 
					class="input_max_large"
					type="text"
					id="txt10_penyeliaan_semester"
					name="txt10_penyeliaan_semester<?php echo $table_len_10; ?>" 
					value="<?php echo $row_get_penyeliaan['Semester']; ?>" 
					maxlength="80"  
				/>
	</td>
</tr>

<tr>
			<td  align="right">Status</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input 
					class="input_max_large"
					type="text"
					id="txt10_penyeliaan_status"
					name="txt10_penyeliaan_status<?php echo $table_len_10; ?>" 
					value="<?php echo $row_get_penyeliaan['Status']; ?>" 
					maxlength="80"  
				/>
			</td>
	</tr>


<?php 
	$table_len_10++;
	}

	while($row_get_penyeliaan = mysql_fetch_assoc($result_get_penyeliaan)){

?>

<tr>
	<td colspan="6">&nbsp;</td>
</tr>

<input type="hidden" name="id_10<?php echo $table_len_10; ?>" value="<?php echo $id_col10 = $row_get_penyeliaan['Id']; ?>" />

<!-------------- MAKLUMAT 1 ---------------->
<tr style="background: #f3f7f9; line-height: 1.8em;">
		<td align="right"><b>Maklumat <?php echo $table_len_10; ?></b></td>
		<td></td>
		<td colspan="4" style="float: right;"><a style="font-weight: bold; font-size: 1.3em; padding-right: 5px;" onclick="return confirm('Adakah anda pasti untuk hapuskan rekod ini?')"
		href="?p=tab_penyelidikan&col10=<?php echo $id_col10; ?>" title="BATAL">
			X</a></td>
</tr>
<!-------------- MAKLUMAT 1 ---------------->

<!-------------- SPACING ---------------->
<tr>
		<td>&nbsp;</td><td></td><td></td>
</tr>
<!-------------- SPACING ---------------->
</tr>
<!-------------- MAKLUMAT 1 ---------------->

<tr>
			<td  align="right">Peringkat</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4"><span class="control-group">
				<select name="txt10_penyeliaan_peringkat<?php echo $table_len_10; ?>">
					<option value="" selected>Sila Pilih</option>
					<option value="Ijazah Pertama"
						<?php if($row_get_penyeliaan['Peringkat'] == "Ijazah Pertama"){ echo "selected"; } ?>
					>
						Ijazah Pertama
					</option>
					<option value="Diploma"
						<?php if($row_get_penyeliaan['Peringkat'] == "Diploma"){ echo "selected"; } ?>
					>
						Diploma
					</option>
					<option value="Pra-Ijazah"
					<?php if($row_get_penyeliaan['Peringkat'] == "Pra-Ijazah"){ echo "selected"; } ?>
					>
						Pra-Ijazah
					</option>
				</select>
			</td>
	</tr>

	<tr>
			<td  align="right">Calon</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input 
					class="input_max_large"
					type="text"
					id="txt10_penyeliaan_calon"
					name="txt10_penyeliaan_calon<?php echo $table_len_10; ?>" 
					value="<?php echo $row_get_penyeliaan['Calon']; ?>" 
					maxlength="80"  
					autocomplete="off"
				/>
			</td>
	</tr>

	<tr>
		<td  align="right">Tajuk</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4">
			<input 
					class="input_max_large"
					type="text"
					id="txt10_penyeliaan_tajuk"
					name="txt10_penyeliaan_tajuk<?php echo $table_len_10; ?>" 
					value="<?php echo $row_get_penyeliaan['Tajuk']; ?>" 
					maxlength="80"  
				/>
	</td>

	
</tr>

<tr>
		<td  align="right">Semester</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4">
			<input 
					class="input_max_large"
					type="text"
					id="txt10_penyeliaan_semester"
					name="txt10_penyeliaan_semester<?php echo $table_len_10; ?>" 
					value="<?php echo $row_get_penyeliaan['Semester']; ?>" 
					maxlength="80"  
				/>
	</td>
</tr>

<tr>
			<td  align="right">Status</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input 
					class="input_max_large"
					type="text"
					id="txt10_penyeliaan_status"
					name="txt10_penyeliaan_status<?php echo $table_len_10; ?>" 
					value="<?php echo $row_get_penyeliaan['Status']; ?>" 
					maxlength="80"  
				/>
			</td>
	</tr>

	


<?php
			$table_len_10++;
	}
?>

<!----------------------------------- TD MAKLUMAT TAMBAHAN 10 --------------------------------->
										<tbody class="div_added_kolum_10"></tbody>
<!----------------------------------- TD MAKLUMAT TAMBAHAN 10 --------------------------------->

<!------------------------------------- BUTTON TAMBAH 10 of 18 ------------------------------------->
<tr>
		<td colspan="6">
				<center>
					<button id="btn_tambah_10" class="btn btn-success" type="button" name="btn_tambah_1">+ TAMBAH</button>
				</center>
		</td>
	</tr>

	<tr>
	<td colspan="6">&nbsp;</td>
</tr>
<td colspan="6" style="display: block; height: 30px;"></td><!-- LINE SPACING (FOR NEXT CATEGORY -->





<!------------------------(11 of 18) EXPERT LINKAGES ---------------------->
<tr class="tr_sub_title">
  <td colspan="6"><b>&nbsp;&nbsp;&nbsp;11) <i>Expert Linkages</i></b></td>
</tr>


<?php

	$query_get_expert_link = "SELECT 
								Id,
								LinkagesDescription,
								Organisasi,
								TahunPenglibatan,
								Tempoh,
								TahapPeringkat
								FROM
								rek_expert_linkages
								WHERE
								IdPemohon = '$applicant'";

	$result_get_expert_link = mysql_query($query_get_expert_link);
	$total_expert_link = mysql_num_rows($result_get_expert_link);
	//$row_get_expert_link = mysql_fetch_assoc($result_get_expert_link);

	$table_len_11 = 1;

	if($total_expert_link == 0){
?>

<tr>
	<td colspan="6">&nbsp;</td>
</tr>

<!-------------- MAKLUMAT 1 ---------------->
<tr>
		<td align="right"><b>Maklumat <?php echo $table_len_11; ?></b></td>
		<td></td>
		<td colspan="4"></td>
</tr>
<!-------------- MAKLUMAT 1 ---------------->


<tr>
	<td colspan="6">&nbsp;</td>
</tr>
<tr>
			<td  align="right"><i>Linkages Description</i></td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input 
					class="input_max_large"
					type="text"
					id="txt11_expert_link_description<?php echo $table_len_11; ?>"
					name="txt11_expert_link_description<?php echo $table_len_11; ?>" 
					value="<?php echo $row_get_expert_link['LinkagesDescription']; ?>" 
					maxlength="80"  
				/>
			</td>
	</tr>
	<tr>
			<td  align="right">Organisasi</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4"><span class="control-group">
				<input 
					class="input_max_large"
					type="text"
					id="txt11_expert_link_organisasi"
					name="txt11_expert_link_organisasi<?php echo $table_len_11; ?>" 
					value="<?php echo $row_get_expert_link['Organisasi']; ?>" 
					maxlength="80"  
				/>
			</td>
	</tr>

	<tr>
		<td  align="right">Tahun Penglibatan</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4">
			<select name="txt11_expert_link_tahun<?php echo $table_len_11; ?>" style="width: 110px;">
				<option value="" selected>Pilih Tahun</option>

				<?php

					$curr_year = date("Y");

					for($i=$curr_year; $i>=1940; $i--){
					?>

						<option <?php if($i == $row_get_expert_link['TahunPenglibatan']){ echo "selected"; } ?>>
								<?php echo $i; ?> 
						</option>
					<?php
					}
				?>
			</select>
	</td>
</tr>

<tr>
		<td  align="right">Tempoh</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4"><span class="control-group">
			<input 
					class="input_max_large"
					type="text"
					id="txt11_expert_link_tempoh"
					name="txt11_expert_link_tempoh<?php echo $table_len_11; ?>" 
					value="<?php echo $row_get_expert_link['Tempoh']; ?>" 
					maxlength="80"  
				/>
	</td>
</tr>

<tr>
			<td  align="right">Tahap/Peringkat</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4"><span class="control-group">
				<input 
					class="input_max_large"
					type="text"
					id="txt11_expert_link_tahap"
					name="txt11_expert_link_tahap<?php echo $table_len_11; ?>" 
					value="<?php echo $row_get_expert_link['TahapPeringkat']; ?>" 
					maxlength="80"  
				/>
			</td>
	</tr>



<?php 
	$table_len_11++;
	}

	while($row_get_expert_link = mysql_fetch_assoc($result_get_expert_link)){
?>

<tr>
	<td colspan="6">&nbsp;</td>
</tr>

<input type="hidden" name="id_11<?php echo $table_len_11; ?>" value="<?php echo $id_col11 = $row_get_expert_link['Id']; ?>" />

<!-------------- MAKLUMAT 1 ---------------->
<tr style="background: #f3f7f9; line-height: 1.8em;">
		<td align="right"><b>Maklumat <?php echo $table_len_11; ?></b></td>
		<td></td>
		<td colspan="4" style="float: right;"><a style="font-weight: bold; font-size: 1.3em; padding-right: 5px;" onclick="return confirm('Adakah anda pasti untuk hapuskan rekod ini?')"
		href="?p=tab_penyelidikan&col11=<?php echo $id_col11; ?>" title="BATAL">
			X</a></td>
</tr>
<!-------------- MAKLUMAT 1 ---------------->

<!-------------- SPACING ---------------->
<tr>
		<td>&nbsp;</td><td></td><td></td>
</tr>
<!-------------- SPACING ---------------->
</tr>
<!-------------- MAKLUMAT 1 ---------------->


<tr>
	<td colspan="6">&nbsp;</td>
</tr>
<tr>
			<td  align="right"><i>Linkages Description</i></td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input 
					class="input_max_large"
					type="text"
					id="txt11_expert_link_description"
					name="txt11_expert_link_description<?php echo $table_len_11; ?>" 
					value="<?php echo $row_get_expert_link['LinkagesDescription']; ?>" 
					maxlength="80"  
				/>
			</td>
	</tr>
	<tr>
			<td  align="right">Organisasi</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4"><span class="control-group">
				<input 
					class="input_max_large"
					type="text"
					id="txt11_expert_link_organisasi"
					name="txt11_expert_link_organisasi<?php echo $table_len_11; ?>" 
					value="<?php echo $row_get_expert_link['Organisasi']; ?>" 
					maxlength="80"  
				/>
			</td>
	</tr>

	<tr>
		<td  align="right">Tahun Penglibatan</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4">
			<select name="txt11_expert_link_tahun<?php echo $table_len_11; ?>" style="width: 110px;">
				<option value="" selected>Pilih Tahun</option>

				<?php

					$curr_year = date("Y");

					for($i=$curr_year; $i>=1940; $i--){
					?>

						<option <?php if($i == $row_get_expert_link['TahunPenglibatan']){ echo "selected"; } ?>>
								<?php echo $i; ?> 
						</option>
					<?php
					}
				?>
			</select>
	</td>
</tr>

<tr>
		<td  align="right">Tempoh</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4"><span class="control-group">
			<input 
					class="input_max_large"
					type="text"
					id="txt11_expert_link_tempoh"
					name="txt11_expert_link_tempoh<?php echo $table_len_11; ?>" 
					value="<?php echo $row_get_expert_link['Tempoh']; ?>" 
					maxlength="80"  
				/>
	</td>
</tr>

<tr>
			<td  align="right">Tahap/Peringkat</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4"><span class="control-group">
				<input 
					class="input_max_large"
					type="text"
					id="txt11_expert_link_tahap"
					name="txt11_expert_link_tahap<?php echo $table_len_11; ?>" 
					value="<?php echo $row_get_expert_link['TahapPeringkat']; ?>" 
					maxlength="80"  
				/>
			</td>
	</tr>


<?php
		$table_len_11++;
		}
?>

	<!----------------------------------- TD MAKLUMAT TAMBAHAN 11 --------------------------------->
											<tbody class="div_added_kolum_11"></tbody>
		<!----------------------------------- TD MAKLUMAT TAMBAHAN 11 --------------------------------->

<!------------------------------------- BUTTON TAMBAH 11 of 18 ------------------------------------->
<tr>
		<td colspan="6">
				<center>
					<button id="btn_tambah_11" class="btn btn-success" type="button" name="btn_tambah_1">+ TAMBAH</button>
				</center>
		</td>
	</tr>

	<tr>
	<td colspan="6">&nbsp;</td>
</tr>
<td colspan="6" style="display: block; height: 30px;"></td><!-- LINE SPACING (FOR NEXT CATEGORY -->









<!------------------------(12 of 18) SUMBANGAN TEKNIKAL/KEPAKARAN ---------------------->
<tr class="tr_sub_title">
  <td colspan="6"><b>&nbsp;&nbsp;&nbsp;12) Sumbangan Teknikal/Kepakaran</b></td>
</tr>


<?php

	$query_get_sumb_teknikal = "SELECT 
								Id,
								Aktiviti,
								Organisasi,
								JawatanPeranan,
								Dari,
								Hingga,
								TahapPeringkat
								FROM
								rek_sumbangan_teknikal
								WHERE
								IdPemohon = '$applicant'";

	$result_get_sumb_teknikal = mysql_query($query_get_sumb_teknikal);
	$total_sumb_teknikal = mysql_num_rows($result_get_sumb_teknikal);

	$table_len_12 = 1;

		if($total_sumb_teknikal == 0){
?>

<tr>
	<td colspan="6">&nbsp;</td>
</tr>

		<!-------------- MAKLUMAT 1 ---------------->
<tr>
		<td align="right"><b>Maklumat <?php echo $table_len_12; ?></b></td>
		<td></td>
		<td colspan="4"></td>
</tr>
<!-------------- MAKLUMAT 1 ---------------->


<tr>
			<td  align="right">Aktiviti</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input 
					class="input_max_large"
					type="text"
					id="txt12_sumbangan_tek_aktiviti"
					name="txt12_sumbangan_tek_aktiviti<?php echo $table_len_12; ?>" 
					value="<?php echo $row_get_sumb_teknikal['Aktiviti']; ?>" 
					maxlength="80"  
				/>
			</td>
	</tr>
	<tr>
			<td  align="right">Organisasi</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input 
					class="input_max_large"
					type="text"
					id="txt12_sumbangan_tek_organisasi"
					name="txt12_sumbangan_tek_organisasi<?php echo $table_len_12; ?>" 
					value="<?php echo $row_get_sumb_teknikal['Organisasi']; ?>" 
					maxlength="80"  
				/>
			</td>
	</tr>

	<tr>
		<td  align="right">Jawatan/Peranan</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4">
			<input 
					class="input_max_large"
					type="text"
					id="txt12_sumbangan_tek_jawatan"
					name="txt12_sumbangan_tek_jawatan<?php echo $table_len_12; ?>" 
					value="<?php echo $row_get_sumb_teknikal['JawatanPeranan']; ?>" 
					maxlength="80"  
				/>
	</td>
</tr>

<tr>
		<td  align="right">Dari</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4">
		<input
			type="text" 
			id="txt12_sumbangan_tek_tarikh_mula"
			name="txt12_sumbangan_tek_tarikh_mula<?php echo $table_len_12; ?>" 
			style="width: 100px;" 
			value="<?php echo $sumb_teknikal_tarikh_mula_std; ?>" 
			maxlength="10"  
		/>
		<span> <i>&nbsp;Format: dd-mm-yyyy (Cth: 31-01-2018)</i></span>
	</td>
</tr>

<tr>
		<td  align="right">Hingga</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4">
		<input
			type="text" 
			id="txt12_sumbangan_tek_tarikh_tamat"
			name="txt12_sumbangan_tek_tarikh_tamat<?php echo $table_len_12; ?>" 
			style="width: 100px;" 
			value="<?php echo $sumb_teknikal_tarikh_tamat_std; ?>" 
			maxlength="10"  
		/>
		<span> <i>&nbsp;Format: dd-mm-yyyy (Cth: 31-01-2018)</i></span>
	</td>
</tr>

<tr>
			<td  align="right">Tahap/Peringkat</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input 
					class="input_max_large"
					type="text"
					id=""
					name="txt12_sumbangan_tek_tarikh_tahap<?php echo $table_len_12; ?>" 
					value="<?php echo $row_get_sumb_teknikal['TahapPeringkat']; ?>" 
					maxlength="80"  
				/>
			</td>
	</tr>


<?php
		$table_len_12++;
		}

	while($row_get_sumb_teknikal = mysql_fetch_assoc($result_get_sumb_teknikal)){

	//convert date to STD format
	$sumb_teknikal_tarikh_mula_db = $row_get_sumb_teknikal['Dari'];
	$sumb_teknikal_tarikh_tamat_db = $row_get_sumb_teknikal['Hingga'];
	$sumb_teknikal_tarikh_mula_std = date("d-m-Y", strtotime($sumb_teknikal_tarikh_mula_db));
	$sumb_teknikal_tarikh_tamat_std = date("d-m-Y", strtotime($sumb_teknikal_tarikh_tamat_db));

	if($sumb_teknikal_tarikh_mula_std == '01-01-1970'){
		$sumb_teknikal_tarikh_mula_std = '';
	}
	if($sumb_teknikal_tarikh_tamat_std == '01-01-1970'){
		$sumb_teknikal_tarikh_tamat_std = '';
	}
?>


<tr>
	<td colspan="6">&nbsp;</td>
</tr>

<input type="hidden" name="id_12<?php echo $table_len_12; ?>" value="<?php echo $id_col12 = $row_get_sumb_teknikal['Id']; ?>" />

<!-------------- MAKLUMAT 1 ---------------->
<tr style="background: #f3f7f9; line-height: 1.8em;">
		<td align="right"><b>Maklumat <?php echo $table_len_12; ?></b></td>
		<td></td>
		<td colspan="4" style="float: right;"><a style="font-weight: bold; font-size: 1.3em; padding-right: 5px;" onclick="return confirm('Adakah anda pasti untuk hapuskan rekod ini?')"
		href="?p=tab_penyelidikan&col12=<?php echo $id_col12; ?>" title="BATAL">
			X</a></td>
</tr>
<!-------------- MAKLUMAT 1 ---------------->

<!-------------- SPACING ---------------->
<tr>
		<td>&nbsp;</td><td></td><td></td>
</tr>
<!-------------- SPACING ---------------->
</tr>
<!-------------- MAKLUMAT 1 ---------------->


<tr>
			<td  align="right">Aktiviti</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input 
					class="input_max_large"
					type="text"
					id="txt12_sumbangan_tek_aktiviti"
					name="txt12_sumbangan_tek_aktiviti<?php echo $table_len_12; ?>" 
					value="<?php echo $row_get_sumb_teknikal['Aktiviti']; ?>" 
					maxlength="80"  
				/>
			</td>
	</tr>
	<tr>
			<td  align="right">Organisasi</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input 
					class="input_max_large"
					type="text"
					id="txt12_sumbangan_tek_organisasi"
					name="txt12_sumbangan_tek_organisasi<?php echo $table_len_12; ?>" 
					value="<?php echo $row_get_sumb_teknikal['Organisasi']; ?>" 
					maxlength="80"  
				/>
			</td>
	</tr>

	<tr>
		<td  align="right">Jawatan/Peranan</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4">
			<input 
					class="input_max_large"
					type="text"
					id="txt12_sumbangan_tek_jawatan"
					name="txt12_sumbangan_tek_jawatan<?php echo $table_len_12; ?>" 
					value="<?php echo $row_get_sumb_teknikal['JawatanPeranan']; ?>" 
					maxlength="80"  
				/>
	</td>
</tr>

<tr>
		<td  align="right">Dari</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4">
		<input
			type="text" 
			id="txt12_sumbangan_tek_tarikh_mula"
			name="txt12_sumbangan_tek_tarikh_mula<?php echo $table_len_12; ?>" 
			style="width: 100px;" 
			value="<?php echo $sumb_teknikal_tarikh_mula_std; ?>" 
			maxlength="10"  
		/>
		<span> <i>&nbsp;Format: dd-mm-yyyy (Cth: 31-01-2018)</i></span>
	</td>
</tr>

<tr>
		<td  align="right">Hingga</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4">
		<input
			type="text" 
			id="txt12_sumbangan_tek_tarikh_tamat"
			name="txt12_sumbangan_tek_tarikh_tamat<?php echo $table_len_12; ?>" 
			style="width: 100px;" 
			value="<?php echo $sumb_teknikal_tarikh_tamat_std; ?>" 
			maxlength="10"  
		/>
		<span> <i>&nbsp;Format: dd-mm-yyyy (Cth: 31-01-2018)</i></span>
	</td>
</tr>

<tr>
			<td  align="right">Tahap/Peringkat</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input 
					class="input_max_large"
					type="text"
					id=""
					name="txt12_sumbangan_tek_tarikh_tahap<?php echo $table_len_12; ?>" 
					value="<?php echo $row_get_sumb_teknikal['TahapPeringkat']; ?>" 
					maxlength="80"  
				/>
			</td>
	</tr>



<?php
	$table_len_12++;
}
?>

	<!----------------------------------- TD MAKLUMAT TAMBAHAN 12 --------------------------------->
											<tbody class="div_added_kolum_12"></tbody>
	<!----------------------------------- TD MAKLUMAT TAMBAHAN 12 --------------------------------->


<!------------------------------------- BUTTON TAMBAH 12 of 18 ------------------------------------->
	<tr>
		<td colspan="6">
				<center>
					<button id="btn_tambah_12" class="btn btn-success" type="button" name="btn_tambah_1">+ TAMBAH</button>
				</center>
		</td>
	</tr>


<tr>
	<td colspan="6">&nbsp;</td>
</tr>
<td colspan="6" style="display: block; height: 30px;"></td><!-- LINE SPACING (FOR NEXT CATEGORY -->








<!------------------------(13 of 18) MENGAJAR ---------------------->
<tr class="tr_sub_title">
  <td colspan="6"><b>&nbsp;&nbsp;&nbsp;13) Mengajar</b></td>
</tr>


<?php

	$query_get_mengajar = "SELECT 
								Id,
								NamaSubjek,
								SesiAkademik,
								BilPelajar,
								BilJam
								FROM
								rek_mengajar
								WHERE
								IdPemohon = '$applicant'";

	$result_get_mengajar = mysql_query($query_get_mengajar);
	$total_mengajar = mysql_num_rows($result_get_mengajar);

	$table_len_13 = 1;

	if($total_mengajar == 0){

?>

<tr>
	<td colspan="6">&nbsp;</td>
</tr>

		<!-------------- MAKLUMAT 1 ---------------->
<tr>
		<td align="right"><b>Maklumat <?php echo $table_len_13; ?></b></td>
		<td></td>
		<td colspan="4"></td>
</tr>
<!-------------- MAKLUMAT 1 ---------------->


<tr>
			<td  align="right">Nama Subjek</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input 
					class="input_max_large"
					type="text"
					id="txt13_mengajar_nama_subjek"
					name="txt13_mengajar_nama_subjek<?php echo $table_len_13; ?>" 
					value="<?php echo $row_get_mengajar['NamaSubjek']; ?>" 
					maxlength="80"  
					autocomplete="off"
				/>
			</td>
	</tr>
	<tr>
			<td  align="right">Sesi Akademik</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input 
					class="input_max_large"
					type="text"
					id="txt13_mengajar_sesi_akad"
					name="txt13_mengajar_sesi_akad<?php echo $table_len_13; ?>" 
					value="<?php echo $row_get_mengajar['SesiAkademik']; ?>" 
					maxlength="80"  
					autocomplete="off"
				/>
			</td>
	</tr>

	<tr>
		<td  align="right">Bil. Pelajar</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4">
			<input
				type="text"
				id="txt13_mengajar_bil_pelajar"
				name="txt13_mengajar_bil_pelajar<?php echo $table_len_13; ?>" 
				style="width: 100px" 
				value="<?php echo $row_get_mengajar['BilPelajar']; ?>" 
				maxlength="7"  
				autocomplete="off"
			/>
	</td>
</tr>

<tr>
		<td  align="right">Bil. Jam</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4">
			<input 
				type="text"
				id="txt13_mengajar_bil_jam"
				name="txt13_mengajar_bil_jam<?php echo $table_len_13; ?>"  
				style="width: 100px;" 
				value="<?php echo $row_get_mengajar['BilJam']; ?>" 
				maxlength="7"  
				autocomplete="off"
			/>
	</td>
</tr>



<?php 
		$table_len_13++;
	}

	while($row_get_mengajar = mysql_fetch_assoc($result_get_mengajar)){

?>


<tr>
	<td colspan="6">&nbsp;</td>
</tr>

<input type="hidden" name="id_13<?php echo $table_len_13; ?>" value="<?php echo $id_col13 = $row_get_mengajar['Id']; ?>" />

<!-------------- MAKLUMAT 1 ---------------->
<tr style="background: #f3f7f9; line-height: 1.8em;">
		<td align="right"><b>Maklumat <?php echo $table_len_13; ?></b></td>
		<td></td>
		<td colspan="4" style="float: right;"><a style="font-weight: bold; font-size: 1.3em; padding-right: 5px;" 	onclick="return confirm('Adakah anda pasti untuk hapuskan rekod ini?')"
		href="?p=tab_penyelidikan&col13=<?php echo $id_col13; ?>" title="BATAL">
			X</a></td>
</tr>
<!-------------- MAKLUMAT 1 ---------------->

<!-------------- SPACING ---------------->
<tr>
		<td>&nbsp;</td><td></td><td></td>
</tr>
<!-------------- SPACING ---------------->
</tr>
<!-------------- MAKLUMAT 1 ---------------->


<tr>
			<td  align="right">Nama Subjek</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input 
					class="input_max_large"
					type="text"
					id="txt13_mengajar_nama_subjek"
					name="txt13_mengajar_nama_subjek<?php echo $table_len_13; ?>" 
					value="<?php echo $row_get_mengajar['NamaSubjek']; ?>" 
					maxlength="80"  
					autocomplete="off"
				/>
			</td>
	</tr>
	<tr>
			<td  align="right">Sesi Akademik</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input 
					class="input_max_large"
					type="text"
					id="txt13_mengajar_sesi_akad"
					name="txt13_mengajar_sesi_akad<?php echo $table_len_13; ?>" 
					value="<?php echo $row_get_mengajar['SesiAkademik']; ?>" 
					maxlength="80"  
					autocomplete="off"
				/>
			</td>
	</tr>

	<tr>
		<td  align="right">Bil. Pelajar</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4">
			<input
				type="text"
				id="txt13_mengajar_bil_pelajar"
				name="txt13_mengajar_bil_pelajar<?php echo $table_len_13; ?>" 
				style="width: 100px" 
				value="<?php echo $row_get_mengajar['BilPelajar']; ?>" 
				maxlength="7"  
				autocomplete="off"
			/>
	</td>
</tr>

<tr>
		<td  align="right">Bil. Jam</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4">
			<input 
				type="text"
				id="txt13_mengajar_bil_jam"
				name="txt13_mengajar_bil_jam<?php echo $table_len_13; ?>"  
				style="width: 100px;" 
				value="<?php echo $row_get_mengajar['BilJam']; ?>" 
				maxlength="7"  
				autocomplete="off"
			/>
	</td>
</tr>


<?php
		$table_len_13++;
	}
?>

<!----------------------------------- TD MAKLUMAT TAMBAHAN 13 --------------------------------->
								<tbody class="div_added_kolum_13"></tbody>
<!----------------------------------- TD MAKLUMAT TAMBAHAN 13 --------------------------------->

<!------------------------------------- BUTTON TAMBAH 13 of 18 ------------------------------------->
<tr>
		<td colspan="6">
				<center>
					<button id="btn_tambah_13" class="btn btn-success" type="button" name="btn_tambah_1">+ TAMBAH</button>
				</center>
		</td>
	</tr>


<tr>
	<td colspan="6">&nbsp;</td>
</tr>
<td colspan="6" style="display: block; height: 30px;"></td><!-- LINE SPACING (FOR NEXT CATEGORY -->










<!------------------------(14 of 18) AKTIVITI-AKTIVITI PENILAIAN ---------------------->
<tr class="tr_sub_title">
  <td colspan="6"><b>&nbsp;&nbsp;&nbsp;14) Aktiviti-aktiviti Penilaian</b></td>
</tr>


<?php

	$query_get_akt_penilaian = "SELECT 
								Id,
								Penerangan,
								Aktiviti,
								Tahun
								FROM
								rek_aktiviti_penilaian
								WHERE
								IdPemohon = '$applicant'";

	$result_get_akt_penilaian = mysql_query($query_get_akt_penilaian);
	$total_akt_penilaian = mysql_num_rows($result_get_akt_penilaian);
	//$row_get_akt_penilaian = mysql_fetch_assoc($result_get_akt_penilaian);

	$table_len_14 = 1;

	if($total_akt_penilaian == 0){
?>

<tr>
	<td colspan="6">&nbsp;</td>
</tr>

		<!-------------- MAKLUMAT 1 ---------------->
<tr>
		<td align="right"><b>Maklumat <?php echo $table_len_14; ?></b></td>
		<td></td>
		<td colspan="4"></td>
</tr>
<!-------------- MAKLUMAT 1 ---------------->

<tr>
			<td  align="right">Penerangan</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input 
					class="input_max_large"
					type="text"
					id="txt14_akt_penilaian_penerangan"
					name="txt14_akt_penilaian_penerangan<?php echo $table_len_14; ?>" 
					value="<?php echo $row_get_akt_penilaian['Penerangan']; ?>" 
					maxlength="80"  
					autocomplete="off"
				/>
			</td>
	</tr>
	<tr>
			<td  align="right">Aktiviti Penerangan</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input 
					class="input_max_large"
					type="text"
					id="txt14_akt_penilaian_aktiviti"
					name="txt14_akt_penilaian_aktiviti<?php echo $table_len_14; ?>" 
					value="<?php echo $row_get_akt_penilaian['Aktiviti']; ?>" 
					maxlength="80"  
					autocomplete="off"
				/>
			</td>
	</tr>

	<tr>
		<td  align="right">Tahun</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4"><span class="control-group">
					<select name="txt14_akt_penilaian_tahun<?php echo $table_len_14; ?>" style="width: 110px;">
						<option selected>Pilih Tahun</option>

			<?php
				for($j = $curr_year; $j >=1940; $j--){
	?>

					<option <?php if($j == $row_get_akt_penilaian['Tahun']){ echo "selected"; } ?>>
						<?php echo $j; ?>
					</option>

	<?php 
				}

			?>

					</select>
	</td>
</tr>



<?php
	$table_len_14++;
	}

	while($row_get_akt_penilaian = mysql_fetch_assoc($result_get_akt_penilaian)){
?>


<tr>
	<td colspan="6">&nbsp;</td>
</tr>

<input type="hidden" name="id_14<?php echo $table_len_14; ?>" value="<?php echo $id_col14 = $row_get_akt_penilaian['Id']; ?>" />

<!-------------- MAKLUMAT 1 ---------------->
<tr style="background: #f3f7f9; line-height: 1.8em;">
		<td align="right"><b>Maklumat <?php echo $table_len_14; ?></b></td>
		<td></td>
		<td colspan="4" style="float: right;"><a style="font-weight: bold; font-size: 1.3em; padding-right: 5px;" 	onclick="return confirm('Adakah anda pasti untuk hapuskan rekod ini?')"
		href="?p=tab_penyelidikan&col14=<?php echo $id_col14; ?>" title="BATAL">
			X</a></td>
</tr>
<!-------------- MAKLUMAT 1 ---------------->

<!-------------- SPACING ---------------->
<tr>
		<td>&nbsp;</td><td></td><td></td>
</tr>
<!-------------- SPACING ---------------->
</tr>
<!-------------- MAKLUMAT 1 ---------------->

<tr>
			<td  align="right">Penerangan</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input 
					class="input_max_large"
					type="text"
					id="txt14_akt_penilaian_penerangan"
					name="txt14_akt_penilaian_penerangan<?php echo $table_len_14; ?>" 
					value="<?php echo $row_get_akt_penilaian['Penerangan']; ?>" 
					maxlength="80"  
					autocomplete="off"
				/>
			</td>
	</tr>
	<tr>
			<td  align="right">Aktiviti Penerangan</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input 
					class="input_max_large"
					type="text"
					id="txt14_akt_penilaian_aktiviti"
					name="txt14_akt_penilaian_aktiviti<?php echo $table_len_14; ?>" 
					value="<?php echo $row_get_akt_penilaian['Aktiviti']; ?>" 
					maxlength="80"  
					autocomplete="off"
				/>
			</td>
	</tr>

	<tr>
		<td  align="right">Tahun</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4"><span class="control-group">
					<select name="txt14_akt_penilaian_tahun<?php echo $table_len_14; ?>" style="width: 110px;">
						<option selected>Pilih Tahun</option>

			<?php
				for($j = $curr_year; $j >=1940; $j--){
	?>

					<option <?php if($j == $row_get_akt_penilaian['Tahun']){ echo "selected"; } ?>>
						<?php echo $j; ?>
					</option>

	<?php 
				}

			?>

					</select>
	</td>
</tr>



<?php
			$table_len_14++;
			}

?>

<!----------------------------------- TD MAKLUMAT TAMBAHAN 14 --------------------------------->
										<tbody class="div_added_kolum_14"></tbody>
<!----------------------------------- TD MAKLUMAT TAMBAHAN 14 --------------------------------->

<!------------------------------------- BUTTON TAMBAH 14 of 18 ------------------------------------->
<tr>
		<td colspan="6">
				<center>
					<button id="btn_tambah_14" class="btn btn-success" type="button" name="btn_tambah_1">+ TAMBAH</button>
				</center>
		</td>
	</tr>

<tr>
	<td colspan="6">&nbsp;</td>
</tr>
<td colspan="6" style="display: block; height: 30px;"></td><!-- LINE SPACING (FOR NEXT CATEGORY -->




<!------------------------(15 of 18) REKABENTUK KO-KURIKULUM ---------------------->
<tr class="tr_sub_title">
  <td colspan="6"><b>&nbsp;&nbsp;&nbsp;15) Rekabentuk Ko-kurikulum</b></td>
</tr>


<?php

	$query_get_rekabentuk_kok = "SELECT 
								Id,
								Program,
								Institusi,
								Tarikh
								FROM
								rek_rekabentuk_kokurikulum
								WHERE
								IdPemohon = '$applicant'";

	$result_get_rekabentuk_kok = mysql_query($query_get_rekabentuk_kok);
	$total_rekabentuk_kok = mysql_num_rows($result_get_rekabentuk_kok);

	$table_len_15 = 1;

		if($total_rekabentuk_kok == 0){
	?>

<tr>
	<td colspan="6">&nbsp;</td>
</tr>

			<!-------------- MAKLUMAT 1 ---------------->
<tr>
		<td align="right"><b>Maklumat <?php echo $table_len_15; ?></b></td>
		<td></td>
		<td colspan="4"></td>
</tr>
<!-------------- MAKLUMAT 1 ---------------->

<tr>
			<td  align="right">Program</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input 
					class="input_max_large"
					type="text"
					id="txt15_rekabtk_kok_program"
					name="txt15_rekabtk_kok_program<?php echo $table_len_15; ?>" 
					value="<?php echo $row_get_rekabentuk_kok['Program']; ?>" 
					maxlength="80"  
					autocomplete="off"
				/>
			</td>
	</tr>
	<tr>
			<td  align="right">Institusi</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input 
					class="input_max_large"
					type="text"
					id="txt15_rekabtk_kok_institusi"
					name="txt15_rekabtk_kok_institusi<?php echo $table_len_15; ?>" 
					value="<?php echo $row_get_rekabentuk_kok['Institusi']; ?>" 
					maxlength="80"  
					autocomplete="off"
				/>
			</td>
	</tr>

	<tr>
		<td  align="right">Tarikh</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4">
			<input
				type="text" 
				id="txt15_rekabtk_kok_tarikh"
				name="txt15_rekabtk_kok_tarikh<?php echo $table_len_15; ?>" 
				style="width: 100px;" 
				value="<?php echo $rekabentuk_kok_tarikh_std; ?>" 
				maxlength="10"  
				autocomplete="off"
		/>
		<span> <i>&nbsp;Format: dd-mm-yyyy (Cth: 31-01-2018)</i></span>
	</td>
</tr>


	<?php 
				$table_len_15++;
		}

	while($row_get_rekabentuk_kok = mysql_fetch_assoc($result_get_rekabentuk_kok)){

	//convert date to STD format
	$rekabentuk_kok_tarikh_db = $row_get_rekabentuk_kok['Tarikh'];
	$rekabentuk_kok_tarikh_std = date("d-m-Y", strtotime($rekabentuk_kok_tarikh_db));

	if($rekabentuk_kok_tarikh_std == '01-01-1970'){
		$rekabentuk_kok_tarikh_std = '';
	}

?>

<tr>
	<td colspan="6">&nbsp;</td>
</tr>

<input type="hidden" name="id_15<?php echo $table_len_15; ?>" value="<?php echo $id_col15 = $row_get_rekabentuk_kok['Id']; ?>" />

<!-------------- MAKLUMAT 1 ---------------->
<tr style="background: #f3f7f9; line-height: 1.8em;">
		<td align="right"><b>Maklumat <?php echo $table_len_15; ?></b></td>
		<td></td>
		<td colspan="4" style="float: right;"><a style="font-weight: bold; font-size: 1.3em; padding-right: 5px;" 	onclick="return confirm('Adakah anda pasti untuk hapuskan rekod ini?')"
		href="?p=tab_penyelidikan&col15=<?php echo $id_col15; ?>" title="BATAL">
			X</a></td>
</tr>
<!-------------- MAKLUMAT 1 ---------------->

<!-------------- SPACING ---------------->
<tr>
		<td>&nbsp;</td><td></td><td></td>
</tr>
<!-------------- SPACING ---------------->
</tr>
<!-------------- MAKLUMAT 1 ---------------->

<tr>
			<td  align="right">Program</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input 
					class="input_max_large"
					type="text"
					id="txt15_rekabtk_kok_program"
					name="txt15_rekabtk_kok_program<?php echo $table_len_15; ?>" 
					value="<?php echo $row_get_rekabentuk_kok['Program']; ?>" 
					maxlength="80"  
					autocomplete="off"
				/>
			</td>
	</tr>
	<tr>
			<td  align="right">Institusi</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input 
					class="input_max_large"
					type="text"
					id="txt15_rekabtk_kok_institusi"
					name="txt15_rekabtk_kok_institusi<?php echo $table_len_15; ?>" 
					value="<?php echo $row_get_rekabentuk_kok['Institusi']; ?>" 
					maxlength="80"  
					autocomplete="off"
				/>
			</td>
	</tr>

	<tr>
		<td  align="right">Tarikh</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4">
			<input
				type="text" 
				id="txt15_rekabtk_kok_tarikh"
				name="txt15_rekabtk_kok_tarikh<?php echo $table_len_15; ?>" 
				style="width: 100px;" 
				value="<?php echo $rekabentuk_kok_tarikh_std; ?>" 
				maxlength="10"  
				autocomplete="off"
		/>
		<span> <i>&nbsp;Format: dd-mm-yyyy (Cth: 31-01-2018)</i></span>
	</td>
</tr>



<?php
		$table_len_15++;
}
?>


<!----------------------------------- TD MAKLUMAT TAMBAHAN 15 --------------------------------->
									<tbody class="div_added_kolum_15"></tbody>
<!----------------------------------- TD MAKLUMAT TAMBAHAN 15 --------------------------------->

<!------------------------------------- BUTTON TAMBAH 15 of 18 ------------------------------------->
<tr>
		<td colspan="6">
				<center>
					<button id="btn_tambah_15" class="btn btn-success" type="button" name="btn_tambah_1">+ TAMBAH</button>
				</center>
		</td>
	</tr>


<tr>
	<td colspan="6">&nbsp;</td>
</tr>
<td colspan="6" style="display: block; height: 30px;"></td><!-- LINE SPACING (FOR NEXT CATEGORY -->








<!------------------------(16 of 18) KEHADIRAN BENGKEL DAN SEMINAR ---------------------->
<tr class="tr_sub_title">
  <td colspan="6"><b>&nbsp;&nbsp;&nbsp;16) Kehadiran Bengkel dan Seminar</b></td>
</tr>


<?php

	$query_get_kehadiran_bengkel = "SELECT 
								Id,
								Nama,
								Tarikh,
								Tempat,
								Penganjur,
								JawatanPeranan
								FROM
								rek_kehadiran_bengkel
								WHERE
								IdPemohon = '$applicant'";

	$result_get_kehadiran_bengkel = mysql_query($query_get_kehadiran_bengkel);
	$total_kehadiran_bengkel = mysql_num_rows($result_get_kehadiran_bengkel);

	$table_len_16 = 1;

	if($total_kehadiran_bengkel == 0){
	?>

<tr>
	<td colspan="6">&nbsp;</td>
</tr>

	<!-------------- MAKLUMAT 1 ---------------->
<tr>
		<td align="right"><b>Maklumat <?php echo $table_len_16; ?></b></td>
		<td></td>
		<td colspan="4"></td>
</tr>
<!-------------- MAKLUMAT 1 ---------------->

<tr>
			<td  align="right">Nama Bengkel</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input 
					class="input_max_large"
					type="text"
					id="txt16_bengkel_seminar_nama"
					name="txt16_bengkel_seminar_nama<?php echo $table_len_16; ?>" 
					value="<?php echo $row_get_kehadiran_bengkel['Nama']; ?>" 
					maxlength="80"  
					autocomplete="off"
				/>
			</td>
	</tr>

	<tr>
		<td  align="right">Tarikh</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4">
			<input
				type="text"
				id="txt16_bengkel_seminar_tarikh"
				name="txt16_bengkel_seminar_tarikh<?php echo $table_len_16; ?>"  
				style="width: 100px;" 
				value="<?php echo $kehadiran_bengkel_tarikh_std; ?>" 
				maxlength="10"  
				autocomplete="off"
			/>
			<span> <i>&nbsp;Format: dd-mm-yyyy (Cth: 31-01-2018)</i></span>
	</td>
	</tr>
	<tr>
			<td  align="right">Tempat</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input 
					class="input_max_large"
					type="text"
					id="txt16_bengkel_seminar_tempat"
					name="txt16_bengkel_seminar_tempat<?php echo $table_len_16; ?>" 
					value="<?php echo $row_get_kehadiran_bengkel['Tempat']; ?>" 
					maxlength="80"  
					autocomplete="off"
				/>
			</td>
	</tr>

	<tr>
			<td  align="right">Penganjur</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input 
					class="input_max_large"
					type="text"
					id="txt16_bengkel_seminar_penganjur"
					name="txt16_bengkel_seminar_penganjur<?php echo $table_len_16; ?>" 
					value="<?php echo $row_get_kehadiran_bengkel['Penganjur']; ?>" 
					maxlength="80" 
					autocomplete="off" 
				/>
			</td>
	</tr>

	<tr>
			<td  align="right">Jawatan/Peranan</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input 
					class="input_max_large"
					type="text"
					id="txt16_bengkel_seminar_jawatan"
					name="txt16_bengkel_seminar_jawatan<?php echo $table_len_16; ?>" 
					value="<?php echo $row_get_kehadiran_bengkel['JawatanPeranan']; ?>" 
					maxlength="80"  
					autocomplete="off"
				/>
			</td>
	</tr>


	<?php 
		$table_len_16++;
	}

	while($row_get_kehadiran_bengkel = mysql_fetch_assoc($result_get_kehadiran_bengkel)){

	//convert date to STD format
	$kehadiran_bengkel_tarikh_db = $row_get_kehadiran_bengkel['Tarikh'];
	$kehadiran_bengkel_tarikh_std = date("d-m-Y", strtotime($kehadiran_bengkel_tarikh_db));

	if($kehadiran_bengkel_tarikh_std == '01-01-1970'){
		$kehadiran_bengkel_tarikh_std = '';
	}

?>



<tr>
	<td colspan="6">&nbsp;</td>
</tr>

<input type="hidden" name="id_16<?php echo $table_len_16; ?>" value="<?php echo $id_col16 = $row_get_kehadiran_bengkel['Id']; ?>" />

<!-------------- MAKLUMAT 1 ---------------->
<tr style="background: #f3f7f9; line-height: 1.8em;">
		<td align="right"><b>Maklumat <?php echo $table_len_16; ?></b></td>
		<td></td>
		<td colspan="4" style="float: right;"><a style="font-weight: bold; font-size: 1.3em; padding-right: 5px;" 	onclick="return confirm('Adakah anda pasti untuk hapuskan rekod ini?')"
		href="?p=tab_penyelidikan&col16=<?php echo $id_col16; ?>" title="BATAL">
			X</a></td>
</tr>
<!-------------- MAKLUMAT 1 ---------------->

<!-------------- SPACING ---------------->
<tr>
		<td>&nbsp;</td><td></td><td></td>
</tr>
<!-------------- SPACING ---------------->
</tr>
<!-------------- MAKLUMAT 1 ---------------->

<tr>
			<td  align="right">Nama Bengkel</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input 
					class="input_max_large"
					type="text"
					id="txt16_bengkel_seminar_nama"
					name="txt16_bengkel_seminar_nama<?php echo $table_len_16; ?>" 
					value="<?php echo $row_get_kehadiran_bengkel['Nama']; ?>" 
					maxlength="80"  
					autocomplete="off"
				/>
			</td>
	</tr>

	<tr>
		<td  align="right">Tarikh</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4">
			<input
				type="text"
				id="txt16_bengkel_seminar_tarikh"
				name="txt16_bengkel_seminar_tarikh<?php echo $table_len_16; ?>"  
				style="width: 100px;" 
				value="<?php echo $kehadiran_bengkel_tarikh_std; ?>" 
				maxlength="10"  
				autocomplete="off"
			/>
			<span> <i>&nbsp;Format: dd-mm-yyyy (Cth: 31-01-2018)</i></span>
	</td>
	</tr>
	<tr>
			<td  align="right">Tempat</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input 
					class="input_max_large"
					type="text"
					id="txt16_bengkel_seminar_tempat"
					name="txt16_bengkel_seminar_tempat<?php echo $table_len_16; ?>" 
					value="<?php echo $row_get_kehadiran_bengkel['Tempat']; ?>" 
					maxlength="80"  
					autocomplete="off"
				/>
			</td>
	</tr>

	<tr>
			<td  align="right">Penganjur</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input 
					class="input_max_large"
					type="text"
					id="txt16_bengkel_seminar_penganjur"
					name="txt16_bengkel_seminar_penganjur<?php echo $table_len_16; ?>" 
					value="<?php echo $row_get_kehadiran_bengkel['Penganjur']; ?>" 
					maxlength="80" 
					autocomplete="off" 
				/>
			</td>
	</tr>

	<tr>
			<td  align="right">Jawatan/Peranan</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input 
					class="input_max_large"
					type="text"
					id="txt16_bengkel_seminar_jawatan"
					name="txt16_bengkel_seminar_jawatan<?php echo $table_len_16; ?>" 
					value="<?php echo $row_get_kehadiran_bengkel['JawatanPeranan']; ?>" 
					maxlength="80"  
					autocomplete="off"
				/>
			</td>
	</tr>



<?php
	$table_len_16++;
}
?>

<!----------------------------------- TD MAKLUMAT TAMBAHAN 16 --------------------------------->
								<tbody class="div_added_kolum_16"></tbody>
<!----------------------------------- TD MAKLUMAT TAMBAHAN 16 --------------------------------->

<!------------------------------------- BUTTON TAMBAH 16 of 18 ------------------------------------->
<tr>
		<td colspan="6">
				<center>
					<button id="btn_tambah_16" class="btn btn-success" type="button" name="btn_tambah_1">+ TAMBAH</button>
				</center>
		</td>
	</tr>


<tr>
	<td colspan="6">&nbsp;</td>
</tr>
<td colspan="6" style="display: block; height: 30px;"></td><!-- LINE SPACING (FOR NEXT CATEGORY -->




<!------------------------(17 of 18) SUMBANGAN KEPADA MASYARAKAT ---------------------->
<tr class="tr_sub_title">
  <td colspan="6"><b>&nbsp;&nbsp;&nbsp;17) Sumbangan Kepada Masyarakat</b></td>
</tr>


<?php

	$query_get_sumbangan_masyarakat = "SELECT 
								Id,
								Sumbangan,
								TahapPeringkat,
								TarikhMula,
								TarikhTamat
								FROM
								rek_sumbangan_masyarakat
								WHERE
								IdPemohon = '$applicant'";

	$result_get_sumbangan_masyarakat = mysql_query($query_get_sumbangan_masyarakat);
	$total_sumbangan_masyarakat = mysql_num_rows($result_get_sumbangan_masyarakat);


	$table_len_17 = 1;

	if($total_sumbangan_masyarakat == 0){
	?>

<tr>
	<td colspan="6">&nbsp;</td>
</tr>


<!-------------- MAKLUMAT 1 ---------------->
<tr>
		<td align="right"><b>Maklumat <?php echo $table_len_17; ?></b></td>
		<td></td>
		<td colspan="4"></td>
</tr>
<!-------------- MAKLUMAT 1 ---------------->

<tr>
			<td  align="right">Sumbangan Kepada Masyarakat</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input 
					class="input_max_large"
					type="text"
					id="txt17_sumbangan_masyarakat_nama"
					name="txt17_sumbangan_masyarakat_nama<?php echo $table_len_17; ?>" 
					value="<?php echo $row_get_sumbangan_masyarakat['Sumbangan']; ?>" 
					maxlength="80"  
					autocomplete="off"
				/>
			</td>
	</tr>

	<tr>
		<td  align="right">Tahap/Peringkat</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4"><span class="control-group">
			<input 
					class="input_max_large"
					type="text"
					id="txt17_sumbangan_masyarakat_tahap"
					name="txt17_sumbangan_masyarakat_tahap<?php echo $table_len_17; ?>" 
					value="<?php echo $row_get_sumbangan_masyarakat['TahapPeringkat']; ?>" 
					maxlength="80"  
					autocomplete="off"
				/>
	</td>
	</tr>

	<tr>
		<td  align="right">Tarikh Mula</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4">
			<input 
				type="text"
				id="txt17_sumbangan_masyarakat_tarikh_mula"
				name="txt17_sumbangan_masyarakat_tarikh_mula<?php echo $table_len_17; ?>" 
				style="width: 100px;" 
				value="<?php echo $sumbangan_masyarakat_tarikh_mula_std; ?>" 
				maxlength="10"  
				autocomplete="off"
			/>
			<span> <i>&nbsp;Format: dd-mm-yyyy (Cth: 31-01-2018)</i></span>
	</td>
	</tr>

	<tr>
		<td  align="right">Tarikh Tamat</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4">
			<input
				type="text"
				id="txt17_sumbangan_masyarakat_tarikh_tamat"
				name="txt17_sumbangan_masyarakat_tarikh_tamat<?php echo $table_len_17; ?>"  
				style="width: 100px;" 
				value="<?php echo $sumbangan_masyarakat_tarikh_tamat_std; ?>" 
				maxlength="10"  
				autocomplete="off"
			/>
			<span> <i>&nbsp;Format: dd-mm-yyyy (Cth: 31-01-2018)</i></span>
	</td>
	</tr>


	<?php 
		$table_len_17++;
	}



	while($row_get_sumbangan_masyarakat = mysql_fetch_assoc($result_get_sumbangan_masyarakat)){

	//convert date to STD format
	$sumbangan_masyarakat_tarikh_mula_db = $row_get_sumbangan_masyarakat['TarikhMula'];
	$sumbangan_masyarakat_tarikh_mula_std = date("d-m-Y", strtotime($sumbangan_masyarakat_tarikh_mula_db));

	$sumbangan_masyarakat_tarikh_tamat_db = $row_get_sumbangan_masyarakat['TarikhTamat'];
	$sumbangan_masyarakat_tarikh_tamat_std = date("d-m-Y", strtotime($sumbangan_masyarakat_tarikh_tamat_db));

	if($sumbangan_masyarakat_tarikh_mula_std == '01-01-1970'){
		$sumbangan_masyarakat_tarikh_mula_std = '';
	}
	if($sumbangan_masyarakat_tarikh_tamat_std == '01-01-1970'){
		$sumbangan_masyarakat_tarikh_tamat_std = '';
	}

?>



<tr>
	<td colspan="6">&nbsp;</td>
</tr>

<input type="hidden" name="id_17<?php echo $table_len_17; ?>" value="<?php echo $id_col17 =$row_get_sumbangan_masyarakat['Id']; ?>" />

<!-------------- MAKLUMAT 1 ---------------->
<tr style="background: #f3f7f9; line-height: 1.8em;">
		<td align="right"><b>Maklumat <?php echo $table_len_17; ?></b></td>
		<td></td>
		<td colspan="4" style="float: right;"><a style="font-weight: bold; font-size: 1.3em; padding-right: 5px;" 	onclick="return confirm('Adakah anda pasti untuk hapuskan rekod ini?')"
		href="?p=tab_penyelidikan&col17=<?php echo $id_col17; ?>" title="BATAL">
			X</a></td>
</tr>
<!-------------- MAKLUMAT 1 ---------------->

<!-------------- SPACING ---------------->
<tr>
		<td>&nbsp;</td><td></td><td></td>
</tr>
<!-------------- SPACING ---------------->
</tr>
<!-------------- MAKLUMAT 1 ---------------->

<tr>
			<td  align="right">Sumbangan Kepada Masyarakat</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input 
					class="input_max_large"
					type="text"
					id="txt17_sumbangan_masyarakat_nama"
					name="txt17_sumbangan_masyarakat_nama<?php echo $table_len_17; ?>" 
					value="<?php echo $row_get_sumbangan_masyarakat['Sumbangan']; ?>" 
					maxlength="80"  
					autocomplete="off"
				/>
			</td>
	</tr>

	<tr>
		<td  align="right">Tahap/Peringkat</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4"><span class="control-group">
			<input 
					class="input_max_large"
					type="text"
					id="txt17_sumbangan_masyarakat_tahap"
					name="txt17_sumbangan_masyarakat_tahap<?php echo $table_len_17; ?>" 
					value="<?php echo $row_get_sumbangan_masyarakat['TahapPeringkat']; ?>" 
					maxlength="80"  
					autocomplete="off"
				/>
	</td>
	</tr>

	<tr>
		<td  align="right">Tarikh Mula</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4">
			<input 
				type="text"
				id="txt17_sumbangan_masyarakat_tarikh_mula"
				name="txt17_sumbangan_masyarakat_tarikh_mula<?php echo $table_len_17; ?>" 
				style="width: 100px;" 
				value="<?php echo $sumbangan_masyarakat_tarikh_mula_std; ?>" 
				maxlength="10"  
				autocomplete="off"
			/>
			<span> <i>&nbsp;Format: dd-mm-yyyy (Cth: 31-01-2018)</i></span>
	</td>
	</tr>

	<tr>
		<td  align="right">Tarikh Tamat</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4">
			<input
				type="text"
				id="txt17_sumbangan_masyarakat_tarikh_tamat"
				name="txt17_sumbangan_masyarakat_tarikh_tamat<?php echo $table_len_17; ?>"  
				style="width: 100px;" 
				value="<?php echo $sumbangan_masyarakat_tarikh_tamat_std; ?>" 
				maxlength="10"  
				autocomplete="off"
			/>
			<span> <i>&nbsp;Format: dd-mm-yyyy (Cth: 31-01-2018)</i></span>
	</td>
	</tr>





<?php
	$table_len_17++;
}
?>

<!----------------------------------- TD MAKLUMAT TAMBAHAN 17 --------------------------------->
								<tbody class="div_added_kolum_17"></tbody>
<!----------------------------------- TD MAKLUMAT TAMBAHAN 17 --------------------------------->

<!------------------------------------- BUTTON TAMBAH 17 of 18 ------------------------------------->
<tr>
		<td colspan="6">
				<center>
					<button id="btn_tambah_17" class="btn btn-success" type="button" name="btn_tambah_1">+ TAMBAH</button>
				</center>
		</td>
	</tr>


<tr>
	<td colspan="6">&nbsp;</td>
</tr>
<td colspan="6" style="display: block; height: 30px;"></td><!-- LINE SPACING (FOR NEXT CATEGORY -->







<!------------------------(18 of 18)ANUGERAH DAN PENCAPAIAN ---------------------->
<tr class="tr_sub_title">
  <td colspan="6"><b>&nbsp;&nbsp;&nbsp;18) Anugerah dan Pencapaian</b></td>
</tr>


<?php

	$query_get_anugerah_pencapaian = "SELECT 
										Id,
										Nama,
										Institusi,
										Tahun,
										Peringkat
										FROM
										rek_anugerah_pencapaian
										WHERE
										IdPemohon = '$applicant'";

	$result_get_anugerah_pencapaian = mysql_query($query_get_anugerah_pencapaian);
	$total_anugerah_pencapaian = mysql_num_rows($result_get_anugerah_pencapaian);
	//$row_get_anugerah_pencapaian = mysql_fetch_assoc($result_get_anugerah_pencapaian);

	$table_len_18 = 1;

	if($total_anugerah_pencapaian == 0){
	?>

<tr>
	<td colspan="6">&nbsp;</td>
</tr>

<!-------------- MAKLUMAT 1 ---------------->
<tr>
		<td align="right"><b>Maklumat <?php echo $table_len_18; ?></b></td>
		<td></td>
		<td colspan="4"></td>
</tr>
<!-------------- MAKLUMAT 1 ---------------->

<tr>
			<td  align="right">Nama Anugerah</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input 
					class="input_max_large"
					type="text"
					id="txt18_anugerah_pencapaian_nama"
					name="txt18_anugerah_pencapaian_nama<?php echo $table_len_18; ?>"
					value="<?php echo $row_get_anugerah_pencapaian['Nama']; ?>" 
					maxlength="80"  
					autocomplete="off"
				/>
			</td>
	</tr>
<tr>
			<td  align="right">Institusi Yang Menganugerahkan</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input 
					class="input_max_large"
					type="text"
					id="txt18_anugerah_pencapaian_institusi"
					name="txt18_anugerah_pencapaian_institusi<?php echo $table_len_18; ?>" 
					value="<?php echo $row_get_anugerah_pencapaian['Institusi']; ?>" 
					maxlength="80"  
					autocomplete="off"
				/>
			</td>
	</tr>

	<tr>
		<td  align="right">Tahun</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4">
			<select name="txt18_anugerah_pencapaian_tahun<?php echo $table_len_18; ?>" style="width: 110px;">
				<option selected>Pilih Tahun</option>
				<?php
					for($k = $curr_year; $k >= 1940; $k--){

				?>


						<option <?php if($k == $row_get_anugerah_pencapaian['Tahun']){ echo "selected"; } ?>>
								<?php echo $k; ?>
						 </option>
				<?php
					}
				?>
			</select>
	</td>
	</tr>

	<tr>
		<td  align="right">Peringkat</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4">
			<input 
					class="input_max_large"
					type="text"
					id="txt18_anugerah_pencapaian_peringkat"
					name="txt18_anugerah_pencapaian_peringkat<?php echo $table_len_18; ?>" 
					value="<?php echo $row_get_anugerah_pencapaian['Peringkat']; ?>" 
					maxlength="80"  
					autocomplete="off"
				/>
	</td>
	</tr>



	<?php 
			$table_len_18++;
	}

	while($row_get_anugerah_pencapaian = mysql_fetch_assoc($result_get_anugerah_pencapaian)){


?>


<tr>
	<td colspan="6">&nbsp;</td>
</tr>

<input type="hidden" name="id_18<?php echo $table_len_18; ?>" value="<?php echo $id_col18 = $row_get_anugerah_pencapaian['Id']; ?>" />

<!-------------- MAKLUMAT 1 ---------------->
<tr style="background: #f3f7f9; line-height: 1.8em;">
		<td align="right"><b>Maklumat <?php echo $table_len_18; ?></b></td>
		<td></td>
		<td colspan="4" style="float: right;"><a style="font-weight: bold; font-size: 1.3em; padding-right: 5px;" 	onclick="return confirm('Adakah anda pasti untuk hapuskan rekod ini?')"
		href="?p=tab_penyelidikan&col18=<?php echo $id_col18; ?>" title="BATAL">
			X</a></td>
</tr>
<!-------------- MAKLUMAT 1 ---------------->

<!-------------- SPACING ---------------->
<tr>
		<td>&nbsp;</td><td></td><td></td>
</tr>
<!-------------- SPACING ---------------->
</tr>
<!-------------- MAKLUMAT 1 ---------------->

<tr>
			<td  align="right">Nama Anugerah</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input 
					class="input_max_large"
					type="text"
					id="txt18_anugerah_pencapaian_nama"
					name="txt18_anugerah_pencapaian_nama<?php echo $table_len_18; ?>"
					value="<?php echo $row_get_anugerah_pencapaian['Nama']; ?>" 
					maxlength="80"  
					autocomplete="off"
				/>
			</td>
	</tr>
<tr>
			<td  align="right">Institusi Yang Menganugerahkan</td>
			<td  align="center">&nbsp;</td>
			<td colspan="4">
				<input 
					class="input_max_large"
					type="text"
					id="txt18_anugerah_pencapaian_institusi"
					name="txt18_anugerah_pencapaian_institusi<?php echo $table_len_18; ?>" 
					value="<?php echo $row_get_anugerah_pencapaian['Institusi']; ?>" 
					maxlength="80"  
					autocomplete="off"
				/>
			</td>
	</tr>

	<tr>
		<td  align="right">Tahun</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4">
			<select name="txt18_anugerah_pencapaian_tahun<?php echo $table_len_18; ?>" style="width: 110px;">
				<option selected>Pilih Tahun</option>
				<?php
					for($k = $curr_year; $k >= 1940; $k--){

				?>


						<option <?php if($k == $row_get_anugerah_pencapaian['Tahun']){ echo "selected"; } ?>>
								<?php echo $k; ?>
						 </option>
				<?php
					}
				?>
			</select>
	</td>
	</tr>

	<tr>
		<td  align="right">Peringkat</td>
		<td  align="center">&nbsp;</td>
		<td colspan="4">
			<input 
					class="input_max_large"
					type="text"
					id="txt18_anugerah_pencapaian_peringkat"
					name="txt18_anugerah_pencapaian_peringkat<?php echo $table_len_18; ?>" 
					value="<?php echo $row_get_anugerah_pencapaian['Peringkat']; ?>" 
					maxlength="80"  
					autocomplete="off"
				/>
	</td>
	</tr>



<?php
	$table_len_18++;
				}
?>

<!----------------------------------- TD MAKLUMAT TAMBAHAN 18 --------------------------------->
								<tbody class="div_added_kolum_18"></tbody>
<!----------------------------------- TD MAKLUMAT TAMBAHAN 18 --------------------------------->

<!------------------------------------- BUTTON TAMBAH 18 of 18 ------------------------------------->
<tr>
		<td colspan="6">
				<center>
					<button id="btn_tambah_18" class="btn btn-success" type="button" name="btn_tambah_1">+ TAMBAH</button>
				</center>
		</td>
	</tr>

<tr>
	<td colspan="6">&nbsp;</td>
</tr>

  <!--------------------------------------END:  FORM JAWATAN AKADEMIK SAHAJA ---------------------------------------------->
</table>





</div><!-- End Form !--> 
</div>
  <div class="well">
<div class="pull-right">
	<!--<a class="btn btn-small" type="submit" style="margin:0px" onClick="location.href='?p=program'">BACK</a> -->

   <input type="submit" class="btn btn-primary" name="btnSubmit" id="submit" value="<?php t('BTN_SAVE'); ?>" />
	 <input type="button" onClick="location.href='?p=tab_jawatan_dimohon'" class="btn btn-primary" name="btnSeterusnya" 
	 				id="btnSeterusnya" value="<?php t(BTN_NEXT); ?>" />
</div>
</div>


<!------------------------------------------- COUNTER PARSER ------------------------------------------------------------------->
<input id="table_len_1" type="hidden" name="table_len_1" value="<?php echo $table_len_1 ?>" />
<input id="table_len_2" type="hidden" name="table_len_2" value="<?php echo $table_len_2 ?>" />
<input id="table_len_3" type="hidden" name="table_len_3" value="<?php echo $table_len_3 ?>" />
<input id="table_len_4" type="hidden" name="table_len_4" value="<?php echo $table_len_4 ?>" />
<input id="table_len_5" type="hidden" name="table_len_5" value="<?php echo $table_len_5 ?>" />
<input id="table_len_6_I" type="hidden" name="table_len_6_I" value="<?php echo $table_len_6_I ?>" />
<input id="table_len_6_II" type="hidden" name="table_len_6_II" value="<?php echo $table_len_6_II ?>" />
<input id="table_len_6_III" type="hidden" name="table_len_6_III" value="<?php echo $table_len_6_III ?>" />
<input id="table_len_6_IV" type="hidden" name="table_len_6_IV" value="<?php echo $table_len_6_IV ?>" />
<input id="table_len_6_V" type="hidden" name="table_len_6_V" value="<?php echo $table_len_6_V ?>" />
<input id="table_len_6_VI" type="hidden" name="table_len_6_VI" value="<?php echo $table_len_6_VI ?>" />
<input id="table_len_7" type="hidden" name="table_len_7" value="<?php echo $table_len_7 ?>" />
<input id="table_len_8" type="hidden" name="table_len_8" value="<?php echo $table_len_8 ?>" />
<input id="table_len_9" type="hidden" name="table_len_9" value="<?php echo $table_len_9 ?>" />
<input id="table_len_10" type="hidden" name="table_len_10" value="<?php echo $table_len_10 ?>" />
<input id="table_len_11" type="hidden" name="table_len_11" value="<?php echo $table_len_11 ?>" />
<input id="table_len_12" type="hidden" name="table_len_12" value="<?php echo $table_len_12 ?>" />
<input id="table_len_13" type="hidden" name="table_len_13" value="<?php echo $table_len_13 ?>" />
<input id="table_len_14" type="hidden" name="table_len_14" value="<?php echo $table_len_14 ?>" />
<input id="table_len_15" type="hidden" name="table_len_15" value="<?php echo $table_len_15 ?>" />
<input id="table_len_16" type="hidden" name="table_len_16" value="<?php echo $table_len_16 ?>" />
<input id="table_len_17" type="hidden" name="table_len_17" value="<?php echo $table_len_17 ?>" />
<input id="table_len_18" type="hidden" name="table_len_18" value="<?php echo $table_len_18 ?>" />

<!------------------------------------------- COUNTER PARSER -------------------------------------------------------------------->
</form>
<?php endblock(); ?>

<script src="media/js/jquery.selectboxes.js"></script>
<script src="media/js/jquery.validate.min.js"></script>
<script src="media/js/bootstrap.min.js"></script>
<script type="text/javascript">
function preventNumberInput(e){
    var keyCode = (e.keyCode ? e.keyCode : e.which);
    if (keyCode > 47 && keyCode < 58 || keyCode > 95 && keyCode < 107 ){
        e.preventDefault();
    }
}

$(document).ready(function(){
    $('#text_field').keypress(function(e) {
        preventNumberInput(e);
    });
});


  $(document)
  	.ready(function () {
	 $('input[title]').on("keyup", function () {
         $(this).tooltip("show");
	 }).tooltip({
		 placement: "right",
		 trigger: "focus",
		 title: "Tooltip"
	 });
 
	$("#menuProf").addClass("menuActive");
		
	if ($("#input_disability").val() == "99") {
	        $("#other").show();
			$("#otherDis").removeClass('info');
	    }
		
  	$('#sameaddress')
  		.click(function () {
  		// if the #sameaddress checkbox is ticked copy the address form
  		// field values to the corresponding billing address fields
  		if ($('#sameaddress')
  			.is(':checked')) {
  			$('#b_add1')
  				.val($('#p_add1')
  				.val());
  			$('#b_add2')
  				.val($('#p_add2')
  				.val());
  			$('#b_city')
  				.val($('#p_city')
  				.val());
			$('#b_postcode')
  				.val($('#p_postcode')
  				.val());
			//won't work on drop downs, so get those values
            var bstate = $("#p_state").val();
            $("#b_state").selectOptions(bstate);    
			var bcountry = $("#p_country").val();
            $("#b_country").selectOptions(bcountry); 
  		}
  		else {
  			// if the #sameaddress checkbox is not ticked set the billing address fields as empty
  			$('#b_add1,#b_add2,#b_city,#b_postcode')
  				.val('');
				 $("#b_state").selectOptions("");
				 $("#b_country").selectOptions("");
  		}
  	});

	$(".date").datepicker({
	dateFormat: 'dd/mm/yy',
	showOn: 'button', 
	buttonImageOnly: true, 
	buttonImage: 'media/img/calendar.png',
	});
	
	$("#input_disability").change(function () {
	    if ($(this).val() == "99") {
	        $("#other").show();
	    }
	    else {
	        $("#other").hide();
	    }

	});



	//Input: Allow number only
	numeric("#txt0_tel");
	numeric("#txt14_mengajar_bil_pelajar");
	numeric("#txt14_mengajar_bil_jam");
	
	
	function numeric(field){
	$(field).keydown(function(event) {
		// Allow only backspace and delete
		if ( event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9) {
			// let it happen, don't do anything
		}
		else {
			// Ensure that it is a number and stop the keypress
			if (event.keyCode < 48 || event.keyCode > 57 && event.keyCode < 96 || event.keyCode > 105 ) {
				event.preventDefault();	
			}	
		}
	})};
  });
  

	


		function checkEmailDuplicate(){

			alert('test duplicate');
			return false;
		}


		var counter_date_picker = $('#table_len_2').val();
		//alert(counter_date_picker);

		//Date picker
// 		$(function() {
//     $("#txt2_jaw_akad_tarikh, #txt3_keanggotaan_tarikh, #txt4_tugas_pent_tarikh_mula, #txt4_tugas_pent_tarikh_tamat,"
// 		+ "#txt6_media_massa_tarikh, #txt6_media_lain_tarikh, #txt7_penyelidikan_tarikh_mula, #txt7_penyelidikan_tarikh_tamat,"
// 		+ "#txt8_consultancy_tarikh_mula, #txt8_consultancy_tarikh_tamat, #txt9_pembentangan_tarikh, #txt12_sumbangan_tek_tarikh_mula,"
// 		+ "#txt12_sumbangan_tek_tarikh_tamat, #txt15_rekabtk_kok_tarikh, #txt16_bengkel_seminar_tarikh, #txt17_sumbangan_masyarakat_tarikh_mula,"
// 		+ "#txt17_sumbangan_masyarakat_tarikh_tamat").datepicker({
// 				changeMonth: true,
// 				changeYear: true,
// 				dateFormat: "dd-mm-yy",
// 				numberOfMonths: 1,
//     });
// }); 


<?php
		//function button tambah utk setiap colum
		include("menu_penyelidikan_func.js");
?>

</script>


