/*
 Navicat Premium Data Transfer

 Source Server         : jcjMysql
 Source Server Type    : MySQL
 Source Server Version : 100134
 Source Host           : localhost:3306
 Source Schema         : bd_megasystem

 Target Server Type    : MySQL
 Target Server Version : 100134
 File Encoding         : 65001

 Date: 31/12/2019 00:14:01
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for alumno
-- ----------------------------
DROP TABLE IF EXISTS `alumno`;
CREATE TABLE `alumno`  (
  `idAlumno` int(4) NOT NULL AUTO_INCREMENT,
  `dni` char(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nombre` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `apPaterno` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `apMaterno` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `genero` bit(1) NULL DEFAULT NULL,
  `celular` char(9) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `feNacimiento` date NULL DEFAULT NULL,
  `direccion` varchar(80) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`idAlumno`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 105 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of alumno
-- ----------------------------
INSERT INTO `alumno` VALUES (103, '44444444', 'kjnij', 'lkjlok', 'hkjnjk', b'1', '999999999', '1997-05-02', 'kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk');
INSERT INTO `alumno` VALUES (104, '99999999', 'bgvbgb', 'ihjhj', 'jhjhh', b'1', '966666666', '1997-06-02', 'ghgñññññññññññññññññññññññññññññññññññññññññññññññ');

-- ----------------------------
-- Table structure for apoderado
-- ----------------------------
DROP TABLE IF EXISTS `apoderado`;
CREATE TABLE `apoderado`  (
  `idApoderado` int(4) NOT NULL AUTO_INCREMENT,
  `dni` char(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nombre` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `apPaterno` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `apMaterno` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `celular` char(9) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `direccion` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `parentesco` char(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`idApoderado`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for ciclo
-- ----------------------------
DROP TABLE IF EXISTS `ciclo`;
CREATE TABLE `ciclo`  (
  `idCiclo` int(4) NOT NULL AUTO_INCREMENT,
  `nombre` char(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `feInicio` date NULL DEFAULT NULL,
  `feFin` date NULL DEFAULT NULL,
  `activo` bit(1) NULL DEFAULT NULL COMMENT '1-> Activo ',
  PRIMARY KEY (`idCiclo`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ciclo
-- ----------------------------
INSERT INTO `ciclo` VALUES (2, '2020_I', '2020-01-06', '2020-04-30', b'1');

-- ----------------------------
-- Table structure for concepto
-- ----------------------------
DROP TABLE IF EXISTS `concepto`;
CREATE TABLE `concepto`  (
  `idConcepto` int(2) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `moTotal` float(4, 2) NULL DEFAULT NULL,
  PRIMARY KEY (`idConcepto`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of concepto
-- ----------------------------
INSERT INTO `concepto` VALUES (1, 'Certificado', 20.00);
INSERT INTO `concepto` VALUES (2, 'Matricula', 50.00);
INSERT INTO `concepto` VALUES (3, 'Mensualidad', 60.00);
INSERT INTO `concepto` VALUES (4, 'Carnet', 2.00);
INSERT INTO `concepto` VALUES (5, 'Otros', 0.00);

-- ----------------------------
-- Table structure for cuota
-- ----------------------------
DROP TABLE IF EXISTS `cuota`;
CREATE TABLE `cuota`  (
  `idCuota` int(4) NOT NULL AUTO_INCREMENT,
  `monto` float(4, 2) NULL DEFAULT NULL,
  `feVencimiento` date NULL DEFAULT NULL,
  `idConcepto` int(4) NULL DEFAULT NULL,
  `idMatricula` int(4) NULL DEFAULT NULL,
  `saldo` float(4, 2) NULL DEFAULT NULL,
  `pagado` bit(1) NOT NULL COMMENT '0 aún debe 1 cuota pagada',
  `raDescuento` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `moDescuento` float(4, 2) NULL DEFAULT NULL,
  PRIMARY KEY (`idCuota`) USING BTREE,
  INDEX `idConcepto`(`idConcepto`) USING BTREE,
  INDEX `idMatricula`(`idMatricula`) USING BTREE,
  CONSTRAINT `cuota_ibfk_1` FOREIGN KEY (`idConcepto`) REFERENCES `concepto` (`idConcepto`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `cuota_ibfk_2` FOREIGN KEY (`idMatricula`) REFERENCES `matricula` (`idMatricula`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for curso
-- ----------------------------
DROP TABLE IF EXISTS `curso`;
CREATE TABLE `curso`  (
  `idCurso` int(4) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`idCurso`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of curso
-- ----------------------------
INSERT INTO `curso` VALUES (5, 'Ofimática');
INSERT INTO `curso` VALUES (6, 'Diseño Gráfico');
INSERT INTO `curso` VALUES (7, 'Excel Intermedio-Ava');
INSERT INTO `curso` VALUES (8, 'Cosmetología Básica');
INSERT INTO `curso` VALUES (9, 'Cosmetología Avanzad');
INSERT INTO `curso` VALUES (10, 'Barbería');

-- ----------------------------
-- Table structure for grupo
-- ----------------------------
DROP TABLE IF EXISTS `grupo`;
CREATE TABLE `grupo`  (
  `idGrupo` int(4) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `idCurso` int(4) NULL DEFAULT NULL,
  `duMeses` int(2) NULL DEFAULT NULL,
  `duTotalHoras` int(3) NULL DEFAULT NULL,
  `idCiclo` int(4) NULL DEFAULT NULL,
  `vacante` int(2) NULL DEFAULT NULL,
  `hoInicio` time(2) NULL DEFAULT NULL,
  `hoFin` time(2) NULL DEFAULT NULL,
  `dia` char(9) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `feInicio` date NULL DEFAULT NULL,
  PRIMARY KEY (`idGrupo`) USING BTREE,
  INDEX `idCurso`(`idCurso`) USING BTREE,
  INDEX `idCiclo`(`idCiclo`) USING BTREE,
  CONSTRAINT `grupo_ibfk_1` FOREIGN KEY (`idCurso`) REFERENCES `curso` (`idCurso`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `grupo_ibfk_2` FOREIGN KEY (`idCiclo`) REFERENCES `ciclo` (`idCiclo`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 29 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of grupo
-- ----------------------------
INSERT INTO `grupo` VALUES (19, 'sab(8:00AM-11:00AM)', 5, 4, 3, 2, 1, '08:00:00.00', '11:00:00.00', 'Sábado', '2019-11-02');
INSERT INTO `grupo` VALUES (20, 'sab(11:00AM-2:00PM)', 6, 4, 3, 2, 12, '11:00:00.00', '14:00:00.00', 'Sábado', '2019-11-02');
INSERT INTO `grupo` VALUES (21, 'sab(2:00PM-5:00PM)', 6, 4, 3, 2, 20, '14:00:00.00', '17:00:00.00', 'Sábado', '2019-11-02');
INSERT INTO `grupo` VALUES (22, 'Dom(8:00AM-11:00AM)', 7, 4, 3, 2, 15, '08:00:00.00', '11:00:00.00', 'Domingo', '2019-11-02');
INSERT INTO `grupo` VALUES (23, 'Dom(2:00PM-5:00PM)', 7, 4, 3, 2, 20, '14:00:00.00', '17:00:00.00', 'Domingo', '2019-11-01');
INSERT INTO `grupo` VALUES (24, 'sab(10:00AM-1:00PM)', 8, 4, 3, 2, 18, '10:00:00.00', '01:00:00.00', 'Sabado', '2019-11-02');
INSERT INTO `grupo` VALUES (25, 'Dom(2:00PM-5:00PM)', 8, 4, 3, 2, 20, '14:00:00.00', '17:00:00.00', 'Domingo', '2019-11-02');
INSERT INTO `grupo` VALUES (26, 'sab(2:00PM-5:00PM)', 9, 4, 3, 2, 17, '14:00:00.00', '17:00:00.00', 'Sabado', '2019-11-02');
INSERT INTO `grupo` VALUES (27, 'sab(9:00AM-12:00AM)', 9, 4, 3, 2, 20, '09:00:00.00', '12:00:00.00', 'Sabado', '2019-11-02');
INSERT INTO `grupo` VALUES (28, 'sab(9:00AM-12:00AM)', 10, 4, 3, 2, 13, '09:00:00.00', '12:00:00.00', 'Sabado', '2019-11-02');

-- ----------------------------
-- Table structure for matricula
-- ----------------------------
DROP TABLE IF EXISTS `matricula`;
CREATE TABLE `matricula`  (
  `idMatricula` int(4) NOT NULL AUTO_INCREMENT,
  `fecha` datetime(0) NULL DEFAULT NULL,
  `idGrupo` int(4) NULL DEFAULT NULL,
  `idApoderado` int(4) NULL DEFAULT NULL,
  `idAlumno` int(4) NULL DEFAULT NULL,
  `idPromotor` int(4) NULL DEFAULT NULL,
  PRIMARY KEY (`idMatricula`) USING BTREE,
  INDEX `idPromotor`(`idPromotor`) USING BTREE,
  INDEX `idAlumno`(`idAlumno`) USING BTREE,
  INDEX `idApoderado`(`idApoderado`) USING BTREE,
  INDEX `idGrupo`(`idGrupo`) USING BTREE,
  CONSTRAINT `matricula_ibfk_1` FOREIGN KEY (`idPromotor`) REFERENCES `promotor` (`idPromotor`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `matricula_ibfk_2` FOREIGN KEY (`idAlumno`) REFERENCES `alumno` (`idAlumno`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `matricula_ibfk_3` FOREIGN KEY (`idApoderado`) REFERENCES `apoderado` (`idApoderado`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `matricula_ibfk_4` FOREIGN KEY (`idGrupo`) REFERENCES `grupo` (`idGrupo`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for pago
-- ----------------------------
DROP TABLE IF EXISTS `pago`;
CREATE TABLE `pago`  (
  `idPago` int(4) NOT NULL AUTO_INCREMENT,
  `importe` float(4, 2) NULL DEFAULT NULL,
  `feEmision` datetime(0) NULL DEFAULT NULL,
  `nuRecibo` varchar(12) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `idCuota` int(4) NULL DEFAULT NULL,
  PRIMARY KEY (`idPago`) USING BTREE,
  INDEX `idMatricula`(`nuRecibo`) USING BTREE,
  INDEX `idPago`(`idCuota`) USING BTREE,
  CONSTRAINT `pago_ibfk_1` FOREIGN KEY (`idCuota`) REFERENCES `cuota` (`idCuota`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for promotor
-- ----------------------------
DROP TABLE IF EXISTS `promotor`;
CREATE TABLE `promotor`  (
  `idPromotor` int(4) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `apPaterno` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `apMaterno` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `dni` char(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`idPromotor`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of promotor
-- ----------------------------
INSERT INTO `promotor` VALUES (1, 'jose', 'cruz', 'Perez', '70409312');

-- ----------------------------
-- Procedure structure for buscarAlumnodni
-- ----------------------------
DROP PROCEDURE IF EXISTS `buscarAlumnodni`;
delimiter ;;
CREATE PROCEDURE `buscarAlumnodni`(IN `_auxDni` VARCHAR(10))
BEGIN
	IF (LENGTH(_auxDni) = 8) THEN
		SELECT * FROM alumno WHERE alumno.dni = _auxDni;
		
	END IF;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for buscarApoderado
-- ----------------------------
DROP PROCEDURE IF EXISTS `buscarApoderado`;
delimiter ;;
CREATE PROCEDURE `buscarApoderado`(IN `_dni` VARCHAR(10))
BEGIN

		SELECT * FROM apoderado WHERE apoderado.dni = _dni;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for buscarCiclo
-- ----------------------------
DROP PROCEDURE IF EXISTS `buscarCiclo`;
delimiter ;;
CREATE PROCEDURE `buscarCiclo`()
BEGIN
	
	SELECT * FROM  ciclo WHERE ciclo.activo = 1;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for buscarMatriculaIDAlumno
-- ----------------------------
DROP PROCEDURE IF EXISTS `buscarMatriculaIDAlumno`;
delimiter ;;
CREATE PROCEDURE `buscarMatriculaIDAlumno`(in _idAlumno INT)
BEGIN
	SELECT * FROM matricula WHERE idAlumno = _idAlumno;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for buscarPromotor
-- ----------------------------
DROP PROCEDURE IF EXISTS `buscarPromotor`;
delimiter ;;
CREATE PROCEDURE `buscarPromotor`(IN _auxDni VARCHAR(8))
BEGIN
	SELECT * FROM promotor
	WHERE promotor.dni = _auxDni;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for buscarPromotorNombre
-- ----------------------------
DROP PROCEDURE IF EXISTS `buscarPromotorNombre`;
delimiter ;;
CREATE PROCEDURE `buscarPromotorNombre`(IN `_auxNombre` VARCHAR(20))
BEGIN
	SELECT * FROM promotor
	WHERE nombre LIKE '_auxNombre%'; 

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for fechaActual
-- ----------------------------
DROP PROCEDURE IF EXISTS `fechaActual`;
delimiter ;;
CREATE PROCEDURE `fechaActual`()
BEGIN
	SELECT NOW();

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for listarCuotas
-- ----------------------------
DROP PROCEDURE IF EXISTS `listarCuotas`;
delimiter ;;
CREATE PROCEDURE `listarCuotas`(IN `_idMatricula` INT(4))
BEGIN
DECLARE algo INT;
    DECLARE numero INT;
    set @algo = 0;
    set @numero = 0;
    
SELECT
        co.descripcion, c.idCuota, c.monto,  DATE_FORMAT(c.feVencimiento, "%d-%m-%Y") as feVencimiento, c.idConcepto, c.idMatricula, c.saldo, c.pagado, c.raDescuento, c.moDescuento, (@algo := c.saldo + @algo) as suma, (@numero := @numero +1 ) as pos
    FROM cuota c INNER JOIN concepto co ON c.idConcepto = co.idConcepto
    WHERE
        co.idConcepto > 1 and co.idConcepto < 4 ORDER by c.idCuota ASC;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for listarCurso
-- ----------------------------
DROP PROCEDURE IF EXISTS `listarCurso`;
delimiter ;;
CREATE PROCEDURE `listarCurso`()
BEGIN
	#SELECT c.nombre 
	#FROM curso as c INNER JOIN grupo as g on c.idCurso = g.idCurso
	#where g.vacante > 0;
	SELECT * FROM curso;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for listarGrupos
-- ----------------------------
DROP PROCEDURE IF EXISTS `listarGrupos`;
delimiter ;;
CREATE PROCEDURE `listarGrupos`()
BEGIN
	SELECT * FROM grupo
	WHERE vacante > 0 ;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for listarGruposNoDisponible
-- ----------------------------
DROP PROCEDURE IF EXISTS `listarGruposNoDisponible`;
delimiter ;;
CREATE PROCEDURE `listarGruposNoDisponible`(in _auxDni INT)
BEGIN
#if _auxDni <> "1" THEN
		SELECT g.idGrupo,g.idCurso
		FROM alumno as a INNER JOIN matricula as m on a.idAlumno = m.idAlumno
		INNER JOIN grupo as g on m.idGrupo = g.idGrupo
		WHERE a.dni = _auxDni;
#else
#		SELECT * FROM grupo;
#end if;


	
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for listarMeses
-- ----------------------------
DROP PROCEDURE IF EXISTS `listarMeses`;
delimiter ;;
CREATE PROCEDURE `listarMeses`(IN `_feNacimiento` date)
BEGIN
select DATE_ADD(_feNacimiento, INTERVAL 1 month);
select DATE_ADD(_feNacimiento, INTERVAL 2 month);
select DATE_ADD(_feNacimiento, INTERVAL 3 month);
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for montoPagoConcepto
-- ----------------------------
DROP PROCEDURE IF EXISTS `montoPagoConcepto`;
delimiter ;;
CREATE PROCEDURE `montoPagoConcepto`(IN `_tipo` VARCHAR(15))
BEGIN
	SELECT * FROM concepto
	WHERE concepto.descripcion = _tipo;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for mostrarConcepto
-- ----------------------------
DROP PROCEDURE IF EXISTS `mostrarConcepto`;
delimiter ;;
CREATE PROCEDURE `mostrarConcepto`()
  NO SQL 
SELECT concepto.descripcion, concepto.moTotal, concepto.idConcepto from concepto WHERE concepto.idConcepto <=3
;
;;
delimiter ;

-- ----------------------------
-- Procedure structure for mostrarMesesPagos
-- ----------------------------
DROP PROCEDURE IF EXISTS `mostrarMesesPagos`;
delimiter ;;
CREATE PROCEDURE `mostrarMesesPagos`(IN `_idGrupo` INT)
BEGIN
	SELECT * FROM grupo WHERE grupo.idGrupo = _idGrupo;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for nombreDni
-- ----------------------------
DROP PROCEDURE IF EXISTS `nombreDni`;
delimiter ;;
CREATE PROCEDURE `nombreDni`(IN `DNI` CHAR(9))
  NO SQL 
BEGIN
    SELECT
        concat(alumno.nombre,' ',alumno.apPaterno ,' ',alumno.apMaterno) nombreCompleto, curso.nombre, grupo.descripcion, matricula.idMatricula
    FROM
        alumno INNER JOIN matricula on matricula.idAlumno = alumno.idAlumno INNER JOIN grupo on grupo.idGrupo = matricula.idGrupo 
        INNER JOIN curso on curso.idCurso =  grupo.idCurso
    WHERE
        alumno.dni = DNI;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for Nuevo
-- ----------------------------
DROP PROCEDURE IF EXISTS `Nuevo`;
delimiter ;;
CREATE PROCEDURE `Nuevo`(IN `monto` FLOAT(6,2), IN `feVencimiento` DATE, IN `idConcepto` INT(4), IN `idMatricula` INT(4), IN `saldo` FLOAT(6,2), IN `raDescuento` TEXT, IN `moDescuento` FLOAT(6,2), IN `pagado` BOOLEAN, IN `importe` FLOAT(6,2), IN `nuRecibo` VARCHAR(12))
  NO SQL 
BEGIN
	DECLARE aux int DEFAULT 0;
    DECLARE repetido boolean DEFAULT true;
    DECLARE num int DEFAULT 0;
    Declare MESSAGE_TEXT varchar(200);
    IF importe = 0 THEN
		insert into cuota(cuota.monto, cuota.feVencimiento, cuota.idConcepto, cuota.idMatricula, cuota.saldo, cuota.raDescuento, cuota.moDescuento, cuota.pagado) VALUES(monto, feVencimiento, idConcepto, idMatricula, saldo, raDescuento, moDescuento, pagado);
    	ELSE
        SELECT COUNT(*) into num FROM pago WHERE pago.nuRecibo = nuRecibo;
        IF num != 0 THEN
        	set repetido = false;
            	signal SQLSTATE '45000'
                set MESSAGE_TEXT = 'Error, No puedes hacerlo';
            ELSE
            	IF repetido=TRUE THEN
                	insert into cuota(cuota.monto, cuota.feVencimiento, cuota.idConcepto, cuota.idMatricula, cuota.saldo, cuota.raDescuento, cuota.moDescuento, cuota.pagado) VALUES(monto, feVencimiento, idConcepto, idMatricula, saldo, raDescuento, moDescuento, pagado);
        	SELECT cuota.idCuota into aux from cuota ORDER BY cuota.idCuota DESC limit 1;
            INSERT INTO pago(importe,feEmision,nuRecibo,idCuota) VALUES(importe,NOW(),nuRecibo,aux);
                END IF;
        END IF;
	END IF;    	
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for registrarAlumno
-- ----------------------------
DROP PROCEDURE IF EXISTS `registrarAlumno`;
delimiter ;;
CREATE PROCEDURE `registrarAlumno`(IN `_dni` VARCHAR(10),
IN `_nombre` VARCHAR(20),
IN `_apPaterno` VARCHAR(20),
IN `_apMaterno` VARCHAR(20),
IN `_genero` char(1),
IN `_celular` VARCHAR(10),
IN `_feNacimiento` date,
IN `_direccion` VARCHAR(50))
BEGIN
	
		INSERT INTO alumno(dni,nombre,apPaterno,apMaterno,genero,celular,feNacimiento,direccion) VALUES(_dni,_nombre,_apPaterno,_apMaterno,_genero,_celular,_feNacimiento,_direccion);

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for registrarApoderado
-- ----------------------------
DROP PROCEDURE IF EXISTS `registrarApoderado`;
delimiter ;;
CREATE PROCEDURE `registrarApoderado`(IN `_dni` VARCHAR(18),
IN `_nombre` VARCHAR(30),
IN `_apPaterno` VARCHAR(20), 
IN `_apMaterno` VARCHAR(20), 
IN `_celular` VARCHAR(10), 
IN `_direccion` VARCHAR(50),
IN `_parentesco` VARCHAR(20))
BEGIN

			INSERT INTO apoderado(dni,nombre,apPaterno,apMaterno,celular,direccion,parentesco) VALUES(_dni,_nombre,_apPaterno,_apMaterno,_celular,_direccion,_parentesco);

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for registrarCuotaIngreso
-- ----------------------------
DROP PROCEDURE IF EXISTS `registrarCuotaIngreso`;
delimiter ;;
CREATE PROCEDURE `registrarCuotaIngreso`(IN `monto` FLOAT(4,2), IN `feVencimiento` DATE, IN `idConcepto` INT(4), IN `idMatricula` INT(4), IN `saldo` FLOAT(4,2), IN `raDescuento` VARCHAR(200), IN `moDescuento` FLOAT(4,2))
  NO SQL 
BEGIN
insert into cuota(cuota.monto, cuota.feVencimiento, cuota.idConcepto, cuota.idMatricula, cuota.saldo, cuota.raDescuento, cuota.moDescuento) VALUES(monto, feVencimiento, idConcepto, idMatricula, saldo, raDescuento, moDescuento);
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for registrarPago
-- ----------------------------
DROP PROCEDURE IF EXISTS `registrarPago`;
delimiter ;;
CREATE PROCEDURE `registrarPago`(IN _importe FLOAT, IN _nrecibo VARCHAR(12), IN _idcuota INT)
BEGIN
	DECLARE cant INT;
    Declare MESSAGE_TEXT varchar(200);
	SET cant = (SELECT COUNT(*) FROM pago p WHERE p.nuRecibo = _nrecibo);
	IF cant > 0 THEN
		signal SQLSTATE '45000'
       	set MESSAGE_TEXT = 'Error, No puedes hacerlo';
	ELSE
		INSERT INTO pago(importe,feEmision,nuRecibo,idCuota) VALUES(_importe,NOW(),_nrecibo,_idcuota);
		UPDATE cuota c SET c.pagado = 1 WHERE  (SELECT SUM(p.importe) FROM pago p WHERE p.idCuota = _idcuota) >= C.monto and c.idCuota = _idcuota;
		UPDATE cuota c SET c.saldo = c.saldo - _importe  WHERE  c.idCuota = _idcuota;
	END IF;

	
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for registroCuotas
-- ----------------------------
DROP PROCEDURE IF EXISTS `registroCuotas`;
delimiter ;;
CREATE PROCEDURE `registroCuotas`(IN _monto FLOAT,IN _feVencimiento date,IN _idConcepto INT,IN _idMatricula INT,IN _saldo FLOAT,IN _pagado INT,IN _raDescuento VARCHAR(60),IN _moDescuento FLOAT,IN _numero int)
BEGIN
	
	DECLARE _auxFecha Date;
	
	set _auxFecha = DATE(DATE_ADD(_feVencimiento, INTERVAL _numero MONTH));
	
		INSERT INTO cuota(monto,feVencimiento,idConcepto,idMatricula,saldo,pagado,raDescuento,moDescuento) VALUES(_monto,_auxFecha,_idConcepto,_idMatricula,_saldo,_pagado,_raDescuento,_moDescuento);
	
	
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for registroMatricula
-- ----------------------------
DROP PROCEDURE IF EXISTS `registroMatricula`;
delimiter ;;
CREATE PROCEDURE `registroMatricula`(IN `_idGrupo` INT,IN `_idApoderado` INT,IN `_idAlumno` INT,IN `_idPromotor` INT)
BEGIN

	INSERT INTO matricula(fecha,idGrupo,idApoderado,idAlumno,idPromotor) VALUES(NOW(),_idGrupo,_idApoderado,_idAlumno,_idPromotor);
	
	UPDATE grupo 
	SET grupo.vacante = grupo.vacante -1 
	WHERE grupo.idGrupo = _idGrupo;
	
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for ultimaCuotaMatricula
-- ----------------------------
DROP PROCEDURE IF EXISTS `ultimaCuotaMatricula`;
delimiter ;;
CREATE PROCEDURE `ultimaCuotaMatricula`()
BEGIN

	select idCuota 
	from cuota 
	WHERE idConcepto = 2
	order by idCuota desc limit 1;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for ultimaMatricula
-- ----------------------------
DROP PROCEDURE IF EXISTS `ultimaMatricula`;
delimiter ;;
CREATE PROCEDURE `ultimaMatricula`()
BEGIN
#declare set
	select idMatricula 
	from Matricula 
	order by idMatricula desc limit 1;

END
;;
delimiter ;

SET FOREIGN_KEY_CHECKS = 1;
