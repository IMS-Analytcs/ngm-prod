<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PartNumbers;

class PartnumberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

      
PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-I-VSAN',
            'sow' => 'Instalação e configuração de um cluster vSAN (até 5 hosts)',
            'status' => 1,
            'hora_analista' => 32,
            'analistaJunior' => 0,
            'analistaPleno' => 10,
            'analistaSenior' => 60,
            'analistaMaster' => 30,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 186,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 9,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-I-VDI-ASSMNT',
            'sow' => 'Desktop Virtualization Strategy Assessment',
            'status' => 1,
            'hora_analista' => 16,
            'analistaJunior' => 0,
            'analistaPleno' => 20,
            'analistaSenior' => 60,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 189,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 4,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-HC-EUC',
            'sow' => 'EUC Health Check',
            'status' => 1,
            'hora_analista' => 24,
            'analistaJunior' => 0,
            'analistaPleno' => 30,
            'analistaSenior' => 50,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 189,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 7,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-ORCL-I-TAPE',
            'sow' => 'StorageTek Tape Libraries',
            'status' => 1,
            'hora_analista' => 22,
            'analistaJunior' => 0,
            'analistaPleno' => 60,
            'analistaSenior' => 30,
            'analistaMaster' => 10,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 176,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 6,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-MSFT-I-WINSERVER',
            'sow' => 'Implementação do sistema operacional Microsoft Windows Server',
            'status' => 1,
            'hora_analista' => 8,
            'analistaJunior' => 0,
            'analistaPleno' => 60,
            'analistaSenior' => 30,
            'analistaMaster' => 10,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 84,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 2,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-MSFT-I-RDS-LIC',
            'sow' => 'Implementação do RD Licensing Server',
            'status' => 1,
            'hora_analista' => 8,
            'analistaJunior' => 0,
            'analistaPleno' => 20,
            'analistaSenior' => 60,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 84,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 2,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-VXRAIL160',
            'sow' => 'Instalação e configuração de EMC VXRAIL QuickStart',
            'status' => 1,
            'hora_analista' => 64,
            'analistaJunior' => 0,
            'analistaPleno' => 10,
            'analistaSenior' => 60,
            'analistaMaster' => 30,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 173,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 19,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VEEAM-I-BKPSRV',
            'sow' => 'Instalação e configuração VEEAM BACKUP SERVER',
            'status' => 1,
            'hora_analista' => 40,
            'analistaJunior' => 0,
            'analistaPleno' => 20,
            'analistaSenior' => 60,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 110,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 12,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-ITPS-CUSTOM',
            'sow' => 'Serviço customizado ITPS',
            'status' => 1,
            'hora_analista' => 0,
            'analistaJunior' => 0,
            'analistaPleno' => 90,
            'analistaSenior' => 0,
            'analistaMaster' => 10,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 194,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VEEAM-I-RPL',
            'sow' => 'Instalação e configuração VEEAM REPLICATION',
            'status' => 1,
            'hora_analista' => 16,
            'analistaJunior' => 0,
            'analistaPleno' => 40,
            'analistaSenior' => 40,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 110,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 4,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VEEAM-I-PRX',
            'sow' => 'Instalação e configuração de proxy adicional para o VEEAM BACKUP',
            'status' => 1,
            'hora_analista' => 8,
            'analistaJunior' => 0,
            'analistaPleno' => 50,
            'analistaSenior' => 30,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 110,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 2,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VEEAM-I-REPO',
            'sow' => 'Instalação e configuração de repositório adicional para o VEEAM BACKUP',
            'status' => 1,
            'hora_analista' => 6,
            'analistaJunior' => 0,
            'analistaPleno' => 10,
            'analistaSenior' => 60,
            'analistaMaster' => 30,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 110,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 1,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-I-NSX-LB',
            'sow' => 'Implementação do NSX Load Balancer',
            'status' => 1,
            'hora_analista' => 50,
            'analistaJunior' => 0,
            'analistaPleno' => 10,
            'analistaSenior' => 60,
            'analistaMaster' => 30,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 188,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 15,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VEEAM-I-CLOUD',
            'sow' => 'Configuração de repositório de nuvem pública para o VEEAM BACKUP',
            'status' => 1,
            'hora_analista' => 8,
            'analistaJunior' => 0,
            'analistaPleno' => 20,
            'analistaSenior' => 60,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 110,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 2,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VEEAM-I-WAC',
            'sow' => 'Configuração de Acelerador WAN para o VEEAM BACKUP',
            'status' => 1,
            'hora_analista' => 12,
            'analistaJunior' => 0,
            'analistaPleno' => 20,
            'analistaSenior' => 60,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 110,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 3,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-MSFT-I-RDS-UPD',
            'sow' => 'Implementação do User Profile Disk (Até 300 usuários)',
            'status' => 1,
            'hora_analista' => 8,
            'analistaJunior' => 0,
            'analistaPleno' => 30,
            'analistaSenior' => 50,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 84,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 2,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VEEAM-I-ONE',
            'sow' => 'Instalação e configuração do VEEAM One',
            'status' => 1,
            'hora_analista' => 32,
            'analistaJunior' => 0,
            'analistaPleno' => 20,
            'analistaSenior' => 60,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 191,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 9,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VEEAM-I-MS',
            'sow' => 'Instalação de agente Veeam para backup de servidor físico de aplicação (SQL, Sharepoint ou Exchange)',
            'status' => 1,
            'hora_analista' => 2,
            'analistaJunior' => 0,
            'analistaPleno' => 30,
            'analistaSenior' => 50,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 110,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-MSFT-U-SQLSERVER',
            'sow' => 'Atualização e Migração de Versão do SQL',
            'status' => 1,
            'hora_analista' => 0,
            'analistaJunior' => 0,
            'analistaPleno' => 40,
            'analistaSenior' => 40,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 194,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-MSFT-U-AD1',
            'sow' => 'Restruturação Active Directory',
            'status' => 1,
            'hora_analista' => 0,
            'analistaJunior' => 0,
            'analistaPleno' => 40,
            'analistaSenior' => 40,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 84,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-ORCL-M-PUMP',
            'sow' => 'Migração  1TB bases utilizando o Data Pump',
            'status' => 1,
            'hora_analista' => 0,
            'analistaJunior' => 0,
            'analistaPleno' => 0,
            'analistaSenior' => 60,
            'analistaMaster' => 40,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 120,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-ORCL-I-BKP',
            'sow' => 'Instalação/ Configuração de Backup RMAN',
            'status' => 1,
            'hora_analista' => 8,
            'analistaJunior' => 0,
            'analistaPleno' => 0,
            'analistaSenior' => 60,
            'analistaMaster' => 40,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 120,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 2,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-ORCL-I-TAPEDRIVE',
            'sow' => 'Instalação de Drive Adicional StorageTek Libraries',
            'status' => 1,
            'hora_analista' => 1,
            'analistaJunior' => 0,
            'analistaPleno' => 60,
            'analistaSenior' => 30,
            'analistaMaster' => 10,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 176,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-IT-M-MOVING',
            'sow' => 'Moving Físico de Equipamentos',
            'status' => 1,
            'hora_analista' => 0,
            'analistaJunior' => 0,
            'analistaPleno' => 0,
            'analistaSenior' => 60,
            'analistaMaster' => 40,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 102,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-PAL-I-PANO',
            'sow' => 'Instalação e configuração Panorama',
            'status' => 1,
            'hora_analista' => 4,
            'analistaJunior' => 0,
            'analistaPleno' => 0,
            'analistaSenior' => 60,
            'analistaMaster' => 40,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 104,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 1,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-MS-CUSTOM',
            'sow' => 'Serviço Customizado Microsoft',
            'status' => 1,
            'hora_analista' => 0,
            'analistaJunior' => 0,
            'analistaPleno' => 60,
            'analistaSenior' => 30,
            'analistaMaster' => 10,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 193,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-PURE-I-FA',
            'sow' => 'Instalação e Configuração do Pure Flash Array',
            'status' => 1,
            'hora_analista' => 32,
            'analistaJunior' => 0,
            'analistaPleno' => 10,
            'analistaSenior' => 60,
            'analistaMaster' => 30,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 129,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 9,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-MD',
            'sow' => 'Instalação e configuração do sistema de armazenamento PowerVault MDXXXX',
            'status' => 1,
            'hora_analista' => 16,
            'analistaJunior' => 0,
            'analistaPleno' => 30,
            'analistaSenior' => 50,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 4,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-SC',
            'sow' => 'Instalação e configuração do sistema de armazenamento Compellent SCXXXX',
            'status' => 1,
            'hora_analista' => 16,
            'analistaJunior' => 0,
            'analistaPleno' => 10,
            'analistaSenior' => 60,
            'analistaMaster' => 30,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 4,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-C-CONEX-HOST',
            'sow' => 'Conexão de 1 (um) host ao sistema armazenamento - incluso homologação/configuração',
            'status' => 1,
            'hora_analista' => 6,
            'analistaJunior' => 0,
            'analistaPleno' => 90,
            'analistaSenior' => 0,
            'analistaMaster' => 10,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 1,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-M100E',
            'sow' => 'Instalação física da enclosure M1000e',
            'status' => 1,
            'hora_analista' => 4,
            'analistaJunior' => 0,
            'analistaPleno' => 60,
            'analistaSenior' => 30,
            'analistaMaster' => 10,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 172,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 1,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-BLD-SWFC',
            'sow' => 'Instalação Switch FC Blade',
            'status' => 1,
            'hora_analista' => 4,
            'analistaJunior' => 0,
            'analistaPleno' => 40,
            'analistaSenior' => 40,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 135,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 1,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-BLD-SWETHMXL',
            'sow' => 'Instalação  Switch Converged Network Solution - Blade MXL',
            'status' => 1,
            'hora_analista' => 12,
            'analistaJunior' => 0,
            'analistaPleno' => 20,
            'analistaSenior' => 60,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 136,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 3,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-SRV-M',
            'sow' => 'Instalação física de 1 servidor Dell da linha M',
            'status' => 1,
            'hora_analista' => 2,
            'analistaJunior' => 0,
            'analistaPleno' => 60,
            'analistaSenior' => 30,
            'analistaMaster' => 10,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 172,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-U-SRV-MEM',
            'sow' => 'Upgrade de Memória Servidor Dell',
            'status' => 1,
            'hora_analista' => 4,
            'analistaJunior' => 0,
            'analistaPleno' => 50,
            'analistaSenior' => 30,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 172,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 1,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-U-SRV-DISCO',
            'sow' => 'Upgrade de até 6 (seis) Discos em Servidor Dell',
            'status' => 1,
            'hora_analista' => 2,
            'analistaJunior' => 0,
            'analistaPleno' => 60,
            'analistaSenior' => 30,
            'analistaMaster' => 10,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 172,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-SRV-R',
            'sow' => 'Instalação física de 1 servidor Dell da linha R',
            'status' => 1,
            'hora_analista' => 2,
            'analistaJunior' => 0,
            'analistaPleno' => 90,
            'analistaSenior' => 0,
            'analistaMaster' => 10,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 172,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-SRV-T',
            'sow' => 'Instalação física de 1 servidor Dell da linha T',
            'status' => 1,
            'hora_analista' => 2,
            'analistaJunior' => 0,
            'analistaPleno' => 90,
            'analistaSenior' => 0,
            'analistaMaster' => 10,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 172,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-U-SRV-FIRMHBA',
            'sow' => 'Atualização de firmware de HBA',
            'status' => 1,
            'hora_analista' => 2,
            'analistaJunior' => 0,
            'analistaPleno' => 60,
            'analistaSenior' => 30,
            'analistaMaster' => 10,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 172,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-U-MEM',
            'sow' => 'Upgrade de memória RAM em servidor físico',
            'status' => 1,
            'hora_analista' => 2,
            'analistaJunior' => 0,
            'analistaPleno' => 90,
            'analistaSenior' => 0,
            'analistaMaster' => 10,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 172,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-U-HBA',
            'sow' => 'Upgrade de placa de rede ethernet ou HBA em servidor fï¿½sico',
            'status' => 1,
            'hora_analista' => 2,
            'analistaJunior' => 0,
            'analistaPleno' => 90,
            'analistaSenior' => 0,
            'analistaMaster' => 10,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 172,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-RACK',
            'sow' => 'Instalação física de 1 rack Dell 42U',
            'status' => 1,
            'hora_analista' => 3,
            'analistaJunior' => 0,
            'analistaPleno' => 90,
            'analistaSenior' => 0,
            'analistaMaster' => 10,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 172,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-TAPE',
            'sow' => 'Instalação física de 1 tape library TLXXXX',
            'status' => 1,
            'hora_analista' => 2,
            'analistaJunior' => 0,
            'analistaPleno' => 50,
            'analistaSenior' => 30,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 171,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-TAPESB',
            'sow' => 'Integração de uma 1 Tape Library XXXX com Software de Backup',
            'status' => 1,
            'hora_analista' => 4,
            'analistaJunior' => 0,
            'analistaPleno' => 50,
            'analistaSenior' => 30,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 171,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 1,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-VRTX',
            'sow' => 'Instalação e configuração do DELL VRTX',
            'status' => 1,
            'hora_analista' => 8,
            'analistaJunior' => 0,
            'analistaPleno' => 30,
            'analistaSenior' => 50,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 172,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 2,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-HMNG',
            'sow' => 'Instalação e configuração da controladora Hive Manager (Aerohive)',
            'status' => 1,
            'hora_analista' => 20,
            'analistaJunior' => 0,
            'analistaPleno' => 20,
            'analistaSenior' => 60,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 142,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 6,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-OPMSASS',
            'sow' => 'Instalação e configuração do Dell Open Manager e Support Assist',
            'status' => 1,
            'hora_analista' => 40,
            'analistaJunior' => 0,
            'analistaPleno' => 30,
            'analistaSenior' => 50,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 172,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 12,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-SRM',
            'sow' => 'Instalação e Configuração Dell EMC Storage Resource Manager(SRM)',
            'status' => 1,
            'hora_analista' => 56,
            'analistaJunior' => 0,
            'analistaPleno' => 10,
            'analistaSenior' => 60,
            'analistaMaster' => 30,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 16,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-SRMUNITY',
            'sow' => 'Adição de 1 Unity no Dell EMC Storage Resource Manager(SRM)',
            'status' => 1,
            'hora_analista' => 4,
            'analistaJunior' => 0,
            'analistaPleno' => 10,
            'analistaSenior' => 60,
            'analistaMaster' => 30,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 1,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-VXNO',
            'sow' => 'Instalação e Configuração de 1 Nó adicional VxRail',
            'status' => 1,
            'hora_analista' => 11,
            'analistaJunior' => 0,
            'analistaPleno' => 10,
            'analistaSenior' => 60,
            'analistaMaster' => 30,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 173,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 3,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-VXSW',
            'sow' => 'Instalação e Configuração Switch VXRail',
            'status' => 1,
            'hora_analista' => 4,
            'analistaJunior' => 0,
            'analistaPleno' => 10,
            'analistaSenior' => 60,
            'analistaMaster' => 30,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 173,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 1,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-U-VXRAIL',
            'sow' => 'Upgrade de Cluster VxRail',
            'status' => 1,
            'hora_analista' => 0,
            'analistaJunior' => 0,
            'analistaPleno' => 0,
            'analistaSenior' => 60,
            'analistaMaster' => 40,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 173,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-HC-VNX-BLCK',
            'sow' => 'VNX Block Health Check',
            'status' => 1,
            'hora_analista' => 16,
            'analistaJunior' => 0,
            'analistaPleno' => 10,
            'analistaSenior' => 60,
            'analistaMaster' => 30,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 4,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-HC-VNX-UNI',
            'sow' => 'VNX Unified Health Check',
            'status' => 1,
            'hora_analista' => 16,
            'analistaJunior' => 0,
            'analistaPleno' => 10,
            'analistaSenior' => 60,
            'analistaMaster' => 30,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 4,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-VNX-BLCK',
            'sow' => 'Instalação e configuração EMC VNX Block Storage QuickStart',
            'status' => 1,
            'hora_analista' => 24,
            'analistaJunior' => 0,
            'analistaPleno' => 10,
            'analistaSenior' => 60,
            'analistaMaster' => 30,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 7,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-VNX-UNI',
            'sow' => 'Instalação e configuração EMC VNX Unified Storage QuickStart',
            'status' => 1,
            'hora_analista' => 32,
            'analistaJunior' => 0,
            'analistaPleno' => 0,
            'analistaSenior' => 60,
            'analistaMaster' => 40,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 9,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-VNXE',
            'sow' => 'Instalação e configuração EMC VNXe Storage QuickStart',
            'status' => 1,
            'hora_analista' => 16,
            'analistaJunior' => 0,
            'analistaPleno' => 30,
            'analistaSenior' => 50,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 4,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-DAE',
            'sow' => 'Instalação e configuração uma nova DAE em sistema VNX / VNXe',
            'status' => 1,
            'hora_analista' => 8,
            'analistaJunior' => 0,
            'analistaPleno' => 50,
            'analistaSenior' => 30,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 2,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-M-DATA-BLCK',
            'sow' => 'Migração  BLOCO 1TB entre storages DELLEMC',
            'status' => 1,
            'hora_analista' => 1,
            'analistaJunior' => 0,
            'analistaPleno' => 60,
            'analistaSenior' => 30,
            'analistaMaster' => 10,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-M-DATA-UNI',
            'sow' => 'Migração  NAS 1TB entre sistema EMC²',
            'status' => 1,
            'hora_analista' => 1,
            'analistaJunior' => 0,
            'analistaPleno' => 10,
            'analistaSenior' => 60,
            'analistaMaster' => 30,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-VNX-MVIEW',
            'sow' => 'Implementação do software EMC MirrorView em VNX',
            'status' => 1,
            'hora_analista' => 16,
            'analistaJunior' => 0,
            'analistaPleno' => 20,
            'analistaSenior' => 60,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 4,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-VNX-QOS',
            'sow' => 'Implementação do software EMC Quality of Service em VNX',
            'status' => 1,
            'hora_analista' => 4,
            'analistaJunior' => 0,
            'analistaPleno' => 10,
            'analistaSenior' => 60,
            'analistaMaster' => 30,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 1,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-VNX-SNAP',
            'sow' => 'Instalação e configuração Local Protection Suite (Snapshots)',
            'status' => 1,
            'hora_analista' => 4,
            'analistaJunior' => 0,
            'analistaPleno' => 30,
            'analistaSenior' => 50,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 1,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-VNX-MER',
            'sow' => 'Instalação e configuração VNX Monitoring and Reporting',
            'status' => 1,
            'hora_analista' => 4,
            'analistaJunior' => 0,
            'analistaPleno' => 20,
            'analistaSenior' => 60,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 1,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-ESRS',
            'sow' => 'Instalação e configuração do monitoramento ESRS (Call-home)',
            'status' => 1,
            'hora_analista' => 4,
            'analistaJunior' => 0,
            'analistaPleno' => 50,
            'analistaSenior' => 30,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 1,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-C-HOST-UNIX',
            'sow' => 'Conexão  host ao sistema VNX - homologação/instalação agent/configuração lun (AIX/SOL/HPUX)',
            'status' => 1,
            'hora_analista' => 4,
            'analistaJunior' => 0,
            'analistaPleno' => 20,
            'analistaSenior' => 60,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 1,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-C-HOST-WIN',
            'sow' => 'Conexão  host ao sistema VNX - homologação/instalação agent/configuração lun (MICROSOFT)',
            'status' => 1,
            'hora_analista' => 4,
            'analistaJunior' => 0,
            'analistaPleno' => 50,
            'analistaSenior' => 30,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 1,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-HC-VPLEX',
            'sow' => 'EMC VPLEX Health Check',
            'status' => 1,
            'hora_analista' => 16,
            'analistaJunior' => 0,
            'analistaPleno' => 10,
            'analistaSenior' => 60,
            'analistaMaster' => 30,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 4,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-VPLEX-METRO',
            'sow' => 'Instalação e configuração  EMC VPLEX METRO',
            'status' => 1,
            'hora_analista' => 80,
            'analistaJunior' => 0,
            'analistaPleno' => 0,
            'analistaSenior' => 60,
            'analistaMaster' => 40,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 24,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-VPLEX-LOCAL',
            'sow' => 'Instalação e configuração  EMC VPLEX LOCAL',
            'status' => 1,
            'hora_analista' => 32,
            'analistaJunior' => 0,
            'analistaPleno' => 0,
            'analistaSenior' => 60,
            'analistaMaster' => 40,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 9,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-VPLEX-DM',
            'sow' => 'EMC VPLEX Storage Data Mobility',
            'status' => 1,
            'hora_analista' => 2,
            'analistaJunior' => 0,
            'analistaPleno' => 20,
            'analistaSenior' => 60,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-U-B2B',
            'sow' => 'VNX Block DIP Conversion',
            'status' => 1,
            'hora_analista' => 56,
            'analistaJunior' => 0,
            'analistaPleno' => 0,
            'analistaSenior' => 60,
            'analistaMaster' => 40,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 16,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-U-B2U',
            'sow' => 'VNX Block to Unified conversion',
            'status' => 1,
            'hora_analista' => 60,
            'analistaJunior' => 0,
            'analistaPleno' => 0,
            'analistaSenior' => 60,
            'analistaMaster' => 40,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 18,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-RPL-VNXE-NAS',
            'sow' => 'Replicação VNXe CIFS/NFS Shared Folders para VNX',
            'status' => 1,
            'hora_analista' => 40,
            'analistaJunior' => 0,
            'analistaPleno' => 30,
            'analistaSenior' => 50,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 12,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-VDP-REPAV',
            'sow' => 'Configuração de replicação entre sistemas VDP e Avamar',
            'status' => 1,
            'hora_analista' => 8,
            'analistaJunior' => 0,
            'analistaPleno' => 10,
            'analistaSenior' => 60,
            'analistaMaster' => 30,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 2,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-U-SAN-PPMP',
            'sow' => 'Atualização de versão de PowerPath',
            'status' => 1,
            'hora_analista' => 1,
            'analistaJunior' => 0,
            'analistaPleno' => 50,
            'analistaSenior' => 30,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-U-VNX-FE',
            'sow' => 'Instalação de módulo de IO em VNX',
            'status' => 1,
            'hora_analista' => 8,
            'analistaJunior' => 0,
            'analistaPleno' => 20,
            'analistaSenior' => 60,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 2,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-U-VNX-FIRM',
            'sow' => 'Upgrade de controladora VNX',
            'status' => 1,
            'hora_analista' => 12,
            'analistaJunior' => 0,
            'analistaPleno' => 40,
            'analistaSenior' => 40,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 3,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-VNXE-RCFGIP',
            'sow' => 'Reconfiguração de IPs (Gerência, iSCSI Servers e Shared Folders Servers)',
            'status' => 1,
            'hora_analista' => 8,
            'analistaJunior' => 0,
            'analistaPleno' => 40,
            'analistaSenior' => 40,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 2,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-VPLEX-HOST',
            'sow' => 'Planejamento e configuração para adição  novo Servidor ao Sistema VPLEX',
            'status' => 1,
            'hora_analista' => 4,
            'analistaJunior' => 0,
            'analistaPleno' => 20,
            'analistaSenior' => 60,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 1,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-VPLEX-STG',
            'sow' => 'Planejamento e configuração para adição  novo Storage Array ao Sistema VPLEX',
            'status' => 1,
            'hora_analista' => 4,
            'analistaJunior' => 0,
            'analistaPleno' => 20,
            'analistaSenior' => 60,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 1,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-HC-DD',
            'sow' => 'Data Domain Health Check',
            'status' => 1,
            'hora_analista' => 16,
            'analistaJunior' => 0,
            'analistaPleno' => 10,
            'analistaSenior' => 60,
            'analistaMaster' => 30,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 171,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 4,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-DD',
            'sow' => 'Instalação e configuração EMC Data Domain',
            'status' => 1,
            'hora_analista' => 40,
            'analistaJunior' => 0,
            'analistaPleno' => 20,
            'analistaSenior' => 60,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 171,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 12,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-DD-DAE',
            'sow' => 'Instalação e configuração  uma nova DAE em sistema DATA DOMAIN',
            'status' => 1,
            'hora_analista' => 8,
            'analistaJunior' => 0,
            'analistaPleno' => 50,
            'analistaSenior' => 30,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 171,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 2,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-DD-RPL',
            'sow' => 'Configuração  replicação entre sistemas Data Domain',
            'status' => 1,
            'hora_analista' => 4,
            'analistaJunior' => 0,
            'analistaPleno' => 20,
            'analistaSenior' => 60,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 171,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 1,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-DD-CIFS/NFS',
            'sow' => 'Configuração de compartilhamento CIFS/NFS para servidor',
            'status' => 1,
            'hora_analista' => 2,
            'analistaJunior' => 0,
            'analistaPleno' => 30,
            'analistaSenior' => 50,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 171,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-DD-VTL',
            'sow' => 'Instalação e configuração Data Domain VTL',
            'status' => 1,
            'hora_analista' => 4,
            'analistaJunior' => 0,
            'analistaPleno' => 30,
            'analistaSenior' => 50,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 171,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 1,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-DD-BOOST-MCSFT',
            'sow' => 'Instalação e configuração Data Domain BOOST for Microsoft Applications',
            'status' => 1,
            'hora_analista' => 8,
            'analistaJunior' => 0,
            'analistaPleno' => 30,
            'analistaSenior' => 50,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 171,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 2,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-DD-VE',
            'sow' => 'Instalação e configuração Data Domain Virtual Edition',
            'status' => 1,
            'hora_analista' => 24,
            'analistaJunior' => 0,
            'analistaPleno' => 20,
            'analistaSenior' => 60,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 171,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 7,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-U-DD-FE',
            'sow' => 'Upgrade de módulo de portas 1/10GbE para Data Domain',
            'status' => 1,
            'hora_analista' => 8,
            'analistaJunior' => 0,
            'analistaPleno' => 0,
            'analistaSenior' => 60,
            'analistaMaster' => 40,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 171,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 2,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-INT-DD',
            'sow' => 'Integração de Softwade de Backup com Data Doamin',
            'status' => 1,
            'hora_analista' => 3,
            'analistaJunior' => 0,
            'analistaPleno' => 40,
            'analistaSenior' => 40,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 171,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-HC-APPSYNC',
            'sow' => 'EMC AppSync Health Check',
            'status' => 1,
            'hora_analista' => 16,
            'analistaJunior' => 0,
            'analistaPleno' => 10,
            'analistaSenior' => 60,
            'analistaMaster' => 30,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 4,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-APPSYNC',
            'sow' => 'Instalação e configuração  EMC AppSync',
            'status' => 1,
            'hora_analista' => 16,
            'analistaJunior' => 0,
            'analistaPleno' => 10,
            'analistaSenior' => 60,
            'analistaMaster' => 30,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 4,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-APPSYNC-AGNT',
            'sow' => 'Instalação e confoguração  EMC AppSync agente',
            'status' => 1,
            'hora_analista' => 4,
            'analistaJunior' => 0,
            'analistaPleno' => 40,
            'analistaSenior' => 40,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 1,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-HC-NW',
            'sow' => 'EMC Networker Health Check',
            'status' => 1,
            'hora_analista' => 16,
            'analistaJunior' => 0,
            'analistaPleno' => 10,
            'analistaSenior' => 60,
            'analistaMaster' => 30,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 171,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 4,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-NW',
            'sow' => 'Instalação e configuração EMC Networker Server',
            'status' => 1,
            'hora_analista' => 24,
            'analistaJunior' => 0,
            'analistaPleno' => 10,
            'analistaSenior' => 60,
            'analistaMaster' => 30,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 171,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 7,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-NW-DD-BOOST',
            'sow' => 'Instalação e configuração EMC Networker com Data Domain DD Boost',
            'status' => 1,
            'hora_analista' => 8,
            'analistaJunior' => 0,
            'analistaPleno' => 0,
            'analistaSenior' => 60,
            'analistaMaster' => 40,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 171,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 2,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-NW-AGNT-NDMP',
            'sow' => 'Instalação e configuração do EMC Networker agente para NDMP',
            'status' => 1,
            'hora_analista' => 8,
            'analistaJunior' => 0,
            'analistaPleno' => 20,
            'analistaSenior' => 60,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 171,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 2,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-NW-AGNT-EXCH',
            'sow' => 'Instalação e configuração do EMC Networker agente para Microsoft Aplications / Exchange Server',
            'status' => 1,
            'hora_analista' => 4,
            'analistaJunior' => 0,
            'analistaPleno' => 30,
            'analistaSenior' => 50,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 171,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 1,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-NW-AGNT-SQL',
            'sow' => 'Instalação e configuração do EMC Networker agente para Microsoft Aplications / SQL Server',
            'status' => 1,
            'hora_analista' => 4,
            'analistaJunior' => 0,
            'analistaPleno' => 40,
            'analistaSenior' => 40,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 171,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 1,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-NW-AGNT-SHAR',
            'sow' => 'Instalação e configuração do EMC Networker agente para Microsoft Aplications / Sharepoint Server',
            'status' => 1,
            'hora_analista' => 4,
            'analistaJunior' => 0,
            'analistaPleno' => 30,
            'analistaSenior' => 50,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 171,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 1,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-NW-AGNT-WIN/LNX',
            'sow' => 'Instalação e configuração do EMC Networker agente para Windows / Linux',
            'status' => 1,
            'hora_analista' => 2,
            'analistaJunior' => 0,
            'analistaPleno' => 60,
            'analistaSenior' => 30,
            'analistaMaster' => 10,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 171,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-NW-STR-NODE',
            'sow' => 'Instalação e configuração do EMC Networker Storage Node',
            'status' => 1,
            'hora_analista' => 4,
            'analistaJunior' => 0,
            'analistaPleno' => 50,
            'analistaSenior' => 30,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 171,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 1,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-U-NW',
            'sow' => 'Planejamento, homologação e atualização do EMC Networker Server',
            'status' => 1,
            'hora_analista' => 12,
            'analistaJunior' => 0,
            'analistaPleno' => 10,
            'analistaSenior' => 60,
            'analistaMaster' => 30,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 171,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 3,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-U-NW-AGNT',
            'sow' => 'Homologação e atualização de EMC Networker agente',
            'status' => 1,
            'hora_analista' => 1,
            'analistaJunior' => 0,
            'analistaPleno' => 90,
            'analistaSenior' => 0,
            'analistaMaster' => 10,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 171,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-NW-RPL',
            'sow' => 'Configuração de replicação entre sistemas NETWORKER CLONE (10 Jobs)',
            'status' => 1,
            'hora_analista' => 14,
            'analistaJunior' => 0,
            'analistaPleno' => 30,
            'analistaSenior' => 50,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 171,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 4,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-HC-AV',
            'sow' => 'Avamar Health Check',
            'status' => 1,
            'hora_analista' => 16,
            'analistaJunior' => 0,
            'analistaPleno' => 10,
            'analistaSenior' => 60,
            'analistaMaster' => 30,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 171,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 4,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-AV-DT',
            'sow' => 'Instalação e configuração  EMC Avamar Data Transport',
            'status' => 1,
            'hora_analista' => 16,
            'analistaJunior' => 0,
            'analistaPleno' => 10,
            'analistaSenior' => 60,
            'analistaMaster' => 30,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 171,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 4,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-AV-DS-SN',
            'sow' => 'Instalação e configuração  EMC Avamar Data Store / Single Node',
            'status' => 1,
            'hora_analista' => 16,
            'analistaJunior' => 0,
            'analistaPleno' => 20,
            'analistaSenior' => 60,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 171,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 4,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-AV-DS-MN',
            'sow' => 'Instalação e configuração  EMC Avamar Data Store / Multi Node',
            'status' => 1,
            'hora_analista' => 16,
            'analistaJunior' => 0,
            'analistaPleno' => 10,
            'analistaSenior' => 60,
            'analistaMaster' => 30,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 171,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 4,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-AV-DSK/LPT',
            'sow' => 'Instalação e configuração  EMC Avamar Desktop / Laptop -  Pack 25 Agents',
            'status' => 1,
            'hora_analista' => 16,
            'analistaJunior' => 0,
            'analistaPleno' => 20,
            'analistaSenior' => 60,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 171,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 4,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-AV-VE',
            'sow' => 'Instalação e configuração  EMC Avamar Virtual Edition',
            'status' => 1,
            'hora_analista' => 16,
            'analistaJunior' => 0,
            'analistaPleno' => 20,
            'analistaSenior' => 60,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 171,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 4,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-AV-TP',
            'sow' => 'Instalação e configuração  EMC Avamar Tape Out',
            'status' => 1,
            'hora_analista' => 24,
            'analistaJunior' => 0,
            'analistaPleno' => 10,
            'analistaSenior' => 60,
            'analistaMaster' => 30,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 171,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 7,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-U-AV',
            'sow' => 'Planejamento e Migração  Avamar',
            'status' => 1,
            'hora_analista' => 16,
            'analistaJunior' => 0,
            'analistaPleno' => 30,
            'analistaSenior' => 50,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 171,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 4,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-AV-NDMP',
            'sow' => 'Instalação e configuração do EMC Avamar agente para NDMP',
            'status' => 1,
            'hora_analista' => 16,
            'analistaJunior' => 0,
            'analistaPleno' => 20,
            'analistaSenior' => 60,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 171,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 4,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-AV-AGNT-WIN/LNX',
            'sow' => 'Instalação e configuração do EMC Avamar agente para Windows / Linux',
            'status' => 1,
            'hora_analista' => 2,
            'analistaJunior' => 0,
            'analistaPleno' => 60,
            'analistaSenior' => 30,
            'analistaMaster' => 10,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 171,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-AV-RPL',
            'sow' => 'Configuração de replicação entre sistemas Avamar (10 Jobs)',
            'status' => 1,
            'hora_analista' => 24,
            'analistaJunior' => 0,
            'analistaPleno' => 20,
            'analistaSenior' => 60,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 171,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 7,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-HC-RP',
            'sow' => 'EMC RecoverPoint Health Check',
            'status' => 1,
            'hora_analista' => 16,
            'analistaJunior' => 0,
            'analistaPleno' => 10,
            'analistaSenior' => 60,
            'analistaMaster' => 30,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 171,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 4,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-RP-CE',
            'sow' => 'Instalação e configuração EMC RecoverPoint Cluster Enable',
            'status' => 1,
            'hora_analista' => 16,
            'analistaJunior' => 0,
            'analistaPleno' => 10,
            'analistaSenior' => 60,
            'analistaMaster' => 30,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 171,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 4,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-RP-CDP',
            'sow' => 'Instalação e configuração do Cluster EMC RecoverPoint CDP',
            'status' => 1,
            'hora_analista' => 16,
            'analistaJunior' => 0,
            'analistaPleno' => 30,
            'analistaSenior' => 50,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 171,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 4,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-RP-CRR',
            'sow' => 'Instalação e configuração do Cluster EMC RecoverPoint CRR',
            'status' => 1,
            'hora_analista' => 16,
            'analistaJunior' => 0,
            'analistaPleno' => 20,
            'analistaSenior' => 60,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 171,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 4,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-RP-CLR',
            'sow' => 'Instalação e configuração do Cluster EMC RecoverPoint CLR',
            'status' => 1,
            'hora_analista' => 16,
            'analistaJunior' => 0,
            'analistaPleno' => 20,
            'analistaSenior' => 60,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 171,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 4,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-SAN-24',
            'sow' => 'Implementação switch/módulo DELLEMC FC até 24 portas configurando zonning',
            'status' => 1,
            'hora_analista' => 16,
            'analistaJunior' => 0,
            'analistaPleno' => 20,
            'analistaSenior' => 60,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 135,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 4,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-SAN-48',
            'sow' => 'Implementação switch/módulo DELLEMC FC até 48 portas configurando zonning',
            'status' => 1,
            'hora_analista' => 24,
            'analistaJunior' => 0,
            'analistaPleno' => 20,
            'analistaSenior' => 60,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 135,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 7,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-ISL',
            'sow' => 'Configuração Inter-Switch Links (ISLs) - Brocade',
            'status' => 1,
            'hora_analista' => 8,
            'analistaJunior' => 0,
            'analistaPleno' => 30,
            'analistaSenior' => 50,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 135,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 2,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-SAN-24',
            'sow' => 'Implementação de switch/módulo DELLEMC FC até 24 portas configurando zonning',
            'status' => 1,
            'hora_analista' => 16,
            'analistaJunior' => 0,
            'analistaPleno' => 20,
            'analistaSenior' => 60,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 157,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 4,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-SAN-48',
            'sow' => 'Implementação de switch/módulo DELLEMC FC até 48 portas configurando zonning',
            'status' => 1,
            'hora_analista' => 24,
            'analistaJunior' => 0,
            'analistaPleno' => 20,
            'analistaSenior' => 60,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 157,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 7,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-U-SAN-24',
            'sow' => 'Reconfiguração de switch/módulo DELLEMC FC até 24 portas reconstruindo zonning',
            'status' => 1,
            'hora_analista' => 24,
            'analistaJunior' => 0,
            'analistaPleno' => 20,
            'analistaSenior' => 60,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 157,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 7,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-U-SAN-48',
            'sow' => 'Reconfiguração de switch/módulo DELLEMC FC até 48 portas reconstruindo zonning',
            'status' => 1,
            'hora_analista' => 28,
            'analistaJunior' => 0,
            'analistaPleno' => 20,
            'analistaSenior' => 60,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 157,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 8,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-HC-DPA',
            'sow' => 'Data Protector Advisor Health Check',
            'status' => 1,
            'hora_analista' => 16,
            'analistaJunior' => 0,
            'analistaPleno' => 10,
            'analistaSenior' => 60,
            'analistaMaster' => 30,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 171,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 4,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-DPA',
            'sow' => 'Implementação e configuração EMC Data Protector Advisor',
            'status' => 1,
            'hora_analista' => 8,
            'analistaJunior' => 0,
            'analistaPleno' => 20,
            'analistaSenior' => 60,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 171,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 2,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-C-DPA',
            'sow' => 'Customização EMC Data Protector Advisor',
            'status' => 1,
            'hora_analista' => 4,
            'analistaJunior' => 0,
            'analistaPleno' => 40,
            'analistaSenior' => 40,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 171,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 1,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-HC-ISN',
            'sow' => 'EMC Isilon Health Check',
            'status' => 1,
            'hora_analista' => 16,
            'analistaJunior' => 0,
            'analistaPleno' => 10,
            'analistaSenior' => 60,
            'analistaMaster' => 30,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 4,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-ISN',
            'sow' => 'Instalação e configuração EMC Isilon',
            'status' => 1,
            'hora_analista' => 24,
            'analistaJunior' => 0,
            'analistaPleno' => 0,
            'analistaSenior' => 60,
            'analistaMaster' => 40,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 7,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-ISN-NODE',
            'sow' => 'Adição de Node em Cluster Isilon existente (Obrigatório Isilon Health Check)',
            'status' => 1,
            'hora_analista' => 16,
            'analistaJunior' => 0,
            'analistaPleno' => 0,
            'analistaSenior' => 60,
            'analistaMaster' => 40,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 4,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-U-ISN',
            'sow' => 'EMC Isilon Software Upgrade (Por nó)',
            'status' => 1,
            'hora_analista' => 8,
            'analistaJunior' => 0,
            'analistaPleno' => 20,
            'analistaSenior' => 60,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 2,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-M-ISN-DM',
            'sow' => 'EMC Isilon Data Migration',
            'status' => 1,
            'hora_analista' => 8,
            'analistaJunior' => 0,
            'analistaPleno' => 10,
            'analistaSenior' => 60,
            'analistaMaster' => 30,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 2,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-ISN-CP',
            'sow' => 'Configuração do CloudPools no Cluster Isilon',
            'status' => 1,
            'hora_analista' => 24,
            'analistaJunior' => 0,
            'analistaPleno' => 20,
            'analistaSenior' => 60,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 7,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-ISN-SQ',
            'sow' => 'Configuração do Smart Quotas no Cluster Isilon',
            'status' => 1,
            'hora_analista' => 4,
            'analistaJunior' => 0,
            'analistaPleno' => 50,
            'analistaSenior' => 30,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 1,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-ISN-SP',
            'sow' => 'Configuração do Smart Pools no Cluster Isilon',
            'status' => 1,
            'hora_analista' => 16,
            'analistaJunior' => 0,
            'analistaPleno' => 40,
            'analistaSenior' => 40,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 4,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-ISN-SYNC',
            'sow' => 'Configuração do SyncIQ no Cluster Isilon',
            'status' => 1,
            'hora_analista' => 8,
            'analistaJunior' => 0,
            'analistaPleno' => 50,
            'analistaSenior' => 30,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 2,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-ISN-SNAP',
            'sow' => 'Configuração do SnapshotIQ no Cluster Isilon',
            'status' => 1,
            'hora_analista' => 8,
            'analistaJunior' => 0,
            'analistaPleno' => 30,
            'analistaSenior' => 50,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 2,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-ISN-LOCK',
            'sow' => 'Configuração do SmartLock no Cluster Isilon',
            'status' => 1,
            'hora_analista' => 40,
            'analistaJunior' => 0,
            'analistaPleno' => 10,
            'analistaSenior' => 60,
            'analistaMaster' => 30,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 12,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-XTREM-1',
            'sow' => 'Instalação e configuração EMC XtremIO QuickStart for 1 X-Brick',
            'status' => 1,
            'hora_analista' => 80,
            'analistaJunior' => 0,
            'analistaPleno' => 0,
            'analistaSenior' => 60,
            'analistaMaster' => 40,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 24,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-XTREM-2',
            'sow' => 'Instalação e configuração EMC XtremIO QuickStart for 2 X-Brick',
            'status' => 1,
            'hora_analista' => 104,
            'analistaJunior' => 0,
            'analistaPleno' => 0,
            'analistaSenior' => 60,
            'analistaMaster' => 40,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 31,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-XTREM-4',
            'sow' => 'Instalação e configuração EMC XtremIO QuickStart for 4 X-Brick',
            'status' => 1,
            'hora_analista' => 116,
            'analistaJunior' => 0,
            'analistaPleno' => 0,
            'analistaSenior' => 60,
            'analistaMaster' => 40,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 34,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-XTREM-6',
            'sow' => 'Instalação e configuração EMC XtremIO QuickStart for 6 X-Brick',
            'status' => 1,
            'hora_analista' => 124,
            'analistaJunior' => 0,
            'analistaPleno' => 0,
            'analistaSenior' => 60,
            'analistaMaster' => 40,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 37,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-XTREM-8',
            'sow' => 'Instalação e configuração EMC XtremIO QuickStart for 8 X-Brick',
            'status' => 1,
            'hora_analista' => 132,
            'analistaJunior' => 0,
            'analistaPleno' => 0,
            'analistaSenior' => 60,
            'analistaMaster' => 40,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 39,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-XTREM-RPL-1',
            'sow' => 'Configuração XtremIO Remote Basic Replication for 1 X-Brick',
            'status' => 1,
            'hora_analista' => 64,
            'analistaJunior' => 0,
            'analistaPleno' => 0,
            'analistaSenior' => 60,
            'analistaMaster' => 40,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 19,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-XTREM-RPL-2',
            'sow' => 'Configuração XtremIO Remote Basic Replication for 2 X-Brick',
            'status' => 1,
            'hora_analista' => 72,
            'analistaJunior' => 0,
            'analistaPleno' => 0,
            'analistaSenior' => 60,
            'analistaMaster' => 40,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 21,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-XTREM-RPL-4',
            'sow' => 'Configuração XtremIO Remote Basic Replication for 4 X-Brick',
            'status' => 1,
            'hora_analista' => 80,
            'analistaJunior' => 0,
            'analistaPleno' => 0,
            'analistaSenior' => 60,
            'analistaMaster' => 40,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 24,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-XTREM-RPL-6',
            'sow' => 'Configuração XtremIO Remote Basic Replication for 6 X-Brick',
            'status' => 1,
            'hora_analista' => 88,
            'analistaJunior' => 0,
            'analistaPleno' => 0,
            'analistaSenior' => 60,
            'analistaMaster' => 40,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 26,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-XTREM-RPL-8',
            'sow' => 'Configuração XtremIO Remote Basic Replication for 8 X-Brick',
            'status' => 1,
            'hora_analista' => 96,
            'analistaJunior' => 0,
            'analistaPleno' => 0,
            'analistaSenior' => 60,
            'analistaMaster' => 40,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 28,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-SCLIO-5SRVS',
            'sow' => 'EMC ScaleIO Quick Start',
            'status' => 1,
            'hora_analista' => 56,
            'analistaJunior' => 0,
            'analistaPleno' => 50,
            'analistaSenior' => 30,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 16,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-SAN-PPW',
            'sow' => 'Instalação do PowerPath Windows',
            'status' => 1,
            'hora_analista' => 4,
            'analistaJunior' => 0,
            'analistaPleno' => 20,
            'analistaSenior' => 60,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 1,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-SAN-PPL',
            'sow' => 'Instalação do PowerPath Linux',
            'status' => 1,
            'hora_analista' => 4,
            'analistaJunior' => 0,
            'analistaPleno' => 20,
            'analistaSenior' => 60,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 1,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-SAN-PPVM',
            'sow' => 'Instalação do PowerPath/VE',
            'status' => 1,
            'hora_analista' => 6,
            'analistaJunior' => 0,
            'analistaPleno' => 20,
            'analistaSenior' => 60,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 1,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-UNITYH',
            'sow' => 'Instalação e configuração do Unity Hybrid Block',
            'status' => 1,
            'hora_analista' => 24,
            'analistaJunior' => 0,
            'analistaPleno' => 10,
            'analistaSenior' => 60,
            'analistaMaster' => 30,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 7,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-UNITYA',
            'sow' => 'Instalação e configuração do Unity  All Flash Block',
            'status' => 1,
            'hora_analista' => 24,
            'analistaJunior' => 0,
            'analistaPleno' => 10,
            'analistaSenior' => 60,
            'analistaMaster' => 30,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 7,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-UNITYHNAS',
            'sow' => 'Instalação e configuração do Unity Hybrid Block/NAS',
            'status' => 1,
            'hora_analista' => 32,
            'analistaJunior' => 0,
            'analistaPleno' => 0,
            'analistaSenior' => 60,
            'analistaMaster' => 40,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 9,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-UNITYANAS',
            'sow' => 'Instalação e configuração do Unity  All Flash  Block/NAS',
            'status' => 1,
            'hora_analista' => 32,
            'analistaJunior' => 0,
            'analistaPleno' => 0,
            'analistaSenior' => 60,
            'analistaMaster' => 40,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 9,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-UNITY-DAE',
            'sow' => 'Instalação e configuração uma nova DAE no Unity',
            'status' => 1,
            'hora_analista' => 8,
            'analistaJunior' => 0,
            'analistaPleno' => 0,
            'analistaSenior' => 60,
            'analistaMaster' => 40,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 2,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-CUSTOM',
            'sow' => 'Serviço Customizado DELL EMC',
            'status' => 1,
            'hora_analista' => 0,
            'analistaJunior' => 0,
            'analistaPleno' => 0,
            'analistaSenior' => 60,
            'analistaMaster' => 40,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 174,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-PD30',
            'sow' => 'AirWatch Plan and Design for 30 users',
            'status' => 1,
            'hora_analista' => 16,
            'analistaJunior' => 0,
            'analistaPleno' => 20,
            'analistaSenior' => 60,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 189,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 4,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-I-MDM',
            'sow' => 'Airwatch - Implementation Mobile Device Management',
            'status' => 1,
            'hora_analista' => 16,
            'analistaJunior' => 0,
            'analistaPleno' => 30,
            'analistaSenior' => 50,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 189,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 4,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-I-CONTAINER',
            'sow' => 'Airwatch Container implementation',
            'status' => 1,
            'hora_analista' => 14,
            'analistaJunior' => 0,
            'analistaPleno' => 20,
            'analistaSenior' => 60,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 189,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 4,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-I-CTL-PLC',
            'sow' => 'Airwatch Catalog and Policies configure',
            'status' => 1,
            'hora_analista' => 20,
            'analistaJunior' => 0,
            'analistaPleno' => 0,
            'analistaSenior' => 60,
            'analistaMaster' => 40,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 189,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 6,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-I-INBOX',
            'sow' => 'Airwatch Inbox/Boxer configure',
            'status' => 1,
            'hora_analista' => 16,
            'analistaJunior' => 0,
            'analistaPleno' => 10,
            'analistaSenior' => 60,
            'analistaMaster' => 30,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 189,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 4,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-I-REPORT',
            'sow' => 'Airwatch report configure',
            'status' => 1,
            'hora_analista' => 8,
            'analistaJunior' => 0,
            'analistaPleno' => 30,
            'analistaSenior' => 50,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 189,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 2,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-U-AIR',
            'sow' => 'Atualização Ambiente AirWatch',
            'status' => 1,
            'hora_analista' => 60,
            'analistaJunior' => 0,
            'analistaPleno' => 0,
            'analistaSenior' => 60,
            'analistaMaster' => 40,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 189,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 18,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DYN-I-AGENT',
            'sow' => 'Instalação de 10 (dez) agentes adicionais em servidores físicos ou virtuais',
            'status' => 1,
            'hora_analista' => 2,
            'analistaJunior' => 0,
            'analistaPleno' => 30,
            'analistaSenior' => 50,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 169,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DYN-I-GATE',
            'sow' => 'Instalação de 1 (um) Active Gate adicional',
            'status' => 1,
            'hora_analista' => 1,
            'analistaJunior' => 0,
            'analistaPleno' => 30,
            'analistaSenior' => 50,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 169,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DYN-I-DASHBOARD',
            'sow' => 'Customização de 1 (um) dashboard adicional',
            'status' => 1,
            'hora_analista' => 1,
            'analistaJunior' => 0,
            'analistaPleno' => 30,
            'analistaSenior' => 50,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 169,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DYN-I-CHART',
            'sow' => 'Customização de 1 (um) gráfico adicional',
            'status' => 1,
            'hora_analista' => 1,
            'analistaJunior' => 0,
            'analistaPleno' => 30,
            'analistaSenior' => 50,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 169,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DYN-I-SYNTHETIC',
            'sow' => 'Configuração de 1 (um) monitor sintético de aplicação',
            'status' => 1,
            'hora_analista' => 1,
            'analistaJunior' => 0,
            'analistaPleno' => 30,
            'analistaSenior' => 50,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 169,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DYN-I-PROFILE',
            'sow' => 'Configuração de 1 (um) profile de alerta adicional',
            'status' => 1,
            'hora_analista' => 1,
            'analistaJunior' => 0,
            'analistaPleno' => 30,
            'analistaSenior' => 50,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 169,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IMS-BF-CUSTOM',
            'sow' => 'Servicos Gerenciados de Break and Fix',
            'status' => 1,
            'hora_analista' => 0,
            'analistaJunior' => 0,
            'analistaPleno' => 90,
            'analistaSenior' => 0,
            'analistaMaster' => 10,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 12,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VEEAM-CUSTOM',
            'sow' => 'Serviço customizado Veeam',
            'status' => 1,
            'hora_analista' => 0,
            'analistaJunior' => 0,
            'analistaPleno' => 10,
            'analistaSenior' => 60,
            'analistaMaster' => 30,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 190,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-PURE-CUSTOM',
            'sow' => 'Serviço customizado Pure',
            'status' => 1,
            'hora_analista' => 0,
            'analistaJunior' => 0,
            'analistaPleno' => 10,
            'analistaSenior' => 60,
            'analistaMaster' => 30,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 192,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-I-ESX-IC-VCH',
            'sow' => 'Configuração de VCH adicional no vSphere Integrated Containers',
            'status' => 1,
            'hora_analista' => 0,
            'analistaJunior' => 0,
            'analistaPleno' => 90,
            'analistaSenior' => 0,
            'analistaMaster' => 10,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 186,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-I-ESX-VDS',
            'sow' => 'Configuração de Switch lógico (VSS ou VDS) adicional',
            'status' => 1,
            'hora_analista' => 0,
            'analistaJunior' => 0,
            'analistaPleno' => 90,
            'analistaSenior' => 0,
            'analistaMaster' => 10,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 186,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-I-VSAN-EXP',
            'sow' => 'Expansão de área (discos/node) de um cluster vSAN',
            'status' => 1,
            'hora_analista' => 0,
            'analistaJunior' => 0,
            'analistaPleno' => 90,
            'analistaSenior' => 0,
            'analistaMaster' => 10,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 186,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-I-VSAN-SC',
            'sow' => 'Configuração do vSAN Stretched Cluster',
            'status' => 1,
            'hora_analista' => 0,
            'analistaJunior' => 0,
            'analistaPleno' => 90,
            'analistaSenior' => 0,
            'analistaMaster' => 10,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 186,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-U-VSAN',
            'sow' => 'Atualização de versão de um cluster vSAN',
            'status' => 1,
            'hora_analista' => 0,
            'analistaJunior' => 0,
            'analistaPleno' => 90,
            'analistaSenior' => 0,
            'analistaMaster' => 10,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 186,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-I-ESX-PG',
            'sow' => 'Configuração de 5 (cinco) port groups adicionais',
            'status' => 1,
            'hora_analista' => 0,
            'analistaJunior' => 0,
            'analistaPleno' => 90,
            'analistaSenior' => 0,
            'analistaMaster' => 10,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 186,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-I-ESX-IO',
            'sow' => 'Configuração de 1 (uma) política de I/O Control',
            'status' => 1,
            'hora_analista' => 0,
            'analistaJunior' => 0,
            'analistaPleno' => 90,
            'analistaSenior' => 0,
            'analistaMaster' => 10,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 186,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-DD-CLOUDTIER',
            'sow' => 'Habilitação do Cloud Tier no Data Domain',
            'status' => 1,
            'hora_analista' => 8,
            'analistaJunior' => 0,
            'analistaPleno' => 0,
            'analistaSenior' => 0,
            'analistaMaster' => 100,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 194,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 2,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-HC-SAN',
            'sow' => 'Health Check de estrutura SAN (96 portas)',
            'status' => 1,
            'hora_analista' => 32,
            'analistaJunior' => 0,
            'analistaPleno' => 0,
            'analistaSenior' => 0,
            'analistaMaster' => 100,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 194,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 9,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-U-SAN-MOD',
            'sow' => 'Upgrade de módulo de 8 portas em switch SAN',
            'status' => 1,
            'hora_analista' => 12,
            'analistaJunior' => 0,
            'analistaPleno' => 0,
            'analistaSenior' => 10,
            'analistaMaster' => 90,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 194,
            'bu1_id' => 1,
            'bu2_id' => 1,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 3,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-HC-ESX',
            'sow' => 'Health check de ambiente VMware  vCenter e vSphere (até 5 cinco hosts)',
            'status' => 1,
            'hora_analista' => 40,
            'analistaJunior' => 0,
            'analistaPleno' => 20,
            'analistaSenior' => 60,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 186,
            'bu1_id' => 2,
            'bu2_id' => 2,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 12,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-I-ESX',
            'sow' => 'Instalação e configuração do VMware vSphere',
            'status' => 1,
            'hora_analista' => 6,
            'analistaJunior' => 0,
            'analistaPleno' => 50,
            'analistaSenior' => 30,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 186,
            'bu1_id' => 2,
            'bu2_id' => 2,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 1,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-I-VCENTER',
            'sow' => 'Instalação e configuração de um VMware vCenter',
            'status' => 1,
            'hora_analista' => 16,
            'analistaJunior' => 0,
            'analistaPleno' => 20,
            'analistaSenior' => 60,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 186,
            'bu1_id' => 2,
            'bu2_id' => 2,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 4,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-U-ESX',
            'sow' => 'Atualização de versão do VMware vSphere',
            'status' => 1,
            'hora_analista' => 4,
            'analistaJunior' => 0,
            'analistaPleno' => 30,
            'analistaSenior' => 50,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 186,
            'bu1_id' => 2,
            'bu2_id' => 2,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 1,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-U-VCENTER',
            'sow' => 'Atualização de versão do VMware vCenter',
            'status' => 1,
            'hora_analista' => 8,
            'analistaJunior' => 0,
            'analistaPleno' => 30,
            'analistaSenior' => 50,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 186,
            'bu1_id' => 2,
            'bu2_id' => 2,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 2,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-I-NSX',
            'sow' => 'VMware Network Virtualization Design e implementação',
            'status' => 1,
            'hora_analista' => 80,
            'analistaJunior' => 0,
            'analistaPleno' => 0,
            'analistaSenior' => 60,
            'analistaMaster' => 40,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 188,
            'bu1_id' => 2,
            'bu2_id' => 2,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 24,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-M-P2V',
            'sow' => 'Migração de máquinha física/virtual para plataforma VMware',
            'status' => 1,
            'hora_analista' => 4,
            'analistaJunior' => 0,
            'analistaPleno' => 40,
            'analistaSenior' => 40,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 186,
            'bu1_id' => 2,
            'bu2_id' => 2,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 1,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-U-ESX-VTHV',
            'sow' => 'Atualização do VMware Tools e Hardware Virtual de até 5 (cinco) VMs',
            'status' => 1,
            'hora_analista' => 1,
            'analistaJunior' => 0,
            'analistaPleno' => 90,
            'analistaSenior' => 0,
            'analistaMaster' => 10,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 186,
            'bu1_id' => 2,
            'bu2_id' => 2,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-I-SRM',
            'sow' => 'Instalação e configuração do VMware Site Recovery Manager',
            'status' => 1,
            'hora_analista' => 60,
            'analistaJunior' => 0,
            'analistaPleno' => 20,
            'analistaSenior' => 60,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 186,
            'bu1_id' => 2,
            'bu2_id' => 2,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 18,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-I-CLOUD',
            'sow' => 'vRealize Cloud Automation Design e implementação',
            'status' => 1,
            'hora_analista' => 80,
            'analistaJunior' => 0,
            'analistaPleno' => 0,
            'analistaSenior' => 60,
            'analistaMaster' => 40,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 187,
            'bu1_id' => 2,
            'bu2_id' => 2,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 24,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-I-VRB',
            'sow' => 'vRealize Business',
            'status' => 1,
            'hora_analista' => 24,
            'analistaJunior' => 0,
            'analistaPleno' => 20,
            'analistaSenior' => 60,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 187,
            'bu1_id' => 2,
            'bu2_id' => 2,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 7,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-I-VOM',
            'sow' => 'vRealize Operation Manager',
            'status' => 1,
            'hora_analista' => 32,
            'analistaJunior' => 0,
            'analistaPleno' => 20,
            'analistaSenior' => 60,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 187,
            'bu1_id' => 2,
            'bu2_id' => 2,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 9,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-I-VLI',
            'sow' => 'vRealize Log Insight',
            'status' => 1,
            'hora_analista' => 16,
            'analistaJunior' => 0,
            'analistaPleno' => 40,
            'analistaSenior' => 40,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 187,
            'bu1_id' => 2,
            'bu2_id' => 2,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 4,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-I-VORCH',
            'sow' => 'vRealize Orchestrator',
            'status' => 1,
            'hora_analista' => 16,
            'analistaJunior' => 0,
            'analistaPleno' => 10,
            'analistaSenior' => 60,
            'analistaMaster' => 30,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 187,
            'bu1_id' => 2,
            'bu2_id' => 2,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 4,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-I-PCMDI',
            'sow' => 'Performance and Capacity Management Design e implementação',
            'status' => 1,
            'hora_analista' => 40,
            'analistaJunior' => 0,
            'analistaPleno' => 20,
            'analistaSenior' => 60,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 187,
            'bu1_id' => 2,
            'bu2_id' => 2,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 12,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-I-VOMU',
            'sow' => 'VMware vRealize Operations Manager Upgrade',
            'status' => 1,
            'hora_analista' => 24,
            'analistaJunior' => 0,
            'analistaPleno' => 30,
            'analistaSenior' => 50,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 187,
            'bu1_id' => 2,
            'bu2_id' => 2,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 7,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-U-VDI',
            'sow' => 'VMware Horizon® View - Upgrade',
            'status' => 1,
            'hora_analista' => 32,
            'analistaJunior' => 0,
            'analistaPleno' => 30,
            'analistaSenior' => 50,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 189,
            'bu1_id' => 2,
            'bu2_id' => 2,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 9,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-T-VDI-CITRIX',
            'sow' => 'VMware Horizon 6 Transition Service for Citrix XenApp',
            'status' => 1,
            'hora_analista' => 64,
            'analistaJunior' => 0,
            'analistaPleno' => 20,
            'analistaSenior' => 60,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 189,
            'bu1_id' => 2,
            'bu2_id' => 2,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 19,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-INT-VDI-CITRIX',
            'sow' => 'VMware Horizon 6 Integration Service for Citrix XenApp',
            'status' => 1,
            'hora_analista' => 32,
            'analistaJunior' => 0,
            'analistaPleno' => 20,
            'analistaSenior' => 60,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 189,
            'bu1_id' => 2,
            'bu2_id' => 2,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 9,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-I-MIRAGE',
            'sow' => 'VMware Mirage Design, planejamento e implementação',
            'status' => 1,
            'hora_analista' => 40,
            'analistaJunior' => 0,
            'analistaPleno' => 20,
            'analistaSenior' => 60,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 189,
            'bu1_id' => 2,
            'bu2_id' => 2,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 12,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-I-VDI-CS',
            'sow' => 'VMware Horizon® View - Security Server',
            'status' => 1,
            'hora_analista' => 8,
            'analistaJunior' => 0,
            'analistaPleno' => 30,
            'analistaSenior' => 50,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 189,
            'bu1_id' => 2,
            'bu2_id' => 2,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 2,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-I-VDI-COMP',
            'sow' => 'VMware Horizon® View - Composer',
            'status' => 1,
            'hora_analista' => 8,
            'analistaJunior' => 0,
            'analistaPleno' => 30,
            'analistaSenior' => 50,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 189,
            'bu1_id' => 2,
            'bu2_id' => 2,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 2,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-I-VDI-TPL',
            'sow' => 'VMware Horizon® View - Template',
            'status' => 1,
            'hora_analista' => 8,
            'analistaJunior' => 0,
            'analistaPleno' => 30,
            'analistaSenior' => 50,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 189,
            'bu1_id' => 2,
            'bu2_id' => 2,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 2,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-I-VDI-POOL250',
            'sow' => 'VMware Horizon® View - Pool para 250 DVS',
            'status' => 1,
            'hora_analista' => 12,
            'analistaJunior' => 0,
            'analistaPleno' => 30,
            'analistaSenior' => 50,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 189,
            'bu1_id' => 2,
            'bu2_id' => 2,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 3,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-I-VDI-RDSH',
            'sow' => 'ent',
            'status' => 1,
            'hora_analista' => 12,
            'analistaJunior' => 0,
            'analistaPleno' => 30,
            'analistaSenior' => 50,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 189,
            'bu1_id' => 2,
            'bu2_id' => 2,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 3,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-I-VDI-RDSH1',
            'sow' => 'VMware Horizon® View - RDSH Server adcicional',
            'status' => 1,
            'hora_analista' => 1,
            'analistaJunior' => 0,
            'analistaPleno' => 30,
            'analistaSenior' => 50,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 189,
            'bu1_id' => 2,
            'bu2_id' => 2,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-I-VCENTER-LM',
            'sow' => 'Configuração VMware vCenter Linked Mode',
            'status' => 1,
            'hora_analista' => 40,
            'analistaJunior' => 0,
            'analistaPleno' => 10,
            'analistaSenior' => 60,
            'analistaMaster' => 30,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 186,
            'bu1_id' => 2,
            'bu2_id' => 2,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 12,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-I-NSX-VDI',
            'sow' => 'Implementação do NSX para ambiente de VDI',
            'status' => 1,
            'hora_analista' => 140,
            'analistaJunior' => 0,
            'analistaPleno' => 10,
            'analistaSenior' => 60,
            'analistaMaster' => 30,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 188,
            'bu1_id' => 2,
            'bu2_id' => 2,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 42,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-I-VDI-CON',
            'sow' => 'VMware Horizon® View - Connection Server',
            'status' => 1,
            'hora_analista' => 8,
            'analistaJunior' => 0,
            'analistaPleno' => 30,
            'analistaSenior' => 50,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 189,
            'bu1_id' => 2,
            'bu2_id' => 2,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 2,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-I-VR',
            'sow' => 'Instalação e configuração vSphere Replication para até 25 VMs',
            'status' => 1,
            'hora_analista' => 20,
            'analistaJunior' => 0,
            'analistaPleno' => 20,
            'analistaSenior' => 60,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 186,
            'bu1_id' => 2,
            'bu2_id' => 2,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 6,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-MSFT-I-HYVC',
            'sow' => 'Instalação Failover Cluster Hyper-V',
            'status' => 1,
            'hora_analista' => 24,
            'analistaJunior' => 0,
            'analistaPleno' => 40,
            'analistaSenior' => 40,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 194,
            'bu1_id' => 2,
            'bu2_id' => 2,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 7,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-I-VRA',
            'sow' => 'vRealize Automation',
            'status' => 1,
            'hora_analista' => 80,
            'analistaJunior' => 0,
            'analistaPleno' => 20,
            'analistaSenior' => 60,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 187,
            'bu1_id' => 2,
            'bu2_id' => 2,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 24,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-I-VIC',
            'sow' => 'vSphere Integrated Containers',
            'status' => 1,
            'hora_analista' => 40,
            'analistaJunior' => 0,
            'analistaPleno' => 10,
            'analistaSenior' => 60,
            'analistaMaster' => 30,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 187,
            'bu1_id' => 2,
            'bu2_id' => 2,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 12,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-I-VRA-BLUE',
            'sow' => 'vRealize Automation Blue Prints',
            'status' => 1,
            'hora_analista' => 16,
            'analistaJunior' => 0,
            'analistaPleno' => 20,
            'analistaSenior' => 60,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 187,
            'bu1_id' => 2,
            'bu2_id' => 2,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 4,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-I-VRA-LIFE',
            'sow' => 'vRealize Lifecycle',
            'status' => 1,
            'hora_analista' => 24,
            'analistaJunior' => 0,
            'analistaPleno' => 20,
            'analistaSenior' => 60,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 187,
            'bu1_id' => 2,
            'bu2_id' => 2,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 7,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-CUSTOM',
            'sow' => 'Serviço Customizado VMware',
            'status' => 1,
            'hora_analista' => 0,
            'analistaJunior' => 0,
            'analistaPleno' => 20,
            'analistaSenior' => 60,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 185,
            'bu1_id' => 2,
            'bu2_id' => 2,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-MSFT-I-HY',
            'sow' => 'Instalação do Hyper-V',
            'status' => 1,
            'hora_analista' => 12,
            'analistaJunior' => 0,
            'analistaPleno' => 40,
            'analistaSenior' => 40,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 194,
            'bu1_id' => 2,
            'bu2_id' => 2,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 3,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-C-HOST-VM/LNX',
            'sow' => 'Conexão  host ao sistema VNX - homologação/instalação agent/configuração lun (LINUX/VMWARE)',
            'status' => 1,
            'hora_analista' => 4,
            'analistaJunior' => 0,
            'analistaPleno' => 30,
            'analistaSenior' => 50,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 166,
            'bu1_id' => 2,
            'bu2_id' => 2,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 1,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-NW-AGNT-VM/HYV',
            'sow' => 'Instalação e configuração do EMC Networker agente para VMware ou Hyper-V',
            'status' => 1,
            'hora_analista' => 4,
            'analistaJunior' => 0,
            'analistaPleno' => 30,
            'analistaSenior' => 50,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 171,
            'bu1_id' => 2,
            'bu2_id' => 2,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 1,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-AV-AGNT-VM/HYV',
            'sow' => 'Instalação e configuração do EMC Avamar agente para VMware ou Hyper-V (Por vCenter/System Center)',
            'status' => 1,
            'hora_analista' => 4,
            'analistaJunior' => 0,
            'analistaPleno' => 30,
            'analistaSenior' => 50,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 171,
            'bu1_id' => 2,
            'bu2_id' => 2,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 1,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-I-VCENTER-HA',
            'sow' => 'Instalação e configuração VMware vCenter em Alta Disponibilidade',
            'status' => 1,
            'hora_analista' => 0,
            'analistaJunior' => 0,
            'analistaPleno' => 90,
            'analistaSenior' => 0,
            'analistaMaster' => 10,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 186,
            'bu1_id' => 2,
            'bu2_id' => 2,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-I-ESX-VIC',
            'sow' => 'Instalação e configuração do vSphere Integrated Containers',
            'status' => 1,
            'hora_analista' => 0,
            'analistaJunior' => 0,
            'analistaPleno' => 90,
            'analistaSenior' => 0,
            'analistaMaster' => 10,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 186,
            'bu1_id' => 2,
            'bu2_id' => 2,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-I-LI',
            'sow' => 'Instalação e configuração do vRealize Log Insight',
            'status' => 1,
            'hora_analista' => 0,
            'analistaJunior' => 0,
            'analistaPleno' => 90,
            'analistaSenior' => 0,
            'analistaMaster' => 10,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 186,
            'bu1_id' => 2,
            'bu2_id' => 2,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-I-ESX-REPL-VMS',
            'sow' => 'Configuração de 5 (cinco) VMs adicionais no vSphere Replication',
            'status' => 1,
            'hora_analista' => 0,
            'analistaJunior' => 0,
            'analistaPleno' => 90,
            'analistaSenior' => 0,
            'analistaMaster' => 10,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 186,
            'bu1_id' => 2,
            'bu2_id' => 2,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-I-SRM-VM',
            'sow' => 'Configuração de 5 (cinco) VMs adicionais no VMware Site Recovery Manager',
            'status' => 1,
            'hora_analista' => 0,
            'analistaJunior' => 0,
            'analistaPleno' => 90,
            'analistaSenior' => 0,
            'analistaMaster' => 10,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 186,
            'bu1_id' => 2,
            'bu2_id' => 2,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-U-ESX-VIC',
            'sow' => 'Atualização de versão do vSphere Integrated Container',
            'status' => 1,
            'hora_analista' => 0,
            'analistaJunior' => 0,
            'analistaPleno' => 90,
            'analistaSenior' => 0,
            'analistaMaster' => 10,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 186,
            'bu1_id' => 2,
            'bu2_id' => 2,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-U-APPDEF',
            'sow' => 'Atualização de versão do vSphere App Defense',
            'status' => 1,
            'hora_analista' => 0,
            'analistaJunior' => 0,
            'analistaPleno' => 90,
            'analistaSenior' => 0,
            'analistaMaster' => 10,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 186,
            'bu1_id' => 2,
            'bu2_id' => 2,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-U-LI',
            'sow' => 'Atualização de versão do vRealize Log Insight',
            'status' => 1,
            'hora_analista' => 0,
            'analistaJunior' => 0,
            'analistaPleno' => 90,
            'analistaSenior' => 0,
            'analistaMaster' => 10,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 186,
            'bu1_id' => 2,
            'bu2_id' => 2,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-U-VR',
            'sow' => 'Atualização de versão do vSphere Replication',
            'status' => 1,
            'hora_analista' => 0,
            'analistaJunior' => 0,
            'analistaPleno' => 90,
            'analistaSenior' => 0,
            'analistaMaster' => 10,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 186,
            'bu1_id' => 2,
            'bu2_id' => 2,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-U-SRM',
            'sow' => 'Atualização de versão do VMware Site Recovery Manager',
            'status' => 1,
            'hora_analista' => 0,
            'analistaJunior' => 0,
            'analistaPleno' => 90,
            'analistaSenior' => 0,
            'analistaMaster' => 10,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 186,
            'bu1_id' => 2,
            'bu2_id' => 2,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-M-SVM',
            'sow' => 'Migração de 1TB de dados entre datastores VMware (Storage vMotion)',
            'status' => 1,
            'hora_analista' => 0,
            'analistaJunior' => 0,
            'analistaPleno' => 90,
            'analistaSenior' => 0,
            'analistaMaster' => 10,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 186,
            'bu1_id' => 2,
            'bu2_id' => 2,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-C-DR',
            'sow' => 'Acompanhamento de Teste DR em plataforma VMware',
            'status' => 1,
            'hora_analista' => 0,
            'analistaJunior' => 0,
            'analistaPleno' => 90,
            'analistaSenior' => 0,
            'analistaMaster' => 10,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 186,
            'bu1_id' => 2,
            'bu2_id' => 2,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-HC-ESX-HOST',
            'sow' => 'Health check de ambiente VMware  vCenter e vSphere - Host adicional',
            'status' => 1,
            'hora_analista' => 0,
            'analistaJunior' => 0,
            'analistaPleno' => 90,
            'analistaSenior' => 0,
            'analistaMaster' => 10,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 186,
            'bu1_id' => 2,
            'bu2_id' => 2,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-HC-VSAN',
            'sow' => 'Health check de ambiente VMware vSAN (cluster de até 5 hosts)',
            'status' => 1,
            'hora_analista' => 0,
            'analistaJunior' => 0,
            'analistaPleno' => 90,
            'analistaSenior' => 0,
            'analistaMaster' => 10,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 186,
            'bu1_id' => 2,
            'bu2_id' => 2,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-HC-VSAN-HOST',
            'sow' => 'Health check de ambiente VMware vSAN - Host adicional',
            'status' => 1,
            'hora_analista' => 0,
            'analistaJunior' => 0,
            'analistaPleno' => 90,
            'analistaSenior' => 0,
            'analistaMaster' => 10,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 186,
            'bu1_id' => 2,
            'bu2_id' => 2,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IMS-VCPP',
            'sow' => 'Serviço Gerenciado de infraestrutura VMware VCPP',
            'status' => 1,
            'hora_analista' => 0,
            'analistaJunior' => 0,
            'analistaPleno' => 90,
            'analistaSenior' => 0,
            'analistaMaster' => 10,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 12,
            'bu1_id' => 2,
            'bu2_id' => 2,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-VM-I-WORKSPACE',
            'sow' => 'Workspace Portal Design, planejamento e implementação',
            'status' => 1,
            'hora_analista' => 32,
            'analistaJunior' => 0,
            'analistaPleno' => 30,
            'analistaSenior' => 50,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 189,
            'bu1_id' => 3,
            'bu2_id' => 3,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 9,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-ORCL-I-ENT-MGR',
            'sow' => 'Oracle Enterprise Manager',
            'status' => 1,
            'hora_analista' => 40,
            'analistaJunior' => 0,
            'analistaPleno' => 0,
            'analistaSenior' => 60,
            'analistaMaster' => 40,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 120,
            'bu1_id' => 3,
            'bu2_id' => 3,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 12,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-ORCL-I-LNX',
            'sow' => 'Oracle Linux',
            'status' => 1,
            'hora_analista' => 4,
            'analistaJunior' => 0,
            'analistaPleno' => 30,
            'analistaSenior' => 50,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 179,
            'bu1_id' => 3,
            'bu2_id' => 3,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 1,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-ORCL-I-RAC',
            'sow' => 'Oracle Real Application Clusters',
            'status' => 1,
            'hora_analista' => 40,
            'analistaJunior' => 0,
            'analistaPleno' => 0,
            'analistaSenior' => 60,
            'analistaMaster' => 40,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 120,
            'bu1_id' => 3,
            'bu2_id' => 3,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 12,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-ORCL-I-EXA',
            'sow' => 'Oracle Exadata Database Machine',
            'status' => 1,
            'hora_analista' => 40,
            'analistaJunior' => 0,
            'analistaPleno' => 0,
            'analistaSenior' => 60,
            'analistaMaster' => 40,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 176,
            'bu1_id' => 3,
            'bu2_id' => 3,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 12,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-ORCL-I-SOLARIS',
            'sow' => 'Oracle Solaris',
            'status' => 1,
            'hora_analista' => 16,
            'analistaJunior' => 0,
            'analistaPleno' => 30,
            'analistaSenior' => 50,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 179,
            'bu1_id' => 3,
            'bu2_id' => 3,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 4,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-ORCL-I-ODA',
            'sow' => 'Oracle Database Appliance',
            'status' => 1,
            'hora_analista' => 40,
            'analistaJunior' => 0,
            'analistaPleno' => 30,
            'analistaSenior' => 50,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 176,
            'bu1_id' => 3,
            'bu2_id' => 3,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 12,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-ORCL-I-SRV-T5',
            'sow' => 'SPARC T Series',
            'status' => 1,
            'hora_analista' => 32,
            'analistaJunior' => 0,
            'analistaPleno' => 40,
            'analistaSenior' => 40,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 176,
            'bu1_id' => 3,
            'bu2_id' => 3,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 9,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-ORCL-M-DATA',
            'sow' => 'Migração de 1TB bases Oracle utilizando o DataGuard',
            'status' => 1,
            'hora_analista' => 0,
            'analistaJunior' => 0,
            'analistaPleno' => 0,
            'analistaSenior' => 60,
            'analistaMaster' => 40,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 120,
            'bu1_id' => 3,
            'bu2_id' => 3,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-ORCL-M-RMAN',
            'sow' => 'Migração  1TB bases Oracle utilizando o RMAN',
            'status' => 1,
            'hora_analista' => 0,
            'analistaJunior' => 0,
            'analistaPleno' => 0,
            'analistaSenior' => 60,
            'analistaMaster' => 40,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 120,
            'bu1_id' => 3,
            'bu2_id' => 3,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-ORCL-M-TABLE',
            'sow' => 'Migração  1TB bases Oracle utilizando o Transportable Tablespace',
            'status' => 1,
            'hora_analista' => 0,
            'analistaJunior' => 0,
            'analistaPleno' => 0,
            'analistaSenior' => 60,
            'analistaMaster' => 40,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 120,
            'bu1_id' => 3,
            'bu2_id' => 3,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-ORCL-I-PART',
            'sow' => 'Instalação / Configuração Oracle Partitioning',
            'status' => 1,
            'hora_analista' => 0,
            'analistaJunior' => 0,
            'analistaPleno' => 0,
            'analistaSenior' => 60,
            'analistaMaster' => 40,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 120,
            'bu1_id' => 3,
            'bu2_id' => 3,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-ORCL-I-BAN',
            'sow' => 'Criação de até 1 (um) banco de dados Oracle',
            'status' => 1,
            'hora_analista' => 8,
            'analistaJunior' => 0,
            'analistaPleno' => 10,
            'analistaSenior' => 60,
            'analistaMaster' => 30,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 120,
            'bu1_id' => 3,
            'bu2_id' => 3,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 2,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-ORCL-CUSTOM',
            'sow' => 'Serviço Customizado Oracle',
            'status' => 1,
            'hora_analista' => 0,
            'analistaJunior' => 0,
            'analistaPleno' => 0,
            'analistaSenior' => 60,
            'analistaMaster' => 40,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 177,
            'bu1_id' => 3,
            'bu2_id' => 3,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 0,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-DD-BOOST',
            'sow' => 'Instalação e configuração Oracle Enterprise Applications Data Domain BOOST',
            'status' => 1,
            'hora_analista' => 8,
            'analistaJunior' => 0,
            'analistaPleno' => 20,
            'analistaSenior' => 60,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 171,
            'bu1_id' => 3,
            'bu2_id' => 3,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 2,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-NW-AGNT-ORCL/LOTUS',
            'sow' => 'Instalação e configuração do EMC Networker agente para Database Application / Oracle Databases - Lot',
            'status' => 1,
            'hora_analista' => 6,
            'analistaJunior' => 0,
            'analistaPleno' => 10,
            'analistaSenior' => 60,
            'analistaMaster' => 30,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 171,
            'bu1_id' => 3,
            'bu2_id' => 3,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 1,
            'valor' => 20000,
]);


PartNumbers::create([

            'typePartNumber' => 'ISE',
            'nameParNumber' => 'SV-IPS-DELLEMC-I-AV-AGNT-ORCL/EXCH/SQL',
            'sow' => 'Instalação e configuração do EMC Avamar agente para Oracle/Exchange/SQL',
            'status' => 1,
            'hora_analista' => 4,
            'analistaJunior' => 0,
            'analistaPleno' => 30,
            'analistaSenior' => 50,
            'analistaMaster' => 20,
            'manufacturers_id' => 1,
            'groups_id' => 1,
            'familia_id' => 171,
            'bu1_id' => 3,
            'bu2_id' => 3,
            'ipmJunior' => 0,
            'ipmPleno' => 0,
            'ipmSenior' => 100,
            'ipmMaster' => 0,
            'hora_ipm' => 1,
            'valor' => 20000,
]);




        

    }
}
