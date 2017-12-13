<?php
/**
 * Created by PhpStorm.
 * User: LaFaucheuse
 * Date: 28/11/2017
 * Time: 11:48
 */

namespace semappsBundle\Services;


use semappsBundle\semappsConfig;

class confManager
{
		private $personConf;
		private $organisationConf;
		private $projectConf;
		private $eventConf;
		private $proposalConf;
		private $documentConf;
		private $documenttypeConf;
		private $dbpedia;
		public function __construct(	 $personConf, $organisationConf, $projectConf, $eventConf, $proposalConf, $documentConf, $documenttypeConf,$dbpedia){
				$this->personConf = $personConf;
				$this->organisationConf = $organisationConf;
				$this->projectConf = $projectConf;
				$this->eventConf = $eventConf;
				$this->proposalConf = $proposalConf;
				$this->documentConf = $documentConf;
				$this->documenttypeConf = $documenttypeConf;
				$this->dbpedia = $dbpedia;
		}
		public function getConf($type = null){

				$conf = null;
				switch ($type){
						case semappsConfig::URI_PAIR_PERSON:
								$conf = $this->personConf;
								break;
						case semappsConfig::URI_PAIR_ORGANIZATION:
								$conf = $this->organisationConf;
								break;
						case semappsConfig::URI_PAIR_PROJECT:
								$conf = $this->projectConf;
								break;
						case semappsConfig::URI_PAIR_EVENT:
								$conf = $this->eventConf;
								break;
						case semappsConfig::URI_PAIR_PROPOSAL:
								$conf = $this->proposalConf;
								break;
						case semappsConfig::URI_PAIR_DOCUMENT:
								$conf = $this->documentConf;
								break;
						case semappsConfig::URI_PAIR_DOCUMENT_TYPE:
								$conf = $this->documenttypeConf;
								break;
						default:
								$conf = $this->dbpedia;
				}
				return $conf;
		}

}