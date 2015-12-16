<?php 
class Usuario extends ActiveRecord{
	/*
	CREATE TABLE IF NOT EXISTS `usuario` (
	  `id` int(11) NOT NULL AUTO_INCREMENT,
	  `usuario_nombre` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
	  `usuario_password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
	  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	  PRIMARY KEY (`id`)
	) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

	--
	-- Volcado de datos para la tabla `usuario`
	--

	INSERT INTO `usuario` (`id`, `usuario_nombre`, `usuario_password`, `updated_at`) VALUES
	(1, 'jaimeirazabal1', '7d3ff5e583a1727c07bd911d427b514b', '2015-12-16 12:36:09');
	*/
	public function crearPassword($password = null){
		if ($password) {
			return md5($password);
		}else{
			$this->usuario_password = md5($this->usuario_password);
			return $this->usuario_password;
		}
	}

}

 ?>
