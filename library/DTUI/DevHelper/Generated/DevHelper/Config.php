<?php
class DTUI_DevHelper_Config extends DevHelper_Config_Base {
	protected $_dataClasses = array();
	protected $_dataPatches = array();
	protected $_exportPath = 'C:\\xampp\\htdocs\\dtui\\addons\\DTUI';

	/**
	 * Return false to trigger the upgrade!
	 * common use methods:
	 * 	public function addDataClass($name, $fields = array(), $primaryKey = false, $indeces = array())
	 *	public function addDataPatch($table, array $field)
	 *	public function setExportPath($path)
	**/
	protected function _upgrade() {
		return true; // remove this line to trigger update

		/*
		$this->addDataClass(
			'name_here',
			array( // fields
				'field_here' => array(
					'type' => 'type_here',
					// 'length' => 'length_here',
					// 'required' => true,
					// 'allowedValues' => array('value_1', 'value_2'), 
				),
				// other fields go here
			),
			'primary_key_field_here',
			array( // indeces
				array(
					'fields' => array('field_1', 'field_2'),
					'type' => 'NORMAL', // UNIQUE or FULLTEXT
				),
			),
		);
		*/
	}
}