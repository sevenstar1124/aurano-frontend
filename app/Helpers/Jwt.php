<?php

namespace App\Helpers;

use Firebase\JWT\JWT as JwtInterface;
use Firebase\JWT\Key;

class Jwt {

	const JWT_KEY = 'ifdsjjkfhi743fb';

	public static function encode($payload=[])
	{
        /**
         * IMPORTANT:
         * You must specify supported algorithms for your application. See
         * https://tools.ietf.org/html/draft-ietf-jose-json-web-algorithms-40
         * for a list of spec-compliant algorithms.
         */
        return JwtInterface::encode($payload, self::JWT_KEY, 'HS256');
	}


	public static function decode($jwt='')
	{
        try{

          	$res = JwtInterface::decode($jwt, new Key(self::JWT_KEY, 'HS256'));

          	return $res;

        }catch(\Exception $error){
        	
        		return false;
        }
        
	}

}