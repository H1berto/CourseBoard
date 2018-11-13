<?php 

class CodigoAcesso{

	private $id;
	private $codigo;
	private $datacriacao;
	private $ativo;
	private $masterid;

	


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * @param mixed $codigo
     *
     * @return self
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDatacriacao()
    {
        return $this->datacriacao;
    }

    /**
     * @param mixed $datacriacao
     *
     * @return self
     */
    public function setDatacriacao($datacriacao)
    {
        $this->datacriacao = $datacriacao;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAtivo()
    {
        return $this->ativo;
    }

    /**
     * @param mixed $ativo
     *
     * @return self
     */
    public function setAtivo($ativo)
    {
        $this->ativo = $ativo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMasterid()
    {
        return $this->masterid;
    }

    /**
     * @param mixed $masterid
     *
     * @return self
     */
    public function setMasterid($masterid)
    {
        $this->masterid = $masterid;

        return $this;
    }
}