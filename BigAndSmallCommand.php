<?php
namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class BigAndSmallCommand extends Command{
    public function configure()
    {
        $this->setName('app:BigAndSmall')->addArgument(InputArgument::REQUIRED,'Sayı Giriniz!!');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $number=$input->getArgument('number');
        $big=0;
        $small=0;
        $rand=0;
        $numbers=[];

        for ($i=0;$i<$number;$i++){
            $rand=rand(1,1000);
            $numbers[$i]=$rand;

            if ($big<$rand){
                $big=$rand;
            }
            if ($small>$rand){
                $small=$rand;
            }
        }

        $output->writeln('En Büyük Sayı: '.$big.' En Küçük Sayı: '.$small.' Sayılar: '.$numbers);
    }
}