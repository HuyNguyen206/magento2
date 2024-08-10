<?php

namespace Mastering\SampleModule\Plugin;

use Mastering\SampleModule\Console\Command\AddItem;

class Logger
{
    private $output;
    public function beforeRun(
        AddItem                                           $command,
        \Symfony\Component\Console\Input\InputInterface   $input,
        \Symfony\Component\Console\Output\OutputInterface $output
    )
    {
        $output->writeln('before Execute');
    }

    public function aroundRun(
        AddItem $command,
        \Closure $proceed,
        \Symfony\Component\Console\Input\InputInterface $input,
        \Symfony\Component\Console\Output\OutputInterface $output
    )
    {
        $output->writeln('aroundExecute before call');
        $proceed->call($command, $input, $output);
        $output->writeln('aroundExecute after call');
        $this->output = $output;
    }

    public function afterRun(AddItem $command, $result)
    {
        $this->output->writeln('after execute ' . '-' . $result);

        return 1;
    }
}
