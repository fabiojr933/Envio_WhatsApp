<?php

namespace app\controllers;

use app\core\Controller;
use app\crud\service\ClienteService;
use CnabPHP\Retorno;
use SimpleXLS;

class ClienteController extends Controller
{
    public function index()
    {
        $dados["view"]       = "Retorno/novo";
        $this->load("template", $dados);
    }
    public function novo()
    {
        $dados["view"]       = "Cliente/novo";
        $this->load("template", $dados);
    }
    public function Cliente()
    {
        $_UP['pasta'] = 'cliente/';
        $nome_final = $_FILES['arquivo']['name'];

        if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'] . $nome_final)) {
        } else {
            echo "Não foi possível enviar o arquivo, tente novamente";
        }

        $mensagem = "essa é  uma mensagem";
        if ($xls = SimpleXLS::parseFile($_UP['pasta'] . $nome_final)) {
            $resultado =  $xls->rows();
            


            $url =  'https://zaap-api.fourpixel.services/instances/39A041C764AE50BBC6BD564F1B9AFD7D/token/8687B1146A7B70625CC5C4B4/send-messages';
            $ch = curl_init($url);
      
     /*       $data = array(
                'phone' => ' 5566984218320',
                'message' => 'Essa mensagem é um teste'
            );    */
          


         $data = array();

            foreach ($resultado as $value) {
                $data = array(
                    'phone' => $value[2],
                    'message' => $value[3]
                    
                ); 
                $body = json_encode($data);
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_VERBOSE, true);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_AUTOREFERER, false);
                curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
                curl_setopt($ch, CURLOPT_HEADER, 0);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json; charset=utf-8'));
                curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
    
                $result = curl_exec($ch);
                echo $result;
                
                $dados["cliente"] = $resultado;
            }    
            curl_close($ch);               

           

        //    $dados["view"]   =   "Cliente/enviar";
        //    $this->load("template", $dados);
        } else {
            echo SimpleXLS::parseError();
        }
    }
    public function envio($cliente)
    {
        $id_instacia = "39A041C764AE50BBC6BD564F1B9AFD7D";
        $token = "8687B1146A7B70625CC5C4B4";

        $url = "https://api.z-api.io/instances/39A041C764AE50BBC6BD564F1B9AFD7D/token/8687B1146A7B70625CC5C4B4/send-messages";
        $ch = curl_init($url);

        $data = array(
            'phone' => '554499999999',
            'message' => 'Digite uma mensagem'
        );

        $body = json_encode($data);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_VERBOSE, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_AUTOREFERER, false);
        curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json; charset=utf-8'));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $body);

        $result = curl_exec($ch);

        curl_close($ch);
    }
}
