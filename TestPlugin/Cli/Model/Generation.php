<?php
namespace TestPlugin\Cli\Model;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
class Generation extends Command
{
    public function configure()
    {
        $this->setName('generation:clean')->setDescription('Clean Generation Folder');
        parent::configure();
    }
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        system("rm -r generated/*");
        $output->writeln('Generation Folder Clean Successfully.');
    }
}
