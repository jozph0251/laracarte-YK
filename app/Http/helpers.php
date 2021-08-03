<?php 

if (! function_exists('pageTitle')) 
{
	function pageTitle($title)
	{
		$page_title = config('app.name');
		if ($title ==='')
		{
			return $page_title;
		}
		else
		{
			return $title . ' | ' . $page_title;
		}
	}
}

if (! function_exists('set_active_route')) 
{
	function set_active_route($route)
	{
		return Route::is($route) ? 'active' : '';
	}
}