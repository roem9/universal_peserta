<?php
    function tgl_batch($tgl){
        $data = explode("-", $tgl);
        $tahun = $data[0];
        $bulan = $data[1];
        $hari = $data[2];
        $hari_name = hari_ini(date("D", strtotime($tgl)));

        if($bulan == "01") $bulan = "Januari";
        if($bulan == "02") $bulan = "Februari";
        if($bulan == "03") $bulan = "Maret";
        if($bulan == "04") $bulan = "April";
        if($bulan == "05") $bulan = "Mei";
        if($bulan == "06") $bulan = "Juni";
        if($bulan == "07") $bulan = "Juli";
        if($bulan == "08") $bulan = "Agustus";
        if($bulan == "09") $bulan = "September";
        if($bulan == "10") $bulan = "Oktober";
        if($bulan == "11") $bulan = "November";
        if($bulan == "12") $bulan = "Desember";

        return $hari_name . ", " . $hari . " " . $bulan . " " . $tahun;
    }

    function hari_ini($hari){
        switch($hari){
            case 'Sun':
                $hari_ini = "Minggu";
            break;
    
            case 'Mon':			
                $hari_ini = "Senin";
            break;
    
            case 'Tue':
                $hari_ini = "Selasa";
            break;
    
            case 'Wed':
                $hari_ini = "Rabu";
            break;
    
            case 'Thu':
                $hari_ini = "Kamis";
            break;
    
            case 'Fri':
                $hari_ini = "Jumat";
            break;
    
            case 'Sat':
                $hari_ini = "Sabtu";
            break;
            
            default:
                $hari_ini = "Tidak di ketahui";
            break;
        }
        return $hari_ini;
    }

    function tgl_indo($tgl, $lengkap = ""){
        $data = explode("-", $tgl);
        $hari = $data[2];
        $bulan = $data[1];
        $tahun = $data[0];

        if($bulan == "01") $bulan = "Januari";
        if($bulan == "02") $bulan = "Februari";
        if($bulan == "03") $bulan = "Maret";
        if($bulan == "04") $bulan = "April";
        if($bulan == "05") $bulan = "Mei";
        if($bulan == "06") $bulan = "Juni";
        if($bulan == "07") $bulan = "Juli";
        if($bulan == "08") $bulan = "Agustus";
        if($bulan == "09") $bulan = "September";
        if($bulan == "10") $bulan = "Oktober";
        if($bulan == "11") $bulan = "November";
        if($bulan == "12") $bulan = "Desember";

        if($lengkap == "lengkap"){
            return hari_ini(date("D", strtotime($tgl))) . ", " . $hari . " " . $bulan . " " . $tahun;
        } else {
            return $hari . " " . $bulan . " " . $tahun;
        }
    }

    function tgl_akad($tgl){
        $data = explode("-", $tgl);
        $hari = $data[0];
        $bulan = $data[1];
        $tahun = $data[2];

        if($bulan == "01") $bulan = "Januari";
        if($bulan == "02") $bulan = "Februari";
        if($bulan == "03") $bulan = "Maret";
        if($bulan == "04") $bulan = "April";
        if($bulan == "05") $bulan = "Mei";
        if($bulan == "06") $bulan = "Juni";
        if($bulan == "07") $bulan = "Juli";
        if($bulan == "08") $bulan = "Agustus";
        if($bulan == "09") $bulan = "September";
        if($bulan == "10") $bulan = "Oktober";
        if($bulan == "11") $bulan = "November";
        if($bulan == "12") $bulan = "Desember";

        return "Tanggal " . $hari . " Bulan " . $bulan . " Tahun " . $tahun;
    }

    function bulan_tahun($tgl){
        $data = explode("-", $tgl);
        $hari = $data[0];
        $bulan = $data[1];
        $tahun = $data[2];

        if($bulan == "01") $bulan = "Januari";
        if($bulan == "02") $bulan = "Februari";
        if($bulan == "03") $bulan = "Maret";
        if($bulan == "04") $bulan = "April";
        if($bulan == "05") $bulan = "Mei";
        if($bulan == "06") $bulan = "Juni";
        if($bulan == "07") $bulan = "Juli";
        if($bulan == "08") $bulan = "Agustus";
        if($bulan == "09") $bulan = "September";
        if($bulan == "10") $bulan = "Oktober";
        if($bulan == "11") $bulan = "November";
        if($bulan == "12") $bulan = "Desember";

        return "Bulan <b>" . $bulan . "</b> Tahun <b>" . $tahun . "</b>";
    }

    function reArrayFiles(&$file_post) {

        $file_ary = array();
        $file_count = count($file_post['name']);
        $file_keys = array_keys($file_post);
    
        for ($i=0; $i<$file_count; $i++) {
            foreach ($file_keys as $key) {
                $file_ary[$i][$key] = $file_post[$key][$i];
            }
        }
    
        return $file_ary;
    }

    function getRomawi($bln){
        switch ($bln){
            case 1: 
                return "I";
                break;
            case 2:
                return "II";
                break;
            case 3:
                return "III";
                break;
            case 4:
                return "IV";
                break;
            case 5:
                return "V";
                break;
            case 6:
                return "VI";
                break;
            case 7:
                return "VII";
                break;
            case 8:
                return "VIII";
                break;
            case 9:
                return "IX";
                break;
            case 10:
                return "X";
                break;
            case 11:
                return "XI";
                break;
            case 12:
                return "XII";
                break;
        }
    }

    function tablerIcon($icon, $margin = ""){
        return '
            <svg width="24" height="24" class="alert-icon '.$margin.'">
                <use xlink:href="'.base_url().'assets/tabler-icons-1.39.1/tabler-sprite.svg#tabler-'.$icon.'" />
            </svg>';
    }

    function no_doc_agency($no_doc, $no_batch, $tgl){
        $bulan = getRomawi(date("m", strtotime($tgl)));
        $tahun = date("Y", strtotime($tgl));

        return "{$no_doc}/SGI/SI-AP/B-{$no_batch}/{$bulan}/{$tahun}";
    }

    function no_doc_marketing_si($no_doc, $tgl){
        $bulan = getRomawi(date("m", strtotime($tgl)));
        $tahun = date("Y", strtotime($tgl));

        return "{$no_doc}/SGI/SI-MF/{$bulan}/{$tahun}";
    }

    function peserta($peserta_latihan, $peserta_toefl){
        if($peserta_latihan > $peserta_toefl) return $peserta_latihan;
        else return $peserta_toefl;
    }

    function poin($tipe, $soal, $versi){
        $CI =& get_instance();
        $CI->db->from("nilai_toefl");
        $CI->db->where(["tipe" => $tipe, "soal" => $soal, "versi" => $versi]);
        $data = $CI->db->get()->row_array();
        return $data['poin'];
    }

    function skor($nilai_listening, $nilai_structure, $nilai_reading, $versi){
        return round(((poin("Listening", $nilai_listening, $versi) + poin("Structure", $nilai_structure, $versi) + poin("Reading", $nilai_reading, $versi)) * 10) / 3);
    }

    function config(){
        $CI =& get_instance();
        $CI->db->from("config");
        $data = $CI->db->get()->result_array();
        return $data;
    }