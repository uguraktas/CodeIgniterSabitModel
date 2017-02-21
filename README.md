En çok kullanılan CodeIgniter modellerimi tek bir dosya'da topladım. Umarım işinize yarar.


CLASS KULLANIMI

Örnek verecek olursak; Diyelimki veritabanımızda blog isminde bir tablomuz var ve bunu array olarak çekmek istiyoruz.

 //Blog Göster
 
    public function blog()
    {
        $sonuc = $this->Admin_model->SayfaGetir("blog", $where = NULL, $like = NULL, $order = NULL, $limit = NULL, $as_array = TRUE);
        $data ["blog"] = $sonuc;
        $this->load->view('blog', $data);
    }
    
    
 Yukarıda koşulsuz olarak veritabanından çekmeyi gördük şimdi ise id'si 60 olan blog tablosunu getirelim
 
 // id = 60 Olan Bloğu Göster
 
    public function blog()
    {
        $sonuc = $this->Admin_model->SayfaGetir("blog", $where = (array('id' => '62')), $like = NULL, $order = NULL, $limit = NULL, $as_array = TRUE);
        $data ["blog"] = $sonuc;
        $this->load->view('blog', $data);
    }
 
 Sizde bu örneklere bakarak diğer filtrelemeleri yapabilirsiniz. Takıldığınız biryer olursa bana uguraktas25@yandex.com üzerinden ulaşabilirsiniz. Ayrıca bu dökümantasyonu yaparken Halit Yurttaş'a teşekkür ederim bilgi çekme işlemlerinde onun kodlarıda bulunmaktadır.
 
