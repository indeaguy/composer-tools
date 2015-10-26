<?php 

//Arbitrary namespace
namespace ComposerTools;

// This file is a PHP callback for use in a composer event
// https://getcomposer.org/doc/articles/scripts.md
use Composer\Script\Event;
/*use Composer\Installer\PackageEvent;*/

class JsonHelper {

	// The type value to 
	const $layout_type = 'flexible_content';

	// Key of the json element that stors all the flexible layout options
	const $layouts_key = 'layouts';

	function __construct($source)) {

		// @TODO: clean this up..
		$this->source_file = $source;

		// get the file's json
		if ($this->source_json = file_get_contents($this->source_file)) {

			// get the json into an array
			$this->source_array = json_decode($this->source_json, true);

			print print_r($this->source_array);

 			if (!$this->source_array) {
				throw new Exception("ACF FieldGroup JSON file didn't contain valid JSON.");
			}
		}
		else {
			throw new Exception("Couldn't find the ACF FieldGroup JSON file. It should be in the acf-json directory in the Wordpress theme directory.");
		}
	}

	// Leftoff here:
	//http://stackoverflow.com/questions/7459818/how-to-get-the-position-of-a-key-within-an-array

	function __destruct() {
   	}
}