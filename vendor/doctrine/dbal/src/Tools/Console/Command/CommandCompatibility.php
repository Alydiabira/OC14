<?php

declare(strict_types=1);

namespace Doctrine\DBAL\Tools\Console\Command;

use ReflectionMethod;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

<<<<<<< HEAD
if ((new ReflectionMethod(Command::class, 'execute'))->hasReturnType()) {
    /** @internal */
    trait CommandCompatibility
    {
=======
// Symfony 8
if ((new ReflectionMethod(Command::class, 'configure'))->hasReturnType()) {
    /** @internal */
    trait CommandCompatibility
    {
        protected function configure(): void
        {
            $this->doConfigure();
        }

        protected function execute(InputInterface $input, OutputInterface $output): int
        {
            return $this->doExecute($input, $output);
        }
    }
// Symfony 7
} elseif ((new ReflectionMethod(Command::class, 'execute'))->hasReturnType()) {
    /** @internal */
    trait CommandCompatibility
    {
        /** @return void */
        protected function configure()
        {
            $this->doConfigure();
        }

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        protected function execute(InputInterface $input, OutputInterface $output): int
        {
            return $this->doExecute($input, $output);
        }
    }
} else {
    /** @internal */
    trait CommandCompatibility
    {
<<<<<<< HEAD
=======
        /** @return void */
        protected function configure()
        {
            $this->doConfigure();
        }

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        /**
         * {@inheritDoc}
         *
         * @return int
         */
        protected function execute(InputInterface $input, OutputInterface $output)
        {
            return $this->doExecute($input, $output);
        }
    }
}
