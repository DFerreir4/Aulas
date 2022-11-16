<?php

$hierarquia = array(
    array(
        'nome_cargo' => 'CEO',
        'subordinados' =>array(
        //inicio:diretor comercial
            array(
                    'nome_cargo' => 'Diretor comercial',
                    'subordinados' =>array(
                        array(
                        'nome_cargo' => 'Gerente de vendas'
                            )
                                            )
                ),
                    //termino diretor comercial
                    //inicio diretor financeiro
            array(
                    'nome_cargo' => 'Diretor Financeiro',
                    'subordinados' =>array(
                                            //inicio de gerente de contas a pagar
                                            array(
                                                    'nome_cargo' => 'Gerente de Contas a pagar',
                                                    'subordinados' => array(
                                                    //inicio supervisor de pagamentos
                                                                            'nome_cargo' => 'Supervisor de pagamentos'

                                                                            //termino supervisor de pagamentos
                                                                            )
                                                )
                                        )
                ),
                           //termino de gerente contas a pagar
                           //inicio gerente de compras
                           array(
                            'nome_cargo' =>'Gerente de compras',
                            'subordinados' => array(
                                //inicio supervisor de suprimentos
                                array(
                                    'nome_cargo'=>'Supervisor de suprimentos'
                                )
                                //fim supervisor de suprimentos
                            )

                           )
                           //termino gerente de compras
                        )
                    )
        );
     /*   echo "<pre>";
       print_r($hierarquia);
        echo "</pre>"; */

        function exibe($cargos){
            $html = '<ul>';

            foreach($cargos as $cargo){

                $html .= '<li>';
                $html .= $cargo['nome_cargo'];
  

             if(isset($cargo['subordinados']) && count($cargo['subordinados'])>0){
                $html .= exibe($cargo['subordinados']);

                         }  

              
                    $html .='</li>';

            

                }
                
                $html .= '</ul>';
         
            
                return $html;
         
            }

       
echo exibe($hierarquia);
        



?>