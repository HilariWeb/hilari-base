

CREATE TABLE tb_usuarios(
    id_usuario                INT    ( 11)  NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombres  	              VARCHAR(255)	NULL,
    apellidos  	              VARCHAR(255)	NULL,
    ci       	              VARCHAR(255)	NULL,
    departamento              VARCHAR(255)	NULL,
    celular                   VARCHAR(255)	NULL,
    rda                       VARCHAR(255)	NULL,
    cargo                     VARCHAR(255)	NULL,
    campo                     VARCHAR(255)	NULL,
    especialidad              VARCHAR(255)	NULL,
    fecha_nacimiento          VARCHAR(255)	NULL,
    email_user                VARCHAR(255)	NULL,
    email_verificado          VARCHAR(255)	NULL,
    password_user             VARCHAR(255)	NULL,

    fyh_creacion              DATETIME	    NULL,
    user_creacion             VARCHAR(255)  NULL,
    fyh_actualizacion	      DATETIME	    NULL,
    user_actualizacion	      VARCHAR(255)  NULL,
    fyh_eliminacion		      DATETIME      NULL,
    user_eliminacion	      VARCHAR(255)  NULL,
    estado			          VARCHAR(10) 	NULL

);

INSERT INTO `tb_usuarios` (`id_usuario`, `nombre`, `email_user`, `email_verificado`, `password_user`, `fyh_creacion`, `user_creacion`,
                           `fyh_actualizacion`, `user_actualizacion`, `fyh_eliminacion`, `user_eliminacion`, `estado`) VALUES
    (NULL, 'Freddy Eddy Hilari Michua', 'hilariweb@gmail.com', 'si', '12345678', '2020-11-30 12:54:23', 'hilariweb@gmail.com',
     NULL, NULL, NULL, NULL, '1');