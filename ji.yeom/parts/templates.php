<?php

function productListTemplate($r,$o) {
	// r is for currently deducsed value
	// o  is for
return $r.<<<HTML
<div>$o->price</div>
HTML;
}