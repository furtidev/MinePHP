<?php
/*
	Isfer Hossain
	22th of January, 2022
	- Please read the documentation before continuing
	(version 1.2)
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
	public $map;
	public $plugins;
	public $mods;
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
				if (isset($this->call_api->icon)){
					$this->icon = $this->call_api->icon;
				} else {
					$this->icon = "icon data not available";
				}
			}
			$this->ip = $this->call_api->ip;
			$this->port = $this->call_api->port;
			$this->motd = $this->call_api->motd->html;
			if (isset($this->call_api->icon)){
				$this->map = $this->call_api->map;
			} else {
				$this->map = "map data not available";
			}
			if (isset($this->call_api->plugins->names)){
				$this->plugins = $this->call_api->plugins->names;
			} else {
				$this->plugins = "plugin data not available";
			}
			if (isset($this->call_api->mods->names)){
				$this->mods = $this->call_api->mods->names;
			} else {
				$this->mods = "mod data not available";
			}
		}
	}
}
