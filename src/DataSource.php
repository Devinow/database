<?php

/*
 * Copyright (c) Devinow (https://devinow.xyz/)
 */

namespace Devinow\Db;


interface DataSource {

	/**
	 * Converts this instance to a DSN
	 *
	 * @return Dsn
	 */
	public function toDsn();

}

?>