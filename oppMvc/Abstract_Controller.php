<?php

class AbstractController{

    function renderTemplate($dictionary,$template){
        foreach ($dictionary as $key=>$value) {
            switch($key){
                case 'data_table':
                    $table=$this->getDataTable($template);
                    $table_rendered=$this->renderTable($table,$value);
                    $template=str_replace('{data_table_init}','',$template);
                    $template=str_replace('{data_table_end}','',$template);   
                    $template=str_replace($table,$table_rendered,$template);
                    break;
                default:
                    $template = str_replace('{'.$key.'}', $value, $template);
                    break;
            }
            
        };
        echo $template;
    }

    function getDataTable($template){
        $data_table_cutleft_array=explode('{data_table_init}',$template);
        $data_table_cutleft=end($data_table_cutleft_array);
        $data_table__cutright=explode('{data_table_end}',$data_table_cutleft);
        return $data_table__cutright[0];
    }

    function renderTable($table,$table_rows){
        $table_rendered='';
        foreach ($table_rows as $row) {
            $table_aux=$table;
            foreach ($row as $clave=>$valor) {
                $table_aux = str_replace('{'.$clave.'}', $valor, $table_aux);
            }
            $table_rendered.=$table_aux;
        };
        return $table_rendered;
    }
}
?>