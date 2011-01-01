<?php

	Class extension_author_login extends Extension{

		public $Member;

		/**
		 * Extension information
		 */
		public function about(){
			return array(
				'name' => 'Author Login',
				'type' => 'Event',
				'version' => '1.0',
				'release-date' => '2010-12-31',
				'author' => array(
					'name' => 'Stephen Bau',
					'website' => 'http://github.com/domain7/',
					'email' => 'stephen@domain7.com'
				),
				'description' => 'Front end Author login with $author-id parameter.',
				'compatibility' => array(
					'2.1.2' => true
				)
			);
		}
		
		/**
		 * Add callback functions to backend delegates
		 */
		public function getSubscribedDelegates(){
			return array(
				array(
					'page' => '/frontend/',
					'delegate' => 'FrontendParamsResolve',
					'callback' => 'addParamToPage'
				)
			);
		}

		/**
		 * Add $author-id to parameter pool
		 */
		public function addParamToPage(array $context=array()){
			
			if($this->_Parent->Author) {
				$context['params']['author-id'] = $this->_Parent->Author->get('id');
			}
			
			// print_r($context); die();

		}
		
	}
		
