<?php
require('configs/include.php');

class c_realizar_diseno extends super_controller{
    
    public function add(){
        $diseno = new diseno($this->post);
        $this->orm->connect();
        $this->orm->insert_data("normal",$diseno);
        $this->orm->close();

        //print_r2($diseno);
    }

    public function display(){ 
        $options['dispositivo']['lvl2']='all';
        $this->orm->connect();
        $this->orm->read_data(array("dispositivo"),$options);
        $dispositivo = $this->orm->get_objects("dispositivo");
        $this->engine->assign('dispositivo',$dispositivo);   
        
        $this->engine->display('realizar_diseno.tpl');
        $this->orm->close();
    }
    
    public function run(){
        try{
            if(!isset($this->session['id'])){
                header('Location: login.php');
            }else{
                if($this->session['tipo2']=="ingeniero de hardware" || this->session['tipo1']=="disenador grafico"){
                    if (isset($this->get->option)){$this->{$this->get->option}();}
                }else{
                    header($this->session['header']);
                }
            }
        }catch(Exception $e){
            $this->error=1;
            $this->type_warning="error";
            $this->msg_warning=$e->getMessage();
            $this->temp_aux = 'message.tpl';
            $this->engine->assign('type_warning',  $this->type_warning);
            $this->engine->assign('msg_warning',  $this->msg_warning);
        }
        $this->display();
    }
}

$call = new c_realizar_diseno();
$call->run();
?>