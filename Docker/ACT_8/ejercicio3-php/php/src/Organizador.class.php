<?php
class Organizador{
    private int $id;
    private string $dni;
    private string $nombre;
    private string $contacto;

    public function __construct(int $id, string $dni, string $nombre, string $contacto){
        $this->id = $id;
        $this->dni = $dni;
        $this->nombre = $nombre;
        $this->contacto = $contacto;
    }



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
     * Get the value of dni
     */
    public function getDni(): string
    {
        return $this->dni;
    }

    /**
     * Set the value of dni
     */
    public function setDni(string $dni)
    {
        $this->dni = $dni;


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
     * Get the value of contacto
     */
    public function getContacto(): string
    {
        return $this->contacto;
    }

    /**
     * Set the value of contacto
     */
    public function setContacto(string $contacto)
    {
        $this->contacto = $contacto;

    }
}
?>