<?php

namespace Vich\UploaderBundle\Command;

<<<<<<< HEAD
=======
use Symfony\Component\Console\Attribute\AsCommand;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Completion\CompletionInput;
use Symfony\Component\Console\Completion\CompletionSuggestions;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Vich\UploaderBundle\Exception\MappingNotFoundException;

<<<<<<< HEAD
=======
#[AsCommand(name: 'vich:mapping:debug', description: 'Debug a mapping.')]
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
final class MappingDebugCommand extends Command
{
    public function __construct(private readonly array $mappings)
    {
        parent::__construct();
    }

<<<<<<< HEAD
    public static function getDefaultName(): string
    {
        return 'vich:mapping:debug';
    }

    protected function configure(): void
    {
        $this
            ->setName('vich:mapping:debug')
            ->setDescription('Debug a mapping.')
            ->addArgument('mapping', InputArgument::REQUIRED, 'The mapping to debug.')
        ;
=======
    protected function configure(): void
    {
        $this->addArgument('mapping', InputArgument::REQUIRED, 'The mapping to debug.');
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $mapping = $input->getArgument('mapping');

        if (!isset($this->mappings[$mapping])) {
            throw new MappingNotFoundException(\sprintf('Mapping "%s" does not exist.', $mapping));
        }

        $output->writeln(\sprintf('Debug information for mapping <info>%s</info>', $mapping));

        foreach ($this->mappings[$mapping] as $key => $value) {
            $output->writeln(\sprintf('<comment>%s</comment>: %s', $key, \var_export($value, true)));
        }

        return self::SUCCESS;
    }

    public function complete(CompletionInput $input, CompletionSuggestions $suggestions): void
    {
        if ($input->mustSuggestArgumentValuesFor('mapping')) {
            $suggestions->suggestValues(\array_keys($this->mappings));
        }
    }
}
