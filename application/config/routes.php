<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Pages';

/* Search Maid */
$route['searchmaids/(:num)'] = 'Searchmaids/index';

/* Maid Detail */
$route['maid/maid_detail/(:num)'] = 'Maiddetail/maidDetail/$1';

/*Filter*/
$route['maid/search_result'] = 'Filter/index';

/*About Us*/
$route['aboutus'] = 'Aboutus/index';

/*Services*/
$route['services'] = 'Services/index';

/*Testimonials*/
$route['testimonials'] = 'Testimonials/index';
$route['testimonials/(:num)'] = 'Testimonials/index/$1';

/*Contactus*/
$route['contactus'] = 'Contactus/index';
$route['contactus/mailsend'] = 'Contactus/mailsend';


/*-------For Admin Panel (Default) ---------------*/

$route['admin/settings'] = 'Backend/settings/index';

/* Slider */
$route['admin/slider'] = 'Backend/Slider/index';
$route['admin/add_slider'] = 'Backend/Slider/addSlider';
$route['admin/edit_slider/(:num)'] = 'Backend/Slider/editSlider/$1';
$route['admin/delete_slider/(:num)'] = 'Backend/Slider/deleteSlider/$1';

/* Banner */
 $route['admin/banner'] = 'Backend/Banner/index';

/* Age Group */
$route['admin/age'] = 'Backend/Agegroup/index';
$route['admin/add_age'] = 'Backend/Agegroup/addAge';
$route['admin/edit_age/(:num)'] = 'Backend/Agegroup/editAge/$1';
$route['admin/delete_age/(:num)'] = 'Backend/Agegroup/deleteAge/$1';

/* User */
$route['admin/users'] = 'Backend/Users/index';
$route['admin/add_user'] = 'Backend/Users/addUser';
$route['admin/edit_user/(:num)'] = 'Backend/Users/editUser/$1';
$route['admin/delete_user/(:num)'] = 'Backend/Users/deleteUser/$1';

/* Maids */
$route['admin/maids'] = 'Backend/Maids/index';
$route['admin/maids/(:num)'] = 'Backend/Maids/index';
$route['admin/add_maid'] = 'Backend/Maids/addMaid';
$route['admin/edit_maid/(:num)'] = 'Backend/Maids/editMaid/$1';
$route['admin/delete_maid/(:num)'] = 'Backend/Maids/deleteMaid/$1';

/* Countries */
$route['admin/countries'] = 'Backend/Countries/index';
$route['admin/add_country'] = 'Backend/Countries/addCountry';
$route['admin/edit_country/(:num)'] = 'Backend/Countries/editCountry/$1';
$route['admin/delete_country/(:num)'] = 'Backend/Countries/deleteCountry/$1';

/* Religious */
$route['admin/religious'] = 'Backend/Religious/index';
$route['admin/add_religious'] = 'Backend/Religious/addReligious';
$route['admin/edit_religious/(:num)'] = 'Backend/Religious/editReligious/$1';
$route['admin/delete_religious/(:num)'] = 'Backend/Religious/deleteReligious/$1';

/* Type */
$route['admin/type'] = 'Backend/Type/index';
$route['admin/add_type'] = 'Backend/Type/addType';
$route['admin/edit_type/(:num)'] = 'Backend/Type/editType/$1';
$route['admin/delete_type/(:num)'] = 'Backend/Type/deleteType/$1';

/* Marital */
$route['admin/marital'] = 'Backend/Marital/index';
$route['admin/add_marital'] = 'Backend/Marital/addMarital';
$route['admin/edit_marital/(:num)'] = 'Backend/Marital/editMarital/$1';
$route['admin/delete_marital/(:num)'] = 'Backend/Marital/deleteMarital/$1';

/* Other Information */
$route['admin/other_information'] = 'Backend/Otherinformation/index';
$route['admin/add_other_information'] = 'Backend/Otherinformation/addOtherinfo';
$route['admin/edit_other_information/(:num)'] = 'Backend/Otherinformation/editOtherinfo/$1';
$route['admin/delete_other_information/(:num)'] = 'Backend/Otherinformation/deleteOtherinfo/$1';


/* Experience */
$route['admin/experience'] = 'Backend/Experience/index';
$route['admin/add_experience'] = 'Backend/Experience/addExperience';
$route['admin/edit_experience/(:num)'] = 'Backend/Experience/editExperience/$1';
$route['admin/delete_experience/(:num)'] = 'Backend/Experience/deleteExperience/$1';

/* About Us */
$route['admin/aboutus'] = 'Backend/Aboutus/index';

/* Services */
$route['admin/services'] = 'Backend/Services/index';
$route['admin/add_service'] = 'Backend/Services/add';
$route['admin/save_service'] = 'Backend/Services/save';
$route['admin/edit_service/(:num)'] = 'Backend/Services/edit/$1';
$route['admin/update_service/(:num)'] = 'Backend/Services/update/$1';
$route['admin/delete_service/(:num)'] = 'Backend/Services/delete/$1';
$route['admin/services/services_overview'] = 'Backend/Services/services_overview';

/* Contact Us */
$route['admin/contactus/contact_persons'] = 'Backend/Contactus/contact_persons';
$route['admin/contactus/add_person'] = 'Backend/Contactus/add_person';
$route['admin/contactus/save_person'] = 'Backend/Contactus/save_person';
$route['admin/contactus/edit_person/(:num)'] = 'Backend/Contactus/edit_person/$1';
$route['admin/contactus/update_person/(:num)'] = 'Backend/contactus/update_person/$1';
$route['admin/contactus/delete_person/(:num)'] = 'Backend/contactus/delete_person/$1';
$route['admin/contactus'] = 'Backend/contactus/index';
$route['admin/contactus/contact_address'] = 'Backend/Contactus/contact_address';

/* About Us */
$route['admin/enquiry'] = 'Backend/Enquiry/index';

/* Home Page */
$route['admin/homepage'] = 'Backend/Homepage/index';


