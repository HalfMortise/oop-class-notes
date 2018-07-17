<?php
//filters out script tags, for security purposes
//only required for strings, not integers or floats
//the filter flag no encode quotes is options

$unfilteredText = / hahaha <script>lol</script>;
$filteredText = filter_var($unfilteredText, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
var_dump($filteredText);