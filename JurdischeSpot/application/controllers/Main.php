<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

    public function index()
    {
        $this->load->view('templates/header.php');
        $this->load->view('index.php');
        $this->load->view('templates/footer.php');
    }
    
    function Algemene_voorwaarden(){
        $this->load->view('templates/header.php');
        $this->load->view('static/Algemene_voorwaarden.php');
        $this->load->view('templates/footer.php');
    }
        
    function Disclaimer(){
        $this->load->view('templates/header.php');
        $this->load->view('static/Disclaimer.php');
        $this->load->view('templates/footer.php');
    }
    
    function FAQ(){
        $this->load->view('templates/header.php');
        $this->load->view('static/FAQ.php');
        $this->load->view('templates/footer.php');
    }
    
    function Hoe_het_werkt(){
        $this->load->view('templates/header.php');
        $this->load->view('static/Hoe_het_werkt.php');
        $this->load->view('templates/footer.php');
    }
    
    function Privacy_verklaring(){
        $this->load->view('templates/header.php');
        $this->load->view('static/Privacy_verklaring.php');
        $this->load->view('templates/footer.php');
    }
    
}