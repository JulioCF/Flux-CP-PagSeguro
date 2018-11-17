<?php
/* 
 [=======================================================]
 [===========                                 ===========]
 [          =   +-+-+-+-+-+-+ +-+-+-+-+-+-+   =          ]
 [          =   |L|i|l|i|u|m| |S|a|n|c|t|a|   =          ]
 [          =   +-+-+-+-+-+-+ +-+-+-+-+-+-+   =          ]
 [          =         +-+-+-+-+-+-+-+         =          ]
 [          =         |S|c|r|i|p|t|s|         =          ]
 [          =         +-+-+-+-+-+-+-+         =          ]
 [===========                                 ===========]
 [=======================================================]
 [      Integra��o API PagSeguro Vers�o atual 1.4        ]
 [=======================================================]
 [                      Changelog:                       ]
 [1.0 Addon Criado.                                      ]
 [1.2 Corre��o em erro de portugu�s e rate.              ]
 [1.4 Inseridas novas configura��es.                     ]
 [-------------------------------------------------------]
 [     N�O REDISTRIBUA MEU TRABALHO SEM AUTORIZA��O      ]
 [=======================================================]
 [                       Suporte:                        ]
 [                                                       ]
 [ Qualquer erro encontrado pode ser reportado a mim em  ]
 [ meu email pessoal inu-kai@limao.com.br ou diretamente ]
 [ no t�pico referente no brAthena.                      ]
 [ OBS: Apenas usu�rios que tiverem adquirido o sistema  ]
 [ no brAthena receber�o suporte.                        ]
 [=======================================================]
 [ http://www.brathena.org/forum/index.php?showuser=124  ]
 [=======================================================]
*/

return array(
	'modules' => array(
		'doa' => array(
            'index' 	   => AccountLevel::NORMAL,
            'history'	   => AccountLevel::NORMAL,
			'return'       => AccountLevel::NORMAL,
			'notification' => AccountLevel::ANYONE,
			'process'      => AccountLevel::NORMAL,
		),
	),
	
	'modules' => array(
		'cplog' => array(
            'donatelog' 	=> AccountLevel::ADMIN,
            'donateview' 	=> AccountLevel::ADMIN,
		),
	),
)
?>