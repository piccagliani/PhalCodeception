<?php
$I = new TestGuy($scenario);
$I->wantTo('test top page');

$I->amOnPage('/');
$I->see('Welcome to INVO', 'h1');