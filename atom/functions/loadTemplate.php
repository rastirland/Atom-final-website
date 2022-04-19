<?php

function loadTemplate($fileName, $tempVars) {
	   extract($tempVars);
        ob_start();
        require $fileName;
        $contents = ob_get_clean();
        return $contents;       
}