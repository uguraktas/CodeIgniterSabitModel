<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

Class Admin_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }


    /*SayfaGetir fonksiyonu
    $tablo ile gönderilen tablo adındaki içinde ne varsa bilgileri çeker */
    public function SayfaGetir($tablo, $where = NULL, $like = NULL, $order = NULL, $limit = NULL, $as_array = FALSE)
    {
        $this->db->select("*");
        $this->db->from($tablo);
        if ($where !== NULL) {
            $this->db->where($where);
        }
        if ($like !== NULL) {
            $this->db->like($like);
        }
        if ($order !== NULL) {
            $this->order_by($order);
        }
        if ($limit !== NULL) {
            $this->db->limit($limit[0], $limit[1]);
        }
        $result = $this->db->get();
        if ($as_array == TRUE) {
            return $result->result_array();
        } else {
            return $result->result();
        }
    }

    public function SatirSay($tablo)
    {
        $this->db->select('*');
        $query = $this->db->get($tablo);
        return $num = $query->num_rows();

    }

    /*bilgiyiGuncelle fonksiyonu
    Bilgi update etmede kullanılır */
    public function BilgiyiGuncelle($islem, $data, $id)
    {
        $kolon = "id";
        $this->db->where($kolon, $id);
        $this->db->update($islem, $data);
    }


    function sil($id)
    {
        $this->db->delete('tablo_adi', array('id' => $id));
    }

    function ekle($form_data)
    {
        $this->db->insert('tablo_adi', $form_data);
    }


}