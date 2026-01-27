<?php

class Evento{
    private int $id;
    private string $nombre;
    private DateTime $fecha;
    private string $ubicacion;
    private int $asistentes;
    private Organizador $organizador;

    

    /**
     * Get the value of id
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId(int $id)
    {
        $this->id = $id;

    }

    /**
     * Get the value of nombre
     */
    public function getNombre(): string
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     */
    public function setNombre(string $nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * Get the value of fecha
     */
    public function getFecha(): DateTime
    {
        return $this->fecha;
    }

    /**
     * Set the value of fecha
     */
    public function setFecha(DateTime $fecha)
    {
        $this->fecha = $fecha;

    }

    /**
     * Get the value of ubicacion
     */
    public function getUbicacion(): string
    {
        return $this->ubicacion;
    }

    /**
     * Set the value of ubicacion
     */
    public function setUbicacion(string $ubicacion)
    {
        $this->ubicacion = $ubicacion;

    }

    /**
     * Get the value of asistentes
     */
    public function getAsistentes(): int
    {
        return $this->asistentes;
    }

    /**
     * Set the value of asistentes
     */
    public function setAsistentes(int $asistentes)
    {
        $this->asistentes = $asistentes;

    }

    /**
     * Get the value of organizador
     */
    public function getOrganizador(): Organizador
    {
        return $this->organizador;
    }

    /**
     * Set the value of organizador
     */
    public function setOrganizador(Organizador $organizador)
    {
        $this->organizador = $organizador;

    }
}
?>