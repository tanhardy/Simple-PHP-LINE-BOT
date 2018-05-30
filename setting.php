<?php

class Setting {
	public function getChannelAccessToken(){
		$channelAccessToken = "D6Z4xq2AuLVdOcFKISGs2TrweRkyGswqentG6FL/QRI9K0c7+JximL1yUM6lftv/40sMUNVyDoMB1QN+708xZOyfVsFjHH3H5dqG87PenA+sgSuOoe2orpDmf+/LyfAKaIBbttboOMJLt3ADaO/G0QdB04t89/1O/w1cDnyilFU=";
		return $channelAccessToken;
	}
	public function getChannelSecret(){
		$channelSecret = "b2a11f190f42aa183e087d6c29a6dfea";
		return $channelSecret;
	}
	public function getApiReply(){
		$api = "https://api.line.me/v2/bot/message/reply";
		return $api;
	}
	public function getApiPush(){
		$api = "https://api.line.me/v2/bot/message/push";
		return $api;
	}
}
