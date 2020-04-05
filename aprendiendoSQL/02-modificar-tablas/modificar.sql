/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  andres
 * Created: 30-mar-2020
 */

ALTER TABLE usuarios RENAME TO usuarios_renom;

ALTER TABLE usuarios_renom CHANGE apellidos apellido varchar(100) null;

ALTER TABLE usuarios_renom MODIFY 