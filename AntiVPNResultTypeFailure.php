<?php

declare(strict_types=1);

namespace cosmicpe\novpn\libs\cosmoverse\antivpn\thread\result;

use cosmicpe\novpn\libs\cosmoverse\antivpn\thread\AntiVPNException;
use cosmicpe\novpn\libs\cosmoverse\antivpn\thread\request\AntiVPNRequestCallback;

final class AntiVPNResultTypeFailure implements AntiVPNResultType{

	/** @var AntiVPNException */
	private $exception;

	public function __construct(AntiVPNException $exception){
		$this->exception = $exception;
	}

	public function notify(AntiVPNRequestCallback $callback) : void{
		($callback->on_failure)($this->exception);
	}
}