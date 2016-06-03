<?php
class CreativeCommonsLicence extends DataObject {
	
	private static $db = array(
		'Title' => 'Varchar(255)',
		'URI' => 'Varchar(255)'
	);

	public function requireDefaultRecords()
	{
		//@TODO Connect to API to populate
		if(CreativeCommonsLicence::get()->count() > 0){
			return;
		}

		$cc_by = CreativeCommonsLicence::create();
		$cc_by->ID = 1;
		$cc_by->Title = 'Attribution 4.0 International';
		$cc_by->URI = 'http://creativecommons.org/licenses/by/4.0/';
		$cc_by->write();

		$cc_by_sa = $cc_by = CreativeCommonsLicence::create();
		$cc_by_sa->ID = 2;
		$cc_by_sa->Title = 'Attribution-ShareAlike 4.0 International';
		$cc_by_sa->URI = 'http://creativecommons.org/licenses/by-sa/4.0/';
		$cc_by_sa->write();

		$cc_by_nd = CreativeCommonsLicence::create();
		$cc_by_nd->ID = 3;
		$cc_by_nd->Title = 'Attribution-NoDerivatives 4.0 International';
		$cc_by_nd->URI = 'http://creativecommons.org/licenses/by-nd/4.0/';
		$cc_by_nd->write();

		$cc_by_nc = $cc_by = CreativeCommonsLicence::create();
		$cc_by_nc->ID = 4;
		$cc_by_nc->Title = 'Attribution-NonCommercial 4.0 International';
		$cc_by_nc->URI = 'http://creativecommons.org/licenses/by-nc/4.0/';
		$cc_by_nc->write();

		$cc_by_nc_sa = CreativeCommonsLicence::create();
		$cc_by_nc_sa->ID = 5;
		$cc_by_nc_sa->Title = 'Attribution-NonCommercial-ShareAlike 4.0 International';
		$cc_by_nc_sa->URI = 'http://creativecommons.org/licenses/by-nc-sa/4.0/';
		$cc_by_nc_sa->write();

		$cc_by_nc_nd = CreativeCommonsLicence::create();
		$cc_by_nc_nd->ID = 6;
		$cc_by_nc_nd->Title = 'Attribution-NonCommercial-NoDerivatives 4.0 International';
		$cc_by_nc_nd->URI = 'http://creativecommons.org/licenses/by-nc-nd/4.0/';
		$cc_by_nc_nd->write();

		parent::requireDefaultRecords();
	}


}