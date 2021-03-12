<?php

declare(strict_types=1);

namespace cosmicpe\novpn\libs\cosmoverse\antivpn\api\client;

use cosmicpe\novpn\libs\cosmoverse\antivpn\api\AntiVPNRequest;
use cosmicpe\novpn\libs\cosmoverse\antivpn\api\AntiVPNResult;

class AntiVPNClientRequest extends AntiVPNRequest{

	public function __construct(string $key){
		parent::__construct("/api/client", $key);
	}

	public function createResult(array $data) : AntiVPNResult{
		$data = $data["client"];
		return new AntiVPNClientResult($data["id"], $data["email"], $data["name"], $data["joined"], $data["state"], $data["premium"], new AntiVPNClientAPIHitsResult($data["api_hits"]["hits"], $data["api_hits"]["reached_limit"]));
	}
}