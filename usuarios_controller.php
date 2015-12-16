<?php 
class UsuariosController extends AppController{
	public function crear(){
		if (Input::haspost("usuario")) {
			$usuario = Load::model("usuario",Input::post("usuario"));
			if (Input::post("usuario")['usuario_password'] != Input::post("usuario")['usuario_password2']) {
				Flash::error("Error, las contraseñas no coinciden");
				return;
			}
			$usuario->crearPassword();
			if ($usuario->save()) {
				Flash::valid("Usuario Creado");
				Input::delete();
			}else{
				Flash::error("No se creó el usuario");
			}
		}
	}
	public function index(){
		$this->usuarios = Load::model("usuario")->find();
	}
}

 ?>