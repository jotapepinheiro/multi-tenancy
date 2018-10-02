<?php

$this->get('companies', 'Tenant\CompanyController@index')->name('company.index');
$this->get('company/create', 'Tenant\CompanyController@create')->name('company.create');
$this->post('company', 'Tenant\CompanyController@store')->name('company.store');
$this->get('company/{domain}', 'Tenant\CompanyController@show')->name('company.show');
$this->get('company/edit/{domain}', 'Tenant\CompanyController@edit')->name('company.edit');
$this->put('company/{id}', 'Tenant\CompanyController@update')->name('company.update');
$this->delete('company/{id}', 'Tenant\CompanyController@destroy')->name('company.destroy');

$this->get('/', 'Tenant\TenantController@index')->name('tenant');