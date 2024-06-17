<?php

namespace App\Interfaces;

interface ProductAndServiceInterface
{
    public function createRegistration(array $data);
    public function getAllRegistration();
    public function getAllRegistrationByLoggedUser();
    public function getPendingRegistration($registrationData);
    public function getFinishRegistration($registrationData);
}
