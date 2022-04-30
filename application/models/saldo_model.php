<?php
class Saldo_model extends CI_Model{
 
  function get_saldo(){
    $result = $this->db->get('saldo');
    return $result;
  }

  function simpan_donasi($masuk, $id_donatur){
    $query =$this->db->query("SELECT sisa_saldo from saldo ORDER BY id_saldo DESC LIMIT 1");
    $nama_donatur =$this->donatur_model->getNamaID($id_donatur);
    
    $data = array( 
        'masuk'       => $masuk,
        'sisa_saldo'  => $query->row()->sisa_saldo + $masuk,
        'id_donatur'  => $id_donatur,
        'keterangan'  => 'Dikirim oleh: ' .$nama_donatur,
        'created_at'  => date('Y-m-j H:i:s'),
    );
    $this->db->insert('saldo',$data);

  }

  function ambil_donasi(){
    $query =$this->db->query("SELECT sisa_saldo from saldo ORDER BY id_saldo DESC LIMIT 1");
    $jumlah = $this->db->query("SELECT count(id_siswa) as total FROM beasiswa_siswa WHERE action = 'aktif'");
    $keluar= 300000 * $jumlah->row()->total;
    $hariIni = new DateTime();

    
    $data = array( 
        'keluar'       => $keluar,
        'sisa_saldo'  => $query->row()->sisa_saldo - $keluar,
        'keterangan'  => $hariIni->format('F Y') . " untuk " . $jumlah->row()->total . " siswa",
        'created_at'  => date('Y-m-j H:i:s'),
    );
    $this->db->insert('saldo',$data);
}

}