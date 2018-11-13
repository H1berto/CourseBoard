<?php

interface Crud{

	public function cadastrarRegistro($tabela,$registro){}
	public function listarRegistros($tabela){}
	public function procurarRegistro($tabela,$registro){}
	public function atualizarRegistro($tabela,$registro){}
	public function deletarRegistro($tabela,$registro){}

} 