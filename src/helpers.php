<?php
/**
 * Created by PhpStorm.
 * User: chenyihong
 * Date: 16/8/14
 * Time: 11:25
 */

/**
 * @param string $name
 * @param array  $parameters
 * @param bool   $absolute
 * @return string
 */
if (!function_exists(__NAMESPACE__ . '\cas_route'))
{
	function cas_route($name, $parameters = [], $absolute = true)
	{
		$name = config('cas.router.name_prefix').$name;

		return route($name, $parameters, $absolute);
	}
}
