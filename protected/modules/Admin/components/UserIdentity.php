<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	 
	
	public function authenticate()
	{  
	   $user = array(
	       'admin@admin.com'=>'admin'
	   );
	    if ($user===null) { // Usuário não encontrado
		$this->errorCode=self::ERROR_USERNAME_INVALID;
	    } else if ($user[$this->username] !==$this->password ) { // Senha invalida
		$this->errorCode=self::ERROR_PASSWORD_INVALID;
		    } else { // Okay!
		    $this->errorCode=self::ERROR_NONE;
		    }
	    return !$this->errorCode;

   }
   
       

}