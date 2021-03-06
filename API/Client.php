<?php
namespace Df\Zoho\API;
use Df\Zoho\Settings as S;
/**
 * 2017-07-05
 * @see \Df\ZohoBI\API\Client
 * @see \Dfe\ZohoCRM\API\Client
 */
abstract class Client extends \Df\API\Client {
	/**
	 * 2017-07-06
	 * @override
	 * @see \Df\API\Client::_construct()
	 * @used-by \Df\API\Client::__construct()
	 * @see \Df\ZohoBI\API\Client::_construct()
	 */
	final protected function _construct() {parent::_construct(); $this->resJson();}

	/**
	 * 2017-07-06
	 * @final I do not use the PHP «final» keyword here to allow refine the return type using PHPDoc.
	 * @return S
	 */
	protected function ss() {return dfs($this);}

	/**
	 * 2017-07-06
	 * @param string|object $m
	 * @param string $path
	 * @param array(string => mixed) $p [optional]
	 * @param string|null $method [optional]
	 * @return self
	 */
	final static function i($m, $path, array $p = [], $method = null) {return df_new(
		df_con_heir($m, self::class), $path, $p, $method
	);}
}