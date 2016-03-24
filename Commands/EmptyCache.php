<?php

namespace Reea\CLI\Commands;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Command\Command;

class EmptyCache extends Command
{
    public function __construct()
    {
        parent::__construct();
    }
    
    protected function configure()
    {
        $this->setName('cache:empty');
        $this->setDescription ('Empty cache var folder and public/static from the command line');
        $this->addArgument(
            'name'
            
        );
        parent::configure();
    }
    
    protected function execute(InputInterface $input,OutputInterface $output)
    {
        $output->writeln("Start cleaning....");
        $path1 = 'var/view_preprocessed';
        $path2 = 'var/cache';
        $path3 = 'var/page_cache';
        $path4 = 'var/generation';
        $path5 = 'pub/static/_requirejs';
        $path6 = 'pub/static/frontend';
        $path7 = 'pub/static/adminhtml';
        
        if (PHP_OS === 'Windows')
           {
               exec("rd /s /q {$path1}");
               $output->writeln('<comment>var/view_preprocessed: is now EMPTY</comment>');
               exec("rd /s /q {$path2}");
               $output->writeln('<comment>var/cache: is now EMPTY</comment>');
               exec("rd /s /q {$path3}");
               $output->writeln('<comment>var/page_cache: is now EMPTY</comment>');
               exec("rd /s /q {$path4}");
               $output->writeln('<comment>var/generation: is now EMPTY</comment>');
               exec("rd /s /q {$path5}");
               $output->writeln('<comment>pub/static/_requirejs: is now EMPTY</comment>');
               exec("rd /s /q {$path6}");
               $output->writeln('<comment>pub/static/frontend: is now EMPTY</comment>');
               exec("rd /s /q {$path7}");
               $output->writeln('<comment>pub/static/adminhtml: is now EMPTY</comment>');
           }
        else
           {
               exec("rm -rf {$path1}");
               $output->writeln('<comment>var/view_preprocessed: is now EMPTY</comment>');
               exec("rm -rf {$path2}");
               $output->writeln('<comment>var/cache: is now EMPTY</comment>');
               exec("rm -rf {$path3}");
               $output->writeln('<comment>var/page_cache: is now EMPTY</comment>');
               exec("rm -rf {$path4}");
               $output->writeln('<comment>var/generation: is now EMPTY</comment>');
               exec("rm -rf {$path5}");
               $output->writeln('<comment>pub/static/_requirejs: is now EMPTY</comment>');
               exec("rm -rf {$path6}");
               $output->writeln('<comment>pub/static/frontend: is now EMPTY</comment>');
               exec("rm -rf {$path7}");
               $output->writeln('<comment>pub/static/adminhtml: is now EMPTY</comment>');
           }


        $output->writeln('<info>Folders cleared</info>');
        return 0;
    }
}

