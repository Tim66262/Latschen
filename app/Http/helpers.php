<?php

class helpers{
    public static function addProductRequest($product){
        $to_name = 'Tim';
        $to_email = 'tim.damato@swisscom.com';
        $data = array(
            'id'=>$product->id,
            'name'=>$product->name,
            'seller'=>$product->users->name,
            'price'=>$product->price,
            'quality'=>$product->quality,
            'cardboard'=>$product->cardboard == 1 ? 'Karton Ja' : 'Karton Nein',
            'imagePath'=>$product->imagePath,
        );
           
        Mail::send('sell.requestemail', $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
                    ->subject('Neues Produkt eingestellt');
            $message->from('kaiktus@gmail.com','Latschen');
        });
    }
}