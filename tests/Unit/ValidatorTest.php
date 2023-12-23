<?php

use Core\Validator;

it('validares a string', function (){
	expect(Validator::string('foobar'))->toBeTrue();
	expect(Validator::string(false))->toBeFalse();
	expect(Validator::string(''))->toBeFalse();
});

it('validares a string with a min 20', function (){
	expect(Validator::string('foobar', 20))->toBeFalse();
});

it('validares an email', function (){
	expect(Validator::email('foobar'))->toBeFalse();
	expect(Validator::email('foobar@ex.com'))->toBeTrue();
});

it('validates that a number is greater than a given amount', function (){
	expect(Validator::greaterThan(10, 1))->toBeTrue();
	expect(Validator::greaterThan(10, 100))->toBeFalse();

})->only();