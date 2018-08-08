<?php
	function admin_url($url = '')
{
	return base_url().'public/admin'.$url;
}

function pre($list, $exit = true)
{
    echo "<pre>";
    print_r($list);
    if($exit)
    {
        die();
    }
}
?>