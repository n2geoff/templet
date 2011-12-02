<?php

/**
 * Templet - A PHP-Based Template Class
 *
 * Simply orgianize and display views
 *
 * Copyright (c) 2011, Geoff Doty
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without modification, are
 * permitted provided that the following conditions are met:
 *
 * 	* Redistributions of source code must retain the above copyright notice, this list of
 * 	  conditions and the following disclaimer.
 *
 * 	* Redistributions in binary form must reproduce the above copyright notice, this list
 * 	  of conditions and the following disclaimer in the documentation and/or other materials
 * 	  provided with the distribution.
 *
 * 	* Neither the name of the SimplePie Team nor the names of its contributors may be used
 * 	  to endorse or promote products derived from this software without specific prior
 * 	  written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS
 * OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY
 * AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDERS
 * AND CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR
 * CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR
 * SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR
 * OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 *
 * @author Geoff Doty <n2geoff@gmail.com>
 * @copyright 2011 Geoff Doty
 * @license http://www.opensource.org/licenses/bsd-license.php BSD License
 */
class Templet {
	
	private $data = array();
	private $path = NULL;

	public function __construct()
	{
		if($path !== NULL)
		{
			//TODO:  check path exists
			$this->path = $path;
		}
	}

    /**
     * Set Magic Method
     * 
     * Sets/Assigns values to $data array
     *
     * usage:
     *   $this->name = "Geoff";
     *
     * @param mixed $key  
     * @param var $value
     */
    function __set($key, $value = NULL) 
    {
        //if array recurrsively assign values keys
        if(is_array($key) 
        {
            foreach($key as $new_key => $value) 
            {
                $this->__set($new_key, $value);
            }
        }
        
        //if value blank, leave blank 
        if(!isset($value) 
        {
            $this->data[$key] = NULL;
        } 
        else 
        {
            $this->data[$key] = $val;
        }
    }
       
	/**
	 * Get Magic Method
	 *
	 * Removes not set notices
	 */
    function __get($key) 
    {
		if(!isset($key))
		{
			return NULL;
		}
    }

	/**
	 * Display Template
	 */
    public function display($template, $return = FALSE)
    {
		if($this->data !== NULL) 
		{
			extract($this->data);
		}
		
        include($this->path . $template);
    }
}