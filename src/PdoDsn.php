<?php

/*
 * Copyright (c) Devinow (https://devinow.xyz/)
 */

namespace Delight\Db;


final class PdoDsn implements Dsn {

	/** @var string the DSN as a string */
	private $dsn;
	/** @var string|null the username that complements the DSN */
	private $username;
	/** @var string|null the password that complements the DSN */
	private $password;

	/**
	 * Constructor
	 *
	 * @param string $dsnStr the DSN as a string
	 * @param string $username (optional) the username that complements the DSN
	 * @param string $password (optional) the password that complements the DSN
	 */
	public function __construct($dsnStr, $username = null, $password = null) {
		$this->dsn = (string) $dsnStr;
		$this->username = (string) $username;
		$this->password = (string) $password;
	}

	/**
	 * Returns the DSN as a string
	 *
	 * @return string
	 */
	public function getDsn() {
		return $this->dsn;
	}

	/**
	 * Returns the username that complements the DSN
	 *
	 * @return string|null
	 */
	public function getUsername() {
		return $this->username;
	}

	/**
	 * Returns the password that complements the DSN
	 *
	 * @return string|null
	 */
	public function getPassword() {
		return $this->password;
	}

}

?>