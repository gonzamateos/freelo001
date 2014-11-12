<?php
/*
 * Copyright 2010 Sean Proctor
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

if ( !defined('IN_PHPC') ) {
       die("Hacking attempt");
}

$month_names = array(
                1 => __('Enero'),
                __('Febrero'),
                __('Marzo'),
                __('Abril'),
                __('Mayo'),
                __('Junio'),
                __('Julio'),
                __('Agosto'),
                __('Septiembre'),
                __('Octubre'),
                __('Noviembre'),
                __('Diciembre'),
                );

$day_names = array(
                __('Domingo'),
		__('Lunes'),
		__('Martes'),
		__('Miércoles'),
		__('Jueves'),
		__('Viernes'),
		__('Sábado'),
                );

$short_month_names = array(
		1 => __('Ene'),
		__('Feb'),
		__('Mar'),
		__('Abr'),
		__('May'),
		__('Jun'),
		__('Jul'),
		__('Ago'),
		__('Sep'),
		__('Oct'),
		__('Nov'),
		__('Dic'),
                );

// config stuff
define('PHPC_CHECK', 1);
define('PHPC_TEXT', 2);
define('PHPC_DROPDOWN', 3);
define('PHPC_MULTI_DROPDOWN', 4);

$sort_options = array(
                'start_date' => __('Fecha de Inicio'),
                'subject' => __('Asunto')
                );

$order_options = array(
                'ASC' => __('Ascendente'),
                'DESC' => __('Descendente')
                );

?>
