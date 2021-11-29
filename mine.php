<?php
/*
	Isfer Hossain
	11th of November, 2021 
	- Please read the documentation before continuing
	(version 1.1)
*/
class MinePHP {
	private $call_api;
	private $software_name;
	public $max_players;
	public $online_players;
	public $hostname;
	public $protocol;
	public $version;
	public $icon;
	public $ip;
	public $port;
	public $motd;
	function __construct($server_ip = null, $software = null) {
		$this->software_name = $software;
		if ($software == "bedrock") {
			$this->call_api = json_decode(file_get_contents("https://api.mcsrvstat.us/bedrock/2/".$server_ip));
		} elseif($software == "java"){
			$this->call_api = json_decode(file_get_contents("https://api.mcsrvstat.us/2/".$server_ip));
		}
		$this->update_playercount();
		$this->update_serverdata();
	}
	public function is_online(){
		if ($this->call_api->online == true){
			return true;
		} else {
			return null;
		}
	}
	public function update_playercount(){
		if ($this->is_online() == 1){
			$this->max_players = $this->call_api->players->max;
			$this->online_players = $this->call_api->players->online;
		}
	}
	public function update_serverdata(){
		if ($this->is_online() == 1){
			$this->hostname = $this->call_api->hostname;
			$this->protocol = $this->call_api->protocol;
			$this->version = $this->call_api->version;
			if ($this->software_name == "java"){
				$this->icon = $this->call_api->icon;
			}
			$this->ip = $this->call_api->ip;
			$this->port = $this->call_api->port;
		}
	}
}
