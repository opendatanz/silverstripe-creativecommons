<?php
class CreativeCommonsExtension extends DataExtension {

	private static $api_url = 'http://api.creativecommons.org/rest/';

	private static $api_version = '1.5';
	
	private static $has_one = array(
		'Licence' => 'CreativeCommonsLicence'
	);

	public function updateCMSFields(FieldList $fields){

		$fields->addFieldToTab(
			'Root.ContentLicence',
			DropdownField::create('LicenceID', 'Licence your content', CreativeCommonsLicence::get()->map() )->setEmptyString('All rights reserved.')
		);

	}

	public function getLicenceText(){

		$licence = $this->owner->Licence()->URI;

		if(!$licence){
			$licence = SiteConfig::current_site_config()->Licence()->URI;
		}

		$licence_url = $this->owner->config()->get('api_url').$this->owner->config()->get('api_version').'/details?license-uri='.$licence;

		$request = RestfulService::create($licence_url, 'GET')->request()->getBody();
		
			$pattern = "/<html ?.*>(.*)<\/html>/";
			preg_match($pattern, $request, $matches);
			if($matches) {
				return $matches[0];
			}


	}
}