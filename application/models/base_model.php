<?php

class Base_model extends MY_Model
{

	public function excecute_filter($filter_json){
		if(!empty($filter_json) && method_exists($this, '_Filter')){
			$filter_obj = X::parseJSON($filter_json);
			if(!empty($filter_obj))
				$this->_Filter($filter_obj);
		}
	}

	// *** OVERIDE SOME FUNCTION
	/**
	 * Updated a record based on the primary value.
	 */
	public function update($primary_value, $data, $skip_validation = FALSE)
	{
		if ($skip_validation === FALSE)
		{
			$data = $this->validate($data);
		}

		if ($data !== FALSE)
		{
			$data = $this->trigger('before_update', $data);

			$result = $this->_database->where($this->primary_key, $primary_value)
							   ->set($data)
							   ->update($this->_table);

			$this->trigger('after_update', array($data, $result));

			return $result;
		}
		else
		{
			return FALSE;
		}
	}

}