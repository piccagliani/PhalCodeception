<?php
$I = new TestGuy($scenario);
$I->wantTo('test registration form');

$I->amOnPage('/session/register');
$I->fillField('Your Full Name', 'Phalcon Codeception');
$I->fillField('Username', 'phalcon_codeception');
$I->fillField('Email Address', 'demo@example.com');
$I->fillField('Password', 'demo');
$I->fillField('Repeat Password', 'demo');
$I->click("Register");

$I->seeCurrentUrlEquals('/session/register');
$I->seeRecord('Users', ['name' => 'Phalcon Codeception']);
