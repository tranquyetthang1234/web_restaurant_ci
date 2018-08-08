<?php
	function public_url($url = '')
{
	return base_url().'public/'.$url;
}
	


function public_urls($urls = '')
	{
		return base_url().'/'.$urls;
	}
?>