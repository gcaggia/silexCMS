<?php

// Data access
require 'model.php';

$articles = getArticles();

// Data display
require 'view.php';
