<?php
class Blog extends CI_Controller{
    public function index(){
        $data['blogs']=[
            ['judul'=>'Artikel Pertama',
            'content'=>'Lorem Ipsum is simply dummy text of the printing and     
            typesetting industry.'],
            ['judul'=>'Artikel Kedua',
            'content'=>'Lorem Ipsum has been the industrys standard dummy 
            text ever since the 1500s, when an unknown printer took a galley of type 
            and scrambled it to make a type specimen book.'],
            ['judul'=>'Artikel Ketiga',
            'content'=>'Lorem Ipsum is simply dummy text of the printing and     
            typesetting industry.']];
        $this->load->view('/blog/blogs',$data);
    }
}
?>