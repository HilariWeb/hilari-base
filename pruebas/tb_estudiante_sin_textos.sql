

CREATE TABLE tb_estudiantes_sin_textos(
    id_estudiante                INT    ( 11)  NOT NULL AUTO_INCREMENT PRIMARY KEY,
    unidad_educativa  	              VARCHAR(255)	NULL,
    ano_escolaridad  	              VARCHAR(255)	NULL,
    estudiante       	              VARCHAR(255)	NULL,
    director              VARCHAR(255)	NULL,
    celular                   VARCHAR(255)	NULL,

    fyh_creacion              DATETIME	    NULL,
    user_creacion             VARCHAR(255)  NULL,
    fyh_actualizacion	      DATETIME	    NULL,
    user_actualizacion	      VARCHAR(255)  NULL,
    fyh_eliminacion		      DATETIME      NULL,
    user_eliminacion	      VARCHAR(255)  NULL,
    estado			          VARCHAR(10) 	NULL

);
