<?php
class Obra {
    private $isbn ="";
    private $titulo ="";
    private $npagina =0;
    private $cantidad =0;
    private $compra =0;
    private $venta =0;
    private $publicado =0;
    private $impuesto =0;
    
    function __construct($isbn, $titulo, $npagina, $cantidad, $compra, $venta, $publicado, $impuesto) {
        $this->isbn = $isbn;
        $this->titulo = $titulo;
        $this->npagina = $npagina;
        $this->cantidad = $cantidad;
        $this->compra = $compra;
        $this->venta = $venta;
        $this->publicado = $publicado;
        $this->impuesto = $impuesto;
    }

    function getCantidad() {
        return $this->cantidad;
    }

    function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
    }

        function getIsbn() {
        return $this->isbn;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getNpagina() {
        return $this->npagina;
    }

    function getCompra() {
        return $this->compra;
    }

    function getVenta() {
        return $this->venta;
    }

    function getPublicado() {
        return $this->publicado;
    }

    function getImpuesto() {
        return $this->impuesto;
    }

    function setIsbn($isbn) {
        $this->isbn = $isbn;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setNpagina($npagina) {
        $this->npagina = $npagina;
    }

    function setCompra($compra) {
        $this->compra = $compra;
    }

    function setVenta($venta) {
        $this->venta = $venta;
    }

    function setPublicado($publicado) {
        $this->publicado = $publicado;
    }

    function setImpuesto($impuesto) {
        $this->impuesto = $impuesto;
    }



    
}
