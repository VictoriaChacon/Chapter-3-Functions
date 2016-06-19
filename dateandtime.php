<?php
function longdate($timestamp)
{
	return date("l F jS Y", $timestamp);
}
echo longdate(time());
echo longdate(time() - 2 * 24 * 60 * 60);