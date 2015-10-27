<?php
require_once("autoload.php");

use MAND\Cliente\Types\ClientePf;
use MAND\Cliente\Types\ClientePj;


$objCliente0 = new ClientePf();
$objCliente0->setId(0)
            ->setNome('Rafaela Cavalcanti Ferreira')
            ->setEmail('rafa_c_ferreira@gmail.com')
            ->setNumDocumento('022.320.168-54')
            ->setTelefone('(65) 6977-5350')
            ->setEndereco('Rua Bianco Filho, 1014')
            ->setImportancia(1);
$objCliente1 = new ClientePf();
$objCliente1->setId(1)
            ->setNome('Fernando Daniel Ribeiro')
            ->setEmail('fdribeiro@gmail.com')
            ->setNumDocumento('303.171.601-92')
            ->setTelefone('(38) 4301-5610')
            ->setEndereco('Travessa Martins Teixeira, 865')
            ->setImportancia(5)
            ->setEndCobranca('Rua Itajuba, 865');
$objCliente2 = new ClientePf();
$objCliente2->setId(2)
            ->setNome('Nicole Rocha Sousa')
            ->setEmail('nrs@gmail.com')
            ->setNumDocumento('228.138.974-00')
            ->setTelefone('(62) 8361-5004')
            ->setEndereco('Rua das Oliveiras, 1094')
            ->setImportancia(4);
$objCliente3 = new ClientePf();
$objCliente3->setId(3)
            ->setNome('Júlia Costa Pinto')
            ->setEmail('juliacosta@gmail.com')
            ->setNumDocumento('222.534.818-90')
            ->setTelefone('(81) 9944-8781')
            ->setEndereco('Avenida Fator, 456')
            ->setImportancia(3);
$objCliente4 = new ClientePf();
$objCliente4->setId(4)
            ->setNome('Alex Rocha Barros')
            ->setEmail('alexrb@gmail.com')
            ->setNumDocumento('671.381.022-59')
            ->setTelefone('(91) 7167-6031')
            ->setEndereco('Alameda N, 1799')
            ->setImportancia(2)
            ->setEndCobranca('Av. Getúlio Vargas, 1258');

$objCliente5 = new ClientePj();
$objCliente5->setId(5)
            ->setNome('José Almeida Santos')
            ->setEmail('josesantos@gmail.com')
            ->setNumDocumento('46.661.348/0001-20')
            ->setTelefone('(11) 8927-2070')
            ->setEndereco('Rua Paraibuna, 425')
            ->setImportancia(1);
$objCliente6 = new ClientePj();
$objCliente6->setId(6)
            ->setNome('Maria Carvalho Cunha')
            ->setEmail('mariacunha@gmail.com')
            ->setNumDocumento('81.787.233/0001-88')
            ->setTelefone('(21) 3808-4841')
            ->setEndereco('Rua Reinaldo Lópes, 299')
            ->setImportancia(2);
$objCliente7 = new ClientePj();
$objCliente7->setId(7)
            ->setNome('Fernanda Ribeiro Pinto')
            ->setEmail('feripi@gmail.com')
            ->setNumDocumento('58.535.658/0001-88')
            ->setTelefone('(46) 4233-3405')
            ->setEndereco('Rua das Hortênsias, 773')
            ->setImportancia(3);
$objCliente8 = new ClientePj();
$objCliente8->setId(8)
            ->setNome('Nicolas Goncalves Cavalcanti')
            ->setEmail('gonca@gmail.com')
            ->setNumDocumento('79.248.583/0001-24')
            ->setTelefone('(43) 3098-5985')
            ->setEndereco('Rua Anu, 1258')
            ->setImportancia(4)
            ->setEndCobranca('Av. Silva Jardim, 773');
$objCliente9 = new ClientePj();
$objCliente9->setId(9)
            ->setNome('Thiago Pereira Cardoso')
            ->setEmail('cardoso@gmail.com')
            ->setNumDocumento('38.155.240/0001-38')
            ->setTelefone('(11) 5948-6115')
            ->setEndereco('Praça Ministro Salgado Filho, 1997')
            ->setImportancia(5)
            ->setEndCobranca('Rua Fernando Simas, 299');

$arrObjetos = array(0 => $objCliente0, 1 => $objCliente1, 2 => $objCliente2, 3 => $objCliente3, 4 => $objCliente4, 5 => $objCliente5, 6 => $objCliente6, 7 => $objCliente7, 8 => $objCliente8, 9 => $objCliente9);