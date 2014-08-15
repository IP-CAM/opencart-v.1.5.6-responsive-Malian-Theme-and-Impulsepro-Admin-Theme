<?php
class Session {
	public $data = array();
			
  	public function __construct() {		
		if (!session_id()) {
			ini_set('session.use_cookies', 'On');
			ini_set('session.use_trans_sid', 'Off');
			
			//session_set_cookie_params(0, '/');
			
			session_set_cookie_params(86400, '/');
			
			/* Q-mod -- session extend 
            session_set_cookie_params(86400, '/');
            ini_set('session.cache_expire', '180');
            ini_set('session.gc_maxlifetime', '86400');
            ini_set('session.save_path','C:\AppServ\Temp\php\php_session_temp');
			*/
			
			session_start();
		}
			
		$this->data =& $_SESSION;
	}
	
	function getId() {
		return session_id();
	}
}
?>
