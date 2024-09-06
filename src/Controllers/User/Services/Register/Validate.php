<?php
namespace luan\clube\Controllers\User\Services\Register;

class Validate
{
    public function execute($data)
    {
        $sucess = true;
        foreach($this->getFileds() as $key => $field){
            if ( $field['required'] == false){
                continue;
            }

            if (!isset($data[$key]) || empty($data[$key])) {
                $sucess = false;
            }
        }
        return $sucess;
    }
    private function getFileds()
    {
        return [ 
            'phone' => [
                'required' => true
            ],
            
            'email' => [
                'required' => true
            ],
                 
            'name' => [
                'required' => true
            ],
                     
            'password' => [
                'required' => true
            ]
            ];
                
            

        
    }
}