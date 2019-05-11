/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100138
 Source Host           : localhost:3306
 Source Schema         : aulas

 Target Server Type    : MySQL
 Target Server Version : 100138
 File Encoding         : 65001

 Date: 11/05/2019 14:08:05
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for aulas
-- ----------------------------
DROP TABLE IF EXISTS `aulas`;
CREATE TABLE `aulas`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aula` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `capacidad` int(3) NULL DEFAULT NULL,
  `tipSilla` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `tipEntrada` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `taburete` char(1) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `pizarra` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `proyector` char(1) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `pcAlumno` char(1) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `pcDocente` char(1) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `canPuertas` int(2) NULL DEFAULT NULL,
  `equVentilacion` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `observacion` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL,
  `estado` char(1) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 94 CHARACTER SET = utf8 COLLATE = utf8_spanish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of aulas
-- ----------------------------
INSERT INTO `aulas` VALUES (4, 'A1-161', 0, 'sillitasii', 'Nivel', '1', 'Acrílica', '1', '0', '0', 0, 'Ven', '', '2');
INSERT INTO `aulas` VALUES (5, 'A1-171', 0, 'SillaXD', 'Nivel', '0', 'Acrílica', '3', '0', '0', 0, 'Ventilaasdasd', '', '2');
INSERT INTO `aulas` VALUES (6, 'A2-159', 0, 'Sillas', 'Gradas', '1', 'Acrílica', '1', '0', '1', 0, 'Aire Acondicionado,Ventilador', '', '1');
INSERT INTO `aulas` VALUES (7, 'A2-166', 0, 'Silla', 'Gradas', '1', 'Acrílica', '1', '0', '1', 0, 'Aire Acondicionado,Ventilador', '', '3');
INSERT INTO `aulas` VALUES (8, 'A2-167', 50, 'Silla', 'Gradas', '1', 'Tiza', '1', '0', '1', 2, 'Aire Acondicionado,Ventilador', '', '1');
INSERT INTO `aulas` VALUES (9, 'A2-172', 50, 'Silla', 'Nivel', '1', 'Tiza', '1', '0', '1', 2, 'Aire Acondicionado,Ventilador', '', '1');
INSERT INTO `aulas` VALUES (10, 'A2-239', 55, 'Silla', 'Nivel', '1', 'Tiza', '1', '0', '1', 2, 'Ventilador', '', '1');
INSERT INTO `aulas` VALUES (11, 'A2-242', 50, 'Silla', 'Nivel', '1', 'Tiza', '1', '0', '1', 2, 'Ventilador', '', '1');
INSERT INTO `aulas` VALUES (12, 'A2-250A', 25, 'Silla', 'Nivel', '1', 'Tiza', '1', '0', '1', 1, 'Ventilador', '', '1');
INSERT INTO `aulas` VALUES (13, 'A2-250B', 25, 'Silla', 'Nivel', '0', 'Tiza', '1', '0', '1', 1, 'Ventilador', '', '1');
INSERT INTO `aulas` VALUES (14, 'A2-252', 60, 'Silla', 'Nivel', '1', 'Tiza', '1', '0', '1', 2, 'Ventilador', '', '1');
INSERT INTO `aulas` VALUES (15, 'A2-259', 0, 'Silla', 'Nivel', '1', 'Tiza', '1', '0', '1', 0, 'Ventiladorasdsad', '', '1');
INSERT INTO `aulas` VALUES (16, 'A2-260', 50, 'Silla', 'Nivel', '1', 'Tiza', '1', '0', '1', 2, 'Ventilador', '', '1');
INSERT INTO `aulas` VALUES (17, 'A2-266', 25, 'Silla', 'Nivel', '0', 'Acrílica', '1', '0', '1', 1, 'Ventilador', '', '1');
INSERT INTO `aulas` VALUES (18, 'A2-269', 55, 'Silla', 'Nivel', '0', 'Acrílica', '1', '0', '1', 2, 'Ventilador', '', '1');
INSERT INTO `aulas` VALUES (19, 'A2-276', 60, 'Silla', 'Nivel', '0', 'Acrílica', '1', '0', '1', 2, 'Ventilador', '', '1');
INSERT INTO `aulas` VALUES (20, 'A2-280', 60, 'Silla', 'Nivel', '0', 'Acrílica', '1', '0', '1', 2, 'Ventilador', '', '1');
INSERT INTO `aulas` VALUES (21, 'A2-338', 25, 'Tablero', 'Nivel', '0', 'Tiza', '1', '0', '1', 2, 'Ventilador', '', '1');
INSERT INTO `aulas` VALUES (22, 'A2-339', 25, 'Tablero', 'Nivel', '1', 'Tiza', '1', '0', '1', 2, 'Ventilador', '', '1');
INSERT INTO `aulas` VALUES (23, 'A2-340', 50, 'Silla', 'Nivel', '0', 'Tiza', '1', '0', '1', 2, 'Ventilador', '', '1');
INSERT INTO `aulas` VALUES (24, 'A2-350A', 25, 'Silla', 'Nivel', '1', 'Tiza', '1', '0', '1', 1, 'Ventilador', 'No tiene placa de identificación', '1');
INSERT INTO `aulas` VALUES (25, 'A2-350B', 25, 'Silla', 'Nivel', '0', 'Tiza', '1', '0', '1', 1, 'Ventilador', '', '1');
INSERT INTO `aulas` VALUES (26, 'A2-359', 50, 'Silla', 'Nivel', '1', 'Tiza', '1', '0', '1', 2, 'Ventilador', '', '1');
INSERT INTO `aulas` VALUES (27, 'A2-360', 50, 'Silla', 'Nivel', '1', 'Tiza', '1', '0', '1', 2, 'Ventilador', '', '1');
INSERT INTO `aulas` VALUES (28, 'A2-366', 50, 'Silla', 'Nivel', '1', 'Tiza', '1', '0', '1', 2, 'Ventilador', '', '1');
INSERT INTO `aulas` VALUES (29, 'A2-367A', 25, 'Silla', 'Nivel', '1', 'Tiza', '1', '0', '1', 1, 'Ventilador', '', '1');
INSERT INTO `aulas` VALUES (30, 'A2-367B', 25, 'Silla', 'Nivel', '0', 'Acrílica', '1', '0', '1', 1, 'Ventilador', '', '1');
INSERT INTO `aulas` VALUES (31, 'A2-380', 35, 'PC', 'Nivel', '1', 'Acrílica', '1', '1', '1', 1, 'Aire Acondicionado', 'No tiene placa de identificación', '2');
INSERT INTO `aulas` VALUES (32, 'CCLAB-A', 15, 'PC', 'Nivel', '0', 'Acrílica', '1', '1', '1', 1, 'Ventilador', '', '2');
INSERT INTO `aulas` VALUES (33, 'CCLAB-2A', 20, 'PC', 'Nivel', '0', 'Acrílica', '1', '1', '1', 1, 'Ventilador', '', '2');
INSERT INTO `aulas` VALUES (34, 'CCLAB-3A', 15, 'PC', 'Nivel', '0', 'Acrílica', '1', '1', '1', 1, 'Ventilador', '', '2');
INSERT INTO `aulas` VALUES (35, 'CCLAB-B', 15, 'PC', 'Nivel', '0', 'Acrílica', '1', '1', '1', 1, 'Ventilador', '', '2');
INSERT INTO `aulas` VALUES (36, 'CCLAB-2B', 20, 'PC', 'Nivel', '0', 'Acrílica', '1', '1', '1', 1, 'Ventilador', '', '2');
INSERT INTO `aulas` VALUES (37, 'CCLAB-3B', 30, 'PC', 'Nivel', '0', 'Acrílica', '1', '1', '1', 1, 'Ventilador', '', '2');
INSERT INTO `aulas` VALUES (38, 'CCLAB-C', 20, 'PC', 'Nivel', '0', 'Acrílica', '1', '1', '1', 1, 'Ventilador', '', '2');
INSERT INTO `aulas` VALUES (39, 'CCLAB-2C', 20, 'PC', 'Nivel', '0', 'Acrílica', '1', '1', '1', 1, 'Ventilador', '', '2');
INSERT INTO `aulas` VALUES (40, 'CCLAB-4C', 20, 'PC', 'Nivel', '0', 'Acrílica', '1', '1', '1', 1, 'Ventilador', '17 PCs para los alumnos', '2');
INSERT INTO `aulas` VALUES (41, 'CCLAB-D', 15, 'PC', 'Nivel', '0', 'Acrílica', '1', '1', '1', 1, 'Ventilador', '', '2');
INSERT INTO `aulas` VALUES (42, 'CCLAB-E', 15, 'PC', 'Nivel', '0', 'Acrílica', '1', '1', '1', 1, 'Ventilador', '', '2');
INSERT INTO `aulas` VALUES (43, 'ISFIM', 50, 'Silla', 'Nivel', '0', 'Acrílica', '0', '1', '1', 1, 'Ninguno', 'Proyector recientemente quemado', '3');
INSERT INTO `aulas` VALUES (44, 'LAB-05', 50, 'Silla', 'Nivel', '0', 'Acrílica', '0', '1', '1', 0, 'Ninguno', 'Son varias aulas dentro del LAB-05 => 3 PCs de uso del docente, tambien lo usan los tecnicos y los alumnos', '3');
INSERT INTO `aulas` VALUES (45, 'LAB-EL1', 30, 'Silla', 'Nivel', '0', 'Acrílica', '1', '1', '1', 1, 'Ventilador', 'Solo una computadora para todos los alumnos', '3');
INSERT INTO `aulas` VALUES (46, 'LAB-EL2', 30, 'Silla', 'Nivel', '0', 'NO', '0', '0', '0', 1, 'Ninguno', '', '3');
INSERT INTO `aulas` VALUES (47, 'LAB-HID', 20, 'Silla', 'Nivel', '0', 'Acrílica', '0', '0', '0', 1, 'Ninguno', '', '3');
INSERT INTO `aulas` VALUES (48, 'LAB-IMCI', 20, 'Silla', 'Nivel', '0', 'Acrílica', '1', '0', '1', 1, 'Aire Acondicionado', '', '3');
INSERT INTO `aulas` VALUES (49, 'aulitas', 0, 'PC', 'Nivel', '0', 'Acrílica', '1', '1', '1', 0, 'Ninguno', '17 PCs para uso de los alumnos,1 para el docente.', '2');
INSERT INTO `aulas` VALUES (50, 'S4-LAB', 30, 'Silla', 'Nivel', '0', 'Acrílica', '0', '0', '0', 2, 'Ninguno', '30 silla, 10 tornos(Metrologia)', '3');
INSERT INTO `aulas` VALUES (58, 'R-LAB1', 30, 'Silla', 'Nivel', '1', 'Acrílica-Tiza', '0', '0', '0', NULL, 'Ninguno', 'Para los cursos de Física (3 ambientes)\r\n', '3');
INSERT INTO `aulas` VALUES (59, 'R-LAB2', 30, 'Silla', 'Nivel', '1', 'Acrílica-Tiza', '0', '0', '0', NULL, 'Ninguno', 'Para los cursos de Física (3 ambientes)', '3');
INSERT INTO `aulas` VALUES (60, 'R-LAB3', 30, 'Silla', 'Nivel', '1', 'Acrílica-Tiza', '0', '0', '0', NULL, 'Ninguno', 'Para los cursos de Física (3 ambientes)', '3');
INSERT INTO `aulas` VALUES (62, 'LAB-04', 15, 'Silla', 'Nivel', '0', 'Acrilíca', '0', '0', '0', 1, NULL, NULL, '3');
INSERT INTO `aulas` VALUES (63, 'A2-242', 0, 'Silla', 'Nivel', '1', 'Tiza', '1', '0', '1', 0, 'Ventilador', '', '1');
INSERT INTO `aulas` VALUES (93, 'asdasdasda', 0, '', '', '', '', '', '', '', 0, '', '', '');

-- ----------------------------
-- Procedure structure for sp_pocede
-- ----------------------------
DROP PROCEDURE IF EXISTS `sp_pocede`;
delimiter ;;
CREATE PROCEDURE `sp_pocede`(aulap varchar(10), capacidadp int, tipsillap varchar(10), tipentradap varchar(10), taburetep char(1), pizarrap varchar(20), proyectorp char(1), pcalumnop char(1),pcdocentep char(1),_canpuertas int,equventilacionp varchar(50),observacionp text,estadop char(1), idp int)
begin
DECLARE nyoquese int;
SET nyoquese=(select COUNT(*) from aulas where id = idp);

if(nyoquese=1) then 
	update aulas set aula=aulap, capacidad=capacidadp, tipSilla=tipsillap, tipEntrada=tipentradap,taburete=taburetep,pizarra=pizarrap,proyector=proyectorp,pcAlumno=pcalumnop,pcDocente=pcdocentep,canPuertas=_canpuertas,		equVentilacion=equventilacionp,observacion=observacionp,estado=estadop where id=idp;
			SELECT  'actualizado' as id;
	else
		insert into aulas values(null,aulap, capacidadp, tipsillap, tipentradap, taburetep , pizarrap, proyectorp, pcalumnop,pcdocentep,_canpuertas,equventilacionp,observacionp,estadop);
		SELECT  id FROM aulas ORDER BY id DESC limit 1;
	END IF;
end
;;
delimiter ;

SET FOREIGN_KEY_CHECKS = 1;
