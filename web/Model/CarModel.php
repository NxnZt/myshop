<?php
	/***/
	function total($data=array())
	{
		// var_dump($data);
		if (!empty($data)) {
			foreach ($data as $key => $val) {
				$total +=$val['qty']*$val['price'];
			}
		}
		return $total;
	}