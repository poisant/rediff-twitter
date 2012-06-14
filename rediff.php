<?php
    $url = "http://www.rediff.com";
    $output = file_get_contents($url);
    $output = preg_replace("#<script.*</script>#",'',$output);
    $output = preg_replace("#<style.*</style>#",'',$output);
    echo $output;
?>