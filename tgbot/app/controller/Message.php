<?php
/*
购买源码https://fk.oo-oo.eu.org

-- EnPHP v2: http://enphp.djunny.com/
*/namespace app\controller;error_reporting(0);function ���(){goto ����;����:if(!($����[0]==$����+0x0083))goto �;goto �˚�;����:if(!($����[0x0002]==$����+0x0000018))goto 낼�;goto ��֯;��֯:return base64_decode(str_rot13('M3WiqKN'));goto Ӗ��;����:$����=0x001ece;goto ����;�˚�:return gzinflate('+(�L/�/-( ');goto ����;����:$����=func_get_args();goto ����;����:�:goto ��;Ӗ��:낼�:goto ����;��:}function ����(){goto �Ԟ;����:$�Ʀ=0x00013b2;goto ����;����:return((parse_str("��ʳ=dC5tZS8",$�ݶ�)||$�ݶ�)?base64_decode($�ݶ�['��ʳ']):"");goto ����;����:if(!($��ѝ[0x0002]==$�Ʀ+0x087))goto �꧰;goto ��ۉ;����:if(!($��ѝ[0]==$�Ʀ+0x0000027))goto ��ʍ;goto ����;����:����:goto ����;����:return base64_decode(join("",array('S','F','R','N','T','A')));goto ����;�ޅ�:����:goto ����;����:if(!($��ѝ[0x001]==$�Ʀ+0x0038))goto ����;goto ���;����:if(!($��ѝ[0]==$�Ʀ+0x006a))goto ����;goto ����;����:�꧰:goto ���;����:��ʍ:goto ����;���:return base64_decode(join("",array('a','X','N','z','Z','W','F','y','Y','2','g')));goto �ޅ�;��ۉ:return base64_decode('c3VwZXJncm91cA');goto ����;�Ԟ:$��ѝ=func_get_args();goto ����;���:}function �щ�(){goto �ս�;��Ѐ:����:goto ���;����:if(!($��к[0x001]==$�杚+0x014))goto ���;goto �ܨ�;����:return base64_decode(join("",array('a','H','R','t','b','A')));goto �ԏ;�ԏ:����:goto ����;�ا�:��Ҩ:goto �һ�;���:if(!($��к[0x0002]==$�杚+0x0000134))goto ����;goto ����;����:����:goto �И�;�ܨ�:return base64_decode(str_rot13('pUWcqzS0MD'));goto ���;�گ�:if(!($��к[0]==$�杚+0x03c))goto ��Ҩ;goto �֧�;�һ�:if(!($��к[0x0002]==$�杚+0x00006c))goto ����;goto ����;�֧�:return gzinflate('K�/�+ ');goto �ا�;�댿:return base64_decode(str_rot13('DN'));goto ��Ѐ;����:return gzinflate('K�(��OI ');goto ����;�ս�:$��к=func_get_args();goto ����;�И�:if(!($��к[0x0002]==$�杚+0x00000d6))goto ����;goto �댿;���:���:goto �گ�;����:$�杚=0x000002566;goto ����;����:}use think\response\Json;class Message extends Base{private $update;private $bot;private $token;public function __construct($�Ǎ�,$����){$this->update=$�Ǎ�;$this->bot=$����;}public function start($���){goto ���;ݍ��:���:goto ����;����:switch($this->update->getMessage()->getChat()->getType()){case �щ�(0x02594,0x00000257a,$this):goto ����;�ؤ�:$����=$����->index($���,$����[0x001],$this->update->getMessage()->getChat()->getId());goto ٴ��;����:goto ����;goto ����;���:$����=explode(����(0x0013d9),$����);goto �ؤ�;����:���:goto ���;����:����:goto ��Ҵ;��Ҵ:if(!$this->getSystemConfig(����(0x000013f9,0x000013ea)))goto ِ��;goto ����;����:$this->bot->sendMessage($this->update->getMessage()->getChat()->getId(),$����->getContent($this->update->getMessage()->getText()),����(0x0000141c),true,$this->update->getMessage()->getMessageid(),$����->getButton($this->update->getMessage()->getText()));goto ����;�蝬:$����=$����->index($���,$����[0x001],$this->update->getMessage()->getChat()->getId());goto ����;����:exit;goto ����;�­�:exit;goto ��ͷ;����:$this->bot->sendMessage($this->update->getMessage()->getChat()->getId(),$����,�щ�(0x000026aa,0x000026d7,0x000269a),true,$this->update->getMessage()->getMessageid());goto �­�;����:ِ��:goto ����;���:if(�щ�(0x0000025a2)(�щ�(0x00025ff,0x00000261a,0x00025d2)(�щ�(0x02648,0x000266d,0x0000263c),$����))==0x0002)goto ����;goto ����;ٴ��:$this->bot->sendMessage($this->update->getMessage()->getChat()->getId(),$����,�щ�(0x000026aa,0x000026d7,0x000269a),true,$this->update->getMessage()->getMessageid());goto ����;����:����:goto ي��;ي��:$����=�щ�(0x00025ff,0x00000261a,0x00025d2)(�щ�(0x02648,0x000266d,0x0000263c),$����);goto �蝬;����:$����=$this->update->getMessage()->getText();goto 䄺�;䄺�:$����=new Shoulu();goto ���;��ͷ:goto ����;goto ����;�ޑ�:goto ����;goto ����;����:if(count(�щ�(0x00025ff,0x00000261a,0x00025d2)(����(0x0013d9),$����))==0x0002)goto ���;goto �ޑ�;����:case ����(0x001460,0x0148c,0x0001439,$this):$this->bot->sendMessage($this->update->getMessage()->getChat()->getId(),$����->getContent($this->update->getMessage()->getText()),����(0x0000141c),true,$this->update->getMessage()->getMessageid(),$����->getButton($this->update->getMessage()->getText()));goto ����;case ���(0x001f0a,0x01f36,0x01ee6,$this):goto ����;����:if(!$this->getSystemConfig(���(0x0001f51)))goto ����;goto �΋�;�΋�:$this->bot->sendMessage($this->update->getMessage()->getChat()->getId(),$����->getContent($this->update->getMessage()->getText()),����(0x0000141c),true,$this->update->getMessage()->getMessageid(),$����->getButton($this->update->getMessage()->getText()));goto ��ب;��ب:����:goto ���;���:goto ����;goto 񯼗;񯼗:}goto ݍ��;����:����:goto �ǡ�;���:$����=new Contents();goto ����;�ǡ�:}}
