<?php
# KONTROL MENU PROGRAM
if($_GET) {
	// Jika mendapatkan variabel URL ?page
	switch($_GET['page']){				
		case '' :
			if(!file_exists ("main.php")) die ("Empty Main Page!"); 
			include "main.php";	break;
			
		case 'Halaman-Utama' :
			if(!file_exists ("main.php")) die ("Sorry Empty Page!"); 
			include "main.php";	break;
			
		case 'Login' :
			if(!file_exists ("index.php")) die ("Sorry Empty Page!"); 
			include "index.php"; break;
			
		case 'Login-Validasi' :
			if(!file_exists ("login_validasi.php")) die ("Sorry Empty Page!"); 
			include "login_validasi.php"; break;
			
		case 'Logout' :
			if(!file_exists ("login_out.php")) die ("Sorry Empty Page!"); 
			include "login_out.php"; break;		
	
		
#  SETTING 
	# MENU
		case 'Menu-Data' :
			if(!file_exists ("setting/menu_data.php")) die ("Sorry Empty Page!"); 
			include "setting/menu_data.php";	 break;	
		case 'Menu-Add' :
			if(!file_exists ("setting/menu_add.php")) die ("Sorry Empty Page!"); 
			include "setting/menu_add.php";	 break;		
		case 'Sub-Menu-Data' :
			if(!file_exists ("setting/sub_menu_data.php")) die ("Sorry Empty Page!"); 
			include "setting/sub_menu_data.php";	 break;	
		case 'Sub-Menu-Add' :
			if(!file_exists ("setting/sub_menu_add.php")) die ("Sorry Empty Page!"); 
			include "setting/sub_menu_add.php";	 break;		
		case 'Program-Data' :
			if(!file_exists ("setting/program_data.php")) die ("Sorry Empty Page!"); 
			include "setting/program_data.php";	 break;	
		case 'Program-Add' :
			if(!file_exists ("setting/program_add.php")) die ("Sorry Empty Page!"); 
			include "setting/program_add.php";	 break;	
	# MASTER
		case 'Sekolah-Data' :
			if(!file_exists ("setting/sekolah_data.php")) die ("Sorry Empty Page!"); 
			include "setting/sekolah_data.php";	 break;	
		case 'Sekolah-Add' :
			if(!file_exists ("setting/sekolah_add.php")) die ("Sorry Empty Page!"); 
			include "setting/sekolah_add.php";	 break;		
	# SYSTEM
		case 'Default-Data' :
			if(!file_exists ("setting/default_data.php")) die ("Sorry Empty Page!"); 
			include "setting/default_data.php";	 break;	
		case 'Default-Add' :
			if(!file_exists ("setting/default_add.php")) die ("Sorry Empty Page!"); 
			include "setting/default_add.php";	 break;
	# USER		
		case 'User-Data' :
			if(!file_exists ("setting/user_data.php")) die ("Sorry Empty Page!"); 
			include "setting/user_data.php";	 break;		
		case 'User-Add' :
			if(!file_exists ("setting/user_add.php")) die ("Sorry Empty Page!"); 
			include "setting/user_add.php";	 break;	
		case 'AuthMnUsr-Add' :
			if(!file_exists ("setting/authmnusr_add.php")) die ("Sorry Empty Page!"); 
			include "setting/authmnusr_add.php"; break;	
		case 'Ganti-Password' :
			if(!file_exists ("setting/ganti_password.php")) die ("Sorry Empty Page!"); 
			include "setting/ganti_password.php"; break;					
		default:
			if(!file_exists ("main.php")) die ("Empty Main Page!"); 
			include "main.php";						
		break;
	}
}
else {
	// Jika tidak mendapatkan variabel URL : ?page
	if(!file_exists ("main.php")) die ("Empty Main Page!"); 
	include "main.php";	
}
?>