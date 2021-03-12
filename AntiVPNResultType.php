<?php

declare(strict_types=1);

namespace cosmicpe\novpn\libs\cosmoverse\antivpn\thread\result;

use cosmicpe\novpn\libs\cosmoverse\antivpn\thread\request\AntiVPNRequestCallback;

interface AntiVPNResultType{

	public function notify(AntiVPNRequestCallback $callback) : void;
}