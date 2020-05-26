<?php


function productListTemplate($r,$o) {
return $r.<<<HTML
<div>$o->price</div>
HTML;
}