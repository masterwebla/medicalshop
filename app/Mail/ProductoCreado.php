<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ProductoCreado extends Mailable
{
    use Queueable, SerializesModels;
    
    public $nombre;
    public $descripcion;
    public $precio;
    
    public function __construct($nombre_rx,$descripcion_rx,$precio_rx)
    {
        $this->nombre = $nombre_rx;
        $this->descripcion = $descripcion_rx;
        $this->precio = $precio_rx;
    }

    
    public function build()
    {
        return $this->from('medicalshop@osmaro.com')
                    ->subject('Nuevo producto creado en Medicalshop')
                    ->view('backoffice.mails.producto');
    }
}
