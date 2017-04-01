<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Version details
 *
 * @package    theme_caixa
 * @copyright 2015 Jeremy Hopkins (Coventry University)
 * @copyright 2015 Fernando Acedo (3-bits.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 */

//DESENVOLVIMENTO DIGITAL GROUP


    // SECTION PARA AJUSTE DE CATEGORIAS
    $temp = new admin_settingpage('theme_caixa_categories', 'Ajustes categorias');


    //IMAGEM DE CAPA DA PÁGINA CATEGORIAS E CATEGORIA
    $temp->add(new admin_setting_heading('theme_caixa_capa_categories',
                                         'Imagem de capa - Página categorias e categoria',
                                         format_text('Configurações da imagem de capa na listagem de categorias', FORMAT_MARKDOWN)));

    //IMAGEM DE CAPA
    $name = 'theme_caixa/imgcapacategoria';
    $title = 'Imagem de capa';
    $description = 'Sugestão de tamanho largura mínima - 900px';
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'imgcapacategoria');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);



    //AJUSTES DO BLOCO CATEGORIAS - PAGINA INICIAL
    $temp->add(new admin_setting_heading('theme_caixa_frontpage_categories',
                                         'Bloco categorias - Página Inicial',
                                         format_text('Configurações do bloco de categorias página inicial', FORMAT_MARKDOWN)));
    $categorias = $DB->get_records('course_categories', array('visible'=>'1'));
    foreach ($categorias as $categoria) {

        $temp->add(new admin_setting_heading('theme_caixa_frontpage_categories_'.$categoria->id,
                                             $categoria->name,
                                             format_text('', FORMAT_MARKDOWN)));

        //CHECKBOX PARA EXIBIR NA PÁGINA INICIAL    
        $name = 'theme_caixa/checkcat_'.$categoria->id;
        $title = 'Mostrar na página inicial?';
        $description = '';
        $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
        $temp->add($setting);

        //TITULO 
        $name = 'theme_caixa/titlecat_'.$categoria->id;
        $title = 'Titulo';
        $description = "";
        $setting = new admin_setting_configtext($name, $title, $description, $categoria->name);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $temp->add($setting);

        //ICONE
        $name = 'theme_caixa/iconecat_'.$categoria->id;
        $title = 'Ícone';
        $description = '92px x 92px';
        $setting = new admin_setting_configstoredfile($name, $title, $description, 'iconecat_'.$categoria->id);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $temp->add($setting);

    }

    $ADMIN->add('theme_caixa', $temp);
