<?php


namespace App\classes;


class example
{


    public $student =[];

    public function index()
    {
        $this->student= [
            0 => [
                'name'  =>'jahid',
                'email' =>'jahid@gmail.com',
                'phone' => [
                    'phone1'=>'123456',
                    'phone2'=>'654321',
                ],
            ],
            1 =>[
                'name'  =>'fahim',
                'email' =>'fahim@gmail.com',
                'phone' => [
                    'phone1'=>'123456',
                    'phone2'=>'654321',
                ],
            ],

            2=>'BITM',

            3=>
                [
                    'name'  =>'salahuddin',
                    'email' =>'salah@gmail.com',
                    'phone' => [
                        'phone1'=>'0987',
                        'phone2'=>'693333',
                    ],
                ],

        ];


        echo '<pre>';
        //print_r($this->student);
        
        var_dump($this->student);




//        foreach ( $this->student as $key=> $item)
//        {
//            //echo $item['name'].' ' .$item['email']. ' '.$item['phone'] .'<br/>';
//
//            if (is_array($item))
//            {
//                foreach ($item as $value)
//                {
//
//                    if (is_array($value))
//                    {
//                        foreach ($value as $v_value)
//                        {
//                            echo $v_value . ' ';
//                        }
//                    }
//                    else
//                    {
//                        echo $value .' ';
//                    }
//
//                }
//            }
//            else
//            {
//                echo $item;
//            }
//            echo '<br/>';
//
//        }

         //echo $this->student[0]['phone'];


       // $this->student = [10, 20, 30, 'bitm', 10.20, true, false ];
        // echo $this->student[5];
        //foreach ($this->student as $key=> $student)
       // {
       //     echo 'index no' .$key.'value-' . $student.'<br/>' ;
        //}


    }
}
