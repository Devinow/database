<?php

/*
 * Copyright (c) Devinow (https://devinow.xyz/)
 */

namespace Delight\Db;


final class SimpleMeasurement implements Measurement {

	/** @var float the duration in milliseconds */
	private $duration;
	/** @var string the SQL query or statement */
	private $sql;
	/** @var array|null the values that have been bound to the query or statement */
	private $boundValues;
	/** @var array|null the trace that shows the path taken through the program until the operation was executed */
	private $trace;

	/**
	 * Constructor
	 *
	 * @param float $duration the duration in milliseconds
	 * @param string $sql the SQL query or statement
	 * @param array|null $boundValues (optional) the values that have been bound to the query or statement
	 * @param array|null $trace (optional) the trace that shows the path taken through the program until the operation was executed
	 */
	public function __construct($duration, $sql, array $boundValues = null, $trace = null) {
		$this->duration = $duration;
		$this->sql = $sql;
		$this->boundValues = $boundValues;
		$this->trace = $trace;
	}

	public function getDuration() {
		return $this->duration;
	}

	public function getSql() {
		return $this->sql;
	}

	public function getBoundValues() {
		return $this->boundValues;
	}

	public function getTrace() {
		return $this->trace;
	}

}

?>