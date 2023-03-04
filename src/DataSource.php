<?php

/*
 * Copyright (c) Devinow (https://devinow.xyz/)
 */

namespace Delight\Db;


interface DataSource {

	/**
	 * Converts this instance to a DSN
	 *
	 * @return Dsn
	 */
	public function toDsn();

}

?>