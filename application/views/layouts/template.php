<?php 
$CI =& get_instance();
$CI->load->model('Pages_Model');
$data['favicon'] = $CI->Pages_Model->getFavicon();

$data['sitename'] = $CI->Pages_Model->getSitename();

$data['sitelogo'] = $CI->Pages_Model->getSitelogo();



$this->load->model('Backend/Slider_Model');
$data['sliderData'] = $CI->Slider_Model->getSliderList();

$this->load->view('layouts/header',$data);

?>



<?php $this->load->view($main_content); ?>



<?php 


$this->load->view('layouts/footer'); 

?>

