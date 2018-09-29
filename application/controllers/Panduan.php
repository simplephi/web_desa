<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Panduan extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_panduan");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('userid'))){
          $this->load->view("login_page");
      }else{
          $data['panduan']=$this->M_panduan->tampil_data_panduan();
          $data['kategori']=$this->M_panduan->tampil_data_panduan1();
          $data['kategori1']=$this->M_panduan->tampil_data_panduan2();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus");
          $this->load->view("panduan",$data);
          $this->load->view("attribute/footer");
      }
    }

    public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/panduan/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|docx|doc|pdf|xlsx|ppt|pptx'; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '10240'; //maksimum besar file 2M
      // $config['max_width']  = '9999'; //lebar maksimum 1288 px
      // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['gambar']['name'])
        {
            if ($this->upload->do_upload('gambar'))
            {
                $gbr = $this->upload->data();
                $data = array(
                  'guide_file' =>$gbr['file_name'],
                  'guide_name' =>$this->input->post('guide_name'),
                  'guide_desc' =>$this->input->post('guide_desc'),
                  'guidecategory_id' =>$this->input->post('guidecategory_id'),

                    );
                $this->M_panduan->input($data);
            }
        }

        else
        {
        $data['guide_name'] = $this->input->post('guide_name');
        $data['guide_desc'] = $this->input->post('guide_desc');
        $data['guidecategory_id'] = $this->input->post('guidecategory_id');

        //call function
        $this->M_panduan->input($data);
        //redirect to page

      }
          redirect('Panduan'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/panduan/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|docx|doc|pdf|xlsx|ppt|pptx'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '10240'; //maksimum besar file 2M
      //  $config['max_width']  = '1288'; //lebar maksimum 1288 px
      //  $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['gambar']['name'])
         {
             if ($this->upload->do_upload('gambar'))
             {
                 $gbr = $this->upload->data();
                 $data = array(

                   'guide_file' =>$gbr['file_name'],
                   'guide_id' =>$this->input->post('guide_id'),
                   'guide_name' =>$this->input->post('guide_name'),
                   'guide_desc' =>$this->input->post('guide_desc'),
                   'guidecategory_id' =>$this->input->post('guidecategory_id'),
                     );

                 $this->M_panduan->edit($data);
             }
         }

         else
         {
           $data['guide_id'] = $this->input->post('guide_id');
           $data['guide_name'] = $this->input->post('guide_name');
           $data['guide_desc'] = $this->input->post('guide_desc');
           $data['guidecategory_id'] = $this->input->post('guidecategory_id');

         //call function
         $this->M_panduan->edit($data);
         //redirect to page

        }
           redirect('Panduan'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

        if($this->input->post('guide_id')!="") {
            $this->M_panduan->delete($this->input->post('guide_id'));
        }
        redirect('Panduan');

    }
}
?>