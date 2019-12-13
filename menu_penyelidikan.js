/****************************************************************************************************************************
  	START: FUNCTION: ADD / REMOVE INPUT BOX KO-K
****************************************************************************************************************************/


$(function() {
	$("#btn_batal").hide();	
	
    $("#btn_tambah_1").bind("click", function() {

      counter_1 = $("#table_len_1").val();
 
     // counter_1++;
    

  /*****************************************************************************************
                          START: INPUT 1: INPUT KEMAHIRAN LAIN EXTRA 1
  *****************************************************************************************/

    var var_input0 = '<tr class="tambahInput'+counter_1+'"><td colspan="6" style="display: block; height: 30px;"></td></tr>';  

    var var_input1 = '<tr style="background: #f3f7f9; line-height: 1.8em;"  class="tambahInput'+counter_1+'"><td align="right"><b>Maklumat '+counter_1+' </b></td>'
                +	         '<td></td>'
                +    '<td colspan="4" style="float: right;">'
                + '<button style="border: none; background: none; color: #0088cc; font-weight: bold; font-size: 1.3em;"'
                + 'type="button" title="BATAL" id="btn_remove'+counter_1+'" val="'+counter_1+'" class="remove">X</button>'
                + '</td></tr><tr><td>&nbsp;</td><td></td><td></td></tr>';


    var var_input2 = '<tr  class="tambahInput'+counter_1+'"><td align="right">Nama*</td>'
            + '<td align="center" class="td_margin_right"></td>'
            + '<td colspan="4">'
            + '<input class="input_max_large" type="text" id="txt1_nama" name="txt1_nama'+counter_1+'"'
            + 'value=""'
            + 'maxlength="80" autocomplete="off" /></td></tr>';

    var var_input3 = '<tr  class="tambahInput'+counter_1+'"><td  align="right"><i>Jawatan*</i></td>'
            +  '<td  align="center">&nbsp;</td>'
            + '<td colspan="4">'
            + '<input class="input_max_large" type="text" id="txt1_jawatan" name="txt1_jawatan'+counter_1+'"'
            + 'value="" maxlength="80" autocomplete="off" />'
            + '</td></tr>';

    var var_input4 = '<tr  class="tambahInput'+counter_1+'"><td  align="right">Alamat*</td>'
                + '<td  align="center">&nbsp;</td>'
                + '<td colspan="4"><input class="input_max_large" type="text" id="txt1_alamat" name="txt1_alamat'+counter_1+'"'
                + 'value="" maxlength="80" autocomplete="off" />'
                + '</td></tr>';

    var var_input5 = '<tr  class="tambahInput'+counter_1+'"><td  align="right">No Tel*</td><td  align="center">&nbsp;</td>'
                +         '<td colspan="4">'
                +            '<input class="input_max_large" type="text" id="txt1_tel"'
                +              'name="txt1_tel'+counter_1+'" value=""  maxlength="15"'
                +               'autocomplete="off" style="width: 100px;" /><span> <i>&nbsp;Cth: 0123344555</i></span>'
                +      '</td></tr>'; 



          for(m = 1; m < counter_1; m++)
          {
            $("#btn_remove"+m).hide();  
          }


        $(".div_added_kolum_1").append(var_input0+var_input1+var_input2+var_input3+var_input4+var_input5);
  
   
    counter_1++; 

    $("#table_len_1").val(counter_1);
		if(counter_1 > <?php  if($table_len_1 == 0) echo 1; else echo $table_len_1; ?>)
		{
		$("#btn_batal").show();		
		}
    });
     /*****************************************************************************************
                          END: INPUT 1: INPUT KEMAHIRAN LAIN EXTRA 1
     *****************************************************************************************/




     /*****************************************************************************************
                          START: INPUT 2: INPUT KEMAHIRAN LAIN EXTRA 2
    *****************************************************************************************/

    $("#btn_tambah_2").bind("click", function() {

	    counter_2 = $("#table_len_2").val();
    

  // INPUT 2: INPUT KEMAHIRAN LAIN EXTRA 2

   var var_input0 = '<tr class="tambahInput_2'+counter_2+'"><td colspan="6" style="display: block; height: 30px;"></td></tr>';



  var var_input1 = '<tr style="background: #f3f7f9; line-height: 1.8em;" class="tambahInput_2'+counter_2+'"><td align="right"><b>Maklumat '+counter_2+'</b></td>'
                      + '<td></td>'
                      +    '<td colspan="4" style="float: right;">'
                      + '<button style="border: none; background: none; color: #0088cc; font-weight: bold; font-size: 1.3em;"'
                      + 'type="button" title="BATAL" id="btn_remove_2'+counter_2+'" val="'+counter_2+'" class="remove_2">X</button>'
                      + '</td></tr><tr><td>&nbsp;</td><td></td><td></td></tr>';

  var var_input2 = '<tr class="tambahInput_2'+counter_2+'"><td  align="right">Organisasi</td>'
                + '<td  align="center">&nbsp;</td>'
                + '<td colspan="4">'
                + '<input class="input_max_large" type="text" id="txt2_jaw_akad_organisasi" name="txt2_jaw_akad_organisasi'+counter_2+'"'  
                + 'value=""'
                + 'maxlength="80" autocomplete="off" />'
                + '</td></tr>';

var var_input3 = 	'<tr class="tambahInput_2'+counter_2+'"><td  align="right">Jawatan/Peranan</td>'
                    +  '<td  align="center">&nbsp;</td>'
                    + '<td colspan="4">'
                    + '<input class="input_max_large" type="text" id="txt2_jaw_akad_jawatan"'
                    + 'name="txt2_jaw_akad_jawatan'+counter_2+'" value=""' 
                    + 'maxlength="80"  autocomplete="off" />'
                    + '</td></tr>';

var var_input4 = '<tr class="tambahInput_2'+counter_2+'">'
                + '<td  align="right">Tarikh</td>'
                + '<td  align="center">&nbsp;</td>'
                + '<td colspan="4">'
                + '<input type="text" name="txt2_jaw_akad_tarikh'+counter_2+'"'
                + 'id="txt2_jaw_akad_tarikh" style="width: 100px;"'
                + 'value=""' 
                + 'maxlength="10" autocomplete="off" /><span> <i>&nbsp;Format: dd-mm-yyyy (Cth: 31-01-2018)</i></span>'
                + '</td></tr>';



   
        for(m_2 = 1; m_2 < counter_2; m_2++)
          {
            $("#btn_remove_2"+m_2).hide();  
          }


        $(".div_added_kolum_2").append(var_input0+var_input1+var_input2+var_input3+var_input4);


    counter_2++; 
    $("#table_len_2").val(counter_2);
		if(counter_2 > <?php  if($table_len_2 == 0) echo 1; else echo $table_len_2; ?>)
		{
		$("#btn_batal").show();		
		}
    });
    
     /*****************************************************************************************
                          END: INPUT 2: INPUT KEMAHIRAN LAIN EXTRA 2
     *****************************************************************************************/








    /*****************************************************************************************
                          START: INPUT 3: INPUT KEMAHIRAN LAIN EXTRA 3
    *****************************************************************************************/

    $("#btn_tambah_3").bind("click", function() {

	    counter_3 = $("#table_len_3").val();
    

  // INPUT 3: INPUT KEMAHIRAN LAIN EXTRA 3

   var var_input0 = '<tr class="tambahInput_3'+counter_3+'"><td colspan="6" style="display: block; height: 30px;"></td></tr>';

   var var_input1 = '<tr style="background: #f3f7f9; line-height: 1.8em;" class="tambahInput_3'+counter_3+'"><td align="right"><b>Maklumat '+counter_3+'</b></td>'
              +	         '<td></td>'
              +    '<td colspan="4" style="float: right;">'
              + '<button style="border: none; background: none; color: #0088cc; font-weight: bold; font-size: 1.3em;"'
              + 'type="button" title="BATAL" id="btn_remove_3'+counter_3+'" val="'+counter_3+'" class="remove_3">X</button>'
              + '</td></tr><tr><td>&nbsp;</td><td></td><td></td></tr>';

  var var_input2 = '<tr class="tambahInput_3'+counter_3+'">'
                +    '<td  align="right">Organisasi</td>'
                +     '<td  align="center">&nbsp;</td>'
                +     '<td colspan="4">'
                +    '<input class="input_max_large" type="text" id="txt3_keanggotaan_organisasi"'
                +    'name="txt3_keanggotaan_organisasi'+counter_3+'" value=""'
                +   'maxlength="80"  autocomplete="off" />'
                + '</td></tr>';

var var_input3 = '<tr class="tambahInput_3'+counter_3+'">'
                +   '<td  align="right">Jawatan/Peranan</td>'
                +    '<td  align="center">&nbsp;</td>'
                +    '<td colspan="4">'
                +     '<input class="input_max_large" type="text" id="txt3_keanggotaan_jawatan"'
                +    'name="txt3_keanggotaan_jawatan'+counter_3+'"  value=""'
                +    'maxlength="80" autocomplete="off" />'
                + '</td></tr>';

var var_input4 = '<tr class="tambahInput_3'+counter_3+'">'
                +    '<td  align="right">Tarikh</td>'
                +    '<td  align="center">&nbsp;</td>'
                +    '<td colspan="4">'
                +     '<input type="text" id="txt3_keanggotaan_tarikh" name="txt3_keanggotaan_tarikh'+counter_3+'"' 
                +        'style="width: 100px;" value=""' 
                +     'maxlength="10"  autocomplete="off" /><span> <i>&nbsp;Format: dd-mm-yyyy (Cth: 31-01-2018)</i></span>'
                + '</td></tr>';


                for(m_3 = 1; m_3 < counter_3; m_3++)
                {
                  $("#btn_remove_3"+m_3).hide();  
                }

        $(".div_added_kolum_3").append("<tr>"+var_input0+var_input1+var_input2+var_input3+var_input4+"</tr>");
   
    counter_3++; 
    $("#table_len_3").val(counter_3);
		if(counter_3 > <?php  if($table_len_3 == 0) echo 1; else echo $table_len_3; ?>)
		{
		$("#btn_batal").show();		
		}
    });
    
     /*****************************************************************************************
                          END: INPUT 3: INPUT KEMAHIRAN LAIN EXTRA 3
     *****************************************************************************************/






     /*****************************************************************************************
                          START: INPUT 4: INPUT KEMAHIRAN LAIN EXTRA 4
    *****************************************************************************************/

    $("#btn_tambah_4").bind("click", function() {

	    counter_4 = $("#table_len_4").val();
    

  // INPUT 4: INPUT KEMAHIRAN LAIN EXTRA 4

   var var_input0 = '<tr class="tambahInput_4'+counter_4+'"><td colspan="6" style="display: block; height: 30px;"></td></tr>';

   var var_input1 = '<tr style="background: #f3f7f9; line-height: 1.8em;"class="tambahInput_4'+counter_4+'"><td align="right"><b>Maklumat '+counter_4+'</b></td>'
                    +	         '<td></td>'
                    +    '<td colspan="4" style="float: right;">'
                + '<button style="border: none; background: none; color: #0088cc; font-weight: bold; font-size: 1.3em;"'
                + 'type="button" title="BATAL" id="btn_remove_4'+counter_4+'" val="'+counter_4+'" class="remove_4">X</button>'
                + '</td></tr><tr><td>&nbsp;</td><td></td><td></td></tr>';

  var var_input2 = '<tr class="tambahInput_4'+counter_4+'">'
                    + '<td  align="right">Jawatan/Tugas</td>'
                    + '<td  align="center">&nbsp;</td>'
                    + '<td colspan="4">'
                    + '<input class="input_max_large" type="text" id="txt4_tugas_pent_jawatan"'
                    + 'name="txt4_tugas_pent_jawatan'+counter_4+'" value="<?php echo $row_get_tugas_pentadbiran['JawatanTugas']; ?>"'
                    + 'maxlength="80" autocomplete="off" />'
                    + '</td></tr>';

var var_input3 = '<tr class="tambahInput_4'+counter_4+'">'
                    + '<td  align="right">Tahap/Peringkat</td>'
                    + '<td  align="center">&nbsp;</td>'
                    + '<td colspan="4">'
                    + '<input class="input_max_large" type="text" id="txt4_tugas_pent_tahap"'
                    + 'name="txt4_tugas_pent_tahap'+counter_4+'" value="<?php echo $row_get_tugas_pentadbiran['TahapPeringkat']; ?>"'
                    + 'maxlength="80" autocomplete="off" />'
                    + '</td></tr>';

var var_input4 = '<tr class="tambahInput_4'+counter_4+'">'
                + '<td  align="right">Tarikh Mula</td>'
                + '<td  align="center">&nbsp;</td>'
                +  '<td colspan="4">'
                + '<input type="text" id="txt4_tugas_pent_tarikh_mula" name="txt4_tugas_pent_tarikh_mula'+counter_4+'"'
                + 'style="width: 100px;" value="<?php echo $tugas_pentadbiran_tarikh_mula_std; ?>"' 
                + 'maxlength="10" autocomplete="off" /><span> <i>&nbsp;Format: dd-mm-yyyy (Cth: 31-01-2018)</i></span>'
                + '</td></tr>';

var var_input5 = '<tr class="tambahInput_4'+counter_4+'">'
                + '<td  align="right">Tarikh Tamat</td>'
                + '<td  align="center">&nbsp;</td>'
                + '<td colspan="4">'
                + '<input type="text" id="txt4_tugas_pent_tarikh_tamat" name="txt4_tugas_pent_tarikh_tamat'+counter_4+'"'   
                + 'style="width: 100px;" value="<?php echo $tugas_pentadbiran_tarikh_tamat_std; ?>"'
                + 'maxlength="10" autocomplete="off" /><span> <i>&nbsp;Format: dd-mm-yyyy (Cth: 31-01-2018)</i></span>'
                + '</td></tr>';


                for(m_4 = 1; m_4 < counter_4; m_4++)
                {
                  $("#btn_remove_4"+m_4).hide();  
                }


        $(".div_added_kolum_4").append("<tr>"+var_input0+var_input1+var_input2+var_input3+var_input4+var_input5+"</tr>");

        
   
    ++counter_4; 
    $("#table_len_4").val(counter_4);
		if(counter_4 > <?php  if($table_len_4 == 0) echo 1; else echo $table_len_4; ?>)
		{
		$("#btn_batal").show();		
		}
    });
    
     /*****************************************************************************************
                          END: INPUT 4: INPUT KEMAHIRAN LAIN EXTRA 4
     *****************************************************************************************/







    /*****************************************************************************************
                          START: INPUT 5: INPUT KEMAHIRAN LAIN EXTRA 5
    *****************************************************************************************/

    $("#btn_tambah_5").bind("click", function() {

	    counter_5 = $("#table_len_5").val();

  // INPUT 5: INPUT KEMAHIRAN LAIN EXTRA 5



  var var_input1 = '<tr class="tambahInput_5'+counter_5+'">'
                    + '<td  align="right">Bidang '+counter_5+' <br />&nbsp;</td>'
                    + '<td  align="center">&nbsp;</td>'
                    + '<td colspan="4">'
                    + '<input class="input_max_large" type="text" id="txt5_bidang_kepakaran"'
                    + 'name="txt5_bidang_kepakaran'+counter_5+'" value=""'
                    + 'maxlength="80" autocomplete="off" />'
                   + '<button style="border: none; background: none; color: #0088cc; font-weight: bold; font-size: 1.3em;"'
                   + 'type="button" title="BATAL" id="btn_remove_5'+counter_5+'" val="'+counter_5+'" class="remove_5">X</button>'
                    + '</td></tr>';


                    for(m_5 = 1; m_5 < counter_5; m_5++)
                    {
                      $("#btn_remove_5"+m_5).hide();  
                    }

        $(".div_added_kolum_5").append("<tr>"+var_input1+"</tr>");
   
    ++counter_5; 
    $("#table_len_5").val(counter_5);
		if(counter_5 > <?php  if($table_len_5 == 0) echo 1; else echo $table_len_5; ?>)
		{
		$("#btn_batal").show();		
		}
    });
    
     /*****************************************************************************************
                          END: INPUT 5: INPUT KEMAHIRAN LAIN EXTRA 5
     *****************************************************************************************/





      /*****************************************************************************************
                          START: INPUT 6-I: INPUT KEMAHIRAN LAIN EXTRA 6-I
    *****************************************************************************************/

    $("#btn_tambah_6-I").bind("click", function() {

	    counter_6_I = $("#table_len_6_I").val();
    


   var var_input0 = '<tr  class="tambahInput_6_I'+counter_6_I+'"><td colspan="6" style="display: block; height: 30px;"></td></tr>'
                    +'<tr style="background: #f3f7f9; line-height: 1.8em;" class="tambahInput_6_I'+counter_6_I+'"><td align="right"><b>Maklumat '+counter_6_I+'</b></td>'
                    +	   '<td></td>'
                    +    '<td colspan="4" style="float: right;">'
                + '<button style="border: none; background: none; color: #0088cc; font-weight: bold; font-size: 1.3em;"'
                + 'type="button" title="BATAL" id="btn_remove_6_I'+counter_6_I+'" val="'+counter_6_I+'" class="remove_6_I">X</button>'
                + '</td></tr><tr><td>&nbsp;</td><td></td><td></td></tr>';

   var var_input1 = '<tr class="tambahInput_6_I'+counter_6_I+'">'
                        + '<td  align="right" style="width: 10%;">Nama Penulis</td>'
                        + '<td  align="center" style="width: 5%;">&nbsp;</td>'
                        + '<td colspan="4">'
                        +    '<input class="input_max_large" type="text" id="txt6_module_nama_penulis" name="txt6_pener_1_module_nama_penulis'+counter_6_I+'"' 
                        +        'value="<?php echo $row_get_penerbitan_terpilih['module_nama_penulis']; ?>"'
                        +      'maxlength="80" autocomplete="off" />'
                        +   '</td>';
                        + '</tr>';

  var var_input2 = '<tr class="tambahInput_6_I'+counter_6_I+'">'
                       + '<td  align="right">Tajuk</td>'
                       +   '<td  align="center">&nbsp;</td>'
                       +     '<td colspan="4">'
                       +       '<input class="input_max_large" type="text" id="txt6_module_tajuk" name="txt6_pener_1_module_tajuk'+counter_6_I+'"'  
                       +               'value="<?php echo $row_get_penerbitan_terpilih['module_tajuk']; ?>" maxlength="80"  autocomplete="off"/>'
                       +     '</td>'
                       + '</tr>';

var var_input3 = '<tr class="tambahInput_6_I'+counter_6_I+'">'
                     +  '<td align="right">Institusi</td>'
                     +   '<td  align="center">&nbsp;</td>'
                     +     '<td colspan="4">'
                     +       '<input class="input_max_large" type="text" id="txt6_module_institusi" name="txt6_pener_1_module_institusi'+counter_6_I+'"' 
                     +          'value="<?php echo $row_get_penerbitan_terpilih['module_institusi']; ?>" maxlength="80" autocomplete="off" />'
                     + '</td>'
                     + '</tr>';


                     for(m_6_I = 1; m_6_I < counter_6_I; m_6_I++)
                     {
                       $("#btn_remove_6_I"+m_6_I).hide();  
                     }

        $(".div_added_kolum_6_I").append("<tr>"+var_input0+var_input1+var_input2+var_input3+"</tr>");
   
    ++counter_6_I; 
    $("#table_len_6_I").val(counter_6_I);
		if(counter_6_I > <?php  if($table_len_6_I == 0) echo 1; else echo $table_len_6_I; ?>)
		{
		$("#btn_batal").show();		
		}
    });
    
     /*****************************************************************************************
                          END: INPUT 6-I: INPUT KEMAHIRAN LAIN EXTRA 6-I
     *****************************************************************************************/






      /*****************************************************************************************
                          START: INPUT 6-II: INPUT KEMAHIRAN LAIN EXTRA 6-II
    *****************************************************************************************/

    $("#btn_tambah_6-II").bind("click", function() {

	    counter_6_II = $("#table_len_6_II").val();
    

  // INPUT 6-II: INPUT KEMAHIRAN LAIN EXTRA 6-II

   var var_input0 =   '<tr class="tambahInput_6_II'+counter_6_II+'"><td colspan="6" style="display: block; height: 30px;"></td></tr>'
                     +'<tr style="background: #f3f7f9; line-height: 1.8em;" class="tambahInput_6_II'+counter_6_II+'"><td align="right"><b>Maklumat '+counter_6_II+'</b></td>'
                     +	   '<td></td>'
                     +    '<td colspan="4" style="float: right;">'
                + '<button style="border: none; background: none; color: #0088cc; font-weight: bold; font-size: 1.3em;"'
                + 'type="button" title="BATAL" id="btn_remove_6_II'+counter_6_II+'" val="'+counter_6_II+'" class="remove_6_II">X</button>'
                + '</td></tr><tr><td>&nbsp;</td><td></td><td></td></tr>';

   var var_input1 = '<tr class="tambahInput_6_II'+counter_6_II+'">'
                    + '<td  align="right">Nama</td>'
                    +    '<td  align="center">&nbsp;</td>'
                    +    '<td colspan="4">'
                    +      '<input class="input_max_large" type="text" id="txt6_indexed_journal_nama" name="txt6_pener_2_idx_journal_nama'+counter_6_II+'"' 
                    +           'value="" maxlength="80" autocomplete="off" />'
                    +    '</td>'
                    + '</tr>';

  var var_input2 = '<tr class="tambahInput_6_II'+counter_6_II+'">'
                      +  '<td  align="right">Tajuk</td>'
                      +    '<td  align="center">&nbsp;</td>'
                      +    '<td colspan="4">'
                      +      '<input class="input_max_large" type="text" id="txt6_indexed_journal_tajuk" name="txt6_pener_2_idx_journal_tajuk'+counter_6_II+'"'
                      +         'value="" maxlength="80"  autocomplete="off" />'
                      +    '</td>'
                      + '</tr>';

var var_input3 = '<tr class="tambahInput_6_II'+counter_6_II+'">'
                    +  '<td  align="right">Tahun</td>'
                     + '<td  align="center">&nbsp;</td>'
                      + '<td colspan="4">'
                       + '<select name="txt6_pener_2_idx_journal_tahun'+counter_6_II+'" style="width: 110px;">'
                        +  '<option>Pilih Tahun</option>'
                      + '<?php $tahun_terkini_idx_journal = date("Y"); ?>'
                              + '<?php for($i_idx_journal = $tahun_terkini_idx_journal; $i_idx_journal >= 1940; $i_idx_journal--){ ?>'
                           +   '<option <?php if($i_idx_journal == $row_get_penerbitan_terpilih['indexed_journal_tahun']){ echo "selected"; } ?>>'
                           +             '<?php echo $i_idx_journal; ?>'
                          +          '</option>'
                      + '<?php } ?>'
                    +    '</select>'     
                     + '</td>'
                     + '</tr>';

  var var_input4 = '<tr class="tambahInput_6_II'+counter_6_II+'">'
                     +   '<td  align="right">Penerbitan</td>'
                      +  '<td  align="center">&nbsp;</td>'
                       + '<td colspan="4">'
                        +  '<input class="input_max_large" type="text" id="txt6_indexed_journal_penerbitan" name="txt6_pener_2_idx_journal_penerbitan'+counter_6_II+'"'  
                         +   'value="" maxlength="80"  autocomplete="off" />'
                        + '</td>'
                      + '</tr>';


    var var_input5 = '<tr class="tambahInput_6_II'+counter_6_II+'">'
                        + '<td  align="right">Mukasurat/Halaman</td>'
                        + '<td  align="center">&nbsp;</td>'
                        + '<td colspan="4">'
                         + '<input class="input_max_large" type="text" id="txt6_indexed_journal_mukasurat"'
                           + 'name="txt6_pener_2_idx_journal_mukasurat'+counter_6_II+'" value=""' 
                           + 'maxlength="80" autocomplete="off" />'
                        + '</td>'
                    + '</tr>';


                    for(m_6_II = 1; m_6_II < counter_6_II; m_6_II++)
                    {
                      $("#btn_remove_6_II"+m_6_II).hide();  
                    }
  

        $(".div_added_kolum_6_II").append("<tr>"+var_input0+var_input1+var_input2+var_input3+var_input4+var_input5+"</tr>");
   
    ++counter_6_II; 
    $("#table_len_6_II").val(counter_6_II);
		if(counter_6_II > <?php  if($table_len_6_II == 0) echo 1; else echo $table_len_6_II; ?>)
		{
		$("#btn_batal").show();		
		}
    });
    
     /*****************************************************************************************
                          END: INPUT 6-II: INPUT KEMAHIRAN LAIN EXTRA 6-II
     *****************************************************************************************/







     /*****************************************************************************************
                          START: INPUT 6-III: INPUT KEMAHIRAN LAIN EXTRA 6-III
    *****************************************************************************************/

    $("#btn_tambah_6-III").bind("click", function() {

	    counter_6_III = $("#table_len_6_III").val();
    

  // INPUT 6-III: INPUT KEMAHIRAN LAIN EXTRA 6-III

   var var_input0 = 
                    '<tr class="tambahInput_6_III'+counter_6_III+'"><td colspan="6" style="display: block; height: 30px;"></td></tr>'
                    +'<tr style="background: #f3f7f9; line-height: 1.8em;" class="tambahInput_6_III'+counter_6_III+'"><td align="right"><b>Maklumat '+counter_6_III+'</b></td>'
                    +	   '<td></td>'
                    +    '<td colspan="4" style="float: right;">'
                    + '<button style="border: none; background: none; color: #0088cc; font-weight: bold; font-size: 1.3em;"'
                    + 'type="button" title="BATAL" id="btn_remove_6_III'+counter_6_III+'" val="'+counter_6_III+'" class="remove_6_III">X</button>'
                    + '</td></tr><tr><td>&nbsp;</td><td></td><td></td></tr>';

   var var_input1 = '<tr class="tambahInput_6_III'+counter_6_III+'">'
                     + '<td  align="right">Nama Penulis</td>'
                     +   '<td  align="center">&nbsp;</td>'
                     +    '<td colspan="4">'
                     +     '<input class="input_max_large" type="text" id="txt6_reviewed_journal_nama_penulis" name="txt6_pener_3_rev_journal_nama'+counter_6_III+'"' 
                     +         'value="" maxlength="80" autocomplete="off" />'
                     +   '</td>'
                     + '</tr>';

  var var_input2 = '<tr class="tambahInput_6_III'+counter_6_III+'">'
                      + '<td  align="right">Tajuk</td>'
                      +    '<td  align="center">&nbsp;</td>'
                      +      '<td colspan="4">'
                      +         '<input class="input_max_large"'
                      +              'type="text" id="txt6_reviewed_journal_tajuk" name="txt6_pener_3_rev_journal_tajuk'+counter_6_III+'"'  
                      +               'value="" maxlength="80"'  
                      +                'autocomplete="off" />'
                      +     '</td>'
                      + '</tr>';

var var_input3 = '<tr class="tambahInput_6_III'+counter_6_III+'">'
                    +  '<td  align="right">Tahun</td>'
                    +     '<td  align="center">&nbsp;</td>'
                    +        '<td colspan="4">'
                    +           '<select name="txt6_pener_3_rev_journal_tahun'+counter_6_III+'" style="width: 110px;">'
                    +          '<option>Pilih Tahun</option>'
                    +            '<?php $tahun_rev_journal = date("Y"); ?>'
                    +           '<?php for($i_rev_journal = $tahun_rev_journal; $i_rev_journal >= 1940; $i_rev_journal--){ ?>'
                    +             '<option <?php if($i_rev_journal == $row_get_penerbitan_terpilih['reviewed_journal_tahun']){ echo "selected"; } ?>>'
                    +             '<?php echo $i_rev_journal; ?>'
                    +          '</option>'
                    +       '<?php } ?>'
                    +    '</select>'     
                    + '</td>'
                    + '</tr>';

  var var_input4 = '<tr class="tambahInput_6_III'+counter_6_III+'">'
                      +  '<td  align="right">Penerbitan</td>'
                      +     '<td  align="center">&nbsp;</td>'
                      +        '<td colspan="4">'
                      +      '<input class="input_max_large" type="text" id="txt6_reviewed_journal_penerbitan" name="txt6_pener_3_rev_journal_penerbitan'+counter_6_III+'"'  
                      +            'value="" maxlength="80" autocomplete="off" />'
                      +      '</td>'
                      + '</tr>';


    var var_input5 = '<tr class="tambahInput_6_III'+counter_6_III+'">'
                    +  '<td  align="right">Mukasurat/Halaman</td>'
                    +     '<td  align="center">&nbsp;</td>'
                    +        '<td colspan="4">'
                    +          '<input class="input_max_large" type="text" id="txt6_reviewed_journal_mukasurat" name="txt6_pener_3_rev_journal_mukasurat'+counter_6_III+'"'  
                    +                  'value="" maxlength="80" autocomplete="off" />'
                    +        '</td>'
                    + '</tr>';
  

                    for(m_6_III = 1; m_6_III < counter_6_III; m_6_III++)
                    {
                      $("#btn_remove_6_III"+m_6_III).hide();  
                    }

        $(".div_added_kolum_6_III").append("<tr>"+var_input0+var_input1+var_input2+var_input3+var_input4+var_input5+"</tr>");
   
    ++counter_6_III; 
    $("#table_len_6_III").val(counter_6_III);
		if(counter_6_III > <?php  if($table_len_6_III == 0) echo 1; else echo $table_len_6_III; ?>)
		{
		$("#btn_batal").show();		
		}
    });
    
     /*****************************************************************************************
                          END: INPUT 6-III: INPUT KEMAHIRAN LAIN EXTRA 6-III
     *****************************************************************************************/





      /*****************************************************************************************
                          START: INPUT 6-IV: INPUT KEMAHIRAN LAIN EXTRA 6-IV
    *****************************************************************************************/

    $("#btn_tambah_6-IV").bind("click", function() {

	    counter_6_IV = $("#table_len_6_IV").val();
    

  // INPUT 6-IV: INPUT KEMAHIRAN LAIN EXTRA 6-IV

   var var_input0 = '<tr class="tambahInput_6_IV'+counter_6_IV+'"><td colspan="6" style="display: block; height: 30px;"></td></tr>'
                      +'<tr style="background: #f3f7f9; line-height: 1.8em;" class="tambahInput_6_IV'+counter_6_IV+'"><td align="right"><b>Maklumat '+counter_6_IV+'</b></td>'
                      +	   '<td></td>'
                      +    '<td colspan="4" style="float: right;">'
                + '<button style="border: none; background: none; color: #0088cc; font-weight: bold; font-size: 1.3em;"'
                + 'type="button" title="BATAL" id="btn_remove_6_IV'+counter_6_IV+'" val="'+counter_6_IV+'" class="remove_6_IV">X</button>'
                + '</td></tr><tr><td>&nbsp;</td><td></td><td></td></tr>';

   var var_input1 = '<tr class="tambahInput_6_IV'+counter_6_IV+'">'
                    + '<td  align="right">Nama Penulis</td>'
                    +   '<td  align="center">&nbsp;</td>'
                    +    '<td colspan="4">'
                    +     '<input class="input_max_large" type="text" id="txt6_pener_4_proceeding_nama_penulis"'
                    +           'name="txt6_pener_4_proceeding_nama_penulis'+counter_6_IV+'"  value=""' 
                    +           'maxlength="80"  autocomplete="off" />'
                    +   '</td>'
                    + '</tr>';

  var var_input2 = '<tr class="tambahInput_6_IV'+counter_6_IV+'">'
                   + '<td  align="right">Tajuk</td>'
                   +    '<td  align="center">&nbsp;</td>'
                   +      '<td colspan="4">'
                   +         '<input class="input_max_large"'
                   +              'type="text" id="txt6_pener_4_proceeding_tajuk" name="txt6_pener_4_proceeding_tajuk'+counter_6_IV+'"'  
                   +               'value=""'  
                   +                'autocomplete="off" />'
                   +     '</td>'
                   + '</tr>';

var var_input3 = '<tr class="tambahInput_6_IV'+counter_6_IV+'">'
                  + '<td  align="right">Persidangan</td>'
                  + '<td  align="center">&nbsp;</td>'
                  + '<td colspan="4">'
                  + '<input class="input_max_large" type="text" id="txt6_pener_4_proceeding_persidangan" name="txt6_pener_4_proceeding_persidangan'+counter_6_IV+'"'  
                  +   'value="" maxlength="80" autocomplete="off" />'
                  + '</td>'
                  + '</tr>';

  var var_input4 = '<tr class="tambahInput_6_IV'+counter_6_IV+'">'
                  +  '<td  align="right">Tahun</td>'
                  +     '<td  align="center">&nbsp;</td>'
                  +        '<td colspan="4">'
                  +           '<select name="txt6_pener_4_proceeding_tahun'+counter_6_IV+'" style="width: 110px;">'
                  +          '<option>Pilih Tahun</option>'
                  +            '<?php $tahun_proceeding_pener = date("Y"); ?>'
                  +           '<?php for($i_tahun_pener = $tahun_proceeding_pener; $i_tahun_pener >= 1940; $i_tahun_pener--){ ?>'
                  +             '<option <?php if($i_tahun_pener == $row_get_penerbitan_terpilih['proceeding_tahun']){ echo "selected"; } ?>>'
                  +             '<?php echo $i_tahun_pener; ?>'
                  +          '</option>'
                  +       '<?php } ?>'
                  +    '</select>'     
                  + '</td>'
                  + '</tr>';

                  for(m_6_IV = 1; m_6_IV < counter_6_IV; m_6_IV++)
                  {
                    $("#btn_remove_6_IV"+m_6_IV).hide();  
                  }


  
        $(".div_added_kolum_6_IV").append("<tr>"+var_input0+var_input1+var_input2+var_input3+var_input4+"</tr>");
   
    ++counter_6_IV; 
    $("#table_len_6_IV").val(counter_6_IV);
		if(counter_6_IV > <?php  if($table_len_6_IV == 0) echo 1; else echo $table_len_6_IV; ?>)
		{
		$("#btn_batal").show();		
		}
    });
    
     /*****************************************************************************************
                          END: INPUT 6-IV: INPUT KEMAHIRAN LAIN EXTRA 6-IV
     *****************************************************************************************/







    /*****************************************************************************************
                          START: INPUT 6-V: INPUT KEMAHIRAN LAIN EXTRA 6-V
    *****************************************************************************************/

    $("#btn_tambah_6-V").bind("click", function() {

	    counter_6_V = $("#table_len_6_V").val();
    

  // INPUT 6-V: INPUT KEMAHIRAN LAIN EXTRA 6-V

   var var_input0 = '<tr class="tambahInput_6_V'+counter_6_V+'"><td colspan="6" style="display: block; height: 30px;"></td></tr>'
                    +'<tr style="background: #f3f7f9; line-height: 1.8em;" class="tambahInput_6_V'+counter_6_V+'"><td align="right"><b>Maklumat '+counter_6_V+'</b></td>'
                    +	   '<td></td>'
                    +    '<td colspan="4" style="float: right;">'
                    + '<button style="border: none; background: none; color: #0088cc; font-weight: bold; font-size: 1.3em;"'
                    + 'type="button" title="BATAL" id="btn_remove_6_V'+counter_6_V+'" val="'+counter_6_V+'" class="remove_6_V">X</button>'
                    + '</td></tr><tr><td>&nbsp;</td><td></td><td></td></tr>';

   var var_input1 = '<tr class="tambahInput_6_V'+counter_6_V+'">'
                    +  '<td  align="right"><i>Newspaper</i></td>'
                    +     '<td  align="center">&nbsp;</td>'
                    +     '<td colspan="4">'
                    +        '<input class="input_max_large" type="text" id="txt6_media_massa_newspaper"'
                    +           '   name="txt6_pener_5_media_masa_newspaper'+counter_6_V+'" value=""' 
                    +              'maxlength="80" autocomplete="off" />'
                    +    '</td>'
                    + '</tr>';

  var var_input2 = '<tr class="tambahInput_6_V'+counter_6_V+'">'
                    +   '<td  align="right"><i>Radio</i></td>'
                    +     '<td  align="center">&nbsp;</td>'
                    +        '<td colspan="4">'
                    +            '<input class="input_max_large" type="text" id="txt6_pener_5_media_masa_radio" name="txt6_pener_5_media_masa_radio'+counter_6_V+'"'  
                    +               'value="" maxlength="80" autocomplete="off" />'
                    +       '</td>'
                    + '</tr>';

var var_input3 = '<tr class="tambahInput_6_V'+counter_6_V+'">'
                    + '<td  align="right"><i>Tv</i></td>'
                    +   '<td  align="center">&nbsp;</td>'
                    +    '<td colspan="4">'
                    +       '<input class="input_max_large" type="text" id="txt6_pener_5_media_masa_tv" name="txt6_pener_5_media_masa_tv'+counter_6_V+'"'  
                    +            'value="" maxlength="80" autocomplete="off" />'
                    +     '</td>'
                    + '</tr>';

  var var_input4 = '<tr class="tambahInput_6_V'+counter_6_V+'">'
                    + '<td  align="right"><i>Popular</i></td>'
                    +   '<td  align="center">&nbsp;</td>'
                    +    '<td colspan="4">'
                    +     '<input class="input_max_large" type="text" id="txt6_pener_5_media_masa_popular" name="txt6_pener_5_media_masa_popular'+counter_6_V+'"'  
                    +             'value="" maxlength="80" autocomplete="off" />'
                    +      '</td>'
                    + '</tr>';

  var var_input5 = '<tr class="tambahInput_6_V'+counter_6_V+'">'
                  + '<td  align="right"><i>Magazine</i></td>'
                  +    '<td  align="center">&nbsp;</td>'
                  +     '<td colspan="4">'
                  +       '<input class="input_max_large" type="text" id="txt6_pener_5_media_masa_magazine" name="txt6_pener_5_media_masa_magazine'+counter_6_V+'"'  
                  +            'value="" maxlength="80" autocomplete="off" />'
                  +    '</td>'
                  + '</tr>';

  var var_input6 = '<tr class="tambahInput_6_V'+counter_6_V+'">'
                  + '<td  align="right"><i>Nama</i></td>'
                  +    '<td  align="center">&nbsp;</td>'
                  +     '<td colspan="4">'
                  +      '<input class="input_max_large" type="text" id="txt6_pener_5_media_masa_nama" name="txt6_pener_5_media_masa_nama'+counter_6_V+'"'  
                  +         'value="" maxlength="80" autocomplete="off" />'
                  +    '</td>'
                  + '</tr>';

  var var_input7 = '<tr class="tambahInput_6_V'+counter_6_V+'">'
                    +  '<td  align="right"><i>Tajuk</i></td>'
                    +     '<td  align="center">&nbsp;</td>'
                    +      '<td colspan="4">'
                    +       '<input class="input_max_large" type="text" id="txt6_pener_5_media_masa_tajuk" name="txt6_pener_5_media_masa_tajuk'+counter_6_V+'"'  
                    +            'value="" maxlength="80" autocomplete="off" />'
                    +    '</td>'
                    + '</tr>';

  var var_input8 = '<tr class="tambahInput_6_V'+counter_6_V+'">'
                      +  '<td  align="right"><i>Tempat</i></td>'
                      +  '<td  align="center">&nbsp;</td>'
                      +  '<td colspan="4">'
                      +   '<input class="input_max_large"'
                      +       'type="text" id="txt6_pener_5_media_masa_tempat" name="txt6_pener_5_media_masa_tempat'+counter_6_V+'" value=""' 
                      +       'maxlength="80" autocomplete="off" />'
                      +  '</td>'
                      + '</tr>';

  var var_input9 = '<tr class="tambahInput_6_V'+counter_6_V+'">'
                    + '<td  align="right"><i>Tarikh</i></td>'
                    +  '<td  align="center">&nbsp;</td>'
                    +  '<td colspan="4">'
                    +    '<input type="text" id="txt6_pener_5_media_masa_tarikh" name="txt6_pener_5_media_masa_tarikh'+counter_6_V+'" value=""' 
                    +         'maxlength="10" autocomplete="off" style="width: 100px;" /><span> <i>&nbsp;Format: dd-mm-yyyy (Cth: 31-01-2018)</i></span>'
                    +    '</td>'
                    + '</tr>';

                    for(m_6_V = 1; m_6_V < counter_6_V; m_6_V++)
                    {
                      $("#btn_remove_6_V"+m_6_V).hide();  
                    }
  
        $(".div_added_kolum_6_V").append("<tr>"+var_input0+var_input1+var_input2+var_input3+var_input4+var_input5+var_input6+var_input7+var_input8+var_input9+"</tr>");
   
    ++counter_6_V; 
    $("#table_len_6_V").val(counter_6_V);
		if(counter_6_V > <?php  if($table_len_6_V == 0) echo 1; else echo $table_len_6_V; ?>)
		{
		$("#btn_batal").show();		
		}
    });
    
     /*****************************************************************************************
                          END: INPUT 6-V: INPUT KEMAHIRAN LAIN EXTRA 6-V
     *****************************************************************************************/









    /*****************************************************************************************
                          START: INPUT 6-VI: INPUT KEMAHIRAN LAIN EXTRA 6-VI
    *****************************************************************************************/

    $("#btn_tambah_6-VI").bind("click", function() {

	    counter_6_VI = $("#table_len_6_VI").val();
    

  // INPUT 6-VI: INPUT KEMAHIRAN LAIN EXTRA 6-VI

   var var_input0 = '<tr class="tambahInput_6_VI'+counter_6_VI+'"><td colspan="6" style="display: block; height: 30px;"></td></tr>'
                  +'<tr style="background: #f3f7f9; line-height: 1.8em;" class="tambahInput_6_VI'+counter_6_VI+'"><td align="right"><b>Maklumat '+counter_6_VI+'</b></td>'
                  +	   '<td></td>'
                  +    '<td colspan="4" style="float: right;">'
                + '<button style="border: none; background: none; color: #0088cc; font-weight: bold; font-size: 1.3em;"'
                + 'type="button" title="BATAL" id="btn_remove_6_VI'+counter_6_VI+'" val="'+counter_6_VI+'" class="remove_6_VI">X</button>'
                + '</td></tr><tr><td>&nbsp;</td><td></td><td></td></tr>';

   var var_input1 = '<tr class="tambahInput_6_VI'+counter_6_VI+'">'
                  +   '<td  align="right"><i>Tape</i></td>'
                  +   '<td  align="center">&nbsp;</td>'
                  +   '<td colspan="4">'
                  +        '<input class="input_max_large" type="text" id="txt6_pener_6_media_lain_tape" name="txt6_pener_6_media_lain_tape'+counter_6_VI+'"'  
                  +              'value="" maxlength="80" autocomplete="off" />'
                  +   '</td>'
                  + '</tr>';

  var var_input2 = '<tr class="tambahInput_6_VI'+counter_6_VI+'">'
                  +   '<td  align="right">Video</td>'
                  +   '<td  align="center">&nbsp;</td>'
                  +   '<td colspan="4">'
                  +         '<input class="input_max_large" type="text" id="txt6_pener_6_media_lain_video" name="txt6_pener_6_media_lain_video'+counter_6_VI+'"'  
                  +                'value="" maxlength="80" autocomplete="off" />'
                  +    '</td>'
                  + '</tr>';

var var_input3 = '<tr class="tambahInput_6_VI'+counter_6_VI+'">'
                  +   '<td  align="right">Internet</td>'
                  +   '<td  align="center">&nbsp;</td>'
                  +   '<td colspan="4">'
                  +        '<input class="input_max_large" type="text" id="txt6_pener_6_media_lain_internet" name="txt6_pener_6_media_lain_internet'+counter_6_VI+'"'  
                  +                'value="" maxlength="80" autocomplete="off" />'
                  +   '</td>'
                  + '</tr>';

  var var_input4 = '<tr class="tambahInput_6_VI'+counter_6_VI+'">'
                  +   '<td  align="right">Nama</td>'
                  +   '<td  align="center">&nbsp;</td>'
                  +   '<td colspan="4">'
                  +        '<input class="input_max_large" type="text" id="txt6_pener_6_media_lain_nama" name="txt6_pener_6_media_lain_nama'+counter_6_VI+'"'  
                  +              'value="" maxlength="80" autocomplete="off" />'
                  +   '</td>'
                  + '</tr>';

  var var_input5 = '<tr class="tambahInput_6_VI'+counter_6_VI+'">'
                  +     '<td  align="right">Tajuk</td>'
                  +     '<td  align="center">&nbsp;</td>'
                  +     '<td colspan="4">'
                  +           '<input class="input_max_large" type="text" id="txt6_pener_6_media_lain_tajuk" name="txt6_pener_6_media_lain_tajuk'+counter_6_VI+'"'  
                  +                  'value="" maxlength="80" autocomplete="off" />'
                  +     '</td>'
                  + '</tr>';


  var var_input6 = '<tr class="tambahInput_6_VI'+counter_6_VI+'">'
                  +    '<td  align="right">Tempat</td>'
                  +    '<td  align="center">&nbsp;</td>'
                  +    '<td colspan="4">'
                  +        '<input class="input_max_large" type="text" id="txt6_pener_6_media_lain_tempat" name="txt6_pener_6_media_lain_tempat'+counter_6_VI+'" value=""'
                  +              'maxlength="80" autocomplete="off" />'
                  +     '</td>'
                  + '</tr>';

  var var_input7 = '<tr class="tambahInput_6_VI'+counter_6_VI+'">'
                  +      '<td  align="right">Tarikh</td>'
                  +      '<td  align="center">&nbsp;</td>'
                  +      '<td colspan="4">'
                  +          '<input class="input_max_large" type="text" id="txt6_pener_6_media_lain_tarikh" name="txt6_pener_6_media_lain_tarikh'+counter_6_VI+'"'  
                  +              'value="" maxlength="10" autocomplete="off" style="width: 100px;" /><span> <i>&nbsp;Format: dd-mm-yyyy (Cth: 31-01-2018)</i></span>'
                  +      '</td>'
                  + '</tr>';

                  for(m_6_VI = 1; m_6_VI < counter_6_VI; m_6_VI++)
                  {
                    $("#btn_remove_6_VI"+m_6_VI).hide();  
                  }

  
        $(".div_added_kolum_6_VI").append("<tr>"+var_input0+var_input1+var_input2+var_input3+var_input4+var_input5+var_input6+var_input7+"</tr>");
   
    ++counter_6_VI; 
    $("#table_len_6_VI").val(counter_6_VI);
		if(counter_6_VI > <?php  if($table_len_6_VI == 0) echo 1; else echo $table_len_6_VI; ?>)
		{
		$("#btn_batal").show();		
		}
    });
    
     /*****************************************************************************************
                          END: INPUT 6-VI: INPUT KEMAHIRAN LAIN EXTRA 6-VI
     *****************************************************************************************/






     
    /*****************************************************************************************
                          START: INPUT 7: INPUT KEMAHIRAN LAIN EXTRA 7
    *****************************************************************************************/

    $("#btn_tambah_7").bind("click", function() {

	    counter_7 = $("#table_len_7").val();
    

  // INPUT 7: INPUT KEMAHIRAN LAIN EXTRA 7



   var var_input0 = '<tr class="tambahInput_7'+counter_7+'"><td colspan="6" style="display: block; height: 30px;"></td></tr>'
                   + '<tr style="background: #f3f7f9; line-height: 1.8em;" class="tambahInput_7'+counter_7+'">'
                   +    '<td  align="right"><b>Maklumat '+counter_7+'</b></td>'
                   + '<td></td>'
                   +    '<td colspan="4" style="float: right;">'
                + '<button style="border: none; background: none; color: #0088cc; font-weight: bold; font-size: 1.3em;"'
                + 'type="button" title="BATAL" id="btn_remove_7'+counter_7+'" val="'+counter_7+'" class="remove_7">X</button>'
                + '</td></tr><tr><td>&nbsp;</td><td></td><td></td></tr>';
                        

   var var_input1 = 
                   +       '<tr class="tambahInput_7'+counter_7+'">'
                   +          '<td  align="right">Nama</td>'
                   +            '<td  align="center">&nbsp;</td>'
                   +            '<td colspan="4">'
                   +               '<input class="input_max_large" type="text" id="txt7_penyelidikan_nama" name="txt7_penyelidikan_nama'+counter_7+'" value=""' 
                   +                  'maxlength="80" autocomplete="off" />'
                   +      '</td>'
                   + '</tr>';

  var var_input2 = '<tr class="tambahInput_7'+counter_7+'">'
                   +   '<td  align="right">Tajuk Projek</td>'
                   +     '<td  align="center">&nbsp;</td>'
                   +       '<td colspan="4">'
                   +         '<input class="input_max_large" type="text" id="txt7_penyelidikan_tajuk"'
                   +              'name="txt7_penyelidikan_tajuk'+counter_7+'" value=""' 
                   +              'maxlength="80" autocomplete="off" />'
                   +      '</td>'
                   + '</tr>';

var var_input3 = '<tr class="tambahInput_7'+counter_7+'">'
                   + '<td  align="right">Jawatan/Tugas</td>'
                   + '<td  align="center">&nbsp;</td>'
                   + '<td colspan="4">'
                   +  '<input class="input_max_large" type="text" id="txt7_penyelidikan_jawatan"'
                   +    'name="txt7_penyelidikan_jawatan'+counter_7+'" value=""' 
                   +   'maxlength="80" autocomplete="off" />'
                   + '</td>'
                   + '</tr>';

  var var_input4 = '<tr class="tambahInput_7'+counter_7+'">'
                   +      '<td  align="right">Sumber</td>'
                   +      '<td  align="center">&nbsp;</td>'
                   +      '<td colspan="4">'
                   +         '<input class="input_max_large" type="text" id="txt7_penyelidikan_sumber" name="txt7_penyelidikan_sumber'+counter_7+'"'  
                   +                 'value="" maxlength="80" autocomplete="off" />'
                   +       '</td>'
                   + '</tr>';

  var var_input5 = '<tr class="tambahInput_7'+counter_7+'">'
                   +      '<td  align="right">Dana</td>'
                   +      '<td  align="center">&nbsp;</td>'
                   +      '<td colspan="4">'
                   +          '<input class="input_max_large" type="text" id="txt7_penyelidikan_dana" name="txt7_penyelidikan_dana'+counter_7+'"'  
                   +               'value="" maxlength="80" autocomplete="off" />'
                   +      '</td>'
                   + '</tr>';


  var var_input6 = '<tr class="tambahInput_7'+counter_7+'">'
                   +      '<td  align="right">Dari</td>'
                   +      '<td  align="center">&nbsp;</td>'
                   +      '<td colspan="4">'
                   +          '<input type="text" id="txt7_penyelidikan_tarikh_mula" name="txt7_penyelidikan_tarikh_mula'+counter_7+'" value=""'
                   +               'style="width: 100px;" maxlength="10" autocomplete= "off" /><span> <i>&nbsp;Format: dd-mm-yyyy (Cth: 31-01-2018)</i></span>'
                   +      '</td>'
                   + '</tr>';

  var var_input7 = '<tr class="tambahInput_7'+counter_7+'">'
                  +    '<td  align="right">Hingga</td>'
                  +    '<td  align="center">&nbsp;</td>'
                  +    '<td colspan="4">'
                  +            '<input type="text" id="txt7_penyelidikan_tarikh_tamat" name="txt7_penyelidikan_tarikh_tamat'+counter_7+'" value=""' 
                  +                    'style="width: 100px;" maxlength="10" autocomplete= "off" /><span> <i>&nbsp;Format: dd-mm-yyyy (Cth: 31-01-2018)</i></span>'
                  +    '</td>'
                  + '</tr>';

                  for(m_7 = 1; m_7 < counter_7; m_7++)
                  {
                    $("#btn_remove_7"+m_7).hide();  
                  }

  
        $(".div_added_kolum_7").append("<tr>"+var_input0+var_input1+var_input2+var_input3+var_input4+var_input5+var_input6+var_input7+"</tr>");
   
    ++counter_7; 
    $("#table_len_7").val(counter_7);
		if(counter_7 > <?php  if($table_len_7 == 0) echo 1; else echo $table_len_7; ?>)
		{
		$("#btn_batal").show();		
		}
    });
    
     /*****************************************************************************************
                          END: INPUT 7: INPUT KEMAHIRAN LAIN EXTRA 7
     *****************************************************************************************/








    /*****************************************************************************************
                          START: INPUT 8: INPUT KEMAHIRAN LAIN EXTRA 8
    *****************************************************************************************/

    $("#btn_tambah_8").bind("click", function() {

	    counter_8 = $("#table_len_8").val();
    

  // INPUT 8: INPUT KEMAHIRAN LAIN EXTRA 8

   var var_input0 = '<tr class="tambahInput_8'+counter_8+'"><td colspan="6" style="display: block; height: 30px;"></td></tr>'
                    + '<tr style="background: #f3f7f9; line-height: 1.8em;" class="tambahInput_8'+counter_8+'">'
                    +   '<td  align="right"><b>Maklumat '+counter_8+'</b></td>'
                    +   '<td  align="center">&nbsp;</td>'
                    +    '<td colspan="4" style="float: right;">'
                    + '<button style="border: none; background: none; color: #0088cc; font-weight: bold; font-size: 1.3em;"'
                    + 'type="button" title="BATAL" id="btn_remove_8'+counter_8+'" val="'+counter_8+'" class="remove_8">X</button>'
                    + '</td></tr><tr><td>&nbsp;</td><td></td><td></td></tr>';
                        

   var var_input1 = '<tr class="tambahInput_8'+counter_8+'">'
                    +    '<td  align="right">Tajuk Projek</td>'
                    +    '<td  align="center">&nbsp;</td>'
                    +    '<td colspan="4">'
                    +         '<input class="input_max_large" type="text" id="txt8_consultancy_tajuk" name="txt8_consultancy_tajuk'+counter_8+'"'  
                    +                'value="" maxlength="80" autocomplete="off" />'
                    +    '</td>'
                    + '</tr>';

  var var_input2 = '<tr class="tambahInput_8'+counter_8+'">'
                    +       '<td  align="right">Jawatan/Peranan</td>'
                    +       '<td  align="center">&nbsp;</td>'
                    +       '<td colspan="4">'
                    +            '<input class="input_max_large" type="text" id="txt8_consultancy_jawatan" name="txt8_consultancy_jawatan'+counter_8+'"' 
                    +                  'value="" maxlength="80" autocomplete="off" />'
                    +       '</td>'
                    + '</tr>';

var var_input3 =      '<tr class="tambahInput_8'+counter_8+'">'
                    +        '<td  align="right">Dari</td>'
                    +        '<td  align="center">&nbsp;</td>'
                    +        '<td colspan="4">'
                    +             '<input type="text" id="txt8_consultancy_tarikh_mula" name="txt8_consultancy_tarikh_mula'+counter_8+'" value=""' 
                    +                   'style="width: 100px;" maxlength="10" autocomplete="off" /><span> <i>&nbsp;Format: dd-mm-yyyy (Cth: 31-01-2018)</i></span>'
                    +        '</td>'
                    + '</tr>';

  var var_input4 = '<tr class="tambahInput_8'+counter_8+'">'
                    +     '<td  align="right">Hingga</td>'
                    +     '<td  align="center">&nbsp;</td>'
                    +     '<td colspan="4">'
                    +         '<input type="text" id="txt8_consultancy_tarikh_tamat" name="txt8_consultancy_tarikh_tamat'+counter_8+'" value=""' 
                    +                 'style="width: 100px;" maxlength="10" autocomplete="off" /><span> <i>&nbsp;Format: dd-mm-yyyy (Cth: 31-01-2018)</i></span>'
                    +     '</td>'
                    + '</tr>';

  var var_input5 = '<tr class="tambahInput_8'+counter_8+'">'
                    +      '<td  align="right">Organisasi</td>'
                    +      '<td  align="center">&nbsp;</td>'
                    +      '<td colspan="4">'
                    +          '<input class="input_max_large" type="text" id="txt8_consultancy_organisasi" name="txt8_consultancy_organisasi'+counter_8+'" value=""' 
                    +                'maxlength="80" autocomplete="off" />'
                    +      '</td>'
                    + '</tr>';

                    for(m_8 = 1; m_8 < counter_8; m_8++)
                    {
                      $("#btn_remove_8"+m_8).hide();  
                    }


  
        $(".div_added_kolum_8").append("<tr>"+var_input0+var_input1+var_input2+var_input3+var_input4+var_input5+"</tr>");
   
    ++counter_8; 
    $("#table_len_8").val(counter_8);
		if(counter_8 > <?php  if($table_len_8 == 0) echo 1; else echo $table_len_8; ?>)
		{
		$("#btn_batal").show();		
		}
    });
    
     /*****************************************************************************************
                          END: INPUT 8: INPUT KEMAHIRAN LAIN EXTRA 8
     *****************************************************************************************/








    /*****************************************************************************************
                          START: INPUT 9: INPUT KEMAHIRAN LAIN EXTRA 9
    *****************************************************************************************/

    $("#btn_tambah_9").bind("click", function() {

	    counter_9 = $("#table_len_9").val();
    

  // INPUT 9: INPUT KEMAHIRAN LAIN EXTRA 9

   var var_input0 = '<tr class="tambahInput_9'+counter_9+'"><td colspan="6" style="display: block; height: 30px;"></td></tr>'
                    + '<tr style="background: #f3f7f9; line-height: 1.8em;" class="tambahInput_9'+counter_9+'">'
                    +     '<td  align="right"><b>Maklumat '+counter_9+'</b></td>'
                    +     '<td  align="center">&nbsp;</td>'
                    +    '<td colspan="4" style="float: right;">'
                    + '<button style="border: none; background: none; color: #0088cc; font-weight: bold; font-size: 1.3em;"'
                    + 'type="button" title="BATAL" id="btn_remove_9'+counter_9+'" val="'+counter_9+'" class="remove_9">X</button>'
                    + '</td></tr><tr><td>&nbsp;</td><td></td><td></td></tr>';
                        

   var var_input1 = '<tr class="tambahInput_9'+counter_9+'">'
                    +     '<td  align="right">Tajuk</td>'
                    +     '<td  align="center">&nbsp;</td>'
                    +     '<td colspan="4">'
                    +          '<input class="input_max_large" type="text" id="txt9_pembentangan_tajuk" name="txt9_pembentangan_tajuk'+counter_9+'"'  
                    +                  'value="" maxlength="80" autocomplete="off" />'
                    +      '</td>'
                    + '</tr>';

  var var_input2 =   '<tr class="tambahInput_9'+counter_9+'">'
                    +    '<td  align="right">Nama Acara</td>'
                    +    '<td  align="center">&nbsp;</td>'
                    +    '<td colspan="4">'
                    +        '<input class="input_max_large" type="text" id="txt9_pembentangan_nama_acara"'
                    +               'name="txt9_pembentangan_nama_acara'+counter_9+'" value=""' 
                    +               'maxlength="80" autcomplete="off" />'
                    +     '</td>'
                    + '</tr>';

var var_input3 = '<tr class="tambahInput_9'+counter_9+'">'
                    +    '<td  align="right">Tarikh Pembentangan</td>'
                    +    '<td  align="center">&nbsp;</td>'
                    +    '<td colspan="4">'
                    +         '<input type="text" id="txt9_pembentangan_tarikh" name="txt9_pembentangan_tarikh'+counter_9+'"'
                    +              'style="width: 100px;" value="" maxlength="10" autocomplete="off" /><span> <i>&nbsp;Format: dd-mm-yyyy (Cth: 31-01-2018)</i></span>'
                    +     '</td>'
                    + '</tr>';

  var var_input4 = '<tr class="tambahInput_9'+counter_9+'">'
                    +    '<td  align="right">Penganjur</td>'
                    +    '<td  align="center">&nbsp;</td>'
                    +    '<td colspan="4">'
                    +         '<input class="input_max_large" type="text" id="txt9_pembentangan_penganjur"'
                    +               'name="txt9_pembentangan_penganjur'+counter_9+'" value=""' 
                    +               'maxlength="80" autocomplete="off" />'
                    +     '</td>'
                    + '</tr>';

  var var_input5 =   '<tr class="tambahInput_9'+counter_9+'">'
                    +    '<td  align="right">Peringkat</td>'
                    +     '<td  align="center">&nbsp;</td>'
                    +     '<td colspan="4">'
                    +           '<input class="input_max_large" type="text" id="txt9_pembentangan_peringkat" name="txt9_pembentangan_peringkat'+counter_9+'"' 
                    +               'value="" maxlength="80" autocomplete="off" />'
                    +     '</td>'
                    + '</tr>';

                    for(m_9 = 1; m_9 < counter_9; m_9++)
                    {
                      $("#btn_remove_9"+m_9).hide();  
                    }
  
        $(".div_added_kolum_9").append("<tr>"+var_input0+var_input1+var_input2+var_input3+var_input4+var_input5+"</tr>");
   
    ++counter_9; 
    $("#table_len_9").val(counter_9);
		if(counter_9 > <?php  if($table_len_9 == 0) echo 1; else echo $table_len_9; ?>)
		{
		$("#btn_batal").show();		
		}
    });
    
     /*****************************************************************************************
                          END: INPUT 9: INPUT KEMAHIRAN LAIN EXTRA 9
     *****************************************************************************************/






     /*****************************************************************************************
                          START: INPUT 10: INPUT KEMAHIRAN LAIN EXTRA 10
    *****************************************************************************************/

    $("#btn_tambah_10").bind("click", function() {

	    counter_10 = $("#table_len_10").val();
    

  // INPUT 10: INPUT KEMAHIRAN LAIN EXTRA 10

   var var_input0 = '<tr class="tambahInput_10'+counter_10+'"><td colspan="6" style="display: block; height: 30px;"></td></tr>'
                   + '<tr style="background: #f3f7f9; line-height: 1.8em;" class="tambahInput_10'+counter_10+'">'
                   +    '<td  align="right"><b>Maklumat '+counter_10+'</b></td>'
                   +    '<td  align="center">&nbsp;</td>'
                   +    '<td colspan="4" style="float: right;">'
                + '<button style="border: none; background: none; color: #0088cc; font-weight: bold; font-size: 1.3em;"'
                + 'type="button" title="BATAL" id="btn_remove_10'+counter_10+'" val="'+counter_10+'" class="remove_10">X</button>'
                + '</td></tr><tr><td>&nbsp;</td><td></td><td></td></tr>';
                        

   var var_input1 = '<tr class="tambahInput_10'+counter_10+'">'
                   +      '<td  align="right">Peringkat</td>'
                   +      '<td  align="center">&nbsp;</td>'
                   +      '<td colspan="4"><span class="control-group">'
                   +          '<select name="txt10_penyeliaan_peringkat'+counter_10+'">'
                   +                '<option value="" selected>Sila Pilih</option>'
                   +                '<option value="Ijazah Pertama"'
                   +                   '<?php if($row_get_penyeliaan['Peringkat'] == "Ijazah Pertama"){ echo "selected"; } ?>>'
                   +                      'Ijazah Pertama'
                   +                 '</option>'
                   +                 '<option value="Diploma"'
                   +                    '<?php if($row_get_penyeliaan['Peringkat'] == "Diploma"){ echo "selected"; } ?>>'
                   +                      'Diploma'
                   +                 '</option>'
                   +                 '<option value="Pra-Ijazah"'
                   +                       '<?php if($row_get_penyeliaan['Peringkat'] == "Pra-Ijazah"){ echo "selected"; } ?>>'
                   +                      'Pra-Ijazah'
                   +                '</option>'
                   +          '</select>'
                   +       '</td>'
                   + '</tr>';

  var var_input2 = '<tr class="tambahInput_10'+counter_10+'">'
                   +    '<td  align="right">Calon</td>'
                   +    '<td  align="center">&nbsp;</td>'
                   +    '<td colspan="4">'
                   +        '<input class="input_max_large" type="text" id="txt10_penyeliaan_calon" name="txt10_penyeliaan_calon'+counter_10+'"' 
                   +                'value="<?php echo $row_get_penyeliaan['Calon']; ?>" maxlength="80" autocomplete="off" />'
                   +     '</td>'
                   + '</tr>';

var var_input3 = '<tr class="tambahInput_10'+counter_10+'">'
                   +    '<td  align="right">Tajuk</td>'
                   +    '<td  align="center">&nbsp;</td>'
                   +    '<td colspan="4">'
                   +       '<input class="input_max_large" type="text" id="txt10_penyeliaan_tajuk" name="txt10_penyeliaan_tajuk'+counter_10+'"' 
                   +           'value="<?php echo $row_get_penyeliaan['Tajuk']; ?>" maxlength="80" />'
                   +    '</td>'
                   + '</tr>';

  var var_input4 = '<tr class="tambahInput_10'+counter_10+'">'
                   +    '<td  align="right">Semester</td>'
                   +    '<td  align="center">&nbsp;</td>'
                   +    '<td colspan="4">'
                   +           '<input class="input_max_large" type="text" id="txt10_penyeliaan_semester"'
                   +                  'name="txt10_penyeliaan_semester'+counter_10+'" value="<?php echo $row_get_penyeliaan['Semester']; ?>" maxlength="80" />'
                   +     '</td>'
                   + '</tr>';

  var var_input5 = '<tr class="tambahInput_10'+counter_10+'">'
                   +     '<td  align="right">Status</td>'
                   +     '<td  align="center">&nbsp;</td>'
                   +     '<td colspan="4">'
                   +          '<input class="input_max_large" type="text" id="txt10_penyeliaan_status" name="txt10_penyeliaan_status'+counter_10+'"' 
                   +              'value="<?php echo $row_get_penyeliaan['Status']; ?>" maxlength="80" />'
                   +      '</td>'
                   + '</tr>';

                   for(m_10 = 1; m_10 < counter_10; m_10++)
                   {
                     $("#btn_remove_10"+m_10).hide();  
                   }

  
        $(".div_added_kolum_10").append("<tr>"+var_input0+var_input1+var_input2+var_input3+var_input4+var_input5+"</tr>");
   
    ++counter_10; 
    $("#table_len_10").val(counter_10);
		if(counter_10 > <?php  if($table_len_10 == 0) echo 1; else echo $table_len_10; ?>)
		{
		$("#btn_batal").show();		
		}
    });
    
     /*****************************************************************************************
                          END: INPUT 10: INPUT KEMAHIRAN LAIN EXTRA 10
     *****************************************************************************************/








    /*****************************************************************************************
                          START: INPUT 11: INPUT KEMAHIRAN LAIN EXTRA 11
    *****************************************************************************************/

    $("#btn_tambah_11").bind("click", function() {

	    counter_11 = $("#table_len_11").val();
    

  // INPUT 11: INPUT KEMAHIRAN LAIN EXTRA 11

   var var_input0 = '<tr class="tambahInput_11'+counter_11+'"><td colspan="6" style="display: block; height: 30px;"></td></tr>'
                   +'<tr style="background: #f3f7f9; line-height: 1.8em;" class="tambahInput_11'+counter_11+'">'
                   +    '<td  align="right"><b>Maklumat '+counter_11+'</b></td>'
                   +    '<td  align="center">&nbsp;</td>'
                   +    '<td colspan="4" style="float: right;">'
                + '<button style="border: none; background: none; color: #0088cc; font-weight: bold; font-size: 1.3em;"'
                + 'type="button" title="BATAL" id="btn_remove_11'+counter_11+'" val="'+counter_11+'" class="remove_11">X</button>'
                + '</td></tr><tr><td>&nbsp;</td><td></td><td></td></tr>';
                        

   var var_input1 = '<tr class="tambahInput_11'+counter_11+'">'
                   +    '<td  align="right"><i>Linkages Description</i></td>'
                   +    '<td  align="center">&nbsp;</td>'
                   +    '<td colspan="4">'
                   +        '<input class="input_max_large" type="text" id="txt11_expert_link_description" name="txt11_expert_link_description'+counter_11+'"' 
                   +             'value="" maxlength="80" />'
                   +     '</td>'
                   + '</tr>';

  var var_input2 = '<tr class="tambahInput_11'+counter_11+'">'
                   +    '<td  align="right">Organisasi</td>'
                   +    '<td  align="center">&nbsp;</td>'
                   +    '<td colspan="4"><span class="control-group">'
                   +        '<input class="input_max_large" type="text" id="txt11_expert_link_organisasi" name="txt11_expert_link_organisasi'+counter_11+'"' 
                   +            'value="<?php echo $row_get_expert_link['Organisasi']; ?>" maxlength="80" />'
                   +    '</td>'
                   + '</tr>';

var var_input3 = '<tr class="tambahInput_11'+counter_11+'">'
                   +    '<td  align="right">Tahun Penglibatan</td>'
                   +    '<td  align="center">&nbsp;</td>'
                   +    '<td colspan="4">'
                   +         '<select name="txt11_expert_link_tahun'+counter_11+'" style="width: 110px;">'
                   +             '<option value="" selected>Pilih Tahun</option>'
                   +                 '<?php $curr_year = date("Y"); ?>'
                   +                 '<?php for($i=$curr_year; $i>=1940; $i--){ ?>'
                   +             '<option <?php if($i == $row_get_expert_link['TahunPenglibatan']){ echo "selected"; } ?>>'
                   +                 '<?php echo $i; ?>'
                   +             '</option>'
                   +           '<?php } ?>'
                   +         '</select>'
                   +    '</td>'
                   + '</tr>';

  var var_input4 = '<tr class="tambahInput_11'+counter_11+'">'
                   +  '<td  align="right">Tempoh</td>'
                   +     '<td  align="center">&nbsp;</td>'
                   +      '<td colspan="4"><span class="control-group">'
                   +          '<input class="input_max_large" type="text" id="txt11_expert_link_tempoh"'
                   +                  'name="txt11_expert_link_tempoh'+counter_11+'" value="<?php echo $row_get_expert_link['Tempoh']; ?>" maxlength="80" />'
                   +      '</td>'
                   + '</tr>';

  var var_input5 = '<tr class="tambahInput_11'+counter_11+'">'
                   +    '<td  align="right">Tahap/Peringkat</td>'
                   +    '<td  align="center">&nbsp;</td>'
                   +    '<td colspan="4"><span class="control-group">'
                   +      '<input class="input_max_large" type="text" id="txt11_expert_link_tahap"'
                   +            'name="txt11_expert_link_tahap'+counter_11+'" value="<?php echo $row_get_expert_link['TahapPeringkat']; ?>" maxlength="80" />'
                   +    '</td>'
                   + '</tr>';

                   for(m_11 = 1; m_11 < counter_11; m_11++)
                   {
                     $("#btn_remove_11"+m_11).hide();  
                   }

  
        $(".div_added_kolum_11").append("<tr>"+var_input0+var_input1+var_input2+var_input3+var_input4+var_input5+"</tr>");
   
    ++counter_11; 
    $("#table_len_11").val(counter_11);
		if(counter_11 > <?php  if($table_len_11 == 0) echo 1; else echo $table_len_11; ?>)
		{
		$("#btn_batal").show();		
		}
    });
    
     /*****************************************************************************************
                          END: INPUT 11: INPUT KEMAHIRAN LAIN EXTRA 11
     *****************************************************************************************/









    /*****************************************************************************************
                          START: INPUT 12: INPUT KEMAHIRAN LAIN EXTRA 12
    *****************************************************************************************/

    $("#btn_tambah_12").bind("click", function() {

	    counter_12 = $("#table_len_12").val();
    

  // INPUT 12: INPUT KEMAHIRAN LAIN EXTRA 12

   var var_input0 = '<tr class="tambahInput_12'+counter_12+'"><td colspan="6" style="display: block; height: 30px;"></td></tr>'
                    + '<tr style="background: #f3f7f9; line-height: 1.8em;" class="tambahInput_12'+counter_12+'">'
                    +     '<td  align="right"><b>Maklumat '+counter_12+'</b></td>'
                    +     '<td  align="center">&nbsp;</td>'
                    +    '<td colspan="4" style="float: right;">'
                + '<button style="border: none; background: none; color: #0088cc; font-weight: bold; font-size: 1.3em;"'
                + 'type="button" title="BATAL" id="btn_remove_12'+counter_12+'" val="'+counter_12+'" class="remove_12">X</button>'
                + '</td></tr><tr><td>&nbsp;</td><td></td><td></td></tr>';
                        

   var var_input1 = '<tr class="tambahInput_12'+counter_12+'">'
                    +     '<td  align="right">Aktiviti</td>'
                    +     '<td  align="center">&nbsp;</td>'
                    +     '<td colspan="4">'
                    +         '<input class="input_max_large" type="text" id="txt12_sumbangan_tek_aktiviti"'
                    +                 'name="txt12_sumbangan_tek_aktiviti'+counter_12+'" value="" maxlength="80" />'
                    +     '</td>'
                    + '</tr>';

  var var_input2 = '<tr class="tambahInput_12'+counter_12+'">'
                    +   '<td  align="right">Organisasi</td>'
                    +   '<td  align="center">&nbsp;</td>'
                    +   '<td colspan="4">'
                    +         '<input class="input_max_large" type="text" id="txt12_sumbangan_tek_organisasi"'
                    +                'name="txt12_sumbangan_tek_organisasi'+counter_12+'" value="" maxlength="80" />'
                    +   '</td>'
                    + '</tr>';

  var var_input3 =  '<tr class="tambahInput_12'+counter_12+'">'
                    +   '<td  align="right">Jawatan/Peranan</td>'
                    +   '<td  align="center">&nbsp;</td>'
                    +   '<td colspan="4">'
                    +       '<input class="input_max_large" type="text" id="txt12_sumbangan_tek_jawatan" name="txt12_sumbangan_tek_jawatan'+counter_12+'"' 
                    +              'value="" maxlength="80" />'
                    +     '</td>'
                    + '</tr>';

  var var_input4 = '<tr class="tambahInput_12'+counter_12+'">'
                   +    '<td  align="right">Dari</td>'
                   +    '<td  align="center">&nbsp;</td>'
                   +    '<td colspan="4">'
                   +           '<input type="text" id="txt12_sumbangan_tek_tarikh_mula" name="txt12_sumbangan_tek_tarikh_mula'+counter_12+'"' 
                   +                   'style="width: 100px;" value="" maxlength="10" /><span> <i>&nbsp;Format: dd-mm-yyyy (Cth: 31-01-2018)</i></span>'
                   +    '</td>'
                   + '</tr>';

  var var_input5 = '<tr class="tambahInput_12'+counter_12+'">'
                   +    '<td  align="right">Hingga</td>'
                   +    '<td  align="center">&nbsp;</td>'
                   +    '<td colspan="4">'
                   +         '<input type="text" id="txt12_sumbangan_tek_tarikh_tamat" name="txt12_sumbangan_tek_tarikh_tamat'+counter_12+'"' 
                   +                 'style="width: 100px;" value="" maxlength="10" /><span> <i>&nbsp;Format: dd-mm-yyyy (Cth: 31-01-2018)</i></span>'
                   +    '</td>'
                   + '</tr>';

  var var_input6 =     '<tr class="tambahInput_12'+counter_12+'">'
                   +      '<td  align="right">Tahap/Peringkat</td>'
                   +      '<td  align="center">&nbsp;</td>'
                   +      '<td colspan="4">'
                   +         '<input class="input_max_large" type="text" id="" name="txt12_sumbangan_tek_tarikh_tahap'+counter_12+'"' 
                   +                'value="" maxlength="80" />'
                   +      '</td>'
                   + '</tr>';

                   for(m_12 = 1; m_12 < counter_12; m_12++)
                   {
                     $("#btn_remove_12"+m_12).hide();  
                   }

  
        $(".div_added_kolum_12").append("<tr>"+var_input0+var_input1+var_input2+var_input3+var_input4+var_input5+var_input6+"</tr>");
   
    ++counter_12; 
    $("#table_len_12").val(counter_12);
		if(counter_12 > <?php  if($table_len_12 == 0) echo 1; else echo $table_len_12; ?>)
		{
		$("#btn_batal").show();		
		}
    });
    
     /*****************************************************************************************
                          END: INPUT 12: INPUT KEMAHIRAN LAIN EXTRA 12
     *****************************************************************************************/









    /*****************************************************************************************
                          START: INPUT 13: INPUT KEMAHIRAN LAIN EXTRA 13
    *****************************************************************************************/

    $("#btn_tambah_13").bind("click", function() {

	    counter_13 = $("#table_len_13").val();
    

  // INPUT 13: INPUT KEMAHIRAN LAIN EXTRA 13

   var var_input0 = '<tr class="tambahInput_13'+counter_13+'"><td colspan="6" style="display: block; height: 30px;"></td></tr>'
                   + '<tr style="background: #f3f7f9; line-height: 1.8em;" class="tambahInput_13'+counter_13+'">'
                   +     '<td  align="right"><b>Maklumat '+counter_13+'</b></td>'
                   +     '<td  align="center">&nbsp;</td>'
                   +    '<td colspan="4" style="float: right;">'
                + '<button style="border: none; background: none; color: #0088cc; font-weight: bold; font-size: 1.3em;"'
                + 'type="button" title="BATAL" id="btn_remove_13'+counter_13+'" val="'+counter_13+'" class="remove_13">X</button>'
                + '</td></tr><tr><td>&nbsp;</td><td></td><td></td></tr>';
                        

   var var_input1 = '<tr class="tambahInput_13'+counter_13+'">'
                   +    '<td  align="right">Nama Subjek</td>'
                   +    '<td  align="center">&nbsp;</td>'
                   +    '<td colspan="4">'
                   +         '<input class="input_max_large" type="text" id="txt13_mengajar_nama_subjek"'
                   +                'name="txt13_mengajar_nama_subjek'+counter_13+'" value=""' 
                   +                'maxlength="80" autocomplete="off" />'
                   +    '</td>'
                   + '</tr>';

  var var_input2 = '<tr class="tambahInput_13'+counter_13+'">'
                   +     '<td  align="right">Sesi Akademik</td>'
                   +     '<td  align="center">&nbsp;</td>'
                   +     '<td colspan="4">'
                   +          '<input class="input_max_large" type="text" id="txt13_mengajar_sesi_akad"'
                   +                 'name="txt13_mengajar_sesi_akad'+counter_13+'" value=""' 
                   +                 'maxlength="80" autocomplete="off" />'
                   +     '</td>'
                   + '</tr>';

var var_input3 = '<tr class="tambahInput_13'+counter_13+'">'
                   +    '<td  align="right">Bil. Pelajar</td>'
                   +    '<td  align="center">&nbsp;</td>'
                   +    '<td colspan="4">'
                   +       '<input type="text" id="txt13_mengajar_bil_pelajar" name="txt13_mengajar_bil_pelajar'+counter_13+'"' 
                   +              'style="width: 100px" value="" maxlength="7"'  
                   +              'autocomplete="off" />'
                   +    '</td>'
                   + '</tr>';

  var var_input4 = '<tr class="tambahInput_13'+counter_13+'">'
                   +   '<td  align="right">Bil. Jam</td>'
                   +   '<td  align="center">&nbsp;</td>'
                   +   '<td colspan="4">'
                   +       '<input type="text" id="txt13_mengajar_bil_jam" name="txt13_mengajar_bil_jam'+counter_13+'"'  
                   +               'style="width: 100px;" value=""' 
                   +               'maxlength="7" autocomplete="off" />'
                   +    '</td>'
                   + '</tr>';

                   for(m_13 = 1; m_13 < counter_13; m_13++)
                   {
                     $("#btn_remove_13"+m_13).hide();  
                   }

  
  
        $(".div_added_kolum_13").append("<tr>"+var_input0+var_input1+var_input2+var_input3+var_input4+"</tr>");
   
    ++counter_13; 
    $("#table_len_13").val(counter_13);
		if(counter_13 > <?php  if($table_len_13 == 0) echo 1; else echo $table_len_13; ?>)
		{
		$("#btn_batal").show();		
		}
    });
    
     /*****************************************************************************************
                          END: INPUT 13: INPUT KEMAHIRAN LAIN EXTRA 13
     *****************************************************************************************/







      /*****************************************************************************************
                          START: INPUT 14: INPUT KEMAHIRAN LAIN EXTRA 14
    *****************************************************************************************/

    $("#btn_tambah_14").bind("click", function() {

	    counter_14 = $("#table_len_14").val();
    

  // INPUT 14: INPUT KEMAHIRAN LAIN EXTRA 14

   var var_input0 = '<tr class="tambahInput_14'+counter_14+'"><td colspan="6" style="display: block; height: 30px;"></td></tr>'
                     + '<tr style="background: #f3f7f9; line-height: 1.8em;" class="tambahInput_14'+counter_14+'">'
                     +   '<td  align="right"><b>Maklumat '+counter_14+'</b></td>'
                     +   '<td  align="center">&nbsp;</td>'
                     +    '<td colspan="4" style="float: right;">'
                     + '<button style="border: none; background: none; color: #0088cc; font-weight: bold; font-size: 1.3em;"'
                     + 'type="button" title="BATAL" id="btn_remove_14'+counter_14+'" val="'+counter_14+'" class="remove_14">X</button>'
                     + '</td></tr><tr><td>&nbsp;</td><td></td><td></td></tr>';
                        

   var var_input1 = '<tr class="tambahInput_14'+counter_14+'">'
                     + '<td  align="right">Penerangan</td>'
                     + '<td  align="center">&nbsp;</td>'
                     + '<td colspan="4">'
                     +     '<input class="input_max_large" type="text" id="txt14_akt_penilaian_penerangan"'
                     +          'name="txt14_akt_penilaian_penerangan'+counter_14+'" value=""' 
                     +           'maxlength="80" autocomplete="off" />'
                     +    '</td>'
                     + '</tr>';

  var var_input2 = '<tr class="tambahInput_14'+counter_14+'">'
                     +  '<td  align="right">Aktiviti Penerangan</td>'
                     +  '<td  align="center">&nbsp;</td>'
                     +   '<td colspan="4">'
                     +     '<input class="input_max_large" type="text" id="txt14_akt_penilaian_aktiviti"'
                     +        'name="txt14_akt_penilaian_aktiviti'+counter_14+'" value=""' 
                     +        'maxlength="80" autocomplete="off" />'
                     +    '</td>'
                     + '</tr>';

var var_input3 = '<tr class="tambahInput_14'+counter_14+'">'
                     + '<td  align="right">Tahun</td>'
                     + '<td  align="center">&nbsp;</td>'
                     + '<td colspan="4"><span class="control-group">'
                     +    '<select name="txt14_akt_penilaian_tahun'+counter_14+'" style="width: 110px;">'
                     +       '<option selected>Pilih Tahun</option>'
                     +     '<?php for($j = $curr_year; $j >=1940; $j--){ ?>'
                     +       '<option <?php if($j == $row_get_akt_penilaian['Tahun']){ echo "selected"; } ?>>'
                     +             '<?php echo $j; ?>'
                     +        '</option>'
                     +      '<?php } ?>'
                     +        '</select>'
                     +     '</td>'
                     + '</tr>';

                     for(m_14 = 1; m_14 < counter_14; m_14++)
                     {
                       $("#btn_remove_14"+m_14).hide();  
                     }


  
        $(".div_added_kolum_14").append("<tr>"+var_input0+var_input1+var_input2+var_input3+"</tr>");
   
    ++counter_14; 
    $("#table_len_14").val(counter_14);
		if(counter_14 > <?php  if($table_len_14 == 0) echo 1; else echo $table_len_14; ?>)
		{
		$("#btn_batal").show();		
		}
    });
    
     /*****************************************************************************************
                          END: INPUT 14: INPUT KEMAHIRAN LAIN EXTRA 14
     *****************************************************************************************/






    /*****************************************************************************************
                          START: INPUT 15: INPUT KEMAHIRAN LAIN EXTRA 15
    *****************************************************************************************/

    $("#btn_tambah_15").bind("click", function() {

	    counter_15 = $("#table_len_15").val();
    

  // INPUT 15: INPUT KEMAHIRAN LAIN EXTRA 15

   var var_input0 =  '<tr class="tambahInput_15'+counter_15+'"><td colspan="6" style="display: block; height: 30px;"></td></tr>'
                     + '<tr style="background: #f3f7f9; line-height: 1.8em;" class="tambahInput_15'+counter_15+'">'
                     +    '<td  align="right"><b>Maklumat '+counter_15+'</b></td>'
                     +    '<td  align="center">&nbsp;</td>'
                     +    '<td colspan="4" style="float: right;">'
                + '<button style="border: none; background: none; color: #0088cc; font-weight: bold; font-size: 1.3em;"'
                + 'type="button" title="BATAL" id="btn_remove_15'+counter_15+'" val="'+counter_15+'" class="remove_15">X</button>'
                + '</td></tr><tr><td>&nbsp;</td><td></td><td></td></tr>';
                        

   var var_input1 = '<tr class="tambahInput_15'+counter_15+'">'
                     +    '<td  align="right">Program</td>'
                     +    '<td  align="center">&nbsp;</td>'
                     +    '<td colspan="4">'
                     +        '<input class="input_max_large" type="text" id="txt15_rekabtk_kok_program"'
                     +               'name="txt15_rekabtk_kok_program'+counter_15+'" value=""'
                     +               'maxlength="80" autocomplete="off" />'
                     +    '</td>'
                     + '</tr>';

  var var_input2 = '<tr class="tambahInput_15'+counter_15+'">'
                     +   '<td  align="right">Institusi</td>'
                     +   '<td  align="center">&nbsp;</td>'
                     +    '<td colspan="4">'
                     +         '<input class="input_max_large" type="text" id="txt15_rekabtk_kok_institusi" name="txt15_rekabtk_kok_institusi'+counter_15+'"' 
                     +               'value="" maxlength="80" autocomplete="off" />'
                     +     '</td>'
                     + '</tr>';

var var_input3 = '<tr class="tambahInput_15'+counter_15+'">'
                     +   '<td  align="right">Tarikh</td>'
                     +   '<td  align="center">&nbsp;</td>'
                     +   '<td colspan="4">'
                     +        '<input type="text"  id="txt15_rekabtk_kok_tarikh" name="txt15_rekabtk_kok_tarikh'+counter_15+'"' 
                     +                'style="width: 100px;" value="<?php echo $rekabentuk_kok_tarikh_std; ?>" maxlength="10" autocomplete="off" /><span> <i>&nbsp;Format: dd-mm-yyyy (Cth: 31-01-2018)</i></span>'
                     +    '</td>'
                     + '</tr>';


                     for(m_15 = 1; m_15 < counter_15; m_15++)
                     {
                       $("#btn_remove_15"+m_15).hide();  
                     }
  
        $(".div_added_kolum_15").append("<tr>"+var_input0+var_input1+var_input2+var_input3+"</tr>");
   
    ++counter_15; 
    $("#table_len_15").val(counter_15);
		if(counter_15 > <?php  if($table_len_15 == 0) echo 1; else echo $table_len_15; ?>)
		{
		$("#btn_batal").show();		
		}
    });
    
     /*****************************************************************************************
                          END: INPUT 15: INPUT KEMAHIRAN LAIN EXTRA 15
     *****************************************************************************************/









    /*****************************************************************************************
                          START: INPUT 16: INPUT KEMAHIRAN LAIN EXTRA 16
    *****************************************************************************************/

    $("#btn_tambah_16").bind("click", function() {

	    counter_16 = $("#table_len_16").val();
    

  // INPUT 16: INPUT KEMAHIRAN LAIN EXTRA 16

   var var_input0 = '<tr class="tambahInput_16'+counter_16+'"><td colspan="6" style="display: block; height: 30px;"></td></tr>'
                    + '<tr style="background: #f3f7f9; line-height: 1.8em;" class="tambahInput_16'+counter_16+'">'
                    +   '<td  align="right"><b>Maklumat '+counter_16+'</b></td>'
                    +   '<td  align="center">&nbsp;</td>'
                    +    '<td colspan="4" style="float: right;">'
                + '<button style="border: none; background: none; color: #0088cc; font-weight: bold; font-size: 1.3em;"'
                + 'type="button" title="BATAL" id="btn_remove_16'+counter_16+'" val="'+counter_16+'" class="remove_16">X</button>'
                + '</td></tr><tr><td>&nbsp;</td><td></td><td></td></tr>';
                        

   var var_input1 = '<tr class="tambahInput_16'+counter_16+'">'
                    +    '<td  align="right">Nama Bengkel</td>'
                    +    '<td  align="center">&nbsp;</td>'
                    +    '<td colspan="4">'
                    +         '<input class="input_max_large" type="text" id="txt16_bengkel_seminar_nama" name="txt16_bengkel_seminar_nama'+counter_16+'"' 
                    +                 'value="" maxlength="80" autocomplete="off" />'
                    +     '</td>'
                    + '</tr>';

  var var_input2 = '<tr class="tambahInput_16'+counter_16+'">'
                    +    '<td  align="right">Tarikh</td>'
                    +    '<td  align="center">&nbsp;</td>'
                    +    '<td colspan="4">'
                    +         '<input type="text" id="txt16_bengkel_seminar_tarikh" name="txt16_bengkel_seminar_tarikh'+counter_16+'" style="width: 100px;"' 
                    +                 'value="" maxlength="10" autocomplete="off" /><span> <i>&nbsp;Format: dd-mm-yyyy (Cth: 31-01-2018)</i></span>'
                    +     '</td>'
                    + '</tr>';

var var_input3 = '<tr class="tambahInput_16'+counter_16+'">'
                   +   '<td  align="right">Tempat</td>'
                   +   '<td  align="center">&nbsp;</td>'
                   +   '<td colspan="4">'
                   +        '<input class="input_max_large" type="text" id="txt16_bengkel_seminar_tempat" name="txt16_bengkel_seminar_tempat'+counter_16+'"' 
                   +               'value=""  maxlength="80" autocomplete="off" />'
                   +      '</td>'
                   + '</tr>';


var var_input4 = '<tr class="tambahInput_16'+counter_16+'">'
                   +   '<td  align="right">Penganjur</td>'
                   +   '<td  align="center">&nbsp;</td>'
                   +   '<td colspan="4">'
                   +       '<input class="input_max_large" type="text" id="txt16_bengkel_seminar_penganjur" name="txt16_bengkel_seminar_penganjur'+counter_16+'"'
                   +               'value="" maxlength="80" autocomplete="off" />'
                   +    '</td>'
                   + '</tr>';

var var_input5 = '<tr class="tambahInput_16'+counter_16+'">'
                   +   '<td  align="right">Jawatan/Peranan</td>'
                   +   '<td  align="center">&nbsp;</td>'
                   +   '<td colspan="4">'
                   +      '<input class="input_max_large" type="text" id="txt16_bengkel_seminar_jawatan"'
                   +             'name="txt16_bengkel_seminar_jawatan'+counter_16+'" value=""' 
                   +             'maxlength="80" autocomplete="off" />'
                   +    '</td>'
                   + '</tr>';

                   for(m_16 = 1; m_16 < counter_16; m_16++)
                   {
                     $("#btn_remove_16"+m_16).hide();  
                   }

  
        $(".div_added_kolum_16").append("<tr>"+var_input0+var_input1+var_input2+var_input3+var_input4+var_input5+"</tr>");
   
    ++counter_16; 
    $("#table_len_16").val(counter_16);
		if(counter_16 > <?php  if($table_len_16 == 0) echo 1; else echo $table_len_16; ?>)
		{
		$("#btn_batal").show();		
		}
    });
    
     /*****************************************************************************************
                          END: INPUT 16: INPUT KEMAHIRAN LAIN EXTRA 16
     *****************************************************************************************/







    /*****************************************************************************************
                          START: INPUT 17: INPUT KEMAHIRAN LAIN EXTRA 17
    *****************************************************************************************/

    $("#btn_tambah_17").bind("click", function() {

	    counter_17 = $("#table_len_17").val();
    

  // INPUT 17: INPUT KEMAHIRAN LAIN EXTRA 17

   var var_input0 = '<tr class="tambahInput_17'+counter_17+'"><td colspan="6" style="display: block; height: 30px;"></td></tr>'
                   + '<tr style="background: #f3f7f9; line-height: 1.8em;" class="tambahInput_17'+counter_17+'">'
                   +    '<td  align="right"><b>Maklumat '+counter_17+'</b></td>'
                   +    '<td  align="center">&nbsp;</td>'
                   +    '<td colspan="4" style="float: right;">'
                   + '<button style="border: none; background: none; color: #0088cc; font-weight: bold; font-size: 1.3em;"'
                   + 'type="button" title="BATAL" id="btn_remove_17'+counter_17+'" val="'+counter_17+'" class="remove_17">X</button>'
                   + '</td></tr><tr><td>&nbsp;</td><td></td><td></td></tr>';
                        

   var var_input1 = '<tr class="tambahInput_17'+counter_17+'">'
                   +   '<td  align="right">Sumbangan Kepada Masyarakat</td>'
                   +   '<td  align="center">&nbsp;</td>'
                   +   '<td colspan="4">'
                   +      '<input class="input_max_large" type="text" id="txt17_sumbangan_masyarakat_nama"'
                   +            'name="txt17_sumbangan_masyarakat_nama'+counter_17+'" value=""' 
                   +            'maxlength="80" autocomplete="off" />'
                   +      '</td>'
                   + '</tr>';

  var var_input2 = '<tr class="tambahInput_17'+counter_17+'">'
                   + '<td  align="right">Tahap/Peringkat</td>'
                   + '<td  align="center">&nbsp;</td>'
                   + '<td colspan="4"><span class="control-group">'
                   +        '<input class="input_max_large" type="text" id="txt17_sumbangan_masyarakat_tahap" name="txt17_sumbangan_masyarakat_tahap'+counter_17+'"' 
                   +               'value="" maxlength="80" autocomplete="off" />'
                   +      '</td>'
                   + '</tr>';

var var_input3 = '<tr class="tambahInput_17'+counter_17+'">'
                   + '<td  align="right">Tarikh Mula</td>'
                   + '<td  align="center">&nbsp;</td>'
                   + '<td colspan="4">'
                   +      '<input type="text" id="txt17_sumbangan_masyarakat_tarikh_mula" name="txt17_sumbangan_masyarakat_tarikh_mula'+counter_17+'"' 
                   +            'style="width: 100px;" value="" maxlength="10" autocomplete="off" /><span> <i>&nbsp;Format: dd-mm-yyyy (Cth: 31-01-2018)</i></span>'
                   +     '</td>'
                   + '</tr>';


var var_input4 = '<tr class="tambahInput_17'+counter_17+'">'
                   + '<td  align="right">Tarikh Tamat</td>'
                   + '<td  align="center">&nbsp;</td>'
                   + '<td colspan="4">'
                   +     '<input type="text" id="txt17_sumbangan_masyarakat_tarikh_tamat" name="txt17_sumbangan_masyarakat_tarikh_tamat'+counter_17+'"'  
                   +          'style="width: 100px;" value=""' 
                   +          'maxlength="10" autocomplete="off" /><span> <i>&nbsp;Format: dd-mm-yyyy (Cth: 31-01-2018)</i></span>'
                   +   '</td>'
                   + '</tr>';


                   for(m_17 = 1; m_17 < counter_17; m_17++)
                   {
                     $("#btn_remove_17"+m_17).hide();  
                   }

        $(".div_added_kolum_17").append("<tr>"+var_input0+var_input1+var_input2+var_input3+var_input4+"</tr>");
   
    ++counter_17; 
    $("#table_len_17").val(counter_17);
		if(counter_17 > <?php  if($table_len_17 == 0) echo 1; else echo $table_len_17; ?>)
		{
		$("#btn_batal").show();		
		}
    });
    
     /*****************************************************************************************
                          END: INPUT 17: INPUT KEMAHIRAN LAIN EXTRA 17
     *****************************************************************************************/








    /*****************************************************************************************
                          START: INPUT 18: INPUT KEMAHIRAN LAIN EXTRA 18
    *****************************************************************************************/

    $("#btn_tambah_18").bind("click", function() {

	    counter_18 = $("#table_len_18").val();
    

  // INPUT 18: INPUT KEMAHIRAN LAIN EXTRA 18

   var var_input0 =   '<tr class="tambahInput_18'+counter_18+'"><td colspan="6" style="display: block; height: 30px;"></td></tr>'
                      + '<tr style="background: #f3f7f9; line-height: 1.8em;" class="tambahInput_18'+counter_18+'">'
                      +  '<td  align="right"><b>Maklumat '+counter_18+'</b></td>'
                      +     '<td  align="center">&nbsp;</td>'
                      +    '<td colspan="4" style="float: right;">'
                      + '<button style="border: none; background: none; color: #0088cc; font-weight: bold; font-size: 1.3em;"'
                      + 'type="button" title="BATAL" id="btn_remove_18'+counter_18+'" val="'+counter_18+'" class="remove_18">X</button>'
                      + '</td></tr><tr><td>&nbsp;</td><td></td><td></td></tr>';
                        

   var var_input1 = '<tr class="tambahInput_18'+counter_18+'">'
                      + '<td  align="right">Nama Anugerah</td>'
                      + '<td  align="center">&nbsp;</td>'
                      + '<td colspan="4">'
                      +      '<input class="input_max_large" type="text" id="txt18_anugerah_pencapaian_nama'+counter_18+'"'
                      +             'name="txt18_anugerah_pencapaian_nama'+counter_18+'" value=""' 
                      +             'maxlength="80" autocomplete="off" />'
                      +      '</td>'
                      + '</tr>';

  var var_input2 =  '<tr class="tambahInput_18'+counter_18+'">'
                      + '<td  align="right">Institusi Yang Menganugerahkan</td>'
                      + '<td  align="center">&nbsp;</td>'
                      + '<td colspan="4">'
                      +       '<input class="input_max_large" type="text" id="txt18_anugerah_pencapaian_institusi'+counter_18+'"'
                      +              'name="txt18_anugerah_pencapaian_institusi'+counter_18+'" value=""' 
                      +              'maxlength="80" autocomplete="off" />'
                      +      '</td>'
                      + '</tr>';

var var_input3 =    '<tr class="tambahInput_18'+counter_18+'">'
                      + '<td  align="right">Tahun</td>'
                      + '<td  align="center">&nbsp;</td>'
                      + '<td colspan="4">'
                      +      '<select name="txt18_anugerah_pencapaian_tahun'+counter_18+'" style="width: 110px;">'
                      +           '<option selected>Pilih Tahun</option>'
                      +              '<?php for($k = $curr_year; $k >= 1940; $k--){ ?>'
                      +            '<option <?php if($k == $row_get_anugerah_pencapaian['Tahun']){ echo "selected"; } ?>>'
                      +                '<?php echo $k; ?>'
                      +            '</option>'
                      +            '<?php } ?>'
                      +       '</select>'
                      +    '</td>'
                      + '</tr>';


var var_input4 = '<tr class="tambahInput_18'+counter_18+'">'
                      + '<td  align="right">Peringkat</td>'
                      +    '<td  align="center">&nbsp;</td>'
                      +     '<td colspan="4">'
                      +        '<input class="input_max_large" type="text" id="txt18_anugerah_pencapaian_peringkat"'
                      +                'name="txt18_anugerah_pencapaian_peringkat'+counter_18+'" value=""' 
                      +                'maxlength="80" autocomplete="off" />'
                      +     '</td>'
                      + '</tr>';

                      for(m_18 = 1; m_18 < counter_18; m_18++)
                      {
                        $("#btn_remove_18"+m_18).hide();  
                      }
  
        $(".div_added_kolum_18").append("<tr>"+var_input0+var_input1+var_input2+var_input3+var_input4+"</tr>");
   
    ++counter_18; 
    $("#table_len_18").val(counter_18);
		if(counter_18 > <?php  if($table_len_18 == 0) echo 1; else echo $table_len_18; ?>)
		{
		$("#btn_batal").show();		
		}
    });
    
     /*****************************************************************************************
                          END: INPUT 18: INPUT KEMAHIRAN LAIN EXTRA 18
     *****************************************************************************************/





  //function remove row additional (Cik Astkin punya)
  

  //button remove kolum 1
	$(document).on('click','.remove', function(){ 
    var y = $(this).attr('val');
    var x = $("#table_len_1").val();
    --x;

    var j = x-1;
    
    $("#btn_remove"+j).show();  
    $("#table_len_1").val(x);
    $('.tambahInput'+y).remove(); 
  
  
  });


  //button remove kolum 2
  $(document).on('click','.remove_2', function(){ 
    var y_2 = $(this).attr('val');
    var x_2 = $("#table_len_2").val();
    --x_2;

    var j_2 = x_2-1;
    
    $("#btn_remove_2"+j_2).show();  
    $("#table_len_2").val(x_2);
    $('.tambahInput_2'+y_2).remove(); 
  
  });


  //button remove kolum 3
  $(document).on('click','.remove_3', function(){ 
    var y_3 = $(this).attr('val');
    var x_3 = $("#table_len_3").val();
    --x_3;

    var j_3 = x_3-1;
    
    $("#btn_remove_3"+j_3).show();  
    $("#table_len_3").val(x_3);
    $('.tambahInput_3'+y_3).remove(); 
  
  });


    //button remove kolum 4
    $(document).on('click','.remove_4', function(){ 
      var y_4 = $(this).attr('val');
      var x_4 = $("#table_len_4").val();
      --x_4;
  
      var j_4 = x_4-1;
      
      $("#btn_remove_4"+j_4).show();  
      $("#table_len_4").val(x_4);
      $('.tambahInput_4'+y_4).remove(); 
    
    });


      //button remove kolum 5
  $(document).on('click','.remove_5', function(){ 
    var y_5 = $(this).attr('val');
    var x_5 = $("#table_len_5").val();
    --x_5;

    var j_5 = x_5-1;
    
    $("#btn_remove_5"+j_5).show();  
    $("#table_len_5").val(x_5);
    $('.tambahInput_5'+y_5).remove(); 
  
  });

    //button remove kolum 6_I
    $(document).on('click','.remove_6_I', function(){ 
      var y_6_I = $(this).attr('val');
      var x_6_I = $("#table_len_6_I").val();
      --x_6_I;
  
      var j_6_I = x_6_I-1;
      
      $("#btn_remove_6_I"+j_6_I).show();  
      $("#table_len_6_I").val(x_6_I);
      $('.tambahInput_6_I'+y_6_I).remove(); 
    
    });



      //button remove kolum 6_II
  $(document).on('click','.remove_6_II', function(){ 
    var y_6_II = $(this).attr('val');
    var x_6_II = $("#table_len_6_II").val();
    --x_6_II;

    var j_6_II = x_6_II-1;
    
    $("#btn_remove_6_II"+j_6_II).show();  
    $("#table_len_6_II").val(x_6_II);
    $('.tambahInput_6_II'+y_6_II).remove(); 
  
  });


    //button remove kolum 6_III
    $(document).on('click','.remove_6_III', function(){ 
      var y_6_III = $(this).attr('val');
      var x_6_III = $("#table_len_6_III").val();
      --x_6_III;
  
      var j_6_III = x_6_III-1;
      
      $("#btn_remove_6_III"+j_6_III).show();  
      $("#table_len_6_III").val(x_6_III);
      $('.tambahInput_6_III'+y_6_III).remove(); 
    
    });


      //button remove kolum 6_IV
  $(document).on('click','.remove_6_IV', function(){ 
    var y_6_IV = $(this).attr('val');
    var x_6_IV = $("#table_len_6_IV").val();
    --x_6_IV;

    var j_6_IV = x_6_IV-1;
    
    $("#btn_remove_6_IV"+j_6_IV).show();  
    $("#table_len_6_IV").val(x_6_IV);
    $('.tambahInput_6_IV'+y_6_IV).remove(); 
  
  });



    //button remove kolum 6_V
    $(document).on('click','.remove_6_V', function(){ 
      var y_6_V = $(this).attr('val');
      var x_6_V = $("#table_len_6_V").val();
      --x_6_V;
  
      var j_6_V = x_6_V-1;
      
      $("#btn_remove_6_V"+j_6_V).show();  
      $("#table_len_6_V").val(x_6_V);
      $('.tambahInput_6_V'+y_6_V).remove(); 
    
    });



  //button remove kolum 6_VI
  $(document).on('click','.remove_6_VI', function(){ 
    var y_6_VI = $(this).attr('val');
    var x_6_VI = $("#table_len_6_VI").val();
    --x_6_VI;

    var j_6_VI = x_6_VI-1;
    
    $("#btn_remove_6_VI"+j_6_VI).show();  
    $("#table_len_6_VI").val(x_6_VI);
    $('.tambahInput_6_VI'+y_6_VI).remove(); 
  
  });



    //button remove kolum 7
    $(document).on('click','.remove_7', function(){ 
      var y_7 = $(this).attr('val');
      var x_7 = $("#table_len_7").val();
      --x_7;
  
      var j_7 = x_7-1;
      
      $("#btn_remove_7"+j_7).show();  
      $("#table_len_7").val(x_7);
      $('.tambahInput_7'+y_7).remove(); 
    
    });



      //button remove kolum 8
  $(document).on('click','.remove_8', function(){ 
    var y_8 = $(this).attr('val');
    var x_8 = $("#table_len_8").val();
    --x_8;

    var j_8 = x_8-1;
    
    $("#btn_remove_8"+j_8).show();  
    $("#table_len_8").val(x_8);
    $('.tambahInput_8'+y_8).remove(); 
  
  });



    //button remove kolum 9
    $(document).on('click','.remove_9', function(){ 
      var y_9 = $(this).attr('val');
      var x_9 = $("#table_len_9").val();
      --x_9;
  
      var j_9 = x_9-1;
      
      $("#btn_remove_9"+j_9).show();  
      $("#table_len_9").val(x_9);
      $('.tambahInput_9'+y_9).remove(); 
    
    });


      //button remove kolum 10
  $(document).on('click','.remove_10', function(){ 
    var y_10 = $(this).attr('val');
    var x_10 = $("#table_len_10").val();
    --x_10;

    var j_10 = x_10-1;
    
    $("#btn_remove_10"+j_10).show();  
    $("#table_len_10").val(x_10);
    $('.tambahInput_10'+y_10).remove(); 
  
  });



    //button remove kolum 11
    $(document).on('click','.remove_11', function(){ 
      var y_11 = $(this).attr('val');
      var x_11 = $("#table_len_11").val();
      --x_11;
  
      var j_11 = x_11-1;
      
      $("#btn_remove_11"+j_11).show();  
      $("#table_len_11").val(x_11);
      $('.tambahInput_11'+y_11).remove(); 
    
    });




      //button remove kolum 12
  $(document).on('click','.remove_12', function(){ 
    var y_12 = $(this).attr('val');
    var x_12 = $("#table_len_12").val();
    --x_12;

    var j_12 = x_12-1;
    
    $("#btn_remove_12"+j_12).show();  
    $("#table_len_12").val(x_12);
    $('.tambahInput_12'+y_12).remove(); 
  
  });


    //button remove kolum 13
    $(document).on('click','.remove_13', function(){ 
      var y_13 = $(this).attr('val');
      var x_13 = $("#table_len_13").val();
      --x_13;
  
      var j_13 = x_13-1;
      
      $("#btn_remove_13"+j_13).show();  
      $("#table_len_13").val(x_13);
      $('.tambahInput_13'+y_13).remove(); 
    
    });


      //button remove kolum 14
  $(document).on('click','.remove_14', function(){ 
    var y_14 = $(this).attr('val');
    var x_14 = $("#table_len_14").val();
    --x_14;

    var j_14 = x_14-1;
    
    $("#btn_remove_14"+j_14).show();  
    $("#table_len_14").val(x_14);
    $('.tambahInput_14'+y_14).remove(); 
  
  });


    //button remove kolum 15
    $(document).on('click','.remove_15', function(){ 
      var y_15 = $(this).attr('val');
      var x_15 = $("#table_len_15").val();
      --x_15;
  
      var j_15 = x_15-1;
      
      $("#btn_remove_15"+j_15).show();  
      $("#table_len_15").val(x_15);
      $('.tambahInput_15'+y_15).remove(); 
    
    });


      //button remove kolum 16
  $(document).on('click','.remove_16', function(){ 
    var y_16 = $(this).attr('val');
    var x_16 = $("#table_len_16").val();
    --x_16;

    var j_16 = x_16-1;
    
    $("#btn_remove_16"+j_16).show();  
    $("#table_len_16").val(x_16);
    $('.tambahInput_16'+y_16).remove(); 
  
  });


    //button remove kolum 17
    $(document).on('click','.remove_17', function(){ 
      var y_17 = $(this).attr('val');
      var x_17 = $("#table_len_17").val();
      --x_17;
  
      var j_17 = x_17-1;
      
      $("#btn_remove_17"+j_17).show();  
      $("#table_len_17").val(x_17);
      $('.tambahInput_17'+y_17).remove(); 
    
    });


      //button remove kolum 18
  $(document).on('click','.remove_18', function(){ 
    var y_18 = $(this).attr('val');
    var x_18 = $("#table_len_18").val();
    --x_18;

    var j_18 = x_18-1;
    
    $("#btn_remove_18"+j_18).show();  
    $("#table_len_18").val(x_18);
    $('.tambahInput_18'+y_18).remove(); 
  
  });

  

    
});



/****************************************************************************************************************************
  	                              END: FUNCTION: ADD / REMOVE INPUT BOX KO-K
****************************************************************************************************************************/


