<?php

require ('configs/include.php');

class c_realizar_calificacion extends super_controller {

    public function calificar() {
        $cal = $this->post->calificacion;
        $ide = $this->post->idea;
        $calificacion = new calificacion();
        $calificacion->set('idea', $ide);
        $calificacion->set('valor', $cal);
        if ($cal == NULL) {
            throw_exception("Ingrese una calificacion");
        } elseif ($ide == "Seleccione idea") {
            throw_exception("Seleccione una idea");
        } else {
            $code['idea']['nombre'] = $ide;
            $options['idea']['lvl2'] = "one";
            $this->orm->connect();
            $this->orm->read_data(array("idea"), $options, $code);
            $ideas = $this->orm->get_objects("idea");
            if ($ideas[0]->get('miembro') == $this->session['id']) {
                throw_exception("Usted propuso esta idea, por lo tanto no debería calificarla");
            } else {
                $calificacion->set('miembro', $this->session['id']);
            }
            $this->orm->insert_data("normal", $calificacion);
            $this->orm->close();

            $this->type_warning = "success";
            $this->msg_warning = "Idea Calificada correctamente";

            $this->temp_aux = 'message.tpl';
            $this->engine->assign('type_warning', $this->type_warning);
            $this->engine->assign('msg_warning', $this->msg_warning);
        }
    }

    public function display() {
        $this->engine->assign('title', 'Realizar calificacion');
        $this->engine->display($this->temp_aux);
        $this->engine->display('cu3-calificaridea.tpl');
    }

    public function run() {
        try {
            if (!isset($this->session['id'])) {
                header('Location: login.php');
            } else {
                if ($this->session['tipo1'] == "miembro") {
                    if (isset($this->get->option)) {
                        $this->{$this->get->option}();
                    }

                    $options['idea']['lvl2'] = "reunion";
                    $this->orm->connect();
                    $this->orm->read_data(array("idea"), $options);
                    $idea = $this->orm->get_objects("idea");
                    $this->orm->close();

                    if (is_empty($idea)) {
                        $this->type_warning = "warning";
                        throw_exception("No existen reuniones para hoy");
                    }
                    $this->engine->assign('idea', $idea);
                } else {
                    header($this->session['header']);
                }
            }
        } catch (Exception $e) {
            $this->error = 1;
            $this->msg_warning = $e->getMessage();
            $this->engine->assign('type_warning', $this->type_warning);
            $this->engine->assign('msg_warning', $this->msg_warning);
            $this->temp_aux = 'message.tpl';
        }
        $this->display();
    }

}

$call = new c_realizar_calificacion();
$call->run();
?>